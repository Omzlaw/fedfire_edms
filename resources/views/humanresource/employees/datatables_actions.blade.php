{!! Form::open(['route' => ['humanresource.employees.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @permission('employees-view')
    <a title="View More Information" href="{{ route('humanresource.employees.show', $id) }}" class='btn custom-outline-primary btn-xs'><i class="im im-icon-Information"></i>
    </a>
    @endpermission
    @permission('employees-edit')
    <a title="Edit Employee" href="{{ route('humanresource.employees.edit', $id) }}" class='btn custom-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i>
    </a>
    @endpermission
    @permission('employees-destroy')
    {!! Form::button('<i class="im im-icon-Remove"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-outline-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')",
        'title' => 'Delete Employee'
    ]) !!}
    @endpermission
</div>
{!! Form::close() !!}
