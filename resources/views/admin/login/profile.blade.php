@extends('layout.admin')
@section('content')
@section('title',$title)
<div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">修改头像</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">
                    <form class="form-horizontal"  id="art_form" role="form" action="{{url('admin/login')}}" method="post" enctype="multipart/form-data">
                        <!-- <input type="hidden" name="_token" value="rpoEcOiaHSw8i6MjkMc58ulyAj89Vkf6UD62PzfB"> -->
                        

                        <div class="form-group">
                            <label class="col-sm-2 control-label no-padding-right">用户头像</label>
                            <div class="col-sm-6">
                            	<img src="{{ADMIN_IMG.'/'.$rs->img}}" id="imgss">
                                <input name="img" type="file" id="file_upload">
                            </div>
                        </div>
							<div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection;


@section('js')
<script type="text/javascript">

	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

$(function () {
    $("#file_upload").change(function () {
        uploadImage();
    })
})

function uploadImage() {
//  判断是否有选择上传文件
    var imgPath = $("#file_upload").val();

    if (imgPath == "") {
        alert("请选择上传图片！");
        return;
    }

    //判断上传文件的后缀名
    var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
    if (strExtension != 'jpg' && strExtension != 'gif'
        && strExtension != 'png' && strExtension != 'bmp') {
        alert("选择图片文件类型错误");
        return;
    }

    var formData = new FormData($('#art_form')[0]);

    $.ajax({
        type: "POST",
        url: "/admin/doprofile",
        data: formData,
        contentType: false,
        processData: false,

        success: function(data) {

        	// console.log($('#imgss'));

            $('#imgss').attr('src',data);
			// alert($('#imgs').attr('src'));
            // location.href = '/admin';
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("上传失败，请检查网络后重试");
        }
    });
}
</script>


@stop