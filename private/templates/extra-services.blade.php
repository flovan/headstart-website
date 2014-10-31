@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Extra Services</h1>
</div>
<div class="wrapper wrapper--content" id="tunneling">
	<h2>Web tunneling</h2>
	<p>Headstart makes it possible to <strong>expose your local web server to the internet</strong>. This way you can share whatever you&#39;re building with the world without the need for fiddling with a server or FTP. To use it, add the <code class="language-none">--tunnel</code> flag to your build instruction. You&#39;ll see a public access url being written out in your command line window. Example usage:</p>
	<pre class="language-none"><code>headstart build --serve --tunnel</code></pre>
	<p>Or you can use the shorthand version:</p>
	<pre class="language-none"><code>hs build --s --t</code></pre>
	<p>You can also try reserving a custom subdomain for your tunnel (if it is available at that time), by assigning a value to the tunnel flag. For example to get <code class="language-none">http://cool-project.localtunnel.me</code>, run:</p>
	<pre class="language-none"><code>hs build --s --t=cool-project</code></pre>
	<p>This is made possible through <a href="http://www.browsersync.io">BrowserSync</a> by <a href="https://twitter.com/shaneosbourne">Shane Osbourne</a>.</p>
	<p class="report--warning"><strong>Note:</strong> This works great for static projects, but might not work as expected when dealing with an <a href="{{URL::to('/')}}/back-end-integration">integrated back-end</a>. Please report any issues you are having, as some might be easy to resolve.</p>

	<hr id="psi">
	<h2>Google Pagespeed Insights</h2>
	<p>To make sure your project is performing at its best, it is advised to run your files through Google&#39;s <a href="https://developers.google.com/speed/pagespeed/insights/">Pagespeed Insights</a> to check if there are any optimizations to be made.</p>
	<p>Headstart comes with a command line version of their service, which you can use by appending the <code class="language-none">--psi</code> flag to your build instructions. By default, this will run your served files against the desktop strategy, but you can change this by adding <code class="language-none">--strategy=mobile</code>; as an extra flag. Example usage:</p>
	<pre class="language-none"><code>headstart build --serve --psi --strategy=mobile</code></pre>
	<hr>
	<p><a class="next-chapter-button" href="base-setup.html">Next step: A closer look at the boilerplate</a></p>
</div>
@stop