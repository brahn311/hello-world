# Add a Text Alternative to Images for Visually Impaired Accessibility
It's likely that you've seen an alt attribute on an `img` tag in other challenges. `Alt` text describes the content of the image and provides a text-alternative for it. This helps in cases where the image fails to load or can't be seen by a user. It's also used by search engines to understand what an image contains to include it in search results. Here's an example:
```
<img src="importantLogo.jpeg" alt="Company logo">
```
People with visual impairments rely on screen readers to convert web content to an audio interface. They won't get information if it's only presented visually. For images, screen readers can access the alt attribute and read its contents to deliver key information.

Good `alt` text provides the reader a brief description of the image. You should always include an alt attribute on your image. Per **HTML5 specification, this is now considered mandatory**.

### Know When Alt Text Should be Left Blank
In the last challenge, you learned that including an alt attribute when using img tags is mandatory. However, sometimes images are grouped with a caption already describing them, or are used for decoration only. In these cases alt text may seem redundant or unnecessary.

In situations when an image is already explained with text content, or does not add meaning to a page, the `img` still needs an alt attribute, but it can be set to an empty string.
```
<img src="visualDecoration.jpeg" alt="">
```
Background images usually fall under the 'decorative' label as well. However, they are typically applied with CSS rules, and therefore not part of the markup screen readers process.

> **Note!** For images with a caption, you may still want to include alt text, since it helps search engines catalog the content of the image.
