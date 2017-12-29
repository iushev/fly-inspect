<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "R5OBJECTS".
 *
 * @property string $OBJ_OBTYPE
 * @property string $OBJ_OBRTYPE
 * @property string $OBJ_CODE
 * @property string $OBJ_DESC
 * @property string $OBJ_CLASS
 * @property string $OBJ_CATEGORY
 * @property string $OBJ_COSTCODE
 * @property string $OBJ_LTYPE
 * @property string $OBJ_LOCATION
 * @property string $OBJ_TAG
 * @property string $OBJ_PTYPE
 * @property string $OBJ_POSITION
 * @property string $OBJ_PARENT
 * @property string $OBJ_DEPEND
 * @property string $OBJ_MANUFACT
 * @property string $OBJ_MRC
 * @property string $OBJ_PART
 * @property string $OBJ_SERIALNO
 * @property string $OBJ_STORE
 * @property string $OBJ_STATUS
 * @property string $OBJ_RSTATUS
 * @property string $OBJ_COMMISS
 * @property string $OBJ_WITHDRAW
 * @property string $OBJ_RECORD
 * @property string $OBJ_GROUP
 * @property string $OBJ_USER
 * @property string $OBJ_ORDER
 * @property string $OBJ_ORDERLINE
 * @property string $OBJ_PRODUCTION
 * @property string $OBJ_PRIMARYUOM
 * @property string $OBJ_ACD
 * @property string $OBJ_NOTUSED
 * @property string $OBJ_SAFETY
 * @property string $OBJ_CRITICALITY
 * @property string $OBJ_PROFILE
 * @property string $OBJ_MANUFACTMODEL
 * @property string $OBJ_MANUFACTREVNUM
 * @property string $OBJ_VALUE
 * @property string $OBJ_SOURCESYSTEM
 * @property string $OBJ_SOURCECODE
 * @property string $OBJ_VARIABLE1
 * @property string $OBJ_VARIABLE2
 * @property string $OBJ_VARIABLE3
 * @property string $OBJ_VARIABLE4
 * @property string $OBJ_VARIABLE5
 * @property string $OBJ_VARIABLE6
 * @property string $OBJ_STATE
 * @property string $OBJ_RSTATE
 * @property string $OBJ_CN
 * @property string $OBJ_ORG
 * @property string $OBJ_CLASS_ORG
 * @property string $OBJ_LOCATION_ORG
 * @property string $OBJ_POSITION_ORG
 * @property string $OBJ_PARENT_ORG
 * @property string $OBJ_ORDER_ORG
 * @property string $OBJ_PART_ORG
 * @property string $OBJ_BIN
 * @property string $OBJ_LOT
 * @property string $OBJ_SYSLEVEL
 * @property string $OBJ_ASMLEVEL
 * @property string $OBJ_COMPLEVEL
 * @property string $OBJ_UPDATED
 * @property string $OBJ_UPDATEDBY
 * @property string $OBJ_PREVENTEVTCOMP
 * @property string $OBJ_PERSON
 * @property string $OBJ_ESIGNATURE
 * @property string $OBJ_UPDATECOUNT
 * @property string $OBJ_DORMSTART
 * @property string $OBJ_DORMEND
 * @property string $OBJ_DORMREUSE
 * @property string $OBJ_GISOBJID
 * @property string $OBJ_GISPROFILE
 * @property string $OBJ_PROFILE_ORG
 * @property string $OBJ_SOLDDATE
 * @property string $OBJ_TRANSFERDATE
 * @property string $OBJ_CGMP
 * @property string $OBJ_TESTPOINTUOM
 * @property string $OBJ_OUTPUTUOM
 * @property string $OBJ_INCREMENT
 * @property string $OBJ_PRECISION
 * @property string $OBJ_PIDNO
 * @property string $OBJ_PIDDRAWING
 * @property string $OBJ_SERVICEPERC
 * @property string $OBJ_DEVICETOLFROM
 * @property string $OBJ_DEVICETOLTO
 * @property string $OBJ_DEVICETOLTYPE
 * @property string $OBJ_DEVICERANGEFROM
 * @property string $OBJ_DEVICERANGETO
 * @property string $OBJ_OUTPUTRANGEFROM
 * @property string $OBJ_OUTPUTRANGETO
 * @property string $OBJ_PROCESSTOLFROM
 * @property string $OBJ_PROCESSTOLTO
 * @property string $OBJ_PROCESSRANGEFROM
 * @property string $OBJ_PROCESSRANGETO
 * @property string $OBJ_SET
 * @property string $OBJ_SOP
 * @property string $OBJ_LOOP
 * @property string $OBJ_INSTRUMENT
 * @property string $OBJ_INSTRUMENTTYPE
 * @property string $OBJ_INTERFACE
 * @property string $OBJ_LINKGISWO
 * @property string $OBJ_GISLAYER
 * @property string $OBJ_XLOCATION
 * @property string $OBJ_YLOCATION
 * @property string $OBJ_LENGTH
 * @property string $OBJ_LENGTHUOM
 * @property string $OBJ_LINEARREFUOM
 * @property string $OBJ_LINEARREFPRECISION
 * @property string $OBJ_GEOREF
 * @property string $OBJ_VEHICLE
 * @property string $OBJ_FLEETCUSTOMER
 * @property string $OBJ_FLEETCUSTOMER_ORG
 * @property string $OBJ_BILLINGCODE
 * @property string $OBJ_BILLINGCODE_ORG
 * @property string $OBJ_MARKUPCODE
 * @property string $OBJ_MARKUPCODE_ORG
 * @property string $OBJ_VEHICLERSTATUS
 * @property string $OBJ_VEHICLESTATUS
 * @property string $OBJ_ISSUEDTO
 * @property string $OBJ_JECATEGORY
 * @property string $OBJ_JESOURCE
 * @property string $OBJ_GLTRANSFERFLAG
 * @property string $OBJ_GLTRANSFER
 * @property string $OBJ_MINPENALTY
 * @property string $OBJ_PENALTYFACTOR
 * @property string $OBJ_CALGROUP
 * @property string $OBJ_CALGROUPORG
 * @property string $OBJ_UDFCHAR01
 * @property string $OBJ_UDFCHAR02
 * @property string $OBJ_UDFCHAR03
 * @property string $OBJ_UDFCHAR04
 * @property string $OBJ_UDFCHAR05
 * @property string $OBJ_UDFCHAR06
 * @property string $OBJ_UDFCHAR07
 * @property string $OBJ_UDFCHAR08
 * @property string $OBJ_UDFCHAR09
 * @property string $OBJ_UDFCHAR10
 * @property string $OBJ_UDFCHAR11
 * @property string $OBJ_UDFCHAR12
 * @property string $OBJ_UDFCHAR13
 * @property string $OBJ_UDFCHAR14
 * @property string $OBJ_UDFCHAR15
 * @property string $OBJ_UDFCHAR16
 * @property string $OBJ_UDFCHAR17
 * @property string $OBJ_UDFCHAR18
 * @property string $OBJ_UDFCHAR19
 * @property string $OBJ_UDFCHAR20
 * @property string $OBJ_UDFCHAR21
 * @property string $OBJ_UDFCHAR22
 * @property string $OBJ_UDFCHAR23
 * @property string $OBJ_UDFCHAR24
 * @property string $OBJ_UDFCHAR25
 * @property string $OBJ_UDFCHAR26
 * @property string $OBJ_UDFCHAR27
 * @property string $OBJ_UDFCHAR28
 * @property string $OBJ_UDFCHAR29
 * @property string $OBJ_UDFCHAR30
 * @property string $OBJ_UDFNUM01
 * @property string $OBJ_UDFNUM02
 * @property string $OBJ_UDFNUM03
 * @property string $OBJ_UDFNUM04
 * @property string $OBJ_UDFNUM05
 * @property string $OBJ_UDFDATE01
 * @property string $OBJ_UDFDATE02
 * @property string $OBJ_UDFDATE03
 * @property string $OBJ_UDFDATE04
 * @property string $OBJ_UDFDATE05
 * @property string $OBJ_UDFCHKBOX01
 * @property string $OBJ_UDFCHKBOX02
 * @property string $OBJ_UDFCHKBOX03
 * @property string $OBJ_UDFCHKBOX04
 * @property string $OBJ_UDFCHKBOX05
 * @property string $OBJ_SDMPRESENT
 * @property string $OBJ_SDMPATH
 * @property string $OBJ_COSTOFNEEDEDREPAIRS
 * @property string $OBJ_REPLACEMENTVALUE
 * @property string $OBJ_FACILITYCONDITIONINDEX
 * @property string $OBJ_BILLABLE
 * @property string $OBJ_GASINDEX
 * @property string $OBJ_FLOORAREA
 * @property string $OBJ_FLOORAREAUOM
 * @property string $OBJ_ESTREVENUE
 * @property string $OBJ_REGION
 * @property string $OBJ_PRIMARYUSE
 * @property string $OBJ_YEARBUILT
 * @property string $OBJ_SERVICELIFE
 * @property string $OBJ_RESOURCE
 * @property string $OBJ_RESOURCEPRESENT
 * @property string $OBJ_LASTSTATUSUPDATE
 * @property string $OBJ_REGION_ORG
 * @property string $OBJ_GISMAP
 * @property string $OBJ_GISMAP_ORG
 * @property string $OBJ_ENERGYSTARELIGIBLE
 * @property string $OBJ_RELIABILITYRANKING
 * @property string $OBJ_RELIABILITYRANKING_ORG
 * @property string $OBJ_RELIABILITYRANKINGREV
 * @property string $OBJ_RELIABILITYRANKINGINDEX
 * @property string $OBJ_RELIABILITYRANKINGSCORE
 * @property string $OBJ_RELIABILITYRANKINGLOCKED
 * @property string $OBJ_RRVALUESLASTCALCULATED
 * @property string $OBJ_RRSURVEYLASTUPDATED
 * @property string $OBJ_OUTPUTCALCTYPE
 * @property string $OBJ_GIS_UPDATECOUNT
 * @property string $OBJ_GIS_SYNCCOUNT
 * @property string $OBJ_ALIAS
 * @property string $OBJ_RENTAL
 * @property string $OBJ_RENTALTEMPLATE
 * @property string $OBJ_RENTALTEMPLATE_ORG
 * @property string $OBJ_CONTRACT
 * @property string $OBJ_CONTRACTTEMPLATE
 * @property string $OBJ_CONTRACTTEMPLATE_ORG
 * @property string $OBJ_CUSTOMER
 * @property string $OBJ_CUSTOMER_ORG
 * @property string $OBJ_AVAILABILITYSTATUS
 * @property string $OBJ_AVAILABILITYRSTATUS
 * @property string $OBJ_TEMPMONITORED
 * @property string $OBJ_HARDWAREVER
 * @property string $OBJ_SOFTWAREVER
 * @property string $OBJ_PURCHASINGASSET
 * @property string $OBJ_BIOMEDICALASSET
 * @property string $OBJ_OEMSITE
 * @property string $OBJ_VENDOR
 * @property string $OBJ_COVERAGETYPE
 * @property string $OBJ_LOCKOUT
 * @property string $OBJ_PERSONALPROTECTIVEEQUIP
 * @property string $OBJ_CONFINEDSPACE
 * @property string $OBJ_STATEMENTOFCOND
 * @property string $OBJ_BUILDMAINTPROGRAM
 * @property string $OBJ_HIPAACONFIDENTIALITY
 * @property string $OBJ_OWNERSHIPTYPE
 * @property string $OBJ_INVENTORYVERIFICATIONDATE
 * @property string $OBJ_PURCHASEORDER
 * @property string $OBJ_PURCHASEDATE
 * @property string $OBJ_PURCHASECOST
 * @property string $OBJ_INSTALLDATE
 * @property string $OBJ_DISPOSALTYPE
 * @property string $OBJ_ROOMTYPE
 * @property string $OBJ_UNITTYPE
 * @property string $OBJ_GUESTFIRSTNAME
 * @property string $OBJ_GUESTMIDDLENAME
 * @property string $OBJ_GUESTLASTNAME
 * @property string $OBJ_VIPSTATUS
 * @property string $OBJ_MAXGUESTCOUNT
 * @property string $OBJ_PHONEDECIMAL
 * @property string $OBJ_KEYDECIMAL
 * @property string $OBJ_ACCESSIBLE
 * @property string $OBJ_NONSMOKING
 * @property string $OBJ_SQFOOTAGE
 * @property string $OBJ_BEDCOUNT
 * @property string $OBJ_BATHCOUNT
 * @property string $OBJ_KITCHEN
 * @property string $OBJ_LIVINGROOM
 * @property string $OBJ_OPENBAY
 * @property string $OBJ_BUILDING
 * @property string $OBJ_WING
 * @property string $OBJ_FLOOR
 * @property string $OBJ_EXPOSURE
 * @property string $OBJ_XCOORDINATE
 * @property string $OBJ_YCOORDINATE
 * @property string $OBJ_ZCOORDINATE
 * @property string $OBJ_UMDNSCODE
 * @property string $OBJ_FCICALCULATION
 * @property string $OBJ_GUESTSALUTATION
 * @property string $OBJ_GUESTPHONEDECIMAL
 * @property string $OBJ_EMAIL
 * @property string $OBJ_DRIVER
 * @property string $OBJ_UDFCHAR31
 * @property string $OBJ_UDFCHAR32
 * @property string $OBJ_UDFCHAR33
 * @property string $OBJ_UDFCHAR34
 * @property string $OBJ_UDFCHAR35
 * @property string $OBJ_UDFCHAR36
 * @property string $OBJ_UDFCHAR37
 * @property string $OBJ_UDFCHAR38
 * @property string $OBJ_UDFCHAR39
 * @property string $OBJ_UDFCHAR40
 * @property string $OBJ_UDFCHAR41
 * @property string $OBJ_UDFCHAR42
 * @property string $OBJ_UDFCHAR43
 * @property string $OBJ_UDFCHAR44
 * @property string $OBJ_UDFCHAR45
 * @property string $OBJ_UDFNUM06
 * @property string $OBJ_UDFNUM07
 * @property string $OBJ_UDFNUM08
 * @property string $OBJ_UDFNUM09
 * @property string $OBJ_UDFNUM10
 * @property string $OBJ_UDFDATE06
 * @property string $OBJ_UDFDATE07
 * @property string $OBJ_UDFDATE08
 * @property string $OBJ_UDFDATE09
 * @property string $OBJ_UDFDATE10
 * @property string $OBJ_UDFCHKBOX06
 * @property string $OBJ_UDFCHKBOX07
 * @property string $OBJ_UDFCHKBOX08
 * @property string $OBJ_UDFCHKBOX09
 * @property string $OBJ_UDFCHKBOX10
 * @property string $OBJ_FACILITY
 * @property string $OBJ_COUNTRY
 * @property string $OBJ_TARGETPOWERFACTOR
 * @property string $OBJ_TARGETPEAKDEMAND
 * @property string $OBJ_STARTBILLINGPERIOD
 * @property string $OBJ_BILLEVERYPERIOD
 * @property string $OBJ_BILLEVERYPERIODUOM
 * @property string $OBJ_EFFLOSSPHASEIMBALANCE1
 * @property string $OBJ_EFFLOSSPHASEIMBALANCE2
 * @property string $OBJ_EFFLOSSPHASEIMBALANCE3
 * @property string $OBJ_EFFLOSSPHASEIMBALANCE4
 * @property string $OBJ_EFFLOSSPHASEIMBALANCE5
 * @property string $OBJ_PERFORMANCEMANAGER
 * @property string $OBJ_ELECSUBMETERINTERVAL
 * @property string $OBJ_ELECUSAGETHRESHOLD
 * @property string $OBJ_SAFETYREVIEWREQUIRED
 * @property string $OBJ_SAFETYREVIEWED
 * @property string $OBJ_SAFETYREVIEWEDBY
 * @property string $OBJ_SAFETYREVIEWEDNAME
 * @property string $OBJ_SAFETYREVIEWEDTYPE
 * @property string $OBJ_PERMITREVIEWREQUIRED
 * @property string $OBJ_PERMITREVIEWED
 * @property string $OBJ_PERMITREVIEWEDBY
 * @property string $OBJ_PERMITREVIEWEDNAME
 * @property string $OBJ_PERMITREVIEWEDTYPE
 * @property string $OBJ_LOTOREVIEWREQUIRED
 * @property string $OBJ_LOTOREVIEWED
 * @property string $OBJ_LOTOREVIEWEDBY
 * @property string $OBJ_LOTOREVIEWEDNAME
 * @property string $OBJ_LOTOREVIEWEDTYPE
 * @property string $OBJ_COMPLOCATION
 * @property string $OBJ_ORIGCONFIGCODE
 * @property string $OBJ_ORIGCONFIGORG
 * @property string $OBJ_ORIGCONFIGREV
 * @property string $OBJ_ORIGOBJECT
 * @property string $OBJ_CONFIGCODE
 * @property string $OBJ_CONFIGREVISION
 * @property string $OBJ_CONFIGSTATUS
 * @property string $OBJ_CONFIGRSTATUS
 * @property string $OBJ_CONFIGTYPE
 * @property string $OBJ_CONFIGSPECIFIC
 * @property string $OBJ_CONFIGPREFIX
 * @property string $OBJ_CONFIGSUFFIX
 * @property string $OBJ_CONFIGSEQLENGTH
 * @property string $OBJ_CONFIGAUTONUM
 * @property string $OBJ_CONFIGSTWO
 * @property string $OBJ_CONFIGREQUESTED
 * @property string $OBJ_CONFIGREQUESTEDBY
 * @property string $OBJ_CONFIGAPPROVED
 * @property string $OBJ_CONFIGAPPROVEDBY
 * @property string $OBJ_CREATED
 * @property string $OBJ_CREATEDBY
 * @property string $OBJ_CONFIGREVISIONREASON
 * @property string $OBJ_CONFIGDEFAULTSTATUS
 * @property string $OBJ_GUESTPROFILEID
 * @property string $OBJ_MANAGERPROFILEID
 * @property string $OBJ_RCMLEVEL
 * @property string $OBJ_RISKLEVEL
 * @property string $OBJ_RPN
 * @property string $OBJ_VEHICLETYPE
 * @property string $OBJ_LINEARCOSTWEIGHT
 * @property string $OBJ_INSPECTIONDIRECTION
 * @property string $OBJ_FLOW
 * @property string $OBJ_ORIGINALRECEIPTDATE
 * @property string $OBJ_LATESTRECEIPTDATE
 * @property string $OBJ_ORIGINALINSTALLDATE
 * @property string $OBJ_LATESTINSTALLDATE
 * @property string $OBJ_OPERATIONALSTATUS
 * @property string $OBJ_OPERATIONALRSTATUS
 * @property string $OBJ_LOANEDDEPT
 * @property string $OBJ_WODEPT
 * @property string $OBJ_PMWODEPT
 * @property string $OBJ_DOCUMOTO_BOOKID
 * @property string $OBJ_RESCALOWNER
 * @property string $OBJ_WORKSPACE
 * @property string $OBJ_CONFIGUSEPARENTCODE
 * @property string $OBJ_CONFIGPARENTSEPARATOR
 * @property string $OBJ_IMAGEURL
 * @property string $OBJ_PRIMARYSYSTEM
 * @property string $OBJ_PRIMARYSYSTEM_ORG
 * @property string $OBJ_CONDITIONINDEX
 * @property string $OBJ_CONDITIONSCORE
 * @property string $OBJ_LINEAROBJTYPE
 * @property string $OBJ_DIRECTION
 * @property string $OBJ_FROMPOINT
 * @property string $OBJ_TOPOINT
 */
class Objects extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'R5OBJECTS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OBJ_COMMISS', 'OBJ_WITHDRAW', 'OBJ_RECORD', 'OBJ_UPDATED', 'OBJ_DORMSTART', 'OBJ_DORMEND', 'OBJ_SOLDDATE', 'OBJ_TRANSFERDATE', 'OBJ_INTERFACE', 'OBJ_GLTRANSFER', 'OBJ_UDFDATE01', 'OBJ_UDFDATE02', 'OBJ_UDFDATE03', 'OBJ_UDFDATE04', 'OBJ_UDFDATE05', 'OBJ_LASTSTATUSUPDATE', 'OBJ_RRVALUESLASTCALCULATED', 'OBJ_RRSURVEYLASTUPDATED', 'OBJ_INVENTORYVERIFICATIONDATE', 'OBJ_PURCHASEDATE', 'OBJ_INSTALLDATE', 'OBJ_UDFDATE06', 'OBJ_UDFDATE07', 'OBJ_UDFDATE08', 'OBJ_UDFDATE09', 'OBJ_UDFDATE10', 'OBJ_STARTBILLINGPERIOD', 'OBJ_SAFETYREVIEWREQUIRED', 'OBJ_SAFETYREVIEWED', 'OBJ_PERMITREVIEWREQUIRED', 'OBJ_PERMITREVIEWED', 'OBJ_LOTOREVIEWREQUIRED', 'OBJ_LOTOREVIEWED', 'OBJ_CONFIGREQUESTED', 'OBJ_CONFIGAPPROVED', 'OBJ_CREATED', 'OBJ_ORIGINALRECEIPTDATE', 'OBJ_LATESTRECEIPTDATE', 'OBJ_ORIGINALINSTALLDATE', 'OBJ_LATESTINSTALLDATE'], 'safe'],
            [['OBJ_ORDERLINE', 'OBJ_ACD', 'OBJ_VALUE', 'OBJ_UPDATECOUNT', 'OBJ_GISOBJID', 'OBJ_INCREMENT', 'OBJ_PRECISION', 'OBJ_SERVICEPERC', 'OBJ_DEVICETOLFROM', 'OBJ_DEVICETOLTO', 'OBJ_DEVICERANGEFROM', 'OBJ_DEVICERANGETO', 'OBJ_OUTPUTRANGEFROM', 'OBJ_OUTPUTRANGETO', 'OBJ_PROCESSTOLFROM', 'OBJ_PROCESSTOLTO', 'OBJ_PROCESSRANGEFROM', 'OBJ_PROCESSRANGETO', 'OBJ_XLOCATION', 'OBJ_YLOCATION', 'OBJ_LENGTH', 'OBJ_LINEARREFPRECISION', 'OBJ_MINPENALTY', 'OBJ_PENALTYFACTOR', 'OBJ_UDFNUM01', 'OBJ_UDFNUM02', 'OBJ_UDFNUM03', 'OBJ_UDFNUM04', 'OBJ_UDFNUM05', 'OBJ_COSTOFNEEDEDREPAIRS', 'OBJ_REPLACEMENTVALUE', 'OBJ_FACILITYCONDITIONINDEX', 'OBJ_FLOORAREA', 'OBJ_ESTREVENUE', 'OBJ_YEARBUILT', 'OBJ_SERVICELIFE', 'OBJ_RELIABILITYRANKINGREV', 'OBJ_RELIABILITYRANKINGSCORE', 'OBJ_GIS_UPDATECOUNT', 'OBJ_GIS_SYNCCOUNT', 'OBJ_PURCHASECOST', 'OBJ_SQFOOTAGE', 'OBJ_BEDCOUNT', 'OBJ_BATHCOUNT', 'OBJ_XCOORDINATE', 'OBJ_YCOORDINATE', 'OBJ_ZCOORDINATE', 'OBJ_UDFNUM06', 'OBJ_UDFNUM07', 'OBJ_UDFNUM08', 'OBJ_UDFNUM09', 'OBJ_UDFNUM10', 'OBJ_COUNTRY', 'OBJ_TARGETPOWERFACTOR', 'OBJ_TARGETPEAKDEMAND', 'OBJ_BILLEVERYPERIOD', 'OBJ_EFFLOSSPHASEIMBALANCE1', 'OBJ_EFFLOSSPHASEIMBALANCE2', 'OBJ_EFFLOSSPHASEIMBALANCE3', 'OBJ_EFFLOSSPHASEIMBALANCE4', 'OBJ_EFFLOSSPHASEIMBALANCE5', 'OBJ_ELECSUBMETERINTERVAL', 'OBJ_ELECUSAGETHRESHOLD', 'OBJ_ORIGCONFIGREV', 'OBJ_CONFIGREVISION', 'OBJ_CONFIGSEQLENGTH', 'OBJ_GUESTPROFILEID', 'OBJ_RPN', 'OBJ_LINEARCOSTWEIGHT', 'OBJ_CONDITIONSCORE', 'OBJ_FROMPOINT', 'OBJ_TOPOINT'], 'number'],
            [['OBJ_OBTYPE', 'OBJ_OBRTYPE', 'OBJ_LTYPE', 'OBJ_PTYPE', 'OBJ_STATUS', 'OBJ_RSTATUS', 'OBJ_STATE', 'OBJ_RSTATE', 'OBJ_SET', 'OBJ_VEHICLERSTATUS', 'OBJ_VEHICLESTATUS', 'OBJ_OUTPUTCALCTYPE', 'OBJ_AVAILABILITYSTATUS', 'OBJ_AVAILABILITYRSTATUS', 'OBJ_MAXGUESTCOUNT', 'OBJ_SAFETYREVIEWEDTYPE', 'OBJ_PERMITREVIEWEDTYPE', 'OBJ_LOTOREVIEWEDTYPE', 'OBJ_CONFIGSTATUS', 'OBJ_CONFIGRSTATUS', 'OBJ_CONFIGTYPE', 'OBJ_CONFIGDEFAULTSTATUS', 'OBJ_OPERATIONALSTATUS', 'OBJ_OPERATIONALRSTATUS'], 'string', 'max' => 4],
            [['OBJ_CODE', 'OBJ_CATEGORY', 'OBJ_COSTCODE', 'OBJ_LOCATION', 'OBJ_POSITION', 'OBJ_PARENT', 'OBJ_PART', 'OBJ_SERIALNO', 'OBJ_USER', 'OBJ_ORDER', 'OBJ_PRIMARYUOM', 'OBJ_PROFILE', 'OBJ_MANUFACTMODEL', 'OBJ_VARIABLE1', 'OBJ_VARIABLE2', 'OBJ_VARIABLE3', 'OBJ_VARIABLE4', 'OBJ_VARIABLE5', 'OBJ_VARIABLE6', 'OBJ_SYSLEVEL', 'OBJ_ASMLEVEL', 'OBJ_COMPLEVEL', 'OBJ_UPDATEDBY', 'OBJ_TESTPOINTUOM', 'OBJ_OUTPUTUOM', 'OBJ_SOP', 'OBJ_FLEETCUSTOMER', 'OBJ_ISSUEDTO', 'OBJ_FLOORAREAUOM', 'OBJ_REGION', 'OBJ_GISMAP', 'OBJ_RELIABILITYRANKING', 'OBJ_ALIAS', 'OBJ_RENTALTEMPLATE', 'OBJ_CONTRACTTEMPLATE', 'OBJ_CUSTOMER', 'OBJ_HARDWAREVER', 'OBJ_SOFTWAREVER', 'OBJ_PURCHASINGASSET', 'OBJ_BIOMEDICALASSET', 'OBJ_PURCHASEORDER', 'OBJ_KEYDECIMAL', 'OBJ_BUILDING', 'OBJ_WING', 'OBJ_FLOOR', 'OBJ_EXPOSURE', 'OBJ_UMDNSCODE', 'OBJ_SAFETYREVIEWEDBY', 'OBJ_PERMITREVIEWEDBY', 'OBJ_LOTOREVIEWEDBY', 'OBJ_ORIGCONFIGCODE', 'OBJ_ORIGOBJECT', 'OBJ_CONFIGCODE', 'OBJ_CONFIGPREFIX', 'OBJ_CONFIGSUFFIX', 'OBJ_CONFIGREQUESTEDBY', 'OBJ_CONFIGAPPROVEDBY', 'OBJ_CREATEDBY', 'OBJ_RISKLEVEL', 'OBJ_RESCALOWNER', 'OBJ_WORKSPACE', 'OBJ_PRIMARYSYSTEM'], 'string', 'max' => 30],
            [['OBJ_DESC', 'OBJ_PIDNO', 'OBJ_PIDDRAWING', 'OBJ_UDFCHAR01', 'OBJ_UDFCHAR02', 'OBJ_UDFCHAR03', 'OBJ_UDFCHAR04', 'OBJ_UDFCHAR05', 'OBJ_UDFCHAR06', 'OBJ_UDFCHAR07', 'OBJ_UDFCHAR08', 'OBJ_UDFCHAR09', 'OBJ_UDFCHAR10', 'OBJ_UDFCHAR11', 'OBJ_UDFCHAR12', 'OBJ_UDFCHAR13', 'OBJ_UDFCHAR14', 'OBJ_UDFCHAR15', 'OBJ_UDFCHAR16', 'OBJ_UDFCHAR17', 'OBJ_UDFCHAR18', 'OBJ_UDFCHAR19', 'OBJ_UDFCHAR20', 'OBJ_UDFCHAR21', 'OBJ_UDFCHAR22', 'OBJ_UDFCHAR23', 'OBJ_UDFCHAR24', 'OBJ_UDFCHAR25', 'OBJ_UDFCHAR26', 'OBJ_UDFCHAR27', 'OBJ_UDFCHAR28', 'OBJ_UDFCHAR29', 'OBJ_UDFCHAR30', 'OBJ_UDFCHAR31', 'OBJ_UDFCHAR32', 'OBJ_UDFCHAR33', 'OBJ_UDFCHAR34', 'OBJ_UDFCHAR35', 'OBJ_UDFCHAR36', 'OBJ_UDFCHAR37', 'OBJ_UDFCHAR38', 'OBJ_UDFCHAR39', 'OBJ_UDFCHAR40', 'OBJ_UDFCHAR41', 'OBJ_UDFCHAR42', 'OBJ_UDFCHAR43', 'OBJ_UDFCHAR44', 'OBJ_UDFCHAR45', 'OBJ_SAFETYREVIEWEDNAME', 'OBJ_PERMITREVIEWEDNAME', 'OBJ_LOTOREVIEWEDNAME', 'OBJ_COMPLOCATION'], 'string', 'max' => 80],
            [['OBJ_CLASS', 'OBJ_CRITICALITY', 'OBJ_PRIMARYUSE', 'OBJ_RELIABILITYRANKINGINDEX', 'OBJ_COVERAGETYPE', 'OBJ_OWNERSHIPTYPE', 'OBJ_DISPOSALTYPE', 'OBJ_ROOMTYPE', 'OBJ_UNITTYPE', 'OBJ_VIPSTATUS', 'OBJ_KITCHEN', 'OBJ_LIVINGROOM', 'OBJ_GUESTSALUTATION', 'OBJ_RCMLEVEL', 'OBJ_VEHICLETYPE', 'OBJ_INSPECTIONDIRECTION', 'OBJ_FLOW', 'OBJ_CONDITIONINDEX', 'OBJ_LINEAROBJTYPE', 'OBJ_DIRECTION'], 'string', 'max' => 8],
            [['OBJ_TAG', 'OBJ_CN'], 'string', 'max' => 24],
            [['OBJ_DEPEND', 'OBJ_PRODUCTION', 'OBJ_NOTUSED', 'OBJ_SAFETY', 'OBJ_PREVENTEVTCOMP', 'OBJ_DORMREUSE', 'OBJ_GISPROFILE', 'OBJ_CGMP', 'OBJ_DEVICETOLTYPE', 'OBJ_LOOP', 'OBJ_INSTRUMENT', 'OBJ_INSTRUMENTTYPE', 'OBJ_LINKGISWO', 'OBJ_VEHICLE', 'OBJ_GLTRANSFERFLAG', 'OBJ_UDFCHKBOX01', 'OBJ_UDFCHKBOX02', 'OBJ_UDFCHKBOX03', 'OBJ_UDFCHKBOX04', 'OBJ_UDFCHKBOX05', 'OBJ_SDMPRESENT', 'OBJ_SDMPATH', 'OBJ_BILLABLE', 'OBJ_GASINDEX', 'OBJ_RESOURCE', 'OBJ_RESOURCEPRESENT', 'OBJ_ENERGYSTARELIGIBLE', 'OBJ_RELIABILITYRANKINGLOCKED', 'OBJ_RENTAL', 'OBJ_CONTRACT', 'OBJ_TEMPMONITORED', 'OBJ_LOCKOUT', 'OBJ_PERSONALPROTECTIVEEQUIP', 'OBJ_CONFINEDSPACE', 'OBJ_STATEMENTOFCOND', 'OBJ_BUILDMAINTPROGRAM', 'OBJ_HIPAACONFIDENTIALITY', 'OBJ_ACCESSIBLE', 'OBJ_NONSMOKING', 'OBJ_OPENBAY', 'OBJ_FCICALCULATION', 'OBJ_UDFCHKBOX06', 'OBJ_UDFCHKBOX07', 'OBJ_UDFCHKBOX08', 'OBJ_UDFCHKBOX09', 'OBJ_UDFCHKBOX10', 'OBJ_FACILITY', 'OBJ_CONFIGSPECIFIC', 'OBJ_CONFIGAUTONUM', 'OBJ_CONFIGUSEPARENTCODE'], 'string', 'max' => 1],
            [['OBJ_MANUFACT', 'OBJ_SOURCESYSTEM', 'OBJ_SOURCECODE', 'OBJ_OEMSITE', 'OBJ_VENDOR'], 'string', 'max' => 45],
            [['OBJ_MRC', 'OBJ_STORE', 'OBJ_ORG', 'OBJ_CLASS_ORG', 'OBJ_LOCATION_ORG', 'OBJ_POSITION_ORG', 'OBJ_PARENT_ORG', 'OBJ_ORDER_ORG', 'OBJ_PART_ORG', 'OBJ_BIN', 'OBJ_PERSON', 'OBJ_PROFILE_ORG', 'OBJ_FLEETCUSTOMER_ORG', 'OBJ_BILLINGCODE', 'OBJ_BILLINGCODE_ORG', 'OBJ_MARKUPCODE', 'OBJ_MARKUPCODE_ORG', 'OBJ_CALGROUP', 'OBJ_CALGROUPORG', 'OBJ_REGION_ORG', 'OBJ_GISMAP_ORG', 'OBJ_RELIABILITYRANKING_ORG', 'OBJ_RENTALTEMPLATE_ORG', 'OBJ_CONTRACTTEMPLATE_ORG', 'OBJ_CUSTOMER_ORG', 'OBJ_DRIVER', 'OBJ_PERFORMANCEMANAGER', 'OBJ_ORIGCONFIGORG', 'OBJ_LOANEDDEPT', 'OBJ_WODEPT', 'OBJ_PMWODEPT', 'OBJ_PRIMARYSYSTEM_ORG'], 'string', 'max' => 15],
            [['OBJ_GROUP', 'OBJ_LOT'], 'string', 'max' => 12],
            [['OBJ_MANUFACTREVNUM', 'OBJ_LENGTHUOM', 'OBJ_LINEARREFUOM', 'OBJ_BILLEVERYPERIODUOM'], 'string', 'max' => 10],
            [['OBJ_ESIGNATURE', 'OBJ_GUESTFIRSTNAME', 'OBJ_GUESTLASTNAME', 'OBJ_DOCUMOTO_BOOKID'], 'string', 'max' => 100],
            [['OBJ_GISLAYER'], 'string', 'max' => 60],
            [['OBJ_GEOREF', 'OBJ_IMAGEURL'], 'string', 'max' => 1000],
            [['OBJ_JECATEGORY', 'OBJ_JESOURCE'], 'string', 'max' => 25],
            [['OBJ_GUESTMIDDLENAME', 'OBJ_PHONEDECIMAL', 'OBJ_GUESTPHONEDECIMAL'], 'string', 'max' => 50],
            [['OBJ_EMAIL'], 'string', 'max' => 255],
            [['OBJ_CONFIGSTWO', 'OBJ_MANAGERPROFILEID'], 'string', 'max' => 20],
            [['OBJ_CONFIGREVISIONREASON'], 'string', 'max' => 2000],
            [['OBJ_CONFIGPARENTSEPARATOR'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OBJ_OBTYPE' => Yii::t('app', 'Obj  Obtype'),
            'OBJ_OBRTYPE' => Yii::t('app', 'Obj  Obrtype'),
            'OBJ_CODE' => Yii::t('app', 'Obj  Code'),
            'OBJ_DESC' => Yii::t('app', 'Obj  Desc'),
            'OBJ_CLASS' => Yii::t('app', 'Obj  Class'),
            'OBJ_CATEGORY' => Yii::t('app', 'Obj  Category'),
            'OBJ_COSTCODE' => Yii::t('app', 'Obj  Costcode'),
            'OBJ_LTYPE' => Yii::t('app', 'Obj  Ltype'),
            'OBJ_LOCATION' => Yii::t('app', 'Obj  Location'),
            'OBJ_TAG' => Yii::t('app', 'Obj  Tag'),
            'OBJ_PTYPE' => Yii::t('app', 'Obj  Ptype'),
            'OBJ_POSITION' => Yii::t('app', 'Obj  Position'),
            'OBJ_PARENT' => Yii::t('app', 'Obj  Parent'),
            'OBJ_DEPEND' => Yii::t('app', 'Obj  Depend'),
            'OBJ_MANUFACT' => Yii::t('app', 'Obj  Manufact'),
            'OBJ_MRC' => Yii::t('app', 'Obj  Mrc'),
            'OBJ_PART' => Yii::t('app', 'Obj  Part'),
            'OBJ_SERIALNO' => Yii::t('app', 'Obj  Serialno'),
            'OBJ_STORE' => Yii::t('app', 'Obj  Store'),
            'OBJ_STATUS' => Yii::t('app', 'Obj  Status'),
            'OBJ_RSTATUS' => Yii::t('app', 'Obj  Rstatus'),
            'OBJ_COMMISS' => Yii::t('app', 'Obj  Commiss'),
            'OBJ_WITHDRAW' => Yii::t('app', 'Obj  Withdraw'),
            'OBJ_RECORD' => Yii::t('app', 'Obj  Record'),
            'OBJ_GROUP' => Yii::t('app', 'Obj  Group'),
            'OBJ_USER' => Yii::t('app', 'Obj  User'),
            'OBJ_ORDER' => Yii::t('app', 'Obj  Order'),
            'OBJ_ORDERLINE' => Yii::t('app', 'Obj  Orderline'),
            'OBJ_PRODUCTION' => Yii::t('app', 'Obj  Production'),
            'OBJ_PRIMARYUOM' => Yii::t('app', 'Obj  Primaryuom'),
            'OBJ_ACD' => Yii::t('app', 'Obj  Acd'),
            'OBJ_NOTUSED' => Yii::t('app', 'Obj  Notused'),
            'OBJ_SAFETY' => Yii::t('app', 'Obj  Safety'),
            'OBJ_CRITICALITY' => Yii::t('app', 'Obj  Criticality'),
            'OBJ_PROFILE' => Yii::t('app', 'Obj  Profile'),
            'OBJ_MANUFACTMODEL' => Yii::t('app', 'Obj  Manufactmodel'),
            'OBJ_MANUFACTREVNUM' => Yii::t('app', 'Obj  Manufactrevnum'),
            'OBJ_VALUE' => Yii::t('app', 'Obj  Value'),
            'OBJ_SOURCESYSTEM' => Yii::t('app', 'Obj  Sourcesystem'),
            'OBJ_SOURCECODE' => Yii::t('app', 'Obj  Sourcecode'),
            'OBJ_VARIABLE1' => Yii::t('app', 'Obj  Variable1'),
            'OBJ_VARIABLE2' => Yii::t('app', 'Obj  Variable2'),
            'OBJ_VARIABLE3' => Yii::t('app', 'Obj  Variable3'),
            'OBJ_VARIABLE4' => Yii::t('app', 'Obj  Variable4'),
            'OBJ_VARIABLE5' => Yii::t('app', 'Obj  Variable5'),
            'OBJ_VARIABLE6' => Yii::t('app', 'Obj  Variable6'),
            'OBJ_STATE' => Yii::t('app', 'Obj  State'),
            'OBJ_RSTATE' => Yii::t('app', 'Obj  Rstate'),
            'OBJ_CN' => Yii::t('app', 'Obj  Cn'),
            'OBJ_ORG' => Yii::t('app', 'Obj  Org'),
            'OBJ_CLASS_ORG' => Yii::t('app', 'Obj  Class  Org'),
            'OBJ_LOCATION_ORG' => Yii::t('app', 'Obj  Location  Org'),
            'OBJ_POSITION_ORG' => Yii::t('app', 'Obj  Position  Org'),
            'OBJ_PARENT_ORG' => Yii::t('app', 'Obj  Parent  Org'),
            'OBJ_ORDER_ORG' => Yii::t('app', 'Obj  Order  Org'),
            'OBJ_PART_ORG' => Yii::t('app', 'Obj  Part  Org'),
            'OBJ_BIN' => Yii::t('app', 'Obj  Bin'),
            'OBJ_LOT' => Yii::t('app', 'Obj  Lot'),
            'OBJ_SYSLEVEL' => Yii::t('app', 'Obj  Syslevel'),
            'OBJ_ASMLEVEL' => Yii::t('app', 'Obj  Asmlevel'),
            'OBJ_COMPLEVEL' => Yii::t('app', 'Obj  Complevel'),
            'OBJ_UPDATED' => Yii::t('app', 'Obj  Updated'),
            'OBJ_UPDATEDBY' => Yii::t('app', 'Obj  Updatedby'),
            'OBJ_PREVENTEVTCOMP' => Yii::t('app', 'Obj  Preventevtcomp'),
            'OBJ_PERSON' => Yii::t('app', 'Obj  Person'),
            'OBJ_ESIGNATURE' => Yii::t('app', 'Obj  Esignature'),
            'OBJ_UPDATECOUNT' => Yii::t('app', 'Obj  Updatecount'),
            'OBJ_DORMSTART' => Yii::t('app', 'Obj  Dormstart'),
            'OBJ_DORMEND' => Yii::t('app', 'Obj  Dormend'),
            'OBJ_DORMREUSE' => Yii::t('app', 'Obj  Dormreuse'),
            'OBJ_GISOBJID' => Yii::t('app', 'Obj  Gisobjid'),
            'OBJ_GISPROFILE' => Yii::t('app', 'Obj  Gisprofile'),
            'OBJ_PROFILE_ORG' => Yii::t('app', 'Obj  Profile  Org'),
            'OBJ_SOLDDATE' => Yii::t('app', 'Obj  Solddate'),
            'OBJ_TRANSFERDATE' => Yii::t('app', 'Obj  Transferdate'),
            'OBJ_CGMP' => Yii::t('app', 'Obj  Cgmp'),
            'OBJ_TESTPOINTUOM' => Yii::t('app', 'Obj  Testpointuom'),
            'OBJ_OUTPUTUOM' => Yii::t('app', 'Obj  Outputuom'),
            'OBJ_INCREMENT' => Yii::t('app', 'Obj  Increment'),
            'OBJ_PRECISION' => Yii::t('app', 'Obj  Precision'),
            'OBJ_PIDNO' => Yii::t('app', 'Obj  Pidno'),
            'OBJ_PIDDRAWING' => Yii::t('app', 'Obj  Piddrawing'),
            'OBJ_SERVICEPERC' => Yii::t('app', 'Obj  Serviceperc'),
            'OBJ_DEVICETOLFROM' => Yii::t('app', 'Obj  Devicetolfrom'),
            'OBJ_DEVICETOLTO' => Yii::t('app', 'Obj  Devicetolto'),
            'OBJ_DEVICETOLTYPE' => Yii::t('app', 'Obj  Devicetoltype'),
            'OBJ_DEVICERANGEFROM' => Yii::t('app', 'Obj  Devicerangefrom'),
            'OBJ_DEVICERANGETO' => Yii::t('app', 'Obj  Devicerangeto'),
            'OBJ_OUTPUTRANGEFROM' => Yii::t('app', 'Obj  Outputrangefrom'),
            'OBJ_OUTPUTRANGETO' => Yii::t('app', 'Obj  Outputrangeto'),
            'OBJ_PROCESSTOLFROM' => Yii::t('app', 'Obj  Processtolfrom'),
            'OBJ_PROCESSTOLTO' => Yii::t('app', 'Obj  Processtolto'),
            'OBJ_PROCESSRANGEFROM' => Yii::t('app', 'Obj  Processrangefrom'),
            'OBJ_PROCESSRANGETO' => Yii::t('app', 'Obj  Processrangeto'),
            'OBJ_SET' => Yii::t('app', 'Obj  Set'),
            'OBJ_SOP' => Yii::t('app', 'Obj  Sop'),
            'OBJ_LOOP' => Yii::t('app', 'Obj  Loop'),
            'OBJ_INSTRUMENT' => Yii::t('app', 'Obj  Instrument'),
            'OBJ_INSTRUMENTTYPE' => Yii::t('app', 'Obj  Instrumenttype'),
            'OBJ_INTERFACE' => Yii::t('app', 'Obj  Interface'),
            'OBJ_LINKGISWO' => Yii::t('app', 'Obj  Linkgiswo'),
            'OBJ_GISLAYER' => Yii::t('app', 'Obj  Gislayer'),
            'OBJ_XLOCATION' => Yii::t('app', 'Obj  Xlocation'),
            'OBJ_YLOCATION' => Yii::t('app', 'Obj  Ylocation'),
            'OBJ_LENGTH' => Yii::t('app', 'Obj  Length'),
            'OBJ_LENGTHUOM' => Yii::t('app', 'Obj  Lengthuom'),
            'OBJ_LINEARREFUOM' => Yii::t('app', 'Obj  Linearrefuom'),
            'OBJ_LINEARREFPRECISION' => Yii::t('app', 'Obj  Linearrefprecision'),
            'OBJ_GEOREF' => Yii::t('app', 'Obj  Georef'),
            'OBJ_VEHICLE' => Yii::t('app', 'Obj  Vehicle'),
            'OBJ_FLEETCUSTOMER' => Yii::t('app', 'Obj  Fleetcustomer'),
            'OBJ_FLEETCUSTOMER_ORG' => Yii::t('app', 'Obj  Fleetcustomer  Org'),
            'OBJ_BILLINGCODE' => Yii::t('app', 'Obj  Billingcode'),
            'OBJ_BILLINGCODE_ORG' => Yii::t('app', 'Obj  Billingcode  Org'),
            'OBJ_MARKUPCODE' => Yii::t('app', 'Obj  Markupcode'),
            'OBJ_MARKUPCODE_ORG' => Yii::t('app', 'Obj  Markupcode  Org'),
            'OBJ_VEHICLERSTATUS' => Yii::t('app', 'Obj  Vehiclerstatus'),
            'OBJ_VEHICLESTATUS' => Yii::t('app', 'Obj  Vehiclestatus'),
            'OBJ_ISSUEDTO' => Yii::t('app', 'Obj  Issuedto'),
            'OBJ_JECATEGORY' => Yii::t('app', 'Obj  Jecategory'),
            'OBJ_JESOURCE' => Yii::t('app', 'Obj  Jesource'),
            'OBJ_GLTRANSFERFLAG' => Yii::t('app', 'Obj  Gltransferflag'),
            'OBJ_GLTRANSFER' => Yii::t('app', 'Obj  Gltransfer'),
            'OBJ_MINPENALTY' => Yii::t('app', 'Obj  Minpenalty'),
            'OBJ_PENALTYFACTOR' => Yii::t('app', 'Obj  Penaltyfactor'),
            'OBJ_CALGROUP' => Yii::t('app', 'Obj  Calgroup'),
            'OBJ_CALGROUPORG' => Yii::t('app', 'Obj  Calgrouporg'),
            'OBJ_UDFCHAR01' => Yii::t('app', 'Obj  Udfchar01'),
            'OBJ_UDFCHAR02' => Yii::t('app', 'Obj  Udfchar02'),
            'OBJ_UDFCHAR03' => Yii::t('app', 'Obj  Udfchar03'),
            'OBJ_UDFCHAR04' => Yii::t('app', 'Obj  Udfchar04'),
            'OBJ_UDFCHAR05' => Yii::t('app', 'Obj  Udfchar05'),
            'OBJ_UDFCHAR06' => Yii::t('app', 'Obj  Udfchar06'),
            'OBJ_UDFCHAR07' => Yii::t('app', 'Obj  Udfchar07'),
            'OBJ_UDFCHAR08' => Yii::t('app', 'Obj  Udfchar08'),
            'OBJ_UDFCHAR09' => Yii::t('app', 'Obj  Udfchar09'),
            'OBJ_UDFCHAR10' => Yii::t('app', 'Obj  Udfchar10'),
            'OBJ_UDFCHAR11' => Yii::t('app', 'Obj  Udfchar11'),
            'OBJ_UDFCHAR12' => Yii::t('app', 'Obj  Udfchar12'),
            'OBJ_UDFCHAR13' => Yii::t('app', 'Obj  Udfchar13'),
            'OBJ_UDFCHAR14' => Yii::t('app', 'Obj  Udfchar14'),
            'OBJ_UDFCHAR15' => Yii::t('app', 'Obj  Udfchar15'),
            'OBJ_UDFCHAR16' => Yii::t('app', 'Obj  Udfchar16'),
            'OBJ_UDFCHAR17' => Yii::t('app', 'Obj  Udfchar17'),
            'OBJ_UDFCHAR18' => Yii::t('app', 'Obj  Udfchar18'),
            'OBJ_UDFCHAR19' => Yii::t('app', 'Obj  Udfchar19'),
            'OBJ_UDFCHAR20' => Yii::t('app', 'Obj  Udfchar20'),
            'OBJ_UDFCHAR21' => Yii::t('app', 'Obj  Udfchar21'),
            'OBJ_UDFCHAR22' => Yii::t('app', 'Obj  Udfchar22'),
            'OBJ_UDFCHAR23' => Yii::t('app', 'Obj  Udfchar23'),
            'OBJ_UDFCHAR24' => Yii::t('app', 'Obj  Udfchar24'),
            'OBJ_UDFCHAR25' => Yii::t('app', 'Obj  Udfchar25'),
            'OBJ_UDFCHAR26' => Yii::t('app', 'Obj  Udfchar26'),
            'OBJ_UDFCHAR27' => Yii::t('app', 'Obj  Udfchar27'),
            'OBJ_UDFCHAR28' => Yii::t('app', 'Obj  Udfchar28'),
            'OBJ_UDFCHAR29' => Yii::t('app', 'Obj  Udfchar29'),
            'OBJ_UDFCHAR30' => Yii::t('app', 'Obj  Udfchar30'),
            'OBJ_UDFNUM01' => Yii::t('app', 'Obj  Udfnum01'),
            'OBJ_UDFNUM02' => Yii::t('app', 'Obj  Udfnum02'),
            'OBJ_UDFNUM03' => Yii::t('app', 'Obj  Udfnum03'),
            'OBJ_UDFNUM04' => Yii::t('app', 'Obj  Udfnum04'),
            'OBJ_UDFNUM05' => Yii::t('app', 'Obj  Udfnum05'),
            'OBJ_UDFDATE01' => Yii::t('app', 'Obj  Udfdate01'),
            'OBJ_UDFDATE02' => Yii::t('app', 'Obj  Udfdate02'),
            'OBJ_UDFDATE03' => Yii::t('app', 'Obj  Udfdate03'),
            'OBJ_UDFDATE04' => Yii::t('app', 'Obj  Udfdate04'),
            'OBJ_UDFDATE05' => Yii::t('app', 'Obj  Udfdate05'),
            'OBJ_UDFCHKBOX01' => Yii::t('app', 'Obj  Udfchkbox01'),
            'OBJ_UDFCHKBOX02' => Yii::t('app', 'Obj  Udfchkbox02'),
            'OBJ_UDFCHKBOX03' => Yii::t('app', 'Obj  Udfchkbox03'),
            'OBJ_UDFCHKBOX04' => Yii::t('app', 'Obj  Udfchkbox04'),
            'OBJ_UDFCHKBOX05' => Yii::t('app', 'Obj  Udfchkbox05'),
            'OBJ_SDMPRESENT' => Yii::t('app', 'Obj  Sdmpresent'),
            'OBJ_SDMPATH' => Yii::t('app', 'Obj  Sdmpath'),
            'OBJ_COSTOFNEEDEDREPAIRS' => Yii::t('app', 'Obj  Costofneededrepairs'),
            'OBJ_REPLACEMENTVALUE' => Yii::t('app', 'Obj  Replacementvalue'),
            'OBJ_FACILITYCONDITIONINDEX' => Yii::t('app', 'Obj  Facilityconditionindex'),
            'OBJ_BILLABLE' => Yii::t('app', 'Obj  Billable'),
            'OBJ_GASINDEX' => Yii::t('app', 'Obj  Gasindex'),
            'OBJ_FLOORAREA' => Yii::t('app', 'Obj  Floorarea'),
            'OBJ_FLOORAREAUOM' => Yii::t('app', 'Obj  Floorareauom'),
            'OBJ_ESTREVENUE' => Yii::t('app', 'Obj  Estrevenue'),
            'OBJ_REGION' => Yii::t('app', 'Obj  Region'),
            'OBJ_PRIMARYUSE' => Yii::t('app', 'Obj  Primaryuse'),
            'OBJ_YEARBUILT' => Yii::t('app', 'Obj  Yearbuilt'),
            'OBJ_SERVICELIFE' => Yii::t('app', 'Obj  Servicelife'),
            'OBJ_RESOURCE' => Yii::t('app', 'Obj  Resource'),
            'OBJ_RESOURCEPRESENT' => Yii::t('app', 'Obj  Resourcepresent'),
            'OBJ_LASTSTATUSUPDATE' => Yii::t('app', 'Obj  Laststatusupdate'),
            'OBJ_REGION_ORG' => Yii::t('app', 'Obj  Region  Org'),
            'OBJ_GISMAP' => Yii::t('app', 'Obj  Gismap'),
            'OBJ_GISMAP_ORG' => Yii::t('app', 'Obj  Gismap  Org'),
            'OBJ_ENERGYSTARELIGIBLE' => Yii::t('app', 'Obj  Energystareligible'),
            'OBJ_RELIABILITYRANKING' => Yii::t('app', 'Obj  Reliabilityranking'),
            'OBJ_RELIABILITYRANKING_ORG' => Yii::t('app', 'Obj  Reliabilityranking  Org'),
            'OBJ_RELIABILITYRANKINGREV' => Yii::t('app', 'Obj  Reliabilityrankingrev'),
            'OBJ_RELIABILITYRANKINGINDEX' => Yii::t('app', 'Obj  Reliabilityrankingindex'),
            'OBJ_RELIABILITYRANKINGSCORE' => Yii::t('app', 'Obj  Reliabilityrankingscore'),
            'OBJ_RELIABILITYRANKINGLOCKED' => Yii::t('app', 'Obj  Reliabilityrankinglocked'),
            'OBJ_RRVALUESLASTCALCULATED' => Yii::t('app', 'Obj  Rrvalueslastcalculated'),
            'OBJ_RRSURVEYLASTUPDATED' => Yii::t('app', 'Obj  Rrsurveylastupdated'),
            'OBJ_OUTPUTCALCTYPE' => Yii::t('app', 'Obj  Outputcalctype'),
            'OBJ_GIS_UPDATECOUNT' => Yii::t('app', 'Obj  Gis  Updatecount'),
            'OBJ_GIS_SYNCCOUNT' => Yii::t('app', 'Obj  Gis  Synccount'),
            'OBJ_ALIAS' => Yii::t('app', 'Obj  Alias'),
            'OBJ_RENTAL' => Yii::t('app', 'Obj  Rental'),
            'OBJ_RENTALTEMPLATE' => Yii::t('app', 'Obj  Rentaltemplate'),
            'OBJ_RENTALTEMPLATE_ORG' => Yii::t('app', 'Obj  Rentaltemplate  Org'),
            'OBJ_CONTRACT' => Yii::t('app', 'Obj  Contract'),
            'OBJ_CONTRACTTEMPLATE' => Yii::t('app', 'Obj  Contracttemplate'),
            'OBJ_CONTRACTTEMPLATE_ORG' => Yii::t('app', 'Obj  Contracttemplate  Org'),
            'OBJ_CUSTOMER' => Yii::t('app', 'Obj  Customer'),
            'OBJ_CUSTOMER_ORG' => Yii::t('app', 'Obj  Customer  Org'),
            'OBJ_AVAILABILITYSTATUS' => Yii::t('app', 'Obj  Availabilitystatus'),
            'OBJ_AVAILABILITYRSTATUS' => Yii::t('app', 'Obj  Availabilityrstatus'),
            'OBJ_TEMPMONITORED' => Yii::t('app', 'Obj  Tempmonitored'),
            'OBJ_HARDWAREVER' => Yii::t('app', 'Obj  Hardwarever'),
            'OBJ_SOFTWAREVER' => Yii::t('app', 'Obj  Softwarever'),
            'OBJ_PURCHASINGASSET' => Yii::t('app', 'Obj  Purchasingasset'),
            'OBJ_BIOMEDICALASSET' => Yii::t('app', 'Obj  Biomedicalasset'),
            'OBJ_OEMSITE' => Yii::t('app', 'Obj  Oemsite'),
            'OBJ_VENDOR' => Yii::t('app', 'Obj  Vendor'),
            'OBJ_COVERAGETYPE' => Yii::t('app', 'Obj  Coveragetype'),
            'OBJ_LOCKOUT' => Yii::t('app', 'Obj  Lockout'),
            'OBJ_PERSONALPROTECTIVEEQUIP' => Yii::t('app', 'Obj  Personalprotectiveequip'),
            'OBJ_CONFINEDSPACE' => Yii::t('app', 'Obj  Confinedspace'),
            'OBJ_STATEMENTOFCOND' => Yii::t('app', 'Obj  Statementofcond'),
            'OBJ_BUILDMAINTPROGRAM' => Yii::t('app', 'Obj  Buildmaintprogram'),
            'OBJ_HIPAACONFIDENTIALITY' => Yii::t('app', 'Obj  Hipaaconfidentiality'),
            'OBJ_OWNERSHIPTYPE' => Yii::t('app', 'Obj  Ownershiptype'),
            'OBJ_INVENTORYVERIFICATIONDATE' => Yii::t('app', 'Obj  Inventoryverificationdate'),
            'OBJ_PURCHASEORDER' => Yii::t('app', 'Obj  Purchaseorder'),
            'OBJ_PURCHASEDATE' => Yii::t('app', 'Obj  Purchasedate'),
            'OBJ_PURCHASECOST' => Yii::t('app', 'Obj  Purchasecost'),
            'OBJ_INSTALLDATE' => Yii::t('app', 'Obj  Installdate'),
            'OBJ_DISPOSALTYPE' => Yii::t('app', 'Obj  Disposaltype'),
            'OBJ_ROOMTYPE' => Yii::t('app', 'Obj  Roomtype'),
            'OBJ_UNITTYPE' => Yii::t('app', 'Obj  Unittype'),
            'OBJ_GUESTFIRSTNAME' => Yii::t('app', 'Obj  Guestfirstname'),
            'OBJ_GUESTMIDDLENAME' => Yii::t('app', 'Obj  Guestmiddlename'),
            'OBJ_GUESTLASTNAME' => Yii::t('app', 'Obj  Guestlastname'),
            'OBJ_VIPSTATUS' => Yii::t('app', 'Obj  Vipstatus'),
            'OBJ_MAXGUESTCOUNT' => Yii::t('app', 'Obj  Maxguestcount'),
            'OBJ_PHONEDECIMAL' => Yii::t('app', 'Obj  Phonedecimal'),
            'OBJ_KEYDECIMAL' => Yii::t('app', 'Obj  Keydecimal'),
            'OBJ_ACCESSIBLE' => Yii::t('app', 'Obj  Accessible'),
            'OBJ_NONSMOKING' => Yii::t('app', 'Obj  Nonsmoking'),
            'OBJ_SQFOOTAGE' => Yii::t('app', 'Obj  Sqfootage'),
            'OBJ_BEDCOUNT' => Yii::t('app', 'Obj  Bedcount'),
            'OBJ_BATHCOUNT' => Yii::t('app', 'Obj  Bathcount'),
            'OBJ_KITCHEN' => Yii::t('app', 'Obj  Kitchen'),
            'OBJ_LIVINGROOM' => Yii::t('app', 'Obj  Livingroom'),
            'OBJ_OPENBAY' => Yii::t('app', 'Obj  Openbay'),
            'OBJ_BUILDING' => Yii::t('app', 'Obj  Building'),
            'OBJ_WING' => Yii::t('app', 'Obj  Wing'),
            'OBJ_FLOOR' => Yii::t('app', 'Obj  Floor'),
            'OBJ_EXPOSURE' => Yii::t('app', 'Obj  Exposure'),
            'OBJ_XCOORDINATE' => Yii::t('app', 'Obj  Xcoordinate'),
            'OBJ_YCOORDINATE' => Yii::t('app', 'Obj  Ycoordinate'),
            'OBJ_ZCOORDINATE' => Yii::t('app', 'Obj  Zcoordinate'),
            'OBJ_UMDNSCODE' => Yii::t('app', 'Obj  Umdnscode'),
            'OBJ_FCICALCULATION' => Yii::t('app', 'Obj  Fcicalculation'),
            'OBJ_GUESTSALUTATION' => Yii::t('app', 'Obj  Guestsalutation'),
            'OBJ_GUESTPHONEDECIMAL' => Yii::t('app', 'Obj  Guestphonedecimal'),
            'OBJ_EMAIL' => Yii::t('app', 'Obj  Email'),
            'OBJ_DRIVER' => Yii::t('app', 'Obj  Driver'),
            'OBJ_UDFCHAR31' => Yii::t('app', 'Obj  Udfchar31'),
            'OBJ_UDFCHAR32' => Yii::t('app', 'Obj  Udfchar32'),
            'OBJ_UDFCHAR33' => Yii::t('app', 'Obj  Udfchar33'),
            'OBJ_UDFCHAR34' => Yii::t('app', 'Obj  Udfchar34'),
            'OBJ_UDFCHAR35' => Yii::t('app', 'Obj  Udfchar35'),
            'OBJ_UDFCHAR36' => Yii::t('app', 'Obj  Udfchar36'),
            'OBJ_UDFCHAR37' => Yii::t('app', 'Obj  Udfchar37'),
            'OBJ_UDFCHAR38' => Yii::t('app', 'Obj  Udfchar38'),
            'OBJ_UDFCHAR39' => Yii::t('app', 'Obj  Udfchar39'),
            'OBJ_UDFCHAR40' => Yii::t('app', 'Obj  Udfchar40'),
            'OBJ_UDFCHAR41' => Yii::t('app', 'Obj  Udfchar41'),
            'OBJ_UDFCHAR42' => Yii::t('app', 'Obj  Udfchar42'),
            'OBJ_UDFCHAR43' => Yii::t('app', 'Obj  Udfchar43'),
            'OBJ_UDFCHAR44' => Yii::t('app', 'Obj  Udfchar44'),
            'OBJ_UDFCHAR45' => Yii::t('app', 'Obj  Udfchar45'),
            'OBJ_UDFNUM06' => Yii::t('app', 'Obj  Udfnum06'),
            'OBJ_UDFNUM07' => Yii::t('app', 'Obj  Udfnum07'),
            'OBJ_UDFNUM08' => Yii::t('app', 'Obj  Udfnum08'),
            'OBJ_UDFNUM09' => Yii::t('app', 'Obj  Udfnum09'),
            'OBJ_UDFNUM10' => Yii::t('app', 'Obj  Udfnum10'),
            'OBJ_UDFDATE06' => Yii::t('app', 'Obj  Udfdate06'),
            'OBJ_UDFDATE07' => Yii::t('app', 'Obj  Udfdate07'),
            'OBJ_UDFDATE08' => Yii::t('app', 'Obj  Udfdate08'),
            'OBJ_UDFDATE09' => Yii::t('app', 'Obj  Udfdate09'),
            'OBJ_UDFDATE10' => Yii::t('app', 'Obj  Udfdate10'),
            'OBJ_UDFCHKBOX06' => Yii::t('app', 'Obj  Udfchkbox06'),
            'OBJ_UDFCHKBOX07' => Yii::t('app', 'Obj  Udfchkbox07'),
            'OBJ_UDFCHKBOX08' => Yii::t('app', 'Obj  Udfchkbox08'),
            'OBJ_UDFCHKBOX09' => Yii::t('app', 'Obj  Udfchkbox09'),
            'OBJ_UDFCHKBOX10' => Yii::t('app', 'Obj  Udfchkbox10'),
            'OBJ_FACILITY' => Yii::t('app', 'Obj  Facility'),
            'OBJ_COUNTRY' => Yii::t('app', 'Obj  Country'),
            'OBJ_TARGETPOWERFACTOR' => Yii::t('app', 'Obj  Targetpowerfactor'),
            'OBJ_TARGETPEAKDEMAND' => Yii::t('app', 'Obj  Targetpeakdemand'),
            'OBJ_STARTBILLINGPERIOD' => Yii::t('app', 'Obj  Startbillingperiod'),
            'OBJ_BILLEVERYPERIOD' => Yii::t('app', 'Obj  Billeveryperiod'),
            'OBJ_BILLEVERYPERIODUOM' => Yii::t('app', 'Obj  Billeveryperioduom'),
            'OBJ_EFFLOSSPHASEIMBALANCE1' => Yii::t('app', 'Obj  Efflossphaseimbalance1'),
            'OBJ_EFFLOSSPHASEIMBALANCE2' => Yii::t('app', 'Obj  Efflossphaseimbalance2'),
            'OBJ_EFFLOSSPHASEIMBALANCE3' => Yii::t('app', 'Obj  Efflossphaseimbalance3'),
            'OBJ_EFFLOSSPHASEIMBALANCE4' => Yii::t('app', 'Obj  Efflossphaseimbalance4'),
            'OBJ_EFFLOSSPHASEIMBALANCE5' => Yii::t('app', 'Obj  Efflossphaseimbalance5'),
            'OBJ_PERFORMANCEMANAGER' => Yii::t('app', 'Obj  Performancemanager'),
            'OBJ_ELECSUBMETERINTERVAL' => Yii::t('app', 'Obj  Elecsubmeterinterval'),
            'OBJ_ELECUSAGETHRESHOLD' => Yii::t('app', 'Obj  Elecusagethreshold'),
            'OBJ_SAFETYREVIEWREQUIRED' => Yii::t('app', 'Obj  Safetyreviewrequired'),
            'OBJ_SAFETYREVIEWED' => Yii::t('app', 'Obj  Safetyreviewed'),
            'OBJ_SAFETYREVIEWEDBY' => Yii::t('app', 'Obj  Safetyreviewedby'),
            'OBJ_SAFETYREVIEWEDNAME' => Yii::t('app', 'Obj  Safetyreviewedname'),
            'OBJ_SAFETYREVIEWEDTYPE' => Yii::t('app', 'Obj  Safetyreviewedtype'),
            'OBJ_PERMITREVIEWREQUIRED' => Yii::t('app', 'Obj  Permitreviewrequired'),
            'OBJ_PERMITREVIEWED' => Yii::t('app', 'Obj  Permitreviewed'),
            'OBJ_PERMITREVIEWEDBY' => Yii::t('app', 'Obj  Permitreviewedby'),
            'OBJ_PERMITREVIEWEDNAME' => Yii::t('app', 'Obj  Permitreviewedname'),
            'OBJ_PERMITREVIEWEDTYPE' => Yii::t('app', 'Obj  Permitreviewedtype'),
            'OBJ_LOTOREVIEWREQUIRED' => Yii::t('app', 'Obj  Lotoreviewrequired'),
            'OBJ_LOTOREVIEWED' => Yii::t('app', 'Obj  Lotoreviewed'),
            'OBJ_LOTOREVIEWEDBY' => Yii::t('app', 'Obj  Lotoreviewedby'),
            'OBJ_LOTOREVIEWEDNAME' => Yii::t('app', 'Obj  Lotoreviewedname'),
            'OBJ_LOTOREVIEWEDTYPE' => Yii::t('app', 'Obj  Lotoreviewedtype'),
            'OBJ_COMPLOCATION' => Yii::t('app', 'Obj  Complocation'),
            'OBJ_ORIGCONFIGCODE' => Yii::t('app', 'Obj  Origconfigcode'),
            'OBJ_ORIGCONFIGORG' => Yii::t('app', 'Obj  Origconfigorg'),
            'OBJ_ORIGCONFIGREV' => Yii::t('app', 'Obj  Origconfigrev'),
            'OBJ_ORIGOBJECT' => Yii::t('app', 'Obj  Origobject'),
            'OBJ_CONFIGCODE' => Yii::t('app', 'Obj  Configcode'),
            'OBJ_CONFIGREVISION' => Yii::t('app', 'Obj  Configrevision'),
            'OBJ_CONFIGSTATUS' => Yii::t('app', 'Obj  Configstatus'),
            'OBJ_CONFIGRSTATUS' => Yii::t('app', 'Obj  Configrstatus'),
            'OBJ_CONFIGTYPE' => Yii::t('app', 'Obj  Configtype'),
            'OBJ_CONFIGSPECIFIC' => Yii::t('app', 'Obj  Configspecific'),
            'OBJ_CONFIGPREFIX' => Yii::t('app', 'Obj  Configprefix'),
            'OBJ_CONFIGSUFFIX' => Yii::t('app', 'Obj  Configsuffix'),
            'OBJ_CONFIGSEQLENGTH' => Yii::t('app', 'Obj  Configseqlength'),
            'OBJ_CONFIGAUTONUM' => Yii::t('app', 'Obj  Configautonum'),
            'OBJ_CONFIGSTWO' => Yii::t('app', 'Obj  Configstwo'),
            'OBJ_CONFIGREQUESTED' => Yii::t('app', 'Obj  Configrequested'),
            'OBJ_CONFIGREQUESTEDBY' => Yii::t('app', 'Obj  Configrequestedby'),
            'OBJ_CONFIGAPPROVED' => Yii::t('app', 'Obj  Configapproved'),
            'OBJ_CONFIGAPPROVEDBY' => Yii::t('app', 'Obj  Configapprovedby'),
            'OBJ_CREATED' => Yii::t('app', 'Obj  Created'),
            'OBJ_CREATEDBY' => Yii::t('app', 'Obj  Createdby'),
            'OBJ_CONFIGREVISIONREASON' => Yii::t('app', 'Obj  Configrevisionreason'),
            'OBJ_CONFIGDEFAULTSTATUS' => Yii::t('app', 'Obj  Configdefaultstatus'),
            'OBJ_GUESTPROFILEID' => Yii::t('app', 'Obj  Guestprofileid'),
            'OBJ_MANAGERPROFILEID' => Yii::t('app', 'Obj  Managerprofileid'),
            'OBJ_RCMLEVEL' => Yii::t('app', 'Obj  Rcmlevel'),
            'OBJ_RISKLEVEL' => Yii::t('app', 'Obj  Risklevel'),
            'OBJ_RPN' => Yii::t('app', 'Obj  Rpn'),
            'OBJ_VEHICLETYPE' => Yii::t('app', 'Obj  Vehicletype'),
            'OBJ_LINEARCOSTWEIGHT' => Yii::t('app', 'Obj  Linearcostweight'),
            'OBJ_INSPECTIONDIRECTION' => Yii::t('app', 'Obj  Inspectiondirection'),
            'OBJ_FLOW' => Yii::t('app', 'Obj  Flow'),
            'OBJ_ORIGINALRECEIPTDATE' => Yii::t('app', 'Obj  Originalreceiptdate'),
            'OBJ_LATESTRECEIPTDATE' => Yii::t('app', 'Obj  Latestreceiptdate'),
            'OBJ_ORIGINALINSTALLDATE' => Yii::t('app', 'Obj  Originalinstalldate'),
            'OBJ_LATESTINSTALLDATE' => Yii::t('app', 'Obj  Latestinstalldate'),
            'OBJ_OPERATIONALSTATUS' => Yii::t('app', 'Obj  Operationalstatus'),
            'OBJ_OPERATIONALRSTATUS' => Yii::t('app', 'Obj  Operationalrstatus'),
            'OBJ_LOANEDDEPT' => Yii::t('app', 'Obj  Loaneddept'),
            'OBJ_WODEPT' => Yii::t('app', 'Obj  Wodept'),
            'OBJ_PMWODEPT' => Yii::t('app', 'Obj  Pmwodept'),
            'OBJ_DOCUMOTO_BOOKID' => Yii::t('app', 'Obj  Documoto  Bookid'),
            'OBJ_RESCALOWNER' => Yii::t('app', 'Obj  Rescalowner'),
            'OBJ_WORKSPACE' => Yii::t('app', 'Obj  Workspace'),
            'OBJ_CONFIGUSEPARENTCODE' => Yii::t('app', 'Obj  Configuseparentcode'),
            'OBJ_CONFIGPARENTSEPARATOR' => Yii::t('app', 'Obj  Configparentseparator'),
            'OBJ_IMAGEURL' => Yii::t('app', 'Obj  Imageurl'),
            'OBJ_PRIMARYSYSTEM' => Yii::t('app', 'Obj  Primarysystem'),
            'OBJ_PRIMARYSYSTEM_ORG' => Yii::t('app', 'Obj  Primarysystem  Org'),
            'OBJ_CONDITIONINDEX' => Yii::t('app', 'Obj  Conditionindex'),
            'OBJ_CONDITIONSCORE' => Yii::t('app', 'Obj  Conditionscore'),
            'OBJ_LINEAROBJTYPE' => Yii::t('app', 'Obj  Linearobjtype'),
            'OBJ_DIRECTION' => Yii::t('app', 'Obj  Direction'),
            'OBJ_FROMPOINT' => Yii::t('app', 'Obj  Frompoint'),
            'OBJ_TOPOINT' => Yii::t('app', 'Obj  Topoint'),
        ];
    }

    /**
     * @inheritdoc
     * @return ObjectsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ObjectsQuery(get_called_class());
    }
}
