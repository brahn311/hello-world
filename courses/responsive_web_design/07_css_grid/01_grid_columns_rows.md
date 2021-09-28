# Create Your First CSS Grid
Turn any _HTML_ element into a grid container by setting its `display` property to `grid`. This gives you the ability to use all the other properties associated with _CSS Grid_.

> **Note!** In _CSS Grid_, the parent element is referred to as the container and its children are called items.

### Add Columns with grid-template-columns
Simply creating a grid element doesn't get you very far. You need to define the structure of the grid as well. To add some columns to the grid, use the `grid-template-columns` property on a grid container as demonstrated below:

```
.container {
  display: grid;
  grid-template-columns: 50px 50px;
}
```

This will give your grid two columns that are each 50px wide. The number of parameters given to the `grid-template-columns` property indicates the number of columns in the grid, and the value of each parameter indicates the width of each column.

### Add Rows with grid-template-rows
The grid in the last example will set the number of rows automatically. To adjust the rows manually, use the `grid-template-rows` property in the same way you used `grid-template-columns`.

```
<style>
  .d1{background:LightSkyBlue;}
  .d2{background:LightSalmon;}
  .d3{background:PaleTurquoise;}
  .d4{background:LightPink;}
  .d5{background:PaleGreen;}

  .container {
    font-size: 40px;
    width: 100%;
    background: LightGray;
    display: grid;
    grid-template-columns: 100px 100px 100px;
    grid-template-rows: 50px 50px;
  }
</style>

<div class="container">
  <div class="d1">1</div>
  <div class="d2">2</div>
  <div class="d3">3</div>
  <div class="d4">4</div>
  <div class="d5">5</div>
</div>
```

### Use CSS Grid units to Change the Size of Columns and Rows
You can use absolute and relative units like px and em in CSS Grid to define the size of rows and columns. You can use these as well:
- `fr`: sets the column or row to a fraction of the available space,
- `auto`: sets the column or row to the width or height of its content automatically,
- `%:` adjusts the column or row to the percent width of its container.

Here's an example:
```
grid-template-columns: auto 50px 10% 2fr 1fr;
```

This snippet creates five columns. The first column is as wide as its content, the second column is 50px, the third column is 10% of its container, and for the last two columns; the remaining space is divided into three sections, two are allocated for the fourth column, and one for the fifth.

### Create a Gap between columns and rows
So far in the grids you have created, the columns have all been tight up against each other. Sometimes you want a gap in between the columns.

To add a gap between the columns, use the `grid-column-gap` property. And you can add a gap in between the rows of a grid using `grid-row-gap` in the same way that you added a gap in between columns in the previous challenge.
```
grid-column-gap: 10px;
grid-row-gap: 5px;
```

This creates 10px of empty space between all of our columns and a gap for the rows that is 5px tall.

### Add Gaps Faster with grid-gap
`grid-gap` is a shorthand property for `grid-row-gap` and `grid-column-gap` from the previous two challenges that's more convenient to use. If `grid-gap` has one value, it will create a gap between all rows and columns. However, if there are two values, it will use the first one to set the gap between the rows and the second value for the columns.
