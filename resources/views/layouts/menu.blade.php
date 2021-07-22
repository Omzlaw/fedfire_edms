<li class="{!! (Request::is('humanresource/employeeCertificates*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeCertificates.index') }}">
        <span class="mm-text ">Employee Certificates</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeChildrens*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeChildrens.index') }}">
        <span class="mm-text ">Employee Childrens</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeEducations*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeEducations.index') }}">
        <span class="mm-text ">Employee Educations</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeForceServices*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeForceServices.index') }}">
        <span class="mm-text ">Employee Force Services</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>


<li class="{!! (Request::is('humanresource/employeeGratuities*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeGratuities.index') }}">
        <span class="mm-text ">Employee Gratuities</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

