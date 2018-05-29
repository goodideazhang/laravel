    <link rel="stylesheet" href="{{URL::asset('/plugins/fileinput/css/fileinput.min.css')}}">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="false">
        <li class="fa fa-remove">&times;</li>
    </button>
    <h5 class="modal-title"></h5>
</div>

<div class="modal-body">

    <form id="role-form" name="role-form" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="version">
        <input type="hidden" name="deleted">

        <div class="box-body">
            <div class="col-xs-12 ">
                <div class="form-group">
                    <label for="name" class="control-label">名称</label>
                    <div class="">
                        <input type="text" class="form-control" id="name" name="name" placeholder="名称">
                    </div>
                </div>

                <div class="form-group">
                    <label for="code" class="control-label">上传图片</label>
                    <div class="">
                        <input type="file" name="file" id="attachment">
                    </div>
                </div>

                <div class="form-group">
                    <label for="sort" class="control-label">排序</label>
                    <div class="">
                        <input type="text" class="form-control" id="sort" name="sort" placeholder="排序">
                    </div>
                </div>

                <div class="form-group">
                    <label for="remark" class="control-label">说明</label>
                    <div class="">
                        <textarea class="form-control" id="remark" name="remark" placeholder="说明"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-right">
            <button type="button" class="btn btn-default" data-btn-type="cancel" data-dismiss="modal">取消</button>
            <button type="submit" class="btn btn-primary" data-btn-type="save">提交</button>
        </div>
        <!-- /.box-footer -->
    </form>

</div>

    <script type="text/javascript" src="{{URL::asset('/plugins/fileinput/js/fileinput.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/plugins/fileinput/js/locales/zh.js')}}"></script>
    <script>
        $(function () {
            $('#attachment').fileinput({
                language: 'zh',
                showRemove: false,
                showUpload: false,
                removeFromPreviewOnError: true,
                allowedFileExtensions: ["jpg", "png", "jpeg"],
                uploadUrl: '/upload_img',
                maxFileSize: 1024 * 3, //3M
                maxImageWidth: 1920,
                maxImageHeight: 420,
                minImageWidth: 1920,
                minImageHeight: 420,
                maxFileCount: 1,
                msgSizeTooLarge: '图片大小不能超过2M',
                msgImageWidthSmall: '图片宽度应为1920px',
                msgImageHeightSmall: '图片高度应为420px',
                msgImageWidthLarge: '图片宽度应为1920px',
                msgImageHeightLarge: '图片高度应为420px',
                msgInvalidFileExtension: '只能上传"{extensions}"文件',
                msgFilesTooMany: '只能上传一张图片',
                previewSettings:{ image: {width: "450px", height: "auto"}}
            });

        })
    </script>
