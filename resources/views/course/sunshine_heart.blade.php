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
</div>
@stop
