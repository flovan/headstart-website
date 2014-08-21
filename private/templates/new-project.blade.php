@extends('layout.main')

@section('content')
@include('partials.sub-menu')
<div class="wrapper wrapper--intro">
	<h1>New project</h1>
</div>
<div class="wrapper wrapper--content" id="introduction">
    <h2>Introduction</h2>
    <p>Let&#39;s assume you just sat through <a href="{{URL::to('/')}}/installation">the installation process</a>, and now you want to intitialise a new project for you to work on. You will be using the command line again to <strong>create a new folder</strong>.</p>
    <pre class="language-none"><code>cd some/where/on/you/computer
mkdir myproject
cd myproject</code></pre>
    <p>The commands above instructed the command line to point to a certain location on your computer, make a folder called <code class="language-none">myproject</code> and to go into it.</p>
    <p><strong>If you don&#39;t feel comforteable traversing your filesystem like this</strong>, you can achieve the same result by (on a Mac) dragging any folder onto the Command Line icon, or (on a Windows machine) right clicking any folder while holding the Shift key and choosing &quot;Open command window from here&quot;.</p>


    <hr id="initialising">
    <h2>Initialising a project</h2>
    <p>To start a new project in the folder that you just created, you have to instruct Headstart to populate it with <a href="{{URL::to('/')}}/base-setup">the default boilerplate files</a>.</p>
    <pre class="language-none"><code>headstart init</code></pre>
    <p>This will fetch the files directly from Github (each release of Headstart comes with a hardcoded default version) into a <code class="language-none">.tmp</code> folder, extract them, and clean up afterwards. You don&#39;t have to worry about losing any files, though. If your command line isn&#39;t pointing at an empty folder, it will ask you what to do&mdash;twice!&mdash;so that you don&#39;t delete any files by accident.</p>
    <p>When the downloading and extraction have completed, you will be asked a few yes-or-no questions to help you get started even faster. If you don&#39;t want to do this just yet, just type <code class="language-none">n</code>, hit enter, and you&#39;ll be left alone.</p>


    <hr id="customize">
    <h2>Customising the boilerplate files</h2>
    <p>If you want to make changes to <a href="{{URL::to('/')}}/base-setup">the default boilerplate</a>, you can <a href="https://github.com/flovan/headstart-boilerplate">fork the Github repo</a> and use your own repository to initialise your projects. Make sure to replace &quot;gituser/repo&quot; with your username and repo.</p>
    <pre class="language-none"><code>headstart init --base gituser/repo</code></pre>
    <div class="report--warning">
        <p><strong>Headstart enforces a few naming and folder conventions to work properly, but (almost) every file is delete key friendly content-wise.</strong> Here&#39;s what you should keep in mind before you start trashing about:</p>
        <ul>
            <li>Folder structures and names are needed to do the grunt work for you. Renaming or removing any folder will likely break some things / all of the things.</li>
            <li>Don&#39;t remove <code class="language-none">config.json</code> or <code class="language-none">.jshintrc</code>.</li>
            <li>All Sass files and subfolders can be removed, except for <code class="language-none">main.scss</code> and any <code class="language-none">view-*.scss</code> file.</li>
            <li>All JS files can be removed, except for <code class="language-none">main.js</code> and any <code class="language-none">view-*.js</code> file. Folder structure is important, so keep things like <code class="language-none">libs</code> or <code class="language-none">ie/head</code> in place.</li>
            <li>Only <code class="language-none">templates/layout</code> and <code class="language-none">templates/partials</code> can be used for templating. You don&#39;t <em>have</em> to use them, but using other folders won&#39;t yield any result (unless you are using some kind of <a href="{{URL::to('/')}}/back-end-integration">back-end integration</a>).</li>
        </ul>
    </div>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/building">Next step: Building your project</a></p>
</div>
@stop
