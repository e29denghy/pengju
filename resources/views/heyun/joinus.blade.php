<!--
 * Created by PhpStorm.
 * User: 42734
 * Date: 2018/4/26
 * Time: 16:22
 !-->
@extends('layouts.default_heyun_notify')
@section('title', $title)
@section('content')
<div class="container marketing">
  <div class="featurette-header text-center" id='member'>
      <br>
      <br>
      <h3>{{ $title_1 }}</h3>
      <h3>{{ $title_2 }}</h3>
      <br>
  </div>
  <div class="pdr_0 mt-3">
    <img class="featurette-image img-fluid" src="/heyun/9.jpg" alt="合影9">
  </div>
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
  <div class="pdr_0 mt-3 mb-3">
    <img class="img-fluid p-0" src="/heyun/8.jpg" alt="合影8">
  </div>
  <div class="row justify-content-md-center featurette bg-danger">
    <div class="col-md-6 p-3">
      <h2 class="text-center text-white mt-3 mb-3">{{ $tips }}</h2>
      @foreach($tips_list as $li)
      <p><h5 class="text-white let_2">{{ $li }}</h5></p>
      @endforeach
    </div>
  </div>
  <div class="pdr_0 mt-3 mb-3">
    <img class="featurette-image img-fluid" src="/heyun/7.jpg" alt="合影7">
  </div>
  <hr class="featurette-divider">
<div class="row p-5 justify-content-md-center" id="joinus">
  <div class="col-md-offset-2 col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading text-center">
        <h2>预约报名</h2>
        <br>
      </div>
      <div class="panel-body">
        @include('shared._errors')
        <form method="POST" action="/heyun/entry">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name" class="col-form-label font_22"><span data-feather="user"></span> 姓名</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="mobile" class="col-form-label font_22"><span data-feather="phone"></span> 手机号码</label>
            <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}">
          </div>
          <div class="form-group">
            <label for="id_card" class="col-form-label font_22"><span data-feather="globe"></span> 身份证号码</label>
            <input type="text" name="id_card" class="form-control" value="{{ old('id_card') }}">
          </div>
          <button type="submit" class="btn btn-primary font_22">提交预约</button>
        </form>
      </div>
    </div>
  </div>
</div>
<hr class="featurette-divider">
  <div class="featurette-heading text-center" id="leader">
      <br>
      <br>
      <h2>吴亚敏女士介绍</h2>
      <br>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-6">
      <div class="pdr_0 mt-3">
        <img class="featurette-image img-fluid" src="/heyun/5.jpg" alt="个人照片5">
      </div>
    </div>
  </div>
  <div class="row featurette p-3">
    @foreach($leader as $li)
    <p class="lead">{{ $li }}</p>
    @endforeach
  </div>
  <div class="row justify-content-md-center">
    <div class="col-md-6">
      <div class="pdr_0 mt-3">
        <img class="featurette-image img-fluid" src="/heyun/3.jpg" alt="个人照片3">
      </div>
    </div>
  </div>
  <hr class="featurette-divider">
    <div class="featurette-heading text-center" id="corperation">
        <br>
        <br>
        <h2>深圳一訸一舍</h2>
        <br>
    </div>
    <div class="row featurette p-3">
      @foreach($corperation as $li)
      <p class="lead">{{ $li }}</p>
      @endforeach
    </div>
    <div class="row justify-content-md-center featurette bg-danger">
      <div class="col-md-6 p-3">
        <h2 class="text-center text-white mt-3 mb-3">联系我们</h2>
        <p>
          <h5 class="text-white let_2">地址：中国深圳罗湖区大望精鼎文化创意产业园B7栋3层</h5>
          <h5 class="text-white let_2">电话：0755－25607811</h5>
          <h5 class="text-white let_2">手机：13502841101(助理小小)</h5>
        </p>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <div class="pdr_0 mt-3">
          <img class="featurette-image img-fluid" src="/heyun/2.jpg" alt="个人照片2">
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
