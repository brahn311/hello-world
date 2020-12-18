Style the HTML Body Element
Now let's start fresh and talk about CSS inheritance.

Every HTML page has a body element, and that its body element can also be styled with CSS.
```
body {
    background-color: black;
}
```
Remember, you can style your body element just like any other HTML element, and all your other elements will inherit your body element's styles.

### Prioritize One Style Over Another
Sometimes your HTML elements will receive multiple styles that conflict with one another.

Remember that the order of the class declarations in the `<style>` section is what is important. The second declaration will always take precedence over the first. Because `.second-class` is declared second, it overrides the attributes of `.first-class`.

Browsers read CSS from top to bottom in order of their declaration. That means that, in the event of a conflict, the browser will use whichever CSS declaration came last.

But there are other ways that you can override CSS. Do you remember id attributes?

#### Override Class Declarations by Styling ID Attributes
It doesn't matter whether you declare this CSS above or below pink-text class, since `id` attribute will always take precedence.

#### Override Class Declarations ID selectors with Inline Styles
There are other ways that you can override CSS. Do you remember inline styles?

That inline styles will override all the CSS declarations in your style element.

#### Override All Other Styles by using Important
This is the most powerful method of all. the last way to override CSS.

In many situations, you will use CSS libraries. These may accidentally override your own CSS. So when you absolutely need to be sure that an element has specific CSS, you can use `!important`.


Remember that maybe a class was overridden by subsequent class declarations, id declarations, and inline styles.

Let's add the keyword `!important` to your rule element's declaration to make 100% sure that your element will be as you need it.

An example of how to do this is:
```
.element-class {
  color: red !important;
}
```
