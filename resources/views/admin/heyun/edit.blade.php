<!--
 * Created by PhpStorm.
 * User: 42734
 * Date: 2018/4/26
 * Time: 16:22
 !-->
 @extends('admin.layouts.default_heyun')
 @section('title', '会员信息编辑')
 @section('content')
<div class="container">
  <div class="featurette-header text-center" id='member'>
      <h2>会员信息编辑</h2>
  </div>
  <hr class="featurette-divider">
<div class="row justify-content-md-center" id="joinus">
  <div class="col-md-offset-2 col-md-6">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="form-group">
          <label for="name" class="col-form-label">姓名: {{$entry->name}}</label>
        </div>
        <div class="form-group">
          <label for="mobile" class="col-form-label">手机号码: {{$entry->mobile}}</label>
        </div>
        <div class="form-group">
          <label for="id_card" class="col-form-label">身份证号码: {{$entry->self_id}}</label>
        </div>
        <div class="form-group">
          <label for="code" class="col-form-label">预约码: {{$entry->entry_code}}</label>
        </div>
        <div class="form-group">
          <label for="join_time" class="col-form-label">预约时间: {{$entry->create_time}}</label>
        </div>
          <div class="form-group">
            <label for="card_id" class="col-form-label">会员卡号: {{$entry->card_id}}</label>
          </div>
          <div class="form-group">
            <label for="pay_time" class="col-form-label">入会时间: {{$entry->join_time}}</label>
          </div>
          <div class="form-group">
            <label for="pay_time" class="col-form-label">状态: {{config('heyun.state')[$entry->state]}}</label>
          </div>
        @include('shared._errors')
        <form method="POST" action="/admin/heyun/editinfo?uid={{$entry->uid}}">
          {{ csrf_field() }}
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="editstate">修改状态</label>
              </div>
              <br>
              <br>
              <select class="custom-select" name='editstate'>
                <option value="0" selected>请选择</option>
                <option value="1">已预约未缴费</option>
                <option value="2">已缴费</option>
                <option value="3">预约信息有误</option>
              </select>
            </div>
            <div class="form-check">
              @if(!empty($entry->card_id))
                <input class="form-check-input" type="checkbox" value="1" name="operatecard">
                <label class="form-check-label" for="operatecard">
                  取消会员卡
                </label>
              @else
                <input class="form-check-input" type="checkbox" value="2" name="operatecard">
                <label class="form-check-label" for="operatecard">
                  发放会员卡
                </label>
              @endif
            </div>
            <br>
          <button type="submit" class="btn btn-primary font_22">提交修改</button>
          <br>
          <br>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>
@stop
