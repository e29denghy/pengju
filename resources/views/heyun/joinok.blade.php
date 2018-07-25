<!--
 * Created by PhpStorm.
 * User: 42734
 * Date: 2018/4/26
 * Time: 16:22
 !-->
@extends('layouts.default_heyun_notify')
@section('title', '预约报名成功')
@section('content')
<div class="container marketing">
  <div class="panel panel-default mt-5">
    <div class="panel-heading text-center">
      <br>
      <br>
      <h2>{{ $title }}</h2>
    </div>
    <div class="panel-body p-3">
        <div class="panel-heading">
          <div class="form-group">
            <label for="name" class="col-form-label">姓名: {{$name}}</label>
          </div>
          <div class="form-group">
            <label for="mobile" class="col-form-label">手机号码: {{$mobile}}</label>
          </div>
          <div class="form-group">
            <label for="id_card" class="col-form-label">身份证号码: {{$id_card}}</label>
          </div>
          <div class="form-group">
            <label for="code" class="col-form-label">预约码: {{$code}}</label>
          </div>
          <div class="row featurette p-3 bg-danger">
            <h2 class="text-center text-white">会员缴费温馨提示</h2>
            <br>
            <br>
            <br>
            <p>
              <h5 class="let_2 text-white">请务必备注您的手机号码和预约码，方便工作人员对账，谢谢！</h5>
            </p>
            <p>
              <h5 class="let_2 text-white">请添加下面微信号缴费：yiheyishe2018</h5>
              <h5 class="let_2 text-white">也可长按识别下面二维码</h5>
            </p>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-md-6">
              <div class="pdr_0 mt-3">
                <img class="featurette-image img-fluid" src="/heyun/code.jpg" alt="二维码">
              </div>
            </div>
          </div>
          <hr class="featurette-divider">
          <div class="row featurette bg-danger">
              <div class="p-3">
                <h2 class="text-center text-white mt-3 mb-3">{{ $value }}</h2>
                <p>
                @foreach($value_list as $li)
                <h5 class="text-white let_2">{{ $li }}</h5>
                @endforeach
                </p>
              </div>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-6">
            <div class="pdr_0 mt-3">
              <img class="featurette-image img-fluid" src="/heyun/4.jpg" alt="个人照">
            </div>
          </div>
        </div>
        <br>
        <br>
        <br>
    </div>
  </div>
</div>
@stop
