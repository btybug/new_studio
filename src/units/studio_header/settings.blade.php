<div id="settings_div111">
    <div class="form-group my_rows1">
        <label for="newcontainer" class="col-sm-4 labelTitle">Main Menu</label>
        <div class="col-sm-8">
            {!! BBbutton2('menus','menu_area','frontend','Select Main Menu',['class'=>'form-control input-md','model'=>$settings]) !!}
        </div>
    </div>
    <div class="form-group my_rows1">
        <label for="newcontainer" class="col-sm-4 labelTitle">Widget</label>
        <div class="col-sm-8">
            {!! BBbutton2('unit','widget','widgets','Select Widget',['class'=>'form-control input-md','model'=>$settings]) !!}
        </div>
    </div>
    <div class="form-group my_rows1">
        <label for="newcontainer" class="col-sm-4 labelTitle">User Menu</label>
        <div class="col-sm-8">
            {!! BBbutton2('menus','user_menu','frontend','Select User Menu',['class'=>'form-control input-md','model'=>$settings]) !!}
        </div>
    </div>
    <div class="form-group my_rows1">
        <label for="newcontainer" class="col-sm-4 labelTitle">Is logged</label>
        <div class="col-sm-8">
            <input type="checkbox" name="no_login" value="1">
        </div>
    </div>
</div>





