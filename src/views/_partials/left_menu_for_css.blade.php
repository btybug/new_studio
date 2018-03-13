<div class="top_left">
    <h3 class="panel-title">Groups </h3>
    <a href="{{route("create_folder")}}" class="btn btn-sm btn-success pull-right custom_create_group"><i class="fa fa-plus"></i></a>
</div>

<div class="clearfix"></div>
<div class="cms_module_list module_list_1">
    <div class="panel panel-default">
        <div class="panel-body body_append">
            @if(count($directories))
                @foreach($directories as $index => $directory)
                    <div class="panel panel-default class_for_remove">
                        <div class="panel-heading">
                            <a class="accordion-toggle colps" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_{{$index}}" aria-expanded="true">
                                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                <span class="title">{{$directory["dirname"]}}</span>
                            </a>
                                <span class="pull-right">
                                    @if($directory["dirname"] != "Container" && $directory["dirname"] != "Image" && $directory["dirname"] != "Text")
                                        <button class="btn btn-sm btn-primary edit_folder_name" data-dname="{{$directory["dirname"]}}"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-sm btn-danger remove_group" data-name="{{$directory["dirname"]}}"><i class="fa fa-remove"></i></button>
                                    @endif
                                    <a href="{{route("create_file",$directory["dirname"])}}" class="btn btn-sm btn-success custom_create_new_file"><i class="fa fa-plus"></i></a>
                                </span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-content collapse in" id="collapseOne_{{$index}}" aria-expanded="true">
                            <ul class="list-unstyled menuList m-t-10 components_list" data-role="componentslist">
                                @if(count($directory["children"]))
                                    @foreach($directory["children"] as $sub_group)
                                        <?php
                                            $original_name = explode('.',$sub_group->getFilename())[0];
                                        ?>
                                        <li class="custom_padding_left_0">
                                            <a href="{{route("get_content")}}?type={{$original_name}}" rel="tab" class="tpl-left-items"> {{\App\Http\Controllers\PhpJsonParser::renderName(explode("_",explode('.',$sub_group->getFilename())[0]))}}</a>
                                            <span class="inline-block pull-right">
                                               {{-- <button class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></button>
                                                @if($original_name != "xl_large_text" && $original_name != "l_text" && $original_name != "m_text" && $original_name != "s_text" && $original_name != "xs_text" && $original_name != "link_text" && $original_name != "icons")
                                                    <button class="btn btn-xs btn-danger remove_file" data-name="{{$original_name}}"><i class="fa fa-remove"></i></button>
                                                @endif--}}
                                            </span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<div id="div_for_scroll"></div>
<script type="template" id="append_group">
    <div class="panel panel-default class_for_remove">
        <div class="panel-heading">
            <a class="accordion-toggle colps" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_{rand_str}" aria-expanded="true">
                <span class="icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                <span class="title">{dirname}</span>
            </a>
            <span class="pull-right">
                <button class="btn btn-sm btn-primary edit_folder_name" data-dname="{dnameforedit}"><i class="fa fa-edit"></i></button>
                <button class="btn btn-sm btn-danger remove_group" data-name="{dname}"><i class="fa fa-remove"></i></button>
                <a href="{{route("create_file",'repl')}}" class="btn btn-sm btn-success custom_create_new_file"><i class="fa fa-plus"></i></a>
            </span>
            <div class="clearfix"></div>
        </div>
        <div class="panel-content collapse in" id="collapseOne_{rand_str}" aria-expanded="true">
            <ul class="list-unstyled menuList m-t-10 components_list" data-role="componentslist">

            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</script>
<script type="template" id="append_new_file">
    <li class="custom_padding_left_0">
        <a href="{{route("get_content")}}?type={original_name}" rel="tab" class="tpl-left-items">{filename}</a>
        {{--<span class="inline-block pull-right">
            <button class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></button>
            <button class="btn btn-xs btn-danger remove_file" data-name="{fname}"><i class="fa fa-remove"></i></button>
        </span>--}}
        <div class="clearfix"></div>
    </li>
</script>
<script>
    function titleCase(str) {
        str = str.toLowerCase().split('_');

        for(var i = 0; i < str.length; i++){
            str[i] = str[i].split('');
            str[i][0] = str[i][0].toUpperCase();
            str[i] = str[i].join('');
        }
        return str.join(' ');
    }
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (var i = 0; i < 5; i++)
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    }
        var base_path = window.location.origin;
        $("body").delegate(".custom_create_group","click",function(event){
            event.preventDefault();
            var route_to_back = $(this).attr("href");
            var _token = $('input[name=_token]').val();
            var template = $("#append_group").html();
            $.ajax({
                url: route_to_back,
                data: {
                    _token: _token
                },
                success: function (data) {
                    if(data.dirname){
                        var name = titleCase(data.dirname);
                        template = template.replace("{dirname}",name).replace("repl",data.dirname).replace("{dname}",data.dirname).replace("{dnameforedit}",data.dirname).replace("{rand_str}",makeid());
                         return $(".body_append").append(template);
                    }
                },
                type: 'POST'
            });
        });
        $("body").delegate(".custom_create_new_file","click",function(e){
            e.preventDefault();
            var address = $(this).attr("href");
            var _token = $('input[name=_token]').val();
            var template = $("#append_new_file").html();
            var that = $(this);
            $.ajax({
                url: address,
                data: {
                    _token: _token
                },
                success: function (data) {
                    if(!data.error){
                        var name = titleCase(data.filename);
                        template = template.replace("{filename}",name).replace("{original_name}",data.filename).replace("{fname}",data.filename);
                        return that.parents("div.panel.panel-default").children(".panel-content").children("ul.components_list").append(template);
                    }
                },
                type: 'POST'
            });
        });
        $("body").delegate(".remove_group","click",function(){
            var dirname = $(this).data("name");
            var that = $(this);
            var _token = $('input[name=_token]').val();
            var url = base_path + "/admin/framework/css-classes/removedir";
            $.ajax({
                url: url,
                data: {
                    dirname:dirname,
                    _token: _token
                },
                success: function (data) {
                    if(!data.error){
                        that.parents("div.panel.panel-default.class_for_remove").remove();
                    }
                },
                type: 'POST'
            });
        });
        /*$("body").delegate(".remove_file","click",function(){
            var filename = $(this).data("name");
            var that = $(this);
            var _token = $('input[name=_token]').val();
            var url = base_path + "/admin/framework/css-classes/removefile";
            $.ajax({
                url: url,
                data: {
                    filename:filename,
                    _token: _token
                },
                success: function (data) {
                    if(!data.error){
                        that.parents("li.custom_padding_left_0").remove();
                    }
                },
                type: 'POST'
            });
        });*/
        $("body").delegate(".edit_folder_name","click",function(){
            alert($(this).data("dname"));
        });
</script>
<style>
    .custom_padding_left_0{
        padding-left:0!important;
    }
    .top_left{
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
        margin-bottom: 24px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .colps{
        text-decoration: none !important;
        color: #333;
    }
    .cms_module_list > .panel-default{
        margin: 0;
    }
    .cms_module_list .menuList{
        float: left;
        padding: 0;
        margin: 0;
        margin-left: 29px;
    }
    .cms_module_list .menuList li a{
        margin: 0 13px;
    }
    .cms_module_list .menuList li{
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
    }

    .panel-body{
        padding: 0;
    }
    .panel-default{
        border: none;
        margin: 0;
    }
    .this_flex{
        display: flex;
        align-items: center;
    }
    .this_flex button{
        margin-left: 10px;
    }
    .bordered{
        width:100%;
        border: 1px solid #000000;
        padding:10px;
    }
</style>