<{{ is_null($href ?? null) ? 'button' : 'a' }} @if (!is_null($href ?? null)) href="{{ $href }}" @endif
{{ $attributes->only($htmlAttributes['*']) }}
{{ $attributes->only($htmlAttributes[is_null($href ?? null) ? 'button' : 'a']) }}
{{ $attributes->whereStartsWith('x-') }}
{{ $attributes->whereStartsWith('on') }}
{{ $attributes->whereStartsWith('wire:') }}
{{ $attributes->whereStartsWith('data-') }}
{{ $attributes->merge(['class' => $classes]) }}
>
{{ $slot }}
</{{ is_null($href ?? null) ? 'button' : 'a' }}>
