@extends('layout.admin')
@section('title', '管理员')
@section('content')
<div class="page-body">

<button type="button" tooltip="添加文章" class="btn btn-sm btn-azure btn-addon" onclick="javascript:window.location.href = '{{ url('admin/admin/create') }}'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">

    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                @if(session('error'))
                    <div class="alert alert-danger fade in">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-warning"></i>
                        <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;错误：</strong> {{session('error')}}</p>
                    </div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success fade in">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-check"></i>
                        <strong>成功：</strong> {{session('success')}}
                    </div>
                @endif
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center" width="6%">ID</th>
                                <th class="text-center">管理员</th>
                                <th class="text-center">用户头像</th>
                                <th class="text-center">邮箱</th>
                                <th class="text-center" width="15%">最后登录</th>
                                <th class="text-center" width="10%">状态</th>
                                <th class="text-center" width="20%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($admins as $admin)
                            <tr>
                                <td align="center">{{ $admin->id }}</td>
                                <td align="center">{{ $admin->name }}</td>
                                <td align="center">
                                	@if($admin->img)
                                    	<img height="30" src="{{ asset(u(ADMIN_IMG) . $admin->img) }}">
                                    @else
                                    	<font color="red">暂无图片</font>
                                	@endif
                                </td>
                                <td align="center">{{ $admin->email }}</td>
                                <td align="center">
                                    @if($admin->last_time == 0)
                                    <font color="#db7093">还未登录</font>
                                    @else
                                        {{date('Y-m-d H:i:s', $admin->last_time)}}
                                    @endif
                                </td>
                                <td align="center">
                                    <label>
                                        <input @if($admin->id == session('id')) disabled @endif id="{{ $admin->id }}"  class="checkbox-slider colored-darkorange" type="checkbox" onclick="changestatus(this);" @if($admin->status == 1) checked @endif>
                                        <span class="text" style="cursor:pointer;"></span>
                                    </label>
                                </td>
                                <td align="center">
                                    <a href="{{url('/admin/user_role/'.$admin->id)}}" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-user-md"></i> 角色
                                    </a>
                                    <a href="{{ url("admin/admin/$admin->id/edit") }}" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onclick="del('{{ $admin->id }}', '{{ url('admin/admin') }}', '该管理员')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                            </tr>
                             @endforeach                       
                                                       
                        </tbody>
                    </table>
                </div>
                <div style="margin-top:10px; text-align:right;">
                    {{ $admins->links() }}
                </div>
                <div>
                                    </div>
                <script type="text/javascript">
                    function changestatus(o)
                    {
                        var id = $(o).attr('id');
                        $.ajax({
                            type : 'POST',
                            dateType : 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                            url : "{{ url('ajax/admin/change_status') }}",
                            data : {id:id},
                            success : function(data){}
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>

</div>
@endsection

@section('js')
    <script>
        $('.alert-danger').delay(3000).fadeOut(2000);
    </script>
@stop
