<li class="{!! (Request::is('humanresources/leaveTypes*') ? 'active' : '' ) !!}">
    <a href="{{ route('humanresources.leaveTypes.index') }}">
        <span class="mm-text ">Leave Types</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('shared/rankTypes*') ? 'active' : '' ) !!}">
    <a href="{{ route('shared.rankTypes.index') }}">
        <span class="mm-text ">Rank Types</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

