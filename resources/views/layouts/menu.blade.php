@role('administrator')
<li class="{!! Request::is('shared/fileDirectories*') ? 'active' : '' !!}">
    <a href="{{ route('shared.fileDirectories.getSearch') }}" class="mm-a">
        <span class="mm-text ">Search</span>
        <span class="menu-icon"><i class="fa fa-search text-white"></i></span>
    </a>
</li>

<li class="{!! Request::is('shared/fileDirectories*') ? 'active' : '' !!}">
    <a href="{{ route('shared.fileDirectories.index') }}" class="mm-a">
        <span class="mm-text ">File Directory</span>
        <span class="menu-icon"><i class="fa fa-folder text-white"></i></span>
    </a>
</li>
@endrole

<li class="{!! Request::is('humanresource/employees*') ? 'active' : '' !!}">
    <a href="{{ route('humanresource.employees.index') }}" class="mm-a">
        <span class="mm-text ">Employees</span>
        <span class="menu-icon"><i class="fa fa-users text-white"></i></span>
    </a>
</li>

{{-- <li class="{!! Request::is('humanresource/employeeActionSheets*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeActionSheets.index') }}">
                        <span class="mm-text ">Action Sheets</span>
                        <span class="menu-icon"><i class="fa fa-file"></i></span>
                    </a>
                </li> --}}




<!-- <li {!! Request::is('table') || Request::is('data_table') ? 'class="menu-dropdown active"' : "class='menu-dropdown'" !!}>
            <a href="#">
                <span class="mm-text ">Manage Staff</span>
                <span class="menu-icon "> <i class="fa fa-briefcase"></i></span>
                <span class="im im-icon-Arrow-Right imicon"></span>
            </a>
            <ul class="sub-menu list-unstyled">                

                <li class="{!! Request::is('humanresource/employeeAddresses*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeAddresses.index') }}">
                        <span class="mm-text ">Addresses</span>
                        <span class="menu-icon"><i class="far fa-address-book"></i></span>
                    </a>
                </li>

                <li class="{!! Request::is('humanresource/employeeCertificates*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeCertificates.index') }}">
                        <span class="mm-text ">Certificates</span> </a>
                        <span class="menu-icon"><i class="fa fa-chess-rook"></i></span>
                </li>

                <li class="{!! Request::is('humanresource/employeeCensures*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeCensures.index') }}">
                        <span class="mm-text ">Censures</span>

                    </a>
                </li>

                <li class="{!! Request::is('humanresource/employeeChildrens*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeChildrens.index') }}">
                        <span class="mm-text ">Children</span></a>
                </li>

                <li class="{!! Request::is('humanresource/employeeEducations*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeEducations.index') }}">
                        <span class="mm-text ">Educations</span></a>
                </li>

                <li class="{!! Request::is('humanresource/employeeForceServices*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeForceServices.index') }}">
                        <span class="mm-text ">Force Services</span></a>
                </li>

                <li class="{!! Request::is('humanresource/employeeForeignTours*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeForeignTours.index') }}">
                        <span class="mm-text ">Foreign Tours</span></a>
                </li>

                <li class="{!! Request::is('humanresource/employeeGratuities*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeGratuities.index') }}">
                        <span class="mm-text ">Gratuities</span></a>
                </li>


                <li class="{!! Request::is('humanresource/employeeNextOfKins*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeNextOfKins.index') }}">
                        <span class="mm-text ">Next Of Kins</span>
                    </a>
                </li>

                <li class="{!! Request::is('humanresource/employeeLanguages*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeLanguages.index') }}">
                        <span class="mm-text ">Languages</span> </a>
                </li>

                <li class="{!! Request::is('humanresource/employeeLocalLeaves*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeLocalLeaves.index') }}">
                        <span class="mm-text ">Employee Local Leaves</span></a>
                </li>

                <li class="{!! Request::is('humanresource/employeePublicServices*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeePublicServices.index') }}">
                        <span class="mm-text ">Employee Public Services</span></a>
                </li>

                <li class="{!! Request::is('humanresource/employeeQualifications*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeQualifications.index') }}">
                        <span class="mm-text ">Qualifications</span></a>
                </li>

                <li class="{!! Request::is('humanresource/employeeRecordTrackers*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeRecordTrackers.index') }}">
                        <span class="mm-text ">Record Trackers</span> </a>
                </li>

                <li class="{!! Request::is('humanresource/employeeTerminations*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeTerminations.index') }}">
                        <span class="mm-text ">Terminations</span> </a>
                </li>

                <li class="{!! Request::is('humanresource/employeeWives*') ? 'active' : '' !!}">
                    <a href="{{ route('humanresource.employeeWives.index') }}">
                        <span class="mm-text ">Wives</span></a>
                </li>
            </ul>
</li> -->


@role('superadministrator')
   <li {!! Request::is('table') || Request::is('data_table') ? 'class="menu-dropdown active"' : "class='menu-dropdown'" !!}>
    <a href="#" class="mm-a">
        <span class="mm-text ">Manage Settings</span>
        <span class="menu-icon "> <i class="far fa-gear text-white"></i></span>
        <span class="im im-icon-Arrow-Right imicon"></span>
    </a>
    <ul class="sub-menu list-unstyled default-color-secondary">
        <li class="{!! Request::is('shared/certificateTypes*') ? 'active' : '' !!}">
            <a href="{{ route('shared.certificateTypes.index') }}" class="mm-a">
                <span class="mm-text ">Certificate Types</span>

            </a>
        </li>

        <li class="{!! Request::is('shared/countries*') ? 'active' : '' !!}">
            <a href="{{ route('shared.countries.index') }}" class="mm-a">
                <span class="mm-text ">Countries</span>

            </a>
        </li>

        {{-- <li class="{!! Request::is('shared/maritalStatuses*') ? 'active' : '' !!}">
                    <a href="{{ route('shared.maritalStatuses.index') }}">
                        <span class="mm-text ">Marital Statuses</span></a>
                </li> --}}

        <li class="{!! Request::is('shared/fileTypes*') ? 'active' : '' !!}">
            <a href="{{ route('shared.fileTypes.index') }}" class="mm-a">
                <span class="mm-text ">File types</span></a>
        </li>

        <li class="{!! (Request::is('shared/geoPoliticalZones*') ? 'active' : '' ) !!}">
            <a href="{{ route('shared.geoPoliticalZones.index') }}" class="mm-a">
                <span class="mm-text ">Geo Political Zones</span>
            </a>
        </li>

        <li class="{!! Request::is('shared/languages*') ? 'active' : '' !!}">
            <a href="{{ route('shared.languages.index') }}" class="mm-a">
                <span class="mm-text ">Languages</span></a>
        </li>

        <li class="{!! Request::is('humanresource/leaveTypes*') ? 'active' : '' !!}">
            <a href="{{ route('humanresource.leaveTypes.index') }}" class="mm-a">
                <span class="mm-text ">Leave Types</span>

            </a>
        </li>

        <li class="{!! Request::is('shared/localGovtAreas*') ? 'active' : '' !!}">
            <a href="{{ route('shared.localGovtAreas.index') }}" class="mm-a">
                <span class="mm-text ">Local Govt Areas</span>

            </a>
        </li>



        <li class="{!! Request::is('shared/qualificationTypes*') ? 'active' : '' !!}">
            <a href="{{ route('shared.qualificationTypes.index') }}" class="mm-a">
                <span class="mm-text ">Qualification Types</span>
            </a>
        </li>



        <li class="{!! Request::is('shared/rankTypes*') ? 'active' : '' !!}">
            <a href="{{ route('shared.rankTypes.index') }}" class="mm-a">
                <span class="mm-text ">Rank Types</span>

            </a>
        </li>

        <li class="{!! Request::is('shared/relationships*') ? 'active' : '' !!}">
            <a href="{{ route('shared.relationships.index') }}" class="mm-a">
                <span class="mm-text ">Relationships</span></a>
        </li>

        <li class="{!! Request::is('shared/rolesAndPermissions*') ? 'active' : '' !!}">
            <a href="/shared/rolesAndPermissions/roles-assignment" class="mm-a">
                <span class="mm-text ">Roles and Permissions</span></a>
        </li>

        <li class="{!! Request::is('humanresource/salaryScales*') ? 'active' : '' !!}">
            <a href="{{ route('humanresource.salaryScales.index') }}" class="mm-a">
                <span class="mm-text ">Salary Scales</span> </a>
        </li>

        <li class="{!! Request::is('shared/schoolTypes*') ? 'active' : '' !!}">
            <a href="{{ route('shared.schoolTypes.index') }}" class="mm-a">
                <span class="mm-text ">School Types</span></a>
        </li>

        <li class="{!! (Request::is('shared/senatorialZones*') ? 'active' : '' ) !!}">
            <a href="{{ route('shared.senatorialZones.index') }}" class="mm-a">
                <span class="mm-text ">Senatorial Zones</span>
            </a>
        </li>

        <li class="{!! Request::is('shared/serviceExitTypes*') ? 'active' : '' !!}">
            <a href="{{ route('shared.serviceExitTypes.index') }}" class="mm-a">
                <span class="mm-text ">Service Exits</span></a>
        </li>

        <li class="{!! Request::is('shared/settings*') ? 'active' : '' !!}">
            <a href="{{ route('shared.settings.index') }}" class="mm-a">
                <span class="mm-text ">Settings</span></a>
        </li>

        <li class="{!! Request::is('shared/states*') ? 'active' : '' !!}">
            <a href="{{ route('shared.states.index') }}" class="mm-a">
                <span class="mm-text ">States</span></a>
        </li>

        <li class="{!! Request::is('humanresource/terminationTypes*') ? 'active' : '' !!}">
            <a href="{{ route('humanresource.terminationTypes.index') }}" class="mm-a">
                <span class="mm-text ">Termination Types</span></a>
        </li>

        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}" class="mm-a"><span>Users</span></a>
        </li>
        
    </ul>
</li> 
@endrole





{{-- <li class="{!! (Request::is('humanresource/employeeRanks*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeRanks.index') }}">
        <span class="mm-text ">Employee Ranks</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('humanresource/employeeRanks*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresource.employeeRanks.index') }}">
        <span class="mm-text ">Employee Ranks</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li> --}}

