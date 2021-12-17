{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeBirthParticular->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('date', 'Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeBirthParticular->date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('home_place', 'Home Place:') !!}</th>
    <td>{{ $employeeBirthParticular->home_place }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('proof', 'Proof:') !!}</th>
    <td>{{ $employeeBirthParticular->proof }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeeBirthParticular->checked_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee Id:') !!}</th>
    <td>{{ $employeeBirthParticular->employee_id }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeBirthParticular->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeBirthParticular->updated_at }}</td>
</tr> --}}


