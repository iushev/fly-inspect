from rest_framework import serializers
from flyinspect_api.models.R5Events import R5Events


class R5EventsSerializer(serializers.ModelSerializer):
    class Meta:
        model = R5Events
        fields = '__all__'
