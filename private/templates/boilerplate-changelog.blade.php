@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Boilerplate Changelog</h1>
</div>
<div class="wrapper wrapper--content">
	<p>Take a look at the changes that each boilerplate release brings below. Releases are hardcoded into Headstart releases to ensure backwards-compatibility.</p>
	<hr id="r120">
	<h2>1.2.0</h2>
	<ul>
		<li>Implemented <code class="language-none">$base-font-size</code> properly.</li>
		<li>Fixed default links to IE scripts.</li>
		<li>Removed source maps from Ender build to prevent browser console errors.</li>
		<li>Moved anti-aliasing into a state, which is now also being used by <code class="language-markup">&lt;button&gt;</code> and form elements.</li>
		<li>Dried out the <code class="language-sass">column()</code> mixin, resulting in less CSS. Big thanks to Team Sass for their <a href="https://github.com/team-sass/toolkit">Toolkit</a>.</li>
	</ul>
	<hr id="r110">
	<h2>1.1.0</h2>
	<ul>
		<li>Added <a href="http://css-tricks.com/better-box-sizing/">&quot;inherative box-sizing&quot;</a>.</li>
		<li>Added options for Headstart update v1.2.x.</li>
	</ul>
	<hr id="r102">
	<h2>1.0.2</h2>
	<ul>
		<li>Brought back in line with HTML5 Boilerplate.</li>
		<li>Small tweaks.</li>
	</ul>
	<hr id="r101">
	<h2>1.0.1</h2>
	<ul>
		<li>Initial hardcoded release.</li>
	</ul>
</div>
@stop
