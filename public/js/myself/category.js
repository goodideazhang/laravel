$(function () {
    var validateFields = function (action) {
        if ('new' == action) {
            var fields = {
                parent_name: {
                    message: '上级类目验证失败',
                    validators: {
                        notEmpty: {
                            message: '上级类目不能为空'
                        }
                    }
                },
                name: {
                    validators: {
                        notEmpty: {
                            message: '名称不能为空'
                        }
                    }
                }
            };

        } else {
            var fields = {
                parent_name: {
                    message: '上级类目验证失败',
                    validators: {
                        notEmpty: {
                            message: '上级类目不能为空**'
                        }
                    }
                },
                name: {
                    validators: {
                        notEmpty: {
                            message: '名称不能为空'
                        }
                    }
                }
            };
        }
        return fields;
    };

    var fields = validateFields('new');
    var form = $('form');
    $('form').bootstrapValidator({
        message: '请输入有效值',
        submitHandler:function (validator, adminform, submitButton) {

            modals.confirm('确认保存？', function () {
                var params = $('form').serializeArray();
                $.ajax({
                    url: 'http://laravel_app.com/category/store',
                    dataType: 'json',
                    data: params,
                    type: 'post',
                    success: function(res) {
                        console.log(res);
//                        if (res.code) {
//                            modals.info(res.msg);
//                            return;
//                        }
//                        modals.hideWin(winId);
//                        table.ajax.reload();
                    }
                });
//                console.log(params);
            });

        },
        fields: fields
    });

});