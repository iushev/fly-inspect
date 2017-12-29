# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey has `on_delete` set to the desired behavior.
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from django.db import models


class R5Events(models.Model):
    evt_code = models.CharField(db_column='EVT_CODE', max_length=30)  # Field name made lowercase.
    evt_desc = models.CharField(db_column='EVT_DESC', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_type = models.CharField(db_column='EVT_TYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_rtype = models.CharField(db_column='EVT_RTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_date = models.DateField(db_column='EVT_DATE', blank=True, null=True)  # Field name made lowercase.
    evt_status = models.CharField(db_column='EVT_STATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_rstatus = models.CharField(db_column='EVT_RSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_mrc = models.CharField(db_column='EVT_MRC', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_ltype = models.CharField(db_column='EVT_LTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_location = models.CharField(db_column='EVT_LOCATION', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_costcode = models.CharField(db_column='EVT_COSTCODE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_printed = models.CharField(db_column='EVT_PRINTED', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_project = models.CharField(db_column='EVT_PROJECT', max_length=20, blank=True, null=True)  # Field name made lowercase.
    evt_projbud = models.CharField(db_column='EVT_PROJBUD', max_length=20, blank=True, null=True)  # Field name made lowercase.
    evt_obtype = models.CharField(db_column='EVT_OBTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_obrtype = models.CharField(db_column='EVT_OBRTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_object = models.CharField(db_column='EVT_OBJECT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_standwork = models.CharField(db_column='EVT_STANDWORK', max_length=20, blank=True, null=True)  # Field name made lowercase.
    evt_ppm = models.CharField(db_column='EVT_PPM', max_length=20, blank=True, null=True)  # Field name made lowercase.
    evt_freq = models.DecimalField(db_column='EVT_FREQ', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_isstype = models.CharField(db_column='EVT_ISSTYPE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_meter = models.CharField(db_column='EVT_METER', max_length=20, blank=True, null=True)  # Field name made lowercase.
    evt_meterdue = models.DecimalField(db_column='EVT_METERDUE', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_class = models.CharField(db_column='EVT_CLASS', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_route = models.CharField(db_column='EVT_ROUTE', max_length=20, blank=True, null=True)  # Field name made lowercase.
    evt_session = models.CharField(db_column='EVT_SESSION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_schedno = models.DecimalField(db_column='EVT_SCHEDNO', max_digits=5, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_planprio = models.CharField(db_column='EVT_PLANPRIO', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_fixed = models.CharField(db_column='EVT_FIXED', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_slack = models.DecimalField(db_column='EVT_SLACK', max_digits=5, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_target = models.DateField(db_column='EVT_TARGET', blank=True, null=True)  # Field name made lowercase.
    evt_newtarget = models.DateField(db_column='EVT_NEWTARGET', blank=True, null=True)  # Field name made lowercase.
    evt_earlystart = models.DateField(db_column='EVT_EARLYSTART', blank=True, null=True)  # Field name made lowercase.
    evt_lateend = models.DateField(db_column='EVT_LATEEND', blank=True, null=True)  # Field name made lowercase.
    evt_mustend = models.DateField(db_column='EVT_MUSTEND', blank=True, null=True)  # Field name made lowercase.
    evt_lastplan = models.DateField(db_column='EVT_LASTPLAN', blank=True, null=True)  # Field name made lowercase.
    evt_duration = models.DecimalField(db_column='EVT_DURATION', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_newdur = models.DecimalField(db_column='EVT_NEWDUR', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_planstatus = models.CharField(db_column='EVT_PLANSTATUS', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_parent = models.CharField(db_column='EVT_PARENT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_depend = models.CharField(db_column='EVT_DEPEND', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_origin = models.CharField(db_column='EVT_ORIGIN', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_reqm = models.CharField(db_column='EVT_REQM', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_cause = models.CharField(db_column='EVT_CAUSE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_action = models.CharField(db_column='EVT_ACTION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_jobtype = models.CharField(db_column='EVT_JOBTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_priority = models.CharField(db_column='EVT_PRIORITY', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_reported = models.DateField(db_column='EVT_REPORTED', blank=True, null=True)  # Field name made lowercase.
    evt_start = models.DateField(db_column='EVT_START', blank=True, null=True)  # Field name made lowercase.
    evt_matavail = models.DateField(db_column='EVT_MATAVAIL', blank=True, null=True)  # Field name made lowercase.
    evt_due = models.DateField(db_column='EVT_DUE', blank=True, null=True)  # Field name made lowercase.
    evt_completed = models.DateField(db_column='EVT_COMPLETED', blank=True, null=True)  # Field name made lowercase.
    evt_downtime = models.DecimalField(db_column='EVT_DOWNTIME', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_labtotal = models.DecimalField(db_column='EVT_LABTOTAL', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_mattotal = models.DecimalField(db_column='EVT_MATTOTAL', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_shift = models.CharField(db_column='EVT_SHIFT', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_failureusage = models.DecimalField(db_column='EVT_FAILUREUSAGE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_meterreading = models.DecimalField(db_column='EVT_METERREADING', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_metuom = models.CharField(db_column='EVT_METUOM', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_maxcost = models.DecimalField(db_column='EVT_MAXCOST', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_screener = models.CharField(db_column='EVT_SCREENER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_routedfrom = models.CharField(db_column='EVT_ROUTEDFROM', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_routereason = models.CharField(db_column='EVT_ROUTEREASON', max_length=240, blank=True, null=True)  # Field name made lowercase.
    evt_warranty = models.CharField(db_column='EVT_WARRANTY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_okwinend = models.DateField(db_column='EVT_OKWINEND', blank=True, null=True)  # Field name made lowercase.
    evt_nearwinstart = models.DateField(db_column='EVT_NEARWINSTART', blank=True, null=True)  # Field name made lowercase.
    evt_genwinstart = models.DateField(db_column='EVT_GENWINSTART', blank=True, null=True)  # Field name made lowercase.
    evt_okwinendval = models.DecimalField(db_column='EVT_OKWINENDVAL', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_nearwinbegval = models.DecimalField(db_column='EVT_NEARWINBEGVAL', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_genwinbegval = models.DecimalField(db_column='EVT_GENWINBEGVAL', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_routestatus = models.CharField(db_column='EVT_ROUTESTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_routerstatus = models.CharField(db_column='EVT_ROUTERSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_acd = models.DecimalField(db_column='EVT_ACD', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_rejectreason = models.CharField(db_column='EVT_REJECTREASON', max_length=240, blank=True, null=True)  # Field name made lowercase.
    evt_enteredby = models.CharField(db_column='EVT_ENTEREDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_failure = models.CharField(db_column='EVT_FAILURE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_downtimehrs = models.DecimalField(db_column='EVT_DOWNTIMEHRS', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_safety = models.CharField(db_column='EVT_SAFETY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_objcriticality = models.CharField(db_column='EVT_OBJCRITICALITY', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_mpproj = models.CharField(db_column='EVT_MPPROJ', max_length=20, blank=True, null=True)  # Field name made lowercase.
    evt_transorgid = models.DecimalField(db_column='EVT_TRANSORGID', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_transcode = models.CharField(db_column='EVT_TRANSCODE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_transgroup = models.DecimalField(db_column='EVT_TRANSGROUP', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_cn = models.CharField(db_column='EVT_CN', max_length=24, blank=True, null=True)  # Field name made lowercase.
    evt_reopened = models.CharField(db_column='EVT_REOPENED', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_ppopk = models.DecimalField(db_column='EVT_PPOPK', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_ppmrev = models.DecimalField(db_column='EVT_PPMREV', max_digits=4, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_routerev = models.DecimalField(db_column='EVT_ROUTEREV', max_digits=4, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_org = models.CharField(db_column='EVT_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_class_org = models.CharField(db_column='EVT_CLASS_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_object_org = models.CharField(db_column='EVT_OBJECT_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_location_org = models.CharField(db_column='EVT_LOCATION_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_schedgrp = models.CharField(db_column='EVT_SCHEDGRP', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_requeststart = models.DateField(db_column='EVT_REQUESTSTART', blank=True, null=True)  # Field name made lowercase.
    evt_schedend = models.DateField(db_column='EVT_SCHEDEND', blank=True, null=True)  # Field name made lowercase.
    evt_requestend = models.DateField(db_column='EVT_REQUESTEND', blank=True, null=True)  # Field name made lowercase.
    evt_mastercal = models.CharField(db_column='EVT_MASTERCAL', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_step = models.DecimalField(db_column='EVT_STEP', max_digits=3, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_seq = models.DecimalField(db_column='EVT_SEQ', max_digits=3, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_trigevent = models.CharField(db_column='EVT_TRIGEVENT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_oldrstatus = models.CharField(db_column='EVT_OLDRSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_oldstatus = models.CharField(db_column='EVT_OLDSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_newrstatus = models.CharField(db_column='EVT_NEWRSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_newstatus = models.CharField(db_column='EVT_NEWSTATUS', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_conflict = models.CharField(db_column='EVT_CONFLICT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_conflictresolved = models.CharField(db_column='EVT_CONFLICTRESOLVED', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_conflictdesc = models.CharField(db_column='EVT_CONFLICTDESC', max_length=255, blank=True, null=True)  # Field name made lowercase.
    evt_package = models.CharField(db_column='EVT_PACKAGE', max_length=24, blank=True, null=True)  # Field name made lowercase.
    evt_code_alias = models.CharField(db_column='EVT_CODE_ALIAS', max_length=45, blank=True, null=True)  # Field name made lowercase.
    evt_created = models.DateField(db_column='EVT_CREATED', blank=True, null=True)  # Field name made lowercase.
    evt_createdby = models.CharField(db_column='EVT_CREATEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_updated = models.DateField(db_column='EVT_UPDATED', blank=True, null=True)  # Field name made lowercase.
    evt_updatedby = models.CharField(db_column='EVT_UPDATEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_contname = models.CharField(db_column='EVT_CONTNAME', max_length=50, blank=True, null=True)  # Field name made lowercase.
    evt_contphone = models.CharField(db_column='EVT_CONTPHONE', max_length=50, blank=True, null=True)  # Field name made lowercase.
    evt_contemail = models.CharField(db_column='EVT_CONTEMAIL', max_length=255, blank=True, null=True)  # Field name made lowercase.
    evt_contnotes = models.CharField(db_column='EVT_CONTNOTES', max_length=255, blank=True, null=True)  # Field name made lowercase.
    evt_followup = models.CharField(db_column='EVT_FOLLOWUP', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_updatecount = models.DecimalField(db_column='EVT_UPDATECOUNT', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_servicerequest = models.CharField(db_column='EVT_SERVICEREQUEST', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_person = models.CharField(db_column='EVT_PERSON', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_print = models.CharField(db_column='EVT_PRINT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_billable = models.CharField(db_column='EVT_BILLABLE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_perioduom = models.CharField(db_column='EVT_PERIODUOM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    evt_meterdue2 = models.DecimalField(db_column='EVT_METERDUE2', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_metuom2 = models.CharField(db_column='EVT_METUOM2', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_routeparent = models.CharField(db_column='EVT_ROUTEPARENT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_syslevel = models.CharField(db_column='EVT_SYSLEVEL', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_sourcecode = models.CharField(db_column='EVT_SOURCECODE', max_length=45, blank=True, null=True)  # Field name made lowercase.
    evt_sourcesystem = models.CharField(db_column='EVT_SOURCESYSTEM', max_length=45, blank=True, null=True)  # Field name made lowercase.
    evt_interface = models.DateField(db_column='EVT_INTERFACE', blank=True, null=True)  # Field name made lowercase.
    evt_lastcal = models.DateField(db_column='EVT_LASTCAL', blank=True, null=True)  # Field name made lowercase.
    evt_sopeffective = models.DateField(db_column='EVT_SOPEFFECTIVE', blank=True, null=True)  # Field name made lowercase.
    evt_calstatus = models.CharField(db_column='EVT_CALSTATUS', max_length=2, blank=True, null=True)  # Field name made lowercase.
    evt_increment = models.DecimalField(db_column='EVT_INCREMENT', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_precision = models.DecimalField(db_column='EVT_PRECISION', max_digits=2, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_pidno = models.CharField(db_column='EVT_PIDNO', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_piddrawing = models.CharField(db_column='EVT_PIDDRAWING', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_serviceperc = models.DecimalField(db_column='EVT_SERVICEPERC', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_sop = models.CharField(db_column='EVT_SOP', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_srqcallname = models.CharField(db_column='EVT_SRQCALLNAME', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_srqcustomer = models.CharField(db_column='EVT_SRQCUSTOMER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_srqlevel1 = models.CharField(db_column='EVT_SRQLEVEL1', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_firstbill = models.CharField(db_column='EVT_FIRSTBILL', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_jecategory = models.CharField(db_column='EVT_JECATEGORY', max_length=25, blank=True, null=True)  # Field name made lowercase.
    evt_jesource = models.CharField(db_column='EVT_JESOURCE', max_length=25, blank=True, null=True)  # Field name made lowercase.
    evt_gltransferflag = models.CharField(db_column='EVT_GLTRANSFERFLAG', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_gltransfer = models.DateField(db_column='EVT_GLTRANSFER', blank=True, null=True)  # Field name made lowercase.
    evt_multiequip = models.CharField(db_column='EVT_MULTIEQUIP', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_agreement = models.CharField(db_column='EVT_AGREEMENT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_sigpb = models.CharField(db_column='EVT_SIGPB', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_sigrb = models.CharField(db_column='EVT_SIGRB', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_lasttimepb = models.DateField(db_column='EVT_LASTTIMEPB', blank=True, null=True)  # Field name made lowercase.
    evt_lasttimerb = models.DateField(db_column='EVT_LASTTIMERB', blank=True, null=True)  # Field name made lowercase.
    evt_completed_trunc = models.DateField(db_column='EVT_COMPLETED_TRUNC', blank=True, null=True)  # Field name made lowercase.
    evt_performedby = models.CharField(db_column='EVT_PERFORMEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_reviewedby = models.CharField(db_column='EVT_REVIEWEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_meterinterval = models.DecimalField(db_column='EVT_METERINTERVAL', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_meterinterval2 = models.DecimalField(db_column='EVT_METERINTERVAL2', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_workaddress = models.CharField(db_column='EVT_WORKADDRESS', max_length=256, blank=True, null=True)  # Field name made lowercase.
    evt_pfpromisedate = models.DateField(db_column='EVT_PFPROMISEDATE', blank=True, null=True)  # Field name made lowercase.
    evt_tfpromisedate = models.DateField(db_column='EVT_TFPROMISEDATE', blank=True, null=True)  # Field name made lowercase.
    evt_tfdatecompleted = models.DateField(db_column='EVT_TFDATECOMPLETED', blank=True, null=True)  # Field name made lowercase.
    evt_equipmentusability = models.CharField(db_column='EVT_EQUIPMENTUSABILITY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_equipmentusability_org = models.CharField(db_column='EVT_EQUIPMENTUSABILITY_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_provider = models.CharField(db_column='EVT_PROVIDER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_provider_org = models.CharField(db_column='EVT_PROVIDER_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_serviceproblem = models.CharField(db_column='EVT_SERVICEPROBLEM', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_serviceproblem_org = models.CharField(db_column='EVT_SERVICEPROBLEM_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_servicecategory = models.CharField(db_column='EVT_SERVICECATEGORY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_servicecategory_org = models.CharField(db_column='EVT_SERVICECATEGORY_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar01 = models.CharField(db_column='EVT_UDFCHAR01', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar02 = models.CharField(db_column='EVT_UDFCHAR02', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar03 = models.CharField(db_column='EVT_UDFCHAR03', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar04 = models.CharField(db_column='EVT_UDFCHAR04', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar05 = models.CharField(db_column='EVT_UDFCHAR05', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar06 = models.CharField(db_column='EVT_UDFCHAR06', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar07 = models.CharField(db_column='EVT_UDFCHAR07', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar08 = models.CharField(db_column='EVT_UDFCHAR08', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar09 = models.CharField(db_column='EVT_UDFCHAR09', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar10 = models.CharField(db_column='EVT_UDFCHAR10', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar11 = models.CharField(db_column='EVT_UDFCHAR11', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar12 = models.CharField(db_column='EVT_UDFCHAR12', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar13 = models.CharField(db_column='EVT_UDFCHAR13', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar14 = models.CharField(db_column='EVT_UDFCHAR14', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar15 = models.CharField(db_column='EVT_UDFCHAR15', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar16 = models.CharField(db_column='EVT_UDFCHAR16', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar17 = models.CharField(db_column='EVT_UDFCHAR17', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar18 = models.CharField(db_column='EVT_UDFCHAR18', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar19 = models.CharField(db_column='EVT_UDFCHAR19', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar20 = models.CharField(db_column='EVT_UDFCHAR20', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar21 = models.CharField(db_column='EVT_UDFCHAR21', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar22 = models.CharField(db_column='EVT_UDFCHAR22', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar23 = models.CharField(db_column='EVT_UDFCHAR23', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar24 = models.CharField(db_column='EVT_UDFCHAR24', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar25 = models.CharField(db_column='EVT_UDFCHAR25', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar26 = models.CharField(db_column='EVT_UDFCHAR26', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar27 = models.CharField(db_column='EVT_UDFCHAR27', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar28 = models.CharField(db_column='EVT_UDFCHAR28', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar29 = models.CharField(db_column='EVT_UDFCHAR29', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfchar30 = models.CharField(db_column='EVT_UDFCHAR30', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_udfnum01 = models.DecimalField(db_column='EVT_UDFNUM01', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_udfnum02 = models.DecimalField(db_column='EVT_UDFNUM02', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_udfnum03 = models.DecimalField(db_column='EVT_UDFNUM03', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_udfnum04 = models.DecimalField(db_column='EVT_UDFNUM04', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_udfnum05 = models.DecimalField(db_column='EVT_UDFNUM05', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_udfdate01 = models.DateField(db_column='EVT_UDFDATE01', blank=True, null=True)  # Field name made lowercase.
    evt_udfdate02 = models.DateField(db_column='EVT_UDFDATE02', blank=True, null=True)  # Field name made lowercase.
    evt_udfdate03 = models.DateField(db_column='EVT_UDFDATE03', blank=True, null=True)  # Field name made lowercase.
    evt_udfdate04 = models.DateField(db_column='EVT_UDFDATE04', blank=True, null=True)  # Field name made lowercase.
    evt_udfdate05 = models.DateField(db_column='EVT_UDFDATE05', blank=True, null=True)  # Field name made lowercase.
    evt_udfchkbox01 = models.CharField(db_column='EVT_UDFCHKBOX01', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_udfchkbox02 = models.CharField(db_column='EVT_UDFCHKBOX02', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_udfchkbox03 = models.CharField(db_column='EVT_UDFCHKBOX03', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_udfchkbox04 = models.CharField(db_column='EVT_UDFCHKBOX04', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_udfchkbox05 = models.CharField(db_column='EVT_UDFCHKBOX05', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_frompoint = models.DecimalField(db_column='EVT_FROMPOINT', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_fromrefdesc = models.CharField(db_column='EVT_FROMREFDESC', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_fromgeoref = models.CharField(db_column='EVT_FROMGEOREF', max_length=1000, blank=True, null=True)  # Field name made lowercase.
    evt_topoint = models.DecimalField(db_column='EVT_TOPOINT', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_torefdesc = models.CharField(db_column='EVT_TOREFDESC', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_togeoref = models.CharField(db_column='EVT_TOGEOREF', max_length=1000, blank=True, null=True)  # Field name made lowercase.
    evt_performonweek = models.CharField(db_column='EVT_PERFORMONWEEK', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_performonday = models.DecimalField(db_column='EVT_PERFORMONDAY', max_digits=1, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_alert = models.CharField(db_column='EVT_ALERT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_productionrequest = models.CharField(db_column='EVT_PRODUCTIONREQUEST', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_productionrequestrev = models.DecimalField(db_column='EVT_PRODUCTIONREQUESTREV', max_digits=4, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_productionrequest_org = models.CharField(db_column='EVT_PRODUCTIONREQUEST_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_prodorder = models.CharField(db_column='EVT_PRODORDER', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_prodpriority = models.CharField(db_column='EVT_PRODPRIORITY', max_length=256, blank=True, null=True)  # Field name made lowercase.
    evt_accountingentity = models.CharField(db_column='EVT_ACCOUNTINGENTITY', max_length=22, blank=True, null=True)  # Field name made lowercase.
    evt_productionstart = models.DateField(db_column='EVT_PRODUCTIONSTART', blank=True, null=True)  # Field name made lowercase.
    evt_productionend = models.DateField(db_column='EVT_PRODUCTIONEND', blank=True, null=True)  # Field name made lowercase.
    evt_laststatusupdate = models.DateField(db_column='EVT_LASTSTATUSUPDATE', blank=True, null=True)  # Field name made lowercase.
    evt_mp = models.CharField(db_column='EVT_MP', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_mp_org = models.CharField(db_column='EVT_MP_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_mp_rev = models.DecimalField(db_column='EVT_MP_REV', max_digits=4, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_mp_seq = models.DecimalField(db_column='EVT_MP_SEQ', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_meterduedate = models.DateField(db_column='EVT_METERDUEDATE', blank=True, null=True)  # Field name made lowercase.
    evt_meterduedate2 = models.DateField(db_column='EVT_METERDUEDATE2', blank=True, null=True)  # Field name made lowercase.
    evt_campaign = models.CharField(db_column='EVT_CAMPAIGN', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_campaign_org = models.CharField(db_column='EVT_CAMPAIGN_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_campaign_line = models.DecimalField(db_column='EVT_CAMPAIGN_LINE', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_campaign_survey = models.CharField(db_column='EVT_CAMPAIGN_SURVEY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_mpprojtype = models.CharField(db_column='EVT_MPPROJTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_psqpk = models.DecimalField(db_column='EVT_PSQPK', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_okwinendval2 = models.DecimalField(db_column='EVT_OKWINENDVAL2', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_nearwinbegval2 = models.DecimalField(db_column='EVT_NEARWINBEGVAL2', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_genwinbegval2 = models.DecimalField(db_column='EVT_GENWINBEGVAL2', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_outputcalctype = models.CharField(db_column='EVT_OUTPUTCALCTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_ceilpermit = models.CharField(db_column='EVT_CEILPERMIT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_lifesafety = models.CharField(db_column='EVT_LIFESAFETY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_infectcontrol = models.CharField(db_column='EVT_INFECTCONTROL', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_pcra = models.CharField(db_column='EVT_PCRA', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_pfi = models.CharField(db_column='EVT_PFI', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_burnpermit = models.CharField(db_column='EVT_BURNPERMIT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_patientsafety = models.CharField(db_column='EVT_PATIENTSAFETY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_recallnotice = models.CharField(db_column='EVT_RECALLNOTICE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_smda = models.CharField(db_column='EVT_SMDA', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_visitorinjury = models.CharField(db_column='EVT_VISITORINJURY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_staffinjury = models.CharField(db_column='EVT_STAFFINJURY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_securityincident = models.CharField(db_column='EVT_SECURITYINCIDENT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_propertydamage = models.CharField(db_column='EVT_PROPERTYDAMAGE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_hazmatincident = models.CharField(db_column='EVT_HAZMATINCIDENT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_fireincident = models.CharField(db_column='EVT_FIREINCIDENT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_medicequipincident = models.CharField(db_column='EVT_MEDICEQUIPINCIDENT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_utilityincident = models.CharField(db_column='EVT_UTILITYINCIDENT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_invoice = models.CharField(db_column='EVT_INVOICE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_invoice_org = models.CharField(db_column='EVT_INVOICE_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_invoice_revision = models.DecimalField(db_column='EVT_INVOICE_REVISION', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_invoiceline = models.DecimalField(db_column='EVT_INVOICELINE', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_phone = models.CharField(db_column='EVT_PHONE', max_length=50, blank=True, null=True)  # Field name made lowercase.
    evt_email = models.CharField(db_column='EVT_EMAIL', max_length=255, blank=True, null=True)  # Field name made lowercase.
    evt_lockout = models.CharField(db_column='EVT_LOCKOUT', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_personalprotectiveequip = models.CharField(db_column='EVT_PERSONALPROTECTIVEEQUIP', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_confinedspace = models.CharField(db_column='EVT_CONFINEDSPACE', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_statementofcond = models.CharField(db_column='EVT_STATEMENTOFCOND', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_buildmaintprogram = models.CharField(db_column='EVT_BUILDMAINTPROGRAM', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_hipaaconfidentiality = models.CharField(db_column='EVT_HIPAACONFIDENTIALITY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_facility = models.CharField(db_column='EVT_FACILITY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_facility_org = models.CharField(db_column='EVT_FACILITY_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_additionalinfo = models.CharField(db_column='EVT_ADDITIONALINFO', max_length=4000, blank=True, null=True)  # Field name made lowercase.
    evt_safetyreviewed = models.DateField(db_column='EVT_SAFETYREVIEWED', blank=True, null=True)  # Field name made lowercase.
    evt_safetyreviewedby = models.CharField(db_column='EVT_SAFETYREVIEWEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_safetyreviewedname = models.CharField(db_column='EVT_SAFETYREVIEWEDNAME', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_safetyreviewedtype = models.CharField(db_column='EVT_SAFETYREVIEWEDTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_permitreviewed = models.DateField(db_column='EVT_PERMITREVIEWED', blank=True, null=True)  # Field name made lowercase.
    evt_permitreviewedby = models.CharField(db_column='EVT_PERMITREVIEWEDBY', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_permitreviewedname = models.CharField(db_column='EVT_PERMITREVIEWEDNAME', max_length=80, blank=True, null=True)  # Field name made lowercase.
    evt_permitreviewedtype = models.CharField(db_column='EVT_PERMITREVIEWEDTYPE', max_length=4, blank=True, null=True)  # Field name made lowercase.
    evt_origwo = models.CharField(db_column='EVT_ORIGWO', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_origact = models.DecimalField(db_column='EVT_ORIGACT', max_digits=8, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_minor = models.CharField(db_column='EVT_MINOR', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_guestprofileid = models.DecimalField(db_column='EVT_GUESTPROFILEID', max_digits=30, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_managerprofileid = models.CharField(db_column='EVT_MANAGERPROFILEID', max_length=20, blank=True, null=True)  # Field name made lowercase.
    evt_guestsalutation = models.CharField(db_column='EVT_GUESTSALUTATION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_guestfirstname = models.CharField(db_column='EVT_GUESTFIRSTNAME', max_length=100, blank=True, null=True)  # Field name made lowercase.
    evt_guestlastname = models.CharField(db_column='EVT_GUESTLASTNAME', max_length=100, blank=True, null=True)  # Field name made lowercase.
    evt_guestmiddlename = models.CharField(db_column='EVT_GUESTMIDDLENAME', max_length=50, blank=True, null=True)  # Field name made lowercase.
    evt_guestemail = models.CharField(db_column='EVT_GUESTEMAIL', max_length=255, blank=True, null=True)  # Field name made lowercase.
    evt_guestphonedecimal = models.CharField(db_column='EVT_GUESTPHONEDECIMAL', max_length=50, blank=True, null=True)  # Field name made lowercase.
    evt_vipstatus = models.CharField(db_column='EVT_VIPSTATUS', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_reservationnum = models.CharField(db_column='EVT_RESERVATIONNUM', max_length=50, blank=True, null=True)  # Field name made lowercase.
    evt_scheduledstarttime = models.DecimalField(db_column='EVT_SCHEDULEDSTARTTIME', max_digits=5, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_scheduledendtime = models.DecimalField(db_column='EVT_SCHEDULEDENDTIME', max_digits=5, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_inspectiondirection = models.CharField(db_column='EVT_INSPECTIONDIRECTION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_flow = models.CharField(db_column='EVT_FLOW', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_calculatedpriority = models.DecimalField(db_column='EVT_CALCULATEDPRIORITY', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_preservecalcpriority = models.CharField(db_column='EVT_PRESERVECALCPRIORITY', max_length=1, blank=True, null=True)  # Field name made lowercase.
    evt_supplier = models.CharField(db_column='EVT_SUPPLIER', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_supplier_org = models.CharField(db_column='EVT_SUPPLIER_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_casemanagement = models.CharField(db_column='EVT_CASEMANAGEMENT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_casemanagementtask = models.CharField(db_column='EVT_CASEMANAGEMENTTASK', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_origcasemanagement = models.CharField(db_column='EVT_ORIGCASEMANAGEMENT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_dupcasemanagement = models.CharField(db_column='EVT_DUPCASEMANAGEMENT', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_contactrecord = models.CharField(db_column='EVT_CONTACTRECORD', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_contactrecord_org = models.CharField(db_column='EVT_CONTACTRECORD_ORG', max_length=15, blank=True, null=True)  # Field name made lowercase.
    evt_workspace = models.CharField(db_column='EVT_WORKSPACE', max_length=30, blank=True, null=True)  # Field name made lowercase.
    evt_latitude = models.DecimalField(db_column='EVT_LATITUDE', max_digits=8, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_longitude = models.DecimalField(db_column='EVT_LONGITUDE', max_digits=9, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_from_reference = models.DecimalField(db_column='EVT_FROM_REFERENCE', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_from_offset = models.DecimalField(db_column='EVT_FROM_OFFSET', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_from_offset_percentage = models.DecimalField(db_column='EVT_FROM_OFFSET_PERCENTAGE', max_digits=5, decimal_places=2, blank=True, null=True)  # Field name made lowercase.
    evt_from_offset_direction = models.CharField(db_column='EVT_FROM_OFFSET_DIRECTION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_from_xcoordinate = models.DecimalField(db_column='EVT_FROM_XCOORDINATE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_from_ycoordinate = models.DecimalField(db_column='EVT_FROM_YCOORDINATE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_from_latitude = models.DecimalField(db_column='EVT_FROM_LATITUDE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_from_longitude = models.DecimalField(db_column='EVT_FROM_LONGITUDE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_from_relationship_type = models.CharField(db_column='EVT_FROM_RELATIONSHIP_TYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_from_horizontal_offset = models.DecimalField(db_column='EVT_FROM_HORIZONTAL_OFFSET', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_from_horizontal_offsetuom = models.CharField(db_column='EVT_FROM_HORIZONTAL_OFFSETUOM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    evt_from_horizontal_offsettype = models.CharField(db_column='EVT_FROM_HORIZONTAL_OFFSETTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_from_vertical_offset = models.DecimalField(db_column='EVT_FROM_VERTICAL_OFFSET', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_from_vertical_offsetuom = models.CharField(db_column='EVT_FROM_VERTICAL_OFFSETUOM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    evt_from_vertical_offsettype = models.CharField(db_column='EVT_FROM_VERTICAL_OFFSETTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_to_reference = models.DecimalField(db_column='EVT_TO_REFERENCE', max_digits=38, decimal_places=0, blank=True, null=True)  # Field name made lowercase.
    evt_to_offset = models.DecimalField(db_column='EVT_TO_OFFSET', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_to_offset_direction = models.CharField(db_column='EVT_TO_OFFSET_DIRECTION', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_to_offset_percentage = models.DecimalField(db_column='EVT_TO_OFFSET_PERCENTAGE', max_digits=5, decimal_places=2, blank=True, null=True)  # Field name made lowercase.
    evt_to_xcoordinate = models.DecimalField(db_column='EVT_TO_XCOORDINATE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_to_ycoordinate = models.DecimalField(db_column='EVT_TO_YCOORDINATE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_to_latitude = models.DecimalField(db_column='EVT_TO_LATITUDE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_to_longitude = models.DecimalField(db_column='EVT_TO_LONGITUDE', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_to_relationship_type = models.CharField(db_column='EVT_TO_RELATIONSHIP_TYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_to_horizontal_offset = models.DecimalField(db_column='EVT_TO_HORIZONTAL_OFFSET', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_to_horizontal_offsetuom = models.CharField(db_column='EVT_TO_HORIZONTAL_OFFSETUOM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    evt_to_horizontal_offsettype = models.CharField(db_column='EVT_TO_HORIZONTAL_OFFSETTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_to_vertical_offset = models.DecimalField(db_column='EVT_TO_VERTICAL_OFFSET', max_digits=24, decimal_places=6, blank=True, null=True)  # Field name made lowercase.
    evt_to_vertical_offsetuom = models.CharField(db_column='EVT_TO_VERTICAL_OFFSETUOM', max_length=10, blank=True, null=True)  # Field name made lowercase.
    evt_to_vertical_offsettype = models.CharField(db_column='EVT_TO_VERTICAL_OFFSETTYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.
    evt_relationship_type = models.CharField(db_column='EVT_RELATIONSHIP_TYPE', max_length=8, blank=True, null=True)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'R5EVENTS'
