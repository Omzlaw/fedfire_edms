{!! Form::open(['route' => ['shared.geoPoliticalZones.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('shared.geoPoliticalZones.show', $id) }}" class='btn custom-outline-primary  btn-xs'><i class="im im-icon-Information"></i>
    </a>
    <a href="{{ route('shared.geoPoliticalZones.edit', $id) }}" class='btn custom-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i>
    </a>
    {!! Form::button('<i class="im im-icon-Remove"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-outline-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
