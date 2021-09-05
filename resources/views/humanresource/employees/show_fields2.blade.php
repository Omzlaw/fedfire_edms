<tr>
    <th scopre="row">{!! Form::label('senatorial_zone', 'Senatorial Zone:') !!}</th>
    @if (isset($employee->senatorialZone->title))
        <td>{{ $employee->senatorialZone->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('local_govt_area', 'Local Govt Area:') !!}</th>
    @if (isset($employee->localGovtArea->title))
        <td>{{ $employee->localGovtArea->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('gl', 'Grade Level:') !!}</th>
    @if (isset($employee->gl))
        <td>{{ get_enum_value('enum_grade_level', $employee->gl) }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('type_of_appointment', 'Type of Appointment') !!}</th>
    @if (isset($employee->type_of_appointment))
        <td>{{ get_enum_value('enum_type_of_appointment', $employee->type_of_appointment) }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('assumption_of_duty_date', 'Assumption of Duty Date:') !!}</th>
    @if (isset($employee->assumption_of_duty_date))
        <td>{{ $employee->assumption_of_duty_date }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('date_of_confirmation', 'Date of Confirmation:') !!}</th>
    @if (isset($employee->date_of_confirmation))
        <td>{{ $employee->date_of_confirmation }}</td>
    @else
        <td></td>
    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('date_of_present_appointment', 'Date of Present Appointment:') !!}</th>
    @if (isset($employee->date_of_present_appointment))
        <td>{{ $employee->date_of_present_appointment }}</td>
    @else
        <td></td>
    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('decorations', 'Decorations:') !!}</th>
    <td>{{ $employee->decorations }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employee->remark }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('email', 'Email:') !!}</th>
    <td>{{ $employee->email }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('phone', 'Phone:') !!}</th>
    <td>{{ $employee->phone }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_employee_status', $employee->status) }}</td>
</tr>


