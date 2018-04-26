@extends('btybug::layouts.admin')
@section('content')
    <div class="col-md-12">
        <h2>
            All Items
        </h2>
        <div class="list">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>User</th>
                    <th>Studio Type</th>
                    <th>Css Data</th>
                    <th>Html Data</th>
                    <th>Json Data</th>
                    <th>Adiational Data</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Nice button</td>
                    <td>Abokamal</td>
                    <td>Button Studio</td>
                    <td>.nice-button{nice:100%}</td>
                    <td>{!! "<button class='nice-button'></button>" !!}</td>
                    <td>{'nice-button':{'nice':'100%'}}</td>
                    <td></td>
                    <td>Actions</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('CSS')
@stop
@section('JS')

@stop
