<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "R5EVENTS".
 *
 * @property string $EVT_CODE
 * @property string $EVT_DESC
 * @property string $EVT_TYPE
 * @property string $EVT_RTYPE
 * @property string $EVT_DATE
 * @property string $EVT_STATUS
 * @property string $EVT_RSTATUS
 * @property string $EVT_MRC
 * @property string $EVT_LTYPE
 * @property string $EVT_LOCATION
 * @property string $EVT_COSTCODE
 * @property string $EVT_PRINTED
 * @property string $EVT_PROJECT
 * @property string $EVT_PROJBUD
 * @property string $EVT_OBTYPE
 * @property string $EVT_OBRTYPE
 * @property string $EVT_OBJECT
 * @property string $EVT_STANDWORK
 * @property string $EVT_PPM
 * @property string $EVT_FREQ
 * @property string $EVT_ISSTYPE
 * @property string $EVT_METER
 * @property string $EVT_METERDUE
 * @property string $EVT_CLASS
 * @property string $EVT_ROUTE
 * @property string $EVT_SESSION
 * @property string $EVT_SCHEDNO
 * @property string $EVT_PLANPRIO
 * @property string $EVT_FIXED
 * @property string $EVT_SLACK
 * @property string $EVT_TARGET
 * @property string $EVT_NEWTARGET
 * @property string $EVT_EARLYSTART
 * @property string $EVT_LATEEND
 * @property string $EVT_MUSTEND
 * @property string $EVT_LASTPLAN
 * @property string $EVT_DURATION
 * @property string $EVT_NEWDUR
 * @property string $EVT_PLANSTATUS
 * @property string $EVT_PARENT
 * @property string $EVT_DEPEND
 * @property string $EVT_ORIGIN
 * @property string $EVT_REQM
 * @property string $EVT_CAUSE
 * @property string $EVT_ACTION
 * @property string $EVT_JOBTYPE
 * @property string $EVT_PRIORITY
 * @property string $EVT_REPORTED
 * @property string $EVT_START
 * @property string $EVT_MATAVAIL
 * @property string $EVT_DUE
 * @property string $EVT_COMPLETED
 * @property string $EVT_DOWNTIME
 * @property string $EVT_LABTOTAL
 * @property string $EVT_MATTOTAL
 * @property string $EVT_SHIFT
 * @property string $EVT_FAILUREUSAGE
 * @property string $EVT_METERREADING
 * @property string $EVT_METUOM
 * @property string $EVT_MAXCOST
 * @property string $EVT_SCREENER
 * @property string $EVT_ROUTEDFROM
 * @property string $EVT_ROUTEREASON
 * @property string $EVT_WARRANTY
 * @property string $EVT_OKWINEND
 * @property string $EVT_NEARWINSTART
 * @property string $EVT_GENWINSTART
 * @property string $EVT_OKWINENDVAL
 * @property string $EVT_NEARWINBEGVAL
 * @property string $EVT_GENWINBEGVAL
 * @property string $EVT_ROUTESTATUS
 * @property string $EVT_ROUTERSTATUS
 * @property string $EVT_ACD
 * @property string $EVT_REJECTREASON
 * @property string $EVT_ENTEREDBY
 * @property string $EVT_FAILURE
 * @property string $EVT_DOWNTIMEHRS
 * @property string $EVT_SAFETY
 * @property string $EVT_OBJCRITICALITY
 * @property string $EVT_MPPROJ
 * @property string $EVT_TRANSORGID
 * @property string $EVT_TRANSCODE
 * @property string $EVT_TRANSGROUP
 * @property string $EVT_CN
 * @property string $EVT_REOPENED
 * @property string $EVT_PPOPK
 * @property string $EVT_PPMREV
 * @property string $EVT_ROUTEREV
 * @property string $EVT_ORG
 * @property string $EVT_CLASS_ORG
 * @property string $EVT_OBJECT_ORG
 * @property string $EVT_LOCATION_ORG
 * @property string $EVT_SCHEDGRP
 * @property string $EVT_REQUESTSTART
 * @property string $EVT_SCHEDEND
 * @property string $EVT_REQUESTEND
 * @property string $EVT_MASTERCAL
 * @property string $EVT_STEP
 * @property string $EVT_SEQ
 * @property string $EVT_TRIGEVENT
 * @property string $EVT_OLDRSTATUS
 * @property string $EVT_OLDSTATUS
 * @property string $EVT_NEWRSTATUS
 * @property string $EVT_NEWSTATUS
 * @property string $EVT_CONFLICT
 * @property string $EVT_CONFLICTRESOLVED
 * @property string $EVT_CONFLICTDESC
 * @property string $EVT_PACKAGE
 * @property string $EVT_CODE_ALIAS
 * @property string $EVT_CREATED
 * @property string $EVT_CREATEDBY
 * @property string $EVT_UPDATED
 * @property string $EVT_UPDATEDBY
 * @property string $EVT_CONTNAME
 * @property string $EVT_CONTPHONE
 * @property string $EVT_CONTEMAIL
 * @property string $EVT_CONTNOTES
 * @property string $EVT_FOLLOWUP
 * @property string $EVT_UPDATECOUNT
 * @property string $EVT_SERVICEREQUEST
 * @property string $EVT_PERSON
 * @property string $EVT_PRINT
 * @property string $EVT_BILLABLE
 * @property string $EVT_PERIODUOM
 * @property string $EVT_METERDUE2
 * @property string $EVT_METUOM2
 * @property string $EVT_ROUTEPARENT
 * @property string $EVT_SYSLEVEL
 * @property string $EVT_SOURCECODE
 * @property string $EVT_SOURCESYSTEM
 * @property string $EVT_INTERFACE
 * @property string $EVT_LASTCAL
 * @property string $EVT_SOPEFFECTIVE
 * @property string $EVT_CALSTATUS
 * @property string $EVT_INCREMENT
 * @property string $EVT_PRECISION
 * @property string $EVT_PIDNO
 * @property string $EVT_PIDDRAWING
 * @property string $EVT_SERVICEPERC
 * @property string $EVT_SOP
 * @property string $EVT_SRQCALLNAME
 * @property string $EVT_SRQCUSTOMER
 * @property string $EVT_SRQLEVEL1
 * @property string $EVT_FIRSTBILL
 * @property string $EVT_JECATEGORY
 * @property string $EVT_JESOURCE
 * @property string $EVT_GLTRANSFERFLAG
 * @property string $EVT_GLTRANSFER
 * @property string $EVT_MULTIEQUIP
 * @property string $EVT_AGREEMENT
 * @property string $EVT_SIGPB
 * @property string $EVT_SIGRB
 * @property string $EVT_LASTTIMEPB
 * @property string $EVT_LASTTIMERB
 * @property string $EVT_COMPLETED_TRUNC
 * @property string $EVT_PERFORMEDBY
 * @property string $EVT_REVIEWEDBY
 * @property string $EVT_METERINTERVAL
 * @property string $EVT_METERINTERVAL2
 * @property string $EVT_WORKADDRESS
 * @property string $EVT_PFPROMISEDATE
 * @property string $EVT_TFPROMISEDATE
 * @property string $EVT_TFDATECOMPLETED
 * @property string $EVT_EQUIPMENTUSABILITY
 * @property string $EVT_EQUIPMENTUSABILITY_ORG
 * @property string $EVT_PROVIDER
 * @property string $EVT_PROVIDER_ORG
 * @property string $EVT_SERVICEPROBLEM
 * @property string $EVT_SERVICEPROBLEM_ORG
 * @property string $EVT_SERVICECATEGORY
 * @property string $EVT_SERVICECATEGORY_ORG
 * @property string $EVT_UDFCHAR01
 * @property string $EVT_UDFCHAR02
 * @property string $EVT_UDFCHAR03
 * @property string $EVT_UDFCHAR04
 * @property string $EVT_UDFCHAR05
 * @property string $EVT_UDFCHAR06
 * @property string $EVT_UDFCHAR07
 * @property string $EVT_UDFCHAR08
 * @property string $EVT_UDFCHAR09
 * @property string $EVT_UDFCHAR10
 * @property string $EVT_UDFCHAR11
 * @property string $EVT_UDFCHAR12
 * @property string $EVT_UDFCHAR13
 * @property string $EVT_UDFCHAR14
 * @property string $EVT_UDFCHAR15
 * @property string $EVT_UDFCHAR16
 * @property string $EVT_UDFCHAR17
 * @property string $EVT_UDFCHAR18
 * @property string $EVT_UDFCHAR19
 * @property string $EVT_UDFCHAR20
 * @property string $EVT_UDFCHAR21
 * @property string $EVT_UDFCHAR22
 * @property string $EVT_UDFCHAR23
 * @property string $EVT_UDFCHAR24
 * @property string $EVT_UDFCHAR25
 * @property string $EVT_UDFCHAR26
 * @property string $EVT_UDFCHAR27
 * @property string $EVT_UDFCHAR28
 * @property string $EVT_UDFCHAR29
 * @property string $EVT_UDFCHAR30
 * @property string $EVT_UDFNUM01
 * @property string $EVT_UDFNUM02
 * @property string $EVT_UDFNUM03
 * @property string $EVT_UDFNUM04
 * @property string $EVT_UDFNUM05
 * @property string $EVT_UDFDATE01
 * @property string $EVT_UDFDATE02
 * @property string $EVT_UDFDATE03
 * @property string $EVT_UDFDATE04
 * @property string $EVT_UDFDATE05
 * @property string $EVT_UDFCHKBOX01
 * @property string $EVT_UDFCHKBOX02
 * @property string $EVT_UDFCHKBOX03
 * @property string $EVT_UDFCHKBOX04
 * @property string $EVT_UDFCHKBOX05
 * @property string $EVT_FROMPOINT
 * @property string $EVT_FROMREFDESC
 * @property string $EVT_FROMGEOREF
 * @property string $EVT_TOPOINT
 * @property string $EVT_TOREFDESC
 * @property string $EVT_TOGEOREF
 * @property string $EVT_PERFORMONWEEK
 * @property string $EVT_PERFORMONDAY
 * @property string $EVT_ALERT
 * @property string $EVT_PRODUCTIONREQUEST
 * @property string $EVT_PRODUCTIONREQUESTREV
 * @property string $EVT_PRODUCTIONREQUEST_ORG
 * @property string $EVT_PRODORDER
 * @property string $EVT_PRODPRIORITY
 * @property string $EVT_ACCOUNTINGENTITY
 * @property string $EVT_PRODUCTIONSTART
 * @property string $EVT_PRODUCTIONEND
 * @property string $EVT_LASTSTATUSUPDATE
 * @property string $EVT_MP
 * @property string $EVT_MP_ORG
 * @property string $EVT_MP_REV
 * @property string $EVT_MP_SEQ
 * @property string $EVT_METERDUEDATE
 * @property string $EVT_METERDUEDATE2
 * @property string $EVT_CAMPAIGN
 * @property string $EVT_CAMPAIGN_ORG
 * @property string $EVT_CAMPAIGN_LINE
 * @property string $EVT_CAMPAIGN_SURVEY
 * @property string $EVT_MPPROJTYPE
 * @property string $EVT_PSQPK
 * @property string $EVT_OKWINENDVAL2
 * @property string $EVT_NEARWINBEGVAL2
 * @property string $EVT_GENWINBEGVAL2
 * @property string $EVT_OUTPUTCALCTYPE
 * @property string $EVT_CEILPERMIT
 * @property string $EVT_LIFESAFETY
 * @property string $EVT_INFECTCONTROL
 * @property string $EVT_PCRA
 * @property string $EVT_PFI
 * @property string $EVT_BURNPERMIT
 * @property string $EVT_PATIENTSAFETY
 * @property string $EVT_RECALLNOTICE
 * @property string $EVT_SMDA
 * @property string $EVT_VISITORINJURY
 * @property string $EVT_STAFFINJURY
 * @property string $EVT_SECURITYINCIDENT
 * @property string $EVT_PROPERTYDAMAGE
 * @property string $EVT_HAZMATINCIDENT
 * @property string $EVT_FIREINCIDENT
 * @property string $EVT_MEDICEQUIPINCIDENT
 * @property string $EVT_UTILITYINCIDENT
 * @property string $EVT_INVOICE
 * @property string $EVT_INVOICE_ORG
 * @property string $EVT_INVOICE_REVISION
 * @property string $EVT_INVOICELINE
 * @property string $EVT_PHONE
 * @property string $EVT_EMAIL
 * @property string $EVT_LOCKOUT
 * @property string $EVT_PERSONALPROTECTIVEEQUIP
 * @property string $EVT_CONFINEDSPACE
 * @property string $EVT_STATEMENTOFCOND
 * @property string $EVT_BUILDMAINTPROGRAM
 * @property string $EVT_HIPAACONFIDENTIALITY
 * @property string $EVT_FACILITY
 * @property string $EVT_FACILITY_ORG
 * @property string $EVT_ADDITIONALINFO
 * @property string $EVT_SAFETYREVIEWED
 * @property string $EVT_SAFETYREVIEWEDBY
 * @property string $EVT_SAFETYREVIEWEDNAME
 * @property string $EVT_SAFETYREVIEWEDTYPE
 * @property string $EVT_PERMITREVIEWED
 * @property string $EVT_PERMITREVIEWEDBY
 * @property string $EVT_PERMITREVIEWEDNAME
 * @property string $EVT_PERMITREVIEWEDTYPE
 * @property string $EVT_ORIGWO
 * @property string $EVT_ORIGACT
 * @property string $EVT_MINOR
 * @property string $EVT_GUESTPROFILEID
 * @property string $EVT_MANAGERPROFILEID
 * @property string $EVT_GUESTSALUTATION
 * @property string $EVT_GUESTFIRSTNAME
 * @property string $EVT_GUESTLASTNAME
 * @property string $EVT_GUESTMIDDLENAME
 * @property string $EVT_GUESTEMAIL
 * @property string $EVT_GUESTPHONEDECIMAL
 * @property string $EVT_VIPSTATUS
 * @property string $EVT_RESERVATIONNUM
 * @property string $EVT_SCHEDULEDSTARTTIME
 * @property string $EVT_SCHEDULEDENDTIME
 * @property string $EVT_INSPECTIONDIRECTION
 * @property string $EVT_FLOW
 * @property string $EVT_CALCULATEDPRIORITY
 * @property string $EVT_PRESERVECALCPRIORITY
 * @property string $EVT_SUPPLIER
 * @property string $EVT_SUPPLIER_ORG
 * @property string $EVT_CASEMANAGEMENT
 * @property string $EVT_CASEMANAGEMENTTASK
 * @property string $EVT_ORIGCASEMANAGEMENT
 * @property string $EVT_DUPCASEMANAGEMENT
 * @property string $EVT_CONTACTRECORD
 * @property string $EVT_CONTACTRECORD_ORG
 * @property string $EVT_WORKSPACE
 * @property string $EVT_LATITUDE
 * @property string $EVT_LONGITUDE
 * @property string $EVT_FROM_REFERENCE
 * @property string $EVT_FROM_OFFSET
 * @property string $EVT_FROM_OFFSET_PERCENTAGE
 * @property string $EVT_FROM_OFFSET_DIRECTION
 * @property string $EVT_FROM_XCOORDINATE
 * @property string $EVT_FROM_YCOORDINATE
 * @property string $EVT_FROM_LATITUDE
 * @property string $EVT_FROM_LONGITUDE
 * @property string $EVT_FROM_RELATIONSHIP_TYPE
 * @property string $EVT_FROM_HORIZONTAL_OFFSET
 * @property string $EVT_FROM_HORIZONTAL_OFFSETUOM
 * @property string $EVT_FROM_HORIZONTAL_OFFSETTYPE
 * @property string $EVT_FROM_VERTICAL_OFFSET
 * @property string $EVT_FROM_VERTICAL_OFFSETUOM
 * @property string $EVT_FROM_VERTICAL_OFFSETTYPE
 * @property string $EVT_TO_REFERENCE
 * @property string $EVT_TO_OFFSET
 * @property string $EVT_TO_OFFSET_DIRECTION
 * @property string $EVT_TO_OFFSET_PERCENTAGE
 * @property string $EVT_TO_XCOORDINATE
 * @property string $EVT_TO_YCOORDINATE
 * @property string $EVT_TO_LATITUDE
 * @property string $EVT_TO_LONGITUDE
 * @property string $EVT_TO_RELATIONSHIP_TYPE
 * @property string $EVT_TO_HORIZONTAL_OFFSET
 * @property string $EVT_TO_HORIZONTAL_OFFSETUOM
 * @property string $EVT_TO_HORIZONTAL_OFFSETTYPE
 * @property string $EVT_TO_VERTICAL_OFFSET
 * @property string $EVT_TO_VERTICAL_OFFSETUOM
 * @property string $EVT_TO_VERTICAL_OFFSETTYPE
 * @property string $EVT_RELATIONSHIP_TYPE
 */
class Events extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'R5EVENTS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EVT_DATE', 'EVT_TARGET', 'EVT_NEWTARGET', 'EVT_EARLYSTART', 'EVT_LATEEND', 'EVT_MUSTEND', 'EVT_LASTPLAN', 'EVT_REPORTED', 'EVT_START', 'EVT_MATAVAIL', 'EVT_DUE', 'EVT_COMPLETED', 'EVT_OKWINEND', 'EVT_NEARWINSTART', 'EVT_GENWINSTART', 'EVT_REQUESTSTART', 'EVT_SCHEDEND', 'EVT_REQUESTEND', 'EVT_CREATED', 'EVT_UPDATED', 'EVT_INTERFACE', 'EVT_LASTCAL', 'EVT_SOPEFFECTIVE', 'EVT_GLTRANSFER', 'EVT_LASTTIMEPB', 'EVT_LASTTIMERB', 'EVT_COMPLETED_TRUNC', 'EVT_PFPROMISEDATE', 'EVT_TFPROMISEDATE', 'EVT_TFDATECOMPLETED', 'EVT_UDFDATE01', 'EVT_UDFDATE02', 'EVT_UDFDATE03', 'EVT_UDFDATE04', 'EVT_UDFDATE05', 'EVT_PRODUCTIONSTART', 'EVT_PRODUCTIONEND', 'EVT_LASTSTATUSUPDATE', 'EVT_METERDUEDATE', 'EVT_METERDUEDATE2', 'EVT_SAFETYREVIEWED', 'EVT_PERMITREVIEWED'], 'safe'],
            [['EVT_FREQ', 'EVT_METERDUE', 'EVT_SCHEDNO', 'EVT_SLACK', 'EVT_DURATION', 'EVT_NEWDUR', 'EVT_DOWNTIME', 'EVT_LABTOTAL', 'EVT_MATTOTAL', 'EVT_FAILUREUSAGE', 'EVT_METERREADING', 'EVT_MAXCOST', 'EVT_OKWINENDVAL', 'EVT_NEARWINBEGVAL', 'EVT_GENWINBEGVAL', 'EVT_ACD', 'EVT_DOWNTIMEHRS', 'EVT_TRANSORGID', 'EVT_TRANSGROUP', 'EVT_PPOPK', 'EVT_PPMREV', 'EVT_ROUTEREV', 'EVT_STEP', 'EVT_SEQ', 'EVT_UPDATECOUNT', 'EVT_METERDUE2', 'EVT_INCREMENT', 'EVT_PRECISION', 'EVT_SERVICEPERC', 'EVT_METERINTERVAL', 'EVT_METERINTERVAL2', 'EVT_UDFNUM01', 'EVT_UDFNUM02', 'EVT_UDFNUM03', 'EVT_UDFNUM04', 'EVT_UDFNUM05', 'EVT_FROMPOINT', 'EVT_TOPOINT', 'EVT_PERFORMONDAY', 'EVT_PRODUCTIONREQUESTREV', 'EVT_MP_REV', 'EVT_MP_SEQ', 'EVT_CAMPAIGN_LINE', 'EVT_PSQPK', 'EVT_OKWINENDVAL2', 'EVT_NEARWINBEGVAL2', 'EVT_GENWINBEGVAL2', 'EVT_INVOICE_REVISION', 'EVT_INVOICELINE', 'EVT_ORIGACT', 'EVT_GUESTPROFILEID', 'EVT_SCHEDULEDSTARTTIME', 'EVT_SCHEDULEDENDTIME', 'EVT_CALCULATEDPRIORITY', 'EVT_LATITUDE', 'EVT_LONGITUDE', 'EVT_FROM_REFERENCE', 'EVT_FROM_OFFSET', 'EVT_FROM_OFFSET_PERCENTAGE', 'EVT_FROM_XCOORDINATE', 'EVT_FROM_YCOORDINATE', 'EVT_FROM_LATITUDE', 'EVT_FROM_LONGITUDE', 'EVT_FROM_HORIZONTAL_OFFSET', 'EVT_FROM_VERTICAL_OFFSET', 'EVT_TO_REFERENCE', 'EVT_TO_OFFSET', 'EVT_TO_OFFSET_PERCENTAGE', 'EVT_TO_XCOORDINATE', 'EVT_TO_YCOORDINATE', 'EVT_TO_LATITUDE', 'EVT_TO_LONGITUDE', 'EVT_TO_HORIZONTAL_OFFSET', 'EVT_TO_VERTICAL_OFFSET'], 'number'],
            [['EVT_CODE', 'EVT_LOCATION', 'EVT_COSTCODE', 'EVT_OBJECT', 'EVT_PARENT', 'EVT_METUOM', 'EVT_SCREENER', 'EVT_ROUTEDFROM', 'EVT_ENTEREDBY', 'EVT_SCHEDGRP', 'EVT_TRIGEVENT', 'EVT_CREATEDBY', 'EVT_UPDATEDBY', 'EVT_SERVICEREQUEST', 'EVT_METUOM2', 'EVT_ROUTEPARENT', 'EVT_SYSLEVEL', 'EVT_SOP', 'EVT_SRQCUSTOMER', 'EVT_SRQLEVEL1', 'EVT_FIRSTBILL', 'EVT_AGREEMENT', 'EVT_SIGPB', 'EVT_SIGRB', 'EVT_PERFORMEDBY', 'EVT_REVIEWEDBY', 'EVT_EQUIPMENTUSABILITY', 'EVT_PROVIDER', 'EVT_SERVICEPROBLEM', 'EVT_SERVICECATEGORY', 'EVT_ALERT', 'EVT_PRODUCTIONREQUEST', 'EVT_MP', 'EVT_CAMPAIGN', 'EVT_INVOICE', 'EVT_FACILITY', 'EVT_SAFETYREVIEWEDBY', 'EVT_PERMITREVIEWEDBY', 'EVT_ORIGWO', 'EVT_SUPPLIER', 'EVT_CASEMANAGEMENT', 'EVT_CASEMANAGEMENTTASK', 'EVT_ORIGCASEMANAGEMENT', 'EVT_DUPCASEMANAGEMENT', 'EVT_CONTACTRECORD', 'EVT_WORKSPACE'], 'string', 'max' => 30],
            [['EVT_DESC', 'EVT_PIDNO', 'EVT_PIDDRAWING', 'EVT_SRQCALLNAME', 'EVT_UDFCHAR01', 'EVT_UDFCHAR02', 'EVT_UDFCHAR03', 'EVT_UDFCHAR04', 'EVT_UDFCHAR05', 'EVT_UDFCHAR06', 'EVT_UDFCHAR07', 'EVT_UDFCHAR08', 'EVT_UDFCHAR09', 'EVT_UDFCHAR10', 'EVT_UDFCHAR11', 'EVT_UDFCHAR12', 'EVT_UDFCHAR13', 'EVT_UDFCHAR14', 'EVT_UDFCHAR15', 'EVT_UDFCHAR16', 'EVT_UDFCHAR17', 'EVT_UDFCHAR18', 'EVT_UDFCHAR19', 'EVT_UDFCHAR20', 'EVT_UDFCHAR21', 'EVT_UDFCHAR22', 'EVT_UDFCHAR23', 'EVT_UDFCHAR24', 'EVT_UDFCHAR25', 'EVT_UDFCHAR26', 'EVT_UDFCHAR27', 'EVT_UDFCHAR28', 'EVT_UDFCHAR29', 'EVT_UDFCHAR30', 'EVT_FROMREFDESC', 'EVT_TOREFDESC', 'EVT_PRODORDER', 'EVT_SAFETYREVIEWEDNAME', 'EVT_PERMITREVIEWEDNAME'], 'string', 'max' => 80],
            [['EVT_TYPE', 'EVT_RTYPE', 'EVT_STATUS', 'EVT_RSTATUS', 'EVT_LTYPE', 'EVT_OBTYPE', 'EVT_OBRTYPE', 'EVT_SHIFT', 'EVT_ROUTESTATUS', 'EVT_ROUTERSTATUS', 'EVT_TRANSCODE', 'EVT_OLDRSTATUS', 'EVT_OLDSTATUS', 'EVT_NEWRSTATUS', 'EVT_NEWSTATUS', 'EVT_MPPROJTYPE', 'EVT_OUTPUTCALCTYPE', 'EVT_SAFETYREVIEWEDTYPE', 'EVT_PERMITREVIEWEDTYPE'], 'string', 'max' => 4],
            [['EVT_MRC', 'EVT_ORIGIN', 'EVT_ORG', 'EVT_CLASS_ORG', 'EVT_OBJECT_ORG', 'EVT_LOCATION_ORG', 'EVT_PERSON', 'EVT_EQUIPMENTUSABILITY_ORG', 'EVT_PROVIDER_ORG', 'EVT_SERVICEPROBLEM_ORG', 'EVT_SERVICECATEGORY_ORG', 'EVT_PRODUCTIONREQUEST_ORG', 'EVT_MP_ORG', 'EVT_CAMPAIGN_ORG', 'EVT_INVOICE_ORG', 'EVT_FACILITY_ORG', 'EVT_SUPPLIER_ORG', 'EVT_CONTACTRECORD_ORG'], 'string', 'max' => 15],
            [['EVT_PRINTED', 'EVT_ISSTYPE', 'EVT_FIXED', 'EVT_PLANSTATUS', 'EVT_DEPEND', 'EVT_WARRANTY', 'EVT_SAFETY', 'EVT_REOPENED', 'EVT_MASTERCAL', 'EVT_CONFLICT', 'EVT_CONFLICTRESOLVED', 'EVT_FOLLOWUP', 'EVT_PRINT', 'EVT_BILLABLE', 'EVT_GLTRANSFERFLAG', 'EVT_MULTIEQUIP', 'EVT_UDFCHKBOX01', 'EVT_UDFCHKBOX02', 'EVT_UDFCHKBOX03', 'EVT_UDFCHKBOX04', 'EVT_UDFCHKBOX05', 'EVT_PERFORMONWEEK', 'EVT_CAMPAIGN_SURVEY', 'EVT_CEILPERMIT', 'EVT_LIFESAFETY', 'EVT_INFECTCONTROL', 'EVT_PCRA', 'EVT_PFI', 'EVT_BURNPERMIT', 'EVT_PATIENTSAFETY', 'EVT_RECALLNOTICE', 'EVT_SMDA', 'EVT_VISITORINJURY', 'EVT_STAFFINJURY', 'EVT_SECURITYINCIDENT', 'EVT_PROPERTYDAMAGE', 'EVT_HAZMATINCIDENT', 'EVT_FIREINCIDENT', 'EVT_MEDICEQUIPINCIDENT', 'EVT_UTILITYINCIDENT', 'EVT_LOCKOUT', 'EVT_PERSONALPROTECTIVEEQUIP', 'EVT_CONFINEDSPACE', 'EVT_STATEMENTOFCOND', 'EVT_BUILDMAINTPROGRAM', 'EVT_HIPAACONFIDENTIALITY', 'EVT_MINOR', 'EVT_PRESERVECALCPRIORITY'], 'string', 'max' => 1],
            [['EVT_PROJECT', 'EVT_PROJBUD', 'EVT_STANDWORK', 'EVT_PPM', 'EVT_METER', 'EVT_ROUTE', 'EVT_MPPROJ', 'EVT_MANAGERPROFILEID'], 'string', 'max' => 20],
            [['EVT_CLASS', 'EVT_SESSION', 'EVT_PLANPRIO', 'EVT_REQM', 'EVT_CAUSE', 'EVT_ACTION', 'EVT_JOBTYPE', 'EVT_PRIORITY', 'EVT_FAILURE', 'EVT_OBJCRITICALITY', 'EVT_GUESTSALUTATION', 'EVT_VIPSTATUS', 'EVT_INSPECTIONDIRECTION', 'EVT_FLOW', 'EVT_FROM_OFFSET_DIRECTION', 'EVT_FROM_RELATIONSHIP_TYPE', 'EVT_FROM_HORIZONTAL_OFFSETTYPE', 'EVT_FROM_VERTICAL_OFFSETTYPE', 'EVT_TO_OFFSET_DIRECTION', 'EVT_TO_RELATIONSHIP_TYPE', 'EVT_TO_HORIZONTAL_OFFSETTYPE', 'EVT_TO_VERTICAL_OFFSETTYPE', 'EVT_RELATIONSHIP_TYPE'], 'string', 'max' => 8],
            [['EVT_ROUTEREASON', 'EVT_REJECTREASON'], 'string', 'max' => 240],
            [['EVT_CN', 'EVT_PACKAGE'], 'string', 'max' => 24],
            [['EVT_CONFLICTDESC', 'EVT_CONTEMAIL', 'EVT_CONTNOTES', 'EVT_EMAIL', 'EVT_GUESTEMAIL'], 'string', 'max' => 255],
            [['EVT_CODE_ALIAS', 'EVT_SOURCECODE', 'EVT_SOURCESYSTEM'], 'string', 'max' => 45],
            [['EVT_CONTNAME', 'EVT_CONTPHONE', 'EVT_PHONE', 'EVT_GUESTMIDDLENAME', 'EVT_GUESTPHONEDECIMAL', 'EVT_RESERVATIONNUM'], 'string', 'max' => 50],
            [['EVT_PERIODUOM', 'EVT_FROM_HORIZONTAL_OFFSETUOM', 'EVT_FROM_VERTICAL_OFFSETUOM', 'EVT_TO_HORIZONTAL_OFFSETUOM', 'EVT_TO_VERTICAL_OFFSETUOM'], 'string', 'max' => 10],
            [['EVT_CALSTATUS'], 'string', 'max' => 2],
            [['EVT_JECATEGORY', 'EVT_JESOURCE'], 'string', 'max' => 25],
            [['EVT_WORKADDRESS', 'EVT_PRODPRIORITY'], 'string', 'max' => 256],
            [['EVT_FROMGEOREF', 'EVT_TOGEOREF'], 'string', 'max' => 1000],
            [['EVT_ACCOUNTINGENTITY'], 'string', 'max' => 22],
            [['EVT_ADDITIONALINFO'], 'string', 'max' => 4000],
            [['EVT_GUESTFIRSTNAME', 'EVT_GUESTLASTNAME'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EVT_CODE' => Yii::t('app', 'Evt  Code'),
            'EVT_DESC' => Yii::t('app', 'Evt  Desc'),
            'EVT_TYPE' => Yii::t('app', 'Evt  Type'),
            'EVT_RTYPE' => Yii::t('app', 'Evt  Rtype'),
            'EVT_DATE' => Yii::t('app', 'Evt  Date'),
            'EVT_STATUS' => Yii::t('app', 'Evt  Status'),
            'EVT_RSTATUS' => Yii::t('app', 'Evt  Rstatus'),
            'EVT_MRC' => Yii::t('app', 'Evt  Mrc'),
            'EVT_LTYPE' => Yii::t('app', 'Evt  Ltype'),
            'EVT_LOCATION' => Yii::t('app', 'Evt  Location'),
            'EVT_COSTCODE' => Yii::t('app', 'Evt  Costcode'),
            'EVT_PRINTED' => Yii::t('app', 'Evt  Printed'),
            'EVT_PROJECT' => Yii::t('app', 'Evt  Project'),
            'EVT_PROJBUD' => Yii::t('app', 'Evt  Projbud'),
            'EVT_OBTYPE' => Yii::t('app', 'Evt  Obtype'),
            'EVT_OBRTYPE' => Yii::t('app', 'Evt  Obrtype'),
            'EVT_OBJECT' => Yii::t('app', 'Evt  Object'),
            'EVT_STANDWORK' => Yii::t('app', 'Evt  Standwork'),
            'EVT_PPM' => Yii::t('app', 'Evt  Ppm'),
            'EVT_FREQ' => Yii::t('app', 'Evt  Freq'),
            'EVT_ISSTYPE' => Yii::t('app', 'Evt  Isstype'),
            'EVT_METER' => Yii::t('app', 'Evt  Meter'),
            'EVT_METERDUE' => Yii::t('app', 'Evt  Meterdue'),
            'EVT_CLASS' => Yii::t('app', 'Evt  Class'),
            'EVT_ROUTE' => Yii::t('app', 'Evt  Route'),
            'EVT_SESSION' => Yii::t('app', 'Evt  Session'),
            'EVT_SCHEDNO' => Yii::t('app', 'Evt  Schedno'),
            'EVT_PLANPRIO' => Yii::t('app', 'Evt  Planprio'),
            'EVT_FIXED' => Yii::t('app', 'Evt  Fixed'),
            'EVT_SLACK' => Yii::t('app', 'Evt  Slack'),
            'EVT_TARGET' => Yii::t('app', 'Evt  Target'),
            'EVT_NEWTARGET' => Yii::t('app', 'Evt  Newtarget'),
            'EVT_EARLYSTART' => Yii::t('app', 'Evt  Earlystart'),
            'EVT_LATEEND' => Yii::t('app', 'Evt  Lateend'),
            'EVT_MUSTEND' => Yii::t('app', 'Evt  Mustend'),
            'EVT_LASTPLAN' => Yii::t('app', 'Evt  Lastplan'),
            'EVT_DURATION' => Yii::t('app', 'Evt  Duration'),
            'EVT_NEWDUR' => Yii::t('app', 'Evt  Newdur'),
            'EVT_PLANSTATUS' => Yii::t('app', 'Evt  Planstatus'),
            'EVT_PARENT' => Yii::t('app', 'Evt  Parent'),
            'EVT_DEPEND' => Yii::t('app', 'Evt  Depend'),
            'EVT_ORIGIN' => Yii::t('app', 'Evt  Origin'),
            'EVT_REQM' => Yii::t('app', 'Evt  Reqm'),
            'EVT_CAUSE' => Yii::t('app', 'Evt  Cause'),
            'EVT_ACTION' => Yii::t('app', 'Evt  Action'),
            'EVT_JOBTYPE' => Yii::t('app', 'Evt  Jobtype'),
            'EVT_PRIORITY' => Yii::t('app', 'Evt  Priority'),
            'EVT_REPORTED' => Yii::t('app', 'Evt  Reported'),
            'EVT_START' => Yii::t('app', 'Evt  Start'),
            'EVT_MATAVAIL' => Yii::t('app', 'Evt  Matavail'),
            'EVT_DUE' => Yii::t('app', 'Evt  Due'),
            'EVT_COMPLETED' => Yii::t('app', 'Evt  Completed'),
            'EVT_DOWNTIME' => Yii::t('app', 'Evt  Downtime'),
            'EVT_LABTOTAL' => Yii::t('app', 'Evt  Labtotal'),
            'EVT_MATTOTAL' => Yii::t('app', 'Evt  Mattotal'),
            'EVT_SHIFT' => Yii::t('app', 'Evt  Shift'),
            'EVT_FAILUREUSAGE' => Yii::t('app', 'Evt  Failureusage'),
            'EVT_METERREADING' => Yii::t('app', 'Evt  Meterreading'),
            'EVT_METUOM' => Yii::t('app', 'Evt  Metuom'),
            'EVT_MAXCOST' => Yii::t('app', 'Evt  Maxcost'),
            'EVT_SCREENER' => Yii::t('app', 'Evt  Screener'),
            'EVT_ROUTEDFROM' => Yii::t('app', 'Evt  Routedfrom'),
            'EVT_ROUTEREASON' => Yii::t('app', 'Evt  Routereason'),
            'EVT_WARRANTY' => Yii::t('app', 'Evt  Warranty'),
            'EVT_OKWINEND' => Yii::t('app', 'Evt  Okwinend'),
            'EVT_NEARWINSTART' => Yii::t('app', 'Evt  Nearwinstart'),
            'EVT_GENWINSTART' => Yii::t('app', 'Evt  Genwinstart'),
            'EVT_OKWINENDVAL' => Yii::t('app', 'Evt  Okwinendval'),
            'EVT_NEARWINBEGVAL' => Yii::t('app', 'Evt  Nearwinbegval'),
            'EVT_GENWINBEGVAL' => Yii::t('app', 'Evt  Genwinbegval'),
            'EVT_ROUTESTATUS' => Yii::t('app', 'Evt  Routestatus'),
            'EVT_ROUTERSTATUS' => Yii::t('app', 'Evt  Routerstatus'),
            'EVT_ACD' => Yii::t('app', 'Evt  Acd'),
            'EVT_REJECTREASON' => Yii::t('app', 'Evt  Rejectreason'),
            'EVT_ENTEREDBY' => Yii::t('app', 'Evt  Enteredby'),
            'EVT_FAILURE' => Yii::t('app', 'Evt  Failure'),
            'EVT_DOWNTIMEHRS' => Yii::t('app', 'Evt  Downtimehrs'),
            'EVT_SAFETY' => Yii::t('app', 'Evt  Safety'),
            'EVT_OBJCRITICALITY' => Yii::t('app', 'Evt  Objcriticality'),
            'EVT_MPPROJ' => Yii::t('app', 'Evt  Mpproj'),
            'EVT_TRANSORGID' => Yii::t('app', 'Evt  Transorgid'),
            'EVT_TRANSCODE' => Yii::t('app', 'Evt  Transcode'),
            'EVT_TRANSGROUP' => Yii::t('app', 'Evt  Transgroup'),
            'EVT_CN' => Yii::t('app', 'Evt  Cn'),
            'EVT_REOPENED' => Yii::t('app', 'Evt  Reopened'),
            'EVT_PPOPK' => Yii::t('app', 'Evt  Ppopk'),
            'EVT_PPMREV' => Yii::t('app', 'Evt  Ppmrev'),
            'EVT_ROUTEREV' => Yii::t('app', 'Evt  Routerev'),
            'EVT_ORG' => Yii::t('app', 'Evt  Org'),
            'EVT_CLASS_ORG' => Yii::t('app', 'Evt  Class  Org'),
            'EVT_OBJECT_ORG' => Yii::t('app', 'Evt  Object  Org'),
            'EVT_LOCATION_ORG' => Yii::t('app', 'Evt  Location  Org'),
            'EVT_SCHEDGRP' => Yii::t('app', 'Evt  Schedgrp'),
            'EVT_REQUESTSTART' => Yii::t('app', 'Evt  Requeststart'),
            'EVT_SCHEDEND' => Yii::t('app', 'Evt  Schedend'),
            'EVT_REQUESTEND' => Yii::t('app', 'Evt  Requestend'),
            'EVT_MASTERCAL' => Yii::t('app', 'Evt  Mastercal'),
            'EVT_STEP' => Yii::t('app', 'Evt  Step'),
            'EVT_SEQ' => Yii::t('app', 'Evt  Seq'),
            'EVT_TRIGEVENT' => Yii::t('app', 'Evt  Trigevent'),
            'EVT_OLDRSTATUS' => Yii::t('app', 'Evt  Oldrstatus'),
            'EVT_OLDSTATUS' => Yii::t('app', 'Evt  Oldstatus'),
            'EVT_NEWRSTATUS' => Yii::t('app', 'Evt  Newrstatus'),
            'EVT_NEWSTATUS' => Yii::t('app', 'Evt  Newstatus'),
            'EVT_CONFLICT' => Yii::t('app', 'Evt  Conflict'),
            'EVT_CONFLICTRESOLVED' => Yii::t('app', 'Evt  Conflictresolved'),
            'EVT_CONFLICTDESC' => Yii::t('app', 'Evt  Conflictdesc'),
            'EVT_PACKAGE' => Yii::t('app', 'Evt  Package'),
            'EVT_CODE_ALIAS' => Yii::t('app', 'Evt  Code  Alias'),
            'EVT_CREATED' => Yii::t('app', 'Evt  Created'),
            'EVT_CREATEDBY' => Yii::t('app', 'Evt  Createdby'),
            'EVT_UPDATED' => Yii::t('app', 'Evt  Updated'),
            'EVT_UPDATEDBY' => Yii::t('app', 'Evt  Updatedby'),
            'EVT_CONTNAME' => Yii::t('app', 'Evt  Contname'),
            'EVT_CONTPHONE' => Yii::t('app', 'Evt  Contphone'),
            'EVT_CONTEMAIL' => Yii::t('app', 'Evt  Contemail'),
            'EVT_CONTNOTES' => Yii::t('app', 'Evt  Contnotes'),
            'EVT_FOLLOWUP' => Yii::t('app', 'Evt  Followup'),
            'EVT_UPDATECOUNT' => Yii::t('app', 'Evt  Updatecount'),
            'EVT_SERVICEREQUEST' => Yii::t('app', 'Evt  Servicerequest'),
            'EVT_PERSON' => Yii::t('app', 'Evt  Person'),
            'EVT_PRINT' => Yii::t('app', 'Evt  Print'),
            'EVT_BILLABLE' => Yii::t('app', 'Evt  Billable'),
            'EVT_PERIODUOM' => Yii::t('app', 'Evt  Perioduom'),
            'EVT_METERDUE2' => Yii::t('app', 'Evt  Meterdue2'),
            'EVT_METUOM2' => Yii::t('app', 'Evt  Metuom2'),
            'EVT_ROUTEPARENT' => Yii::t('app', 'Evt  Routeparent'),
            'EVT_SYSLEVEL' => Yii::t('app', 'Evt  Syslevel'),
            'EVT_SOURCECODE' => Yii::t('app', 'Evt  Sourcecode'),
            'EVT_SOURCESYSTEM' => Yii::t('app', 'Evt  Sourcesystem'),
            'EVT_INTERFACE' => Yii::t('app', 'Evt  Interface'),
            'EVT_LASTCAL' => Yii::t('app', 'Evt  Lastcal'),
            'EVT_SOPEFFECTIVE' => Yii::t('app', 'Evt  Sopeffective'),
            'EVT_CALSTATUS' => Yii::t('app', 'Evt  Calstatus'),
            'EVT_INCREMENT' => Yii::t('app', 'Evt  Increment'),
            'EVT_PRECISION' => Yii::t('app', 'Evt  Precision'),
            'EVT_PIDNO' => Yii::t('app', 'Evt  Pidno'),
            'EVT_PIDDRAWING' => Yii::t('app', 'Evt  Piddrawing'),
            'EVT_SERVICEPERC' => Yii::t('app', 'Evt  Serviceperc'),
            'EVT_SOP' => Yii::t('app', 'Evt  Sop'),
            'EVT_SRQCALLNAME' => Yii::t('app', 'Evt  Srqcallname'),
            'EVT_SRQCUSTOMER' => Yii::t('app', 'Evt  Srqcustomer'),
            'EVT_SRQLEVEL1' => Yii::t('app', 'Evt  Srqlevel1'),
            'EVT_FIRSTBILL' => Yii::t('app', 'Evt  Firstbill'),
            'EVT_JECATEGORY' => Yii::t('app', 'Evt  Jecategory'),
            'EVT_JESOURCE' => Yii::t('app', 'Evt  Jesource'),
            'EVT_GLTRANSFERFLAG' => Yii::t('app', 'Evt  Gltransferflag'),
            'EVT_GLTRANSFER' => Yii::t('app', 'Evt  Gltransfer'),
            'EVT_MULTIEQUIP' => Yii::t('app', 'Evt  Multiequip'),
            'EVT_AGREEMENT' => Yii::t('app', 'Evt  Agreement'),
            'EVT_SIGPB' => Yii::t('app', 'Evt  Sigpb'),
            'EVT_SIGRB' => Yii::t('app', 'Evt  Sigrb'),
            'EVT_LASTTIMEPB' => Yii::t('app', 'Evt  Lasttimepb'),
            'EVT_LASTTIMERB' => Yii::t('app', 'Evt  Lasttimerb'),
            'EVT_COMPLETED_TRUNC' => Yii::t('app', 'Evt  Completed  Trunc'),
            'EVT_PERFORMEDBY' => Yii::t('app', 'Evt  Performedby'),
            'EVT_REVIEWEDBY' => Yii::t('app', 'Evt  Reviewedby'),
            'EVT_METERINTERVAL' => Yii::t('app', 'Evt  Meterinterval'),
            'EVT_METERINTERVAL2' => Yii::t('app', 'Evt  Meterinterval2'),
            'EVT_WORKADDRESS' => Yii::t('app', 'Evt  Workaddress'),
            'EVT_PFPROMISEDATE' => Yii::t('app', 'Evt  Pfpromisedate'),
            'EVT_TFPROMISEDATE' => Yii::t('app', 'Evt  Tfpromisedate'),
            'EVT_TFDATECOMPLETED' => Yii::t('app', 'Evt  Tfdatecompleted'),
            'EVT_EQUIPMENTUSABILITY' => Yii::t('app', 'Evt  Equipmentusability'),
            'EVT_EQUIPMENTUSABILITY_ORG' => Yii::t('app', 'Evt  Equipmentusability  Org'),
            'EVT_PROVIDER' => Yii::t('app', 'Evt  Provider'),
            'EVT_PROVIDER_ORG' => Yii::t('app', 'Evt  Provider  Org'),
            'EVT_SERVICEPROBLEM' => Yii::t('app', 'Evt  Serviceproblem'),
            'EVT_SERVICEPROBLEM_ORG' => Yii::t('app', 'Evt  Serviceproblem  Org'),
            'EVT_SERVICECATEGORY' => Yii::t('app', 'Evt  Servicecategory'),
            'EVT_SERVICECATEGORY_ORG' => Yii::t('app', 'Evt  Servicecategory  Org'),
            'EVT_UDFCHAR01' => Yii::t('app', 'Evt  Udfchar01'),
            'EVT_UDFCHAR02' => Yii::t('app', 'Evt  Udfchar02'),
            'EVT_UDFCHAR03' => Yii::t('app', 'Evt  Udfchar03'),
            'EVT_UDFCHAR04' => Yii::t('app', 'Evt  Udfchar04'),
            'EVT_UDFCHAR05' => Yii::t('app', 'Evt  Udfchar05'),
            'EVT_UDFCHAR06' => Yii::t('app', 'Evt  Udfchar06'),
            'EVT_UDFCHAR07' => Yii::t('app', 'Evt  Udfchar07'),
            'EVT_UDFCHAR08' => Yii::t('app', 'Evt  Udfchar08'),
            'EVT_UDFCHAR09' => Yii::t('app', 'Evt  Udfchar09'),
            'EVT_UDFCHAR10' => Yii::t('app', 'Evt  Udfchar10'),
            'EVT_UDFCHAR11' => Yii::t('app', 'Evt  Udfchar11'),
            'EVT_UDFCHAR12' => Yii::t('app', 'Evt  Udfchar12'),
            'EVT_UDFCHAR13' => Yii::t('app', 'Evt  Udfchar13'),
            'EVT_UDFCHAR14' => Yii::t('app', 'Evt  Udfchar14'),
            'EVT_UDFCHAR15' => Yii::t('app', 'Evt  Udfchar15'),
            'EVT_UDFCHAR16' => Yii::t('app', 'Evt  Udfchar16'),
            'EVT_UDFCHAR17' => Yii::t('app', 'Evt  Udfchar17'),
            'EVT_UDFCHAR18' => Yii::t('app', 'Evt  Udfchar18'),
            'EVT_UDFCHAR19' => Yii::t('app', 'Evt  Udfchar19'),
            'EVT_UDFCHAR20' => Yii::t('app', 'Evt  Udfchar20'),
            'EVT_UDFCHAR21' => Yii::t('app', 'Evt  Udfchar21'),
            'EVT_UDFCHAR22' => Yii::t('app', 'Evt  Udfchar22'),
            'EVT_UDFCHAR23' => Yii::t('app', 'Evt  Udfchar23'),
            'EVT_UDFCHAR24' => Yii::t('app', 'Evt  Udfchar24'),
            'EVT_UDFCHAR25' => Yii::t('app', 'Evt  Udfchar25'),
            'EVT_UDFCHAR26' => Yii::t('app', 'Evt  Udfchar26'),
            'EVT_UDFCHAR27' => Yii::t('app', 'Evt  Udfchar27'),
            'EVT_UDFCHAR28' => Yii::t('app', 'Evt  Udfchar28'),
            'EVT_UDFCHAR29' => Yii::t('app', 'Evt  Udfchar29'),
            'EVT_UDFCHAR30' => Yii::t('app', 'Evt  Udfchar30'),
            'EVT_UDFNUM01' => Yii::t('app', 'Evt  Udfnum01'),
            'EVT_UDFNUM02' => Yii::t('app', 'Evt  Udfnum02'),
            'EVT_UDFNUM03' => Yii::t('app', 'Evt  Udfnum03'),
            'EVT_UDFNUM04' => Yii::t('app', 'Evt  Udfnum04'),
            'EVT_UDFNUM05' => Yii::t('app', 'Evt  Udfnum05'),
            'EVT_UDFDATE01' => Yii::t('app', 'Evt  Udfdate01'),
            'EVT_UDFDATE02' => Yii::t('app', 'Evt  Udfdate02'),
            'EVT_UDFDATE03' => Yii::t('app', 'Evt  Udfdate03'),
            'EVT_UDFDATE04' => Yii::t('app', 'Evt  Udfdate04'),
            'EVT_UDFDATE05' => Yii::t('app', 'Evt  Udfdate05'),
            'EVT_UDFCHKBOX01' => Yii::t('app', 'Evt  Udfchkbox01'),
            'EVT_UDFCHKBOX02' => Yii::t('app', 'Evt  Udfchkbox02'),
            'EVT_UDFCHKBOX03' => Yii::t('app', 'Evt  Udfchkbox03'),
            'EVT_UDFCHKBOX04' => Yii::t('app', 'Evt  Udfchkbox04'),
            'EVT_UDFCHKBOX05' => Yii::t('app', 'Evt  Udfchkbox05'),
            'EVT_FROMPOINT' => Yii::t('app', 'Evt  Frompoint'),
            'EVT_FROMREFDESC' => Yii::t('app', 'Evt  Fromrefdesc'),
            'EVT_FROMGEOREF' => Yii::t('app', 'Evt  Fromgeoref'),
            'EVT_TOPOINT' => Yii::t('app', 'Evt  Topoint'),
            'EVT_TOREFDESC' => Yii::t('app', 'Evt  Torefdesc'),
            'EVT_TOGEOREF' => Yii::t('app', 'Evt  Togeoref'),
            'EVT_PERFORMONWEEK' => Yii::t('app', 'Evt  Performonweek'),
            'EVT_PERFORMONDAY' => Yii::t('app', 'Evt  Performonday'),
            'EVT_ALERT' => Yii::t('app', 'Evt  Alert'),
            'EVT_PRODUCTIONREQUEST' => Yii::t('app', 'Evt  Productionrequest'),
            'EVT_PRODUCTIONREQUESTREV' => Yii::t('app', 'Evt  Productionrequestrev'),
            'EVT_PRODUCTIONREQUEST_ORG' => Yii::t('app', 'Evt  Productionrequest  Org'),
            'EVT_PRODORDER' => Yii::t('app', 'Evt  Prodorder'),
            'EVT_PRODPRIORITY' => Yii::t('app', 'Evt  Prodpriority'),
            'EVT_ACCOUNTINGENTITY' => Yii::t('app', 'Evt  Accountingentity'),
            'EVT_PRODUCTIONSTART' => Yii::t('app', 'Evt  Productionstart'),
            'EVT_PRODUCTIONEND' => Yii::t('app', 'Evt  Productionend'),
            'EVT_LASTSTATUSUPDATE' => Yii::t('app', 'Evt  Laststatusupdate'),
            'EVT_MP' => Yii::t('app', 'Evt  Mp'),
            'EVT_MP_ORG' => Yii::t('app', 'Evt  Mp  Org'),
            'EVT_MP_REV' => Yii::t('app', 'Evt  Mp  Rev'),
            'EVT_MP_SEQ' => Yii::t('app', 'Evt  Mp  Seq'),
            'EVT_METERDUEDATE' => Yii::t('app', 'Evt  Meterduedate'),
            'EVT_METERDUEDATE2' => Yii::t('app', 'Evt  Meterduedate2'),
            'EVT_CAMPAIGN' => Yii::t('app', 'Evt  Campaign'),
            'EVT_CAMPAIGN_ORG' => Yii::t('app', 'Evt  Campaign  Org'),
            'EVT_CAMPAIGN_LINE' => Yii::t('app', 'Evt  Campaign  Line'),
            'EVT_CAMPAIGN_SURVEY' => Yii::t('app', 'Evt  Campaign  Survey'),
            'EVT_MPPROJTYPE' => Yii::t('app', 'Evt  Mpprojtype'),
            'EVT_PSQPK' => Yii::t('app', 'Evt  Psqpk'),
            'EVT_OKWINENDVAL2' => Yii::t('app', 'Evt  Okwinendval2'),
            'EVT_NEARWINBEGVAL2' => Yii::t('app', 'Evt  Nearwinbegval2'),
            'EVT_GENWINBEGVAL2' => Yii::t('app', 'Evt  Genwinbegval2'),
            'EVT_OUTPUTCALCTYPE' => Yii::t('app', 'Evt  Outputcalctype'),
            'EVT_CEILPERMIT' => Yii::t('app', 'Evt  Ceilpermit'),
            'EVT_LIFESAFETY' => Yii::t('app', 'Evt  Lifesafety'),
            'EVT_INFECTCONTROL' => Yii::t('app', 'Evt  Infectcontrol'),
            'EVT_PCRA' => Yii::t('app', 'Evt  Pcra'),
            'EVT_PFI' => Yii::t('app', 'Evt  Pfi'),
            'EVT_BURNPERMIT' => Yii::t('app', 'Evt  Burnpermit'),
            'EVT_PATIENTSAFETY' => Yii::t('app', 'Evt  Patientsafety'),
            'EVT_RECALLNOTICE' => Yii::t('app', 'Evt  Recallnotice'),
            'EVT_SMDA' => Yii::t('app', 'Evt  Smda'),
            'EVT_VISITORINJURY' => Yii::t('app', 'Evt  Visitorinjury'),
            'EVT_STAFFINJURY' => Yii::t('app', 'Evt  Staffinjury'),
            'EVT_SECURITYINCIDENT' => Yii::t('app', 'Evt  Securityincident'),
            'EVT_PROPERTYDAMAGE' => Yii::t('app', 'Evt  Propertydamage'),
            'EVT_HAZMATINCIDENT' => Yii::t('app', 'Evt  Hazmatincident'),
            'EVT_FIREINCIDENT' => Yii::t('app', 'Evt  Fireincident'),
            'EVT_MEDICEQUIPINCIDENT' => Yii::t('app', 'Evt  Medicequipincident'),
            'EVT_UTILITYINCIDENT' => Yii::t('app', 'Evt  Utilityincident'),
            'EVT_INVOICE' => Yii::t('app', 'Evt  Invoice'),
            'EVT_INVOICE_ORG' => Yii::t('app', 'Evt  Invoice  Org'),
            'EVT_INVOICE_REVISION' => Yii::t('app', 'Evt  Invoice  Revision'),
            'EVT_INVOICELINE' => Yii::t('app', 'Evt  Invoiceline'),
            'EVT_PHONE' => Yii::t('app', 'Evt  Phone'),
            'EVT_EMAIL' => Yii::t('app', 'Evt  Email'),
            'EVT_LOCKOUT' => Yii::t('app', 'Evt  Lockout'),
            'EVT_PERSONALPROTECTIVEEQUIP' => Yii::t('app', 'Evt  Personalprotectiveequip'),
            'EVT_CONFINEDSPACE' => Yii::t('app', 'Evt  Confinedspace'),
            'EVT_STATEMENTOFCOND' => Yii::t('app', 'Evt  Statementofcond'),
            'EVT_BUILDMAINTPROGRAM' => Yii::t('app', 'Evt  Buildmaintprogram'),
            'EVT_HIPAACONFIDENTIALITY' => Yii::t('app', 'Evt  Hipaaconfidentiality'),
            'EVT_FACILITY' => Yii::t('app', 'Evt  Facility'),
            'EVT_FACILITY_ORG' => Yii::t('app', 'Evt  Facility  Org'),
            'EVT_ADDITIONALINFO' => Yii::t('app', 'Evt  Additionalinfo'),
            'EVT_SAFETYREVIEWED' => Yii::t('app', 'Evt  Safetyreviewed'),
            'EVT_SAFETYREVIEWEDBY' => Yii::t('app', 'Evt  Safetyreviewedby'),
            'EVT_SAFETYREVIEWEDNAME' => Yii::t('app', 'Evt  Safetyreviewedname'),
            'EVT_SAFETYREVIEWEDTYPE' => Yii::t('app', 'Evt  Safetyreviewedtype'),
            'EVT_PERMITREVIEWED' => Yii::t('app', 'Evt  Permitreviewed'),
            'EVT_PERMITREVIEWEDBY' => Yii::t('app', 'Evt  Permitreviewedby'),
            'EVT_PERMITREVIEWEDNAME' => Yii::t('app', 'Evt  Permitreviewedname'),
            'EVT_PERMITREVIEWEDTYPE' => Yii::t('app', 'Evt  Permitreviewedtype'),
            'EVT_ORIGWO' => Yii::t('app', 'Evt  Origwo'),
            'EVT_ORIGACT' => Yii::t('app', 'Evt  Origact'),
            'EVT_MINOR' => Yii::t('app', 'Evt  Minor'),
            'EVT_GUESTPROFILEID' => Yii::t('app', 'Evt  Guestprofileid'),
            'EVT_MANAGERPROFILEID' => Yii::t('app', 'Evt  Managerprofileid'),
            'EVT_GUESTSALUTATION' => Yii::t('app', 'Evt  Guestsalutation'),
            'EVT_GUESTFIRSTNAME' => Yii::t('app', 'Evt  Guestfirstname'),
            'EVT_GUESTLASTNAME' => Yii::t('app', 'Evt  Guestlastname'),
            'EVT_GUESTMIDDLENAME' => Yii::t('app', 'Evt  Guestmiddlename'),
            'EVT_GUESTEMAIL' => Yii::t('app', 'Evt  Guestemail'),
            'EVT_GUESTPHONEDECIMAL' => Yii::t('app', 'Evt  Guestphonedecimal'),
            'EVT_VIPSTATUS' => Yii::t('app', 'Evt  Vipstatus'),
            'EVT_RESERVATIONNUM' => Yii::t('app', 'Evt  Reservationnum'),
            'EVT_SCHEDULEDSTARTTIME' => Yii::t('app', 'Evt  Scheduledstarttime'),
            'EVT_SCHEDULEDENDTIME' => Yii::t('app', 'Evt  Scheduledendtime'),
            'EVT_INSPECTIONDIRECTION' => Yii::t('app', 'Evt  Inspectiondirection'),
            'EVT_FLOW' => Yii::t('app', 'Evt  Flow'),
            'EVT_CALCULATEDPRIORITY' => Yii::t('app', 'Evt  Calculatedpriority'),
            'EVT_PRESERVECALCPRIORITY' => Yii::t('app', 'Evt  Preservecalcpriority'),
            'EVT_SUPPLIER' => Yii::t('app', 'Evt  Supplier'),
            'EVT_SUPPLIER_ORG' => Yii::t('app', 'Evt  Supplier  Org'),
            'EVT_CASEMANAGEMENT' => Yii::t('app', 'Evt  Casemanagement'),
            'EVT_CASEMANAGEMENTTASK' => Yii::t('app', 'Evt  Casemanagementtask'),
            'EVT_ORIGCASEMANAGEMENT' => Yii::t('app', 'Evt  Origcasemanagement'),
            'EVT_DUPCASEMANAGEMENT' => Yii::t('app', 'Evt  Dupcasemanagement'),
            'EVT_CONTACTRECORD' => Yii::t('app', 'Evt  Contactrecord'),
            'EVT_CONTACTRECORD_ORG' => Yii::t('app', 'Evt  Contactrecord  Org'),
            'EVT_WORKSPACE' => Yii::t('app', 'Evt  Workspace'),
            'EVT_LATITUDE' => Yii::t('app', 'Evt  Latitude'),
            'EVT_LONGITUDE' => Yii::t('app', 'Evt  Longitude'),
            'EVT_FROM_REFERENCE' => Yii::t('app', 'Evt  From  Reference'),
            'EVT_FROM_OFFSET' => Yii::t('app', 'Evt  From  Offset'),
            'EVT_FROM_OFFSET_PERCENTAGE' => Yii::t('app', 'Evt  From  Offset  Percentage'),
            'EVT_FROM_OFFSET_DIRECTION' => Yii::t('app', 'Evt  From  Offset  Direction'),
            'EVT_FROM_XCOORDINATE' => Yii::t('app', 'Evt  From  Xcoordinate'),
            'EVT_FROM_YCOORDINATE' => Yii::t('app', 'Evt  From  Ycoordinate'),
            'EVT_FROM_LATITUDE' => Yii::t('app', 'Evt  From  Latitude'),
            'EVT_FROM_LONGITUDE' => Yii::t('app', 'Evt  From  Longitude'),
            'EVT_FROM_RELATIONSHIP_TYPE' => Yii::t('app', 'Evt  From  Relationship  Type'),
            'EVT_FROM_HORIZONTAL_OFFSET' => Yii::t('app', 'Evt  From  Horizontal  Offset'),
            'EVT_FROM_HORIZONTAL_OFFSETUOM' => Yii::t('app', 'Evt  From  Horizontal  Offsetuom'),
            'EVT_FROM_HORIZONTAL_OFFSETTYPE' => Yii::t('app', 'Evt  From  Horizontal  Offsettype'),
            'EVT_FROM_VERTICAL_OFFSET' => Yii::t('app', 'Evt  From  Vertical  Offset'),
            'EVT_FROM_VERTICAL_OFFSETUOM' => Yii::t('app', 'Evt  From  Vertical  Offsetuom'),
            'EVT_FROM_VERTICAL_OFFSETTYPE' => Yii::t('app', 'Evt  From  Vertical  Offsettype'),
            'EVT_TO_REFERENCE' => Yii::t('app', 'Evt  To  Reference'),
            'EVT_TO_OFFSET' => Yii::t('app', 'Evt  To  Offset'),
            'EVT_TO_OFFSET_DIRECTION' => Yii::t('app', 'Evt  To  Offset  Direction'),
            'EVT_TO_OFFSET_PERCENTAGE' => Yii::t('app', 'Evt  To  Offset  Percentage'),
            'EVT_TO_XCOORDINATE' => Yii::t('app', 'Evt  To  Xcoordinate'),
            'EVT_TO_YCOORDINATE' => Yii::t('app', 'Evt  To  Ycoordinate'),
            'EVT_TO_LATITUDE' => Yii::t('app', 'Evt  To  Latitude'),
            'EVT_TO_LONGITUDE' => Yii::t('app', 'Evt  To  Longitude'),
            'EVT_TO_RELATIONSHIP_TYPE' => Yii::t('app', 'Evt  To  Relationship  Type'),
            'EVT_TO_HORIZONTAL_OFFSET' => Yii::t('app', 'Evt  To  Horizontal  Offset'),
            'EVT_TO_HORIZONTAL_OFFSETUOM' => Yii::t('app', 'Evt  To  Horizontal  Offsetuom'),
            'EVT_TO_HORIZONTAL_OFFSETTYPE' => Yii::t('app', 'Evt  To  Horizontal  Offsettype'),
            'EVT_TO_VERTICAL_OFFSET' => Yii::t('app', 'Evt  To  Vertical  Offset'),
            'EVT_TO_VERTICAL_OFFSETUOM' => Yii::t('app', 'Evt  To  Vertical  Offsetuom'),
            'EVT_TO_VERTICAL_OFFSETTYPE' => Yii::t('app', 'Evt  To  Vertical  Offsettype'),
            'EVT_RELATIONSHIP_TYPE' => Yii::t('app', 'Evt  Relationship  Type'),
        ];
    }

    /**
     * @inheritdoc
     * @return EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventsQuery(get_called_class());
    }
}
