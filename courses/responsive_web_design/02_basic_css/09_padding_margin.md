# Elements space
You may have already noticed this, but all HTML elements are essentially little rectangles.

Three important properties control the space that surrounds each HTML element:
- padding.
- border.
- margin.

### Adjust the Padding of an Element
An element's `padding` **controls the amount of space between the element's content and its border**.

When you increase the padding, it will increase the distance (padding) between content and the border around it.
```
.div-padding {
  padding: 20px;
}
```

### Adjust the Margin of an Element
An element's `margin` **controls the amount of space between an element's border and surrounding elements**.

When you increase the margin, it will increase the distance between its border and surrounding elements, making it appear smaller.
```
.div-margin {
  margin: 20px;
}
```

### Padding

#### Add Different Padding to Each Side of an Element
Sometimes you will want to customize an element so that it has different amounts of padding on each of its sides.

CSS allows you to control the padding of all four individual sides of an element with the properties:
- `padding-top`
- `padding-right`
- `padding-bottom`
- `padding-left`

### Margins

#### Add a Negative Margin to an Element
An element's margin controls the amount of space between an element's border and surrounding elements.

If you set an element's margin to a negative value, the element will grow larger.
```
.div-margin {
  margin: -20px;
}
```

#### Add Different Margins to Each Side of an Element
Sometimes you will want to customize an element so that it has a different margin on each of its sides.

CSS allows you to control the margin of all four individual sides of an element with the properties:
- `margin-top`
- `margin-right`
- `margin-bottom`
- `margin-left`

#### Clockwise Notation
Use Clockwise Notation to Specify the Padding and Margin of an Element.

Instead of specifying an element's `padding-top`, `padding-right`, `padding-bottom`, and `padding-left` properties individually, you can specify them all in one line.

These four values work like a clock: `top`, `right`, `bottom`, `left`, and will produce the exact same result as using the side-specific padding instructions.
```
.div {
  padding: 10px 20px 10px 20px;
  margin: 10px 20px 10px 20px;
}
```
