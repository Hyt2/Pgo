@extends('layout.admin')

@section('title',$title)

@section('content')	
<div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改密码</span>
            </div>
            <div class="widget-body">
            	@if(session('error'))  
            <div class="alert alert-warning fade in">
                <button class="close" data-dismiss="alert">×</button>
                <i class="fa-fw fa fa-warning"></i>
              <strong>Warning</strong>{{session('error')}}  
             </div>
            @endif
                <div id="horizontal-form">

                    <form class="form-horizontal"  id="art_form" role="form" action="{{url('/admin/dopass')}}" method="post">
                        <!-- <input type="hidden" name="_token" value="rpoEcOiaHSw8i6MjkMc58ulyAj89Vkf6UD62PzfB"> -->
                       {{csrf_field()}}

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">原密码</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="oldpass" type="password">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">新密码</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="pwd" type="password">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">确认新密码</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="repwd" type="password">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
						<div class="form-group">
                            
                        </div>
                             <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">确认修改</button>
                            </div>
                        </div>
                        </div>
							<div class="form-group">
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

