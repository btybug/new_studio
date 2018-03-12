<header class="header-login-signup">

    <div class="header-limiter">

        <h1>
            <a href="{{route("go_to_home")}}">
                <img src="{!! BBgetSiteLogo() !!}" alt="">
                <span>{!! BBgetSiteName() !!}</span>
            </a>
        </h1>

        @if(isset($settings['menu_area']))
            @php
                $items = BBGetMenu($settings['menu_area'])
            @endphp
            @if(count($items))
                <nav>
                    @foreach($items as $item)
                        <a href="{!! url($item->url) !!}"><i
                                        class="fa {!! $item->icon !!}"></i> {!! $item->title !!}</a>
                    @endforeach
                </nav>
            @endif
        @endif

        @if(!Auth::check())
            <ul class="custom_ul_login_register">
                @if(isset($settings['widget']))
                <li>
                    {!! BBRenderUnits($settings['widget']) !!}
                </li>
                @endif
                <li><a href="#"><i class="fa fa-user-plus"></i><span class="sign-log-span">Sign Up</span></a>
                </li>
                <li><a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-sign-in"></i><span class="sign-log-span"> Login</span></a></li>
                <li class="head-mob-reg">
                    <div>
                        <a href="#" id="burger-mob-head">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>

            </ul>
        @else
            <ul class="nav navbar-nav navbar-right header-user">
                @if(isset($settings['widget']))
                    <li>
                        {!! BBRenderUnits($settings['widget']) !!}
                    </li>
                @endif
                <li>
                    <a href="" class="user-link"><img src="{!! BBGetUserAvatar() !!}" alt="">{{Auth::user()->username}} <i class="fa fa-caret-down"></i></a>
                    <ul>
                        @if(isset($settings['user_menu']))
                            @php
                                $items = BBGetMenu($settings['user_menu'])
                            @endphp
                            @if(count($items))
                                @foreach($items as $item)
                                    <li class="custom_li_style"><a href="{!! url($item->url) !!}" class="custom_link_style"><i class="fa {!! $item->icon !!}"
                                                                             aria-hidden="true"></i><span>{!! $item->title !!}</span></a>
                                    </li>
                                @endforeach
                            @endif
                        @endif
                        <li class="custom_li_style"><a href="{!! url('logout') !!}" class="custom_link_style"><i class="fa fa-sign-out" aria-hidden="true"></i><span>Log out</span></a></li>
                    </ul>
                </li>
                <li class="head-mob-reg">
                    <div>
                        <a href="#" id="burger-mob-head">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                    </div>
                </li>

            </ul>
        @endif

    </div>

</header>


<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['url'=>url('login')]) !!}
                <fieldset>
                    <h2>Please Login</h2>
                    <hr class="colorgraph">
                    <div class="form-group">
                        <input type="text" name="usernameOremail" id="email" class="form-control input-lg" placeholder="Username or Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" value="">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                        </label>
                        <a href="http://albumbugs.dev/forgot" class="btn btn-link pull-right">Forgot Password?</a>
                    </div>
                    <hr class="colorgraph">
                </fieldset>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Login">
            </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>
</div>

<script>

    $(document).ready(function(){

        var showHeaderAt = 150;

        var win = $(window),
            body = $('body');

        // Show the fixed header only on larger screen devices

        if(win.width() > 600){

            // When we scroll more than 150px down, we set the
            // "fixed" class on the body element.

            win.on('scroll', function(e){

                if(win.scrollTop() > showHeaderAt) {
                    body.addClass('fixed');
                }
                else {
                    body.removeClass('fixed');
                }
            });

        }
        var headburg = $('#burger-mob-head');
        var headnav = $('.header-login-signup .header-limiter nav');
        headburg.on( "click", function() {
            headnav.toggle();
            $(this).children('i').toggleClass('fa-bars fa-times');
        });

    });

</script>
{{--<div class="bty-log-reg">
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                {!! Form::open(['url'=>url('login')]) !!}
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="usernameOremail" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" name="password" data-type="password">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
                {!! Form::close() !!}
                {!! Form::open() !!}
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="text" class="input">
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1"><a href="">Already Member?</a></label>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>--}}
{!! BBstyle($_this->path.DS.'css'.DS.'main.css') !!}
{!! BBscript($_this->path.DS.'js'.DS.'main.js') !!}
