# Transform Property

### Change the Size of an Element
To change the scale of an element, CSS has the `transform` property, along with its `scale()` function.
```
p {
  transform: scale(2);
}
```
The transform property has a variety of functions that let you `scale`, `move`, `rotate`, `skew`, etc., your elements.

When used with pseudo-classes such as `:hover` that specify a certain state of an element, the transform property can easily add interactivity to your elements.
```
div:hover {
  transform: scale(2.1);
}
```
> **Note!** Applying a transform to a div element will also affect any child elements contained in the div.

### Skew an Element
The transform property is skewX(), which skews the selected element along its X (horizontal) axis by a given degree.
```
p {
  transform: skewX(-32deg);
}
```
It is no surprise that the skewY() property skews an element along the Y (vertical) axis.
```
p {
  transform: skewY(-10deg);
}
```

### Rotate an element
```
div {
	tramsform: rorate(-45deg);
}
```
