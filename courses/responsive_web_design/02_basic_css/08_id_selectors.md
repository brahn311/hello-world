# Use an id Attribute to Style an Element
One cool thing about `id` attributes is that, like classes, you can style them using CSS.

However, an id is **not reusable** and should **only be applied to one element**. An id also has a higher specificity (importance) than a class so if both are applied to the same element and have _conflicting_ styles, **the styles of the id will be applied**.

Inside your style element, you always reference classes by putting a period `.` in front of their names. You always reference ids by putting a `#` in front of their names.
```
#cat-photo-element {
  background-color: green;
}
```
