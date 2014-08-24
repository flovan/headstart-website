@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Templating</h1>
</div>
<div class="wrapper wrapper--content language-markup">
    <p class="content__introduction">Headstart combines a solid HTML foundation, based on the <a href="http://html5boilerplate.com/" title="Visit the HTML5 Boilerplate website">HTML5 Boilerplate</a>, with light templating support through <a href="http://handlebarsjs.com" title="Visit the Handlebars website">Handlebars</a>, making the task of managing menu structures, sidebars or footers across multiple pages a lot les intensive.</p>
    <p class="report--warning"><strong>Note:</strong> Using ember in combination with Headstart <a href="https://github.com/flovan/headstart/issues/26">will break the templating functionality</a>.</p>

    <hr id="layout-partials">
    <h2>Layout and Partials</h2>
    <p>Using layouts is completely optional, but by default you are provided with <code class="language-none">header.html</code> and <code class="language-none">footer.html</code> layout parts to lighten up your main content files.</p>
    <p>You can easily extract any piece of your HTML, and put it in a partial. Footer links, for example, might look like <code class="language-none">templates/partials/page_footer.html</code>:</p>
    <pre><code>&lt;footer&gt;
&lt;a href=&quot;thebestpage.html&quot;&gt;This is a great link to click on&lt;/a&gt;
&lt;/footer&gt;</code></pre>

    <hr id="pages">
    <h2>Putting your pages together</h2>
    <p>This is how the default index page would look like when using the <code class="language-none">page_footer.html</code> partial that was mentioned above:</p>
    <pre><code>&#123;&#123;&gt; layout/header&#125;&#125;

&lt;!-- Your HTML here --&gt;
&lt;p&gt;Welcome to Headstart, off you go!&lt;/p&gt;

&#123;&#123;&gt; partials/page_footer&#125;&#125;
&#123;&#123;&gt; layout/footer&#125;&#125;</code></pre>

    <hr id="target-pages">
    <h2>Targeted individual pages</h2>
    <p>It is possible to tell the building engine to make small changes to the HTML for each page by using this equal statement:</p>
    <pre><code>&#123;&#123;#equal templateName 'your-page.html'&#125;&#125;&#123;&#123;/equal&#125;&#125;</code></pre>
    <p>Have you noticed how the submenu items on this website change for each different page? Here is an extract of the <code class="language-none">submenu.html</code> partial:</p>
    <pre><code>&lt;nav class=&quot;content-menu&quot;&gt;
&lt;button class=&quot;menu-toggle&quot;&gt;&lt;span class=&quot;icon--list&quot;&gt;&lt;/span&gt; Menu&lt;/button&gt;
&lt;!-- --&gt;
&#123;&#123;#equal templateName 'installation.html'&#125;&#125;
&lt;div class=&quot;content-menu-wrapper&quot;&gt;
    &lt;hr&gt;
    &lt;ul&gt;
        [...]
    &lt;/ul&gt;
&lt;/div&gt;
&#123;&#123;/equal&#125;&#125;
&lt;!-- --&gt;
[...]
&lt;/nav&gt;</code></pre>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/asset-conventions">Next step: Asset Conventions</a></p>
</div>
@stop