<x-guest-layout>
    <div class="markdown-body">
        <h1>{{ $title }}</h1>
        <p>{{ $description }}</p>
        <h3>Expected Attributes</h3>
        {{ json_encode($expected) }}
        <h3>Examples From The Test File</h3>
        {!! $testing !!}
        <h3>Contents Of the Test File</h3>
        <x-aui-code-block>{!! $testFile !!}</x-aui-code-block>
    </div>
</x-guest-layout>
