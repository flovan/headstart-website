@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Javascript Setup</h1>
</div>
<div class="wrapper wrapper--content language-javascript">
    <p>The default boilerplate files comes bundled with a few libraries and patches and a basic setup to get you started right away. Light enough for projects needing basic javascript or jQuery, but easily extendible for larger sites or applications.</p>
    


    <hr id="structure">
    <h2>Folder structure</h2>
    <ul>
        <li><a href="#ie">./ie</a> &#126; Patches for IE.</li>
        <li><a href="#libs">./libs</a> &#126; Plugins and third-party libraries.</li>
        <li><a href="#root">./</a> &#126; Main and page-specific code.</li>
    </ul>
    <p class="report--info"><strong>Note:</strong> Files prefixed with an underscore <a href="{{URL::to('/')}}/asset-conventions#exclude">will be excluded</a> from the build process.</p>
    


    <hr id="ie">
    <h2>IE files</h2>
    <p>This folder contains patches and polyfills for IE(&lt;9), ordered in the <code class="language-none">body</code> and <code class="language-none">head</code> folders. Each folder will produce a concatenated file which you can use through the conditional comments in the layout templates:</p>
    <p>By enabling the conditional comment in <code class="language-none">templates/layout/header.html</code>:</p>
    <pre class="language-markup"><code>&lt;!--[if lt IE 9]
&lt;script src="assets/js/ie-head.min.js"&gt;&lt;/script&gt;
&lt;![endif]--&gt;</code></pre>
    <p>You will get:</p>
    <ul>
        <li><a href="https://umbraengineering.github.io/Placeholder/#ie-behavior-spanjs">ie-behavior-span.js</a> &#126; Polyfill for the <code>placeholder</code> attribute.</li>
        <li><a href="https://github.com/scottjehl/Respond">respond.js</a> &#126; Polyfill for media queries. If you need more than just min/max queries, try out <a href="http://code.google.com/p/css3-mediaqueries-js/">css3-mediaqueries.js</a></li>
    </ul>
    <p>By enabling the conditional comment in <code class="language-none">templates/layout/footer.html</code>:</p>
    <pre class="language-markup"><code>&lt;!--[if lt IE 9]
&lt;script src="assets/js/ie-body.min.js"&gt;&lt;/script&gt;
&lt;![endif]--&gt;</code></pre>
    <p>You will get:</p>
    <ul>
        <li><a href="https://github.com/aFarkas/html5shiv">html5shiv.js</a> &#126; Polyfill for HTML5 elements</li>
    </ul>


    <hr id="libs">
    <h2>Library files</h2>
    <h3>$</h3>
    <p>Headstart comes with <a href="http://enderjs.com/#the-jeesh">a Jeesh build of Ender</a> to replace the much heavier <a href="http://jquery.com/">jQuery</a> 1.11.x, which is also bundled, but excluded from the build. <strong>Feel free to revert back to jQuery if you want.</strong> Remember that you can use <a href="{{URL::to('/')}}/new-project#customize">a fork of the boilerplate files</a> to customize the defaults. The Jeesh comes with the following libraries and replaces almost every commonly used aspect of jQuery, but at half the weight.:</p>
    <ul>
        <li><a href="https://github.com/ded/domready">domReady</a> &#126; A cross-browser domReady.</li>
        <li><a href="https://github.com/ded/qwery">Qwery</a> &#126; A fast light-weight selector engine.</li>
        <li><a href="https://github.com/ded/bonzo">Bonzo</a> &#126; A bullet-proof DOM utility.</li>
        <li><a href="https://github.com/fat/bean">Bean</a> &#126; A multi-platform event manager</li>
        <li><a href="http://underscorejs.org/">Underscore</a> &#126; A functional programming toolbelt.</li>
    </ul>
    <p>Also bundled, but excluded from the build, is an extended version of this Jeesh build, which contains extra libraries:</p>
    <ul>
        <li><a href="https://github.com/ded/reqwest">Reqwest</a> &#126; Browser asynchronous http requests aka AJAX.</li>
        <li><a href="https://github.com/ded/morpheus">Morpheus</a> &#126; A brilliant animation library.</li>
    </ul>
    <p class="report--warning"><strong>Note:</strong> Prefix the unused libraries with an underscore to prevent abuse of the <code>$</code>.</p>
    <h3>Utils</h3>
    <p>A globally-accessible wrapper for your utilities. If you have a project that uses a lot of helper functions, this file can be used to make them accessible throughout your pages. By default the class is exluded from the build. Included are functions to:</p>
    <ul>
        <li>Check if the client device is touch-enabled is available (<a href="http://www.stucox.com/blog/you-cant-detect-a-touchscreen/">Considered bad practise</a>, but better than nothing).</li>
        <li>Detect oldy IE (&lt;9) browsers.</li>
    </ul>
    <h3>Loose libs</h3>
    <ul>
        <li><a href="http://ftlabs.github.io/fastclick/">Fastclick</a> &#126; Getting rid of touch-delays.</li>
        <li><a href="http://underscorejs.org/">Underscore</a> &#126; A functional programming toolbelt. Excluded by default since it is included in the Ender builds.</li>
    </ul>
    <h3>Dev libs</h3>
    <ul>
        <li>
            <li><a href="https://github.com/kayahr/console-shim">Console shim</a> &#126; providing console compatibility for legacy browsers.</li>
        </li>
    </ul>
    <p class="report--info"><strong>Note:</strong> Dev libraries will get excluded when building in <code class="language-none">--production</code>.</p>
    


    <hr id="root">
    <h2>Root files</h2>
    <p></p>
    <h3>Main script</h3>
    <p>The <code class="language-none">main.js</code> file contains a very basic <code>.ready()</code> setup wrapped in an <a href="http://gregfranko.com/blog/i-love-my-iife/">IIFE</a>.</p>
    <h3>View specific scripts</h3>
    <p>View-specific files make it easy to include script files in individual pages. The default boilerplate contains an example file for the index page, <code class="language-none">_view-index.js</code>. To use it, remove the leading underscore.</p>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/back-end-integration">Next step: Back-end Integration</a></p>
</div>
@stop