# Colors

### Complementary Colors
Color theory and its impact on design is a deep topic and only the basics are covered in the following challenges. On a website, color can draw attention to content, evoke emotions, or create visual harmony. Using different combinations of colors can really change the look of a website, and a lot of thought can go into picking a color palette that works with your content.

The color wheel is a useful tool to visualize how colors relate to each other - it's a circle where similar hues are neighbors and different hues are farther apart. When two colors are opposite each other on the wheel, they are called complementary colors. They have the characteristic that if they are combined, they "cancel" each other out and create a gray color. However, when placed side-by-side, these colors appear more vibrant and produce a strong visual contrast.

Some examples of complementary colors are:

|Color|Hex code|complement|Hex code|
|-|-|-|-|
|red|#FF0000|cyan|#00FFFF|
|green|#00FF00|magenta|#FF00FF|
|blue|#0000FF|yellow|#FFFF00|

Modern color theory uses the additive RGB model (like on a computer screen) and the subtractive CMY(K) model (like in printing).

There are many color picking tools available online that have an option to find the complement of a color.

> **Note!** Using color can be a powerful way to add visual interest to a page. However, color alone should not be used as the only way to convey important information because users with visual impairments may not understand that content. This issue will be covered in more detail in the Applied Accessibility module.

### Tertiary Colors
Computer monitors and device screens create different colors by combining amounts of red, green, and blue light. This is known as the RGB additive color model in modern color theory. Red (R), green (G), and blue (B) are called primary colors. Mixing two primary colors creates the secondary colors cyan (G + B), magenta (R + B) and yellow (R + G). These secondary colors happen to be the complement to the primary color not used in their creation, and are opposite to that primary color on the color wheel. For example, magenta is made with red and blue, and is the complement to green.

Tertiary colors are the result of combining a primary color with one of its secondary color neighbors. For example, within the RGB color model, red (primary) and yellow (secondary) make orange (tertiary). This adds six more colors to a simple color wheel for a total of twelve.

There are various methods of selecting different colors that result in a harmonious combination in design. One example that can use tertiary colors is called the split-complementary color scheme. This scheme starts with a base color, then pairs it with the two colors that are adjacent to its complement. The three colors provide strong visual contrast in a design, but are more subtle than using two complementary colors.

Here are three colors created using the split-complement scheme:

|Color|Hex Code|
|-|:-:|
|orange|#FF7F00|
|cyan|#00FFFF|
|raspberry|#FF007F|

### Adjust the Color of Various Elements to Complementary Colors
The Complementary Colors challenge showed that opposite colors on the color wheel can make each other appear more vibrant when placed side-by-side. However, the strong visual contrast can be jarring if it's overused on a website, and can sometimes make text harder to read if it's placed on a complementary-colored background. In practice, one of the colors is usually dominant and the complement is used to bring visual attention to certain content on the page.

### Adjust the Hue of a Color
Colors have several characteristics including hue, saturation, and lightness. CSS3 introduced the hsl() property as an alternative way to pick a color by directly stating these characteristics.

- **Hue** is what people generally think of as 'color'. If you picture a spectrum of colors starting with red on the left, moving through green in the middle, and blue on right, the hue is where a color fits along this line. In hsl(), hue uses a color wheel concept instead of the spectrum, where the angle of the color on the circle is given as a value between 0 and 360.

- **Saturation** is the amount of gray in a color. A fully saturated color has no gray in it, and a minimally saturated color is almost completely gray. This is given as a percentage with 100% being fully saturated.

- **Lightness** is the amount of white or black in a color. A percentage is given ranging from 0% (black) to 100% (white), where 50% is the normal color.

Here are a few examples of using hsl() with fully-saturated, normal lightness colors:

|Color|HSL|
|-|:-:|
|red|hsl(0, 100%, 50%)|
|yellow|hsl(60, 100%, 50%)|
|green|hsl(120, 100%, 50%)|
|cyan|hsl(180, 100%, 50%)|
|blue|hsl(240, 100%, 50%)|
|magenta|hsl(300, 100%, 50%)|

```
.blue {
	background-color: hsl(240, 100%, 50%);
}
```

#### Adjust the Tone of a Color
The hsl() option in CSS also makes it easy to adjust the tone of a color. Mixing white with a pure hue creates a tint of that color, and adding black will make a shade. Alternatively, a tone is produced by adding gray or by both tinting and shading. Recall that the 's' and 'l' of hsl() stand for saturation and lightness, respectively. The saturation percent changes the amount of gray and the lightness percent determines how much white or black is in the color. This is useful when you have a base hue you like, but need different variations of it.

### Create a Gradual CSS Linear Gradient
Applying a color on HTML elements is not limited to one flat hue. CSS provides the ability to use color transitions, otherwise known as gradients, on elements. This is accessed through the background property's `linear-gradient()` function.
```
background: linear-gradient(gradient_direction, color 1, color 2, color 3, ...);
```
The first argument specifies the direction from which color transition starts _it can be stated as a degree_, where 90deg makes a horizontal gradient (from left to right) and 45deg makes a diagonal gradient (from bottom left to top right). The following arguments specify the order of colors used in the gradient.
```
background: linear-gradient(90deg, red, yellow, rgb(204, 204, 255));
```
```
background: linear-gradient(35deg, #CCFFFF, #FFCCCC);
```

### Use a CSS Linear Gradient to Create a Striped Element
The `repeating-linear-gradient()` function is very similar to `linear-gradient()` with the major difference that it repeats the specified gradient pattern. `repeating-linear-gradient()` accepts a variety of values. More information here [MDN web docs](https://developer.mozilla.org/en-US/docs/Web/CSS/repeating-linear-gradient)

- The **angle** value is the _direction_ of the gradient.
- **Color stops** are like width values that mark where a transition takes place, and are given with a percentage or a number of pixels.

```
background: repeating-linear-gradient(
	45deg, yellow 0px, yellow 40px, black 40px, black 80px
);
```
In the example the gradient starts with the color yellow at 0 pixels which blends into the second color blue at 40 pixels away from the start. Since the next color stop is also at 40 pixels, the gradient immediately changes to the third color green, which itself blends into the fourth color value red as that is 80 pixels away from the beginning of the gradient.

`0px [yellow -- blend -- blue] 40px [green -- blend -- red] 80px`

If every two color stop values are the same color, the blending isn't noticeable because it's between the same color, followed by a hard transition to the next color, so you end up with stripes.

### Create Texture by Adding a Subtle Pattern as a Background Image
One way to add texture and interest to a background and have it stand out more is to add a subtle pattern. The key is balance, as you don't want the background to stand out too much, and take away from the foreground. The `background` property supports the `url()` function in order to link to an image of the chosen texture or pattern. The link address is wrapped in quotes inside the parentheses.
```
body {
    background: url(https://cdn-media-1.freecodecamp.org/imgr/MJAkxbh.png);
  }
```
