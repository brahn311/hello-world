Headers:
# This text will be a title like h1
#
This isn't a h1 tag

## This text will be a title like h2

This text will be a title like h2
--

This isn't a title like h2
-

### This text will be a title like h3
#### This text will be a title like h4
##### This text will be a title like h5
###### This text will be a title like h6

---
Lines:

---
It was a line like hr

--
This isn't a hr line

This isn't a hr line
---

---
Paragraph:

This text is a common paragraph

This
will
be a
paragraph too





Does not respect several line breaks

---
Emphasis:

*This text will be italic*

_This will also be _italic_

**This text will be bold**

__This will also be bold__

Strikethrough ~~This was mistaken text~~

Here _you **can** combine_ all of _them_

Look at _this text __ because _i _don't_ want_ mistakes

Look at _this text__ because *i * **don't* want more** mistakes

Look at _this_ __text__ because *i **don't** understand*

---
Lists Unordered:
* First level item
 * Second level item (with one space)
  * Third level item ignore (with two spaces)
   * Third level item (with three spaces)
     * Fourth level item (with one tab and one space)
       * Fifth level item (with one tab and three spaces)
         * Sixth level item (with nine spaces)
           * Seventh level item (with two tabs and three spaces)
             * Eighth level item
            * Seventh level item
             * Eight level item
                * Ninth level item
           * Seventh level item
             * Eighth level item
               * Ninth level item
          * Sixth level item
* First level item
Test adding a new break line and watch
    * Second level item (with one tab)
        * Third level item (with two tabs)
     * Fourth level item (but why? with one tab and one space)
   * Fourth item test (but why? with three spaces)
 * Fourth level item (but why? with one space)
              * Fifth level Item (with three tabs)
            break line (spaces ignores)
  * Why?
    * Why?
* Recommendation: Use spaces and preview
* Observe this:
      Why is this a black hole that appears only by adding 6 spaces?

---
Lists Ordered:
1. Item 1
1. Item 2
Add a break line again and watch
4. Item
   1. Item 3a
   1. Item 3b
    1. Item 3b1
1.
1.
 3. Item
   1. Item
4.
Item
   1. Item
   1. Item
1. Item
---
Links:

This will be a link to http://github.com - Yeah!

This link have a mask [GitHub](http://github.com)

---
Quotes:

> We're living the future so
> the present is our past.
>> Second quote:
>> Other texts with less
or no `>` continue the quote
> You need add more `>` to have another level
>>> _**Third** quote:_ allows Emphasis
- The quote allows unordered list
1. Ordered item
1. List text

Another quotes continue here!
>>>> Fourth quote: the quantity matters
>>>>> Fifth quote

The quote will be break with a empty line
> And don't back forward
>> Without a empty break line

No more quotes!

---
Codes:

This is a `test` with a `code` inside.

`
This
is a block code
with breaks lines
show as single line
`

`
But


with breaks lines inside don't work
`


```
This is a block code
```

```ruby
require 'redcarpet'
markdown = Redcarpet.new("Hello World!")
puts markdown.to_html
```

---
Task lists:

- [x] Finish my changes
- [ ] Push my commits to GitHub
- [x] Open a pull request
- [ ] (Optional) Open a followup issue

---
Tables:

First Header | Second Header
-------------|--------------
Content from cell 1 | Content from cell 2
Content in the first column | Content in the second column

Table rules:
- Table always start after a empty line
- The separator must be a pipe
- First line:
  - Always will be bold
  - Must end with a character or an extra pipe
- Second line:
  - Start with a symbol subtracts
  - Has many pipes as rows
  - Must match with equal number pipes with title line
  - Must be end with a symbol subtracts or a pipe
  - Don't have text
  - Allows aling:
    - Left-aligned |:-|
    - Center-aligned |:-:|
    - Right-aligned |-:|
- Can make empty rows with one pipe in a line
- Allow missing pipes
- Pipes follow position text
- Not allows col span
- Empty line breaks the table
- Will be ignore the extra rows if the line has more pipes than the first two rows

Test:

| Left-aligned | Center-aligned | Right-aligned |
|:-------------|:--------------:|--------------:|
| git add      | git add        | git add       |
| git diff     | git diff       | git diff      |


Mimimal:

td|
-|

td|td
-|-

td||
-|-

-|||-
td|td|td|td

td|td|td|td
-|-||-
td|td|td|td

td|td|td||
-||||
|||
|
 | | |
||-|
td|td|td

|th1 |s|th3
|:-|:-:|-:|
td||
||td|-
||td

---
Images:
![Alt Text](url)

![GitHub Logo](/images/logo.png)

(Need more test because don't work with relative links)

![Image of Yaktocat](https://octodex.github.com/images/yaktocat.png)

---
Sources:
- https://help.github.com/en/articles/creating-and-highlighting-code-blocks
- https://help.github.com/en/categories/writing-on-github
- https://help.github.com/en/articles/basic-writing-and-formatting-syntax
- https://guides.github.com/features/mastering-markdown/

---
GitHub supports emoji!
[Emoji Cheat Sheet](https://github.com/ikatyang/emoji-cheat-sheet/blob/master/README.md)
