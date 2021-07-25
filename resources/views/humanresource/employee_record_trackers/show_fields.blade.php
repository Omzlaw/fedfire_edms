{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeRecordTracker->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeRecordTracker->employee->staff_code }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeRecordTracker->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeRecordTracker->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeRecordTracker->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeRecordTracker->updated_by }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('has_profile', 'Has Profile:') !!}</th>
    <td>{{ get_enum_value('enum_yes_no', $employeeRecordTracker->has_profile) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('has_education', 'Has Education:') !!}</th>
    <td>{{ get_enum_value('enum_yes_no', $employeeRecord->has_education) }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeRecordTracker->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeRecordTracker->updated_at }}</td>
</tr> --}}


