@extends('admin.layouts.default_heyun')
@section('title', 'E美卡会员预约报名表')
@section('content')
<h2>E美卡会员预约报名表</h2>
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">姓名</th>
        <th scope="col">手机号码</th>
        <th scope="col">身份证号码</th>
        <th scope="col">预约码</th>
        <th scope="col">预约时间</th>
        <th scope="col">会员卡号</th>
        <th scope="col">入会时间</th>
				<th scope="col">状态</th>
				<th scope="col"> 操作</th>
      </tr>
    </thead>
    <tbody>
      @foreach($list as $key=>$li)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$li->name}}</td>
        <td>{{$li->mobile}}</td>
        <td>{{$li->self_id}}</td>
        <td>{{$li->entry_code}}</td>
        <td>{{$li->create_time}}</td>
        <td>{{$li->card_id}}</td>
        <td>{{$li->join_time}}</td>
        <td>{{config('heyun.state')[$li->state]}}</td>
        <td><a class="nav-link" href="/admin/heyun/edit?uid={{$li->uid}}">编辑</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop
