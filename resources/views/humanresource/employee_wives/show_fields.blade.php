{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeWife->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('wife_name', 'Wife Name:') !!}</th>
    <td>{{ $employeeWife->wife_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('wife_birthdate', 'Wife Birthdate:') !!}</th>
    <td>{{ $employeeWife->wife_birthdate->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('marriage_date', 'Marriage Date:') !!}</th>
    <td>{{ $employeeWife->marriage_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeWife->employee->staff_code}}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employeeWife->file_upload }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeWife->remark }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeeWife->checkedBy->name }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeWife->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeWife->updated_by }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeWife->created_at->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeWife->updated_at->toDateString() }}</td>
</tr> --}}


