# Divide the Grid Into an Area Template
You can group cells of your grid together into an area and give the area a custom name. Do this by using `grid-template-areas` on the container like this:
```
grid-template-areas:
  "header header header"
  "advert content content"
  "footer footer footer";
```

The code above merges the top three cells together into an area named header, the bottom three cells into a footer area, and it makes two areas in the middle row; advert and content.

> **Note!** Every word in the code represents a cell and every pair of quotation marks represent a row. In addition to custom labels, you can use a period (.) to designate an empty cell in the grid.

### Place Items in Grid Areas Using the grid-area Property
After creating an area template for your grid container, you can place an item in your custom area by referencing the name you gave it. To do this, you use the `grid-area` property on an item like this:
```
.item1 {
  grid-area: header;
}
```

This lets the grid know that you want the item1 class to go in the area named header. In this case, the item will use the entire top row because that whole row is named as the header area.

### Use grid-area Without Creating an Areas Template
The grid-area property can be used in another way. If your grid doesn't have an areas template to reference, you can create an area on the fly for an item to be placed like this:
```
item1 { grid-area: 1/1/2/4; }
```
This is using the line numbers you learned about earlier to define where the area for this item will be. The numbers in the example above represent these values:
```
grid-area: horizontal line to start at / vertical line to start at / horizontal line to end at / vertical line to end at;
```

So the item in the example will consume the rows between lines 1 and 2, and the columns between lines 1 and 4.

Here's an example:
```
<style>
  .item1{background:LightSkyBlue;}
  .item2{background:LightSalmon;}
  .item3{background:PaleTurquoise;}
  .item4{background:LightPink;}

  .item5 {
    background: PaleGreen;
    grid-area: 3/1/4/4;
  }

  .container {
    font-size: 40px;
    min-height: 300px;
    width: 100%;
    background: LightGray;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
    grid-gap: 10px;
  }
</style>

<div class="container">
  <div class="item1">1</div>
  <div class="item2">2</div>
  <div class="item3">3</div>
  <div class="item4">4</div>
  <div class="item5">5</div>
</div>
```

Within the grid-area property, we place the element with item5 class between the third and fourth horizontal lines and between the first and fourth vertical lines.
