# Position Property

### Change an Element's Relative Position
CSS treats each HTML element as its own box, which is usually referred to as the CSS Box Model.
- _Block-level_ items automatically start on a new line (think headings, paragraphs, and divs)
- _Inline_ items sit within surrounding content (like images or spans).
The default layout of elements in this way is called the normal flow of a document, but CSS offers the `position` property to override it.

When the `position` of an element is set to `relative`, it allows you to specify how CSS should move it _relative_ to its current position in the normal flow of the page. It pairs with the CSS offset properties of `left` or `right`, and `top` or `bottom`. These say how many _pixels_, _percentages_, or _ems_ to **move the item away from** where it is normally positioned.

The following example moves the paragraph 10 pixels away from the bottom:
```
p {
  position: relative;
  bottom: 10px;
}
```
Changing an element's `position` to `relative` does not remove it from the normal flow - other elements around it still behave as if that item were in its default position.

> **Note!** Positioning gives you a lot of flexibility and power over the visual layout of a page. It's good to remember that no matter the position of elements, the underlying HTML markup should be organized and make sense when read from top to bottom. This is how users with visual impairments (who rely on assistive devices like screen readers) access your content.

### Lock an Element to its Parent with Absolute Positioning
The CSS `position` property `absolute`, locks the element in place relative to its parent container. This removes the element from the normal flow of the document, so surrounding items ignore it. The CSS offset properties (`top` or `bottom` and `left` or `right`) are used to adjust the position.

One nuance with absolute positioning is that it will be locked relative to its closest positioned ancestor. If you forget to add a position rule to the parent item, (this is typically done using position: relative;), the browser will keep looking up the chain and ultimately default to the body tag.

### Lock an Element to the Browser Window with Fixed Positioning
The `position: fixed;` is a layout scheme that CSS offer, which is a type of absolute positioning that _locks an element relative to the browser window_. Similar to absolute positioning, it's used with the CSS offset properties and also removes the element from the normal flow of the document. Other items no longer "realize" where it is positioned, which may require some layout adjustments elsewhere.

One key difference between the fixed and absolute positions is that an element with a fixed position won't move when the user scrolls.

The CSS offset properties (`top` or `bottom` and `left` or `right`) are used to adjust the position.
```
#navbar {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  background-color: #767676;
}
```

### Push Elements Left or Right with the float Property
This positioning tool does not actually use position, but sets the `float` property of an element. Floating elements are removed from the normal flow of a document and pushed to either the `left` or `right` of their containing parent element. It's commonly used with the width property to specify how much horizontal space the floated element requires.
```
#left {
  float: left;
  width: 50%;
}
#right {
  float: right;
  width: 40%;
}
```
> **Nota!** revisar la etiquetas `section` y `aside`

### Change the Position of Overlapping Elements with the z-index Property
When elements are positioned to overlap (i.e. using `position: absolute | relative | fixed | sticky)`, the element coming later in the HTML markup will, by default, appear on the top of the other elements. However, the `z-index` property can specify the order of how elements are stacked on top of one another. It must be an **integer**,  _not a decimal_, and higher values for the z-index property of an element move it higher in the stack than those with lower values.

> **Nota!** los números mayores son ubicados primero que los números menores.

Center an Element Horizontally Using the `margin` Property
Another positioning technique is to center a block element horizontally. One way to do this is to set its margin to a value of `auto`.

This method works for images, too. Images are inline elements by default, but can be changed to block elements when you set the display property to block.
