<?php
$data = getDinamicStyleForCssFileDemo($slug);
$file = \App\Http\Controllers\PhpJsonParser::getFileByName($slug);
?>
<style>
    .m-t-b-21 {
        margin-top: 20px;
        margin-bottom: 10px;
    }
</style>
@if($file)
    {!! useDinamicStyleByPath($file->__toString()) !!}
@endif
<input type="hidden" value="{{json_encode(getDinamicStyleForCssFileDemo($slug),true)}}" class="get_data">
