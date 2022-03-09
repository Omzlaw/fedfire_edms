{!! Form::open(['route' => ['shared.fileDirectories.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @permission('file_directories-view')
    <a title="View More Information" href="{{ route('shared.fileDirectories.show', $id) }}" class='btn custom-outline-primary btn-xs'><i class="im im-icon-Information"></i>
    </a>
    @endpermission
    @permission('file_directories-edit')
    <a title="Edit Personnel File" href="{{ route('shared.fileDirectories.edit', $id) }}" class='btn custom-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i>
    </a>
    @endpermission
    @permission('file_directories-destroy')
    {!! Form::button('<i class="im im-icon-Remove"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-outline-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')",
        'title' => 'Delete Personnel File'
    ]) !!}
    @endpermission
</div>
{!! Form::close() !!}
