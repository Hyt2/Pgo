@extends('layout.admin')
@section('title', '管理员')
@section('content')
<style type="text/css">
    table tr,td{
        line-height: 55px;
    }
</style>
<div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href = '{{ url('admin/admin/create') }}'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="6%">ID</th>
                                <th class="text-center" width="6%">用户名</th>
                                <th class="text-center" width="8%">用户邮箱</th>
                                <th class="text-center" width="8%">注册时间</th>
                                <th class="text-center" width="8%">最后登录</th>
                                <th class="text-center" width="5%">激活状态</th>
                                <th class="text-center" width="5%">用户状态</th>
                                <th class="text-center" width="10%">用户设置</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data as $k=>$v)
                            <tr>
                                <td align="center">{{ $v->uid }}</td>
                                <td align="center">{{ $v->uname }}</td>
                                <td align="center" width="8%">
                                    @if($v->uemail)
                                        {{$v->uemail}}
                                     @else
                                        <font color="#db7093">暂无邮箱</font>
                                     @endif
                                </td>
                                <td align="center" title="{{date('Y-m-d H:i:s',$v->create_time)}}">
                                    {{sw(date('Y-m-d H:i:s',$v->create_time))}}
                                </td>
                                <td class="text-center" title="{{date('Y-m-d H:i:s',$v->last_time)}}">
                                         @if($v->last_time)
                                            {{sw(date('Y-m-d H:i:s',$v->last_time))}}
                                         @else
                                            <font color="#db7093">还未登录</font>
                                         @endif
                                </td>
                                <td align="center">
                                    <font color="#db7093">@if($v->activate == 1) 已激活  @else 未激活 @endif
                                    </font>
                                </td>
                                <td align="center">
                                    <font color="#db7093">@if($v->status == 'up') 启用  @else 禁用 @endif
                                    </font>
                                </td>
                                <td align="center">
                                    <button onclick="status('{{$v->status}}','','{{url("/admin/user/$v->uid")}}','PUT')" class="btn btn-primary btn-sm shiny" style="float:left">
                                        <i class="fa fa-rocket"></i> 手动激活
                                    </button>
                                    <button onclick="status('{{$v->status}}','{{$v->uid}}','{{url("/admin/user")}}','POST')" class="btn {{stas($v->status)}} btn-sm shiny">
                                         @if($v->status=='up') 
                                            <i class="fa  fa-ban"></i>禁用  
                                         @else 
                                            <i class="fa fa-check-circle-o"></i>启用
                                         @endif
                                    </button>
                                </td>
                            </tr>
                             @endforeach                       
                                                       
                        </tbody>
                    </table>
                </div>
                <div style="margin-top:10px; text-align:right;">
                    {{ $data->links() }}
                </div>
                <div>
        </div>
        </div>
        </div>
    </div>
</div>

</div>
@endsection
@section('js')
<script type="text/javascript">
    function status(stas,id,url,method)
    {
        $.ajax({
            type : method,
            dateType : 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url : url,
            data : {uid:id,status:stas},
            success : function(data){
                layer.msg(data.msg, {icon: 6,time:1000,offset:['200px','50%']});
                if(data.reload){
                    location.reload(true);
                }
            }
        });
    }
</script>
@stop