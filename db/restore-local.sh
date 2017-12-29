cat truncate.sql | docker exec -i flyinspect-db psql --dbname=flyinspect --username=postgres --no-password flyinspect
gunzip -c flyinspect.gz | docker exec -i flyinspect-db psql --dbname=flyinspect --username=postgres --no-password flyinspect
