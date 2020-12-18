# Text style

### Using the text-align Property
Text is often a large part of web content. CSS has several options for how to align it with the `text-align` property.

- `text-align: justify;` causes all lines of text except the last line to meet the left and right edges of the line box.
- `text-align: center;` centers the text
- `text-align: right;` right-aligns the text
- `text-align: left;` left-aligns the text (the default).

### Use the strong Tag to Make Text Bold
To make text bold, you can use the `strong` tag. This is often used to draw attention to text and symbolize that it is important.

With the `strong` tag, the browser applies the CSS of `font-weight: bold;` to the element.

### Use the u Tag to Underline Text
To underline text, you can use the `u` tag. This is often used to signify that a section of text is important, or something to remember.

With the `u` tag, the browser applies the CSS of `text-decoration: underline;` to the element.

> **Note!** Try to avoid using the u tag when it could be confused for a link. Anchor tags also have a default underlined formatting.

### Use the em Tag to Italicize Text
To emphasize text, you can use the `em` tag. This displays text as italicized, as the browser applies the CSS of `font-style: italic;` to the element.

### Use the s Tag to Strikethrough Text
To strikethrough text, which is when a horizontal line cuts across the characters, you can use the `s` tag. It shows that a section of text is no longer valid. With the s tag, the browser applies the CSS of `text-decoration: line-through;` to the element.

### Adjust the background-color Property of Text
Instead of adjusting your overall background or the color of the text to make the foreground easily readable, you can add a background-color to the element holding the text you want to emphasize. We uses `rgba()`.

`rgba()` allows you to adjust the opacity. This means you don't have to completely block out the background.
- `r` = red.
- `g` = green.
- `b` = blue.
- `a` = alpha/level of opacity.

The alpha value can range from 0 to 1
- `1` is fully opaque or a solid color.
- `0` is fully transparent or clear.

```
h1 {
	background-color: rgba(45, 45, 45, 0.1);
}
```

### Use the s Tag to Strikethrough Text
To strikethrough text, which is when a horizontal line cuts across the characters, you can use the `s` tag. It shows that a section of text is no longer valid. With the s tag, the browser applies the CSS of `text-decoration: line-through;` to the element.

### Use the text-transform Property to Make Text Uppercase
The `text-transform` property in CSS is used to change the appearance of text. It's a convenient way to make sure text on a webpage appears consistently, without having to change the text content of the actual HTML elements.

|Value|	Result|
|-|-|
|lowercase|"transform me"|
|uppercase|"TRANSFORM ME"|
|capitalize|"Transform Me"|
|initial|Use the default value|
|inherit|Use the text-transform value from the parent element|
|none|Default: Use the original text|

### Set the font-weight for Multiple Heading Elements
The `font-weight` property sets how thick or thin characters are in a section of text.

Those numbers are using has the weight of the font:

|Lighter|Bolder|
|-|-|
|`100`|`600` or `bold`|
|`200`|`700`|
|`300`|`800`|
|`400` or `normal`|`900`|
|`500`|

Other values are this:
- Valores relativo al padre: `lighter` `bolder`
- Valores globales `inherit` `initial` `unset`

### Set the line-height of Paragraphs
CSS offers the `line-height` property to change the height of each line in a block of text. As the name suggests, it changes the amount of vertical space that each line of text gets.

### Adjust the Hover State of an Anchor Tag
Now we will touch on the usage of pseudo-classes. A pseudo-class is a keyword that can be added to selectors, in order to select a specific state of the element.

The styling of an `a` tag (anchor) can be changed for its `hover` state using the `:hover` pseudo-class selector.
```
a:hover {
  color: red;
}
```

More information here [MDN web docs](https://developer.mozilla.org/es/docs/Web/CSS/font-weight)
