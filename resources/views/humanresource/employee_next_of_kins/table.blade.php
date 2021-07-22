<div class="table-responsive">
    <table class="table" id="employeeNextOfKins-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Relationship Id</th>
        <th>Employee Id</th>
        <th>File Upload</th>
        <th>Remark</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employeeNextOfKins as $employeeNextOfKin)
            <tr>
                <td>{{ $employeeNextOfKin->id }}</td>
            <td>{{ $employeeNextOfKin->name }}</td>
            <td>{{ $employeeNextOfKin->address }}</td>
            <td>{{ $employeeNextOfKin->relationship_id }}</td>
            <td>{{ $employeeNextOfKin->employee_id }}</td>
            <td>{{ $employeeNextOfKin->file_upload }}</td>
            <td>{{ $employeeNextOfKin->remark }}</td>
            <td>{{ $employeeNextOfKin->created_at }}</td>
            <td>{{ $employeeNextOfKin->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['humanresource.employeeNextOfKins.destroy', $employeeNextOfKin->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('humanresource.employeeNextOfKins.show', [$employeeNextOfKin->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('humanresource.employeeNextOfKins.edit', [$employeeNextOfKin->id]) }}" class='btn btn-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i></a>
                        {!! Form::button('<i class="im im-icon-Remove"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
