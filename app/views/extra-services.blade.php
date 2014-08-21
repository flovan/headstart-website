@extends('layout.main')

@section('content')
@include('partials.sub-menu')
<div class="wrapper wrapper--intro">
	<h1>Extra Services</h1>
</div>
<div class="wrapper wrapper--content" id="tunneling">
	<h2>Web tunneling</h2>
	<p>Headstart makes it possible to <strong>expose your local web server to the internet</strong>. This way you can share whatever you&#39;re building with the world without the need for fiddling with a server or FTP. To use it, add the &quot;--tunnel&quot; flag to your build instruction. You&#39;ll see a public access url being written out in your command line window. Example usage:</p>
	<pre class="language-none"><code>headstart build --serve --tunnel</code></pre>
	<p>But it doesn&#39;t stop here! If you navigate your browser to <strong>http://localhost:4040</strong>, you&#39;ll be able to inspect and replay the incoming HTTP traffic which can help you find out where the bottlenecks are.</p>
	<p>Shout-out to <a href="https://inconshreveable.com">Alan Shreve</a>, the creator of <a href="http://ngrok.com">ngrok</a>, for making this possible.</p>

	<hr id="psi">
	<h2>Google Pagespeed Insights</h2>
	<p>To make sure your project is performing at its best, it is advised to run your files through Google&#39;s <a href="https://developers.google.com/speed/pagespeed/insights/">Pagespeed Insights</a> to check if there are any optimizations to be made.</p>
	<p>Headstart comes with a command line version of their service, which you can use by appending the &quot;--psi&quot; flag to your build instructions. By default, this will run your served files against the desktop strategy, but you can change this by adding &quot;--strategy=mobile&quot; as an extra flag. Example usage:</p>
	<pre class="language-none"><code>headstart build --serve --psi --strategy=mobile</code></pre>
	<hr>
	<p><a class="next-chapter-button" href="base-setup.html">Next step: A closer look at the boilerplate</a></p>
</div>
@stop