{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeActionSheet->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('folio', 'Folio:') !!}</th>
    <td>{{ $employeeActionSheet->folio }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('action_at', 'Action At:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeActionSheet->action_at)->format('d/m/Y') }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeActionSheet->created_by }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeActionSheet->updated_by }}</td>
</tr>


 --}}

 <tr>
    <th scopre="row">{!! Form::label('date_cleared', 'Date Cleared:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeActionSheet->date_cleared)->format('d/m/Y') }}</td>
</tr>

{{-- <tr>
    <th scopre="row">{!! Form::label('action_by', 'Action By:') !!}</th>
    <td>{{ $employeeActionSheet->actionBy->name }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeActionSheet->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeActionSheet->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeActionSheet->updated_at }}</td>
</tr> --}}


