{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeCertificates->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('certificate_name', 'Certificate Name:') !!}</th>
    <td>{{ $employeeCertificates->certificate_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('date_obtained', 'Date Obtained:') !!}</th>
    <td>{{ $employeeCertificates->date_obtained }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeCertificates->employee->getFullName()}}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeCertificates->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeCertificates->remark }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeeCertificates->checkedBy->name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('checked_at', 'Checked At:') !!}</th>
    <td>{{ $employeeCertificates->checked_at }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeCertificates->updated_by }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employeeCertificates->file_upload }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeCertificates->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeCertificates->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeCertificates->updated_at }}</td>
</tr> --}}


