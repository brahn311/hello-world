# Properties to Shrink or Expand Items

### Use the flex-shrink Property to Shrink Items
Recall that `flex-shrink` controls the size of the items when the container shrinks.

The `flex-shrink` property when it's used, it allows an item to shrink if the flex container is too small. Items shrink when the width of the parent container is smaller than the combined widths of all the flex items within it.

The `flex-shrink` property takes _numbers_ as values. The higher the number, the more it will shrink compared to the other items in the container. For example, if one item has a `flex-shrink: 1;` and the other has a `flex-shrink: 3;`, the one with the value of 3 will shrink three times as much as the other.

The opposite of `flex-shrink` is the `flex-grow` property.

Here's a example:
```
<style>
  #box-container {
    display: flex;
    height: 500px;
  }
  #box-1 {
    background-color: dodgerblue;
    width: 100%;
    height: 200px;
	flex-shrink: 1;
  }

  #box-2 {
    background-color: orangered;
    width: 100%;
    height: 200px;
	flex-shrink: 2;
  }
</style>

<div id="box-container">
  <div id="box-1"></div>
  <div id="box-2"></div>
</div>
```

### Use the flex-grow Property to Expand Items
The `flex-grow` property controls the **size** of items when the **parent container expands**.

Using a similar example from the last one, if one item has a `flex-grow` value of 1 and the other has a `flex-grow` value of 3, the one with the value of 3 will grow three times as much as the other.

Here's an example:
```
<style>
  #box-container {
    display: flex;
    height: 500px;
  }

  #box-1 {
    background-color: dodgerblue;
    height: 200px;
	flex-grow: 1;
  }

  #box-2 {
    background-color: orangered;
    height: 200px;
	flex-grow: 2;
  }
</style>

<div id="box-container">
  <div id="box-1"></div>
  <div id="box-2"></div>
</div>
```

### Use the flex-basis Property to Set the Initial Size of an Item
The `flex-basis` property specifies the **initial size** of the item before *CSS* makes adjustments with `flex-shrink` or `flex-grow`.
The units used by the `flex-basis` property are the same as other size properties (px, em, %, etc.). The value auto sizes items based on the content.

Here's an example:
```
<style>
  #box-container {
    display: flex;
    height: 500px;
  }

  #box-1 {
    background-color: dodgerblue;
    height: 200px;
	flex-basis: 10em;
  }

  #box-2 {
    background-color: orangered;
    height: 200px;
	flex-basis: 20em;
  }
</style>

<div id="box-container">
  <div id="box-1"></div>
  <div id="box-2"></div>
</div>
```

### Use the flex Shorthand Property
There is a shortcut available to set several flex properties at once.

The `flex-grow`, `flex-shrink`, and `flex-basis` properties can all be set together by using the `flex` property.

For example, `flex: 1 0 10px;` will set the item to `flex-grow: 1;`, `flex-shrink: 0;`, and `flex-basis: 10px;`.

The default property settings are `flex: 0 1 auto;`.

```
<style>
  #box-container {
    display: flex;
    height: 500px;
  }
  #box-1 {
    background-color: dodgerblue;
	flex: 2 2 150px;
    height: 200px;
  }

  #box-2 {
    background-color: orangered;
	flex: 1 1 150px;
    height: 200px;
  }
</style>

<div id="box-container">
  <div id="box-1"></div>
  <div id="box-2"></div>
</div>
```
