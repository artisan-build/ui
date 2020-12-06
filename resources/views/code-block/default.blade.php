<pre{{ $tagAttributes($attributes, 'pre') }}>
    <code{{ $tagAttributes($attributes, 'code') }} {!! $attributes->merge(['class' => $attributes->highlightjs ?? '']) !!} >
        {!! $unencode($unencode($slot)) !!}
    </code>
</pre>

{{-- @wildcard | pre_* | attributes applied to <pre> --}}
{{-- @wildcard | code_* | attributes applied to <code> --}}