{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeEmolumentRecord->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('date_entry_made', 'Date Entry Made:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeEmolumentRecord->date_entry_made )->format('d/m/y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('salary_scale', 'Salary Scale:') !!}</th>
    @if (isset($employeeEmolumentRecord->salaryScale))
    <td>{{ $employeeEmolumentRecord->salaryScale->title }}</td>
    @else

    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('basic_salary_pa', 'Basic Salary Pa:') !!}</th>
    <td>{{ $employeeEmolumentRecord->basic_salary_pa }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('inducement_pay_pa', 'Inducement Pay Pa:') !!}</th>
    <td>{{ $employeeEmolumentRecord->inducement_pay_pa }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('increment_date', 'Increment Date - Month:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeEmolumentRecord->increment_date )->format('m') }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('increment_date', 'Increment Date - Year:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeEmolumentRecord->increment_date )->format('Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('authority', 'Authority:') !!}</th>
    <td>{{ $employeeEmolumentRecord->authority }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('certified_by', 'Certified By:') !!}</th>
    @if (isset($employeeEmolumentRecord->certifiedBy))
    <td>{{ $employeeEmolumentRecord->certifiedBy->name }}</td>
    @else

    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status',$employeeEmolumentRecord->status) }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeEmolumentRecord->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeEmolumentRecord->updated_at }}</td>
</tr> --}}


