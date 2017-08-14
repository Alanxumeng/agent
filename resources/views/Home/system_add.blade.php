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
                <label class="control-label col-md-3 col-sm-3 col-xs-12">购买时间</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <label for="one">1个月</label><input id="one" checked type="radio" name="time" value="1">　　
                  <label for="three">3个月(9.8折)</label><input id="three" type="radio" name="time" value="2.94">　　
                  <label for="six">6个月(9.5折)</label><input id="six" type="radio" name="time" value="5.7">　　
                  <label for="twelve">1年(9折)</label><input id="twelve" type="radio" name="time" value="10.8">　　
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">系统价格(/月)</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" readonly class="form-control" name="price" placeholder="company">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">140*140 bmp图片</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <img id="imageview1" style="width: 200px; height: 150px;">
                    <div>
                      <span class="btn btn-file btn-success">
                        <span class="fileupload-new">选择图片</span>
                        <span class="fileupload-exists">更换图片</span>
                        <input type="file" name="img1" id="fileupload1">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">500*60 bmp图片</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <img id="imageview2" style="width: 200px; height: 150px;">
                    <div>
                      <span class="btn btn-file btn-success">
                        <span class="fileupload-new">选择图片</span>
                        <span class="fileupload-exists">更换图片</span>
                        <input type="file" name="img2" id="fileupload2">
                      </span>
                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">重置</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">48*48 ico图片</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <img id="imageview3" style="width: 200px; height: 150px;">
                    <div>
                      <span class="btn btn-file btn-success">
                        <span class="fileupload-new">选择图片</span>
                        <span class="fileupload-exists">更换图片</span>
                        <input type="file" name="img3" id="fileupload3">
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
  url: '{{action('home\templateController@show')}}',
  dataType: 'json',
  data: {
    _token: "{{csrf_token()}}",
  },
  success: function (data) {
    $.each(data,function(name,value){
      $('#sel').append("<option value='"+value.title+"' price='"+value.price+"'>"+value.title+"</option>");
    })
    $('#sel').change(function(){
      $('input[name="price"]').val(Number($('#sel').find("option:selected").attr("price")*$("input[type='radio']:checked").val()).toFixed(2))
    })
    $('input[name="time"]').change(function(){
      $('input[name="price"]').val(Number($('#sel').find("option:selected").attr("price")*$("input[type='radio']:checked").val()).toFixed(2))
    })
  },
  error: function (data) {
    alert('系统错误')
  },
});
//显示图片1
$(function() {
    /*原理是把本地图片路径："D(盘符):/image/..."转为"http://..."格式路径来进行显示图片*/
    $("#fileupload1").change(function() {
        var $file = $(this);
        var objUrl = $file[0].files[0];
        //获得一个http格式的url路径:mozilla(firefox)||webkit or chrome
        var windowURL = window.URL || window.webkitURL;
        //createObjectURL创建一个指向该参数对象(图片)的URL
        var dataURL;
        dataURL = windowURL.createObjectURL(objUrl);
        $("#imageview1").attr("src",dataURL);
    });
});
//显示图片2
$(function() {
    /*原理是把本地图片路径："D(盘符):/image/..."转为"http://..."格式路径来进行显示图片*/
    $("#fileupload2").change(function() {
        var $file = $(this);
        var objUrl = $file[0].files[0];
        //获得一个http格式的url路径:mozilla(firefox)||webkit or chrome
        var windowURL = window.URL || window.webkitURL;
        //createObjectURL创建一个指向该参数对象(图片)的URL
        var dataURL;
        dataURL = windowURL.createObjectURL(objUrl);
        $("#imageview2").attr("src",dataURL);
    });
});
//显示图片3
$(function() {
    /*原理是把本地图片路径："D(盘符):/image/..."转为"http://..."格式路径来进行显示图片*/
    $("#fileupload3").change(function() {
        var $file = $(this);
        var objUrl = $file[0].files[0];
        //获得一个http格式的url路径:mozilla(firefox)||webkit or chrome
        var windowURL = window.URL || window.webkitURL;
        //createObjectURL创建一个指向该参数对象(图片)的URL
        var dataURL;
        dataURL = windowURL.createObjectURL(objUrl);
        $("#imageview3").attr("src",dataURL);
    });
});
</script>
@endsection
