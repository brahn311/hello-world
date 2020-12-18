# Create a Graphic Using CSS
By manipulating different selectors and properties, you can make interesting shapes.

One of the easier ones to try is a crescent moon shape.
```
<style>
  .center {
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 200px;
    height: 200px;
    background-color: transparent;
    border-radius: 50%;
    box-shadow: 25px 10px 0px 0px blue;
  }

</style>
<div class="center"></div>
```
### Create a More Complex Shape Using CSS and HTML
First, you need to understand the `::before` and `::after` pseudo-elements. These **pseudo-elements** are used to add something before or after a selected element.

For the `::before` and `::after` pseudo-elements to function properly, they must have a defined `content` property. This property is usually used to add things like a _photo_ or _text_ to the selected element. When the `::before` and `::after` pseudo-elements are used to make shapes, the `content` property is still required, but it's set to an _empty string_.

In the following example, we'll create one using pure CSS:
```
<style>
  .heart {
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: pink;
    height: 50px;
    width: 50px;
    transform: rotate(-45deg);
  }
  .heart::after {
    background-color: pink;
    content: "";
    border-radius: 50%;
    position: absolute;
    width: 50px;
    height: 50px;
    top: 0px;
    left: 25px;
  }
  .heart::before {
    content: "";
    background-color: pink;
    border-radius: 50%;
    position: absolute;
    width: 50px;
    height: 50px;
    top: -25px;
    left: 0px;
  }
</style>
<div class="heart"></div>
```
