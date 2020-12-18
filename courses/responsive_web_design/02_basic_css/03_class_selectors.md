# Use a CSS Class to Style an Element
Classes are reusable styles that can be added to HTML elements.
```
<style>
  .blue-text {
    color: blue;
  }
</style>
```
We've created a CSS class called blue-text within the `<style>` tag.

You can apply a class to an HTML element like this:
```
<h2 class="blue-text">Tittle</h2>
```
> **Note!** In your CSS style element, class names start with a period `.` and in your HTML elements' class attribute, the class name *_does not include the period_*.

Remember that you can apply multiple classes to an element using its class attribute, by separating each class name with a space. For example:
```
<img class="class1 class2">
```
> **Note!** It doesn't matter which order the classes are listed in the HTML element.

However, the order of the class declarations in the `<style>` section is what is important. The second declaration will always take precedence over the first. Because `.second-class` is declared second, it overrides the attributes of `.first-class`.
