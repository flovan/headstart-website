<nav class="content-menu @if($view === 'changelog' || $view === 'boilerplate-changelog')is-empty @endif @if($view === 'index')is-index @endif" id="content-menu">
	<div class="content-menu__wrapper wrapper">
		<button class="menu-toggle"><span class="icon--list"></span> Menu</button>

		@if($view === 'index')
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.headstart.io" data-text="Headstart, the easy-to-use automated front-end workflow." data-via="headstartio">Tweet</a>

		<div class="fb-share-button" data-href="http://headstart.io" data-type="button_count"></div>

		<iframe class="github-star-button" src="" allowtransparency="true" frameborder="0" scrolling="0" width="89" height="20"></iframe>
		@endif

		<div class="content-menu-item-wrapper">
			@if($view === 'installation')
			<hr>
			<ul>
				<li><a href="#installation">In&shy;stal&shy;lation</a></li>
				<li><a href="#requirements">Re&shy;quire&shy;ments</a></li>
			</ul>
			@endif
			@if($view === 'new-project')
			<hr>
			<ul>
				<li><a href="#introduction">In&shy;tro&shy;duction</a></li>
				<li><a href="#initialising">In&shy;i&shy;tial&shy;is&shy;ing</a></li>
				<li><a href="#customize">Cus&shy;tom&shy;is&shy;ing</a></li>
			</ul>
			@endif
			@if($view === 'building')
			<hr>
			<ul>
				<li><a href="#development">De&shy;vel&shy;op&shy;ment</a></li>
				<li><a href="#production">Pro&shy;duc&shy;tion</a></li>
				<li><a href="#configuration">Con&shy;fig&shy;u&shy;ra&shy;tion</a></li>
				<li><a href="#optional-configuration">Op&shy;tion&shy;al Con&shy;fig&shy;u&shy;ra&shy;tion</a></li>
			</ul>
			@endif
			@if($view === 'extra-services')
			<hr>
			<ul>
				<li><a href="#tunneling">Web Tun&shy;nel&shy;ing</a></li>
				<li><a href="#psi">Google Page&shy;speed In&shy;sights</a></li>
			</ul>
			@endif
			@if($view === 'base-setup')
			<hr>
			<ul>
				<li><a href="#default-structure">De&shy;fault Struc&shy;ture</a></li>
				<li><a href="#assets">As&shy;sets</a></li>
				<li><a href="#misc">Mis&shy;cel&shy;la&shy;ne&shy;ous</a></li>
			</ul>
			@endif
			@if($view === 'templating')
			<hr>
			<ul>
				<li><a href="#layout-partials">Lay&shy;out and Par&shy;tials</a></li>
				<li><a href="#pages">Pa&shy;ges</a></li>
				<li><a href="#target-pages">Tar&shy;get Pa&shy;ges</a></li>
			</ul>
			@endif
			@if($view === 'asset-conventions')
			<hr>
			<ul>
				<li><a href="#view-specific">View Spe&shy;cif&shy;ic Files</a></li>
				<li><a href="#exclude">Ex&shy;clud&shy;ing Files</a></li>
				<li><a href="#dependencies">Script De&shy;pend&shy;en&shy;cies</a></li>
			</ul>
			@endif
			@if($view === 'sass-setup')
			<hr>
			<ul>
				<li><a href="#structure">Fold&shy;er Struc&shy;ture</a></li>
				<li><a href="#prefixing">Pre&shy;fix&shy;ing</a></li>
				<li><a href="#base">Base files</a></li>
				<li><a href="#libs">Li&shy;brar&shy;y files</a></li>
				<li><a href="#mixin">Mixins</a></li>
				<li><a href="#module">Mod&shy;ules</a></li>
				<li><a href="#vendor">Ven&shy;dor files</a></li>
				<li><a href="#root">Root files</a></li>
			</ul>
			@endif
			@if($view === 'js-setup')
			<hr>
			<ul>
				<li><a href="#structure">Fold&shy;er Struc&shy;ture</a></li>
				<li><a href="#ie">IE</a></li>
				<li><a href="#libs">Li&shy;brar&shy;ies</a></li>
				<li><a href="#root">Root files</a></li>
			</ul>
			@endif
			@if($view === 'back-end-integration')
			<hr>
			<ul>
				<li><a href="#laravel">La&shy;ra&shy;vel In&shy;te&shy;gra&shy;tion</a></li>
				<li><a href="#other">Other In&shy;te&shy;gra&shy;tions</a></li>
			</ul>
			@endif
			@if($view === 'upgrading-guide')
			<hr>
			<ul>
				<li><a href="#hs-installation">Up&shy;grad&shy;ing Head&shy;start</a></li>
				<li><a href="#project-files">Up&shy;grad&shy;ing proj&shy;ect files</a></li>
			</ul>
			@endif
		</div>
	</div>
</nav>