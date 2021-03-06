{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeCensure->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('title', 'Title:') !!}</th>
    <td>{{ $employeeCensure->title }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('summary', 'Summary:') !!}</th>
    <td>{{ $employeeCensure->summary }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('date_recieved', 'Date Recieved:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeCensure->date_recieved)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeCensure->employee->getFullName() }}</td>
</tr>



<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeCensure->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeCensure->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('compiled_by', 'Compiled By:') !!}</th>
    <td>{{ $employeeCensure->compiledBy->name }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('compiled_at', 'Compiled At:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeCensure->compiled_at)->format('d/m/Y') }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeCensure->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeCensure->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeCensure->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeCensure->updated_at }}</td>
</tr> --}}


