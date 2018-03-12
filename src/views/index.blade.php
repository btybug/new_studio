@extends('btybug::layouts.admin')
@section('content')
    <div class="middle-wrapper">
        <nav class="row">

        </nav>
        <!--BB:PageContent-->
        <div class="main-wrapper_custm row container_div" style="background:#ffff ">
            <div class="col-md-12 main_content_container">
            </div>
        </div>
        <div class="row list_222">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                <div class="cms_module_list module_list_1">
                    <h3 class="menuText f-s-17">
                        <span class="module_icon_main"></span>Groups

                    </h3>
                    <hr>
                    <ul class="list-unstyled menuList" id="components-list">
                        <li class=" active_class ">
                            <a href="?type=versions" rel="tab" class="tpl-left-items">
                                <span class="module_icon"></span>Versions
                            </a><a data-type="Versions" class="add-class-modal pull-right gettype"></a>
                        </li>
                        <li class="">
                            <a href="?type=front_users" rel="tab" class="tpl-left-items">
                                <span class="module_icon"></span>Front Users
                            </a><a data-type="Front Users" class="add-class-modal pull-right gettype"></a>
                        </li>
                        <li class="">
                            <a href="?type=framework" rel="tab" class="tpl-left-items">
                                <span class="module_icon"></span>Framework
                            </a><a data-type="Framework" class="add-class-modal pull-right gettype"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <img src="http://www.cardbugs.uk/resources/assets/images/ajax-loader5.gif" class="thumb img-loader hide"
                 alt="a picture">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                <div class="tpl-list">


                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-l-0 p-r-0">
                        <div class="template-upload-button clearfix">

                        </div>
                    </div>

                    <div class="container_main">
                        <div data-role="listitem">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-10">
                                    <div class="bottom_part_1">
                                        <a href="http://www.cardbugs.uk/admin/studios/versions/blade_class"><span>blade_class</span></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-10">
                                    <div class="bottom_part_1">
                                        <a href="http://www.cardbugs.uk/admin/studios/versions/blade_maker"><span>blade_maker</span></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-10">
                                    <div class="bottom_part_1">
                                        <a href="http://www.cardbugs.uk/admin/studios/versions/component-class"><span>component-class</span></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-10">
                                    <div class="bottom_part_1">
                                        <a href="http://www.cardbugs.uk/admin/studios/versions/element-collections"><span>element-collections</span></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-10">
                                    <div class="bottom_part_1">
                                        <a href="http://www.cardbugs.uk/admin/studios/versions/global"><span>global</span></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-10">
                                    <div class="bottom_part_1">
                                        <a href="http://www.cardbugs.uk/admin/studios/versions/text"><span>text</span></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-10">
                                    <div class="bottom_part_1">
                                        <a href="http://www.cardbugs.uk/admin/studios/versions/unit-maker"><span>unit-maker</span></a>
                                    </div>
                                </div>


                            </div>

                            <div class="templates-list  m-t-20 m-b-10">

                                <div class="row templates m-b-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('CSS')
    <style>
        @import url('http://cdnjs.cloudflare.com/ajax/libs/select2/3.4.8/select2.css');
        @import url('http://cdnjs.cloudflare.com/ajax/libs/select2/3.4.8/select2-bootstrap.css');

        #wrapper{
            background: #dbdbdb!important;
        }

        .middle-wrapper{
            background: #dbdbdb!important;
        }

        .live-preview{
            min-height: 200px;
            border: 1px solid #dbdbdb;
            margin-bottom: 19px;
        }

        .tools{
            font-family: 'Trebuchet MS', serif;
            line-height: 1.6
        }
        .tools ul.tabs{
            margin: 0px;
            padding: 0px;
            list-style: none;
        }
        .tools ul.tabs li{
            display: inline-block;
            padding: 10px 15px;
            cursor: pointer;
            transition: all .01s;
        }

        .tools .tab-content1{
            display: none;
            padding: 15px 0;
            background: transparent;
            min-height: 300px;
        }
        .tools .tab-content1.current{
            display: inherit;
        }
        .tools .tab-content2{
            display: none;
            background: #eaeaea;
            padding: 33px;
            min-height: 264px;
            box-shadow: 2px 2px 4px #888888;
        }
        .tools .tab-content2.current{
            display: inherit;
        }
        .tools  .flat-area {
            min-height: 182px;
            background: #fafafa;
            width: 100%;
            box-shadow: 2px 2px 4px #888888;
            border-radius: 2px;
            padding: 43px;
        }
        #tab-1 {
            text-align: center;
        }
        .state_text{
            font-size: 14px;
            color: #585454;
        }
        .container_main{
            min-height: 800px !important;
            margin-top: 20px!important;
        }
        #importmodal .modal-body{
            padding-top: 38px!important;
        }
        .fullscreenModal {
            padding-right: 0!important;
            background: #dbdbdb;
        }
        .fullscreenModal .modal-dialog {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .fullscreenModal .modal-content{
            box-shadow: none;
            border: none;
            height: auto;
            min-height: 100%;
            border-radius: 0;
            background: #dbdbdb;
            position: absolute; left: 0; right: 0; top: 0; bottom: 0; overflow: auto;
        }
        .fullscreenModal button.close{
            background: #c34949;
            width: 43px;
            height: 43px;
            margin-top: -48px!important;
            opacity: 1;
            color: white;
        }
        .fullscreenModal .modal-header{
            background-color:#e6e6e6;
            box-shadow: 0 4px 2px -2px #eae9e9;
        }

        .fullscreenModal .modal-header, .fullscreenModal .modal-body{
            color: black;
        }
        .fullscreenModal .modal-body{
            padding-bottom: 0;
        }
        .fullscreenModa .modal-header .close {
            margin-top: -39px;
            font-size: 36px;
        }
        .fullscreenModa .modal-header .close:focus{
            outline: none;
        }
        .tpl-list .templates:hover{
            box-shadow: none;
        }
        /*.template-upload-button {*/
        /*margin-bottom: 15px;*/
        /*}*/
        .main_div{
            width: 95%;
            margin: 0 auto;
        }
        .main_div_1{
            box-shadow: 0 0 10px grey;
            width: 95%;
            margin: 0 auto;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            background: #fbfbfb;
            text-align: center;
        }
        .top_part_1{
            background-color: #fbfbfb;
            height: 200px;
            text-align: center;
            padding: 27px 10px;
            overflow: hidden; position: relative;
        }
        .top_part_1 .btnedit { position:absolute; right: 10px; top: 10px; display: none;}
        .main_div_1:hover .btnedit{display:block;}
        .bottom_part_1{
            background-color: #f1f1f1;
            /*border-top: 4px solid #ededed;*/
            height: 65px;
            text-align: center;
            /*padding: 17px 0;*/
            padding: 10px;
            font-size: 18px;
            overflow: hidden;
        }
        /*.bottom_part_1 a{*/
        /*color: #727272;*/
        /*}*/
        /*.bottom_part_1 > div, .class_banner {*/
        /*position:relative;*/
        /*background-color:#ac4040;*/
        /*height:320px !important;*/
        /*width:100% !important;*/
        /*}*/

        /*.bottom_part_1>div:after,.class_banner:after {*/
        /*content:'';*/
        /*position: absolute;*/
        /*top: 100%;*/
        /*left: 50%;*/
        /*margin-left: -50px;*/
        /*width: 0;*/
        /*height: 0;*/
        /*border-top: solid 50px #ac4040;*/
        /*border-left: solid 50px transparent;*/
        /*border-right: solid 50px transparent;*/
        /*}*/

        /*.bottom_part_1>div {*/
        /*border: 1px solid #ac4040;*/
        /*border-radius: 10px;*/
        /*padding: 20px;*/
        /*position: relative;*/
        /*background: #ac4040;*/
        /*color: #fff;*/
        /*box-shadow: 0 0 7px #000; !* Добавляем тень для блока *!*/
        /*}*/
        /*.bottom_part_1>div::after, .bottom_part_1>div::before {*/
        /*content: '';*/
        /*position: absolute;*/
        /*background: #ac4040;*/
        /*left: 20px; bottom: -11px;*/
        /*width: 20px; height: 20px;*/
        /*box-shadow: 0 0 7px #000; !* Добавляем тень для уголка *!*/
        /*z-index: -1; !* Прячем за основным блоком *!*/
        /*transform: rotate(45deg); !* Поворачиваем на 45º *!*/
        /*-webkit-transform: rotate(45deg);*/
        /*}*/
        /*.bottom_part_1>div::before {*/
        /*z-index: 1; !* Накладываем поверх, чтобы скрыть следы тени *!*/
        /*box-shadow: none; !* Прячем тень *!*/
        /*}*/
        .active-item .bottom_part_1 {
            background-color: rgba(0, 170, 255, 0.35)
        }

        .delImpItem {
            position: absolute;
            top: 19px;
            right: 41px;
            color: white !important;
            background: #ac4040;
            width: 30px;
            height: 30px;
            border-radius: 4px;
            padding: 2px;
        }

        .deleteImpItem i {
            color: #ac4040;
        }

        .editImpItem i {
            color: #255e90;
        }

        .deleteImpItem {
            right: 32px;
            top: 18px;
        }

        .editImpItem {
            right: 59px;
            top: 19px;
        }

        .deleteImpItem, .editImpItem {
            position: absolute;

            width: 30px;
            height: 30px;
            border-radius: 4px;
            padding: 2px;
            font-size: 20px;
        }

        .editBtn, .trashBtn {
            background-color: #fff;
            font-size: 21px;
            width: 34px;
            height: 33px;
            padding: 0;
            line-height: 33px;
            vertical-align: middle;
            border: solid 1px #d2d3d5;
            box-shadow: 1px 1px 3px 0 rgba(2, 2, 2, 0.14);
        }

        .editBtn .fa {
            color: #499bc7;
        }

        .trashBtn .fa {
            color: #d93838;
        }


        .main_div_1:hover, .main_div_1.active{
            border: 1px solid #499cc8;
        }
        .main_div_1:hover .bottom_part_1, .main_div_1.active .bottom_part_1{
            background-color: #499cc8;
            /*border-top: 4px solid #499cc8;*/
            color: #fff;
        }
        .main_div_1:hover .bottom_part_1 span, .main_div_1:hover .bottom_part_1 a, .main_div_1.active .bottom_part_1 span, .main_div_1.active .bottom_part_1 a{
            color: #fff;
        }
        .bottom_part_1 a:hover, .bottom_part_1 a:active, .bottom_part_1 a:visited, .bottom_part_1 a:focus{
            text-decoration: none;
        }
        .bottom_part_1 span {
            color: #bd1a39;

        }
        .save_item{
            background: #4eab69;
            color: #fff;
            width: 135px;
            height: 43px;
            border-radius: 0;
            padding: 7px;
            font-size: 17px;
            border: none;
            position: absolute;
            right: 69px;
            top: 23px;
        }
        .save_item:focus{
            outline: none;
        }

        .btbmodalaction{
            background: #4eab69;
            color: #fff;
            width: 135px;
            height: 43px;
            border-radius: 0;
            padding: 7px;
            font-size: 17px;
            border: none; margin-top: 8px; margin-right: 8px;

        }
        .btbmodalaction:focus{
            outline: none;
        }

        .fullscreenModal .modal-title{
            font-size: 20px;
            background: #f5f4f4;
            color: #4d4d4d;
            padding: 13px 0 12px 39px;
            border: 1px solid #c6c6c6;
            width: 374px;
            font-weight: bold;
            margin-top: 1px;
            margin-left: 33px;
            display: inline-block;
        }
        .save_item .fa-check {
            margin-right: 14px;
        }
        #components-list li{
            padding: 0!important;
            border: none!important;
            margin-bottom: 7px;
            background-color: #ffffff;
        }
        #components-list li .tpl-left-items{
            display: block;
            height: 46px;
            color: #8a8a8d;
            cursor: pointer;
            outline: none;
            transition: 0.1s;
            padding: 10px;
            text-align: center;
            position: relative;
            /*border-radius: 1px;*/
            font-weight: bold;
            border-radius: 7px 7px 0 0;
            /*border-bottom: 3px solid #7372a2;*/
        }
        .cms_module_list .menuList li{
            outline: none!important;
            box-shadow: 1px 1px 1px #ddd;
            border-radius: 7px 7px 0 0;
        }
        .active_class {
            background-color: #7372a2 !important;
        }
        #components-list li .tpl-left-items:hover, #components-list li .tpl-left-items:focus, #components-list li .tpl-left-items:active, #components-list li .tpl-left-items:visited {
            /*background-color: #306480;*/
            background-color: #7372a2;
            text-decoration: none;
        }
        #components-list li .tpl-left-items:focus, #components-list li .tpl-left-items:active{
            color: #ffffff;
        }
        .list_222 .module_list_1 li a{
            font-size: 18px;
            font-family: "Calibri";
            color: #000;
            font-weight: normal;
        }
        .list_222 .module_list_1 li a.trashaIcon:hover #components-list li .tpl-left-items, .menuListButt li .fa-check-circle-o:hover #components-list li .tpl-left-items{
            background-color: #7372a2!important;
        }
        /*#components-list li:hover{*/
        /*background:#306480;!important;*/
        /*}*/
        .list_222 .module_list_1 li a:active{
            text-decoration: none;
        }
        @media (max-width: 1350px) and (min-width: 765px){
            .list_222 .menuList li i{
                font-size: 14px !important;
            }
        }
        @media (max-width: 456px){
            .list_222 .menuList li i{
                font-size: 14px !important;
            }
            .list_222 .menuList li a{
                font-size: 14px !important;
            }
        }
        .module_icon_main_text select{
            width: 100%;
        }
        .module_icon_main_text select:focus, .module_icon_main_text select:active{
            outline: none;
        }
        #components-list li:hover .tpl-left-items{
            color: #ffffff;
            text-decoration: none;
        }
        #components-list .module_icon{
            background: none;
            width: 0;
        }
        /*#components-list li:nth-child(6n+0) .tpl-left-items{*/
        /*border-left: 11px solid #7372a2;*/
        /*}*/
        /*#components-list li:nth-child(6n+1) .tpl-left-items{*/
        /*border-left: 11px solid #4eab69;*/
        /*}*/
        /*#components-list li:nth-child(6n+2) .tpl-left-items{*/
        /*border-left: 11px solid #499bc7;*/
        /*}*/
        /*#components-list li:nth-child(6n+3) .tpl-left-items{*/
        /*border-left: 11px solid #ac4040;*/
        /*}*/
        /*#components-list li:nth-child(6n+4) .tpl-left-items{*/
        /*border-left: 11px solid #878638;*/
        /*}*/
        /*#components-list li:nth-child(6n+5) .tpl-left-items{*/
        /*border-left: 11px solid #2f7357;*/
        /*}*/
        /*#components-list li.active_class .tpl-left-items{*/
        /*background-color: #306480!important;*/
        /*}*/
        #components-list li.active_class a{
            color: white!important;
        }
        @media (min-width:991px) {
            .module_list_1.cms_module_list {
                height: 752px;
                padding: 0 18px;
                overflow-y: auto;
            }
        }
        @media (max-width:990px) {
            .module_list_1.cms_module_list {
                height: 400px;
                padding: 0 18px;
                overflow-y: auto;
            }
            #save-configurator{
                margin-top: 51px!important;
            }
        }

        .add_new_btn{
            position: relative;
            bottom: 29px;
            left: 0;
            width: 100%;
            background: #e9e9e9;
            color: #4d4d4d;
            padding: 11px 0;
            font-size: 19px;
            border: 1px solid #c6c6c6;
        }
        .add_new_btn:hover{
            opacity: 1!important;
        }
        .add_new_btn:focus{
            outline: none;
        }
        .add_new_btn .fa-plus{
            color: #d53f41;
            margin-right: 19px;
        }
        .add_new_btn .fa-cloud-upload{
            color: #499bc7;
            margin-right: 19px;
        }
        .template-search-box.m-b-10 {
            margin-bottom: 8px !important;
        }
        .btn.btn-sm.pull-right.btnUploadWidgets:hover{
            background: #ac4040;
            opacity:0.9;
        }
        .btn.btn-sm.pull-right.btnUploadWidgets:focus{
            outline: none;
        }

        /*components*/
        .contentCont {
            width: 96%;
            margin: 0 auto;
        }
        .transparent_bg{
            background: transparent;
            margin-top: 0!important;
        }
        .contentCont .input_name{
            font-size: 19px;
            background: #f5f4f4;
            color: #656565;
            padding: 8px 0 8px 25px;
            border: 1px solid #c6c6c6;
            width: 339px;
            font-weight: normal;
            margin-top: 0;
            margin-bottom: 14px;
        }
        .tools ul.tabs1 li{
            background: #ededed;
            border: 1px solid #d4cece;
            min-width: 180px;
            color: #737272;
            font-weight: bold;
            margin-right: 8px;
            position: relative;
            font-size: 17px;
            padding: 8px 0 8px 23px;
        }
        .tools ul.tabs1 li i{
            display: none;
            position: absolute;
            right: 18px;
            font-size: 24px;
            top: 10px;
        }
        .tools ul.tabs1 li.current, .tools ul.tabs1 li:hover {
            background-color: #4eab69;
            color: #fff;
        }
        .tools ul.tabs li.current i, .tools ul.tabs1 li:hover i{
            display: inline-block;
        }
        .btnAdd{
            background: #c34949;
            height: 43px;
            padding: 4px 11px;
            border-radius: 0;
            margin-top: -3px;
        }
        .btnAdd:focus{
            outline: none;
        }
        .btnAdd .plusIcon {
            font-size: 18px;
            color: #fff;
            line-height: 29px;
        }
        ul.tabs1 {
            display: inline-block;
        }
        .bottom_area{
            margin-top: 31px;
        }
        .save_item_red{
            background: #c34949;
            color: #fff;
            width: 135px;
            border-radius: 0;
            padding: 7px;
            font-size: 17px;
            border: none;
            height: 49px;
        }
        .save_item_red{
            background: #c34949;
            color: #fff;
            width: 135px;
            border-radius: 0;
            padding: 7px;
            font-size: 17px;
            border: none;
            height: 49px;
        }
        .save_grid{
            margin-top: 15px;
            width: 112px!important;
            height: 42px;
        }
        .save_item_red:hover {
            background:#b53e3e;
            opacity: 1!important;
        }
        .save_item_red:focus{
            outline: none;
        }
        .save_item_red .fa-check {
            margin-right: 14px;
        }
        .tabs2{
            text-align: left;
            display: inline-block;
        }
        ul.tabs2 li{
            background: #f0f0f0;
            border-radius: 5px 5px 0 0;
            border: 1px solid #b7b2b2;
            min-width: 148px;
            font-size: 16px;
            font-weight: bold;
            color: #888686;
            padding: 6px 18px!important;
            height: 37px;
            vertical-align: middle;
        }
        div.tabsAndSave{
            background: white;
            border-radius: 5px 0 0 0;
            text-align: left;
            border-bottom: solid 3px #7372a2;
            height: 49px;
        }

        .tools ul.tabs2 li.current.tab-link, .tools ul.tabs2 li:hover {
            background-color: #7372a2;
            color: #fff;
            border-color: #7372a2;
            height: 47px;
            margin: -1px 0 3px 0!important;
            padding: 12px 18px!important;
        }
        .tab-content-st{
            text-align: left;
        }
        .tab-content-st span{
            font-size: 17px;
            color: #3d3d3d;
            margin-right: 25px;
        }
        .tools .bottom_area select{
            padding: 2px 22px 3px 20px;
            text-align: left;
            min-width: 230px;
            color: #484444;
            font-weight: bold;
            font-size: 17px;
            border-radius: 2px;
            border: 1px solid #bfb8b8;
            margin-right: 23px;
        }
        .tools .bottom_area select:focus{
            outline: none;
        }
        .tools .bottom_area select {
            -moz-appearance:none; /* Firefox */
            -webkit-appearance:none; /* Safari and Chrome */
            /*background: url(../img/component.png) 100% / 16% no-repeat #fff;*/
            cursor: pointer;
        }
        .btnDefault {
            min-width: 389px;
            height: 80px;
            font-size: 45px;
            position: relative;
            color: white;
            border-radius: 5px;
            border: none;
            text-align: left;
            padding-left: 25px;
            background: -webkit-linear-gradient(left, #4a98bc, #57af75); /*Safari 5.1-6*/
            background: -o-linear-gradient(right, #4a98bc, #57af75); /*Opera 11.1-12*/
            background: -moz-linear-gradient(right, #4a98bc, #57af75); /*Fx 3.6-15*/
            background: linear-gradient(to right, #4a98bc, #57af75); /*Standard*/
            text-transform: uppercase;
            box-shadow: 1px 1px 2px #888888;
        }
        .backg-grad{
            background: -webkit-linear-gradient(left, #4a98bc, #57af75)!important; /*Safari 5.1-6*/
            background: -o-linear-gradient(right, #4a98bc, #57af75)!important; /*Opera 11.1-12*/
            background: -moz-linear-gradient(right, #4a98bc, #57af75)!important; /*Fx 3.6-15*/
            background: linear-gradient(to right, #4a98bc, #57af75)!important; /*Standard*/
            padding: 15px;
        }
        .btnDefault i{
            position: absolute;
            right: 16px;
            top: 10px;
            font-weight: bold;
            background: #135468;
            width: 76px;
            border-radius: 3px;
            text-align: center;
            font-size: 61px;
        }
        .btnDefault:focus{
            outline: none;
        }

        .deleteButton{
            font-size: 18px;
            width: 30px;
            height: 29px;
            padding: 0;
            vertical-align: middle;
            background-color: white;
            color: #d93838;
            border: solid 1px #d2d3d5;
            box-shadow: 1px 1px 3px 0 rgba(2,2,2,0.14);
        }
        .deleteButton:hover{
            color: #d93838;
            background: #f6f6f6;
        }
        .deleteButton:focus{
            outline: none;
        }
        /*left menu*/
        a.trashaIcon{
            font-family: FontAwesome!important;
            position: absolute;
            right: 46px;
            top: 3px;
        }
        .list_222 .module_list_1 li a.trashaIcon{
            color: #a52b40;
            font-size: 22px;
        }
        .menuListButt li i{
            position: absolute;
            right: 17px;
            top: 10px;
            font-size: 23px;
        }
        .menuListButt li .fa-exclamation-circle{
            color: #c34949;
        }
        .menuListButt li .fa-check-circle-o{
            color: #4eab69;
        }
        .menuListButt li.active_class .fa-check-circle-o, .menuListButt li.active_class .fa-exclamation-circle, .menuListButt li:hover .fa-check-circle-o, .menuListButt li:hover .fa-exclamation-circle{
            color: #fff;
        }
        .module_icon_main_text{
            width: 100%;
        }
        .module_icon_main_text select{
            height: 41px;
            font-size: 17px;
            font-weight: normal;
            color: #656565;
            border-radius: 5px;
        }

        @media (max-width:1696px ) {
            .tools ul.tabs1 li{
                margin-bottom: 12px;
            }
        }
        .row{
            margin-right:0!important;
            margin-left:0!important;
        }
        /*cont shadow modal*/

        .formoptions .form-control, .form-controlblack,  .textGroupRow button.btn-black {
            background-color: #404040;
            border-color: #404040;
            color: #fff;
        }
        .contShadowOptions .removetextRow {
            right: 2px;
        }
        .formrow {
            border-bottom: solid 1px #3a3a39;
            padding: 20px 0 0;
            margin: 0 15px;
            color: #fff;
        }
        .studio-collapse-header {
            background: #1c1c1c;
            font-weight: bold;
        }
        .iconstudio {
            display: inline-block;
            width: 32px;
            height: 32px;
            vertical-align: middle;
            border-radius: 100%;
            text-align: center;
            line-height: 100%;
            font-weight: normal;
            -webkit-transition: transform 0.5s;
            transition: transform 0.5s;
        }
        .viewicon {
            background: #467a3f;
        }
        .iconstudio i {
            color: #fff;
            margin-top: 6px;
            font-size: 24px;
            -webkit-transition: margin 0.5s;
            transition: margin 0.5s;
        }
        .formoptions label {
            color: #fff;
        }
        .formoptions label {
            font-weight: normal;
            font-size: 18px;
        }
        .switch-flat {
            padding: 0;
            background: #1c1c1c url(/resources/assets/images/divider.png) repeat-x 0 center;
        }

        .switch {
            position: relative;
            display: block;
            vertical-align: top;
            width: 35px;
            height: 30px;
            padding: 3px;
            margin: 0 10px 10px 0;
            border-radius: 18px;
            /* box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05); */
            cursor: pointer;
        }
        .switch-input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }
        .switch-button .switch-input:checked ~ .switch-label {
            box-shadow: none;
            background: transparent;
        }
        .switch-button.switch-flat .switch-label {
            border: none;
            background: transparent;
        }
        .switch-input:checked ~ .switch-label {
            background: #E1B42B;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
        }
        .switch-label, .switch-handle {
            transition: All 0.3s ease;
            -webkit-transition: All 0.3s ease;
            -moz-transition: All 0.3s ease;
            -o-transition: All 0.3s ease;
        }
        .switch-label {
            position: relative;
            display: block;
            height: inherit;
            font-size: 10px;
            text-transform: uppercase;
            background: #eceeef;
            border-radius: inherit;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
        }
        .switch-button .switch-input:checked ~ .switch-handle {
            background: #467A3F;
        }
        /*.switch-flat .switch-input:checked ~ .switch-handle {*/
        /*left: 20px;*/
        /*background: #0088cc;*/
        /*box-shadow: none;*/
        /*}*/
        .switch-input:checked ~ .switch-handle {
            left: 20px;
            box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
        }
        .switch-button .switch-handle {
            background: #9C2E2E;
            width: 16px!important;
            height: 16px!important;
        }
        .switch-flat .switch-handle {
            top: 7px;
            left: 0px;
            width: 22px;
            height: 22px;
            box-shadow: none;
        }
        .switch-label, .switch-handle {
            transition: All 0.3s ease;
            -webkit-transition: All 0.3s ease;
            -moz-transition: All 0.3s ease;
            -o-transition: All 0.3s ease;
        }
        .switch-handle {
            position: absolute;
            top: 4px;
            left: 4px;
            width: 28px;
            height: 28px;
            background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
            background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
            border-radius: 100%;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }
        .addicon {
            background: #9c2e2e;
        }
        .studio-collapse-toobar {
            background: #292929;
            font-weight: normal;
            padding: 0!important;
        }
        .textGroupRow:first-child {
            border-top: none;
        }
        .textGroupRow {
            position: relative;
            padding-right: 35px;
        }
        .removetextRow {
            position: absolute;
            right: 19px;
            top: 15px;
            margin: 0;
            padding: 0;
            width: 24px;
            height: 24px;
            line-height: 24px;
            text-align: center;
            font-size: 14px;
            display: none;
            z-index: 999999;
        }
        .removetextRow i {
            font-size: 14px;
            line-height: 24px;
            margin: 0;
            padding: 0;
        }
        .border-shadow-color {
            border-right: 1px solid #313131;
        }
        .input-color-inblock {
            width: 32px;
            height: 34px;
        }
        .input-color-inblock {
            display: inline-block;
            width: 22px;
            height: 24px;
            vertical-align: middle;
        }
        .studio-collapse-toobar .input-color .input-group-addon {
            border: 2px solid #fff;
            border-radius: 0px;
            padding: 0;
            background: #FFF;
            border-radius: 4px;
        }
        .studio-collapse-toobar .colorpicker-element .input-group-addon i {
            display: inline-block;
            width: 28px;
            height: 28px;
            vertical-align: text-top;
            cursor: pointer;
            border-radius: 4px;
        }
        /*text shadow modal*/
        .switch-button .switch-input:checked ~ .switch-label {
            box-shadow: none;
            background: transparent;
        }
        .border-shadow-color, .border-shadow-offset-x, .border-shadow-offset-y, .basic-font-color, .basic-heading-option, .basic-font-weight, .basic-letter-spacing, .basic-text-transform, .basic-text-align {
            border-right: 1px solid #313131;
        }
        .input-color-inblock {
            width: 32px;
            height: 34px;
        }
        .formoptions label {
            color: #fff;
        }
        .studio-collapse-toobar label {
            font-weight: normal;
            font-size: 14px;
        }
        .spinner {
            position: relative;
            width: 80px;
            display: inline-block;
        }
        .spinner.dual {
            width: 111px;
        }
        .spinner.dual input.spacing-value {
            border-radius: 3px 0 0 3px;
            background: #585757;
            float: left;
            width: 50px;
            border: none;
        }
        .form-control.spacing-type {
            width: 60px;
            -webkit-appearance: none;
            -moz-appearance: none;
            border-radius: 0 4px 4px 0;
        }
        /*.formoptions .form-control, .form-controlblack {*/
        /*background-color: #404040;*/
        /*border-color: #404040;*/
        /*color: #cccccc;*/
        /*}*/
        .textGroupRow .input-group-btn-vertical {
            position: absolute;
            top: 1px;
            right: 19px!important;
            white-space: nowrap;
            width: 1%;
            vertical-align: middle;
            display: table-cell;
        }
        .input-group-btn-vertical > .btn:first-child {
            border-top-right-radius: 4px;
        }
        .input-group-btn-vertical > .btn {
            display: block;
            background-color: rgba(122,122,122,0.25);
            color: #1c1c1c;
            float: none;
            width: 25px;
            max-width: 100%;
            padding: 8px 10px;
            margin-left: -1px;
            position: relative;
            border-radius: 0;
            border: none;
        }
        .input-group-btn-vertical i {
            position: absolute;
            top: 0;
            left: 5px;
        }
        .input-group-btn-vertical > .btn:last-child {
            background-color: #393838;
            margin-top: 0;
            border-bottom-right-radius: 4px;
        }
        .textGroupRow:hover {
            background-color: rgba(0,0,0,0.1);
        }
        .textGroupRow:hover .removetextRow{
            display: block;
        }
        .formrowtitle{
            font-size: 17px;
        }
        .border-shadow-color{
            text-align: center;
        }
        @media (max-width: 1432px){
            .removetextRow {
                right: 5px;
            }
        }

        /*preview area*/
        .preview_area > div, .preview_area_border, .demo_container, .preview_area .preview_cont, .preview_area_shadow .preview_cont, .preview_area_shadow > div, .preview_area_anim .nameofclass .textPreview > div, .preview_area_anim > div{
            display: block;
            width: 50%;
            margin: 27% auto 0;
            position: relative;
        }
        .textPreview{
            text-align: center;
        }
        .demo_container, .preview_area_shadow > div, .preview_area_shadow .nameofclass,.preview_area_anim .nameofclass, .preview_area_border > div, .preview_area_anim > div, .preview_area .demo{
            background: -webkit-linear-gradient(#4a98bc, #57af75);
            background: -o-linear-gradient(#4a98bc, #57af75); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(#4a98bc, #57af75); /* For Firefox 3.6 to 15 */
            background: linear-gradient(#4a98bc, #57af75);
        }
        .textPreview .nameofclass{
            background: transparent;
        }
        .preview_area div, .preview_area .preview_cont, .preview_area_shadow > div, .preview_area_anim > div {
            height: 260px;
            display: block;
        }
        .last_spinner{
            right: 18px;
        }

        /*border and radius modal*/

        .preview_area_border  .preview_cont, .preview_area_border > div{
            height: 260px;
            display: block;
            /*background: #4CA1AF; !* For browsers that do not support gradients *!*/
            /*background: -webkit-linear-gradient(left,#4CA1AF,#C4E0E5); !*Safari 5.1-6*!*/
            /*background: -o-linear-gradient(right,#4CA1AF,#C4E0E5); !*Opera 11.1-12*!*/
            /*background: -moz-linear-gradient(right,#4CA1AF,#C4E0E5); !*Fx 3.6-15*!*/
            /*background: linear-gradient(to right, #4CA1AF, #C4E0E5); !*Standard*!*/
        }
        .borderRadius .input-group-btn-vertical {
            right: 18px!important;
        }
        .customelement {
            margin: 0;
            padding: 0;
            position: relative;
            padding-left: 22px;
            min-width: 112px;
        }
        .customelement label::before, .customelement input[type="checkbox"], .customelement input[type="radio"] {
            content: "";
            display: inline-block;
            position: absolute;
            width: 13px;
            height: 13px;
            left: 0;
            margin: 6px 0 0 0;
            padding: 0;
            border: 0px solid #cccccc;
            border-radius: 50%;
            background-color: #404040;
            -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        }
        .customelement input[type="checkbox"], .customelement input[type="radio"] {
            opacity: 0;
            z-index: 1;
        }
        .customelement input[type="radio"]:checked + label:after {
            content: "";
            display: inline-block;
            position: absolute;
            width: 13px;
            height: 13px;
            left: 0;
            margin: 6px 0 0 0;
            padding: 0;
            border: 0px solid #cccccc;
            border-radius: 50%;
            background-color: #467a3f;
            -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
            transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        }

        .borderRadius .radio-inline label {
            font-size: 16px!important;
        }
        .borderRadius .form-control {
            padding-left: 6px;
        }
        .border-radius-top {
            background: url(/resources/assets/images/border-radius-top_left.png) 0 0 no-repeat;
            width: 32px;
            height: 32px;
        }
        .border-radius-right {
            background: url(/resources/assets/images/border-radius-top-right.png) 0 0 no-repeat;
            width: 32px;
            height: 32px;
        }
        .border-radius-left {
            background: url(/resources/assets/images/border-radius-left-bottom.png) 0 0 no-repeat;
            width: 32px;
            height: 32px;
        }
        .border-radius-bottom {
            background: url(/resources/assets/images/border-radius-right-bottom.png) 0 0 no-repeat;
            width: 32px;
            height: 32px;
        }
        .iconstudio.collapsed {
            transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -webkit-transform: rotate(-90deg);
        }
        @media (max-width: 1200px){
            .last_spinner {
                right: 0;
            }
            .list_222 .colorCodeDataList .form-group {
                width: 100%;
                text-align: center;
            }
        }
        @media (max-width: 1765px){
            .colRow > div{
                display: block;
                width: 50%;
            }
            .last_spinner {
                right: 0;
            }
            .witdh_50{
                width: 50%;
            }
        }
        .studio-collapse-header span {
            font-weight: bold;
            font-size: 16px;
        }
        .frameworkoptionbox {
            margin-top: 2px;
        }
        .textPreview{
            padding: 27%;
            font-size: 71px;
            color: #ffffff;
        }
        @media (max-width: 765px) {
            .textPreview{
                padding: 27%;
                font-size: 30px;
                color: #ffffff;
            }
        }
        .preview_area_btn{
            padding: 111px 42px;
            text-align: center;
        }

        .frameworksuboptionbox, .frameworkoptionbox {
            min-height: 900px;
            /*padding-left: 65px!important;*/
        }
        @media (max-width: 991px){
            .frameworksuboptionbox{
                padding-right: 35px!important;
            }
            .frameworkoptionbox{
                margin-top: 30px;
            }
            .fullscreenModal .modal-body{
                padding-left: 0;

            }

        }

        /*animation  modal*/

        .animation-options .arrowicon,.animation-options .nowicon {
            width: 10px;
            margin-right: 10px;
            margin-left: -10px;
        }
        .animation-options .iconform {
            display: inline-block;
            width: 32px;
            height: 32px;
            vertical-align: middle;
            border-radius: 100%;
            text-align: center;
            line-height: 100%;
        }

        .animation-options .form-control, .animation-options .form-controlblack {
            background-color: #404040;
            border-color: #404040;
            color: #cccccc;
        }

        .btn-black {
            color: #ffffff;
            background-color: #404040;
            border-color: #404040;
        }
        .btn-black:focus, .btn-black:active, .btn-black:hover{
            outline: none;
            color: white;
        }
        .btn-black .caret {
            color: white;
        }

        .iconform:before {
            content: '.';
            background: url(../framework/img/menu-icon.png) no-repeat 0 0;
            display: inline-block;
            width: 25px;
            height: 25px;
            vertical-align: middle;
            font-size: 0;
            color: #FFF;
        }
        .arrowicon:before {
            background-position: -181px -65px;
            width: 10px;
            height: 17px;
            margin-top: 7px;
        }

        .ui-widget-content {
            border: 0;
        }
        .ui-slider {
            background-color: #404040;
            border: solid 0px #c6c6c6;
            height: 8px;
            width: 134px;
            float: left;
            display: block;
            -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.23);
            -moz-box-shadow: inset 0 0 5px rgba(0,0,0,0.23);
            box-shadow: inset 0 0 5px rgba(0,0,0,0.23);
        }
        .ui-corner-all {
            border-radius: 10px;
        }
        .greenSlider .ui-slider-range-min {
            background: #27b151;
        }
        .ui-slider .ui-slider-handle {
            background-color: #cbcbcb;
            width: 8px;
            height: 15px;
            margin-left: -4px;
            top: -4px;
        }
        .fullSliderw {
            width: 100%;
        }
        .animation-options label {
            font-weight: normal;
            font-size: 18px;
            color: #cccccc;
        }
        .animation-options .formrow{
            border-bottom: solid 1px #b3b3b3;
        }
        .animation-options .formrow {
            margin: 0 42px;
        }

        /*icons modal*/
        .ui-slider.uiinline {
            display: inline-block;
            float: none;
            margin-right: 30px;
            margin-left: 10px;
        }
        .ui-widget-content {
            border: 0;
        }
        .ui-slider {
            background-color: #404040;
            border: solid 0px #c6c6c6;
            height: 8px;
            width: 134px;
            float: left;
            display: block;
            -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.23);
            -moz-box-shadow: inset 0 0 5px rgba(0,0,0,0.23);
            box-shadow: inset 0 0 5px rgba(0,0,0,0.23);
        }
        .ui-corner-all {
            border-radius: 10px;
        }
        .redSlider .ui-slider-range-min {
            background: #e62020;
        }
        .ui-slider .ui-slider-handle {
            background-color: #cbcbcb;
            width: 8px;
            height: 15px;
            margin-left: -4px;
            top: -4px;
        }
        .arrowicon, .nowicon {
            width: 10px;
            margin-right: 10px;
            margin-left: -10px;
        }
        .iconform {
            display: inline-block;
            width: 32px;
            height: 32px;
            vertical-align: middle;
            border-radius: 100%;
            text-align: center;
            line-height: 100%;
        }
        .btn.btn-primary.btn-black{
            color: #fff;
        }
        .icon_styles .formrow{
            border-bottom: solid 1px #b3b3b3;
        }
        .bottom_options{
            padding: 27px 25px;
        }
        .icon-preview{
            text-align: center;
        }
        .for_padding{
            padding-top: 6px;
        }

        .fullSliderw.ui-slider{
            width: 100%;
        }

        .studiopreview{
            /*text-align: center;*/
            padding-top: 27%!important;
        }
        /*font-size modal*/
        .font-size .text-style-tool{
            background: black;
            border-radius: 3px;
        }
        /*line_height_preview*/
        .line_height_preview{
            padding: 38px;
        }

        /*navbar modal*/
        .navbar_def{
            background: #2f2a2a;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            color: #fff;
        }
        .navbar_def li {
            float: left;
        }
        .navbar_def li a {
            display: block;
            padding: 12px 21px;
            text-decoration: none!important;
            color: inherit;
        }
        .navbar_def  li a:hover {
            color: #000;
            background-color: #ccc;
        }
        .navbar_def li.icon {display: none;}

        @media screen and (max-width:680px) {
            .navbar_def li:not(:first-child) {display: none;}
            .navbar_def li.icon {
                float: right;
                display: inline-block;
            }
            .navbar_def.responsive {position: relative;}
            .navbar_def.responsive li.icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .navbar_def.responsive li {
                float: none;
                display: inline;
            }
            .navbar_def.responsive li a {
                display: block;
                text-align: left;
            }
        }


        /*components new modal*/
        /*.components_options .panel-heading a:after {
            font-family: 'Glyphicons Halflings';
            content: "\2b";
            float: left;
            color: #fff;
            background: #526e7d;
            position: absolute;
            top: 0px;
            left: 0;
            height: 43px;
            text-align: center;
            width: 41px;
            padding-top: 12px;
        }

        .components_options .panel-heading a.collapsed:after {
            content:"\2212";
        }
        .components_options .panel{
            background: transparent;
        }
        .components_options .panel-body{
            border: none!important;
            padding-right: 0!important;
        }
        .frameworkoptionbox  .panel-default {
            border:none!important;
        }*/
        /*.components_options .panel-heading:nth-child(6n+0){*/
        /*background: #a00a0a;*/
        /*}*/
        /*.components_options .panel-heading:nth-child(6n+1){*/
        /*background: #4b9bc7;*/
        /*}*/
        /*.components_options .panel-heading:nth-child(6n+2){*/
        /*background: #fff;*/
        /*}*/


        .frameworkoptionbox .module_list_1.cms_module_list{
            height: 586px!important;
            border-radius: 5px 0 0 5px;
        }
        .frameworkoptionbox  #components-list li .tpl-left-items{
            padding-left: 11px;
        }

        .frameworkoptionbox  .right_list{
            background: #dbdbdb;
            padding-top: 15px;
            padding-right: 15px;
            overflow-y: auto;
            height: 586px!important;
            border: 1px solid #c6c6c6;
            border-radius: 0 5px 5px 0;
            /*border-right: 7px inset transparent;*/
        }
        .frameworkoptionbox .selected_classes{
            margin: 15px 0;
            background: #f0f0f0;
            border: 1px solid #c6c6c6;
            color: #4d4848;
            border-radius: 5px;
            padding: 15px 30px;
        }
        .frameworkoptionbox .save_class {
            background: #4eab69;
        }
        .frameworkoptionbox .decline_class{
            background: #c34949;
        }

        .frameworkoptionbox .save_class,.frameworkoptionbox .decline_class{
            color: #fff;
            width: 135px;
            height: 43px;
            border-radius: 0;
            padding: 7px;
            font-size: 17px;
            border: none;
            margin-right: 4px;
        }
        .frameworkoptionbox .save_class:focus, .frameworkoptionbox .decline_class:focus{
            outline: none;
        }
        .frameworkoptionbox .save_class .fa-check, .frameworkoptionbox .decline_class .fa-close{
            margin-right: 14px;
        }
        .frameworkoptionbox .buttons_bottom{
            text-align: center;
        }
        .frameworkoptionbox .selected_classes h5{
            font-size: 15px;
            color: #575758;
            font-weight: bold;
            margin-bottom: 21px;
        }
        .frameworkoptionbox .selected_classes .prefix_area{
            text-align:center;
            padding-top: 7px; text-overflow: ellipsis; white-space:pre;
        }
        .frameworkoptionbox .selected_classes .class_item{
            color: white;
            margin-bottom: 11px;
            min-height: 35px;
        }

        .frameworkoptionbox .class_item:nth-child(6n+1){
            background: #377495;
        }
        .frameworkoptionbox .class_item:nth-child(6n+2){
            background: #3a804f;
        }
        .frameworkoptionbox .class_item:nth-child(6n+3){
            background: #565579;
        }
        .frameworkoptionbox .class_item:nth-child(6n+4){
            background: #907237;
        }
        .frameworkoptionbox .class_item:nth-child(6n+5){
            background: #65642a;
        }
        .frameworkoptionbox .class_item:nth-child(6n+6){
            background: #923737;
        }
        .frameworkoptionbox .class_item .name_area{
            background:rgba(0,0,0,0.5);
            color: #fff;
        }


        .frameworkoptionbox .class_item{
            cursor: pointer;
        }
        .frameworkoptionbox .selected_classes .name_area {
            min-height: 35px;
            text-align:center;
            padding-top: 7px;
            text-overflow: ellipsis;
            white-space: pre;
        }
        .frameworkoptionbox .selected_classes .close_icon_area {
            background: inherit;
            border: none;
            min-height: 35px;
            text-align: center;
        }
        .frameworkoptionbox .selected_classes .close_icon_area i{
            /*position:absolute;*/
            /*right: 13px;*/
            /*top: 9px;*/
        }
        .frameworkoptionbox .selected_classes .close_icon_area:hover{
            cursor: pointer;
        }
        .frameworkoptionbox .selected_classes ul,.frameworkoptionbox .right_list ul{
            list-style-type: none!important;
        }
        .frameworkoptionbox .right_list  .ui-widget-content{
            background: transparent;
        }
        .frameworkoptionbox .selected_classes .ui-widget-header {
            border: none;
            background: transparent;
        }


        .componetlisting { list-style:none; margin: 0; padding: 0;}
        .componetlisting li { margin: 0; padding: 0;}
        .componetlisting ol{ list-style:none; margin: 0; padding: 0 0 0 37px;}
        .componetlisting .listinginfo { margin-bottom: 14px; background: #4b9bc7; color: #FFF; padding: 0 15px 0 0; border:solid 1px #c6c6c6;}
        .componetlisting .listinginfo.bgred { background: #ac4343}
        .componetlisting .listinginfo.bgreen { background: #50ab69}
        .componetlisting .listinginfo.bgorange { background: #c77e49}
        .componetlisting .listinginfo.disabledlist { background: #646464;}
        .componetlisting .listinginfo.activelist, .componetlisting .listinginfo.selectedactivelist { background: rgba(0,0,0,0.8);}
        .componetlisting .listingtitle { font-weight: bold;}
        .componetlisting .lsitingbutton{ float: right;}
        .componetlisting .lsitingbutton .btn { background:rgba(0,0,0,0); font-size: 18px; padding: 0; width: 38px; line-height: 38px; height: 36px;}
        .componetlisting .btn {border-radius: 0; color: #FFF;}
        .componetlisting .btn:hover, .componetlisting .btn:focus{ color: #FFF;}
        .componetlisting .btn-collapse { background:rgba(0,0,0,0.5); padding: 0; line-height: 38px; width: 40px; height: 38px; font-size: 16px; font-weight: bold; color: #FFF; margin-right: 20px;}

        .listingonoff{ display:inline-block; vertical-align: middle; position: relative; padding: 10px 0 0}
        .listingonoff [type="checkbox"]:not(:checked),
        .listingonoff [type="checkbox"]:checked {
            position: absolute;
            left: -9999px;
        }

        .listingonoff [type="checkbox"]:not(:checked) + label,
        .listingonoff [type="checkbox"]:checked + label {
            position: relative;
            padding-left:0;
            cursor: pointer;
            width: 34px; height: 2px;
            background: rgba(0,0,0,0.5);
            display: block;
        }

        .listingonoff label:before{
            content: '';
            position: absolute;
            left: 0;  top: -7px; width: 15px; height: 15px; background: #FFF; border-radius: 15px; -webkit-transition: all 0.5s; /* Safari */
            transition: all 0.5s;

        }
        .listingonoff [type="checkbox"]:not(:checked) + label:after {

        }
        .listingonoff [type="checkbox"]:checked + label:before {
            left: 100%; margin-left: -15px;
        }

        #photo-file-drag{  background-color: #4389c5;  color: #fff; padding:0; pointer-events: none;  z-index: 99999; width:170px; overflow: hidden; white-space: nowrap;  text-overflow: ellipsis; outline:solid 1px rgba(255,255,255,0.5); box-shadow:1px 1px 2px rgba(0,0,0,0.2); line-height:40px; }
        #photo-file-drag > div{ width:100%;}
        #photo-file-drag .label{ position:absolute; right:0; top:0; border-radius:0; }



        .frameworkoptionbox .ui-state-highlight,.frameworkoptionbox .ui-widget-content .ui-state-highlight, .frameworkoptionbox .ui-widget-header .ui-state-highlight,.frameworkoptionbox .ui-state-default,.frameworkoptionbox .ui-widget-content .ui-state-default, .frameworkoptionbox .ui-widget-header .ui-state-default {
            border: none;
            background: transparent;
        }
        .frameworkoptionbox #sortable1, .frameworkoptionbox #sortable2{
            width:100%;
        }
        .frameworkoptionbox .classes_list_1, .frameworkoptionbox .class_item {
            width: 31%;
            margin-right: 10px;
            display: inline-block;
        }
        .frameworkoptionbox #sortable {width:100%;min-height:100px;overflow:auto;}
        .frameworkoptionbox #draggable, .ui-sortable{
            list-style-type: none;
        }
        .frameworkoptionbox #draggable > li{
            z-index: 9999999999!important;
        }

        .frameworkoptionbox ::-webkit-scrollbar, .list_222 ::-webkit-scrollbar {
            width: 6px;
        }

        .frameworkoptionbox ::-webkit-scrollbar-thumb, .list_222 ::-webkit-scrollbar-thumb{
            border-radius: 10px;
            background: #bfbfbf;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.2);
        }
        .frameworkoptionbox #draggable > li {
            cursor: move;
        }
        /*.template-upload-button .rightButtons{*/
        /*margin: 9px!important;*/
        /*}*/

        .frameworksuboptionbox.positon_popup .customselect button.btn.dropdown-toggle.selectpicker.class-style-menu, .frameworksuboptionbox.positon_popup .btn-group.bootstrap-select.form-control.customselect{
            width: 194px!important;
            margin-right: 10px;
        }

        /*position popup*/
        /*.positon_popup .spinner.dual .input-group-btn-vertical, .z_index_options .spinner.letter-spacing .input-group-btn-vertical,*/
        .input-group-btn-vertical.right-19{
            right: 19px!important;
        }


        .htmlindicate, .ahtmlindicate { outline:dotted 1px red;}
        .layoutFooter > .col-md-12.p-b-5 {
            height: 39px;
            text-overflow: ellipsis;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }
        .layoutFooter{
            clear: both;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .editBtn, .trashBtn, .copyBtn {
            background-color: #fff;
            font-size: 21px;
            width: 34px;
            height: 33px;
            padding: 0;
            line-height: 33px;
            vertical-align: middle;
            border: solid 1px #d2d3d5;
            box-shadow: 1px 1px 3px 0 rgba(2, 2, 2, 0.14);
        }
        @media only screen and (min-width : 992px) {
            .layoutData {
                padding: 20px 20px 0 0;
            }
        }
        @media only screen and (max-width : 991px) {
            .layoutData {
                padding: 7px 0 0 0;
            }
            .editBtn, .trashBtn, .copyBtn{
                font-size: 15px;
                width: 27px;
                height: 27px;
                padding: 0;
                line-height: 28px;
            }
            .layoutData{
                font-size: 13px;
            }
            .add_new_btn {
                font-size: 14px;
            }
        }
        .trashBtn .fa {
            color: #d93838;
        }
        .editBtn .fa {
            color: #499bc7;
        }
        button:focus{
            outline: none!important;
        }
        .value_input .form-control {
            background-color: #404040;
            border-color: #404040;
            color: #cccccc;
        }

        .value_input .input-group-btn-vertical {
            right: 19px;
        }

        .colorSelectBox .form-control {
            border: none;
        }

        .btnUploadWidgets {
            background: #ac4040;
            height: 54px;
            padding: 12px 22px;
            border-radius: 0;
        }
        @media (min-width: 991px) {
            .btnUploadWidgets { margin: 0!important;}
        }
        .module_upload_icon {
            float: left;
            font-size: 18px;
            color: #fff;
            line-height: 29px;
            margin-right: 8px;
        }

        .upload_module_text {
            font-size: 15px;
            color: #ffffff !important;
        }

        .bottom_part_1 a i {
            color: white !important;
        }
        @media (max-width: 1720px){
            .bottom_part_1 > a {
                font-size: 14px;
            }
            .list_222 .menuList li a {
                font-size: 14px !important;

                text-align: left!important;
            }
            #components-list li .tpl-left-items{
                text-align: left!important;
            }
        }
        .active-item .bottom_part_1 {
            background-color: rgba(0, 170, 255, 0.35)
        }

        .deleteImpItem i {
            color: #ac4040;
        }

        .editImpItem i {
            color: #255e90;
        }

        .deleteImpItem {
            right: 32px;
            top: 18px;
        }

        .editImpItem {
            right: 59px;
            top: 19px;
        }

        .deleteImpItem, .editImpItem {
            position: absolute;
            width: 30px;
            height: 30px;
            border-radius: 4px;
            padding: 2px;
            font-size: 20px;
        }

        .form-inline {
            display: inline-block;
        }
        .colorCodeDataList .form-group .spinner label, .list_222 .form-group label{
            padding-left: 0!important;
        }

    </style>
@stop
@section('JS')
@stop
