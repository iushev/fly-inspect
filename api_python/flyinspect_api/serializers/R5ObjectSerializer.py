from rest_framework import serializers
from flyinspect_api.models.R5Objects import R5Objects


class R5ObjectsSerializer(serializers.ModelSerializer):
    class Meta:
        model = R5Objects
        fields = '__all__'
