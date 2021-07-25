<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><span>Users</span></a>
</li>

<li class="{!! Request::is('shared/qualificationTypes*') ? 'active' : '' !!}">
    <a href="{{ route('shared.qualificationTypes.index') }}">
        <span class="mm-text ">Qualification Types</span>
    </a>
</li>
<li class="{!! Request::is('humanresource/employeeTerminations*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeTerminations.index') }}">
        <span class="mm-text ">Employee's Terminations</span> </a>
</li>
<li class="{!! Request::is('humanresource/employeeCertificates*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeCertificates.index') }}">
        <span class="mm-text ">Employee's Certificates</span> </a>
</li>
<li class="{!! Request::is('humanresource/employeeLanguages*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeLanguages.index') }}">
        <span class="mm-text ">Employee's Languages</span> </a>
</li>
<li class="{!! Request::is('humanresource/employeeRecordTrackers*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeRecordTrackers.index') }}">
        <span class="mm-text ">Employee's Record Trackers</span> </a>
</li>
<li class="{!! Request::is('humanresource/salaryScales*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.salaryScales.index') }}"> <span class="mm-text ">Salary Scales</span> </a>
</li>

<li class="{!! Request::is('shared/schoolTypes*') ? 'active' : '' !!}">
    <a href="{{ route('shared.schoolTypes.index') }}">
        <span class="mm-text ">School Types</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeWives*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeWives.index') }}">
        <span class="mm-text ">Employee Wives</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeLocalLeaves*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeLocalLeaves.index') }}">
        <span class="mm-text ">Employee Local Leaves</span></a>
</li>
<li class="{!! Request::is('shared/countries*') ? 'active' : '' !!}">
    <a href="{{ route('shared.countries.index') }}">
        <span class="mm-text ">Countries</span>

    </a>
</li>

<li class="{!! Request::is('humanresource/employeeActionSheets*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeActionSheets.index') }}">
        <span class="mm-text ">Employee's Action Sheets</span>

    </a>
</li>

<li class="{!! Request::is('shared/serviceExitTypes*') ? 'active' : '' !!}">
    <a href="{{ route('shared.serviceExitTypes.index') }}">
        <span class="mm-text ">Service Exit Types</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeWives*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeWives.index') }}">
        <span class="mm-text ">Employee's Wives</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeChildrens*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeChildrens.index') }}">
        <span class="mm-text ">Employee's Children</span></a>
</li>
<li class="{!! Request::is('humanresource/employeePublicServices*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeePublicServices.index') }}">
        <span class="mm-text ">Employee Public Services</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeAddresses*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeAddresses.index') }}">
        <span class="mm-text ">Employee's Addresses</span>

    </a>
</li>

<li class="{!! Request::is('shared/settings*') ? 'active' : '' !!}">
    <a href="{{ route('shared.settings.index') }}">
        <span class="mm-text ">Settings</span></a>
</li>
<li class="{!! Request::is('shared/fileDirectories*') ? 'active' : '' !!}">
    <a href="{{ route('shared.fileDirectories.index') }}">
        <span class="mm-text ">File Directories</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeEducations*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeEducations.index') }}">
        <span class="mm-text ">Employee's Educations</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeCensures*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeCensures.index') }}">
        <span class="mm-text ">Employee's Censures</span>

    </a>
</li>

<li class="{!! Request::is('shared/states*') ? 'active' : '' !!}">
    <a href="{{ route('shared.states.index') }}">
        <span class="mm-text ">States</span></a>
</li>
<li class="{!! Request::is('shared/fileTypes*') ? 'active' : '' !!}">
    <a href="{{ route('shared.fileTypes.index') }}">
        <span class="mm-text ">File Types</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeForceServices*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeForceServices.index') }}">
        <span class="mm-text ">Employee's Force Services</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeQualifications*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeQualifications.index') }}">
        <span class="mm-text ">Employee's Qualifications</span></a>
</li>
<li class="{!! Request::is('shared/certificateTypes*') ? 'active' : '' !!}">
    <a href="{{ route('shared.certificateTypes.index') }}">
        <span class="mm-text ">Certificate Types</span>

    </a>
</li>

<li class="{!! Request::is('humanresource/terminationTypes*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.terminationTypes.index') }}">
        <span class="mm-text ">Termination Types</span></a>
</li>
<li class="{!! Request::is('shared/languages*') ? 'active' : '' !!}">
    <a href="{{ route('shared.languages.index') }}">
        <span class="mm-text ">Languages</span></a>
</li>
<li class="{!! Request::is('shared/relationships*') ? 'active' : '' !!}">
    <a href="{{ route('shared.relationships.index') }}">
        <span class="mm-text ">Relationships</span></a>
</li>
<li class="{!! Request::is('shared/localGovtAreas*') ? 'active' : '' !!}">
    <a href="{{ route('shared.localGovtAreas.index') }}">
        <span class="mm-text ">Local Govt Areas</span>

    </a>
</li>

{{-- <li class="{!! Request::is('shared/maritalStatuses*') ? 'active' : '' !!}">
    <a href="{{ route('shared.maritalStatuses.index') }}">
        <span class="mm-text ">Marital Statuses</span></a>
</li> --}}

<li class="{!! Request::is('humanresource/employeeGratuities*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeGratuities.index') }}">
        <span class="mm-text ">Employee's Gratuities</span></a>
</li>
<li class="{!! Request::is('humanresource/employees*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employees.index') }}">
        <span class="mm-text ">Employees</span></a>
</li>
<li class="{!! Request::is('humanresource/employeeForeignTours*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employeeForeignTours.index') }}">
        <span class="mm-text ">Employee's Foreign Tours</span></a>
</li>
<li class="{!! Request::is('shared/rankTypes*') ? 'active' : '' !!}">
    <a href="{{ route('shared.rankTypes.index') }}">
        <span class="mm-text ">Rank Types</span>

    </a>
</li>

<li class="{!! Request::is('humanresource/leaveTypes*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.leaveTypes.index') }}">
        <span class="mm-text ">Leave Types</span>

    </a>
</li>
<li class="{!! (Request::is('humanresource/employeeNextOfKins*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeNextOfKins.index') }}">
        <span class="mm-text ">Employee's Next Of Kins</span>
    </a>
</li>

