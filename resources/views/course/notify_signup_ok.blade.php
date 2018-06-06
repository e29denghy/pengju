<!--
 * Created by PhpStorm.
 * User: 42734
 * Date: 2018/4/26
 * Time: 16:22
 !-->
@extends('layouts.default_notify')
@section('title', '课程报名成功')
@section('content')
  <div class="panel panel-default mt-5">
    <div class="panel-heading text-center">
      <br>
      <br>
      <h2>{{ $title }}</h2>
      <br>
    </div>
    <div class="panel-body p-3">
        <div class="form-group">
          <label for="corperation" class="col-form-label">企业名称: {{$corperation}}</label>
          <br>
        </div>
        <div class="form-group">
          <label for="name" class="col-form-label">联系人: {{$name}}</label>
          <br>
        </div>
        <div class="form-group">
          <label for="mobile" class="col-form-label">手机号码: {{$mobile}}</label>
          <br>
        </div>
    </div>
  </div>
@stop
