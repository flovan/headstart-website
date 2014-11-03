@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
    <h1>Back-end Integration</h1>
</div>
<div class="wrapper wrapper--content">
    <p>Headstart wasn&#39;t initially made with back-end integration in mind. Nonetheless, some things can be moved around and configured to make it possible.</p>

    <hr id="laravel">
    <h2>Laravel Integration</h2>
    <p>The following steps have been used to port the Headstart website to Laravel. It is <a href="https://github.com/flovan/headstart-website">available under MIT at Github</a> if you would like to take a look at the files.</p>
    <p>First, move your project files into a <code class="language-none">private</code> folder within the Laravel setup, and the <code class="language-none">.html</code> extensions should be changed to <code class="language-none">.blade.php</code>.</p>
    <p>Then <code class="language-none">config.json</code> needs to be edited (read up on the options in the <a href="http://localhost:9000/getting-started.html#structure">Structure section</a>) as following:</p>
    <pre class="language-javascript"><code>{
...
"export_assets": "../public",
"export_templates": "../app/views",
"export_misc": "../public",
"assemble_templates": false,
"template_asset_prefix": "&#123;&#123;URL::to('/')&#125;&#125;",
...
}</code></pre>
	<p>With these settings, Headstart will build the <code class="language-none">assets</code> folder and <code class="language-none">misc</code> folder contents to the <code class="language-none">public</code> folder. It will also move the views over to <code class="language-none">app/views</code> without compiling to let the Blade engine handle them. All assets will also be prefixed with some Blade syntax to give them absolute paths, rather than relative ones.
    <p>Since references to scripts and stylesheets get injected, the location markers have to be put inside of the main content files. This part from <code class="language-none">header.blade.php</code>:</p>
    <pre class="language-markup"><code>&lt;!-- inject:css --&gt;&lt;!-- endinject --&gt;

&lt;/head&gt;  
&lt;body&gt;</code></pre>
    <p>And this part from<code class="language-none">footer.blade.php</code>:</p>
    <pre class="language-markup"><code>&lt;!-- inject:js --&gt;&lt;!-- endinject --&gt;</code></pre>
    <p>Need to be moved to all your indiviual pages. It isn&#39;t pretty, but it works. Example <code class="language-none">index.blade.php</code>:</p>
    <pre class="language-markup"><code>&#64;include(&quot;common/header&quot;)
&lt;!-- inject:js --&gt;&lt;!-- endinject --&gt;
&lt;/head&gt;  
&lt;body&gt;

Your page content ...

&lt;!-- inject:js --&gt;&lt;!-- endinject --&gt;
&#64;include(&quot;common/footer&quot;)</code></pre>
	<p>If you really don&#39;t like this solution and you don&#39;t plan on having view-specific assets, you can also move the parts into their own blades (in the root of <code class="language-none">templates</code>!), eg. <code class="language-none">top-inject.blade.php</code> and <code class="language-none">bottom-inject.blade.php</code> and import those back into the layout parts where you extracted them from. Still ugly, but at least it makes your other content Blades less messy.</p>
	<p class="report--warning"><strong>Note:</strong> Assets will not be imported in Blades located in subfolders. The solution mentioned above (having inject blades) works, but, again, will not support page-specific assets. This <a href="https://github.com/flovan/headstart/issues/31">has been marked as an enhancement</a> on Github Issues.</p>


    <hr id="other">
    <h2>Other Integrations</h2>
    <p>If you have succesfully integrated Headstart into any kind of other back-end system not mentioned on this page, I would be much obliged if you could share your process with me so it can be included here. Various ways of contacting me can be found on <a href="http://flovan.me">my website</a>.</p>
</div>
@stop