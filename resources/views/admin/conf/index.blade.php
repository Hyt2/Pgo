@extends('layout.admin')
@section('title', '配置管理')
@section('content')
    <div class="page-body">
                        
        <button type="button" tooltip="添加配置" class="btn btn-primary btn-sm shiny" onClick="javascript:window.location.href = '{{ url('admin/conf/create') }}'"> <i class="fa fa-plus"></i> Add
        </button>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="flip-scroll">
                            <form method="post" action="">
                                <table class="table table-bordered table-hover">
                                    <thead class="">
                                        <tr>
                                            <th class="text-center" width="4%">ID</th>
                                            <th class="text-center" width="8%">英文名称</th>
                                            <th width="13%" class="text-center">中文名称</th>
                                            <th class="text-center" width="8%">表单类型</th>
                                            <th class="text-center" width="8%">配置类型</th>
                                            <th class="text-center" width="15%">默认值</th>
                                            <th class="text-center" width="20%">可选值</th>
                                            <th class="text-center" width="5%">排序</th>
                                            <th class="text-center" width="16%">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{ csrf_field() }}
                                        @foreach($confs as $conf)
                                            <tr>
                                                <td align="center">{{ $conf->id }}</td>
                                                <td align="center">{{ $conf->ename }}</td>
                                                <td align="center">{{ cut_str($conf->cname, 10) }}</td>
                                                <td align="center">
                                                    @if($conf->form_type == 1)
                                                        <font color="#00ffff">单行文本</font>
                                                    @elseif($conf->form_type == 2)
                                                        <font color="#8b008b">单选项</font>
                                                    @elseif($conf->form_type == 3)
                                                        <font color="#f0c">多选项</font>
                                                    @elseif($conf->form_type == 4)
                                                        <font color="yellow">下拉项</font>
                                                    @elseif($conf->form_type == 5)
                                                        <font color="#32cd32">文本域</font>
                                                    @else
                                                        <font color="#00ffff">附件上传</font>
                                                    @endif
                                                </td>
                                                <td align="center">
                                                    @if($conf->conf_type = 1) 店铺配置 @elseif($conf->conf_type = 2)商品配置 @else SEO设置 @endif
                                                </td>
                                                <td align="center">
                                                    @if($conf->form_type != 6)
                                                        {{ cut_str($conf->value, 10) }}
                                                    @else
                                                        <img src="{{ asset(u(CONF_IMG) . $conf->value) }}" height="20">
                                                    @endif
                                                </td>
                                                <td align="center">
                                                    @if($conf->values)
                                                        <font color="#6495ed">{{ $conf->values }}</font>
                                                    @else
                                                        <font color="#c71585">未设置</font>
                                                    @endif
                                                </td>
                                                <td align="center"><input type="text" style="width:60px; text-align:center;" name="sort[{{ $conf->id }}]" value="{{ $conf->sort }}" /></td>
                                                <td align="center">
                                                    <a href="{{ url("admin/conf/$conf->id/edit") }}" class="btn btn-primary btn-sm shiny">
                                                        <i class="fa fa-edit"></i> 编辑
                                                    </a>
                                                    <a href="#" onClick="del('{{ $conf->id }}', '{{ url('admin/conf') }}', '这项配置')" class="btn btn-danger btn-sm shiny">
                                                        <i class="fa fa-trash-o"></i> 删除
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr><td colspan="9" align="right" style="padding-right:18.5%;"><input class="btn btn-primary btn-sm shiny" type="submit" value="提交" /></td></tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div style="padding-top:10px; text-align:right;">
                            {{ $confs->links() }}
                        </div>
                        <div>
                        	                </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection