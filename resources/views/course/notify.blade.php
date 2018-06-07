<!--
 * Created by PhpStorm.
 * User: 42734
 * Date: 2018/4/26
 * Time: 16:22
 !-->
@extends('layouts.default_notify')
@section('title', $title)
@section('content')
<div class="container marketing">
  <div class="featurette-header text-center">
      <br>
      <br>
      <h1>{{ $title }}</h1>
      <br>
  </div>
  <div class="pdr_0 mt-3">
    <img class="featurette-image img-fluid" src="/image/dswl.jpg" alt="邓宏伟老师与都市物流学员集体合影">
  </div>
  <div class="row">
    <div class="p-4">
        @foreach($data['quote'] as $quote)
        <h5 class="let_3">{{ $quote }}</h5>
        @endforeach
    </div>
  </div>
  <div class="row featurette bg-danger">
      <div class="p-3">
        <h2 class="text-center text-white mt-3 mb-3">{{ $data['value'] }}</h2>
        <p>
        @foreach($data['value_list'] as $li)
        <h5 class="text-white let_3">{{ $li }}</h5>
        @endforeach
        </p>
      </div>
  </div>
  <div class="pdr_0 mt-3 mb-3">
    <img class="img-fluid p-0" src="/image/tx.jpg" alt="邓宏伟老师与天禧国际学员集体合影">
  </div>
  <hr class="featurette-divider">
  <div class="row featurette bg-danger">
    <div class="p-3 justify-content-center">
      <h2 class="let_3 text-center mt-3 mb-3 text-white">{{ $data['gain'] }}</h2>
      @foreach($data['gain_list'] as $li)
      <p><h5 class="let_3 text-white">{{ $li }}</h5></p>
      @endforeach
    </div>
  </div>
  <div class="pdr_0 mt-3 mb-3">
    <img class="featurette-image img-fluid" src="/image/gain.jpg" alt="邓宏伟老师与神州通学员集体合影">
  </div>
  <div class="row featurette bg-danger p-3 mb-3" id="go">
    <div class="justify-content-center">
      <h2 class="let_3 text-center mt-3 mb-3 text-white">上课时间地点</h2>
      <p><h5 class="let_3 text-white"><span data-feather="clock"></span>{{ $data['time'] }}</h5></p>
      <p><h5 class="let_3 text-white"><span data-feather="home"></span>{{ $data['address'] }}</h5></p>
      <p><h5 class="let_3 text-white"><span data-feather="map"></span>{{ $data['metro'] }}</h5></p>
      <p><h5 class="let_3 text-white"><span data-feather="map-pin"></span>{{ $data['public_bus'] }}</h5></p>
    </div>
  </div>
  <div class="pdr_0 mt-3 mb-3">
    <img class="featurette-image img-fluid" src="/image/tx2.jpg" alt="邓宏伟老师与天禧国际获奖学员合影">
  </div>
  <div class="row featurette bg-danger p-3 mb-3" id="go">
    <div class="justify-content-center">
      <h2 class="let_3 text-center mt-3 mb-3 text-white">收费标准</h2>
        <p>
          <h5 class="text-white let_2"><span data-feather="thumbs-up"></span>{{ $data['pay_1'] }}</h5>
          <h5 class="text-white let_2"><span data-feather="thumbs-up"></span>{{ $data['pay_2'] }}</h5>
        </p>
      <h2 class="let_3 text-center mt-3 mb-3 text-white">现场福利</h2>
        <p>
          <h5 class="text-white let_2"><span data-feather="dollar-sign"></span>{{ $data['bonus_1'] }}</h5>
          <h5 class="text-white let_2"><span data-feather="gift"></span>{{ $data['bonus_2'] }}</h5>
          <h5 class="text-white let_2"><span data-feather="gift"></span>{{ $data['bonus_3'] }}</h5>
        </p>
    </div>
  </div>
  <hr class="featurette-divider">
<div class="row p-5 justify-content-md-center" id="entry">
  <div class="col-md-offset-2 col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading text-center">
        <h2>在 线 报 名</h2>
        <br>
      </div>
      <div class="panel-body">
        @include('shared._errors')
        <form method="POST" action="/course/entry?course={{$course}}">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="corperation" class="col-form-label font_22"><span data-feather="globe"></span> 企业名称</label>
            <input type="text" name="corperation" class="form-control" value="{{ old('corperation') }}">
          </div>
          <div class="form-group">
            <label for="contact" class="col-form-label font_22"><span data-feather="user"></span> 联系人</label>
            <input type="text" name="contact" class="form-control" value="{{ old('name') }}">
          </div>
          <div class="form-group">
            <label for="mobile" class="col-form-label font_22"><span data-feather="phone"></span> 手机号码</label>
            <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}">
          </div>
          <button type="submit" class="btn btn-primary font_22">提 交 预 约</button>
        </form>
      </div>
    </div>
  </div>
</div>
<hr class="featurette-divider">
  <div class="featurette-heading text-center" id="teacher">
      <br>
      <br>
      <h2>邓宏伟老师介绍</h2>
      <br>
  </div>
  <div class="pdr_0 mt-3">
    <img class="featurette-image img-fluid" src="/image/dhw.jpg" alt="邓宏伟老师个人照片">
  </div>
  <div class="row featurette p-3">
    <p class="lead"><br>邓老师1998年毕业于山东大学经济学院经济学系，拥有十多年知名企业的文化建设工作经验和七年培训咨询工作经验，任职和服务过的上市公司和知名企业包括：海能达(002583)、富安娜(002327)、华孚时尚(002042)、爱施德(002416)、神州通集团、丽斯达、天玺国际、瑞捷咨询、利达旺电梯、某集团37.5℃运营中心、等候科技、泰天恒集团、正雄鞋材、建顺包材、国乐飘香、番茄假期、桑菲通信、中创软件、得安科技、正一道场、青青宝贝、都市物流等。</p>
    <p class="lead">邓老师主讲的《高效沟通》、《阳光心态》等深度体验式课程，把情景模拟、教练技术、演讲口才训练方法等完美融入其中，积极倡导和落实“快乐学习”、“快速学习”的理念，从职场的多种场景和学员的实战演练出发，按照“问题导向”和“目标导向”的原则，为企业客户精心设计针对性、实战性、系统性很强的特色培训方案，并现场进行精彩演绎，众多的企业领导和广大学员一致给予高度评价。</p>
    <br>
    <br>
  </div>
</div>
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
@stop
