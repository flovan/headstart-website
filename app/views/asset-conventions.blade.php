@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Asset Conventions</h1>
</div>
<div class="wrapper wrapper--content">
    <p>Stylesheets and scripts are injected automatically while building, and only get optimized in <code>--production</code> mode. Working with development libraries instead of minified and production-ready code not only enables you to read through the code, but it also makes it easier to debug possible errors.</p>

    <hr id="view-specific">
    <h2>View-specific assets</h2>
    <p>This method is <strong>great for shrinking per-page asset size on larger projects</strong>. If you want to include a script or a stylesheet exclusively on a certain page, you can use the &quot;view-&quot; prefix. Just make sure the file name starts with &quot;view-&quot;, followed by the name of the page you want it on&mdash;eg. <code class="language-none">view-index.scss</code> or <code class="language-none">view-profile-some.library.js</code>&mdash;and you&#39;re good to go.</p>


    <hr id="exclude">
    <h2>Excluding files</h2>
    <p>Not the most useful feature development-wise, but you can exclude files by prefixing their name with an <strong>underscore</strong>, eg. <code class="language-none">_jquery-1.11.0.js</code>. A use-case might be that it would allow you to commit a file that isn&#39;t quite ready yet to a repository that you are working on with someone else. This way you can be sure it won&#39;t get in the way when the other persons builds the project on his machine.</p>


    <hr id="dependencies">
    <h2>Script dependencies</h2>
    <p>Scripts are <strong>automatically ordered alphabetically, and based on their location</strong> in the &quot;assets/js&quot; folder:</p>
    <ol>
        <li>The library, i.e. any &quot;ender*&quot; or &quot;jquery*&quot; prefixed file from the <code class="language-none">assets/js/libs</code> folder.</li>
        <li>All files of <code class="language-none">assets/js/libs/dev</code> (only when not building <code class="language-none">--production</code>).</li>
        <li>All the other files of <code class="language-none">assets/js/libs</code>.</li>
        <li>All the files of <code class="language-none">assets/js/core</code> (if present).</li>
        <li>All the remaining scripts, including <code class="language-none">assets/js/main.js</code>.</li>
        <li>The view-specific scripts (if provided).</li>
    </ol>
    <p>By <strong>prepending a simple comment inside of your files</strong>, it is possible to define specific dependencies within this order. Say you are working with <code class="language-none">libA.js</code> which needs <code class="language-none">libZ.js</code> to work correcly. To make sure <code class="language-none">libZ.js</code> is injected first, prepend the following to <code class="language-none">libA.js</code>:</p>
    <pre class="language-javascript"><code>// requires: libZ.js

/* 
Other code from libA here ...
*/</code></pre>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/sass-setup">Next step: Sass Setup</a></p>
</div>
@stop