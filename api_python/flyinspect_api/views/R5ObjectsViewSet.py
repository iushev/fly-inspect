from rest_framework import viewsets, filters
from rest_framework.response import Response
from rest_framework.decorators import detail_route, list_route
from flyinspect_api.models.R5Objects import R5Objects
from flyinspect_api.serializers.R5ObjectSerializer import R5ObjectsSerializer


# class R5ObjectsFilter(filters.FilterSet):
#     class Meta:
#         model = R5Objects
#         fields = ('name', 'description', 'key_name')


class R5ObjectsViewSet(viewsets.ModelViewSet):
    serializer_class = R5ObjectsSerializer
    # queryset = R5Objects.objects.all()
    pagination_class = None
    # filter_class = R5ObjectsFilter


    def get_queryset(self):
        return R5Objects.objects.all()[:20]
