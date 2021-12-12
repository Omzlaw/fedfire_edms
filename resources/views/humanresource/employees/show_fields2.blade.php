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
        <td>{{ \Carbon\Carbon::parse($employee->assumption_of_duty_date)->format('d/m/Y') }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('date_of_confirmation', 'Date of Confirmation:') !!}</th>
    @if (isset($employee->date_of_confirmation))
        <td>{{ \Carbon\Carbon::parse($employee->date_of_confirmation)->format('d/m/Y') }}</td>
    @else
        <td></td>
    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('date_of_present_appointment', 'Date of Present Appointment:') !!}</th>
    @if (isset($employee->date_of_present_appointment))
        <td>{{ \Carbon\Carbon::parse($employee->date_of_present_appointment)->format('d/m/Y') }}</td>
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


<tr>
    <th scopre="row">{!! Form::label('retirement_date_by_dofa', 'Retirement Date by DOFA:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employee->date_of_first_appointment)->addYears(35)->format('d/m/Y') }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('no_of_years_remained_by_dofa', 'No of Years Remained by DOFA:') !!}</th>
    <td>@php
        $start_date = \Carbon\Carbon::now();
        $end_date = \Carbon\Carbon::parse($employee->date_of_first_appointment)->addYears(35);
        $diff = $start_date->diffInYears($end_date);
        echo $diff;
    @endphp</td>
</tr>
