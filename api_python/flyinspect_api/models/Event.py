from django.db import models


class Event(models.Model):
    fld_code = models.CharField(db_column='code', max_length=30)
    fld_description = models.CharField(db_column='description', max_length=80, blank=True, null=True)
    fld_type = models.CharField(db_column='type', max_length=4, blank=True, null=True)
    fld_rtype = models.CharField(db_column='rtype', max_length=4, blank=True, null=True)
    fld_date = models.DateField(db_column='date', blank=True, null=True)
    fld_status = models.CharField(db_column='status', max_length=4, blank=True, null=True)
    fld_rstatus = models.CharField(db_column='rstatus', max_length=4, blank=True, null=True)

    class Meta:
        db_table = 'tbl_event'
