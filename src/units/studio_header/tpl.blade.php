<section id="menuBuilderHeader">
    <section class="container-fluid p-0">
        <div class="row">
            <div class="col-xs-5 col-sm-5 p-0">
                <button type="button" class="logoImg pull-left">
                    {{--<i class="iconheadersprite iconlogoImg"></i>--}}
                    <img class="iconlogoImg" src="{{url('public/images/newstudio/logoicon.png')}}" alt="logo">
                </button>
                <button type="button" class="fileBtn pull-left" data-openmenu="mainmenu">
                    {{--<i class="iconheadersprite iconFolder"></i>--}}
                    <i class="fa fa-folder-open iconFolder"></i>
                    <span class="mobileNone">File</span>
                    {{--<i class="iconheadersprite dropdownArrow"></i>--}}
                    <i class="fa fa-angle-down dropdownArrow"></i>
                </button>

                <div class="dropdown view-dropdown-menu">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{--<i class="iconheadersprite iconViewEye"></i> --}}
                        <i class="fa fa-eye iconViewEye"></i>
                        <span class="mobileNone">View</span>
                        <i class="fa fa-angle-down dropdownArrow"></i>
                        {{--<i class="iconheadersprite dropdownArrow"></i>--}}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li role="separator" class="divider"></li>
                        <li class="grids"><a href="#" data-viewtoolbar="grid">
                                {{--<i class="iconheadersprite iconViewEyeNa"></i> --}}
                                <i class="fa fa-eye-slash iconViewEyeNa"></i>
                                Grids</a>
                        </li>
                        <li role="separator" class="divider m-b-10"></li>
                        <li><a href="#view-responsives-modal" class="active" data-openresponsiveview="modal"
                               data-viewtoolbar="reponsive">
                                {{--<i class="iconheadersprite iconViewEyeNa"></i>--}}
                                <i class="fa fa-eye-slash iconViewEyeNa"></i>
                                Responsive</a></li>
                        <li><a href="#" class="active" data-viewtoolbar="redoundo">
                                {{--<i class="iconheadersprite iconViewEyeNa"></i>--}}
                                <i class="fa fa-eye-slash iconViewEyeNa"></i>
                                Redo &amp; undo</a></li>
                        <li><a href="#" class="active" data-viewtoolbar="setting">
                                {{--<i class="iconheadersprite iconViewEyeNa"></i>--}}
                                <i class="fa fa-eye-slash iconViewEyeNa"></i>
                                Settings</a></li>
                        <li><a href="#" class="active" data-viewtoolbar="fullscreen">
                                {{--<i class="iconheadersprite iconViewEyeNa"></i>--}}
                                <i class="fa fa-eye-slash iconViewEyeNa"></i>
                                Full Screen</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3">
                <select id="builderStudio" class="form-control customselect" data-role="selectStudio"
                        data-style="btn-menuSelect " style="display: none;">
                    <option value="menubuilder">Menu Builder</option>
                    <option value="container">Container css</option>
                    <option value="button">Button css</option>
                    <option value="text">Text css</option>
                    <option value="icon">Icon css</option>
                    <option value="image">Image css</option>
                    <option value="fields">Fields css</option>
                    <option value="animation">Animation css</option>
                    <option value="panel">Panel</option>
                    <option value="tab">Tab</option>
                    <option value="fields-builder">Fields Builder</option>
                    <option value="color">Color Builder</option>
                    <option value="theme-studio">Theme studio</option>
                    <option value="page-builder">Page Builder</option>
                    <option value="unit-builder">Unit Builder</option>
                    <option value="form-builder">Form Builder</option>
                    <option value="site-builder">Site Builder</option>
                    <option value="image-edit">Image Edit</option>
                    <option value="uploader">Uploader</option>
                </select>
                <div class="btn-group bootstrap-select form-control customselect">
                    <button type="button" class="btn dropdown-toggle selectpicker btn-menuSelect" data-toggle="dropdown"
                            data-id="builderStudio" title="Select Studio"><span
                                class="filter-option pull-left">Select Studio </span>&nbsp;<span class="caret"><i
                                    class="fa fa-angle-down"></i></span>
                    </button>
                    <div class="dropdown-menu open">
                        <ul class="dropdown-menu inner selectpicker" role="menu">
                            @if(isset($settings['studios']) && count($settings['studios']))
                                @foreach($settings['studios'] as $id)
                                    @php
                                        $studio = get_studio($id);
                                    @endphp
                                    @if($studio)
                                        <li rel="{{ $studio->id }}"><a tabindex="0" data-id="{{ $studio->id }}"
                                                                       class="select-type" style=""><span
                                                        class="text">{{ $studio->name }}</span><i
                                                        class="glyphicon glyphicon-ok icon-ok check-mark"></i></a></li>
                                    @endif
                                @endforeach
                            @endif


                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-xs-4 col-sm-4 loginMobilePosition">
                <div class="login-data-col">
                    <div class="login-profile">
                        <a href="#" class="closeIcon" data-dismiss="modal">
                            {{--<i class="icon-close-red"></i>--}}
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <div class="menuIcons">
                    </div>
                </div>
                <div class="loginCol">
                    <div class="btn-group">
                        @if(!Auth::check())
                            <button type="button" id="dropdown-login" class="btn btn-default btn-black2 dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Login <span
                                        class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right dropdowncontainer p-10">
                                {!! Form::open(['url'=>url('login'),'id'=>'studio-login-form']) !!}
                                <div class="form-group"><input class="form-control" placeholder="Username or Email"
                                                               name="usernameOremail" type="text"></div>
                                <div class="form-group"><input class="form-control" placeholder="Password"
                                                               name="password" type="password" value=""></div>
                                <div class="customelement">
                                    <input name="remember" type="checkbox" id="remember" value="Remember Me">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <span class="login-error"></span> <input class="btn btn-black2 btn-block login-studio"
                                                                         type="submit" value="Login">
                                <input type="hidden" name="redirect_to" value="{!! url()->current() !!}">
                                {!! Form::close() !!}
                                @else
                                    <div class="dropdown logedCol">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{!! BBGetUser() !!}<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">My Acount</a></li>
                                            <li><a href="#">Other</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="{!! url('logout') !!}">Log out</a></li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<section id="main-wrapper">
    @php
        $studio = null;
        if(app('request')->input('id')){
            $studio = get_studio(app('request')->input('id'));
        }
    @endphp

    @if($studio)
        @include($studio->hint_path)
    @endif
</section>
<style>
    .logedCol{
        float: right;
        margin-top: 5px;
    }
    .logedCol>a{
        font-size: 14px;
        color: white;
        text-decoration: none;
    }
    .logedCol .dropdown-menu{
        min-width: 100%;
    }
</style>
{!! BBstyle($_this->path.DS.'css'.DS.'bootstrap-select.min.css') !!}
{!! BBstyle(plugins_path('vendor'.DS.'btybug.hook'.DS.'newstudio'.DS.'src'.DS.'assets').DS.'css'.DS.'header.css') !!}

{!! BBscript($_this->path.DS.'js'.DS.'bootstrap-select.min.js') !!}
{!! BBscript(plugins_path('vendor'.DS.'btybug.hook'.DS.'newstudio'.DS.'src'.DS.'assets').DS.'js'.DS.'main.js') !!}
