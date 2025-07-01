
<li>
    <strong>{{ $menu->title }}</strong>
    @if ($menu->url)
        - <a href="{{ $menu->url }}">{{ $menu->url }}</a>
    @endif

    @if ($menu->children->count())
        <ul>
            @foreach ($menu->children as $child)
                @include('backend.menu.menu_item', ['menu' => $child])
            @endforeach
        </ul>
    @endif
</li>
