@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
    <h1>Base Setup</h1>
</div>
<div class="wrapper wrapper--content" id="default-structure">
    <h2>Default structure</h2>
    <p>Headstart employs a clean folder structure, and manages the included bits and pieces for you.<br>Here&#39;s what&#39;s you get by default:</p>
    <ul>
        <li><code class="language-none">config.json</code> &#126; A configuration file used by the building engine. More information <a href="{{URL::to('/')}}/building#configuration">here</a>.</li>
        <li><code class="language-none">assets</code> &#126; Script, styles, images, etc.</li>
        <li><code class="language-none">templates</code> &#126; HTML templates. More information <a href="{{URL::to('/')}}/templating">here</a>.</li>
        <li><code class="language-none">misc</code> &#126; Extra files that should end up in the root directory.</li>
        <li><code class="language-none">.jshintrc</code> &#126; A configuration file for the syntax checker, <a href="http://www.jshint.com/docs/options/">JSHint</a>.</li>
    </ul>

    <hr id="assets">
    <h2>Assets</h2>
    <p>The <code class="language-none">assets</code> folder contains your scripts, styles, images, and other files such as fonts, videos, etc. By default, the following folders will be present:</p>
    <ul>
        <li><code class="language-none">images</code> &#126; Empty, aside from some placeholder icons.</li>
        <li><code class="language-none">js</code> &#126; A basic setup to get you started. More on that in the <a href="{{URL::to('/')}}/js-guide">JS guide</a>.</li>
        <li><code class="language-none">sass</code> &#126; A basic setup to get you started. More on that in the <a href="{{URL::to('/')}}/css-guide">CSS guide</a>.</li>
    </ul>
    <p class="report--info"><strong>Note:</strong> when using non-default folders, eg. <code>fonts</code>, a restart is required whenever nested files are added or edited.</p>

    <hr id="misc">
    <h2>Miscellaneous</h2>
    <p>The <code class="language-none">misc</code> directory contains files that will only be added when making a <a href="{{URL::to('/')}}/building#production">production ready build</a>. This is what you&#39;ll find inside of it:</p>
    <ul>
        <li><code class="language-none">browserconfig.xml</code> &#126; A configuration file for Windows tiles. More info <a href="http://msdn.microsoft.com/en-us/library/ie/dn455106.aspx">here</a>.</li>
        <li><code class="language-none">crossdomain.xml</code> &#126; A policy file to restrict access to assets. More info <a href="www.adobe.com/devnet/articles/crossdomain_policy_file_spec.html">here</a>.</li>
        <li><code class="language-none">htaccess.txt</code> &#126; Apache configuration file disguised as an easily editeable (and visible!) <code class="language-none">.txt</code> file that will get converted to a valid <code class="language-none">.htaccess</code> file during the production build process. More info <a href="https://github.com/h5bp/server-configs-apache">here</a>.</li>
        <li><code class="language-none">humans.txt</code> &#126; <em>We are people, not machines!</em> More info <a href="http://humanstxt.org/">here</a>.</li>
        <li><code class="language-none">robots.txt</code> &#126; A behaviour sheet for robots and content spiders. More info <a href="http://www.robotstxt.org/">here</a>.</li>
    </ul>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/templating">Next step: Templating</a></p>
</div>
@stop
