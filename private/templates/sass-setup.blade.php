@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Sass Setup</h1>
</div>
<div class="wrapper wrapper--content language-scss">
    <p>Headstart uses <a href="http://sass-lang.com/">Sass</a> to compile stylesheets, and <strong>doesn&#39;t force you to use predefined styles or class names</strong>. Only a few mixins and functions are included by default, and with them you can make any kind of design come alive in your own way, and with your own styles. Whether you use them or not is entirely up to you. Remember that you can <a href="{{URL::to('/')}}/new-project#customize">customize the boilerplate</a> to get rid of (almost) everything you don&#39;t like.</p>



    <hr id="structure">
    <h2>Folder Structure</h2>
    <p>Great Sass comes with great responsibility. By separating your styles into named chunks, finding out where a certain style might be getting applied becomes a lot easier. The default setup that you&#39;ll find inside of the <code class="language-none">assets/sass</code> folder, is loosely based on <a href="http://smacss.com">SMACSS</a> and <a href="http://oocss.org">OOCSS</a>.</p>
    <ul>
        <li><a href="#base">./base</a> &#126; Files that don&#39;t generate CSS.</li>
        <li><a href="#libs">./libs</a> &#126; Libraries. Nothing here by default.</li>
        <li><a href="#mixin">./mixin</a> &#126; Reusable mixins that generate CSS.</li>
        <li><a href="#module">./module</a> &#126; Chunks of styles that are separated because of their specific purposes.</li>
        <li><a href="#vendor">./vendor</a> &#126; Third-party CSS that comes with eg. plugins.  Nothing here by default.</li>
        <li><a href="#root">./</a> &#126; The root files combine the different chunks and contain other, loose styles.</li>
    </ul>
    <p class="report--info"><strong>Note:</strong> Files prefixed with an underscore <a href="{{URL::to('/')}}/asset-conventions#exclude">will be excluded</a> from the build process.</p>



    <hr id="prefixing">
    <h2>Prefixing</h2>
    <p>With the help of <a href="https://github.com/ai/autoprefixer" title="Visit the Autoprefixer Guthub page">Autoprefixer</a> you will never have to write a single prefix again. Ever! Generator functions are also a thing of the past. Start writing <strong>real CSS3</strong>.</p>



    <hr id="base">
    <h2>Base files</h2>
    <h3>_config_global.scss</h3>
    <p>The global config file imports all mixins and functions to make them available for usage, and contains the following top-level variables:</p>
    <ul>
        <li><code>$base-font-size</code> &#126; Defaults to <code>16px</code>, the default of most browsers.</li>
        <li><code>$base-line-height</code> &#126; Defaults to <code>1.5</code>, a good starting point for readability.</li>
        <li><code>$total-columns</code> &#126; Defaults to <code>12</code>, which divides easily for 2-, 3- and 4-column layouts.</li>
        <li><code>$default-gutter-width</code> &#126; Defaults to <code>5%</code> and adds fluid spacing in between columns.</li>
        <li><code>$default-column-breakpoint</code> &#126; Minimum space needed for floating columns. Defaults to <code>650px</code>.</li>
        <li><code>$max-container-width</code> &#126; The maximum width a container can be, defaults to <code>1140px</code>.</li>
        <li><code>$min-page-padding</code> &#126; When the available space is less wide than the <code>$max-container-width</code>, this is the amount of side-padding that will be added. Defaults to <code>4%</code>.</li>
    </ul>
    <h3>_config_site.scss</h3>
    <p>This file defines project specific variables, such as colors, and the default font-stack:</p>
    <pre class="language-scss"><code>$font-stack: Helvetica Neue, Helvetica, Verdana, Roboto, sans-serif;</code></pre>
    <p>This is also a good place to put spacing values and easing functions in variables.</p>
    <h3>_functions.scss</h3>
    <p>Handy functions that are also being used by the default mixins:</p>
    <ul>
        <li><code>strip($number)</code> &#126; Will string the unit from a passed value.</li>
        <li><code>em($target, $context: $base-font-size)</code> &#126; Generates <code>em</code> values from a number. Supports negatives as well. The <code>$context</code> variable is used as base value during calculations.</li>
        <li><code>rem($target)</code> &#126; Generates <code>rem</code> values with <code>px</code> fallbacks from a number. Also supports negatives.</li>
        <li><code>tint($color, $percent)</code> &#126; Will lighten a color with a percentage of white.</li>
        <li><code>darken($color, $percent)</code> &#126; Will darken a color with a percentage of black.</li>
    </ul>
    <p class="report--info"><strong>Note 1:</strong> <code>em()</code> should be used with care (due to its inherative nature), and works best for font sizes (use pixels for borders and defined dimensions, rem for all the rest).</p>
    <p class="report--info"><strong>Note 2:</strong> <code>rem()</code> outputs only rem units, limiting browser support to IE9+. If you need to or want to support older versions, it is advised to use the <code>rem()</code> mixin, rather than the function. More on that further down the page.</p>
    <h3>_state.scss</h3>
    <p>A collection of silent classes that make it easy to keep your stylesheets <a href="http://csswizardry.com/2013/07/writing-dryer-vanilla-css/">DRY</a> by extending from them:</p>
    <ul>
        <li><code>%is-hidden</code> &#126; Visually hide an element. Handy for image replacements.</li>
        <li><code>%is-bold</code></li>
        <li><code>%is-underlined</code></li>
        <li><code>%is-italic</code></li>
        <li><code>%is-uppercase</code></li>
        <li><code>%is-smallcaps</code></li>
        <li><code>%is-cf</code> &#126; Clears floats.</li>
        <li><code>%is-vertical-aligned</code> &#126; Alignes stuff vertically in its parent.</li>
    </ul>
    <p>If you prefer using classes over extending, you can extend a regular class to use it in your HTML, eg.:</p>
    <pre><code>.capslock { @extend %is-uppercase; } </code></pre>
    <p class="report--info"><strong>Tip:</strong> It is still advised to use <code>&lt;strong&gt;&lt;/strong&gt;</code> for <strong>bold</strong> and <code>&lt;em&gt;&lt;/em&gt;</code> for <em>italic</em>.</p>



    <hr id="libs">
    <h2>Library files</h2>
    <p>If you plan on using libraries, put them in here, and import them in the <code class="language-none">_config_global.scss</code>.</p>
    <p>A few examples:</p>
    <ul>
        <li><a href="http://bourbon.io">Bourbon</a> &#126; Library files over <a href="https://github.com/thoughtbot/bourbon/tree/master/app/assets/stylesheets">here</a>.</li>
        <li><a href="http://compass-style.org">Compass</a> &#126; Library files over <a href="https://github.com/Compass/compass/tree/stable/core/stylesheets/compass">here</a>.</li>
        <li><a href="http://davidtheclark.github.io/scut/">SCUT</a> &#126; Library files over <a href="https://github.com/davidtheclark/scut/tree/master/dist">here</a>.</li>
        <li><a href="http://susy.oddbird.net">Susy</a> &#126; Library files over <a href="https://github.com/ericam/susy/tree/master/sass">here</a>.</li>
        <li><a href="http://bootflat.github.io">Bootflat</a> &#126; Library files over <a href="https://github.com/bootflat/bootflat.github.io/tree/master/bootflat/scss">here</a>.</li>
    </ul>
    <p class="report--warning"><strong>Note:</strong> These haven&#39;t been tested yet. Please <a href="https://github.com/flovan/headstart/issues?state=open" title="Visit the issues page">file an issue on Github</a> if things break, or even if they work just fine (so I can remove this notice).</p>
    


    <hr id="mixin">
    <h2>Mixins</h2>
    <p>The default mixins provide core functionalities such as the grid-system, media queries, etc. The Gzipping&mdash;enabled by the <code class="language-none">.htaccess</code> file&mdash;will cache and strip out strings with multiple occurences, so file size is never an issue.</p>
    <h3>_all.scss</h3>
    <p>Imports all the other mixins. It is imported itself into <code class="language-none">_config_global.scss</code>.</p>
    <h3>_baseline.scss</h3>
    <p>A mixin to make baseline alignment easier to implement. Works great together with the <a href="http://basehold.it">Basehold.it stylesheet</a>.</p>
    <h3>_grid.scss</h3>
    <p>The grid module allows you to define auto-collapsing columns:</p>
    <pre><code>section {
    /* Make the parent clearfix */
    &#64;extend %is-cf;
}

/*
Mixin:
column(
    $columns, // How many columns to span
    $end: false, // Is it the end of a row
    $break: $default-column-breakpoint, // Where it collapses
    $context: $total-columns // The context
)
*/

aside {
    /* Make it float left and take up 4 out of 12 columns */
    &#64;include column(4);
}
article {
    /* Make it close the row by floating right
       and taking in the remaining 8 columns */
    &#64;include column(8, true);
}</code></pre>
    <p>A column starts being a column when the available width is at least the defined <code>$break</code>, which defaults to <code>$default-column-breakpoint</code> or <code>650px</code> (as defined in the <a href="#base">base files</a>).</p>
    <div class="grid-example">
        <div class="row">
            <div class="col-12">12 columns</div>
        </div>
        <div class="row">
            <div class="col-6">6 columns</div>
            <div class="col-6">6 columns</div>
        </div>
        <div class="row">
            <div class="col-4">4 columns</div>
            <div class="col-4">4 columns</div>
            <div class="col-4">4 columns</div>
        </div>
        <div class="row">
            <div class="col-3">3 columns</div>
            <div class="col-3">3 columns</div>
            <div class="col-3">3 columns</div>
            <div class="col-3">3 columns</div>
        </div>
        <div class="row">
            <div class="col-2">2</div>
            <div class="col-2">2</div>
            <div class="col-2">2</div>
            <div class="col-2">2</div>
            <div class="col-2">2</div>
            <div class="col-2">2</div>
        </div>
        <div class="row">
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
            <div class="col-1">1</div>
        </div>
    </div>
    <p>You can also have multiple column settings by wrapping the column includes in media queries (more on those in the next chapter). As long as the defined breakpoint is larger than the column breakpoint, the media-queries will delay it from floating.</p>
    <pre><code>div {
    /* Setup a 2 column layout up to 1049px */
    &#64;include media-max(1049px)
    {
        /* Odd columns (1,3,5,...) will float left */
        &:nth-child(odd) { &#64;include column(6); }
        /* Even columns (2,4,6,...) will float right */
        &:nth-child(even) { &#64;include column(6,true); }
        /* First two blocks push down */
        &:nth-child(-n + 2) { &#64;include rem(margin-bottom, 50); }
    }

    /* Set up a 4 column layout */
    /* Starting at 1050px */
    &#64;include media-min(1050px)
    {
        /* All but the last column float left */
        &:not(:last-child) { &#64;include column(3); }
        /* Last column floats right */
        &:last-child { &#64;include column(3,true); }
    }
}</code></pre>
    <p>If you want to stray from the <code>$default-column-breakpoint</code>, you can use the <code class="language">$break</code> parameter of the mixin to define a custom one:</p>
    <pre><code>/* The default value of 650px will be dropped in favour of 800px */
div { &#64;include column(6, false, 800px); }</code></pre>
    <h3>_media.scss</h3>
    <p>Headstart comes with 4 media query mixins that make it a painless process to tie styles to certain dimensions.</p>
    <pre><code>/* Up until given value */
&#64;include media-max($value) {
    /* ... */
}

/* Starting from given value */
&#64;include media-min($value) {
    /* ... */
}

/* Between given min and max */
&#64;include media-min-max($valueMin, $valueMax) {
    /* ... */
}

/* On retina screens */
&#64;include highres() {
    /* ... */
}</code></pre>
    <ul class="report--info">
        <li>Mixin parameters will be stripped of their unit and converted to <code>em</code>s.</li>
        <li>All media-* functions have an optional <code class="language-none">$query</code> parameter that defaults to <code class="language-none">'screen'</code>.</li>
    </ul>
    <h3>_rem.scss</h3>
    <p>Not to be confused with the likewise named function, this mixin outputs <code>rem</code> values with pixel fallbacks for a given property. Great for paddings and margins!</p>
    <pre><code>/* For example, using: */

div {
    &#64;include rem(margin-top, 20);
    &#64;include rem(padding, 10, 20, 10, 30);
}

/* Will result in */

div {
    margin-top: 20px;
    margin-top: 1.25rem;
    padding: 10px 20px 10px 30px;
    padding: 0.625rem 1.25rem 0.625rem 1.875rem;
}</code></pre>
    <h3>_triangle.scss</h3>
    <p>CSS triangles, we all love them, but setting them up isn&#39;t really straightforward. This mixin makes it easier.</p>
    <pre><code>/*
Mixin:
triangle(
    $width: 10px,
    $height: 10px,
    $direction: up,
    $color: red
)
*/

.tooltip:before {
    content: '';
    display: block;
    &#64;include triangle(15px, 10px, down, #fff);
    /* ... */
}</code></pre>
    


    <hr id="module">
    <h2>Modules</h2>
    <p>Modules are grouped chunks of styles that are separated to lighten up your main files, and that make finding styles easier in larger projects.</p>
    <h3>_button.scss</h3>
    <p>Everything &quot;button&quot; goes in here. The placeholder class <code>%button</code> normalizes some default properties of the most commonly used button-elements, such as <code>&lt;a&gt;&lt/a&gt;</code> or <code>&lt;button&gt;&lt;/button&gt;</code>. This is an example of how <code>%button--stroked</code> class could be defined:</p>
    <pre><code>/* For usage in HTML, you can use a regular class,
or extend a regular class from this placeholder */
%button--stroked {
    @extend %button;
    border: 1px solid #000;
}

/* Somewhere in your main styles */
.contact-submit-button {
    @extend %button--stroked;
}</code></pre>
    <h3>_container.scss</h3>
    <p>Containers are centered blocks with a maximum width. When the available width is less than their defined maximum, they get padded on both sides. Images inside of these type of blocks are made fluid by default so they scale along. Extend your selectors from the placeholder as following:</p>
    <pre><code>/* This could be any class */
.header__container {
    @extend %container;
}</code></pre>
    <h3>_font.scss</h3>
    <p>A place to put your <code>@font-face</code> configuration.</p>
    <h3>_form.scss</h3>
    <p>All form related styles go in here. Normalizes some default styles for form elements.</p>
    <h3>_normalize.scss</h3>
    <p>This is the <a href="http://necolas.github.io/normalize.css/">Normalize.css</a> library. It is imported into <code>main.scss</code> to avoid an extra GET request.</p>
    <h3>_print.scss</h3>
    <p>The print module is limited to just a few styles that will improve the &quot;printing experience&quot; of your website, eg. making all the text black, removing background-images and shadows, etc. This file is also imported into the main stylesheet to avoid an extra GET request.</p>
    <h3>_reporting.scss</h3>
    <p>This module makes it easy to add reporting paragraphs and lists.</p>
    <p class="report--info">Add a info-block with the class <code>.report--info</code>.</p>
    <p class="report--warning">Add a warning-block with the class <code>.report--warning</code>.</p>
    <p class="report--success">Add a success-block with the class <code>.report--success</code>.</p>
    <ul class="report--error">
        <li>Lists are also supported.</li>
        <li>Display errors with the <code>.report--error</code> class.</li>
    </ul>
    <h3>_text.scss</h3>
    <p>Everything text-related is contained in this module:</p>
    <ul>
        <li>Text-selection color</li>
        <li>Headings</li>
        <li>Lists</li>
        <li>Paragraphs</li>
        <li>Links</li>
    </ul>
    


    <hr id="vendor">
    <h2>Vendor files</h2>
    <p>The <code class="language-none">vendor</code> folder is where you can put the stylesheets that sometimes come with plugins. SCSS stylesheets support regular CSS as well, so just change the <code class="language-none">.css</code> extension to <code class="language-none">.scss</code> and you&#39;re ready to start <code class="language-none">@import</code>ing them.</p>
    


    <hr id="root">
    <h2>Root files</h2>
    <h3>Main styles</h3>
    <p>The <code>main.scss</code> file gets included in every page. The styles of, for example, a <code class="language-html">&lt;header&gt;</code>, <code class="language-html">&lt;menu&gt;</code> or <code class="language-html">&lt;footer&gt;</code> are best defined here. If you plan on using modules, this is also the best place to import them.</p>
    <h3>View specific styles</h3>
    <p>When working on a large scale project, somes styles will be limited to individual pages. This is when the view-specific files come in handy, as they will lighten up the main stylesheet and thus speed up the individual pages of your website.</p>
    <p>The default boilerplate contains an example file for the index page, <code class="language-none">_view-index.sass</code>. To use it, just remove the leading underscore.</p>
    <h3>IE&lt;9 styles</h3>
    <p>If you need to use CSS hacks for older IE browser, you can put them in the <code class="language-none">_ie.scss</code> file. To use this stylesheet, remove the leading underscore to get it compiled and enable the conditional comments in the header layout:</p>
    <p><code class="language-none">templates/layout/header.html</code>:</p>
    <pre class="language-html"><code>&lt;!--[if lt IE 9]
&lt;link rel="stylesheet" href="assets/css/ie.min.css"&gt;
&lt;![endif]--&gt;</code></pre>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/js-setup">Next step: Javascript Setup</a></p>
</div>
@stop
