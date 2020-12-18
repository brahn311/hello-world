### Use Hex Code for Specific Colors
There are other ways to represent colors in CSS. One of these ways is called hexadecimal code, or `hex` code for short.

Hexadecimals are base 16 numbers.
- The symbols 0-9 represent the values zero to nine.
- Then A,B,C,D,E,F represent the values ten to fifteen.

We use `#` to identify an hex code, followed by 6 hexadecimal digits to represent colors, two each for the `R` (red), `G` (green), and `B` (blue) components. From these three pure colors RGB, we can vary the amounts of each to create over 16 million other colors!

Altogether, 0 to F can represent a digit in hexadecimal, giving us 16 total possible values.

The digit 0 is the lowest number in hex code, and represents a complete absence of color. #000000 is black and is also the lowest possible value.

The digit F is the highest number in hex code, and represents the maximum possible brightness. #FFFFFF is white and also the highest possible value.

Orange is pure red, mixed with some green, and no blue. In hex code, this translates to being #FFA500.
```
body {
  color: #000000;
}
```
It's difficult to remember hex code. Fortunately, you can shorten it. For example, red's hex code #FF0000 can be shortened to #F00. This shortened form gives one digit for red, one digit for green, and one digit for blue.
```
.hexcolor-shortened {
  color: #F00;
}
```

### Use RGB values to Color Elements
You can represent colors in CSS is by using RGB values.
With RGB you specify the brightness of each color with a number between 0 and 255.

The RGB value for black is: rgb(0, 0, 0)
The RGB value for white is: rgb(255, 255, 255)

If you do the math, the two digits for one color equal 16 times 16, which gives us 256 total values. So RGB, which starts counting from zero, has the exact same number of possible values as hex code.
```
.orange-class {
  background-color: rgb(255, 165, 0);
}
```
