# Understand Absolute versus Relative Units

The last several challenges all set an element's margin or padding with pixels `px`.

**Pixels** are a type of _length unit_, which is what tells the browser how to size or space an item. In addition to `px`, CSS has a number of different length unit options that you can use.

The two main types of length units are:
- Absolute.
- Relative.

**Absolute units** tie to physical units of length. For example, `in` and `mm` refer to inches and millimeters, respectively. Absolute length units approximate the actual measurement on a screen, but there are some differences depending on a screen's resolution.

**Relative units**, such as `em` or `rem`, are relative to another length value. For example, `em` is based on the size of an element's font. If you use it to set the font-size property itself, it's relative to the parent's font-size.
```
padding: 1.5em;
```

**Note!** There are several relative unit options that are tied to the size of the viewport. They are covered in the Responsive Web Design Principles section.
