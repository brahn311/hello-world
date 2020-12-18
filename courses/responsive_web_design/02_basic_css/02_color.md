# Change the Color of Text

We can do this by adding or changing the `style` attribute of your `h2` element.

The property that is responsible for the color of an element's text is the `color` style property.
```
<h2 style="color: red;">CatPhotoApp</h2>
```
When you entered `style="color: red;"` you were styling that individual `h2` element with _inline CSS_,
which stands for CSS, but there's a better way to apply CSS.

At the top of your code, create a style block like this:
```
<style>
  h2 {
    color: red;
  }
</style>
```
> **Note!** that it's important to have both opening and closing curly braces `{` and `}` around each element's style rule(s). You also need to make sure that your element's style definition is *_between_* the opening and closing style tags. Finally, be sure to add a semicolon `;` to the end of each of your element's style rules.
