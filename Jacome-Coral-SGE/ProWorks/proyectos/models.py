from django.db import models

class Empleado(models.Model):
	nombre = models.CharField(max_length=20)
	email = models.EmailField(max_length=255)

	def __str__(self):
		return f"Nombre: {self.nombre}, email: {self.email}"
	

class Proyecto(models.Model):
	titulo = models.CharField(max_length=50, unique=True)
	descripcion = models.TextField(blank=True, null=True)
	fecha_inicio = models.DateField()
	fecha_fin = models.DateField(blank=True, null=True)
	completado = models.BooleanField(default=False)
	empleado = models.ForeignKey(Empleado, on_delete=models.CASCADE, null=True)

	def __str__(self):
		return f"Titulo: {self.titulo}, descripcion {self.descripcion}, fecha inicio {self.fecha_inicio}, fecha fin{self.fecha_fin}, completado {self.completado} ,empleado {self.empleado}"
	