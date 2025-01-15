const nombre = document.querySelector('#nombre');
const contrasena = document.querySelector('#contrasena');
const btn = document.querySelector('#btn');
const mostrar = document.querySelector('#mostrar');
btn.addEventListener('click', () => {
	mostrar.innerHTML = '¡Bienvenid@, ' + nombre.value + ' su contraseña es ' + contrasena.value
});