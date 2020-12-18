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
Now we going to animates an element to replicate the movement of a ball being juggled. With the `linear` and `ease-out` cubic Bezier curves, neither depicts the juggling movement accurately. You need to customize a Bezier curve for this.

The `animation-timing-function` automatically loops at every keyframe when the `animation-iteration-count` is set to `infinite`. Since there is a `keyframe` rule set in the middle of the animation duration (at 50%), it results in _two identical animation_ progressions at the upward and downward movement of the ball.

The following cubic Bezier curve simulates a juggling movement:
```
animation-timing-function: cubic-bezier(0.3, 0.4, 0.5, 1.6);
```

Notice that the value of `y2` is larger than `1`. Although the cubic Bezier curve is mapped on a 1 by 1 coordinate system, and it can only accept _x values from 0 to 1_, the _y value can be set to numbers larger than one_. This results in a bouncing movement that is ideal for simulating the juggling ball.

```
animation-timing-function: cubic-bezier(0.311, 0.441, 0.444, 1.649);
```
