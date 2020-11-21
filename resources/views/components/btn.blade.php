<div>
    @empty($type)
    <button class="btn {{ $class ?? 'btn-success' }}">
        @empty($route)
            <span>{{ $title ?? 'افزودن' }}</span>
        @else
            <a class="{{$aclass ?? 'bg-white'}}" href="{{ route("$route") }}">{{ $title ?? 'افزودن' }}</a>
        @endempty
    </button>
    @else
        <input type="submit" value="{{ $title ?? 'افزودن' }}" class="btn {{ $class ?? 'btn-success' }}">
    @endempty
</div>
