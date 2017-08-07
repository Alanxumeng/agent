@extends('Layout.home')

@section('title','生成系统')

@section('hidden')
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>系统管理</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>生成系统<small>请上传系统所需信息</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left" action="{{action('home\systemController@insert')}}" method="post"  enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">系统端口号 </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="port" placeholder="port" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">产品模板</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <select class="select2_multiple form-control" id="sel" name="template" multiple="multiple">
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端标题名称</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="title" placeholder="title">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端导航名称</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="nav" placeholder="nav">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">客户端服务器名称
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea class="form-control" rows="5" name="server" placeholder="Five lines of information"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">电话</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="phone" placeholder="phone">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">官网网址</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="website" placeholder="website">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">邮箱</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">地址</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="address" placeholder="address">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">公司名称</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" class="form-control" name="company" placeholder="company">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">系统价格</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" readonly class="form-control" name="price" placeholder="company">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">系统价格</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <label for="one">30天</label><input id="one" type="radio" name="time" value="30">　　
                  <label for="three">90天</label><input id="three" type="radio" name="time" value="90">　　
                  <label for="six">180天</label><input id="six" type="radio" name="time" value="180">　　
                  <label for="twelve">360天</label><input id="twelve" type="radio" name="time" value="360">　　
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">140*140 bmp图片</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                    <div>
                      <span class="btn btn-file btn-success">
                        <span class="fileupload-new">选择图片</span>
                        <span class="fileupload-exists">更换图片</span>
                        <input type="file" name="img1">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">500*60 bmp图片</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                    <div>
                      <span class="btn btn-file btn-success">
                        <span class="fileupload-new">选择图片</span>
                        <span class="fileupload-exists">更换图片</span>
                        <input type="file" name="img2">
                      </span>
                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">128*128 ico图片</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                    <div>
                      <span class="btn btn-file btn-success">
                        <span class="fileupload-new">选择图片</span>
                        <span class="fileupload-exists">更换图片</span>
                        <input type="file" name="img3">
                      </span>
                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-success">提交</button>
                  <button type="reset" class="btn btn-primary">重置</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$.ajax({
  type: 'POST',
  url: '{{action('admin\templateController@show')}}',
  dataType: 'json',
  data: {
    _token: "{{csrf_token()}}",
  },
  success: function (data) {
    $.each(data,function(name,value){
      $('#sel').append("<option value='"+value.title+"' price='"+value.price+"'>"+value.title+"</option>");
    })
    $('#sel').change(function(){
      $('input[name="price"]').val($('#sel').find("option:selected").attr("price"))
    })
  },
  error: function (data) {
    alert('系统错误')
  },
});
</script>
@endsection
