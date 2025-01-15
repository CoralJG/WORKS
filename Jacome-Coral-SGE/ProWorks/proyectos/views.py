from django.shortcuts import render, redirect
from .models import Proyecto, Empleado
from .forms import ProyectoForm

def index(request):
    return render(request, 'index.html')

#Proyectos
def index_proyecto(request):
    proyectos = Proyecto.objects.all()
    #Empleados asignados
    empleados = Empleado.objects.all()
    empleado_id = request.GET.get('empleado', None)
    if empleado_id:
        proyectos = proyectos.filter(empleado_id=empleado_id)
    #Filtrado de completar
    filtro = request.GET.get('filtro', None)
    if filtro == 'completados':
        proyectos = proyectos.filter(completado=True)
    elif filtro == 'incompletos':
        proyectos = proyectos.filter(completado=False)

    return render(request, 'proyectos/index.html', {'proyectos': proyectos, 'empleados' : empleados})

# Crear proyecto
def crear_proyecto(request):
    if request.method == 'POST':
        form = ProyectoForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect(index_proyecto)
    else:
        form = ProyectoForm()
    return render(request, 'proyectos/crear.html', {'form': form})

# Editar proyecto
def editar_proyecto(request, id):
    proyecto = Proyecto.objects.get(id=id)
    if request.method == 'POST' or request.method == 'PUT':
        form = ProyectoForm(request.POST, instance=proyecto)
        if form.is_valid():
            form.save()
            return redirect(index_proyecto)
    else:
        form = ProyectoForm(instance=proyecto)
    return render(request, 'proyectos/editar.html', {'form': form, 'proyecto' : proyecto})

# Eliminar proyecto
def eliminar_proyecto(request, id):
     if request.method == 'POST' or request.method == 'DELETE':
        proyecto = Proyecto.objects.get(id=id)
        proyecto.delete()
        return redirect(index_proyecto)

# Descompletar proyecto
def descompletar_proyecto(request,id):
    proyecto = Proyecto.objects.get(id=id)
    proyecto.completado = False
    proyecto.save()
    return redirect('index_proyecto')

# Completar proyecto
def completar_proyecto(request,id):
    proyecto = Proyecto.objects.get(id=id)
    proyecto.completado = True
    proyecto.save()
    return redirect('index_proyecto')

