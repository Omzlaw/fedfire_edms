{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employee->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('file_no', 'File No:') !!}</th>
    <td>{{ $employee->file_no }}</td>
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
    <th scopre="row">{!! Form::label('gender', 'Gender:') !!}</th>
    <td>{{ get_enum_value('enum_gender', $employee->gender) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('birthdate', 'Birthdate:') !!}</th>
    <td>{{ $employee->birthdate->toDateString() }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('nationality', 'Nationality:') !!}</th>
    <td>{{ $employee->country->title }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('geo_political_zone', 'Geo-Politcal Zone:') !!}</th>
    @if (isset($state->geoPoliticalZone->title))
        <td>{{ $state->geoPoliticalZone->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('state_of_origin', 'State of Origin:') !!}</th>
    @if (isset($state->stateOfOrigin->title))
        <td>{{ $state->stateOfOrigin->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('place_of_birth', 'Place Of Birth:') !!}</th>
    <td>{{ $employee->place_of_birth }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('birth_certificate_upload', 'Birth Certificate Upload:') !!}</th>
    <td>{{ $employee->birth_certificate_upload }}</td>
</tr> --}}

<tr>
    <th scopre="row">{!! Form::label('marital_status_id', 'Marital Status:') !!}</th>
    <td>{{ get_enum_value('enum_marital_status', $employee->marital_status_id) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('first_appointment_date', 'First Appointment Date:') !!}</th>
    <td>{{ $employee->first_appointment_date->toDateString() }}</td>
</tr>






