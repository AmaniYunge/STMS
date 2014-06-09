@extends('master')

@section('title')
Driver Management
@stop
@section('contents')
<div class="panel panel-default col-md-8">
    <div class="panel-body" id="listuser">
        @include('driver.list')
    </div>
</div>

<div class="panel panel-default col-md-4">
    <div class="panel-body" id="adduser">
        @include('driver.add')
    </div>
</div>

@stop