{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeNextOfKin->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('name', 'Name:') !!}</th>
    <td>{{ $employeeNextOfKin->name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('address', 'Address:') !!}</th>
    <td>{{ $employeeNextOfKin->address }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('phone', 'Phone:') !!}</th>
    <td>{{ $employeeNextOfKin->phone }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('relationship_id', 'Relationship:') !!}</th>
    <td>{{ $employeeNextOfKin->relationship->title }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeNextOfKin->employee->getFullName() }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employeeNextOfKin->file_upload }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeNextOfKin->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeNextOfKin->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeNextOfKin->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeNextOfKin->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeNextOfKin->updated_at }}</td>
</tr> --}}


