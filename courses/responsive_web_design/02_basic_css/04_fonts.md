# Change the Font of an Element

### Font size
Font size is controlled by the font-size CSS property, like this:
```
h1 {
  font-size: 30px;
}
```
The `font-size` property is not limited to headings, it can be applied to any element containing text.

### Font Family
You can set which font an element should use, by using the font-family property.

For example, if you wanted to set your h2 element's font to sans-serif, you would use the following CSS:
```
h2 {
  font-family: sans-serif;
}
```

### Import a Google Font
In addition to specifying common fonts that are found on most operating systems, we can also specify non-standard, custom web fonts for use on our website. There are many sources for web fonts on the Internet. For this example we will focus on the Google Fonts library.

[Google Fonts](www.fonts.google.com) is a free library of web fonts that you can use in your CSS by referencing the font's URL.

#### How to import and apply a Google font
To import a Google Font, you can copy the font's URL from the Google Fonts library and then paste it in your HTML.

For this example, we'll import the Lobster font:
- Copy the following code snippet and paste it into the top of your code editor (before the opening style element):
```
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
```
- Now you can use the Lobster font in your CSS by using Lobster as the FAMILY_NAME as in the following example:
```
font-family: FAMILY_NAME, GENERIC_NAME;
```
The GENERIC_NAME is optional, and is a fallback font in case the other specified font is not available.

Family names are _case-sensitive_ and need to be wrapped in quotes `""` if there is a space in the name. For example, you need quotes to use the `"Open Sans"` font, but not to use the `Lobster` font.

#### Generic font family
When one font isn't available, you can tell the browser to "degrade" to another font.

Generic font family names are not case-sensitive. Also, they do not need quotes because they are CSS keywords.

There are several default fonts that are available in all browsers. These generic font families include `monospace`, `serif` and `sans-serif`.

For example, if you wanted an element to use the _Helvetica_ font, but degrade to the _sans-serif_ font when _Helvetica_ isn't available, you will specify it as follows:
```
p {
  font-family: Helvetica, sans-serif;
}
```
More information here [MDN web docs](https://developer.mozilla.org/es/docs/Web/CSS/font-family)
