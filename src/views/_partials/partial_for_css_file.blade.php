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

<div class="col-md-12 append_here">

</div>
<div class="clearfix"></div>
<div class="just_html"></div>
@if(count($data))
    <script type="template" id="get_for_append">
        @foreach($data as $index => $style)
        @if($style)
        <div class="class_for_delete">
            <div class="col-md-3"><h5>{{explode("{",$style)[0]}}</h5></div>
            <div class="col-md-6">
                @if(isset($style_from_db->html))
                    <div class="col-md-12 parent">
                        {!! $style_from_db->html !!}
                    </div>
                @endif
            </div>
            <div class="col-md-3">
                <button class="btn btn-success btn-md show_in_just_html" data-class="{{$style}}">Show</button>
                <button class="btn btn-warning btn-md show_in_just_html_for_edit" data-slug="{{$slug}}"
                        data-class="{{$style}}">Edit
                </button>
                <button class="btn btn-danger btn-md remove_this_class" data-slug="{{$slug}}" data-class="{{$style}}">
                    delete
                </button>
            </div>
            {{--@if(isset($style_from_db->html))
                <div class="col-md-4 parent">
                    {!! $style_from_db->html !!}
                </div>
            @endif
            <div class="{{isset($style_from_db->html) ? 'col-md-8' : 'col-md-12'}}">
                <h5>{{explode("{",$style)[0]}}</h5>
                <div class="this_flex">
                    <textarea class='code_textarea form-control' id="textarea_{{$index}}">{{ $style."}" }}</textarea>
                    <button class="btn btn-danger btn-md remove_this_class" data-slug="{{$slug}}" data-class="{{$style}}">delete</button>
                </div>
            </div>--}}
            <div class="clearfix"></div>
            <div class="just_for_edit"></div>
        </div>
        <div class="clearfix"></div>
        @endif
        @endforeach
    </script>
@endif
<script type="template" id="send_form_for_save">
    {!! Form::open(['url'=>route('save_style'),'method' => 'post',"class" => "submit_form_for_style"]) !!}
    <div class="class_for_delete">
        @if(isset($style_from_db->html))
            <div class="col-md-4 parent">
                {!! $style_from_db->html !!}
            </div>
        @endif
        <div class="{{isset($style_from_db->html) ? 'col-md-8' : 'col-md-12'}}">
            <h5>class</h5>
            <input type="hidden" name="type" value="{{ app('request')->input('type') }}">
            <div class="this_flex">
                <div class="inp-upl">
                    <input type="text" class="form-control">
                    <div id="dZUpload" class="dropzone">
                        <div class="dz-default dz-message"></div>
                    </div>
                </div>
                <button class="btn btn-danger btn-md custom_cancel" type="button">Cancel</button>
                <button class="btn btn-success btn-md validate_textarea" type="button" data-slug="{{$slug}}"
                        data-class="{{$style}}">Save
                </button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</script>
<script type="template" id="send_form_for_edit">
    {!! Form::open(['url'=>route('edit_style'),'method' => 'post',"class" => "submit_form_for_style_edit"]) !!}
    <div class="class_for_delete">
        <div class="col-md-3">{repl_classname}</div>
        <div class="col-md-6">
            @if(isset($style_from_db->html))
                <div class="col-md-12 parent">
                    {!! $style_from_db->html !!}
                </div>
            @endif
        </div>
        <div class="col-md-3">
            <input type="hidden" name="type" value="{{ app('request')->input('type') }}">
            <div class="this_flex">
                <input type="hidden" name="original_style" value="{repl_original}">
                <textarea class='code_textarea form-control' id="textarea_editor_for_save"></textarea>
                <button class="btn btn-success btn-md check_and_submit" type="button" data-slug="{repl_slug}"
                        data-class="{repl_style}">Save
                </button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</script>

