<li class="{!! (Request::is('humanresource/employeeLanguages*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeLanguages.index') }}">
        <span class="mm-text ">Employee Languages</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeLocalLeaves*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeLocalLeaves.index') }}">
        <span class="mm-text ">Employee Local Leaves</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeNextOfKins*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeNextOfKins.index') }}">
        <span class="mm-text ">Employee Next Of Kins</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeePublicServices*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeePublicServices.index') }}">
        <span class="mm-text ">Employee Public Services</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('employeePublicServices*') ? 'active' : '' ) !!}">
    <a href="{{ route('employeePublicServices.index') }}">
        <span class="mm-text ">Employee Public Services</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeQualifications*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeQualifications.index') }}">
        <span class="mm-text ">Employee Qualifications</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/relationships*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.relationships.index') }}">
        <span class="mm-text ">Relationships</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employees*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employees.index') }}">
        <span class="mm-text ">Employees</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

