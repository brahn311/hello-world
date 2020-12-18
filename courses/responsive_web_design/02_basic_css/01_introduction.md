# Introduction to Basic CSS

###Cascading Style Sheets (CSS)
CSS tell the browser how to display the text and other content that you write in HTML.

CSS is case-sensitive.

CSS has been adopted by all major browsers and allows you to control:
- `Color`
- `Fonts`
- `Positioning`
- `Spacing`
- `Sizing`
- `Decorations`
- `Transitions`

There are three main ways to apply `CSS` styling:
- You can apply _inline styles_ **directly to HTML elements** with the _style_ attribute, but you were styling that individual element.
```
<h1 style="color: blue;">Tittle</h1>
```
- You can place `CSS rules` within **style tags** in an _HTML document_.
```
<style>
  h2 {
    color: red;
  }
</style>
```
Inside that style block, you can create a CSS selector for all elements. For example, if you wanted all `h2` elements to be red.
> **Note!** That it's important to have both opening and closing curly braces `{` and `}` around each element's style rule(s). You also need to make sure that your element's style definition is between the opening and closing *_style tags_*. Finally, be sure to add a semicolon `;` to the end of each of your element's style rules.

- You can write `CSS rules` in an **external style sheet**, then reference that file in the HTML document. Even though the first two options have their use cases, _most developers prefer_ **external style sheets** because they keep the styles separate from the HTML elements. This **improves the readability and reusability** of your code.
```
```
The idea behind `CSS` is that you can use a selector to target an HTML element in the DOM (Document Object Model) and then apply a variety of attributes to that element to change the way it is displayed on the page.
