@extends('Layout.admin') @section('title','我的安装包') @section('hidden') @endsection @section('content')
<div class="right_col" role="main">
        @if(session('success'))
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                {{session('success')}}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                {{session('error')}}
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>安装包管理</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">
                  <button type="button" class="btn btn-primary btn-sm" style="margin:10px" data-toggle="modal" data-target="#demoModal2">修改安装包价格</button>
                  <h5 style="margin-right:20px;float:right; color:red">注意：系统修改超出3次后下次修改价格{{$s->p_update}}元/次</h5>
                  <!--修改安装包价格-->
                  <form class="" action="{{ action('admin\packageController@update_package') }}" method="post">
                    <div class="modal fade" style="z-index='9999'" id="demoModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                              aria-hidden="true">&times;</span>
                            </button>
                            <h4 style="margin-left:10px; font-weight:bold;">修改安装包价格</h4>
                          </div>
                          <h4 style="margin-left:30px;">
                            <div class="form-group">
                              <label for="exampleInputEmail1">价格(元/每次)</label>
                              <input type="text" autocomplete="off" class="form-control" name="price" onkeyup="this.value=this.value.replace(/[\D]/g,'');" id="exampleInputEmail1" placeholder="" value="{{$s->p_update}}">
                            </div>
                          </h4>
                          <div class="modal-footer">
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-default">确定</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>



                    <table id="datatable-keytable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>序号</th>
                          <th>用户名</th>
                          <th>安装包标题</th>
                          <th>安装包导航</th>
                          <th>安装包服务器名称</th>
                          <th>电话</th>
                          <th>官网网址</th>
                          <th>邮箱</th>
                          <th>地址</th>
                          <th>公司名称</th>
                          <th>图1</th>
                          <th>图2</th>
                          <th>图3</th>
                          <th>修改时间</th>
                          <th>状态</th>
                          <th>修改次数</th>
                          <th>功能</th>
                        </tr>
                      </thead>
                      <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="demoModal5">
                        <div class="modal-dialog modal-sm">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <h4 class="modal-title" id="myModalLabel2">提示</h4>
                            </div>
                            <div class="modal-body">
                              <h4>确定要删除吗？</h4>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                              <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <tbody>
                        <?php $a = 0 ?> @foreach ($package as $packages)
                        <?php $a++ ?>
                        <tr>
                          <td>{{$a}}</td>
                          <td>{{$packages->username}}</td>
                          <td>{{$packages->title}}</td>
                          <td>{{$packages->nav}}</td>
                          <td>{{$packages->server}}</td>
                          <td>{{$packages->phone}}</td>
                          <td>{{$packages->website}}</td>
                          <td>{{$packages->email}}</td>
                          <td>{{$packages->address}}</td>
                          <td>{{$packages->company}}</td>
                          <td><img width="50px" src="{{asset($packages->img1)}}" /></td>
                          <td><img width="50px" src="{{asset($packages->img2)}}" /></td>
                          <td><img width="50px" src="{{asset($packages->img3)}}" /></td>
                          <td>{{$packages->time}}</td>
                          <td>{!! $packages->state==1?'<span class="label label-success radius">已处理</span>':'<span class="label label-error radius">未处理</span>' !!}</td>
                          <td>{{$packages->number}}</td>
                          <td>
                            <a href="{{url('admin/package/update').'?id='.$packages->id}}" type="button" class="btn btn-primary btn-sm update" data-toggle="modal">处理</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $package->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
