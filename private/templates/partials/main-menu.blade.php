<menu class="menu sidebar__menu">
    <ul>
        <li><a @if($view === 'index')class="is-active" @endif href="{{URL::to('/')}}">Home &mdash; What &amp; Why</a></li>
        <li>
            <a href="{{URL::to('/')}}/installation">Getting started</a>
            <ul>
                <li><a @if($view === 'installation')class="is-active" @endif href="{{URL::to('/')}}/installation">Installation</a></li>
                <li><a @if($view === 'new-project')class="is-active" @endif href="{{URL::to('/')}}/new-project">New Project</a></li>
                <li><a @if($view === 'building')class="is-active" @endif href="{{URL::to('/')}}/building">Building</a></li>
                <li><a @if($view === 'extra-services')class="is-active" @endif href="{{URL::to('/')}}/extra-services">Extra Services</a></li>
            </ul>
        </li>
        <li>
            <a href="{{URL::to('/')}}/base-setup">Boilerplate</a>
            <ul>
                <li><a @if($view === 'base-setup')class="is-active" @endif href="{{URL::to('/')}}/base-setup">Base Setup</a></li>
                <li><a @if($view === 'templating')class="is-active" @endif href="{{URL::to('/')}}/templating">Templating</a></li>
                <li><a @if($view === 'asset-conventions')class="is-active" @endif href="{{URL::to('/')}}/asset-conventions">Asset Conventions</a></li>
                <li><a @if($view === 'sass-setup')class="is-active" @endif href="{{URL::to('/')}}/sass-setup">Sass Setup</a></li>
                <li><a @if($view === 'js-setup')class="is-active" @endif href="{{URL::to('/')}}/js-setup">Javascript Setup</a></li>
                <li><a @if($view === 'back-end-integration')class="is-active" @endif href="{{URL::to('/')}}/back-end-integration">Back-end Integration</a></li>    
                <li><a @if($view === 'boilerplate-changelog')class="is-active" @endif href="{{URL::to('/')}}/boilerplate-changelog">Changelog</a></li>
            </ul>
        </li>
        <li><a @if($view === 'upgrading-guide')class="is-active" @endif href="{{URL::to('/')}}/upgrading-guide">Upgrading Guide</a></li>
        <li><a @if($view === 'changelog')class="is-active" @endif href="{{URL::to('/')}}/changelog">Changelog</a></li>
        <li><a href="{{URL::to('/')}}/#contrib-support">Contributing &amp; Support</a></li>
        <li><a href="https://github.com/flovan/headstart/issues">Issues</a></li>
    </ul>
</menu>