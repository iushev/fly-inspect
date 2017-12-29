
"""
"""
from rest_framework import viewsets, filters, pagination
from rest_framework.response import Response
from rest_framework.decorators import detail_route, list_route
from flyinspect_api.models.R5Events import R5Events
from flyinspect_api.serializers.R5EventSerializer import R5EventsSerializer


# class R5EventsFilter(filters.FilterSet):
#     class Meta:
#         model = R5Events
#         fields = ('name', 'description', 'key_name')


class R5EventsViewSet(viewsets.ModelViewSet):
    serializer_class = R5EventsSerializer
    queryset = R5Events.objects.all()
    pagination_class = pagination.CursorPagination
    # pagination_class = pagination.LimitOffsetPagination

    # filter_class = R5EventsFilter