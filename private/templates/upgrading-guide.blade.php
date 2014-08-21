@extends('layout.main')

@section('content')
@include('partials.sub-menu')
<div class="wrapper wrapper--intro">
	<h1>Upgrading Guide</h1>
</div>
<div class="wrapper wrapper--content language-none">
	<p>Newer is (always) better! Follow the guides below to upgrad

	<hr id="hs-installation">
	<h2>Upgrading Headstart</h2>
	<p>Upgrading is easy through NPM. You might need <code class="language-none">sudo</code> rights for this.</p>
	<pre class="language-none"><code>npm update -g headstart</code></pre>


	<hr id="project-files">
	<h2>Upgrading project files</h2>
	<p>Newer versions of Headstart might require some changes to your project setup. If you upgraded your installation, it is advised to upgrade your project or forked boilerplate as well.</p>
	<h3>Set up git</h3>
	<p>Since the downloaded boilerplate files aren&#39;t linked to git, you need to initialize.</p>
	<pre class="language-none"><code>cd my/project/folder
git init</code></pre>
	<p>Then, add and commit your local files so you can merge later on:</p>
	<pre class="language-none"><code>git add -A
git commit -m "local"</code></pre>
	<h3>Add a remote</h3>
	<p>Next step for your &quot;repository&quot; is to add a remote that points to the upstream repository on Github:</p>
	<pre class="language-none"><code>git remote add upstream https://github.com/flovan/headstart-boilerplate.git</code></pre>
	<p>You can check to see if it has been added by running:</p>
	<pre class="language-none"><code>git remote -v</code></pre>
	<h3>Fetch and merge changes</h3>
	<p>Next up is fetching the latest changes:</p>
	<pre class="language-none"><code>git fetch upstream</code></pre>
	<p>This will pull the branches from the default boilerplate repository down. You can now merge your local copy with the fetched files, without losing your local changes:</p>
	<pre class="language-none">git checkout master
git merge upstream/master<code></code></pre>
	<p>Git will now go over all the files, and try to auto-merge changes. It is quite normal that &quot;CONFLICT&quot;s appear in the output. This just means you will have to manually inspect and merge the changes.</p>
	<p>To see a better overview on newly added and changed files, run:</p>
	<pre class="language-none"><code>git log</code></pre>
	<p>And copy the commit hash&mdash;which will be a random string of letters and numbers&mdash;from the output. For example <code class="language-none">a2b739325c0e43250fa9374bcf2113e65379c3cf</code>. Then run:</p>
	<pre class="language-none"><code>git diff --name-status &lt;copiedHashGoesHere&gt;</code></pre>
	<p>Lines starting with &quot;A&quot; are newly added files. Lines starting with &quot;M&quot; indicate modified files that will need inspecting. Git will have added markers in each conflicting file so you can easily compare and fix issues:</p>
	<pre class="language-none"><code>&lt;&lt;&lt;&lt;&lt;&lt;&lt; HEAD
// YOUR LOCAL CODE
=======
// CODE FROM UPSTREAM
&gt;&gt;&gt;&gt;&gt;&gt;&gt; upstream/master</code></pre>
	<p>You can go up and down the list with your arrow keys, and quit by typing <code class="language-none">q</code>. After checking all files and fixing merge issues, your project should be all set to run with the latest version of Headstart.</p>
</div>
@stop