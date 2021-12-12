

<tr>
    <th scopre="row">{!! Form::label('school_name', 'School Name:') !!}</th>
    <td>{{ $employeeEducation->school_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('certificate_id', 'Certificate Type:') !!}</th>
    @if (isset($employeeEducation->certificateType->title))
        <td>{{ $employeeEducation->certificateType->title }}</td>
    @else
    <td></td>
    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('school_type_id', 'School Type:') !!}</th>
    @if (isset($employeeEducation->schoolType->title))
        <td>{{ $employeeEducation->schoolType->title }}</td>
    @else
    <td></td>
    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('from_date', 'From Date:') !!}</th>
    <td>{{ $employeeEducation->from_date }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('to_date', 'To Date:') !!}</th>
    <td>{{ $employeeEducation->to_date }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeEducation->employee->getFullName() }}</td>
</tr>



<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeEducation->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeEducation->remark }}</td>
</tr>



<tr>
    <th scopre="row">{!! Form::label('checked_at', 'Checked At:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeEducation->checked_at)->format('d/m/Y') }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeEducation->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeEducation->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeEducation->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeEducation->updated_at }}</td>
</tr> --}}
