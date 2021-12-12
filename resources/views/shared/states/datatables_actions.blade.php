{!! Form::open(['route' => ['shared.states.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a title="View More Information" href="{{ route('shared.states.show', $id) }}" class='btn custom-outline-primary btn-xs'><i class="im im-icon-Information"></i>
    </a>
    <a title="Edit State" href="{{ route('shared.states.edit', $id) }}" class='btn custom-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i>
    </a>
    {!! Form::button('<i class="im im-icon-Remove"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-outline-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')",
        'title' => 'Delete State'
    ]) !!}
</div>
{!! Form::close() !!}
