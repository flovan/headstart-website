@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Building</h1>
</div>
<div class="wrapper wrapper--content" id="development">
    <h2>Development</h2>
    <p>Headstart can be instructed to do a couple of things. To get an overview printed out in your command line, just run <code class="language-none">headstart</code> or <code class="language-none">hs</code>, or just continue reading.</p>
    <p>To <strong>make a regular build</strong>, ie. compiling Sass, injecting assets into the HTML files, etc., run the following command:</p>
    <pre class="language-none"><code>headstart build</code></pre>
    <p>This is great if you wanted to make the task runner build just once, but if you are developing and you want to <strong>build continuously with auto-refreshing enabled</strong>, you can run:</p>
    <pre class="language-none"><code>headstart build --serve</code></pre>
    <p>This will serve your development files on a static server and print out both a local and a network URL for you that you can copy-paste into your browser. Also, no more refreshing! It&#39;s all taken care of for you. Open the printed network url on multiple devices and try scrolling and clicking. All the connected clients are effortlessly synced. And all your changes will be applied automatically. Taking it one step further, you could also have Headstart automatically open up a browser <em>and</em> a code editor for you:</p>
    <pre class="language-none"><code>headstart build --serve --open --edit</code></pre>
    <p>The browser and editor, and much more, can be configured from your <a href="#configuration">project config file</a>.</p>
    <p class="report--info"><strong>Tip:</strong> you can combine the included <a href="{{URL::to('/')}}/extra-services">extra services</a> with any build process, as long as the &quot;--serve&quot; flag is set.</p>


    <hr id="production">
    <h2>Production</h2>
    <p>There comes a time when you want to introduce your project to the public. This is the moment where you would usually make your optimizations, such as concatenating, minifying, revisioning, etc. Headstart will do all of those things for you, requiring only the use of the production flag:.</p>
    <pre class="language-none"><code>headstart build --production</code></pre>
    <p>Using that flag makes the build engine do the following things (taking <a href="#configuration">the configuration file</a> into account):</p>
    <ul>
        <li>Optimize image and SVG files.</li>
        <li>Make a <code class="language-none">.ico</code> version of the <code class="language-none">favicon.png</code> from the icons folder, and put it in the root directory.</li>
        <li>Convert <code class="language-none">htaccess.txt</code> into a working <code class="language-none">.htaccess</code> file.</li>
        <li>Copy the other items from the <code class="language-none">misc</code> folder to the root directory.</li>
        <li>Concatenate and uglify javascript files, and take out <code class="language-none">console.log()</code> and other development code.</li>
        <li>Minify CSS and optimize with <a href="https://github.com/giakki/uncss" title="Visit the Github page of Uncss">Uncss</a>.</li>
        <li>Minify template HTML.</li>
    </ul>
    <p class="report--info"><strong>Tip 1:</strong> you can combine the included <a href="extra-services.html">extra services</a> with any build process, as long as the <code class="language-none">--serve</code> flag is set.</p>
    <p class="report--info"><strong>Tip 2:</strong> the production build can also be used with the <code class="language-none">--serve</code> flag set.</p>

    <hr id="configuration">
    <h2>Configuring your build</h2>
    <p>The <code class="language-none">config.json</code> file that comes with the boilerplate enables you to customize the building engine on a per-project basis. Here is a commented version of that file (don&#39;t put comments in your own config file though).</p>
    <pre class="language-javascript"><code>{
// Which browser to open when the flag --open is set
// Depending on your OS, this could also be:
// "google-chrome" or "chrome" or "google chrome"
"browser": "Google Chrome",

// Which editor to open when the flag --edit is set
// Depending on your OS and version, this could also be:
// "Sublime Text 2" or ... (no further tests done)
"editor": "Sublime Text",

// Minify your templates
// eg. remove comments, collapse whitespace, ...
"minifyHTML": false,

// Combine media queries where possible
// Gzipping takes care of repeating strings, so this isn&#39;t
// really necessairy to keep down filesize
"combineMediaQueries": false,

// Uncss compares your CSS with the template pages and strips
// out unused bits. Use together with the next option.
"useUncss": false,

// If you use javascript to dynamically add
// classes, you can prevent Uncss from stripping their styles
// by listing selectors here
"uncssIgnore": [],

// Check your javascript syntax
"hint": true,

// Validate your files through W3C
"w3c": false,

// Folder where the assets be built to
// Handy when the back-end serves them through a "public" folder
"export_assets": "export",

// Folder where the templates should be built to
// Handy when the back-end uses templating and a different renderer
// (Tested with a Laravell and NodeJS setup)
"export_templates": "export",

// Folder where the miscellaneous assets should be built to
// Usually identical to "export_assets"
"export_misc": "export",

// Assemple templates during build
// Turn this off when some other engine will do the assembly
"assemble_templates": true,

// Prefix injected script and link tags
// eg. "&#123;&#123;Url::to('/')&#125;&#125;/" for Laravel
"template_asset_prefix": "",

// Turn on revisioning to get better caching
"revisionCaching": false
}</code></pre>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/base-setup">Next step: A closer look at the boilerplate</a></p>
</div>
@stop
