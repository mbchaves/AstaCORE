<!-- @section('side-navbar') -->
<ul>
    @foreach ($menu as $item)
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow waves-effect waves-dark"  href="{{ $item['url'] }}" aria-expanded="false">
           <i class="{{ $item['icon'] }}"></i>
          <span class="hide-menu">{{ $item['label'] }}</span>
        </a>

        @if (!empty($item['children']))
         <ul aria-expanded="false" class="collapse  first-level">
            @foreach ($item['children'] as $child)
             <li class="sidebar-item">
                <a href="{{ $child['url'] }}" class="sidebar-link">
                    <i class="{{ $child['icon'] }}"></i>
                    <span class="hide-menu">{{ $child['label'] }}</span>
                </a>
             </li>
            @endforeach
        </ul>
        @endif
    </li>
    @endforeach
</ul>
<!-- @endsection('side-navbar') -->
