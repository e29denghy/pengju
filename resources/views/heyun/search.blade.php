<!--
 * Created by PhpStorm.
 * User: 42734
 * Date: 2018/4/26
 * Time: 16:22
 !-->
@extends('layouts.default_heyun_notify')
@section('title', '会员信息查询')
@section('content')
<div class="container marketing bg-light">
  <div class="featurette-header text-center" id='member'>
      <br>
      <br>
      <h2>会员信息查询</h2>
      <br>
  </div>
<div class="row p-5 justify-content-md-center" id="joinus">
  <div class="col-md-offset-2 col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">
        @include('shared._errors')
        <form method="POST" action="/heyun/searchmember">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name" class="col-form-label font_22"><span data-feather="user"></span> 姓名</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="mobile" class="col-form-label font_22"><span data-feather="phone"></span> 手机号码</label>
            <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}">
          </div>
          <button type="submit" class="btn btn-primary font_22">提交查询</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <div class="row justify-content-md-center featurette bg-danger">
      <div class="col-md-6 p-3">
        <h2 class="text-center text-white mt-3 mb-3">联系我们</h2>
        <p>
          <h5 class="text-white let_2">地址：中国深圳罗湖区大望精鼎文化创意产业园B7栋3层</h5>
          <h5 class="text-white let_2">电话：0755－25607811</h5>
          <h5 class="text-white let_2">手机：13502841101</h5>
        </p>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <div class="pdr_0 mt-3">
          <img class="featurette-image img-fluid" src="/heyun/qipao5.jpg" alt="旗袍">
        </div>
      </div>
    </div>
  <br>
  <br>
  <br>
</div>
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
@stop
