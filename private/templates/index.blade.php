@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Headstart, the easy-to-use automated front-end workflow.</h1>
	<p>Headstart is an all-in-one task runner that frees front-end developers of the little worries that come along with modern web development. If you ever wanted to use tools like <a href="http://gruntjs.com/">Grunt</a> or <a href="http://gulpjs.com/">Gulp</a>, but found the configuration too troublesome, you will probably like this pre-configured setup better.</p>
</div>
<div class="wrapper wrapper--content">
	<p>
		<a href="{{URL::to('/')}}/getting-started" class="getting-started-link"><span class="icon--rocket"></span> Get started</a>
		<span> or </span>
		<a href="https://github.com/flovan/headstart/" class="check-github-link"><span class="icon--github"></span> View this project on Github</a>
	</p>
	<hr>
	<h2>Features</h2>
	<ul class="feature-list is-columned">
		<li>Command Line Interface (CLI)</li>
		<li>Scaffold new projects</li>
		<li>Customizable boilerplate</li>
		<li>Static file serving with automated reloading</li>
		<li>Simple templating</li>
		<li>Image optimization</li>
		<li>Sass compilation and minification</li>
		<li>Javascript concatenation and uglification</li>
		<li>CSS and Javascript revisioning</li>
		<li>Remove unused CSS through Uncss</li>
		<li>Validate your HTML through W3C</li>
		<li>Hint your Javascript</li>
		<li>Combine Media Queries</li>
		<li>Minify HTML</li>
		<li>Syncs your test setups through Browsersync</li>
		<li>Tunnel static files to the web</li>
		<li>Run projects through Google Pagespeed Insights</li>
	</ul>
	<hr>
	<h2>Open-source</h2>
	<p>An open-source project, built with open-source technology. Without the help of these projects, none of this would have been possible.</p>
	<p class="open-source-wrapper">
		<a class="open-source-link nodejs" href="http://nodejs.org/"><span class="is-hidden">Node.js</span></a>
		<a class="open-source-link liftoff" href="https://github.com/tkellen/node-liftoff"><span class="is-hidden">Liftoff</span></a>
		<a class="open-source-link gulp" href="http://gulpjs.com/"><span class="is-hidden">Gulp</span></a>
		<a class="open-source-link sass" href="http://sass-lang.com/"><span class="is-hidden">Sass</span></a>
		<a class="open-source-link handlebars" href="http://handlebarsjs.com/"><span class="is-hidden">Handlebars</span></a>
	</p>
	<hr id="contrib-support">
	<h2>Contribute and Support</h2>
	<p>If you want to stay up-to-date with the latest changes, follow <a href="https://twitter.com/headstartio">@headstartio</a> on Twitter.</p>
	<p>Questions? Bugs? Feature requests? Add them to the <a href="https://github.com/flovan/headstart/issues">issues page</a> on Github. Found a typo on the website, or feel like something could be explained better? Fork <a href="https://github.com/flovan/headstart-website">the website repo</a>, make your changes and send a Pull request.</p>
	<p class="report--info"><strong>Note:</strong> It is possible that some releases contain bugs due to the extensive feature set. I am planning to add some form of unit testing to prevent this, but I am still unsure on <em>how</em> to do that. If you like this project and know how to do this&mdash; with for example <a href="https://jasmine.github.io">Jasmine</a> or <a href="http://karma-runner.github.io/0.8/index.html">Karma</a>&mdash;feel free to help me out on that one. Various ways of contacting me can be found on <a href="http://flovan.me">my website</a>.</p>
</div>
@stop