


@if ($profile_picture === null)
    No Image
@else
<img src="{{asset($profile_picture)}}" border="0" width="50" height="50" class="rounded-circle" align="center" alt="profile picture for {{ $first_name . ' ' . $last_name}}"/>
@endif