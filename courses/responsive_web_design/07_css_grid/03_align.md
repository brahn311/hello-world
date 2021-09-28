# Align an Item

### Align an Item Horizontally using justify-self
In CSS Grid, the content of each item is located in a box which is referred to as a cell. You can align the content's position within its cell horizontally using the `justify-self` property on a grid item. By default, this property has a value of stretch, which will make the content fill the whole width of the cell.

This CSS Grid property accepts other values as well:
- `start`: aligns the content at the left of the cell,
- `center`: aligns the content in the center of the cell,
- `end`: aligns the content at the right of the cell.

#### Align All Items Horizontally using justify-items
Sometimes you want all the items in your CSS Grid to share the same alignment. You can use the previously learned properties and align them individually, or you can align them all at once horizontally by using `justify-items` on your grid container. This property can **accept all the same values** you learned about in the previous two challenges, the difference being that it will move all the items in our grid to the desired alignment

### Align an Item Vertically using align-self
Just as you can align an item horizontally, there's a way to align an item vertically as well. To do this, you use the `align-self` property on an item. This property accepts all of the same values as `justify-self` like `start`,  `center`, `end`.

#### Align All Items Vertically using align-items
Using the `align-items` property on a grid container will set the vertical alignment for all the items in our grid.
