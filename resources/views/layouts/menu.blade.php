<li class="{!! (Request::is('shared/qualificationTypes*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.qualificationTypes.index') }}">
        <span class="mm-text ">Qualification Types</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/salaryScales*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.salaryScales.index') }}">
        <span class="mm-text ">Salary Scales</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/schoolTypes*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.schoolTypes.index') }}">
        <span class="mm-text ">School Types</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/serviceExitTypes*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.serviceExitTypes.index') }}">
        <span class="mm-text ">Service Exit Types</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/settings*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.settings.index') }}">
        <span class="mm-text ">Settings</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/states*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.states.index') }}">
        <span class="mm-text ">States</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/terminationTypes*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.terminationTypes.index') }}">
        <span class="mm-text ">Termination Types</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

