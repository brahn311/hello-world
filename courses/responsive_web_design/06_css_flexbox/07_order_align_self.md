# Order and align-self properties

### Use the order Property to Rearrange Items
The `order` property is used to tell _CSS_ the order of how _flex_ items appear in the flex container. By default, items will appear in the same order they come in the source HTML. The property takes _numbers_ as values, and negative numbers can be used.

```
<style>
  #box-container {
    display: flex;
    height: 500px;
  }
  #box-1 {
    background-color: dodgerblue;
    order:2;
    height: 200px;
    width: 200px;
  }

  #box-2 {
    background-color: orangered;
    order:1;
    height: 200px;
    width: 200px;
  }
</style>

<div id="box-container">
  <div id="box-1"></div>
  <div id="box-2"></div>
</div>
```

### Use the align-self Property
The `align-self` property allows you to adjust each item's alignment individually, instead of setting them all at once. This is useful since other common adjustment techniques using the _CSS_ properties `float`, `clear`, and `vertical-align` do **not work on flex items**.
`align-self` accepts the same values as `align-items` and **will override any value set** by the `align-items` property (`flex-start`
`flex-end`, `center`, `stretch`, `baseline`).

```
<style>
  #box-container {
    display: flex;
    height: 500px;
  }
  #box-1 {
    background-color: dodgerblue;
	align-self: center;
    height: 200px;
    width: 200px;
  }

  #box-2 {
    background-color: orangered;
	align-self: flex-end;
    height: 200px;
    width: 200px;
  }
</style>

<div id="box-container">
  <div id="box-1"></div>
  <div id="box-2"></div>
</div>
```
