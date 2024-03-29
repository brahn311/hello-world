# Create a Media Query

Media Queries are a new technique introduced in CSS3 that change the presentation of content based on different viewport sizes. The viewport is a user's visible area of a web page, and is different depending on the device used to access the site.

Media Queries consist of a media type, and if that media type matches the type of device the document is displayed on, the styles are applied. You can have as many selectors and styles inside your media query as you want.

Here's an example of a media query that returns the content when the device's width is less than or equal to 100px:
```
@media (max-width: 100px) { /* CSS Rules */ }
```

And the following media query returns the content when the device's height is more than or equal to 350px:
```
@media (min-height: 350px) { /* CSS Rules */ }
```

Remember, the CSS inside the media query is applied only if the media type matches that of the device being used.
