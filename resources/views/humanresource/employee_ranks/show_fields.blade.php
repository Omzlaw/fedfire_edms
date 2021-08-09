{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeRank->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('rank_type_id', 'Rank Type Id:') !!}</th>
    <td>{{ $employeeRank->rankType->title }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee Id:') !!}</th>
    <td>{{ $employeeRank->employee->getFullName() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeRank->status) }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeRank->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeRank->updated_by }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeRank->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeRank->updated_at }}</td>
</tr> --}}


