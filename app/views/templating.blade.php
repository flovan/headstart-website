@extends('layout.main')

@section('content')
<div class="wrapper wrapper--intro">
	<h1>Templating</h1>
</div>
<div class="wrapper wrapper--content language-markup">
    <p class="content__introduction">Headstart combines a solid HTML foundation, based on the <a href="http://html5boilerplate.com/" title="Visit the HTML5 Boilerplate website">HTML5 Boilerplate</a>, with light templating support through <a href="http://handlebarsjs.com" title="Visit the Handlebars website">Handlebars</a>, making the task of managing menu structures, sidebars or footers across multiple pages a lot les intensive.</p>

    <hr id="layout-partials">
    <h2>Layout and Partials</h2>
    <p>Using layouts is completely optional, but by default you are provided with <code class="language-none">header.html</code> and <code class="language-none">footer.html</code> layout parts to lighten up your main content files.</p>
    <p>Partials can be used for extracting any piece of your HTMLto make it reusable. For example, a footer with a link might look like <code class="language-none">templates/partials/page_footer.html</code>:</p>
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
    <p>It is possible to make small changes to the templates for an individual page by using this equal statement:</p>
    <pre><code>&#123;&#123;#equal templateName 'your-page.html'&#125;&#125;
&lt;!-- Some HTML here --&gt;
&#123;&#123;/equal&#125;&#125;</code></pre>
    <hr>
    <p><a class="next-chapter-button" href="{{URL::to('/')}}/asset-conventions">Next step: Asset Conventions</a></p>
</div>
@stop