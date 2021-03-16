# Add an Accessible Date Picker

Forms often include the input field, which can be used to create several different form controls. The type attribute on this element indicates what kind of input element will be created.

You may have noticed the text and submit input types in prior challenges, and HTML5 introduced an option to specify a date field. Depending on browser support, a date picker shows up in the input field when it's in focus, which makes filling in a form easier for all users.

For older browsers, the type will default to text, so it helps to show users the expected date format in the label or placeholder text just in case.

Here's an example:

```
<label for="input1">Enter a date:</label>
<input type="date" id="input1" name="input1">
```

### Standardize Times with the HTML5 datetime Attribute

HTML5 also introduced the time element along with a datetime attribute to standardize times. The datetime attribute is an inline element that can wrap a date or time on a page. A datetime attribute holds a valid format of that date. This is the value accessed by assistive devices. It helps avoid confusion by stating a standardized version of a time, even if it's informally or colloquially written in the text.

Here's an example:

```
<p>Master Camper Cat officiated the cage match between Goro and Scorpion <time datetime="2013-02-13">last Wednesday</time>, which ended in a draw.</p>
```
