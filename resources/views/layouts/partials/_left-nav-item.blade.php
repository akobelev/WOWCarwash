@foreach($items as $item)
    @can('view-users', \App\Models\User::class)
        <li>
            <a href="{{ $item->url() }}" title="{{ $item->title }}">
                <i class="{{ $item->icon }}"></i>
                <span class="menu-item-parent">{{ $item->title }}</span>
            </a>
            @if($item->hasChildren())
                <ul>
                    @include('layouts.partials._left-nav-item', ['items' => $item->children()])
                </ul>
            @endif
        </li>
    @endcan
@endforeach
