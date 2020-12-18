# Attribute Selectors to Style Elements
You have been adding `id` or `class` attributes to elements that you wish to specifically style. These are known as ID and class selectors.

There are other CSS Selectors you can use to select custom groups of elements to style.

You will use the `[attribute=value]` attribute selector to style the elements. This selector matches and styles elements with a specific attribute value. For example, the below code changes the margins of all elements with the attribute type and a corresponding value of radio:

```
[type='radio'] {
  margin: 20px 0px 20px 0px;
}
```
