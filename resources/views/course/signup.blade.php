<!--
 * Created by PhpStorm.
 * User: 42734
 * Date: 2018/4/26
 * Time: 16:22
 !-->
@extends('layouts.default')
@section('title', '课程报名')
@section('content')
<div class="row justify-content-md-center">
<div class="col-md-offset-2 col-md-3">
  <div class="panel panel-default">
    <div class="panel-heading text-center">
      <br>
      <br>
      <h2>{{ $title }}</h2>
      <br>
    </div>
    <div class="panel-body">
      @include('shared._errors')
      <form method="POST" action="/course/entry?course={{$course}}">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="corperation" class="col-form-label">企业名称:</label>
          <input type="text" name="corperation" class="form-control" value="{{ old('corperation') }}">
        </div>
        <div class="form-group">
          <label for="name" class="col-form-label">联系人:</label>
          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="mobile" class="col-form-label">手机号码:</label>
          <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}">
        </div>
        <button type="submit" class="btn btn-primary float-right">立 即 报 名</button>
      </form>
    </div>
  </div>
</div>
</div>
@stop
