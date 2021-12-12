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
    <td>{{ \Carbon\Carbon::parse($employeeWife->wife_birthdate)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('marriage_date', 'Marriage Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeWife->marriage_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeWife->employee->getFullName() }}</td>
</tr>



<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeWife->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeeWife->checkedBy->name }}</td>
</tr> --}}


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
    <td>{{ $employeeWife->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeWife->updated_at }}</td>
</tr> --}}


