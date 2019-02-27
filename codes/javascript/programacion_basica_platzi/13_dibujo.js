//alert("Cargando script");

var d = document.getElementById("dibujito");
var lienzo = d.getContext("2d");

// iniciar el trazo
lienzo.beginPath(); 

// seleccionar el color
lienzo.strokeStyle = "red";

// punto de inicio del trazo
lienzo.moveTo(50, 100);

// trazar -linea- hasta el punto
lienzo.lineTo(190, 250);

// levantar el lapiz
lienzo.stroke();

// finalizar el trazo
lienzo.closePath();

// linea borde del lienzo. test de abrahan
lienzo.beginPath();
lienzo.strokeStyle = "black";
lienzo.moveTo(0, 0);
lienzo.lineTo(0, 300);
lienzo.lineTo(300, 300);
lienzo.lineTo(300, 0);
lienzo.lineTo(0, 0);
lienzo.stroke();
lienzo.closePath();