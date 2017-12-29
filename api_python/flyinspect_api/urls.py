"""
Fly inspect API URLs
"""
from django.conf.urls import url, include
from rest_framework import routers
import flyinspect_api.views

router = routers.DefaultRouter()
router.register('r5events', flyinspect_api.views.R5EventsViewSet)
router.register('r5objects', flyinspect_api.views.R5ObjectsViewSet)
router.register('event', flyinspect_api.views.EventViewSet)

urlpatterns = [
    url(r'^auth/', include('rest_framework.urls', namespace='rest_framework')),
    url(r'', include(router.urls)),
]
