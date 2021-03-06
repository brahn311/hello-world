# Inherit CSS Variables
When you create a variable, it is available for you to use inside the selector in which you create it. It also is available in any of that selector's descendants. This happens because CSS variables are inherited, just like ordinary properties.

To make use of inheritance, CSS variables are often defined in the `:root` element.

`:root` is a **pseudo-class selector** that matches the root element of the document, usually the html element. By creating your variables in `:root`, they will be **available globally** and can be accessed from any other selector in the style sheet. They will set the value of that variable for the whole page.
```
:root {
  --red-color: red;
}
```
### Change a variable for a specific area
You can then over-write these `:root` variables by setting them again within a specific element or an CSS class.
```
:root {
  --red-color: red;
}
.wine-red {
  --red-color: #5c0808;
}
```
