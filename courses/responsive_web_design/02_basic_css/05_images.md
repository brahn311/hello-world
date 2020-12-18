# Properties for img elements

### Size Your Images
CSS has a property called width that controls an element's width.
Just like with fonts, we'll use `px` (pixels) to specify the image's width.

If we wanted to create a CSS class called larger-image that gave HTML elements a width of 500 pixels, we'd use:
```
.larger-image {
  width: 500px;
}
```

### Make Circular Images with a border-radius
In addition to pixels, you can also specify the `border-radius` using a percentage.

Observations:
- You can use `50%` to make circular images.
- Con menos del `50%` obtienes imagenes con bordes redondeados.
- Dependiendo del angulo del borde y del tamaño de la imagen, el redondeo puede ser aplicado solo al borde y no afectara la imagen. Por ejemplo:
```
img {
  border-color: green;
  border-width: 40px;
  border-style: solid;
  border-radius: 20%;
}
```
- No se obtienen los mismos resultados usando `px` o `%`
