# Make Typography Responsive
Instead of using `em` or `px` to size text, you can use viewport units for responsive typography. Viewport units, like percentages, are relative units, but they are based off different items. Viewport units are relative to the viewport dimensions (width or height) of a device, and percentages are relative to the size of the parent container element.

The four different viewport units are:
- `vw` (viewport width): 10vw would be 10% of the viewport's width.
- `vh` (viewport height): 3vh would be 3% of the viewport's height.
- `vmin` (viewport minimum): 70vmin would be 70% of the viewport's smaller dimension (height or width).
- `vmax` (viewport maximum): 100vmax would be 100% of the viewport's bigger dimension (height or width).

Here is an example that sets a body tag to 30% of the viewport's width.
```
body { width: 30vw; }
```
