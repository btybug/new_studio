<div class="dropp">
    {!! Form::model($studio,['url'=>route('new_studio_edit_studio'),'class'=>'','files'=>true]) !!}
    <div class="form-horizontal">
        <div class="form-group">
            <label class="col-md-2 control-label">Studio Name</label>
            <div class="col-md-8">
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Studio Image</label>
            <div class="col-md-8">
                {!! Form::file('image',['class'=>'form-control']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Studio Description</label>
            <div class="col-md-8">
                {!! Form::textarea('description',null,['class'=>'form-control']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Studio File:</label>
            <div class="col-md-8">
                {!! Form::file('file',['class'=>'form-control']) !!}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    {!! Form::hidden('id') !!}
    {!! Form::submit(null,['class'=>'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
</div>