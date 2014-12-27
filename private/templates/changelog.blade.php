@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Changelog</h1>
</div>
<div class="wrapper wrapper--content">
	<p>Take a look at the changes that each release brings below.</p>
    <hr id="r132">
    <h2>1.3.2</h2>
    <ul>
        <li>Reintroduced console output on file changes to show that <em>things are working</em>.</li>
        <li>Added an optional configuration setting that enables <a href="{{URL::to('/')}}/building#optional-configuration">using a different name for the assets folder</a>.</li>
    </ul>
    <hr id="r131">
    <h2>1.3.1</h2>
    <ul>
        <li>Fixed a bug that prevented the browser from reloading when changes were made.</li>
    </ul>
    <hr id="r130">
    <h2>1.3.0</h2>
    <ul>
        <li>Removed revisioning of non-default files such as fonts, videos, etc. because there is no automated way (yet) of updating references elsewhere.</li>
        <li>Switched tunneling to <a href="http://localtunnel.me">Localtunnel</a> through <a href="http://browsersync.io">Browsersync</a>.</li>
        <li>A custom tunnel can now be set through the `--tunnel` flag.</li>
        <li>Added more optional configuration settings:
            <ul>
                <li>A <code class="language-none">proxy</code> can now be set to enable live changes with a different host (think MAMP of XAMP).</li>
                <li>A <code class="language-none">port</code> can now be set if you already have something running on the default <code class="language-none">3000</code>.</li>
                <li>The HTML minifier behaviour can now be <a href="{{URL::to('/')}}/building#optional-configuration">finetuned to your preferences</a>.</li>
            </ul>
        </li>
        <li>Added a progress bar to the build process.</li>
        <li>Bugfixes</li>
    </ul>
    <hr id="r123">
    <h2>1.2.3</h2>
    <ul>
        <li>Fix for missing view-specific JS files.</li>
    </ul>
	<hr id="r122">
    <h2>1.2.2</h2>
    <ul>
        <li>Fix for missing module error.</li>
    </ul>
    <hr id="r121">
    <h2>1.2.1</h2>
    <ul>
        <li>Fix for the missing CSS in <code class="language-none">--production</code> mode.</li>
    </ul>
    <hr id="r120">
    <h2>1.2.0</h2>
    <ul>
        <li>Shorthand commands! Run <code class="language-none">hs</code> to see them all.</li>
        <li>Added an option to revision CSS and JS files for better browser caching.</li>
        <li>Made it possible to tunnel your local server to the web through <a href="http://ngrok.com">ngrok</a>.</li>
        <li>Baked in <a href="https://developers.google.com/speed/pagespeed/insights/">Google Pagespeed Insights</a> so you can quickly check your score while developing.</li>
    </ul>
    <hr id="r114">
    <h2>1.1.4</h2>
    <ul>
        <li>Better livereloading with <a href="http://browsersync.io">Browsersync</a>. Clicks and scrolls will now be synchronised across clients!</li>
        <li>You now get a notification once a day (during usage) if a new update is available.</li>
        <li>You can now reference branches or releases when using <code class="language-none">init --base</code>.</li>
        <li>Replaced regex that stripped out <code class="language-javascript">console.log()</code> statements with a proper module (thanks <a href="https://github.com/sindresorhus">Sindre</a>).</li>
        <li>Included a fix for a bug that occured when using <code class="language-none">init</code> on an external drive.</li>
        <li>Cleaned up CLI.</li>
    </ul>
    <hr id="r113">
    <h2>1.1.3</h2>
    <ul>
        <li>Fixed installation bug.</li>
        <li>Reintroduced conditional comments.</li>
        <li>IE scripts now get separated based on where they need to be used (header or end of body).</li>
    </ul>
    <hr id="r112">
    <h2>1.1.2</h2>
    <ul>
        <li>Fixed the bug that prevented the live-reloading after a Sass error occurred.</li>
    </ul>
    <hr id="r111">
    <h2>1.1.1</h2>
    <ul>
        <li>Made Uncss optional as it usually needs configuration to work correctly.</li>
    </ul>
    <hr id="r110">
    <h2>1.1.0</h2>
    <ul>
        <li><a href="https://github.com/giakki/uncss" title="Visit the Github page of Uncss">Uncss</a> was added to the production mode</li>
        <li>Image optimization was moved to production mode</li>
        <li>New documentation</li>
        <li>Better templating through Handlebars</li>
    </ul>
    <hr id="r100">
    <h2>1.0.0</h2>
    <p>Initial release.</p>
</div>
@stop