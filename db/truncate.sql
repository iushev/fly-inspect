DO $$
DECLARE
    r record;
    numparameters int;
    i int;
    paramtext text;
BEGIN

    FOR r IN
        SELECT
            nsp.nspname as "schema",
            cls.relname as "tablename"
        FROM
            pg_class cls
            INNER JOIN pg_roles rol on rol.oid = cls.relowner
            INNER JOIN pg_namespace nsp on nsp.oid = cls.relnamespace
        WHERE nsp.nspname not IN ('information_schema', 'pg_catalog')
            and nsp.nspname NOT LIKE 'pg_toast%'
            AND cls.relkind = 'r'  -- TABLE
            and rol.rolname = current_user
    LOOP
        IF EXISTS(SELECT 1
                    FROM
                        pg_class cls
                        INNER JOIN pg_namespace nsp on nsp.oid = cls.relnamespace
                    WHERE
                        nsp.nspname = r."schema"
                        and cls.relname = r."tablename")
        THEN
            EXECUTE 'DROP TABLE ' || quote_ident(r."schema") || '.' || quote_ident(r."tablename") || ' CASCADE;';
        END IF;
    END LOOP;

    FOR r IN
        SELECT
            nsp.nspname as "schema",
            prc.proname as "procname",
            prc.proargtypes
        FROM
            pg_proc prc
            INNER JOIN pg_roles rol on rol.oid = prc.proowner
            INNER JOIN pg_namespace nsp on nsp.oid = prc.pronamespace
        WHERE nsp.nspname not IN ('information_schema', 'pg_catalog')
            and nsp.nspname NOT LIKE 'pg_toast%'
            and rol.rolname = current_user
    LOOP
        --for some reason array_upper is off by one for the oidvector type, hence the +1
        numparameters := array_upper(r.proargtypes, 1) + 1;

        i = 0;
        paramtext = '';

        LOOP
            IF i < numparameters THEN
                IF i > 0 THEN
                    paramtext = paramtext || ', ';
                END IF;
                paramtext = paramtext || (SELECT typname FROM pg_type WHERE oid = r.proargtypes[i]);
                i = i + 1;
            ELSE
                EXIT;
            END IF;
        END LOOP;

        EXECUTE 'DROP FUNCTION ' || quote_ident(r."schema") || '.' || quote_ident(r."procname") || '(' || paramtext || ');';
    END LOOP;
END;
$$;
