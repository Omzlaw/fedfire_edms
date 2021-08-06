{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeQualification->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('qualification_name', 'Qualification Name:') !!}</th>
    <td>{{ $employeeQualification->qualification_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('date_obtained', 'Date Obtained:') !!}</th>
    <td>{{ $employeeQualification->date_obtained->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeQualification->employee->staff_code }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employeeQualification->file_upload }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ $employeeQualification->status }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeQualification->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeeQualification->checkedBy->name }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeQualification->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeQualification->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeQualification->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeQualification->updated_at }}</td>
</tr> --}}


