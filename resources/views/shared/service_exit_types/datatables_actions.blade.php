{!! Form::open(['route' => ['shared.serviceExitTypes.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a title="View More Information" href="{{ route('shared.serviceExitTypes.show', $id) }}" class='btn custom-outline-primary btn-xs'><i class="im im-icon-Information"></i>
    </a>
    <a title="Edit Service Exit Type" href="{{ route('shared.serviceExitTypes.edit', $id) }}" class='btn custom-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i>
    </a>
    {!! Form::button('<i class="im im-icon-Remove"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-outline-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')",
        'title' => 'Delete Service Exit Type'
    ]) !!}
</div>
{!! Form::close() !!}
