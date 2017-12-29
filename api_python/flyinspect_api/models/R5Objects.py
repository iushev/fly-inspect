# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey has `on_delete` set to the desired behavior.
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from django.db import models


class R5Objects(models.Model):
    obj_obtype = models.CharField(db_column='OBJ_OBTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_obrtype = models.CharField(db_column='OBJ_OBRTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_code = models.CharField(db_column='OBJ_CODE', max_length=30)  # Field name made lowercase.
    obj_desc = models.CharField(db_column='OBJ_DESC', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_class = models.CharField(db_column='OBJ_CLASS', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_category = models.CharField(db_column='OBJ_CATEGORY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_costcode = models.CharField(db_column='OBJ_COSTCODE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_ltype = models.CharField(db_column='OBJ_LTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_location = models.CharField(db_column='OBJ_LOCATION', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_tag = models.CharField(db_column='OBJ_TAG', max_length=24, blank=True, null=True)  # Field name made lowercase.
    obj_ptype = models.CharField(db_column='OBJ_PTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_position = models.CharField(db_column='OBJ_POSITION', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_parent = models.CharField(db_column='OBJ_PARENT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_depend = models.CharField(db_column='OBJ_DEPEND', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_manufact = models.CharField(db_column='OBJ_MANUFACT', max_length=45, blank=True, null=True)  # Field name made lowercase.
    obj_mrc = models.CharField(db_column='OBJ_MRC', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_part = models.CharField(db_column='OBJ_PART', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_serialno = models.CharField(db_column='OBJ_SERIALNO', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_store = models.CharField(db_column='OBJ_STORE', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_status = models.CharField(db_column='OBJ_STATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_rstatus = models.CharField(db_column='OBJ_RSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_commiss = models.DateField(db_column='OBJ_COMMISS', blank=True, null=True)  # Field name made lowercase.
    obj_withdraw = models.DateField(db_column='OBJ_WITHDRAW', blank=True, null=True)  # Field name made lowercase.
    obj_record = models.DateField(db_column='OBJ_RECORD', blank=True, null=True)  # Field name made lowercase.
    obj_group = models.CharField(db_column='OBJ_GROUP', max_length=12, blank=True, null=True)  # Field name made lowercase.
    obj_user = models.CharField(db_column='OBJ_USER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_order = models.CharField(db_column='OBJ_ORDER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_orderline = models.DecimalField(db_column='OBJ_ORDERLINE', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_production = models.CharField(db_column='OBJ_PRODUCTION', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_primaryuom = models.CharField(db_column='OBJ_PRIMARYUOM', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_acd = models.DecimalField(db_column='OBJ_ACD', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_notused = models.CharField(db_column='OBJ_NOTUSED', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_safety = models.CharField(db_column='OBJ_SAFETY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_criticality = models.CharField(db_column='OBJ_CRITICALITY', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_profile = models.CharField(db_column='OBJ_PROFILE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_manufactmodel = models.CharField(db_column='OBJ_MANUFACTMODEL', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_manufactrevnum = models.CharField(db_column='OBJ_MANUFACTREVNUM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    obj_value = models.DecimalField(db_column='OBJ_VALUE', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_sourcesystem = models.CharField(db_column='OBJ_SOURCESYSTEM', max_length=45, blank=True, null=True)  # Field name made lowercase.
    obj_sourcecode = models.CharField(db_column='OBJ_SOURCECODE', max_length=45, blank=True, null=True)  # Field name made lowercase.
    obj_variable1 = models.CharField(db_column='OBJ_VARIABLE1', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_variable2 = models.CharField(db_column='OBJ_VARIABLE2', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_variable3 = models.CharField(db_column='OBJ_VARIABLE3', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_variable4 = models.CharField(db_column='OBJ_VARIABLE4', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_variable5 = models.CharField(db_column='OBJ_VARIABLE5', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_variable6 = models.CharField(db_column='OBJ_VARIABLE6', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_state = models.CharField(db_column='OBJ_STATE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_rstate = models.CharField(db_column='OBJ_RSTATE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_cn = models.CharField(db_column='OBJ_CN', max_length=24, blank=True, null=True)  # Field name made lowercase.
    obj_org = models.CharField(db_column='OBJ_ORG', max_length=15)  # Field name made lowercase.
    obj_class_org = models.CharField(db_column='OBJ_CLASS_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_location_org = models.CharField(db_column='OBJ_LOCATION_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_position_org = models.CharField(db_column='OBJ_POSITION_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_parent_org = models.CharField(db_column='OBJ_PARENT_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_order_org = models.CharField(db_column='OBJ_ORDER_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_part_org = models.CharField(db_column='OBJ_PART_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_bin = models.CharField(db_column='OBJ_BIN', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_lot = models.CharField(db_column='OBJ_LOT', max_length=12, blank=True, null=True)  # Field name made lowercase.
    obj_syslevel = models.CharField(db_column='OBJ_SYSLEVEL', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_asmlevel = models.CharField(db_column='OBJ_ASMLEVEL', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_complevel = models.CharField(db_column='OBJ_COMPLEVEL', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_updated = models.DateField(db_column='OBJ_UPDATED', blank=True, null=True)  # Field name made lowercase.
    obj_updatedby = models.CharField(db_column='OBJ_UPDATEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_preventevtcomp = models.CharField(db_column='OBJ_PREVENTEVTCOMP', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_person = models.CharField(db_column='OBJ_PERSON', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_esignature = models.CharField(db_column='OBJ_ESIGNATURE', max_length=100, blank=True, null=True)  # Field name made lowercase.
    obj_updatecount = models.DecimalField(db_column='OBJ_UPDATECOUNT', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_dormstart = models.DateField(db_column='OBJ_DORMSTART', blank=True, null=True)  # Field name made lowercase.
    obj_dormend = models.DateField(db_column='OBJ_DORMEND', blank=True, null=True)  # Field name made lowercase.
    obj_dormreuse = models.CharField(db_column='OBJ_DORMREUSE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_gisobjid = models.DecimalField(db_column='OBJ_GISOBJID', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_gisprofile = models.CharField(db_column='OBJ_GISPROFILE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_profile_org = models.CharField(db_column='OBJ_PROFILE_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_solddate = models.DateField(db_column='OBJ_SOLDDATE', blank=True, null=True)  # Field name made lowercase.
    obj_transferdate = models.DateField(db_column='OBJ_TRANSFERDATE', blank=True, null=True)  # Field name made lowercase.
    obj_cgmp = models.CharField(db_column='OBJ_CGMP', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_testpointuom = models.CharField(db_column='OBJ_TESTPOINTUOM', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_outputuom = models.CharField(db_column='OBJ_OUTPUTUOM', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_increment = models.DecimalField(db_column='OBJ_INCREMENT', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_precision = models.DecimalField(db_column='OBJ_PRECISION', max_digits=2, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_pidno = models.CharField(db_column='OBJ_PIDNO', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_piddrawing = models.CharField(db_column='OBJ_PIDDRAWING', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_serviceperc = models.DecimalField(db_column='OBJ_SERVICEPERC', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_devicetolfrom = models.DecimalField(db_column='OBJ_DEVICETOLFROM', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_devicetolto = models.DecimalField(db_column='OBJ_DEVICETOLTO', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_devicetoltype = models.CharField(db_column='OBJ_DEVICETOLTYPE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_devicerangefrom = models.DecimalField(db_column='OBJ_DEVICERANGEFROM', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_devicerangeto = models.DecimalField(db_column='OBJ_DEVICERANGETO', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_outputrangefrom = models.DecimalField(db_column='OBJ_OUTPUTRANGEFROM', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_outputrangeto = models.DecimalField(db_column='OBJ_OUTPUTRANGETO', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_processtolfrom = models.DecimalField(db_column='OBJ_PROCESSTOLFROM', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_processtolto = models.DecimalField(db_column='OBJ_PROCESSTOLTO', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_processrangefrom = models.DecimalField(db_column='OBJ_PROCESSRANGEFROM', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_processrangeto = models.DecimalField(db_column='OBJ_PROCESSRANGETO', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_set = models.CharField(db_column='OBJ_SET', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_sop = models.CharField(db_column='OBJ_SOP', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_loop = models.CharField(db_column='OBJ_LOOP', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_instrument = models.CharField(db_column='OBJ_INSTRUMENT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_instrumenttype = models.CharField(db_column='OBJ_INSTRUMENTTYPE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_interface = models.DateField(db_column='OBJ_INTERFACE', blank=True, null=True)  # Field name made lowercase.
    obj_linkgiswo = models.CharField(db_column='OBJ_LINKGISWO', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_gislayer = models.CharField(db_column='OBJ_GISLAYER', max_length=60, blank=True, null=True)  # Field name made lowercase.
    obj_xlocation = models.DecimalField(db_column='OBJ_XLOCATION', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_ylocation = models.DecimalField(db_column='OBJ_YLOCATION', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_length = models.DecimalField(db_column='OBJ_LENGTH', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_lengthuom = models.CharField(db_column='OBJ_LENGTHUOM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    obj_linearrefuom = models.CharField(db_column='OBJ_LINEARREFUOM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    obj_linearrefprecision = models.DecimalField(db_column='OBJ_LINEARREFPRECISION', max_digits=2, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_georef = models.CharField(db_column='OBJ_GEOREF', max_length=1000, blank=True, null=True)  # Field name made lowercase.
    obj_vehicle = models.CharField(db_column='OBJ_VEHICLE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_fleetcustomer = models.CharField(db_column='OBJ_FLEETCUSTOMER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_fleetcustomer_org = models.CharField(db_column='OBJ_FLEETCUSTOMER_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_billingcode = models.CharField(db_column='OBJ_BILLINGCODE', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_billingcode_org = models.CharField(db_column='OBJ_BILLINGCODE_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_markupcode = models.CharField(db_column='OBJ_MARKUPCODE', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_markupcode_org = models.CharField(db_column='OBJ_MARKUPCODE_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_vehiclerstatus = models.CharField(db_column='OBJ_VEHICLERSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_vehiclestatus = models.CharField(db_column='OBJ_VEHICLESTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_issuedto = models.CharField(db_column='OBJ_ISSUEDTO', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_jecategory = models.CharField(db_column='OBJ_JECATEGORY', max_length=25, blank=True, null=True)  # Field name made lowercase.
    obj_jesource = models.CharField(db_column='OBJ_JESOURCE', max_length=25, blank=True, null=True)  # Field name made lowercase.
    obj_gltransferflag = models.CharField(db_column='OBJ_GLTRANSFERFLAG', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_gltransfer = models.DateField(db_column='OBJ_GLTRANSFER', blank=True, null=True)  # Field name made lowercase.
    obj_minpenalty = models.DecimalField(db_column='OBJ_MINPENALTY', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_penaltyfactor = models.DecimalField(db_column='OBJ_PENALTYFACTOR', max_digits=10, decimal_places=4, blank=True, null=True)  # Field name made lowercase.
    obj_calgroup = models.CharField(db_column='OBJ_CALGROUP', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_calgrouporg = models.CharField(db_column='OBJ_CALGROUPORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar01 = models.CharField(db_column='OBJ_UDFCHAR01', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar02 = models.CharField(db_column='OBJ_UDFCHAR02', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar03 = models.CharField(db_column='OBJ_UDFCHAR03', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar04 = models.CharField(db_column='OBJ_UDFCHAR04', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar05 = models.CharField(db_column='OBJ_UDFCHAR05', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar06 = models.CharField(db_column='OBJ_UDFCHAR06', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar07 = models.CharField(db_column='OBJ_UDFCHAR07', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar08 = models.CharField(db_column='OBJ_UDFCHAR08', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar09 = models.CharField(db_column='OBJ_UDFCHAR09', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar10 = models.CharField(db_column='OBJ_UDFCHAR10', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar11 = models.CharField(db_column='OBJ_UDFCHAR11', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar12 = models.CharField(db_column='OBJ_UDFCHAR12', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar13 = models.CharField(db_column='OBJ_UDFCHAR13', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar14 = models.CharField(db_column='OBJ_UDFCHAR14', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar15 = models.CharField(db_column='OBJ_UDFCHAR15', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar16 = models.CharField(db_column='OBJ_UDFCHAR16', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar17 = models.CharField(db_column='OBJ_UDFCHAR17', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar18 = models.CharField(db_column='OBJ_UDFCHAR18', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar19 = models.CharField(db_column='OBJ_UDFCHAR19', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar20 = models.CharField(db_column='OBJ_UDFCHAR20', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar21 = models.CharField(db_column='OBJ_UDFCHAR21', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar22 = models.CharField(db_column='OBJ_UDFCHAR22', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar23 = models.CharField(db_column='OBJ_UDFCHAR23', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar24 = models.CharField(db_column='OBJ_UDFCHAR24', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar25 = models.CharField(db_column='OBJ_UDFCHAR25', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar26 = models.CharField(db_column='OBJ_UDFCHAR26', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar27 = models.CharField(db_column='OBJ_UDFCHAR27', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar28 = models.CharField(db_column='OBJ_UDFCHAR28', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar29 = models.CharField(db_column='OBJ_UDFCHAR29', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar30 = models.CharField(db_column='OBJ_UDFCHAR30', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum01 = models.DecimalField(db_column='OBJ_UDFNUM01', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum02 = models.DecimalField(db_column='OBJ_UDFNUM02', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum03 = models.DecimalField(db_column='OBJ_UDFNUM03', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum04 = models.DecimalField(db_column='OBJ_UDFNUM04', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum05 = models.DecimalField(db_column='OBJ_UDFNUM05', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfdate01 = models.DateField(db_column='OBJ_UDFDATE01', blank=True, null=True)  # Field name made lowercase.
    obj_udfdate02 = models.DateField(db_column='OBJ_UDFDATE02', blank=True, null=True)  # Field name made lowercase.
    obj_udfdate03 = models.DateField(db_column='OBJ_UDFDATE03', blank=True, null=True)  # Field name made lowercase.
    obj_udfdate04 = models.DateField(db_column='OBJ_UDFDATE04', blank=True, null=True)  # Field name made lowercase.
    obj_udfdate05 = models.DateField(db_column='OBJ_UDFDATE05', blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox01 = models.CharField(db_column='OBJ_UDFCHKBOX01', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox02 = models.CharField(db_column='OBJ_UDFCHKBOX02', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox03 = models.CharField(db_column='OBJ_UDFCHKBOX03', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox04 = models.CharField(db_column='OBJ_UDFCHKBOX04', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox05 = models.CharField(db_column='OBJ_UDFCHKBOX05', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_sdmpresent = models.CharField(db_column='OBJ_SDMPRESENT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_sdmpath = models.CharField(db_column='OBJ_SDMPATH', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_costofneededrepairs = models.DecimalField(db_column='OBJ_COSTOFNEEDEDREPAIRS', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_replacementvalue = models.DecimalField(db_column='OBJ_REPLACEMENTVALUE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_facilityconditionindex = models.DecimalField(db_column='OBJ_FACILITYCONDITIONINDEX', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_billable = models.CharField(db_column='OBJ_BILLABLE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_gasindex = models.CharField(db_column='OBJ_GASINDEX', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_floorarea = models.DecimalField(db_column='OBJ_FLOORAREA', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_floorareauom = models.CharField(db_column='OBJ_FLOORAREAUOM', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_estrevenue = models.DecimalField(db_column='OBJ_ESTREVENUE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_region = models.CharField(db_column='OBJ_REGION', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_primaryuse = models.CharField(db_column='OBJ_PRIMARYUSE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_yearbuilt = models.DecimalField(db_column='OBJ_YEARBUILT', max_digits=4, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_servicelife = models.DecimalField(db_column='OBJ_SERVICELIFE', max_digits=3, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_resource = models.CharField(db_column='OBJ_RESOURCE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_resourcepresent = models.CharField(db_column='OBJ_RESOURCEPRESENT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_laststatusupdate = models.DateField(db_column='OBJ_LASTSTATUSUPDATE', blank=True, null=True)  # Field name made lowercase.
    obj_region_org = models.CharField(db_column='OBJ_REGION_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_gismap = models.CharField(db_column='OBJ_GISMAP', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_gismap_org = models.CharField(db_column='OBJ_GISMAP_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_energystareligible = models.CharField(db_column='OBJ_ENERGYSTARELIGIBLE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_reliabilityranking = models.CharField(db_column='OBJ_RELIABILITYRANKING', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_reliabilityranking_org = models.CharField(db_column='OBJ_RELIABILITYRANKING_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_reliabilityrankingrev = models.DecimalField(db_column='OBJ_RELIABILITYRANKINGREV', max_digits=4, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_reliabilityrankingindex = models.CharField(db_column='OBJ_RELIABILITYRANKINGINDEX', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_reliabilityrankingscore = models.DecimalField(db_column='OBJ_RELIABILITYRANKINGSCORE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_reliabilityrankinglocked = models.CharField(db_column='OBJ_RELIABILITYRANKINGLOCKED', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_rrvalueslastcalculated = models.DateField(db_column='OBJ_RRVALUESLASTCALCULATED', blank=True, null=True)  # Field name made lowercase.
    obj_rrsurveylastupdated = models.DateField(db_column='OBJ_RRSURVEYLASTUPDATED', blank=True, null=True)  # Field name made lowercase.
    obj_outputcalctype = models.CharField(db_column='OBJ_OUTPUTCALCTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_gis_updatecount = models.DecimalField(db_column='OBJ_GIS_UPDATECOUNT', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_gis_synccount = models.DecimalField(db_column='OBJ_GIS_SYNCCOUNT', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_alias = models.CharField(db_column='OBJ_ALIAS', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_rental = models.CharField(db_column='OBJ_RENTAL', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_rentaltemplate = models.CharField(db_column='OBJ_RENTALTEMPLATE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_rentaltemplate_org = models.CharField(db_column='OBJ_RENTALTEMPLATE_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_contract = models.CharField(db_column='OBJ_CONTRACT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_contracttemplate = models.CharField(db_column='OBJ_CONTRACTTEMPLATE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_contracttemplate_org = models.CharField(db_column='OBJ_CONTRACTTEMPLATE_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_customer = models.CharField(db_column='OBJ_CUSTOMER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_customer_org = models.CharField(db_column='OBJ_CUSTOMER_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_availabilitystatus = models.CharField(db_column='OBJ_AVAILABILITYSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_availabilityrstatus = models.CharField(db_column='OBJ_AVAILABILITYRSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_tempmonitored = models.CharField(db_column='OBJ_TEMPMONITORED', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_hardwarever = models.CharField(db_column='OBJ_HARDWAREVER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_softwarever = models.CharField(db_column='OBJ_SOFTWAREVER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_purchasingasset = models.CharField(db_column='OBJ_PURCHASINGASSET', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_biomedicalasset = models.CharField(db_column='OBJ_BIOMEDICALASSET', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_oemsite = models.CharField(db_column='OBJ_OEMSITE', max_length=45, blank=True, null=True)  # Field name made lowercase.
    obj_vendor = models.CharField(db_column='OBJ_VENDOR', max_length=45, blank=True, null=True)  # Field name made lowercase.
    obj_coveragetype = models.CharField(db_column='OBJ_COVERAGETYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_lockout = models.CharField(db_column='OBJ_LOCKOUT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_personalprotectiveequip = models.CharField(db_column='OBJ_PERSONALPROTECTIVEEQUIP', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_confinedspace = models.CharField(db_column='OBJ_CONFINEDSPACE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_statementofcond = models.CharField(db_column='OBJ_STATEMENTOFCOND', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_buildmaintprogram = models.CharField(db_column='OBJ_BUILDMAINTPROGRAM', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_hipaaconfidentiality = models.CharField(db_column='OBJ_HIPAACONFIDENTIALITY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_ownershiptype = models.CharField(db_column='OBJ_OWNERSHIPTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_inventoryverificationdate = models.DateField(db_column='OBJ_INVENTORYVERIFICATIONDATE', blank=True, null=True)  # Field name made lowercase.
    obj_purchaseorder = models.CharField(db_column='OBJ_PURCHASEORDER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_purchasedate = models.DateField(db_column='OBJ_PURCHASEDATE', blank=True, null=True)  # Field name made lowercase.
    obj_purchasecost = models.DecimalField(db_column='OBJ_PURCHASECOST', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_installdate = models.DateField(db_column='OBJ_INSTALLDATE', blank=True, null=True)  # Field name made lowercase.
    obj_disposaltype = models.CharField(db_column='OBJ_DISPOSALTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_roomtype = models.CharField(db_column='OBJ_ROOMTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_unittype = models.CharField(db_column='OBJ_UNITTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_guestfirstname = models.CharField(db_column='OBJ_GUESTFIRSTNAME', max_length=100, blank=True, null=True)  # Field name made lowercase.
    obj_guestmiddlename = models.CharField(db_column='OBJ_GUESTMIDDLENAME', max_length=50, blank=True, null=True)  # Field name made lowercase.
    obj_guestlastname = models.CharField(db_column='OBJ_GUESTLASTNAME', max_length=100, blank=True, null=True)  # Field name made lowercase.
    obj_vipstatus = models.CharField(db_column='OBJ_VIPSTATUS', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_maxguestcount = models.CharField(db_column='OBJ_MAXGUESTCOUNT', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_phonedecimal = models.CharField(db_column='OBJ_PHONEDECIMAL', max_length=50, blank=True, null=True)  # Field name made lowercase.
    obj_keydecimal = models.CharField(db_column='OBJ_KEYDECIMAL', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_accessible = models.CharField(db_column='OBJ_ACCESSIBLE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_nonsmoking = models.CharField(db_column='OBJ_NONSMOKING', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_sqfootage = models.DecimalField(db_column='OBJ_SQFOOTAGE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_bedcount = models.DecimalField(db_column='OBJ_BEDCOUNT', max_digits=18, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_bathcount = models.DecimalField(db_column='OBJ_BATHCOUNT', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_kitchen = models.CharField(db_column='OBJ_KITCHEN', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_livingroom = models.CharField(db_column='OBJ_LIVINGROOM', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_openbay = models.CharField(db_column='OBJ_OPENBAY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_building = models.CharField(db_column='OBJ_BUILDING', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_wing = models.CharField(db_column='OBJ_WING', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_floor = models.CharField(db_column='OBJ_FLOOR', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_exposure = models.CharField(db_column='OBJ_EXPOSURE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_xcoordinate = models.DecimalField(db_column='OBJ_XCOORDINATE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_ycoordinate = models.DecimalField(db_column='OBJ_YCOORDINATE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_zcoordinate = models.DecimalField(db_column='OBJ_ZCOORDINATE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_umdnscode = models.CharField(db_column='OBJ_UMDNSCODE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_fcicalculation = models.CharField(db_column='OBJ_FCICALCULATION', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_guestsalutation = models.CharField(db_column='OBJ_GUESTSALUTATION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_guestphonedecimal = models.CharField(db_column='OBJ_GUESTPHONEDECIMAL', max_length=50, blank=True, null=True)  # Field name made lowercase.
    obj_email = models.CharField(db_column='OBJ_EMAIL', max_length=255, blank=True, null=True)  # Field name made lowercase.
    obj_driver = models.CharField(db_column='OBJ_DRIVER', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar31 = models.CharField(db_column='OBJ_UDFCHAR31', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar32 = models.CharField(db_column='OBJ_UDFCHAR32', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar33 = models.CharField(db_column='OBJ_UDFCHAR33', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar34 = models.CharField(db_column='OBJ_UDFCHAR34', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar35 = models.CharField(db_column='OBJ_UDFCHAR35', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar36 = models.CharField(db_column='OBJ_UDFCHAR36', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar37 = models.CharField(db_column='OBJ_UDFCHAR37', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar38 = models.CharField(db_column='OBJ_UDFCHAR38', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar39 = models.CharField(db_column='OBJ_UDFCHAR39', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar40 = models.CharField(db_column='OBJ_UDFCHAR40', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar41 = models.CharField(db_column='OBJ_UDFCHAR41', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar42 = models.CharField(db_column='OBJ_UDFCHAR42', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar43 = models.CharField(db_column='OBJ_UDFCHAR43', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar44 = models.CharField(db_column='OBJ_UDFCHAR44', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfchar45 = models.CharField(db_column='OBJ_UDFCHAR45', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum06 = models.DecimalField(db_column='OBJ_UDFNUM06', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum07 = models.DecimalField(db_column='OBJ_UDFNUM07', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum08 = models.DecimalField(db_column='OBJ_UDFNUM08', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum09 = models.DecimalField(db_column='OBJ_UDFNUM09', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfnum10 = models.DecimalField(db_column='OBJ_UDFNUM10', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_udfdate06 = models.DateField(db_column='OBJ_UDFDATE06', blank=True, null=True)  # Field name made lowercase.
    obj_udfdate07 = models.DateField(db_column='OBJ_UDFDATE07', blank=True, null=True)  # Field name made lowercase.
    obj_udfdate08 = models.DateField(db_column='OBJ_UDFDATE08', blank=True, null=True)  # Field name made lowercase.
    obj_udfdate09 = models.DateField(db_column='OBJ_UDFDATE09', blank=True, null=True)  # Field name made lowercase.
    obj_udfdate10 = models.DateField(db_column='OBJ_UDFDATE10', blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox06 = models.CharField(db_column='OBJ_UDFCHKBOX06', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox07 = models.CharField(db_column='OBJ_UDFCHKBOX07', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox08 = models.CharField(db_column='OBJ_UDFCHKBOX08', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox09 = models.CharField(db_column='OBJ_UDFCHKBOX09', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_udfchkbox10 = models.CharField(db_column='OBJ_UDFCHKBOX10', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_facility = models.CharField(db_column='OBJ_FACILITY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_country = models.DecimalField(db_column='OBJ_COUNTRY', max_digits=10, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_targetpowerfactor = models.DecimalField(db_column='OBJ_TARGETPOWERFACTOR', max_digits=7, decimal_places=4, blank=True, null=True)  # Field name made lowercase.
    obj_targetpeakdemand = models.DecimalField(db_column='OBJ_TARGETPEAKDEMAND', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_startbillingperiod = models.DateField(db_column='OBJ_STARTBILLINGPERIOD', blank=True, null=True)  # Field name made lowercase.
    obj_billeveryperiod = models.DecimalField(db_column='OBJ_BILLEVERYPERIOD', max_digits=5, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_billeveryperioduom = models.CharField(db_column='OBJ_BILLEVERYPERIODUOM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    obj_efflossphaseimbalance1 = models.DecimalField(db_column='OBJ_EFFLOSSPHASEIMBALANCE1', max_digits=7, decimal_places=4, blank=True, null=True)  # Field name made lowercase.
    obj_efflossphaseimbalance2 = models.DecimalField(db_column='OBJ_EFFLOSSPHASEIMBALANCE2', max_digits=7, decimal_places=4, blank=True, null=True)  # Field name made lowercase.
    obj_efflossphaseimbalance3 = models.DecimalField(db_column='OBJ_EFFLOSSPHASEIMBALANCE3', max_digits=7, decimal_places=4, blank=True, null=True)  # Field name made lowercase.
    obj_efflossphaseimbalance4 = models.DecimalField(db_column='OBJ_EFFLOSSPHASEIMBALANCE4', max_digits=7, decimal_places=4, blank=True, null=True)  # Field name made lowercase.
    obj_efflossphaseimbalance5 = models.DecimalField(db_column='OBJ_EFFLOSSPHASEIMBALANCE5', max_digits=7, decimal_places=4, blank=True, null=True)  # Field name made lowercase.
    obj_performancemanager = models.CharField(db_column='OBJ_PERFORMANCEMANAGER', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_elecsubmeterinterval = models.DecimalField(db_column='OBJ_ELECSUBMETERINTERVAL', max_digits=10, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_elecusagethreshold = models.DecimalField(db_column='OBJ_ELECUSAGETHRESHOLD', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_safetyreviewrequired = models.DateField(db_column='OBJ_SAFETYREVIEWREQUIRED', blank=True, null=True)  # Field name made lowercase.
    obj_safetyreviewed = models.DateField(db_column='OBJ_SAFETYREVIEWED', blank=True, null=True)  # Field name made lowercase.
    obj_safetyreviewedby = models.CharField(db_column='OBJ_SAFETYREVIEWEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_safetyreviewedname = models.CharField(db_column='OBJ_SAFETYREVIEWEDNAME', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_safetyreviewedtype = models.CharField(db_column='OBJ_SAFETYREVIEWEDTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_permitreviewrequired = models.DateField(db_column='OBJ_PERMITREVIEWREQUIRED', blank=True, null=True)  # Field name made lowercase.
    obj_permitreviewed = models.DateField(db_column='OBJ_PERMITREVIEWED', blank=True, null=True)  # Field name made lowercase.
    obj_permitreviewedby = models.CharField(db_column='OBJ_PERMITREVIEWEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_permitreviewedname = models.CharField(db_column='OBJ_PERMITREVIEWEDNAME', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_permitreviewedtype = models.CharField(db_column='OBJ_PERMITREVIEWEDTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_lotoreviewrequired = models.DateField(db_column='OBJ_LOTOREVIEWREQUIRED', blank=True, null=True)  # Field name made lowercase.
    obj_lotoreviewed = models.DateField(db_column='OBJ_LOTOREVIEWED', blank=True, null=True)  # Field name made lowercase.
    obj_lotoreviewedby = models.CharField(db_column='OBJ_LOTOREVIEWEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_lotoreviewedname = models.CharField(db_column='OBJ_LOTOREVIEWEDNAME', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_lotoreviewedtype = models.CharField(db_column='OBJ_LOTOREVIEWEDTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_complocation = models.CharField(db_column='OBJ_COMPLOCATION', max_length=80, blank=True, null=True)  # Field name made lowercase.
    obj_origconfigcode = models.CharField(db_column='OBJ_ORIGCONFIGCODE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_origconfigorg = models.CharField(db_column='OBJ_ORIGCONFIGORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_origconfigrev = models.DecimalField(db_column='OBJ_ORIGCONFIGREV', max_digits=4, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_origobject = models.CharField(db_column='OBJ_ORIGOBJECT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_configcode = models.CharField(db_column='OBJ_CONFIGCODE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_configrevision = models.DecimalField(db_column='OBJ_CONFIGREVISION', max_digits=4, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_configstatus = models.CharField(db_column='OBJ_CONFIGSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_configrstatus = models.CharField(db_column='OBJ_CONFIGRSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_configtype = models.CharField(db_column='OBJ_CONFIGTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_configspecific = models.CharField(db_column='OBJ_CONFIGSPECIFIC', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_configprefix = models.CharField(db_column='OBJ_CONFIGPREFIX', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_configsuffix = models.CharField(db_column='OBJ_CONFIGSUFFIX', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_configseqlength = models.DecimalField(db_column='OBJ_CONFIGSEQLENGTH', max_digits=2, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_configautonum = models.CharField(db_column='OBJ_CONFIGAUTONUM', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_configstwo = models.CharField(db_column='OBJ_CONFIGSTWO', max_length=20, blank=True, null=True)  # Field name made lowercase.
    obj_configrequested = models.DateField(db_column='OBJ_CONFIGREQUESTED', blank=True, null=True)  # Field name made lowercase.
    obj_configrequestedby = models.CharField(db_column='OBJ_CONFIGREQUESTEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_configapproved = models.DateField(db_column='OBJ_CONFIGAPPROVED', blank=True, null=True)  # Field name made lowercase.
    obj_configapprovedby = models.CharField(db_column='OBJ_CONFIGAPPROVEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_created = models.DateField(db_column='OBJ_CREATED', blank=True, null=True)  # Field name made lowercase.
    obj_createdby = models.CharField(db_column='OBJ_CREATEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_configrevisionreason = models.CharField(db_column='OBJ_CONFIGREVISIONREASON', max_length=2000, blank=True, null=True)  # Field name made lowercase.
    obj_configdefaultstatus = models.CharField(db_column='OBJ_CONFIGDEFAULTSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_guestprofileid = models.DecimalField(db_column='OBJ_GUESTPROFILEID', max_digits=30, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_managerprofileid = models.CharField(db_column='OBJ_MANAGERPROFILEID', max_length=20, blank=True, null=True)  # Field name made lowercase.
    obj_rcmlevel = models.CharField(db_column='OBJ_RCMLEVEL', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_risklevel = models.CharField(db_column='OBJ_RISKLEVEL', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_rpn = models.DecimalField(db_column='OBJ_RPN', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_vehicletype = models.CharField(db_column='OBJ_VEHICLETYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_linearcostweight = models.DecimalField(db_column='OBJ_LINEARCOSTWEIGHT', max_digits=6, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    obj_inspectiondirection = models.CharField(db_column='OBJ_INSPECTIONDIRECTION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_flow = models.CharField(db_column='OBJ_FLOW', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_originalreceiptdate = models.DateField(db_column='OBJ_ORIGINALRECEIPTDATE', blank=True, null=True)  # Field name made lowercase.
    obj_latestreceiptdate = models.DateField(db_column='OBJ_LATESTRECEIPTDATE', blank=True, null=True)  # Field name made lowercase.
    obj_originalinstalldate = models.DateField(db_column='OBJ_ORIGINALINSTALLDATE', blank=True, null=True)  # Field name made lowercase.
    obj_latestinstalldate = models.DateField(db_column='OBJ_LATESTINSTALLDATE', blank=True, null=True)  # Field name made lowercase.
    obj_operationalstatus = models.CharField(db_column='OBJ_OPERATIONALSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_operationalrstatus = models.CharField(db_column='OBJ_OPERATIONALRSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    obj_loaneddept = models.CharField(db_column='OBJ_LOANEDDEPT', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_wodept = models.CharField(db_column='OBJ_WODEPT', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_pmwodept = models.CharField(db_column='OBJ_PMWODEPT', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_documoto_bookid = models.CharField(db_column='OBJ_DOCUMOTO_BOOKID', max_length=100, blank=True, null=True)  # Field name made lowercase.
    obj_rescalowner = models.CharField(db_column='OBJ_RESCALOWNER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_workspace = models.CharField(db_column='OBJ_WORKSPACE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_configuseparentcode = models.CharField(db_column='OBJ_CONFIGUSEPARENTCODE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    obj_configparentseparator = models.CharField(db_column='OBJ_CONFIGPARENTSEPARATOR', max_length=3, blank=True, null=True)  # Field name made lowercase.
    obj_imageurl = models.CharField(db_column='OBJ_IMAGEURL', max_length=1000, blank=True, null=True)  # Field name made lowercase.
    obj_primarysystem = models.CharField(db_column='OBJ_PRIMARYSYSTEM', max_length=30, blank=True, null=True)  # Field name made lowercase.
    obj_primarysystem_org = models.CharField(db_column='OBJ_PRIMARYSYSTEM_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    obj_conditionindex = models.CharField(db_column='OBJ_CONDITIONINDEX', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_conditionscore = models.DecimalField(db_column='OBJ_CONDITIONSCORE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_linearobjtype = models.CharField(db_column='OBJ_LINEAROBJTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_direction = models.CharField(db_column='OBJ_DIRECTION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    obj_frompoint = models.DecimalField(db_column='OBJ_FROMPOINT', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    obj_topoint = models.DecimalField(db_column='OBJ_TOPOINT', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'R5OBJECTS'
        unique_together = (('obj_code', 'obj_org'),)
