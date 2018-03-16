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
        <div class="col-md-3">
            <div class="">
                @include("newstudio::_partials.left_menu_for_css")
            </div>
        </div>
        <div class="col-md-9">
            <div class=" headar-btn">
                <div>
                    {!! Form::open(['id'=>'edit_sub_group']) !!}
                    <div class="head-left">
                        <input type="text" name="new_name" value="{!! $slug !!}">
                        <button type="button" class="btn btn-sm btn-info edit_sub_group_btn"><i
                                    class="fa fa-check-square"></i></button>
                    </div>
                    {!! Form::hidden('group',$group) !!}
                    {!! Form::hidden('old_name',$slug) !!}
                    {!! Form::close() !!}

                </div>
                <div>
                    <button class="btn btn-primary show_form_for_setting">Settings</button>
                    <button type="button" class="btn btn-info show_form"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div>
                <div class="list">
                    <ul>
                        @foreach($studios as $studio)
                            <li>
                                <div class="title">{!! $studio->name !!}</div>
                                <div class="title">{!! $studio->description !!}</div>
                                <div class="title"><img width="100px"
                                                        src="{!! url('public/images/new_studios',$studio->image ) !!}"></div>
                                <div class="button">
                                    <button data-id="{!! $studio->id !!}" class="btn btn-info edit-studio-btn"><i
                                                class="fa fa-edit"></i></button>
                                    <a href="#" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <div class="edit-form-area"></div>
            <div class="show-inp-drop ">
                <div class="dropp">
                    {!! Form::open(['url'=>route('new_studio_upload'),'class'=>'','files'=>true]) !!}
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-2 control-label">Studio Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Studio Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Studio Description</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="description"></textarea>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Studio File:</label>
                            <div class="col-md-8">
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    {!! Form::hidden('type',$slug) !!}
                    {!! Form::hidden('group',$group) !!}
                    {!! Form::submit(null,['class'=>'btn btn-success pull-right']) !!}
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
                            <input type="text" id="filename" name="filename" class="form-control"
                                   value="{{\App\Http\Controllers\PhpJsonParser::renderName(explode("_",$slug))}}">
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <label for="">Item html</label>
                    </div>
                    <div class="col-md-8">
                        <textarea name="" id="html_val" cols="30" rows="10"
                                  class="hidden">{!! isset($style_from_db) ? $style_from_db->html : '' !!}</textarea>
                        <textarea name="file_html" id="editor_html" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <input type="hidden" name="type" value="{{ app('request')->input('type') }}">

            {!! Form::close() !!}
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

        .dropzone-form {
            position: absolute;
            top: 104px;
            width: 100%;
        }

        .form-comp {
            background-color: #a0a0a0;
            color: white;
            padding: 20px;
            position: absolute;
            z-index: 9999999;
            width: 97%;
        }

        .form-comp textarea {
            height: 150px !important;
        }

        .custom_hidden {
            display: none;
        }

        .custom_div_width {
            width: 200px;
            margin: 10px 0px;
        }

        .code_textarea {
            height: 130px !important;
        }

        .custom_margin_left {
            margin-left: 15px;
        }

        .error {
            color: #a94442;
        }

        .m-t-54 {
            margin-top: -54px;
        }

        @media (max-width: 992px) {
            .m-t-54 {
                margin-top: 0;
            }
        }

        .ace_editor {
            height: 160px;
            flex: 1;
        }

        .set_border {
            border: 2px solid #FF0000;
        }

        .custom_inline_block {
            display: inline-block;
        }

        .show-inp-drop {
            display: none;
            position: relative;
        }

        .show-inp-drop.active {
            display: block;
        }

        .show-inp-drop .studio-data {
            border-radius: 0;
            position: absolute;
            top: -144px;
            width: 100%;
            left: 0;
        }

        .show-inp-drop .dropp {
            /*margin-top: 38px;*/
        }

        .show-inp-drop .dropp #my-awesome-dropzone .dz-default {
            margin-top: 7% !important;
        }

        .dropp .form-horizontal {
            background-color: #fff;
            padding: 27px 0;
            box-shadow: 0 0 4px #444;
        }

        .list {
            margin-top: 8px;
        }

        .list ul {
            margin: 0;
            padding: 0;
            box-shadow: 0 0 8px #00000096;
            list-style: none;
        }

        .list li {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            justify-content: space-between;
            background-color: #05103363;
            border-bottom: 1px solid #fff;
            align-items: center;
            color: white;
        }

        .list li:last-of-type {
            border: none;
        }

        .list .title {
            margin-left: 10px;
        }

        .list .button {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            flex-wrap: wrap;
        }

        .list .button a {
            border-radius: 0;
        }

        .head-left {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            flex-wrap: wrap;
            color: #777;
        }

        .head-left button {
            border-radius: 0;
        }

        .head-left input {
            padding-left: 5px;
            border: 1px solid transparent;
        }
    </style>
    {!! HTML::style('public/js/dropzone/css/dropzone.min.css') !!}
@stop
@section('JS')
    {!! HTML::script('public/js/dropzone/js/dropzone.js') !!}
    <script>
        $(document).ready(function () {
            var textarea_editor_for_save = {};
            var html = $("#get_for_append").html();
            $(".append_here").html(html);

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
            $('body').on('click', '.edit_sub_group_btn', function () {
                var data = $('#edit_sub_group').serialize()
                $.ajax({
                    url: '{!! route('new_studio_edit_sub_group_name') !!}',
                    type: 'POST',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    success: function (data) {
                        if (data.error) {
                            var message;
                            $.each(data.messages, function (k, v) {
                            });
                            alert(message);
                            return false;
                        }
                        ;
                        window.location = data.url;
                    }
                });
            });
            $('.edit-studio-btn').on('click', function () {
                var data = {'id': $(this).attr('data-id')};
                $.ajax({
                    url: '{!! route('new_studio_edit_studio_form') !!}',
                    type: 'POST',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    success: function (data) {
                        if (!data.error) {
                            $('.edit-form-area').html(data.html);
                        }
                    }
                });
            });
            Dropzone.options.myAwesomeDropzone = {
                init: function () {
                    this.on("success", function (file, data) {
                        if (data.error) {
                            var message;
                            $.each(data.messages, function (k, v) {
                                message += v + '<br>';
                            });
                            alert(message);
                        };
                        location.reload();
                    });
                }
            };
            $("body").delegate(".show_form", "click", function () {
                $(".show-inp-drop").toggleClass('active');
            });
        });
    </script>
@stop
