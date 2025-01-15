from django.urls import path
from .views import index, index_proyecto, crear_proyecto, editar_proyecto, eliminar_proyecto, descompletar_proyecto, completar_proyecto

urlpatterns = [
	path('', index, name='index'),
	#Proyecto
	path('proyectos/', index_proyecto, name='index_proyecto'),
	path('crear/', crear_proyecto, name='crear_proyecto'),
	path('editar/<int:id>/', editar_proyecto, name='editar_proyecto'),
	path('eliminar/<int:id>/', eliminar_proyecto, name='eliminar_proyecto'),
	path('proyecto/<int:id>/descompletar/', descompletar_proyecto, name='descompletar_proyecto'),
	path('proyecto/<int:id>/completar/', completar_proyecto, name='completar_proyecto'),

]