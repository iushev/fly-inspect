'use strict';
module.exports = (sequelize, DataTypes) => {
    var r5objects = sequelize.define('R5OBJECTS', {
        OBJ_OBTYPE: DataTypes.STRING(4),
        OBJ_OBRTYPE: DataTypes.STRING(4),
        OBJ_CODE: {
            type: DataTypes.STRING(30),
            allowNull: false,
            validate: {
                notNull: true,
                notEmpty: true,
            },
        },
        OBJ_DESC: DataTypes.STRING(80),
        OBJ_CLASS: DataTypes.STRING(8),
        OBJ_CATEGORY: DataTypes.STRING(30),
        OBJ_COSTCODE: DataTypes.STRING(30),
        OBJ_LTYPE: DataTypes.STRING(4),
        OBJ_LOCATION: DataTypes.STRING(30),
        OBJ_TAG: DataTypes.STRING(24),
        OBJ_PTYPE: DataTypes.STRING(4),
        OBJ_POSITION: DataTypes.STRING(30),
        OBJ_PARENT: DataTypes.STRING(30),
        OBJ_DEPEND: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_MANUFACT: DataTypes.STRING(45),
        OBJ_MRC: DataTypes.STRING(15),
        OBJ_PART: DataTypes.STRING(30),
        OBJ_SERIALNO: DataTypes.STRING(30),
        OBJ_STORE: DataTypes.STRING(15),
        OBJ_STATUS: DataTypes.STRING(4),
        OBJ_RSTATUS: DataTypes.STRING(4),
        OBJ_COMMISS: DataTypes.DATE,
        OBJ_WITHDRAW: DataTypes.DATE,
        OBJ_RECORD: DataTypes.DATE,
        OBJ_GROUP: DataTypes.STRING(12),
        OBJ_USER: DataTypes.STRING(30),
        OBJ_ORDER: DataTypes.STRING(30),
        OBJ_ORDERLINE: DataTypes.DECIMAL(8, 0),
        OBJ_PRODUCTION: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_PRIMARYUOM: DataTypes.STRING(30),
        OBJ_ACD: DataTypes.DECIMAL,
        OBJ_NOTUSED: DataTypes.STRING(1),
        OBJ_SAFETY: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_CRITICALITY: DataTypes.STRING(8),
        OBJ_PROFILE: DataTypes.STRING(30),
        OBJ_MANUFACTMODEL: DataTypes.STRING(30),
        OBJ_MANUFACTREVNUM: DataTypes.STRING(10),
        OBJ_VALUE: DataTypes.DECIMAL,
        OBJ_SOURCESYSTEM: DataTypes.STRING(45),
        OBJ_SOURCECODE: DataTypes.STRING(45),
        OBJ_VARIABLE1: DataTypes.STRING(30),
        OBJ_VARIABLE2: DataTypes.STRING(30),
        OBJ_VARIABLE3: DataTypes.STRING(30),
        OBJ_VARIABLE4: DataTypes.STRING(30),
        OBJ_VARIABLE5: DataTypes.STRING(30),
        OBJ_VARIABLE6: DataTypes.STRING(30),
        OBJ_STATE: DataTypes.STRING(4),
        OBJ_RSTATE: DataTypes.STRING(4),
        OBJ_CN: DataTypes.STRING(24),
        OBJ_ORG: {
            type: DataTypes.STRING(15),
            allowNull: false,
            validate: {
                notNull: true,
                notEmpty: true,
            },
        },
        OBJ_CLASS_ORG: DataTypes.STRING(15),
        OBJ_LOCATION_ORG: DataTypes.STRING(15),
        OBJ_POSITION_ORG: DataTypes.STRING(15),
        OBJ_PARENT_ORG: DataTypes.STRING(15),
        OBJ_ORDER_ORG: DataTypes.STRING(15),
        OBJ_PART_ORG: DataTypes.STRING(15),
        OBJ_BIN: DataTypes.STRING(15),
        OBJ_LOT: DataTypes.STRING(12),
        OBJ_SYSLEVEL: DataTypes.STRING(30),
        OBJ_ASMLEVEL: DataTypes.STRING(30),
        OBJ_COMPLEVEL: DataTypes.STRING(30),
        OBJ_UPDATED: DataTypes.DATE,
        OBJ_UPDATEDBY: DataTypes.STRING(30),
        OBJ_PREVENTEVTCOMP: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_PERSON: DataTypes.STRING(15),
        OBJ_ESIGNATURE: DataTypes.STRING(100),
        OBJ_UPDATECOUNT: {
            type: DataTypes.DECIMAL(38, 0),
            defaultValue: 0,
        },
        OBJ_DORMSTART: DataTypes.DATE,
        OBJ_DORMEND: DataTypes.DATE,
        OBJ_DORMREUSE: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_GISOBJID: DataTypes.DECIMAL(38, 0),
        OBJ_GISPROFILE: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_PROFILE_ORG: DataTypes.STRING(15),
        OBJ_SOLDDATE: DataTypes.DATE,
        OBJ_TRANSFERDATE: DataTypes.DATE,
        OBJ_CGMP: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_TESTPOINTUOM: DataTypes.STRING(30),
        OBJ_OUTPUTUOM: DataTypes.STRING(30),
        OBJ_INCREMENT: DataTypes.DECIMAL(24, 6),
        OBJ_PRECISION: DataTypes.DECIMAL(2, 0),
        OBJ_PIDNO: DataTypes.STRING(80),
        OBJ_PIDDRAWING: DataTypes.STRING(80),
        OBJ_SERVICEPERC: DataTypes.DECIMAL(24, 6),
        OBJ_DEVICETOLFROM: DataTypes.DECIMAL(24, 6),
        OBJ_DEVICETOLTO: DataTypes.DECIMAL(24, 6),
        OBJ_DEVICETOLTYPE: {
            type: DataTypes.STRING(1),
            defaultValue: 'P',
        },
        OBJ_DEVICERANGEFROM: DataTypes.DECIMAL(24, 6),
        OBJ_DEVICERANGETO: DataTypes.DECIMAL(24, 6),
        OBJ_OUTPUTRANGEFROM: DataTypes.DECIMAL(24, 6),
        OBJ_OUTPUTRANGETO: DataTypes.DECIMAL(24, 6),
        OBJ_PROCESSTOLFROM: DataTypes.DECIMAL(24, 6),
        OBJ_PROCESSTOLTO: DataTypes.DECIMAL(24, 6),
        OBJ_PROCESSRANGEFROM: DataTypes.DECIMAL(24, 6),
        OBJ_PROCESSRANGETO: DataTypes.DECIMAL(24, 6),
        OBJ_SET: {
            type: DataTypes.STRING(4),
            defaultValue: '*',
        },
        OBJ_SOP: DataTypes.STRING(30),
        OBJ_LOOP: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_INSTRUMENT: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_INSTRUMENTTYPE: DataTypes.STRING(1),
        OBJ_INTERFACE: DataTypes.DATE,
        OBJ_LINKGISWO: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_GISLAYER: DataTypes.STRING(60),
        OBJ_XLOCATION: DataTypes.DECIMAL(24, 6),
        OBJ_YLOCATION: DataTypes.DECIMAL(24, 6),
        OBJ_LENGTH: DataTypes.DECIMAL(24, 6),
        OBJ_LENGTHUOM: DataTypes.STRING(10),
        OBJ_LINEARREFUOM: DataTypes.STRING(10),
        OBJ_LINEARREFPRECISION: DataTypes.DECIMAL(2, 0),
        OBJ_GEOREF: DataTypes.STRING(1000),
        OBJ_VEHICLE: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_FLEETCUSTOMER: DataTypes.STRING(30),
        OBJ_FLEETCUSTOMER_ORG: DataTypes.STRING(15),
        OBJ_BILLINGCODE: DataTypes.STRING(15),
        OBJ_BILLINGCODE_ORG: DataTypes.STRING(15),
        OBJ_MARKUPCODE: DataTypes.STRING(15),
        OBJ_MARKUPCODE_ORG: DataTypes.STRING(15),
        OBJ_VEHICLERSTATUS: DataTypes.STRING(4),
        OBJ_VEHICLESTATUS: DataTypes.STRING(4),
        OBJ_ISSUEDTO: DataTypes.STRING(30),
        OBJ_JECATEGORY: DataTypes.STRING(25),
        OBJ_JESOURCE: DataTypes.STRING(25),
        OBJ_GLTRANSFERFLAG: DataTypes.STRING(1),
        OBJ_GLTRANSFER: DataTypes.DATE,
        OBJ_MINPENALTY: DataTypes.DECIMAL(24, 6),
        OBJ_PENALTYFACTOR: DataTypes.DECIMAL(10, 4),
        OBJ_CALGROUP: DataTypes.STRING(15),
        OBJ_CALGROUPORG: DataTypes.STRING(15),
        OBJ_UDFCHAR01: DataTypes.STRING(80),
        OBJ_UDFCHAR02: DataTypes.STRING(80),
        OBJ_UDFCHAR03: DataTypes.STRING(80),
        OBJ_UDFCHAR04: DataTypes.STRING(80),
        OBJ_UDFCHAR05: DataTypes.STRING(80),
        OBJ_UDFCHAR06: DataTypes.STRING(80),
        OBJ_UDFCHAR07: DataTypes.STRING(80),
        OBJ_UDFCHAR08: DataTypes.STRING(80),
        OBJ_UDFCHAR09: DataTypes.STRING(80),
        OBJ_UDFCHAR10: DataTypes.STRING(80),
        OBJ_UDFCHAR11: DataTypes.STRING(80),
        OBJ_UDFCHAR12: DataTypes.STRING(80),
        OBJ_UDFCHAR13: DataTypes.STRING(80),
        OBJ_UDFCHAR14: DataTypes.STRING(80),
        OBJ_UDFCHAR15: DataTypes.STRING(80),
        OBJ_UDFCHAR16: DataTypes.STRING(80),
        OBJ_UDFCHAR17: DataTypes.STRING(80),
        OBJ_UDFCHAR18: DataTypes.STRING(80),
        OBJ_UDFCHAR19: DataTypes.STRING(80),
        OBJ_UDFCHAR20: DataTypes.STRING(80),
        OBJ_UDFCHAR21: DataTypes.STRING(80),
        OBJ_UDFCHAR22: DataTypes.STRING(80),
        OBJ_UDFCHAR23: DataTypes.STRING(80),
        OBJ_UDFCHAR24: DataTypes.STRING(80),
        OBJ_UDFCHAR25: DataTypes.STRING(80),
        OBJ_UDFCHAR26: DataTypes.STRING(80),
        OBJ_UDFCHAR27: DataTypes.STRING(80),
        OBJ_UDFCHAR28: DataTypes.STRING(80),
        OBJ_UDFCHAR29: DataTypes.STRING(80),
        OBJ_UDFCHAR30: DataTypes.STRING(80),
        OBJ_UDFNUM01: DataTypes.DECIMAL(24, 6),
        OBJ_UDFNUM02: DataTypes.DECIMAL(24, 6),
        OBJ_UDFNUM03: DataTypes.DECIMAL(24, 6),
        OBJ_UDFNUM04: DataTypes.DECIMAL(24, 6),
        OBJ_UDFNUM05: DataTypes.DECIMAL(24, 6),
        OBJ_UDFDATE01: DataTypes.DATE,
        OBJ_UDFDATE02: DataTypes.DATE,
        OBJ_UDFDATE03: DataTypes.DATE,
        OBJ_UDFDATE04: DataTypes.DATE,
        OBJ_UDFDATE05: DataTypes.DATE,
        OBJ_UDFCHKBOX01: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_UDFCHKBOX02: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_UDFCHKBOX03: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_UDFCHKBOX04: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_UDFCHKBOX05: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_SDMPRESENT: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_SDMPATH: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_COSTOFNEEDEDREPAIRS: DataTypes.DECIMAL(24, 6),
        OBJ_REPLACEMENTVALUE: DataTypes.DECIMAL(24, 6),
        OBJ_FACILITYCONDITIONINDEX: DataTypes.DECIMAL(24, 6),
        OBJ_BILLABLE: DataTypes.STRING(1),
        OBJ_GASINDEX: DataTypes.STRING(1),
        OBJ_FLOORAREA: DataTypes.DECIMAL(24, 6),
        OBJ_FLOORAREAUOM: DataTypes.STRING(30),
        OBJ_ESTREVENUE: DataTypes.DECIMAL(24, 6),
        OBJ_REGION: DataTypes.STRING(30),
        OBJ_PRIMARYUSE: DataTypes.STRING(8),
        OBJ_YEARBUILT: DataTypes.DECIMAL(4, 0),
        OBJ_SERVICELIFE: DataTypes.DECIMAL(3, 0),
        OBJ_RESOURCE: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_RESOURCEPRESENT: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_LASTSTATUSUPDATE: DataTypes.DATE,
        OBJ_REGION_ORG: DataTypes.STRING(15),
        OBJ_GISMAP: DataTypes.STRING(30),
        OBJ_GISMAP_ORG: DataTypes.STRING(15),
        OBJ_ENERGYSTARELIGIBLE: DataTypes.STRING(1),
        OBJ_RELIABILITYRANKING: DataTypes.STRING(30),
        OBJ_RELIABILITYRANKING_ORG: DataTypes.STRING(15),
        OBJ_RELIABILITYRANKINGREV: DataTypes.DECIMAL(4, 0),
        OBJ_RELIABILITYRANKINGINDEX: DataTypes.STRING(8),
        OBJ_RELIABILITYRANKINGSCORE: DataTypes.DECIMAL(24, 6),
        OBJ_RELIABILITYRANKINGLOCKED: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_RRVALUESLASTCALCULATED: DataTypes.DATE,
        OBJ_RRSURVEYLASTUPDATED: DataTypes.DATE,
        OBJ_OUTPUTCALCTYPE: {
            type: DataTypes.STRING(4),
            defaultValue: 'MANL',
        },
        OBJ_GIS_UPDATECOUNT: {
            type: DataTypes.DECIMAL(38, 0),
            defaultValue: 0,
        },
        OBJ_GIS_SYNCCOUNT: {
            type: DataTypes.DECIMAL(38, 0),
            defaultValue: 0,
        },
        OBJ_ALIAS: DataTypes.STRING(30),
        OBJ_RENTAL: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_RENTALTEMPLATE: DataTypes.STRING(30),
        OBJ_RENTALTEMPLATE_ORG: DataTypes.STRING(15),
        OBJ_CONTRACT: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_CONTRACTTEMPLATE: DataTypes.STRING(30),
        OBJ_CONTRACTTEMPLATE_ORG: DataTypes.STRING(15),
        OBJ_CUSTOMER: DataTypes.STRING(30),
        OBJ_CUSTOMER_ORG: DataTypes.STRING(15),
        OBJ_AVAILABILITYSTATUS: DataTypes.STRING(4),
        OBJ_AVAILABILITYRSTATUS: DataTypes.STRING(4),
        OBJ_TEMPMONITORED: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_HARDWAREVER: DataTypes.STRING(30),
        OBJ_SOFTWAREVER: DataTypes.STRING(30),
        OBJ_PURCHASINGASSET: DataTypes.STRING(30),
        OBJ_BIOMEDICALASSET: DataTypes.STRING(30),
        OBJ_OEMSITE: DataTypes.STRING(45),
        OBJ_VENDOR: DataTypes.STRING(45),
        OBJ_COVERAGETYPE: DataTypes.STRING(8),
        OBJ_LOCKOUT: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_PERSONALPROTECTIVEEQUIP: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_CONFINEDSPACE: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_STATEMENTOFCOND: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_BUILDMAINTPROGRAM: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_HIPAACONFIDENTIALITY: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_OWNERSHIPTYPE: {
            type: DataTypes.STRING(8),
            defaultValue: 'OWN',
        },
        OBJ_INVENTORYVERIFICATIONDATE: DataTypes.DATE,
        OBJ_PURCHASEORDER: DataTypes.STRING(30),
        OBJ_PURCHASEDATE: DataTypes.DATE,
        OBJ_PURCHASECOST: DataTypes.DECIMAL(24, 6),
        OBJ_INSTALLDATE: DataTypes.DATE,
        OBJ_DISPOSALTYPE: DataTypes.STRING(8),
        OBJ_ROOMTYPE: DataTypes.STRING(8),
        OBJ_UNITTYPE: DataTypes.STRING(8),
        OBJ_GUESTFIRSTNAME: DataTypes.STRING(100),
        OBJ_GUESTMIDDLENAME: DataTypes.STRING(50),
        OBJ_GUESTLASTNAME: DataTypes.STRING(100),
        OBJ_VIPSTATUS: DataTypes.STRING(8),
        OBJ_MAXGUESTCOUNT: DataTypes.STRING(4),
        OBJ_PHONEDECIMAL: DataTypes.STRING(50),
        OBJ_KEYDECIMAL: DataTypes.STRING(30),
        OBJ_ACCESSIBLE: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_NONSMOKING: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_SQFOOTAGE: DataTypes.DECIMAL(24, 6),
        OBJ_BEDCOUNT: DataTypes.DECIMAL(18, 0),
        OBJ_BATHCOUNT: DataTypes.DECIMAL(24, 6),
        OBJ_KITCHEN: DataTypes.STRING(8),
        OBJ_LIVINGROOM: DataTypes.STRING(8),
        OBJ_OPENBAY: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_BUILDING: DataTypes.STRING(30),
        OBJ_WING: DataTypes.STRING(30),
        OBJ_FLOOR: DataTypes.STRING(30),
        OBJ_EXPOSURE: DataTypes.STRING(30),
        OBJ_XCOORDINATE: DataTypes.DECIMAL(24, 6),
        OBJ_YCOORDINATE: DataTypes.DECIMAL(24, 6),
        OBJ_ZCOORDINATE: DataTypes.DECIMAL(24, 6),
        OBJ_UMDNSCODE: DataTypes.STRING(30),
        OBJ_FCICALCULATION: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_GUESTSALUTATION: DataTypes.STRING(8),
        OBJ_GUESTPHONEDECIMAL: DataTypes.STRING(50),
        OBJ_EMAIL: DataTypes.STRING(255),
        OBJ_DRIVER: DataTypes.STRING(15),
        OBJ_UDFCHAR31: DataTypes.STRING(80),
        OBJ_UDFCHAR32: DataTypes.STRING(80),
        OBJ_UDFCHAR33: DataTypes.STRING(80),
        OBJ_UDFCHAR34: DataTypes.STRING(80),
        OBJ_UDFCHAR35: DataTypes.STRING(80),
        OBJ_UDFCHAR36: DataTypes.STRING(80),
        OBJ_UDFCHAR37: DataTypes.STRING(80),
        OBJ_UDFCHAR38: DataTypes.STRING(80),
        OBJ_UDFCHAR39: DataTypes.STRING(80),
        OBJ_UDFCHAR40: DataTypes.STRING(80),
        OBJ_UDFCHAR41: DataTypes.STRING(80),
        OBJ_UDFCHAR42: DataTypes.STRING(80),
        OBJ_UDFCHAR43: DataTypes.STRING(80),
        OBJ_UDFCHAR44: DataTypes.STRING(80),
        OBJ_UDFCHAR45: DataTypes.STRING(80),
        OBJ_UDFNUM06: DataTypes.DECIMAL(24, 6),
        OBJ_UDFNUM07: DataTypes.DECIMAL(24, 6),
        OBJ_UDFNUM08: DataTypes.DECIMAL(24, 6),
        OBJ_UDFNUM09: DataTypes.DECIMAL(24, 6),
        OBJ_UDFNUM10: DataTypes.DECIMAL(24, 6),
        OBJ_UDFDATE06: DataTypes.DATE,
        OBJ_UDFDATE07: DataTypes.DATE,
        OBJ_UDFDATE08: DataTypes.DATE,
        OBJ_UDFDATE09: DataTypes.DATE,
        OBJ_UDFDATE10: DataTypes.DATE,
        OBJ_UDFCHKBOX06: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_UDFCHKBOX07: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_UDFCHKBOX08: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_UDFCHKBOX09: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_UDFCHKBOX10: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_FACILITY: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_COUNTRY: DataTypes.DECIMAL(10, 0),
        OBJ_TARGETPOWERFACTOR: DataTypes.DECIMAL(7, 4),
        OBJ_TARGETPEAKDEMAND: DataTypes.DECIMAL(24, 6),
        OBJ_STARTBILLINGPERIOD: DataTypes.DATE,
        OBJ_BILLEVERYPERIOD: DataTypes.DECIMAL(5, 0),
        OBJ_BILLEVERYPERIODUOM: DataTypes.STRING(10),
        OBJ_EFFLOSSPHASEIMBALANCE1: DataTypes.DECIMAL(7, 4),
        OBJ_EFFLOSSPHASEIMBALANCE2: DataTypes.DECIMAL(7, 4),
        OBJ_EFFLOSSPHASEIMBALANCE3: DataTypes.DECIMAL(7, 4),
        OBJ_EFFLOSSPHASEIMBALANCE4: DataTypes.DECIMAL(7, 4),
        OBJ_EFFLOSSPHASEIMBALANCE5: DataTypes.DECIMAL(7, 4),
        OBJ_PERFORMANCEMANAGER: DataTypes.STRING(15),
        OBJ_ELECSUBMETERINTERVAL: DataTypes.DECIMAL(10, 0),
        OBJ_ELECUSAGETHRESHOLD: DataTypes.DECIMAL(24, 6),
        OBJ_SAFETYREVIEWREQUIRED: DataTypes.DATE,
        OBJ_SAFETYREVIEWED: DataTypes.DATE,
        OBJ_SAFETYREVIEWEDBY: DataTypes.STRING(30),
        OBJ_SAFETYREVIEWEDNAME: DataTypes.STRING(80),
        OBJ_SAFETYREVIEWEDTYPE: DataTypes.STRING(4),
        OBJ_PERMITREVIEWREQUIRED: DataTypes.DATE,
        OBJ_PERMITREVIEWED: DataTypes.DATE,
        OBJ_PERMITREVIEWEDBY: DataTypes.STRING(30),
        OBJ_PERMITREVIEWEDNAME: DataTypes.STRING(80),
        OBJ_PERMITREVIEWEDTYPE: DataTypes.STRING(4),
        OBJ_LOTOREVIEWREQUIRED: DataTypes.DATE,
        OBJ_LOTOREVIEWED: DataTypes.DATE,
        OBJ_LOTOREVIEWEDBY: DataTypes.STRING(30),
        OBJ_LOTOREVIEWEDNAME: DataTypes.STRING(80),
        OBJ_LOTOREVIEWEDTYPE: DataTypes.STRING(4),
        OBJ_COMPLOCATION: DataTypes.STRING(80),
        OBJ_ORIGCONFIGCODE: DataTypes.STRING(30),
        OBJ_ORIGCONFIGORG: DataTypes.STRING(15),
        OBJ_ORIGCONFIGREV: DataTypes.DECIMAL(4, 0),
        OBJ_ORIGOBJECT: DataTypes.STRING(30),
        OBJ_CONFIGCODE: DataTypes.STRING(30),
        OBJ_CONFIGREVISION: DataTypes.DECIMAL(4, 0),
        OBJ_CONFIGSTATUS: DataTypes.STRING(4),
        OBJ_CONFIGRSTATUS: DataTypes.STRING(4),
        OBJ_CONFIGTYPE: DataTypes.STRING(4),
        OBJ_CONFIGSPECIFIC: DataTypes.STRING(1),
        OBJ_CONFIGPREFIX: DataTypes.STRING(30),
        OBJ_CONFIGSUFFIX: DataTypes.STRING(30),
        OBJ_CONFIGSEQLENGTH: DataTypes.DECIMAL(2, 0),
        OBJ_CONFIGAUTONUM: DataTypes.STRING(1),
        OBJ_CONFIGSTWO: DataTypes.STRING(20),
        OBJ_CONFIGREQUESTED: DataTypes.DATE,
        OBJ_CONFIGREQUESTEDBY: DataTypes.STRING(30),
        OBJ_CONFIGAPPROVED: DataTypes.DATE,
        OBJ_CONFIGAPPROVEDBY: DataTypes.STRING(30),
        OBJ_CREATED: DataTypes.DATE,
        OBJ_CREATEDBY: DataTypes.STRING(30),
        OBJ_CONFIGREVISIONREASON: DataTypes.STRING(2000),
        OBJ_CONFIGDEFAULTSTATUS: DataTypes.STRING(4),
        OBJ_GUESTPROFILEID: DataTypes.DECIMAL(30, 0),
        OBJ_MANAGERPROFILEID: DataTypes.STRING(20),
        OBJ_RCMLEVEL: DataTypes.STRING(8),
        OBJ_RISKLEVEL: DataTypes.STRING(30),
        OBJ_RPN: DataTypes.DECIMAL(8, 0),
        OBJ_VEHICLETYPE: DataTypes.STRING(8),
        OBJ_LINEARCOSTWEIGHT: DataTypes.DECIMAL(6, 0),
        OBJ_INSPECTIONDIRECTION: DataTypes.STRING(8),
        OBJ_FLOW: DataTypes.STRING(8),
        OBJ_ORIGINALRECEIPTDATE: DataTypes.DATE,
        OBJ_LATESTRECEIPTDATE: DataTypes.DATE,
        OBJ_ORIGINALINSTALLDATE: DataTypes.DATE,
        OBJ_LATESTINSTALLDATE: DataTypes.DATE,
        OBJ_OPERATIONALSTATUS: DataTypes.STRING(4),
        OBJ_OPERATIONALRSTATUS: DataTypes.STRING(4),
        OBJ_LOANEDDEPT: DataTypes.STRING(15),
        OBJ_WODEPT: DataTypes.STRING(15),
        OBJ_PMWODEPT: DataTypes.STRING(15),
        OBJ_DOCUMOTO_BOOKID: DataTypes.STRING(100),
        OBJ_RESCALOWNER: DataTypes.STRING(30),
        OBJ_WORKSPACE: DataTypes.STRING(30),
        OBJ_CONFIGUSEPARENTCODE: {
            type: DataTypes.STRING(1),
            defaultValue: '-',
        },
        OBJ_CONFIGPARENTSEPARATOR: DataTypes.STRING(3),
        OBJ_IMAGEURL: DataTypes.STRING(1000),
        OBJ_PRIMARYSYSTEM: DataTypes.STRING(30),
        OBJ_PRIMARYSYSTEM_ORG: DataTypes.STRING(15),
        OBJ_CONDITIONINDEX: DataTypes.STRING(8),
        OBJ_CONDITIONSCORE: DataTypes.DECIMAL(24, 6),
        OBJ_LINEAROBJTYPE: DataTypes.STRING(8),
        OBJ_DIRECTION: DataTypes.STRING(8),
        OBJ_FROMPOINT: DataTypes.DECIMAL(24, 6),
        OBJ_TOPOINT: DataTypes.DECIMAL(24, 6),
    }, {
        timestamps: false,
        tableName: 'R5OBJECTS',
    });
    return r5objects;
};
