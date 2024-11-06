## 1. Explore other selectors - for states of elements, forms, buttons, words, some level 4 selectors

As we know that, HTML element can be select in different way. Pseudo-class keyword is adds for a specific selector that specifies the state of the selected element. For example, the state of the element could be either hover, focus, enable, disable, autofill, placeholder, default, checked, black, required, fullscreen, and many more. For example:

````
button:hover{
    background-color: blue;
    color: #fff;
}

input:focus{
    border: none;
    padding: 10px;
}

input[type="checkbox"]:checked{
    background-color: red;
}

:is(h1,h2,h3,h4,h5){
    color:darkblue;
}

:not(.special){
    font-size: 20px;
    text-transform: capitalize;
}

input:active{
    outline: none;
}


## 2. padding-inline, padding-block, padding-inline-end, padding-inline-start. How are they different from padding-top, padding-right properties, with examples

'padding-inline', padding-block, padding-inline-end, padding-inline-start are css display properties, which as basically used for controlling padding relative to the inline or block dimensions, regardless of the text direction. More specifically, the css property padding-inline-start and padding-inline-end adjust padding on the start and end of the inline axis whereas padding-block-start and padding-block-end property are use to add padding at the start and end of the block axis and they adapt vertically.

```
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
    p{
        padding-inline:20px;
        padding-block:10px;
    }

```

## 3. Explore box-sizing property and how it helps to create an alternate box model. Show examples.

Simply, box-sizing sets how the total width and height of an element is calculated and this can be manipulate using box-sizing css property and it has two different value either content-box or border-box, but in child environment, it can be access by using inherit, initial, revert, unset, etc.

The main difference between content-box and border box is that, these two values gives different environment to set the height and width of the an element, if box-sizing:content-box. then the height = height + padding-top + padding-bottom + border-top + border-bottom; whereas if box-sizing: border-box, then the height will be calculated by height = height only.

```HTML
box-sizing: border-box;
box-sizing: content-box;

/* Global values */
box-sizing: inherit;
box-sizing: initial;
box-sizing: revert;
box-sizing: revert-layer;
box-sizing: unset;
```

## 4. Identify some block elements and inline-elements. Show your process. (at least 10 elements each)

Block and inline are two different elements in html which are different behaviour. Block elements take full width of its parent element whereas inline elements take only full width of its content. For example, `<p>` and `<div>` are block elements whereas `<spab>` and `<a>` are the inline elements. There are so many block and inline elements available some of them are listed below:

1. Block Elements
   `<div>`, `<p>`, `<h1>`, `<h2>`, `<h3>`, `<h4>`, `<h5>`, `<h6>`, `<ul>`, `<ol>`, `<li>`, `<table>`, `<section>`, `<article>`, `<header>`, `<footer>`, `<aside>`, `<nav>`, `<figure>`, `<figcaption>`, `<form>`, `<blockquote>`, `<hr>`
2. Inline Elements
   `<span>`, `<a>`, `<strong>`, `<em>`, `<img>`, `<label>`, `<abbr>`, `<cite>`, `<code>`, `<input>`, `<button>`, `<small>`, `<sup>`, `<sub>`, `<b>`, `<i>`, `<u>`, `<time>`, `<mark>`, `<q>`
````
