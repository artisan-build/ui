<x-guest-layout>
    <div class="markdown-body">
        <h1>{{ $title }}</h1>
        <x-aui-code-block>{{ $signature }}</x-aui-code-block>
        <p>{{ $description }}</p>
        <h3>Expected Attributes</h3>
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expected as $k => $v)
                    <tr>
                        <td>{{ $k }}</td>
                        <td>{{ $v }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <h3>Examples From The Test File</h3>
    </div>
    <div class="mt-5">
        {!! $testing !!}
    </div>
    <div class="markdown-body">
        <h3>Contents Of the Test File</h3>
        <x-aui-code-block highlightjs="html">{!! $testFile !!}</x-aui-code-block>
    </div>

</x-guest-layout>
