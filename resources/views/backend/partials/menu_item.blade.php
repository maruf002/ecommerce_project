<li class="nav-item {{ $item->children->count() ? 'has-treeview' : '' }}">
    <a href="{{ $item->url ?? '#' }}" class="nav-link">
        <i class="nav-icon {{ $item->icon ?? 'fas fa-circle' }}"></i>
        <p>
            {{ $item->title }}
            @if ($item->children->count())
                <i class="right fas fa-angle-left"></i>
            @endif
        </p>
    </a>

    @if ($item->children->count())
        <ul class="nav nav-treeview">
            @foreach ($item->children as $child)
                @include('backend.partials.menu_item', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>
