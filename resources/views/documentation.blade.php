<x-guest-layout>
    <div class="markdown-body">
        {!! $documentation !!}
        <h3>Examples From The Test File</h3>
        {!! $testing !!}
        <h3>Contents Of the Test File</h3>
        <x-aui-code-block>{!! $testFile !!}</x-aui-code-block>
    </div>
</x-guest-layout>
