@extends('layouts.default_no_head_mob')
@section('title', '课程学习调查问卷')
@section('content')
<div class="ml-1 row justify-content-md-center">
  <div class="col-md-8">
    <div class="panel panel-default">
      <div class="panel-heading text-center">
        <br>
        <br>
        <h2>{{ $title }}</h2>
        <br>
      </div>
      <div class="panel-body">
        @include('shared._errors')
        <form  id="form" @submit.prevent="submit">
          <div class="form-group row">
            <label class="col-form-label">课程名称：《高效沟通》实战培训</label>
          </div>
          <div class="form-group row">
            <label  class="col-form-label">上课时间：2018年5月27日</label>
          </div>
          <div class="form-group row">
            <label class="col-form-label">Q1、您的名字</label>
             <div class="col-sm-3">
               <input type="text" class="form-control" v-model="name">
             </div>
          </div>
          <div class="form-group row">
            <label  class="col-form-label">Q2、培训服务评估</label>
          </div>
          <fieldset class="form-group">
            <table class="table table-bordered">
              <thead class="col-md-12">
                <tr class="row mx-0">
                  <th class="col-7"></th>
                  <th class="col-1 text-center">非常认可</th>
                  <th class="col-1 text-center">很认可</th>
                  <th class="col-1 text-center">认可</th>
                  <th class="col-1 text-center">基本认可</th>
                  <th class="col-1 text-center">不认可</th>
                </tr>
              </thead>
              <tbody class="col-md-12">
                <tr class="row mx-0">
                  <th class="col-7">Q2.1  培训课程的整体评价</th>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q21" value="1"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q21" value="2"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q21" value="3"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q21" value="4"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q21" value="5"></td>
                </tr>
                <tr class="row mx-0">
                  <th class="col-7">Q2.2  课程内容与主题相符，符合当前岗位需要</th>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q22" value="1"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q22" value="2"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q22" value="3"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q22" value="4"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q22" value="5"></td>
                </tr>
                <tr class="row mx-0">
                  <th class="col-7">Q2.3  课程内容结构合理、内容充实、时间分布合理</th>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q23" value="1"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q23" value="2"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q23" value="3"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q23" value="4"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q23" value="5"></td>
                </tr>
                <tr class="row mx-0">
                  <th class="col-7">Q2.4  课程内容重点突出、便于学习、易于掌握</th>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q24" value="1"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q24" value="2"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q24" value="3"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q24" value="4"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q24" value="5"></td>
                </tr>
                <tr class="row mx-0">
                  <th class="col-7">Q2.5  讲师逻辑清晰、案例丰富、善于引导</th>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q25" value="1"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q25" value="2"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q25" value="3"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q25" value="4"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q25" value="5"></td>
                </tr>
                <tr class="row mx-0">
                  <th class="col-7">Q2.6  讲师表达流畅，能充分阐释课题及要点</th>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q26" value="1"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q26" value="2"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q26" value="3"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q26" value="4"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q26" value="5"></td>
                </tr>
                <tr class="row mx-0">
                  <th class="col-7">Q2.7  讲师互动充足、语言通俗易懂、生动有趣</th>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q27" value="1"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q27" value="2"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q27" value="4"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q27" value="3"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q27" value="5"></td>
                </tr>
                <tr class="row mx-0">
                  <th class="col-7">Q2.8  培训组织过程中，培训环境适合培训主题、参训人数</th>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q28" value="1"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q28" value="2"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q28" value="3"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q28" value="4"></td>
                  <td class="col-1 text-center"><input type="radio" v-model="ques.q28" value="5"></td>
                </tr>
              </tbody>
            </table>
          </fieldset>
          <div class="form-group row">
            <label class="col-form-label">Q3、您对本次培训有何建议或意见？</label>
          </div>
          <div class="form-group row">
             <div class="col-sm-12">
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">提交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script>
// 基础用法 v-model
    let vm = new Vue({
        el:'#form',
        delimiters: ['${', '}'],
        data:{
            name:"",
            ques:{}
        },
        methods:{
          submit() {
              console.log(this.ques);
          }
        }

    });
</script>
@stop
