<{{ is_null($href) ? 'button' : 'a' }}@if ( !is_null($href)) href="{{ $href }}"@endif type="" class="{{ $buildClasses($attributes) }}">
    {{ $slot }}
</{{ is_null($href) ? 'button' : 'a' }}>

{{-- @required | color | Color of the button (see Colors section in docs) --}}
{{-- @required | size | Size of the button (xs, sm, md, lg, xl, 2xl) --}}
{{-- @optional | display | Display class (defaults to inline-flex) --}}
