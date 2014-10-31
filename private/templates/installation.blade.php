@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Installation</h1>
</div>
<div class="wrapper wrapper--content" id="installation">
    <h2>Installing Headstart</h2>
    <p class="report--warning"><strong>First time users:</strong> Headstart runs on NodeJS and uses Sass for compilation. Make sure your system meets <a href="getting-started.html#requirements">the requirements</a> before continuing.</p>
    <p>Headstart lives in the command line. If you&#39;ve never opened or worked with it before, don&#39;t worry about it too much. You&#39;ll only be using it to pass in installation and build instructions.</p>
    <p>Open up any command line application and <strong>install Headstart globally</strong>. Using <code class="language-none">-g</code> will enable usage of the build commands from any directory.</p>
    <pre class="language-none"><code>npm install -g headstart</code></pre>
    <p>If you get a <strong>Permission denied</strong> or <strong>Error: EACCES</strong> error, you should run the previous command again in <strong>sudo</strong>:</p>
    <pre class="language-bash"><code>sudo npm install -g headstart</code></pre>
    <p>There is <a href="http://blog.hood.ie/2014/02/why-you-shouldnt-use-sudo-with-npm/">some</a> <a href="http://stackoverflow.com/questions/16724259/npm-command-sudo-or-not">discussion</a> about whether or not usage of sudo is a <em>good thing</em>, but it&#39; the easiest way to get around it. If you are working on a shared machine, it might be good to look into an alternative solution.</p>
    <p>When NPM finishes downloading and installing Headstart and all of its dependencies (grab a coffee!), run the following command to <strong>get a quick overview</strong> of all the available commands:</p>
    <pre class="language-none"><code>headstart</code></pre>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/new-project">Next step: Starting a new project</a></p>


    <hr id="requirements">
    <h2>Requirements</h2>
    <p>Headstart is built with open-source software, so you are required to install a few things before you can get started. But that&#39;s only small trade-off for all the benefits you get!</p>
    
    <h3 id="commandline">Command Line</h3>
    <p>Headstart can be used through a Command Line Interface (CLI). Depending on your Operating System, you will probably end up using one of following command line applications:</p>
    <ul>
        <li>OS X: <strong>Terminal.app</strong> &#126; Applications/Utilities</li>
        <li>Windows: <strong>Command Prompt</strong> &#126; Start &gt; All Programs &gt; Accessories &gt; Command Prompt</li>
        <li>Linux: <strong>Shell Prompt</strong> &#126; You&#39;re using Linux, so you should know where to find it!</li>
    </ul>
    
    <h3 id="ruby">Ruby</h3>
    <p>Check if you have Ruby installed by running:</p>
    <pre class="language-none"><code>ruby -v</code></pre>
    <p>If any version of Ruby is printed out, you are good to go. If you see <strong>command not found</strong> appear, you can <a href="https://www.ruby-lang.org/en/installation/" target="_blank" title="Read the Ruby installation guide">follow the instructions on this page</a> to install Ruby.</p>
    
    <h3 id="sass">Sass</h3>
    <p>Sass is used to compile <code>.scss</code> files into CSS. You can check if Sass has been installed by running:</p>
    <pre class="language-none"><code>sass -v</code></pre>
    <p>If any version of Sass is printed out, you are good to go. If you see <strong>command not found</strong> appear, you can install Sass by running:</p>
    <pre class="language-none"><code>gem install sass</code></pre>
    
    <h3 id="node-npm">NodeJS and NPM</h3>
    <p>NodeJS is usd to run the modules that make up Headstart. NPM (Node Packaged Modules) is the package manager that comes with Node.</p>
    <p>You can download the appropriate installer through <a href="http://nodejs.org/download/" title="Go to the NodeJS download page"> the NodeJS website</a>.</p>

    <h3 id="git">Git</h3>
    <p>Some NodeJS module authors aren&#39;t as responsive as others, so some Headstart updates might retrieve modules directly from Github, rather than through NPM. For this reason, it is advised to install Git. You can check if you have it installed by running:</p>
    <pre class="language-none"><code>git --version</code></pre>
    <p>If any version of Git is printed out, you are good to go. If you see <strong>command not found</strong> appear, you can <a href="http://git-scm.com" target="_blank" title="Read the Ruby installation guide">download the installer through the Git website</a>.</p>

    <h3 id="xcode-clt">Command Line Tools</h3>
    <p>Not as much a requirement, but included here just in case. If you work with a Mac, it is possible that you&#39;ll be asked to install the Command Line tools through Xcode. Don&#39; worry though, there is a way to install them without getting your hands on the full application:</p>
    <pre class="language-none"><code>xcode-select --install</code></pre>
    <p>This will open up a Software Update pop-up that will do the searching and installing for you. Just hit install and let it do its job.</p>

    <h3>That&#39;s all!</h3>
    <p>Once your machine meets all of the requirements, <a href="#installation">jump back up and install Headstart</a>!</p>
</div>
@stop