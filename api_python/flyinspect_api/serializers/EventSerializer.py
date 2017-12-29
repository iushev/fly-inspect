from rest_framework import serializers
from flyinspect_api.models.Event import Event


class EventSerializer(serializers.ModelSerializer):
    class Meta:
        model = Event
        fields = '__all__'
