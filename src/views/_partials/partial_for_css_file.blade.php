<?php
    $data = getDinamicStyleForCssFileDemo($slug);
    $file = \App\Http\Controllers\PhpJsonParser::getFileByName($slug);
?>
<style>
    .m-t-b-21{
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
                        <button class="btn btn-warning btn-md show_in_just_html_for_edit" data-slug="{{$slug}}" data-class="{{$style}}">Edit</button>
                        <button class="btn btn-danger btn-md remove_this_class" data-slug="{{$slug}}" data-class="{{$style}}">delete</button>
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
                <textarea class='code_textarea form-control' id="editor" ></textarea>
                <button class="btn btn-danger btn-md custom_cancel" type="button">Cancel</button>
                <button class="btn btn-success btn-md validate_textarea" type="button" data-slug="{{$slug}}" data-class="{{$style}}">Save</button>
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
                <textarea class='code_textarea form-control' id="textarea_editor_for_save" ></textarea>
                <button class="btn btn-success btn-md check_and_submit" type="button" data-slug="{repl_slug}" data-class="{repl_style}">Save</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</script>
<script>
    $(document).ready(function(){
        var textarea_editor_for_save = {};
        var html = $("#get_for_append").html();
        $(".append_here").html(html);
        var data = JSON.parse($(".get_data").val());
        if(html){
            var childs = $(".append_here").children("div.class_for_delete").children().children("div.parent").children();
            if(childs.length){
                childs.map(function(index,item){
                    var class_name = data[index].split("{")[0];
                    class_name = class_name.split(".")[1];
                    return $(item).addClass(class_name);
                });
            }
        }

        /*// initialize ace editors
            data.map(function(item,indx){
                if(item.length){
                    var name = "editor_" + indx;
                    name = ace.edit("textarea_"+indx);
                    name.setTheme("ace/theme/monokai");
                    name.session.setMode("ace/mode/css");
                    name.setValue(item+"}");
                }
            });
        // end initialize ace editors*/

        $("body").delegate(".remove_this_class","click",function () {
            var slug = $(this).data("slug");
            var class_name = $(this).data("class");
            class_name = class_name + "}";
            var _token = $('input[name=_token]').val();
            var that = $(this);
            var url = base_path + "/admin/framework/css-classes/removeclass";
            $.ajax({
                url: url,
                data: {
                    slug:slug,
                    class_name:class_name,
                    _token: _token
                },
                success: function (data) {
                    if(!data.error){
                        return that.parents("div.class_for_delete").remove();
                    }
                    return alert("File does not exists");
                },
                type: 'POST'
            });
        });
        $("body").delegate(".show_in_just_html","click",function(){
            var content = $(this).data("class");
            $("div.just_for_edit").html("");
            $(this).parents("div.class_for_delete").children("div.just_for_edit").html("<div class='bordered'>" + content + "}" + "</div><div class='clearfix'></div>");
        });

        $("body").delegate(".show_in_just_html_for_edit","click",function(){
            var style = $(this).data("class");
            var slug = $(this).data("slug");

            var class_name = style.split("{")[0];
            class_name = class_name.split(".")[1];

            var content = $("#send_form_for_edit").html();
            content = content.replace("{repl_classname}","." + class_name).replace("{repl_style}",style + "}").replace("{repl_slug}",slug).replace("{repl_original}",style + "}");
            $("div.just_for_edit").html("");
            $(this).parents("div.class_for_delete").children("div.just_for_edit").html(content).find("div.parent").children().addClass(class_name);

            textarea_editor_for_save = ace.edit("textarea_editor_for_save");
            textarea_editor_for_save.setTheme("ace/theme/monokai");
            textarea_editor_for_save.session.setMode("ace/mode/css");
            textarea_editor_for_save.setValue(style + "}");
            textarea_editor_for_save.on("focus", function(){
                textarea_editor_for_save.unsetStyle("set_border");
            });
        });
        $("body").delegate(".check_and_submit","click",function(){
            var editor_value = textarea_editor_for_save.getValue();
            var annot = textarea_editor_for_save.getSession().getAnnotations();
            for (var key in annot){
                if (annot.hasOwnProperty(key)) {
                    return textarea_editor_for_save.setStyle("set_border");
                }
            }
            if(!editor_value){
                return textarea_editor_for_save.setStyle("set_border");
            }
            return (
                $(".submit_form_for_style_edit").append("<input type='hidden' name='changed_style' value='"+editor_value+"'>").submit()
            );
        });
        $("body").delegate(".custom_cancel","click",function(){
            $("div.just_html").html("");
        });
    });
</script>
