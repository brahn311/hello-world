// alert("Todo ok!!");

var d = document.getElementById("cuadro");
var ancho = d.height;
var alto = d.width;
var lienzo = d.getContext("2d");
var avance =10;

var x=0;
var y=0;
var color= "black";

dibujar(0, ancho);
dibujar(alto, ancho);
dibujar(alto, 0);
dibujar(0, 0);

function dibujar(dx,dy){
	lienzo.beginPath();
	lienzo.strokeStyle = color;
	lienzo.moveTo(x, y);
	lienzo.lineTo(dx, dy);
	lienzo.stroke();
	lienzo.closePath();
	x=dx;
	y=dy;
}

color= "blue";
x=ancho/2;
y=alto/2;

var teclas = {
	LEFT: 37,
	UP: 38,
	RIGHT: 39,
	DOWN: 40
};
document.addEventListener("keydown",controlTeclado);

function controlTeclado(evento)
{
	// console.log(evento.keyCode);
	switch(evento.keyCode) {
		case teclas.RIGHT:
			//console.log("RIGHT");
			dx=x+avance;
			dibujar(dx, y);
			break;
		case teclas.UP:
			//console.log("UP");
			dy=y-avance;
			dibujar(x, dy);
			break;
		case teclas.LEFT:
			//console.log("LEFT");
			dx=x-avance;
			dibujar(dx, y);
			break;
		case teclas.DOWN:
			//console.log("DOWN");
			dy=y+avance;
			dibujar(x, dy);
			break;
		default:
			console.log("otra tecla");
			break;
	}
}
