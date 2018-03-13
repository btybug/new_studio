@extends('btybug::layouts.admin')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif
    <div class="main_lay_cont">
        {{--<div class="row for_title_row">--}}
        {{--<h1 class="text-center">Components</h1>--}}
        {{--</div>--}}
        <div class="col-md-3">
            <div class="">
                @include("newstudio::_partials.left_menu_for_css")
            </div>
        </div>
        <div class="col-md-9">
            <div class=" headar-btn">
                <div>
                    {{\App\Http\Controllers\PhpJsonParser::renderName(explode("_",$slug))}}
                </div>
                <div>
                    <button class="btn btn-primary show_form_for_setting">Settings</button>
                    <button type="button" class="btn btn-info show_form"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="show-inp-drop ">
                 <input type="text" class="form-control">
                <div class="dropp">
                    {!! Form::open(['url'=>'/','class'=>'dropzone', 'id'=>'my-awesome-dropzone']) !!}

                    {!! Form::close() !!}
                </div>

            </div>


            <div class="form-comp col-md-12 custom_hidden is_show_for_setting">
                {!! Form::open(['url'=>route('save_style_with_html'),'method' => 'get']) !!}
                <div class="col-md-7">
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="filename">Item name</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" id="filename" name="filename" class="form-control" value="{{\App\Http\Controllers\PhpJsonParser::renderName(explode("_",$slug))}}">
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label for="">Item html</label>
                        </div>
                        <div class="col-md-8">
                            <textarea name="" id="html_val" cols="30" rows="10" class="hidden">{!! isset($style_from_db) ? $style_from_db->html : '' !!}</textarea>
                            <textarea name="file_html" id="editor_html" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <input type="hidden" name="type" value="{{ app('request')->input('type') }}">
               
                {!! Form::close() !!}
            </div>


            {{-- <div class="form-comp col-md-12 custom_hidden is_show">
                 {!! Form::open(['url'=>route('save_style'),'method' => 'post',"class" => "submit_form_for_style"]) !!}
                     <div class="col-md-7">
                         <div class="form-group">
                             <div class="col-md-4">
                                 <label for="">Class Code</label>
                             </div>
                             <div class="col-md-8">
                                 <textarea name="code" id="editor" cols="30" rows="10" class="form-control this_very_textarea"></textarea>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="clearfix"></div>
                         </div>
                     </div>
                     <input type="hidden" name="type" value="{{ app('request')->input('type') }}">
                     <div class="col-md-5">
                         <button class="btn btn-lg btn-success pull-right validate_textarea" type="button">Save</button>
                     </div>
                 {!! Form::close() !!}
                 <div class="clearfix"></div>
             </div>--}}
        </div>

        <div class="row layouts_row">

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                @include("newstudio::_partials.partial_for_css_file")
            </div>
        </div>
    </div>
@stop
@section('CSS')
    {!! HTML::style('public/css/bty.css?v='.rand(1111,9999)) !!}
    {!! HTML::style('public/css/new-store.css') !!}
    <style>
        .main_lay_cont {
            min-height: 500px;
        }

        .headar-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #78909C;
            color: #fff;
            padding: 10px 15px;
        }

        .form-comp {
            background-color: #a0a0a0;
            color: white;
            padding: 20px;
            position:absolute;
            z-index: 9999999;
            width:97%;
        }

        .form-comp textarea {
            height: 150px !important;
        }
        .custom_hidden{
            display: none;
        }
        .custom_div_width{
            width:200px;
            margin:10px 0px;
        }
        .code_textarea{
            height:130px!important;
        }
        .custom_margin_left{
            margin-left:15px;
        }
        .error{
            color:#a94442;
        }
        .m-t-54{
            margin-top:-54px;
        }
        @media (max-width: 992px){
            .m-t-54{
                margin-top:0;
            }
        }
        .ace_editor{
            height:160px;
            flex: 1;
        }
        .set_border{
            border: 2px solid #FF0000;
        }
        .custom_inline_block{
            display:inline-block;
        }
        .show-inp-drop{
            display: none;
        }
        .show-inp-drop.active{
            display: block;
        }
        .show-inp-drop .form-control{
            border-radius: 0;
        }
        .show-inp-drop .dropp{
            margin-top: 10px;
        }
        .show-inp-drop .dropp #my-awesome-dropzone .dz-default{
            margin-top: 7% !important;
        }
    </style>
    {!! HTML::style('public/js/dropzone/css/dropzone.min.css') !!}
@stop
@section('JS')
    {{--{!! HTML::script('public/js/bty.js?v='.rand(1111,9999)) !!}--}}



    {!! HTML::script('public/js/dropzone/js/dropzone.js') !!}
    <script>
        $(document).ready(function () {
            var textarea_editor_for_save = {};
            var html = $("#get_for_append").html();
            $(".append_here").html(html);
            var data = JSON.parse($(".get_data").val());
            if (html) {
                var childs = $(".append_here").children("div.class_for_delete").children().children("div.parent").children();
                if (childs.length) {
                    childs.map(function (index, item) {
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

            $("body").delegate(".remove_this_class", "click", function () {
                var slug = $(this).data("slug");
                var class_name = $(this).data("class");
                class_name = class_name + "}";
                var _token = $('input[name=_token]').val();
                var that = $(this);
                var url = base_path + "/admin/framework/css-classes/removeclass";
                $.ajax({
                    url: url,
                    data: {
                        slug: slug,
                        class_name: class_name,
                        _token: _token
                    },
                    success: function (data) {
                        if (!data.error) {
                            return that.parents("div.class_for_delete").remove();
                        }
                        return alert("File does not exists");
                    },
                    type: 'POST'
                });
            });
            $("body").delegate(".show_in_just_html", "click", function () {
                var content = $(this).data("class");
                $("div.just_for_edit").html("");
                $(this).parents("div.class_for_delete").children("div.just_for_edit").html("<div class='bordered'>" + content + "}" + "</div><div class='clearfix'></div>");
            });

            $("body").delegate(".show_in_just_html_for_edit", "click", function () {
                var style = $(this).data("class");
                var slug = $(this).data("slug");

                var class_name = style.split("{")[0];
                class_name = class_name.split(".")[1];

                var content = $("#send_form_for_edit").html();
                content = content.replace("{repl_classname}", "." + class_name).replace("{repl_style}", style + "}").replace("{repl_slug}", slug).replace("{repl_original}", style + "}");
                $("div.just_for_edit").html("");
                $(this).parents("div.class_for_delete").children("div.just_for_edit").html(content).find("div.parent").children().addClass(class_name);

                textarea_editor_for_save = ace.edit("textarea_editor_for_save");
                textarea_editor_for_save.setTheme("ace/theme/monokai");
                textarea_editor_for_save.session.setMode("ace/mode/css");
                textarea_editor_for_save.setValue(style + "}");
                textarea_editor_for_save.on("focus", function () {
                    textarea_editor_for_save.unsetStyle("set_border");
                });
            });
            $("body").delegate(".check_and_submit", "click", function () {
                var editor_value = textarea_editor_for_save.getValue();
                var annot = textarea_editor_for_save.getSession().getAnnotations();
                for (var key in annot) {
                    if (annot.hasOwnProperty(key)) {
                        return textarea_editor_for_save.setStyle("set_border");
                    }
                }
                if (!editor_value) {
                    return textarea_editor_for_save.setStyle("set_border");
                }
                return (
                    $(".submit_form_for_style_edit").append("<input type='hidden' name='changed_style' value='" + editor_value + "'>").submit()
                );
            });
            $("body").delegate(".custom_cancel", "click", function () {
                $("div.just_html").html("");
            });
          //  $('body').find(".submit_form_for_style").dropzone();

            Dropzone.options.myAwesomeDropzone = {
                init: function () {
                    this.on("success", function (file) {
                        location.reload();
                    });
                }
            };
            $("body").delegate(".show_form","click",function(){

                    $(".show-inp-drop").toggleClass('active');
            });
        });
    </script>
@stop
