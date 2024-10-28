## 1. Explore other selectors - for states of elements, forms, buttons, words, some level 4 selectors

As we know that, HTML element can be select in different way. Pseudo-class keyword is adds for a specific selector that specifies the state of the selected element. For example, the state of the element could be either hover, focus, enable, disable, autofill, placeholder, default, checked, black, required, fullscreen, and many more.

## 2. padding-inline, padding-block, padding-inline-end, padding-inline-start. How are they different from padding-top, padding-right properties, with examples

'padding-inline', padding-block, padding-inline-end, padding-inline-start are css display properties, which as basically used for controlling padding relative to the inline or block dimensions, regardless of the text direction. More specifically, the css property padding-inline-start and padding-inline-end adjust padding on the start and end of the inline axis whereas padding-block-start and padding-block-end property are use to add padding at the start and end of the block axis and they adapt vertically.

````HTML
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
     div {
           background-color: #FF0000;
           width: 300px;
           height: 300px;
       }

       .exampleText {
       writing-mode: vertical-lr;
       padding-inline-start: 200px;
       background-color: #000fff;
       }
   </style>
</head>
<body>
    <div>
        <p class="exampleText">Example of padding-inline-start and padding-inline-end</p>
    </div>
</body>
</html>
````

## 3. Explore box-sizing property and how it helps to create an alternate box model. Show examples.

