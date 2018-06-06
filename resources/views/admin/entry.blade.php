@extends('admin.layouts.default')
@section('title', '课程报名表')
@section('content')
<h2>课程报名表</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">课程名称</th>
        <th scope="col">企业名称</th>
        <th scope="col">联系人</th>
        <th scope="col">手机号码</th>
        <th scope="col">报名时间</th>
        <th scope="col">来源</th>
        <th scope="col">备注</th>
      </tr>
    </thead>
    <tbody>
      @foreach($list as $key=>$li)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{config('course.name')[$li->course_id]}}</td>
        <td>{{$li->corperation}}</td>
        <td>{{$li->name}}</td>
        <td>{{$li->mobile}}</td>
        <td>{{$li->create_time}}</td>
        <td>{{config('course.source')[$li->source]}}</td>
        <td>{{$li->note}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop
