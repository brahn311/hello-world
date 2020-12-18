# How the CSS `@keyframes` and animation Properties Work
To animate an element, you need to know about the `animation` properties and the `@keyframes` rule.

### `animation` properties
It control how the animation should behave. There are eight animation properties in total. We'll keep it simple and cover the two most important ones first:
- `animation-name` sets the name of the animation, which is later used by `@keyframes` to tell CSS which rules go with which animations.
- `animation-duration` sets the length of time for the animation.
> **Note!** The duration value can be `s` (seconds) or `ms` (milliseconds), where 1000ms is equal to 1s.

### `@keyframes`
The `@keyframes` rule controls what happens during that animation.
It is how to specify exactly what happens within the animation over the duration. This is done by giving CSS properties for specific "frames" during the animation, with percentages ranging from 0% to 100%.
- The CSS properties for 0% is how the element displays in the opening scene.
- The CSS properties for 100% is how the element appears at the end.

Then CSS applies the magic to transition the element over the given duration to act out the scene. And you aren't limited to only beginning-end transitions, you can set properties for the element for any percentage between 0% and 100%.
```
#anim {
  animation-name: colorful;
  animation-duration: 3s;
}

@keyframes colorful {
  0% {
    background-color: blue;
  }
  100% {
    background-color: yellow;
  }
}
```


### Animate Elements Continually Using an Infinite Animation Count
Another animation property is the `animation-iteration-count`, which allows you to control how many times you would like to loop through the animation.
```
animation-iteration-count: 3;
```
In this case the animation will stop after running `3` times, but it's possible to make the animation run continuously by setting that value to `infinite`.

### Modify Fill Mode of an Animation
You can use CSS @keyframes to change the color of a button in its hover state.
```
<style>
  button {
    border-radius: 5px;
    color: white;
    background-color: #0F5897;
    padding: 5px 10px 8px 10px;
  }

  button:hover {
    animation-name: background-color;
    animation-duration: 500ms;
  }
</style>
<button>Register</button>
```
Notice how the animation resets after duration has passed, causing the button to revert back to the original color. You want the button to stay highlighted.

This can be done by setting the `animation-fill-mode` property to forwards. The `animation-fill-mode: forwards;` specifies the style applied to an element when the animation has finished.
```
button:hover {
  animation-name: background-color;
  animation-duration: 500ms;
  animation-fill-mode: forwards;
}
```

### Create Movement Using CSS Animation
When elements have a specified position, such as fixed or relative, the CSS offset properties `right`, `left`, `top`, and `bottom` can be used in animation rules to create movement.

As shown in the example below, you can push the item downwards then upwards by setting the top property of the 50% keyframe to 50px, but having it set to 0px for the first (0%) and the last (100%) keyframe.
```
<style>
  div {
    height: 40px;
    width: 70%;
    background: black;
    margin: 50px auto;
    border-radius: 5px;
    position: relative;
  }

  #rect {
    animation-name: rainbow;
    animation-duration: 4s;
  }

  @keyframes rainbow {
    0% {
      background-color: blue;
      top: 0px;
      left: 0px;
    }
    50% {
      background-color: green;
      top: 50px;
      left: 25px;
    }
    100% {
      background-color: yellow;
      top: 0px;
      left: -25px;
    }
  }
</style>

<div id="rect"></div>
```

### Create Visual Direction by Fading an Element from Left to Right
For this we'll add the `opacity` property and its value in the mark of the percentage animation time on the @keyframes rule.
```
@keyframes fade {
  50% {
    opacity: 0.1;
  }
}
```

### Change Animation Timing with Keywords
In CSS animations, the `animation-timing-function` property controls how quickly an animated element changes over the duration of the animation, it says how the car accelerates and decelerates over the course of the animation.

There are a number of predefined keywords available. For example:
- `ease`: starts slow, speeds up in the middle, and then slows down again in the end. (default value).
- `ease-out`: quick in the beginning then slows down.
- `ease-in`: slow in the beginning, then speeds up at the end.
- `linear`: applies a constant animation speed throughout.

```
<style>

  .balls {
    border-radius: 50%;
    background: linear-gradient(
      35deg,
      #ccffff,
      #ffcccc
    );
    position: fixed;
    width: 50px;
    height: 50px;
    margin-top: 50px;
    animation-name: bounce;
    animation-duration: 2s;
    animation-iteration-count: infinite;
  }
  #ball1 {
    left:27%;
    animation-timing-function: linear;
  }
  #ball2 {
    left:56%;
    animation-timing-function: ease-out;
  }

  @keyframes bounce {
    0% {
      top: 0px;
    }
    100% {
      top: 249px;
    }
  }

</style>

<div class="balls" id="ball1"></div>
<div class="balls" id="ball2"></div>
```
> **Nota!** Se declara la animacion general para la clase, pero para diferenciar cada animacion las propiedades se definen en sus distintos id.

#### How Bezier Curves WorkPassed
In CSS animations, Bezier curves are used with the `animation-timing-function` property with the `cubic-bezier()` function. The shape of the curve represents how the animation plays out. The curve lives on a 1 by 1 coordinate system.
- The `X-axis` is the duration of the animation (think of it as a time scale).
- The `Y-axis` is the change in the animation.

The cubic-bezier function consists of four main points that sit on this 1 by 1 grid: `p0(x0,y0)`, `p1(x1,y1)`, `p2(x2,y2)`, and `p3(x3,y3)`.
- `p0` and `p3` are set for you, they are the beginning and end points which are always located respectively at the origin (0, 0) and (1, 1).
- `p1` `p2` you set them, and where you place them in the grid dictates the shape of the curve for the animation to follow. This is done in CSS by declaring the x and y points in the form: (x1, y1, x2, y2).

```
animation-timing-function: cubic-bezier(0.25, 0.25, 0.75, 0.75);
```
In the example above, the x and y values are equivalent for each point `x1 = 0.25 = y1` and `x2 = 0.75 = y2`, which results in a line that extends from the origin to point (1, 1). This animation is a linear change of an element during the length of an animation, and _is the same as_ using the `linear` keyword. In other words, it changes at a constant speed.

### Use a Bezier Curve to Move a Graphic
The `ease-out` keyword that describes an animation change that speeds up first and then slows down at the end of the animation. Similar animation progressions to the ease-out keyword can be achieved by using a custom cubic Bezier curve function.
```
animation-timing-function: cubic-bezier(0, 0, 0.58, 1);
```
In this example, the curve moves faster through the `Y-axis` (starts at 0, goes to p1 y value of 0, then goes to p2 y value of 1) than it moves through the `X-axis` (0 to start, then 0 for p1, up to 0.58 for p2). As a result, the change in the animated element progresses faster than the time of the animation for that segment. Towards the end of the curve, the relationship between the change in x and y values reverses - the y value moves from 1 to 1 (no change), and the x values move from 0.58 to 1, making the animation changes progress slower compared to the animation duration.

### Make Motion More Natural Using a Bezier Curve
This challenge animates an element to replicate the movement of a ball being juggled. Prior challenges covered the linear and ease-out cubic Bezier curves, however neither depicts the juggling movement accurately. You need to customize a Bezier curve for this.

The animation-timing-function automatically loops at every keyframe when the animation-iteration-count is set to infinite. Since there is a keyframe rule set in the middle of the animation duration (at 50%), it results in two identical animation progressions at the upward and downward movement of the ball.

The following cubic Bezier curve simulates a juggling movement:
```
animation-timing-function: cubic-bezier(0.3, 0.4, 0.5, 1.6);
```

Notice that the value of y2 is larger than 1. Although the cubic Bezier curve is mapped on a 1 by 1 coordinate system, and it can only accept x values from 0 to 1, the y value can be set to numbers larger than one. This results in a bouncing movement that is ideal for simulating the juggling ball.
