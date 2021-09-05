{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employee->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('service_number', 'File No:') !!}</th>
    <td>{{ $employee->service_number }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('first_name', 'First Name:') !!}</th>
    <td>{{ $employee->first_name }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('middle_name', 'Middle Name:') !!}</th>
    <td>{{ $employee->middle_name }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('last_name', 'Last Name:') !!}</th>
    <td>{{ $employee->last_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('gender', 'Sex:') !!}</th>
    <td>{{ get_enum_value('enum_gender', $employee->gender) }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('religion', 'Religion:') !!}</th>
    <td>{{ get_enum_value('enum_religion', $employee->religion) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('birthdate', 'Date of Birth:') !!}</th>
    <td>{{ $employee->birthdate }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('nationality', 'Nationality:') !!}</th>
    <td>{{ $employee->country->title }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('geo_political_zone', 'Geo-Politcal Zone:') !!}</th>
    @if (isset($employee->geoPoliticalZone->title))
        <td>{{ $employee->geoPoliticalZone->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('state_of_origin', 'State of Origin:') !!}</th>
    @if (isset($employee->stateOfOrigin->title))
        <td>{{ $employee->stateOfOrigin->title }}</td>
    @else
    @endif
</tr>

{{-- <tr>
    <th scopre="row">{!! Form::label('place_of_birth', 'Place Of Birth:') !!}</th>
    <td>{{ $employee->place_of_birth }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('birth_certificate_upload', 'Birth Certificate Upload:') !!}</th>
    <td>{{ $employee->birth_certificate_upload }}</td>
</tr> --}}

<tr>
    <th scopre="row">{!! Form::label('marital_status_id', 'Marital Status:') !!}</th>
    <td>{{ get_enum_value('enum_marital_status', $employee->marital_status_id) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('date_of_first_appointment', 'Date of First Appointment:') !!}</th>
    <td>{{ $employee->date_of_first_appointment }}</td>
</tr>