{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeChildren->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('name', 'Name:') !!}</th>
    <td>{{ $employeeChildren->name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('gender', 'Gender:') !!}</th>
    <td>{{ get_enum_value('enum_gender', $employeeChildren->gender) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('birthday', 'Birthday:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeChildren->birthday)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeChildren->employee->getFullName()}}</td>
</tr>




<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeChildren->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeeChildren->checkedBy->name }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('checked_at', 'Checked At:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeChildren->checked_at)->format('d/m/Y')  }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeChildren->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeChildren->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeChildren->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeChildren->updated_at }}</td>
</tr> --}}


