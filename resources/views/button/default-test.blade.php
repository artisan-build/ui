<div class="flex justify-between my-2">

    @foreach (config('artisan-ui.colors.tailwind') as $color)
        <x-aui-button size="xs" :color="$color" data-iam="button">color {{ $color }}</x-aui-button>
    @endforeach
    <x-aui-button size="xs" color="black">color black</x-aui-button>
    <x-aui-button size="xs" color="white">color white</x-aui-button>

</div>

<div class="flex justify-between my-2">

    @foreach (config('artisan-ui.colors.tailwind') as $color)
        <x-aui-button size="xs" family="light" :color="$color">light {{ $color }}</x-aui-button>
    @endforeach

</div>

<div class="flex justify-between my-2">

<span>
    <x-aui-button size="xs" wire:nada="nothing" color="white">size xs</x-aui-button>
</span>

    <span>
    <x-aui-button size="sm" color="white">size sm</x-aui-button>
</span>

    <span>
    <x-aui-button size="md" color="white">size md</x-aui-button>
</span>

    <span>
    <x-aui-button size="lg" color="white">size lg</x-aui-button>
</span>

    <span>
    <x-aui-button size="xl" color="white">size xl</x-aui-button>
</span>

    <span>
    <x-aui-button size="2xl" color="white">size 2xl</x-aui-button>
</span>

</div>

<div class="flex justify-between my-2">

    <x-aui-button rounded="none">rounded none</x-aui-button>
    <x-aui-button rounded="sm">rounded sm</x-aui-button>
    <x-aui-button rounded="md">rounded md</x-aui-button>
    <x-aui-button rounded="lg">rounded lg</x-aui-button>
    <x-aui-button rounded="xl">rounded xl</x-aui-button>
    <x-aui-button rounded="2xl">rounded 2xl</x-aui-button>
    <x-aui-button rounded="3xl">rounded 3xl</x-aui-button>
    <x-aui-button rounded="full">rounded full</x-aui-button>

</div>

<div class="flex justify-between my-2">

    <x-aui-button rounded="r-lg">rounded r-lg</x-aui-button>
    <x-aui-button rounded="l-lg">rounded l-lg</x-aui-button>
    <x-aui-button rounded="tr-lg">rounded tr-lg</x-aui-button>
    <x-aui-button rounded="bl-lg">rounded bl-lg</x-aui-button>

</div>

<div class="flex justify-between my-2">

    <x-aui-button href="#" id="awa" accesskey="a" contenteditable="false" dir="." draggable="false" hidden
                  lang="en" spellcheck="true" style="ruby-align: center" tabindex="12" title="a tag with attributes"
                  translate="false" download="false" hreflang="en" media="all" ping="pong" referrerpolicy="noreferrer"
                  rel="nofollow" target="_top" type="text/html">
        `a` tag with all attributes
    </x-aui-button>
    <x-aui-button id="bwa" accesskey="b" contenteditable="false" dir="." draggable="false" hidden
                  lang="en" spellcheck="true" style="ruby-align: center" tabindex="13" title="a tag with attributes"
                  translate="false" autofocus="false" disabled="false" form="myform" formaction="#"
                  formenctype="text/plain" formmethod="get" formnovalidate="true" formtarget="_top" name="button"
                  type="button" value="none">
        `button` tag with all attributes
    </x-aui-button>

</div>
