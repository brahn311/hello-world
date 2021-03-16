# Make Elements Only Visible to a Screen Reader by Using Custom CSS
Have you noticed that all of the applied accessibility challenges so far haven't used any CSS? This shows the importance of using a logical document outline and semantically meaningful tags around your content before introducing the visual design aspect.

However, CSS's magic can also improve accessibility on your page when you want to visually hide content meant only for screen readers. This happens when information is in a visual format (like a chart), but screen reader users need an alternative presentation (like a table) to access the data. CSS is used to position the screen reader-only elements off the visual area of the browser window.

Here's an example of the CSS rules that accomplish this:
```
.sr-only {
  position: absolute;
  left: -10000px;
  width: 1px;
  height: 1px;
  top: auto;
  overflow: hidden;
}
```

> **Note!** The following CSS approaches will NOT do the same thing:
 - `display: none;` or `visibility: hidden;` hides content for everyone, including screen reader users
 - _Zero_ values for pixel sizes, such as `width: 0px;` `height: 0px;` removes that element from the flow of your document, meaning screen readers will ignore it
