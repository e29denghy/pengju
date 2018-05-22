<!--
 * Created by PhpStorm.
 * User: 42734
 * Date: 2018/4/26
 * Time: 16:22
 !-->
@extends('layouts.default')
@section('title', $data['title'])
@section('content')
<div class="container marketing">
  <div class="featurette-header text-center">
      <br>
      <br>
      <h1>{{ $data['title'] }}</h1>
  </div>
  <hr class="featurette-divider">
  <div class="row featurette margin-50">
    <div class="col-xs-7 col-md-7 d-flex justify-content-center">
      <div>
        <div class="mt_20"><h1 class="text-danger font_60">{{ $data['key'] }}</h1></div>
        <div class="mt_20"><h1 class="font_36">{{ $data['subtitle'] }}</h1></div>
      </div>
    </div>
    <div class="col-xs-5 col-md-5">
      <img class="featurette-image img-fluid mx-auto" src="/image/com.jpg" alt="Generic placeholder image">
    </div>
  </div>
  <div class="row featurette bg-danger">
      <div class="p-5">
        @foreach($data['quote']['question'] as $question)
        <p><h4 class="text-white let_3">{{ $question }}</h4></p>
        @endforeach
      </div>
  </div>
  <div class="row">
    <div class="col-xs-8 col-md-8 mt_30 d-flex justify-content-center">
      <div>
        @foreach($data['quote']['answer'] as $answer)
        <p><h3 class="let_3">{{ $answer }}</h3></p>
        @endforeach
        <p><a class="btn btn-lg btn-primary" href="#" role="button">报名学习</a></p>
      </div>
    </div>
    <div class="col-xs-4 col-md-4 pdr_0">
      <img class="featurette-image img-fluid" src="/image/dhw.jpg" alt="Generic placeholder image">
    </div>
  </div>
  <div class="row featurette bg-danger">
    <div class="col-xs-6 col-md-6 mt_40 order-md-2 d-flex justify-content-center">
      <div>
        <h1 class="text-white let_3 font_48 text-center mb_20">{{ $data['object'] }}</h1>
        @foreach($data['object_list'] as $li)
        <p><h4 class="text-white let_3">{{ $li }}</h4></p>
        @endforeach
      </div>
    </div>
    <div class="col-xs-6 col-md-6 p-5 order-md-1">
      <img class="featurette-image img-fluid" src="/image/obj.jpg" alt="Generic placeholder image">
    </div>
  </div>
  <div class="row featurette">
      <div class="p-5">
        <h1 class="font_48 text-center mb_40">{{ $data['value'] }}</h1>
        @foreach($data['value_list'] as $li)
        <p><h3 class="ml_40 let_3">{{ $li }}</h3></p>
        @endforeach
      </div>
  </div>
  <div class="row featurette bg-danger">
    <div class="col-xs-6 col-md-6 p-5 d-flex justify-content-center">
    <div>
      <h1 class="text-white let_3 font_48 text-center mb_40">{{ $data['gain'] }}</h1>
      @foreach($data['gain_list'] as $li)
      <p><h4 class="text-white let_3">{{ $li }}</h4></p>
      @endforeach
    </div>
    </div>
    <div class="col-xs-6 col-md-6 p-5">
      <img class="featurette-image img-fluid" src="/image/gain.jpg" alt="Generic placeholder image">
    </div>
  </div>
  <div class="row featurette">
      <div class="col-xs-12 col-md-12 p-5 d-flex justify-content-center">
        <div>
          <h1 class="font_48 text-center mb_40">{{ $data['process'] }}</h1>
          @foreach($data['process_list'] as $key => $li)
            @if($key < 5)
            <p><h3 class="let_3">{{ $li }}</h3></p>
            @endif
          @endforeach
        </div>
      </div>
  </div>
  <div class="row featurette bg-danger p-3 margin-50">
    <div class="col-xs-12 col-md-12 d-flex justify-content-center">
      <div>
        @foreach($data['process_3_list'] as $li)
        <p><h4 class="text-white let_3">{{ $li }}</h4></p>
        @endforeach
      </div>
   </div>
  </div>
  <div class="row featurette margin-50">
    <div class="col-xs-12 col-md-12 p-5 d-flex justify-content-center">
        <div>
          @foreach($data['process_list'] as $key => $li)
            @if($key > 4)
            <p><h3 class="let_3">{{ $li }}</h3></p>
            @endif
          @endforeach
        </div>
    </div>
  </div>
  <div class="row featurette margin-80 p-3">
      <div class="col-xs-1 col-md-1 ml_20">
      </div>
      <div class="col-xs-5 col-md-5 p-3 mt_10">
        <img class="featurette-image img-fluid" src="/image/process_1.jpg" alt="Generic placeholder image">
      </div>
      <div class="col-xs-5 col-md-5 p-4">
        <img class="featurette-image img-fluid" src="/image/process_2.jpg" alt="Generic placeholder image">
      </div>
  </div>
  <div class="row featurette bg-danger">
    <div class="col-xs-12 col-md-12 text-white p-5 let_3 d-flex justify-content-center">
      <div>
        <h1 class="font_48 text-center mb_40">{{ $data['feature'] }}</h1>
        <p><h3>{{ $data['feature_list'][0] }}</h3></p>
        <p><h4>{{ $data['feature_detail'][0] }}</h4></p>
        <p><h4>{{ $data['feature_detail'][1] }}</h4></p>
        <p class="mt_40"><h3>{{ $data['feature_list'][1] }}</h3></p>
        <p><h4>{{ $data['feature_detail'][2] }}</h4></p>
        <p><h4>{{ $data['feature_detail'][3] }}</h4></p>
        <p class="mt_40"><h3>{{ $data['feature_list'][2] }}</h3></p>
        <p><h4>{{ $data['feature_detail'][4] }}</h4></p>
        <p><h4>{{ $data['feature_detail'][5] }}</h4></p>
      </div>
    </div>
  </div>
</div>
@stop
