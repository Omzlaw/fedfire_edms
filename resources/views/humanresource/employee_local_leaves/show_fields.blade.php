{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeLocalLeave->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeLocalLeave->employee->getFullName() }}</td>
</tr>



<tr>
    <th scopre="row">{!! Form::label('no_of_days', 'No Of Days:') !!}</th>
    <td>{{ $employeeLocalLeave->no_of_days }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_page_no', 'File Page No:') !!}</th>
    <td>{{ $employeeLocalLeave->file_page_no }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('leave_type_id', 'Leave Type:') !!}</th>
    <td>{{ $employeeLocalLeave->leaveType->title }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('from_date', 'From Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeLocalLeave->from_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('to_date', 'To Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeLocalLeave->to_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeLocalLeave->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeLocalLeave->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeLocalLeave->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeLocalLeave->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeLocalLeave->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeLocalLeave->updated_at }}</td>
</tr> --}}
