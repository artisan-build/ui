<?php


namespace Tests;


use NunoMaduro\LaravelMojito\InteractsWithViews;

class ButtonTest extends TestCase
{
    use InteractsWithViews;

    /** @test */
    public function it_displays_all_valid_html_attributes()
    {

        $this->assertView('artisan-ui::button/default-test')->contains('class="items-center px-4 py-2 leading-5 border border-transparent text-xs font-medium rounded-md focus:outline-none transition ease-in-out duration-150 shadow-md text-blue-100 bg-blue-600 hover:bg-blue-500 focus:border-blue-800 focus:shadow-outline-primary active:bg-blue-700" id="bwa" accesskey="b" contenteditable="false" dir="." draggable="false" hidden="hidden" lang="en" spellcheck="true" style="ruby-align: center" tabindex="13" title="a tag with attributes" translate="false" autofocus="false" disabled="false" form="myform" formaction="#" formenctype="text/plain" formmethod="get" formnovalidate="true" formtarget="_top" name="button" type="button" value="none"');
    }
}