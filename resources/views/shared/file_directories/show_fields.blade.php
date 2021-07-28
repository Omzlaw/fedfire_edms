{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $fileDirectory->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('file_name', 'File Name:') !!}</th>
    <td>{{ $fileDirectory->file_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_type_id', 'File Type:') !!}</th>
    <td>{{ $fileDirectory->fileType->title }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('file_url', 'File URL:') !!}</th>
    <td>{{ $fileDirectory->file_url }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Staff No:') !!}</th>
    <td>{{ $fileDirectory->employee->staff_code }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{get_enum_value('enum_status', $fileDirectory->status)}}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $fileDirectory->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $fileDirectory->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $fileDirectory->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $fileDirectory->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $fileDirectory->updated_at }}</td>
</tr> --}}


