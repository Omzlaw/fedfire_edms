{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeLanguage->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('language_id', 'Language:') !!}</th>
    <td>{{ $employeeLanguage->language->title }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('speaking_fluency', 'Speaking Fluency:') !!}</th>
    <td>{{ get_enum_value('enum_fluency', $employeeLanguage->speaking_fluency )}}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('writing_fluency', 'Writing Fluency:') !!}</th>
    <td>{{ get_enum_value('enum_fluency', $employeeLanguage->writing_fluency) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('exam_qualified', 'Exam Qualified:') !!}</th>
    <td>{{ $employeeLanguage->exam_qualified }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeLanguage->employee->getFullName() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employeeLanguage->file_upload }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeLanguage->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeLanguage->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeeLanguage->checkedBy->name }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('checked_at', 'Checked At:') !!}</th>
    <td>{{ $employeeLanguage->checked_at->toDateString() }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeLanguage->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeLanguage->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeLanguage->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeLanguage->updated_at }}</td>
</tr> --}}


