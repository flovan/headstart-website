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
    <p>This is great if you wanted to make the task runner build just once, but if you are developing and you want to <strong>build continuously with browser auto-refreshing enabled</strong>, you can run:</p>
    <pre class="language-none"><code>headstart build --serve</code></pre>
    <p>This will <strong>serve your development files</strong> on a static server and print out both a local and a network URL for you that you can copy-paste into your browser. Also, no more refreshing! It&#39;s all taken care of for you. Open the printed network url on multiple devices and try scrolling and clicking. <strong>All the connected clients are effortlessly synced, and all your changes will be applied automatically.</strong></p>
    <p class="report--info"><strong>Note:</strong> If Headstart has been <a href="{{URL::to('/')}}/back-end-integration">integrated with a back-end</a> that takes care of the templating, auto-refreshing will no longer work.</p>
    <p>Taking it one step further, you could also have Headstart automatically open up a browser <em>and</em> a code editor for you:</p>
    <pre class="language-none"><code>headstart build --serve --open --edit</code></pre>
    <p>The <strong>shorthand version</strong> of the instruction above would look like this:</p>
    <pre class="language-none"><code>hs build --s --o --e</code></pre>
    <p>The browser and editor, and much more, can be configured from your <a href="#configuration">project config file</a>.</p>
    <p class="report--info"><strong>Tip:</strong> you can combine the included <a href="{{URL::to('/')}}/extra-services">extra services</a> with any build process, as long as the &quot;--serve&quot; flag is set.</p>


    <hr id="production">
    <h2>Production</h2>
    <p>When you&#39;re done developing, it&#39;s time to introduce your project to the public. This is usually when you would start by making your optimizations, such as concatenating, minifying, revisioning, etc. Headstart will do all of those things for you, requiring only the use of the production flag:.</p>
    <pre class="language-none"><code>headstart build --production</code></pre>
    <p>Using that flag makes the build engine do the following things (taking <a href="#configuration">the configuration file</a> into account):</p>
    <ul>
        <li>Optimize image and SVG files.</li>
        <li>Make a <code class="language-none">.ico</code> version of the <code class="language-none">favicon.png</code> from the icons folder, and put it in the root directory.</li>
        <li>Convert <code class="language-none">htaccess.txt</code> into a working <code class="language-none">.htaccess</code> file.</li>
        <li>Copy the other items from the <code class="language-none">misc</code> folder to the root directory.</li>
        <li>Concatenate and uglify javascript files, and take out <code class="language-none">console.log()</code> and other development code.</li>
        <li>Minify CSS.</li>
        <li>Minify template HTML.</li>
    </ul>
    <p class="report--info"><strong>Tip 1:</strong> the <a href="extra-services.html">extra services</a> can be combined with the production build process, as long as the <code class="language-none">--serve</code> flag is set.</p>
    <p class="report--info"><strong>Tip 2:</strong> the production build can also be used with the <code class="language-none">--serve</code> flag set.</p>

    <hr id="configuration">
    <h2>Configuring your build</h2>
    <p>The <code class="language-none">config.json</code> file that comes with the boilerplate enables you to customize the building engine on a per-project basis. Here is a commented version of that file (don&#39;t put comments in your own config file though).</p>
    <pre class="language-javascript"><code>{
    // Which browser to open when the `--open` flag is set
    // Depending on your OS, this could also be:
    // "google-chrome" or "chrome" or "google chrome"
    "browser": "Google Chrome",

    // Which editor to open when the `--edit` flag is set
    // Depending on your OS and version, this could also be:
    // "Sublime Text 2" or ... (no further tests done)
    "editor": "Sublime Text",

    // Minify your templates
    // eg. remove comments, collapse whitespace, ...
    "minifyHTML": false,

    // Combine media queries where possible
    // Gzipping takes care of repeating strings, so this isn&#39;t
    // really necessary
    "combineMediaQueries": false,

    // Check your javascript syntax and output the results
    // Configured through `./.jshintrc`
    // All options here: http://www.jshint.com/docs/options/
    "hint": true,

    // Validate your files through W3C and ouput the results
    "w3c": false,

    // Folder where the assets folder should be built to
    "export_assets": "export",

    // Folder where the individual templates should be built to
    "export_templates": "export",

    // Folder where the miscellaneous assets should be built to
    // Usually identical to "export_assets"
    "export_misc": "export",

    // Assemple templates during build
    // Turn this off when eg. a back-end will do the assembly
    "assemble_templates": true,

    // Prefix injected script and link tags
    // eg. "&#123;&#123;Url::asset('/')&#125;&#125;" for Laravel
    "template_asset_prefix": "",

    // Turn on revisioning to get better caching
    "revisionCaching": false
}</code></pre>
    <p>Some extra options that aren&#39;t included in the configuration file by default:</p>
    <pre class="language-javascript"><code>{
    [...],

    // Uncss compares your CSS with the template pages and strips
    // out unused bits. Use together with the next option.
    //
    // Note: this feature doesn't play well with Sass &#64;extends,
    // and has never produced good results for me. Therefore, it
    // will get deprecated by the next major release (v2.0).
    "useUncss": false,

    // If you use javascript to dynamically add
    // classes, you can prevent Uncss from stripping their styles
    // by listing selectors here
    "uncssIgnore": [],

    // You can set a custom port if want to or need to because
    // the default port (3000) is already taken
    "port": 1234,

    // You can enable a proxy if you want browser-sync working
    // through a different host (eg. when viewing your project
    // through your MAMP/XAMP localhost)
    "localhost": "localhost/my-laravel-project/public",

    [...]
}</code></pre>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/base-setup">Next step: A closer look at the boilerplate</a></p>
</div>
@stop
