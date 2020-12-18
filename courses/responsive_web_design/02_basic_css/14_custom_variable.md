# Create a custom CSS Variable
To create a CSS variable, you just need to give it a name with two hyphens `--` in front of it and assign it a value like this:
```
--penguin-skin: gray;
```
This will create a variable named `--penguin-skin` and assign it the value of gray. Now you can use that variable elsewhere in your CSS to change the value of other elements to gray.

After you create your variable, you can assign its value to other CSS properties by referencing the name you gave it.
```
background: var(--penguin-skin);
```
This will change the background of whatever element you are targeting to gray because that is the value of the `--penguin-skin` variable. 
> **Note!** the styles will not be applied unless the variable names are an exact match.

#### Attach a Fallback value to a CSS Variable
When using your variable as a CSS property value, you can attach a fallback value that your browser will revert to if the given variable is invalid.

> **Note!** This fallback is not used to increase browser compatibility, and **it will not work on IE browsers.** Rather, it is used so that the browser has a color to display if it cannot find your variable.

```
background: var(--penguin-skin, black);
```
This will set background to black if your variable wasn't set. Note that this can be useful for debugging.
