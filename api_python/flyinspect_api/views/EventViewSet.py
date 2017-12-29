from rest_framework import viewsets, filters, pagination
from rest_framework.response import Response
from rest_framework.decorators import detail_route, list_route
from flyinspect_api.models.Event import Event
from flyinspect_api.serializers.EventSerializer import EventSerializer


class EventViewSet(viewsets.ModelViewSet):
    serializer_class = EventSerializer
    queryset = Event.objects.all()
    # pagination_class = pagination.CursorPagination
    # filter_class = R5EventsFilter
