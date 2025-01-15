const nombre = document.querySelector('#nombre');
const marca = document.querySelector('#marca');
const btn = document.querySelector('#btn');
const mostrar = document.querySelector('#mostrar');

class Vehiculo {
	constructor(nombre, marca) {
		this.nombre = nombre;
		this.marca = marca;
	}

	mostrarVehiculo() {
		return `Nombre del coche : [ ${this.nombre} ], Marca : [ ${this.marca} ]`;
	}
}

btn.addEventListener('click', () => {
	var newV = new Vehiculo(nombre.value, marca.value)
	mostrar.innerHTML = newV.mostrarVehiculo();
});