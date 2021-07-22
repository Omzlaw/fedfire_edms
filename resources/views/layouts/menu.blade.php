<li class="{!! (Request::is('humanresource/employeeRecordTrackers*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeRecordTrackers.index') }}">
        <span class="mm-text ">Employee Record Trackers</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/countries*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.countries.index') }}">
        <span class="mm-text ">Countries</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeActionSheets*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeActionSheets.index') }}">
        <span class="mm-text ">Employee Action Sheets</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeAddresses*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeAddresses.index') }}">
        <span class="mm-text ">Employee Addresses</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeCensures*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeCensures.index') }}">
        <span class="mm-text ">Employee Censures</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/certificateTypes*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.certificateTypes.index') }}">
        <span class="mm-text ">Certificate Types</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/localGovtAreas*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.localGovtAreas.index') }}">
        <span class="mm-text ">Local Govt Areas</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeForeignTours*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeForeignTours.index') }}">
        <span class="mm-text ">Employee Foreign Tours</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

