'use strict';
module.exports = (sequelize, DataTypes) => {
  var r5events = sequelize.define('R5EVENTS', {
    EVT_CODE: {
      type: DataTypes.STRING(30),
      allowNull: false,
      validate: {
          notNull: true,
          notEmpty: true,
      },
    },
    EVT_DESC: DataTypes.STRING(80),
    EVT_TYPE: DataTypes.STRING(4),
    EVT_RTYPE: DataTypes.STRING(4),
    EVT_DATE: DataTypes.DATE,
    EVT_STATUS: DataTypes.STRING(4),
    EVT_RSTATUS: DataTypes.STRING(4),
    EVT_MRC: DataTypes.STRING(15),
    EVT_LTYPE: DataTypes.STRING(4),
    EVT_LOCATION: DataTypes.STRING(30),
    EVT_COSTCODE: DataTypes.STRING(30),
    EVT_PRINTED: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_PROJECT: DataTypes.STRING(20),
    EVT_PROJBUD: DataTypes.STRING(20),
    EVT_OBTYPE: DataTypes.STRING(4),
    EVT_OBRTYPE: DataTypes.STRING(4),
    EVT_OBJECT: DataTypes.STRING(30),
    EVT_STANDWORK: DataTypes.STRING(20),
    EVT_PPM: DataTypes.STRING(20),
    EVT_FREQ: DataTypes.DECIMAL(8, 0),
    EVT_ISSTYPE: {
      type: DataTypes.STRING(1),
      defaultValue: 'F',
    },
    EVT_METER: DataTypes.STRING(20),
    EVT_METERDUE: DataTypes.DECIMAL(5, 0),
    EVT_CLASS: DataTypes.STRING(8),
    EVT_ROUTE: DataTypes.STRING(20),
    EVT_SESSION: DataTypes.STRING(8),
    EVT_SCHEDNO: DataTypes.DECIMAL(5, 0),
    EVT_PLANPRIO: DataTypes.STRING(8),
    EVT_FIXED: {
      type: DataTypes.STRING(1),
      defaultValue: 'F',
    },
    EVT_SLACK: DataTypes.DECIMAL(5, 0),
    EVT_TARGET: DataTypes.DATE,
    EVT_NEWTARGET: DataTypes.DATE,
    EVT_EARLYSTART: DataTypes.DATE,
    EVT_LATEEND: DataTypes.DATE,
    EVT_MUSTEND: DataTypes.DATE,
    EVT_LASTPLAN: DataTypes.DATE,
    EVT_DURATION: DataTypes.DECIMAL(8, 0),
    EVT_NEWDUR: DataTypes.DECIMAL(8, 0),
    EVT_PLANSTATUS: DataTypes.STRING(1),
    EVT_PARENT: DataTypes.STRING(30),
    EVT_DEPEND: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_ORIGIN: DataTypes.STRING(15),
    EVT_REQM: DataTypes.STRING(8),
    EVT_CAUSE: DataTypes.STRING(8),
    EVT_ACTION: DataTypes.STRING(8),
    EVT_JOBTYPE: DataTypes.STRING(8),
    EVT_PRIORITY: DataTypes.STRING(8),
    EVT_REPORTED: DataTypes.DATE,
    EVT_START: DataTypes.DATE,
    EVT_MATAVAIL: DataTypes.DATE,
    EVT_DUE: DataTypes.DATE,
    EVT_COMPLETED: DataTypes.DATE,
    EVT_DOWNTIME: DataTypes.DECIMAL(5, 0),
    EVT_LABTOTAL: DataTypes.DECIMAL,
    EVT_MATTOTAL: DataTypes.DECIMAL(5, 0),
    EVT_SHIFT: DataTypes.STRING(4),
    EVT_FAILUREUSAGE: DataTypes.DECIMAL(24, 6),
    EVT_METERREADING: DataTypes.DECIMAL(24, 6),
    EVT_METUOM: DataTypes.STRING(30),
    EVT_MAXCOST: DataTypes.DECIMAL(24, 6),
    EVT_SCREENER: DataTypes.STRING(30),
    EVT_ROUTEDFROM: DataTypes.STRING(30),
    EVT_ROUTEREASON: DataTypes.STRING(240),
    EVT_WARRANTY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_OKWINEND: DataTypes.DATE,
    EVT_NEARWINSTART: DataTypes.DATE,
    EVT_GENWINSTART: DataTypes.DATE,
    EVT_OKWINENDVAL: DataTypes.DECIMAL(24, 6),
    EVT_NEARWINBEGVAL: DataTypes.DECIMAL(24, 6),
    EVT_GENWINBEGVAL: DataTypes.DECIMAL(24, 6),
    EVT_ROUTESTATUS: DataTypes.STRING(4),
    EVT_ROUTERSTATUS: DataTypes.STRING(4),
    EVT_ACD: DataTypes.DECIMAL,
    EVT_REJECTREASON: DataTypes.STRING(240),
    EVT_ENTEREDBY: DataTypes.STRING(30),
    EVT_FAILURE: DataTypes.STRING(8),
    EVT_DOWNTIMEHRS: DataTypes.DECIMAL(5, 0),
    EVT_SAFETY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_OBJCRITICALITY: DataTypes.STRING(8),
    EVT_MPPROJ: {
      type: DataTypes.STRING(20),
      defaultValue: '-',
    },
    EVT_TRANSORGID: DataTypes.DECIMAL(5, 0),
    EVT_TRANSCODE: DataTypes.STRING(4),
    EVT_TRANSGROUP: DataTypes.DECIMAL(5, 0),
    EVT_CN: DataTypes.STRING(24),
    EVT_REOPENED: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_PPOPK: DataTypes.DECIMAL(5, 0),
    EVT_PPMREV: DataTypes.DECIMAL(4, 0),
    EVT_ROUTEREV: DataTypes.DECIMAL(4, 0),
    EVT_ORG: DataTypes.STRING(15),
    EVT_CLASS_ORG: DataTypes.STRING(15),
    EVT_OBJECT_ORG: DataTypes.STRING(15),
    EVT_LOCATION_ORG: DataTypes.STRING(15),
    EVT_SCHEDGRP: DataTypes.STRING(30),
    EVT_REQUESTSTART: DataTypes.DATE,
    EVT_SCHEDEND: DataTypes.DATE,
    EVT_REQUESTEND: DataTypes.DATE,
    EVT_MASTERCAL: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_STEP: DataTypes.DECIMAL(3, 0),
    EVT_SEQ: DataTypes.DECIMAL(3, 0),
    EVT_TRIGEVENT: DataTypes.STRING(30),
    EVT_OLDRSTATUS: DataTypes.STRING(4),
    EVT_OLDSTATUS: DataTypes.STRING(4),
    EVT_NEWRSTATUS: DataTypes.STRING(4),
    EVT_NEWSTATUS: DataTypes.STRING(4),
    EVT_CONFLICT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_CONFLICTRESOLVED: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_CONFLICTDESC: DataTypes.STRING(255),
    EVT_PACKAGE: DataTypes.STRING(24),
    EVT_CODE_ALIAS: DataTypes.STRING(45),
    EVT_CREATED: DataTypes.DATE,
    EVT_CREATEDBY: DataTypes.STRING(30),
    EVT_UPDATED: DataTypes.DATE,
    EVT_UPDATEDBY: DataTypes.STRING(30),
    EVT_CONTNAME: DataTypes.STRING(50),
    EVT_CONTPHONE: DataTypes.STRING(50),
    EVT_CONTEMAIL: DataTypes.STRING(255),
    EVT_CONTNOTES: DataTypes.STRING(255),
    EVT_FOLLOWUP: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_UPDATECOUNT: {
      type: DataTypes.DECIMAL(38, 0),
      defaultValue: 0,
    },
    EVT_SERVICEREQUEST: DataTypes.STRING(30),
    EVT_PERSON: DataTypes.STRING(15),
    EVT_PRINT: {
      type: DataTypes.STRING(1),
      defaultValue: '+',
    },
    EVT_BILLABLE: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_PERIODUOM: DataTypes.STRING(10),
    EVT_METERDUE2: DataTypes.DECIMAL(24, 6),
    EVT_METUOM2: DataTypes.STRING(30),
    EVT_ROUTEPARENT: DataTypes.STRING(30),
    EVT_SYSLEVEL: DataTypes.STRING(30),
    EVT_SOURCECODE: DataTypes.STRING(45),
    EVT_SOURCESYSTEM: DataTypes.STRING(45),
    EVT_INTERFACE: DataTypes.DATE,
    EVT_LASTCAL: DataTypes.DATE,
    EVT_SOPEFFECTIVE: DataTypes.DATE,
    EVT_CALSTATUS: DataTypes.STRING(2),
    EVT_INCREMENT: DataTypes.DECIMAL(24, 6),
    EVT_PRECISION: DataTypes.DECIMAL(2, 0),
    EVT_PIDNO: DataTypes.STRING(80),
    EVT_PIDDRAWING: DataTypes.STRING(80),
    EVT_SERVICEPERC: DataTypes.DECIMAL(24, 6),
    EVT_SOP: DataTypes.STRING(30),
    EVT_SRQCALLNAME: DataTypes.STRING(80),
    EVT_SRQCUSTOMER: DataTypes.STRING(30),
    EVT_SRQLEVEL1: DataTypes.STRING(30),
    EVT_FIRSTBILL: DataTypes.STRING(30),
    EVT_JECATEGORY: DataTypes.STRING(25),
    EVT_JESOURCE: DataTypes.STRING(25),
    EVT_GLTRANSFERFLAG: DataTypes.STRING(1),
    EVT_GLTRANSFER: DataTypes.DATE,
    EVT_MULTIEQUIP: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_AGREEMENT: DataTypes.STRING(30),
    EVT_SIGPB: DataTypes.STRING(30),
    EVT_SIGRB: DataTypes.STRING(30),
    EVT_LASTTIMEPB: DataTypes.DATE,
    EVT_LASTTIMERB: DataTypes.DATE,
    EVT_COMPLETED_TRUNC: DataTypes.DATE,
    EVT_PERFORMEDBY: DataTypes.STRING(30),
    EVT_REVIEWEDBY: DataTypes.STRING(30),
    EVT_METERINTERVAL: DataTypes.DECIMAL(24, 6),
    EVT_METERINTERVAL2: DataTypes.DECIMAL(24, 6),
    EVT_WORKADDRESS: DataTypes.STRING(256),
    EVT_PFPROMISEDATE: DataTypes.DATE,
    EVT_TFPROMISEDATE: DataTypes.DATE,
    EVT_TFDATECOMPLETED: DataTypes.DATE,
    EVT_EQUIPMENTUSABILITY: DataTypes.STRING(30),
    EVT_EQUIPMENTUSABILITY_ORG: DataTypes.STRING(15),
    EVT_PROVIDER: DataTypes.STRING(30),
    EVT_PROVIDER_ORG: DataTypes.STRING(15),
    EVT_SERVICEPROBLEM: DataTypes.STRING(30),
    EVT_SERVICEPROBLEM_ORG: DataTypes.STRING(15),
    EVT_SERVICECATEGORY: DataTypes.STRING(30),
    EVT_SERVICECATEGORY_ORG: DataTypes.STRING(15),
    EVT_UDFCHAR01: DataTypes.STRING(80),
    EVT_UDFCHAR02: DataTypes.STRING(80),
    EVT_UDFCHAR03: DataTypes.STRING(80),
    EVT_UDFCHAR04: DataTypes.STRING(80),
    EVT_UDFCHAR05: DataTypes.STRING(80),
    EVT_UDFCHAR06: DataTypes.STRING(80),
    EVT_UDFCHAR07: DataTypes.STRING(80),
    EVT_UDFCHAR08: DataTypes.STRING(80),
    EVT_UDFCHAR09: DataTypes.STRING(80),
    EVT_UDFCHAR10: DataTypes.STRING(80),
    EVT_UDFCHAR11: DataTypes.STRING(80),
    EVT_UDFCHAR12: DataTypes.STRING(80),
    EVT_UDFCHAR13: DataTypes.STRING(80),
    EVT_UDFCHAR14: DataTypes.STRING(80),
    EVT_UDFCHAR15: DataTypes.STRING(80),
    EVT_UDFCHAR16: DataTypes.STRING(80),
    EVT_UDFCHAR17: DataTypes.STRING(80),
    EVT_UDFCHAR18: DataTypes.STRING(80),
    EVT_UDFCHAR19: DataTypes.STRING(80),
    EVT_UDFCHAR20: DataTypes.STRING(80),
    EVT_UDFCHAR21: DataTypes.STRING(80),
    EVT_UDFCHAR22: DataTypes.STRING(80),
    EVT_UDFCHAR23: DataTypes.STRING(80),
    EVT_UDFCHAR24: DataTypes.STRING(80),
    EVT_UDFCHAR25: DataTypes.STRING(80),
    EVT_UDFCHAR26: DataTypes.STRING(80),
    EVT_UDFCHAR27: DataTypes.STRING(80),
    EVT_UDFCHAR28: DataTypes.STRING(80),
    EVT_UDFCHAR29: DataTypes.STRING(80),
    EVT_UDFCHAR30: DataTypes.STRING(80),
    EVT_UDFNUM01: DataTypes.DECIMAL(24, 6),
    EVT_UDFNUM02: DataTypes.DECIMAL(24, 6),
    EVT_UDFNUM03: DataTypes.DECIMAL(24, 6),
    EVT_UDFNUM04: DataTypes.DECIMAL(24, 6),
    EVT_UDFNUM05: DataTypes.DECIMAL(24, 6),
    EVT_UDFDATE01: DataTypes.DATE,
    EVT_UDFDATE02: DataTypes.DATE,
    EVT_UDFDATE03: DataTypes.DATE,
    EVT_UDFDATE04: DataTypes.DATE,
    EVT_UDFDATE05: DataTypes.DATE,
    EVT_UDFCHKBOX01: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_UDFCHKBOX02: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_UDFCHKBOX03: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_UDFCHKBOX04: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_UDFCHKBOX05: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_FROMPOINT: DataTypes.DECIMAL(24, 6),
    EVT_FROMREFDESC: DataTypes.STRING(80),
    EVT_FROMGEOREF: DataTypes.STRING(1000),
    EVT_TOPOINT: DataTypes.DECIMAL(24, 6),
    EVT_TOREFDESC: DataTypes.STRING(80),
    EVT_TOGEOREF: DataTypes.STRING(1000),
    EVT_PERFORMONWEEK: DataTypes.STRING(1),
    EVT_PERFORMONDAY: DataTypes.DECIMAL(1, 0),
    EVT_ALERT: DataTypes.STRING(30),
    EVT_PRODUCTIONREQUEST: DataTypes.STRING(30),
    EVT_PRODUCTIONREQUESTREV: DataTypes.DECIMAL(4, 0),
    EVT_PRODUCTIONREQUEST_ORG: DataTypes.STRING(15),
    EVT_PRODORDER: DataTypes.STRING(80),
    EVT_PRODPRIORITY: DataTypes.STRING(256),
    EVT_ACCOUNTINGENTITY: DataTypes.STRING(22),
    EVT_PRODUCTIONSTART: DataTypes.DATE,
    EVT_PRODUCTIONEND: DataTypes.DATE,
    EVT_LASTSTATUSUPDATE: DataTypes.DATE,
    EVT_MP: DataTypes.STRING(30),
    EVT_MP_ORG: DataTypes.STRING(15),
    EVT_MP_REV: DataTypes.DECIMAL(4, 0),
    EVT_MP_SEQ: DataTypes.DECIMAL(8, 0),
    EVT_METERDUEDATE: DataTypes.DATE,
    EVT_METERDUEDATE2: DataTypes.DATE,
    EVT_CAMPAIGN: DataTypes.STRING(30),
    EVT_CAMPAIGN_ORG: DataTypes.STRING(15),
    EVT_CAMPAIGN_LINE: DataTypes.DECIMAL(8, 0),
    EVT_CAMPAIGN_SURVEY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_MPPROJTYPE: DataTypes.STRING(4),
    EVT_PSQPK: DataTypes.DECIMAL(38, 0),
    EVT_OKWINENDVAL2: DataTypes.DECIMAL(24, 6),
    EVT_NEARWINBEGVAL2: DataTypes.DECIMAL(24, 6),
    EVT_GENWINBEGVAL2: DataTypes.DECIMAL(24, 6),
    EVT_OUTPUTCALCTYPE: {
      type: DataTypes.STRING(4),
      defaultValue: 'MANL',
    },
    EVT_CEILPERMIT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_LIFESAFETY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_INFECTCONTROL: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_PCRA: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_PFI: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_BURNPERMIT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_PATIENTSAFETY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_RECALLNOTICE: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_SMDA: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_VISITORINJURY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_STAFFINJURY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_SECURITYINCIDENT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_PROPERTYDAMAGE: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_HAZMATINCIDENT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_FIREINCIDENT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_MEDICEQUIPINCIDENT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_UTILITYINCIDENT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_INVOICE: DataTypes.STRING(30),
    EVT_INVOICE_ORG: DataTypes.STRING(15),
    EVT_INVOICE_REVISION: DataTypes.DECIMAL(8, 0),
    EVT_INVOICELINE: DataTypes.DECIMAL(8, 0),
    EVT_PHONE: DataTypes.STRING(50),
    EVT_EMAIL: DataTypes.STRING(255),
    EVT_LOCKOUT: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_PERSONALPROTECTIVEEQUIP: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_CONFINEDSPACE: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_STATEMENTOFCOND: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_BUILDMAINTPROGRAM: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_HIPAACONFIDENTIALITY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_FACILITY: DataTypes.STRING(30),
    EVT_FACILITY_ORG: DataTypes.STRING(15),
    EVT_ADDITIONALINFO: DataTypes.STRING(4000),
    EVT_SAFETYREVIEWED: DataTypes.DATE,
    EVT_SAFETYREVIEWEDBY: DataTypes.STRING(30),
    EVT_SAFETYREVIEWEDNAME: DataTypes.STRING(80),
    EVT_SAFETYREVIEWEDTYPE: DataTypes.STRING(4),
    EVT_PERMITREVIEWED: DataTypes.DATE,
    EVT_PERMITREVIEWEDBY: DataTypes.STRING(30),
    EVT_PERMITREVIEWEDNAME: DataTypes.STRING(80),
    EVT_PERMITREVIEWEDTYPE: DataTypes.STRING(4),
    EVT_ORIGWO: DataTypes.STRING(30),
    EVT_ORIGACT: DataTypes.DECIMAL(8, 0),
    EVT_MINOR: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_GUESTPROFILEID: DataTypes.DECIMAL(30, 0),
    EVT_MANAGERPROFILEID: DataTypes.STRING(20),
    EVT_GUESTSALUTATION: DataTypes.STRING(8),
    EVT_GUESTFIRSTNAME: DataTypes.STRING(100),
    EVT_GUESTLASTNAME: DataTypes.STRING(100),
    EVT_GUESTMIDDLENAME: DataTypes.STRING(50),
    EVT_GUESTEMAIL: DataTypes.STRING(255),
    EVT_GUESTPHONEDECIMAL: DataTypes.STRING(50),
    EVT_VIPSTATUS: DataTypes.STRING(8),
    EVT_RESERVATIONNUM: DataTypes.STRING(50),
    EVT_SCHEDULEDSTARTTIME: DataTypes.DECIMAL(5, 0),
    EVT_SCHEDULEDENDTIME: DataTypes.DECIMAL(5, 0),
    EVT_INSPECTIONDIRECTION: DataTypes.STRING(8),
    EVT_FLOW: DataTypes.STRING(8),
    EVT_CALCULATEDPRIORITY: DataTypes.DECIMAL(24, 6),
    EVT_PRESERVECALCPRIORITY: {
      type: DataTypes.STRING(1),
      defaultValue: '-',
    },
    EVT_SUPPLIER: DataTypes.STRING(30),
    EVT_SUPPLIER_ORG: DataTypes.STRING(15),
    EVT_CASEMANAGEMENT: DataTypes.STRING(30),
    EVT_CASEMANAGEMENTTASK: DataTypes.STRING(30),
    EVT_ORIGCASEMANAGEMENT: DataTypes.STRING(30),
    EVT_DUPCASEMANAGEMENT: DataTypes.STRING(30),
    EVT_CONTACTRECORD: DataTypes.STRING(30),
    EVT_CONTACTRECORD_ORG: DataTypes.STRING(15),
    EVT_WORKSPACE: DataTypes.STRING(30),
    EVT_LATITUDE: DataTypes.DECIMAL(8, 6),
    EVT_LONGITUDE: DataTypes.DECIMAL(9, 6),
    EVT_FROM_REFERENCE: DataTypes.DECIMAL(38, 0),
    EVT_FROM_OFFSET: DataTypes.DECIMAL(24, 6),
    EVT_FROM_OFFSET_PERCENTAGE: DataTypes.DECIMAL(5, 2),
    EVT_FROM_OFFSET_DIRECTION: DataTypes.STRING(8),
    EVT_FROM_XCOORDINATE: DataTypes.DECIMAL(24, 6),
    EVT_FROM_YCOORDINATE: DataTypes.DECIMAL(24, 6),
    EVT_FROM_LATITUDE: DataTypes.DECIMAL(24, 6),
    EVT_FROM_LONGITUDE: DataTypes.DECIMAL(24, 6),
    EVT_FROM_RELATIONSHIP_TYPE: DataTypes.STRING(8),
    EVT_FROM_HORIZONTAL_OFFSET: DataTypes.DECIMAL(24, 6),
    EVT_FROM_HORIZONTAL_OFFSETUOM: DataTypes.STRING(10),
    EVT_FROM_HORIZONTAL_OFFSETTYPE: DataTypes.STRING(8),
    EVT_FROM_VERTICAL_OFFSET: DataTypes.DECIMAL(24, 6),
    EVT_FROM_VERTICAL_OFFSETUOM: DataTypes.STRING(10),
    EVT_FROM_VERTICAL_OFFSETTYPE: DataTypes.STRING(8),
    EVT_TO_REFERENCE: DataTypes.DECIMAL(38, 0),
    EVT_TO_OFFSET: DataTypes.DECIMAL(24, 6),
    EVT_TO_OFFSET_DIRECTION: DataTypes.STRING(8),
    EVT_TO_OFFSET_PERCENTAGE: DataTypes.DECIMAL(5, 2),
    EVT_TO_XCOORDINATE: DataTypes.DECIMAL(24, 6),
    EVT_TO_YCOORDINATE: DataTypes.DECIMAL(24, 6),
    EVT_TO_LATITUDE: DataTypes.DECIMAL(24, 6),
    EVT_TO_LONGITUDE: DataTypes.DECIMAL(24, 6),
    EVT_TO_RELATIONSHIP_TYPE: DataTypes.STRING(8),
    EVT_TO_HORIZONTAL_OFFSET: DataTypes.DECIMAL(24, 6),
    EVT_TO_HORIZONTAL_OFFSETUOM: DataTypes.STRING(10),
    EVT_TO_HORIZONTAL_OFFSETTYPE: DataTypes.STRING(8),
    EVT_TO_VERTICAL_OFFSET: DataTypes.DECIMAL(24, 6),
    EVT_TO_VERTICAL_OFFSETUOM: DataTypes.STRING(10),
    EVT_TO_VERTICAL_OFFSETTYPE: DataTypes.STRING(8),
    EVT_RELATIONSHIP_TYPE: DataTypes.STRING(8),
  }, {
    timestamps: false,
    tableName: 'R5EVENTS',
  });
  return r5events;
};