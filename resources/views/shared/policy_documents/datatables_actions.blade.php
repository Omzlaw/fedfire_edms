{!! Form::open(['route' => ['shared.policyDocuments.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    {{-- <a href="{{ route('shared.policyDocuments.show', $id) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i>
    </a> --}}
    @permission('policy_documents-edit')
    <a title="Edit Policy File" href="{{ route('shared.policyDocuments.edit', $id) }}" class='btn btn-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i>
    </a>
    @endpermission

    @permission('policy_documents-destroy')
    {!! Form::button('<i class="im im-icon-Remove"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-outline-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')",
        'title' => 'Delete Policy File'
    ]) !!}
    @endpermission
</div>
{!! Form::close() !!}
