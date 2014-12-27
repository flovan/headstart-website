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
    <p>Taking it one step further, you could also have Headstart automatically open up a browser <em>and</em> a code editor for you:</p>
    <pre class="language-none"><code>headstart build --serve --open --edit</code></pre>
    <p>The <strong>shorthand version</strong> of the instruction above would look like this:</p>
    <pre class="language-none"><code>hs build --s --o --e</code></pre>
    <p>The browser and editor, and much more, can be configured from your <a href="#configuration">project config file</a>.</p>


    <hr id="production">
    <h2>Production</h2>
    <p>When you&#39;re done developing, it&#39;s time to introduce your project to the public. This is usually when you would start optimizing (eg. concatenating, minifying, revisioning, etc.). Headstart will do all of those things for you, requiring only the use of the production flag:.</p>
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
    <p class="report--info"><strong>Tip:</strong> The production build can also be used with the <code class="language-none">--serve</code> flag.</p>

    <hr id="configuration">
    <h2>Configuring your build</h2>
    <p>The <code class="language-none">config.json</code> file that comes with the boilerplate enables you to customize the building engine on a per-project basis. Here is a commented version of that file (don&#39;t put comments in your own config file though).</p>
    <pre class="language-javascript"><code>&#123;
    // Which browser to open when the `--open` flag is set
    // Depending on your OS, this could also be:
    // &quot;google-chrome&quot; or &quot;chrome&quot; or &quot;google chrome&quot;
    &quot;browser&quot;: &quot;Google Chrome&quot;,

    // Which editor to open when the `--edit` flag is set
    // Depending on your OS and version, this could also be:
    // "Sublime Text 2" or ... (no further tests done)
    &quot;editor&quot;: &quot;Sublime Text&quot;,

    // Minify your templates
    // eg. remove comments, collapse whitespace, ...
    &quot;minifyHTML&quot;: false,

    // Combine media queries where possible
    // Gzipping takes care of repeating strings, so this isn&#39;t
    // really necessary
    &quot;combineMediaQueries&quot;: false,

    // Check your javascript syntax and output the results
    // Configured through `./.jshintrc`
    // All options here: http://www.jshint.com/docs/options/
    &quot;hint&quot;: true,

    // Validate your files through W3C and ouput the results
    &quot;w3c&quot;: false,

    // Folder where the assets folder should be built to
    &quot;export_assets&quot;: &quot;export&quot;,

    // Folder where the individual templates should be built to
    &quot;export_templates&quot;: &quot;export&quot;,

    // Folder where the miscellaneous assets should be built to
    // Usually identical to "export_assets"
    &quot;export_misc&quot;: &quot;export&quot;,

    // Assemple templates during build
    // Turn this off when eg. a back-end will do the assembly
    &quot;assemble_templates&quot;: true,

    // Prefix injected script and link tags
    // eg. &quot;&#123;&#123;Url::asset('/')&#125;&#125;&quot; for Laravel
    &quot;template_asset_prefix&quot;: &quot;&quot;,

    // Turn on revisioning to get better caching
    &quot;revisionCaching&quot;: false
&#125;</code></pre>
    <hr id="optional-configuration">
    <h2>Optional configuration</h2>
    <p>Some extra options that aren&#39;t included in the configuration file by default:</p>
    <pre class="language-javascript"><code>&#123;
    [...],

    // Uncss compares your CSS with the template pages and strips
    // out unused bits. Use together with the next option.
    //
    // Note: this feature doesn&#39;t play well with Sass &#64;extends,
    // and has never produced good results for me. Therefore, it
    // will get deprecated by the next major release (v2.0).
    &quot;useUncss&quot;: false,

    // If you use javascript to dynamically add
    // classes, you can prevent Uncss from stripping their styles
    // by listing selectors here
    &quot;uncssIgnore&quot;: [],

    // You can set a custom port if want to or need to because
    // the default port (3000) is already taken
    &quot;port&quot;: 1234,

    // You can enable a proxy if you want browser-sync to work
    // through a different host (eg. when viewing your project
    // through your MAMP/XAMP localhost)
    &quot;proxy&quot;: &quot;localhost/my-laravel-project/public&quot;,

    // Use a different name for the assets folder
    &quot;assetsFolder&quot;: &quot;assets&quot;,
    
    // Configure how your HTML will be minified
    // Default settings show below
    // All options here: https://github.com/kangax/html-minifier#options-quick-reference
    &quot;htmlminOptions&quot; : {
        &quot;removeComments&quot;:                true,
        &quot;collapseWhitespace&quot;:            true,
        &quot;collapseBooleanAttributes&quot;:     true,
        &quot;removeAttributeQuotes&quot;:         true,
        &quot;useShortDoctype&quot;:               true,
        &quot;removeScriptTypeAttributes&quot;:    true,
        &quot;removeStyleLinkTypeAttributes&quot;: true,
        &quot;minifyJS&quot;:                      true,
        &quot;minifyCSS&quot;:                     true
    }

    [...]
&#125;</code></pre>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/extra-services">Next step: Extra Services</a></p>
</div>
@stop
