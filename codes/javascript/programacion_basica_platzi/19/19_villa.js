//alert("ok!");
var villa = document.getElementById("villaplatzi");
var papel = villa.getContext("2d");

var fondo = {
	url: "19/tile.png",
	cargaOk: false
}

var vaca = {
	url: "19/vaca.png",
	cargaOk: false,
	cantidad: aleatorio(1, 15)
}
var pollo = {
	url: "19/pollo.png",
	cargaOk: false,
	cantidad: aleatorio(5, 20)
}
var cerdo = {
	url: "19/cerdo.png",
	cargaOk: false,
	cantidad: aleatorio(3, 6)
}


fondo.imagen = new Image();
fondo.imagen.src = fondo.url;
fondo.imagen.addEventListener("load", cargarFondo);

vaca.imagen = new Image();
vaca.imagen.src = vaca.url;
vaca.imagen.addEventListener("load", cargarVacas);

pollo.imagen = new Image();
pollo.imagen.src = "19/pollo.png";
pollo.imagen.addEventListener("load", cargarPollos);

cerdo.imagen = new Image();
cerdo.imagen.src = "19/cerdo.png";
cerdo.imagen.addEventListener("load", cargarCerdos);

var cantidad = {
}

function cargarFondo()
{
	fondo.cargaOk = true;
	dibujar();
}
function cargarVacas()
{
	vaca.cargaOk = true;
	dibujar();
}
function cargarPollos()
{
	pollo.cargaOk = true;
	dibujar();
}
function cargarCerdos()
{
	cerdo.cargaOk = true;
	dibujar();
}

function dibujar(){
	if (fondo.cargaOk == true) 
	{
		papel.drawImage(fondo.imagen, 0, 0);
	}
	if (vaca.cargaOk == true) 
	{
		for (i = 0; i<vaca.cantidad;i++)
		{
			papel.drawImage(vaca.imagen, aleatorio(0, 420), aleatorio(0, 420));
		}
	}
	if (pollo.cargaOk == true) 
	{
		for (i = 0; i<pollo.cantidad;i++)
		{
			papel.drawImage(pollo.imagen, aleatorio(0, 420), aleatorio(0, 420));
		}
	}
	if (cerdo.cargaOk == true) 
	{
		for (i = 0; i<cerdo.cantidad;i++)
		{
			papel.drawImage(cerdo.imagen, aleatorio(0, 420), aleatorio(0, 420));
		}
	}
}

function aleatorio(min, max)
{
	var resultado;
	resultado = Math.floor(Math.random() * (max - min + 1)) + min;
	return resultado;
}