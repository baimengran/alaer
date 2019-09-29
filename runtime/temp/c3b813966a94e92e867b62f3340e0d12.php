<?php /*a:3:{s:79:"D:\phpstudy_pro\WWW\www.alaer.com\application\admin\view\con_attr\add_edit.html";i:1569120498;s:75:"D:\phpstudy_pro\WWW\www.alaer.com\application\admin\view\layout\header.html";i:1569059483;s:75:"D:\phpstudy_pro\WWW\www.alaer.com\application\admin\view\layout\footer.html";i:1569388136;}*/ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name=”renderer” content=”webkit|ie-stand|ie-comp” />
<meta name="force-rendering" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>后台管理系统</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="shortcut icon" href="<?php echo url('/public/favicon.ico','',''); ?>">
<link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
<link href="/static/admin/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="/static/admin/css/animate.min.css" rel="stylesheet">
<link href="/static/admin/css/style.min.css" rel="stylesheet">
<link href="/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">

<link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="/static/admin/css/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="/static/admin/css/plugins/cropper/cropper.min.css" rel="stylesheet">
<link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
<link href="/static/admin/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
<link href="/static/admin/css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
<link href="/static/admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
<link href="/static/admin/css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
<link href="/static/admin/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<link href="/static/admin/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/static/admin/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
<link href="/static/admin/css/animate.min.css" rel="stylesheet">
<link href="/static/admin/css/style.min862f.css?v=4.1.0" rel="stylesheet">
<!--[if lt IE 9]>
<meta http-equiv="refresh" content="0;ie.html" />
<![endif]-->
<script>
    // if(window.top!==window.self){window.top.location=window.location};
</script>

    <link href="/static/admin/js/plugins/webuploader/webuploader.css" rel="stylesheet">
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo !empty($data) ? '编辑属性' : '新增属性'; ?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" name="userEdit" id="userEdit" method="post"
                          action="<?php echo !empty($data) ? '/admin/con_attr/update' : 'save'; ?>">
                        <input type="hidden" name="id" value="<?php echo !empty($data) ? htmlentities($data['id']) : ''; ?>">
                        <div class="form-group">
                        <label class="col-sm-3 control-label">选择栏目：</label>
                        <div class="input-group col-sm-4">
                        <select class="form-control" name="cate_id" id="ding">
                        <option value="0">默认顶级</option>
                        <?php foreach($cate as $v): ?>
                        <option value="<?php echo htmlentities($v['id']); ?>" <?php echo !empty($data) ? ($data['cate_id']==$v['id']?'selected' : ''):''; ?>><?php echo htmlentities($v['title']); ?></option>
                        <?php endforeach; ?>
                        </select>
                        </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">属性名称：</label>
                            <div class="input-group col-sm-4">
                                <input id="name" type="text" class="form-control" name="name" required=""
                                       aria-required="true" value="<?php echo !empty($data) ? htmlentities($data['name']) : ''; ?>">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio3" value="1" name="type" onclick="add_che(1)" <?php echo !empty($data) ? ($data['type']==1?'checked' : ''):'checked'; ?> >
                                    <label for="inlineRadio3"> 文本 </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio4" value="2" name="type" onclick="add_che(2)" <?php echo !empty($data) ? ($data['type']==2?'checked' : ''):''; ?> >
                                    <label for="inlineRadio4"> 图片 </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio5" value="3" name="type" onclick="add_che(3)" <?php echo !empty($data) ? ($data['type']==3?'checked' : ''):''; ?> >
                                    <label for="inlineRadio5"> 多行文本 </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio6" value="4" name="type" onclick="add_che(4)" <?php echo !empty($data) ? ($data['type']==4?'checked' : ''):''; ?>>
                                    <label for="inlineRadio6"> 单选 </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio7" value="5" name="type" onclick="add_che(5)" <?php echo !empty($data) ? ($data['type']==5?'checked' : ''):''; ?> >
                                    <label for="inlineRadio7"> 多选 </label>
                                </div>

                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div id="add_che">
                            <?php if(!empty($data)&&!empty($data['type_value'])): foreach($data['type_value'] as $v): ?>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">选项：</label>
                                <div class="input-group col-sm-4">
                                    <input id="sort" type="text" class="form-control" name="che[]" value="<?php echo htmlentities($v); ?>" required=""
                                                                       aria-required="true" value="">
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="input-group col-sm-4">
                                <button style="margin-top:10px;width:100%" class="btn btn-danger" type="button" onclick="add(this)">添加</button></div></div>
                            <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="input-group col-sm-4">
                                <button style="margin-top:10px;width:100%" class="btn btn-danger" type="button" onclick="del(this)">删除</button></div></div>;

                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">排序：</label>
                            <div class="input-group col-sm-4">
                                <input id="sort" type="text" class="form-control" name="sort" value="<?php echo !empty($data) ? htmlentities($data['sort']) : '50'; ?>" required=""
                                       aria-required="true" value="<?php echo !empty($data) ? htmlentities($data['sort']) : ''; ?>">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">状&nbsp;态：</label>
                            <div class="input-group col-sm-4">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio1" value="1" name='status' <?php echo !empty($data) ? ($data['status']==1?'checked' : ''):'checked'; ?> >
                                    <label for="inlineRadio1"> 开启 </label>

                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio2" value="0" name='status' <?php echo !empty($data) ? ($data['status']==0?'checked' : ''):''; ?> >
                                    <label for="inlineRadio2"> 关闭 </label>
                                </div>

                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> 保存</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-danger" href="javascript:history.go(-1);"><i class="fa fa-close"></i>
                                    返回</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/static/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/static/admin/js/plugins/layer/layer.min.js"></script>
<script src="/static/admin/js/hplus.min.js?v=4.1.0"></script>
<script type="text/javascript" src="/static/admin/js/contabs.min.js"></script>
<script src="/static/admin/js/plugins/pace/pace.min.js"></script>
<script src="/static/admin/js/jquery.form.js"></script>
<script src="/static/admin/js/lunhui.js"></script>
<script src="/static/admin/js/ajax_login_overtime.js"></script>
<script src="/static/admin/js/plugins/chosen/chosen.jquery.js"></script>
<!--<script src="/static/admin/js/content.min.js?v=1.0.0"></script>-->
<!--<script src="/static/admin/js/plugins/jsKnob/jquery.knob.js"></script>-->
<!--<script src="/static/admin/js/plugins/jasny/jasny-bootstrap.min.js"></script>-->
<!--<script src="/static/admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>-->
<!--<script src="/static/admin/js/plugins/prettyfile/bootstrap-prettyfile.js"></script>-->
<!--<script src="/static/admin/js/plugins/nouslider/jquery.nouislider.min.js"></script>-->
<script src="/static/admin/js/plugins/switchery/switchery.js"></script>
<!--<script src="/static/admin/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>-->
<!--<script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>-->
<!--<script src="/static/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>-->
<!--<script src="/static/admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>-->
<!--<script src="/static/admin/js/plugins/clockpicker/clockpicker.js"></script>-->
<!--<script src="/static/admin/js/plugins/cropper/cropper.min.js"></script>-->



<script type="text/javascript" src="/static/admin/js/plugins/webuploader/webuploader.min.js"></script>

<script type="text/javascript">

    function add_che(_this){
        if(_this!==4&&_this!==5){
            $('#add_che').empty();
            return false;
        }
        html = '<div class="form-group">\n' +
            '                            <label class="col-sm-3 control-label">选项：</label>\n' +
            '                            <div class="input-group col-sm-4">\n' +
            '                                <input id="sort" type="text" class="form-control" name="che[]" value="" required=""\n' +
            '                                       aria-required="true" value="">\n' +
            '                            </div>\n' +
            '                        </div>'+
        '<div class="form-group">\n' +
        '                            <label class="col-sm-3 control-label">选项：</label>\n' +
        '                            <div class="input-group col-sm-4">\n' +
        '                                <input id="sort" type="text" class="form-control" name="che[]" value="" required=""\n' +
        '                                       aria-required="true" value="">\n' +
        '                            </div>\n' +
        '                        </div>'+
        '<div class="form-group">' +
                '<label class="col-sm-3 control-label"></label>'+
            '<div class="input-group col-sm-4">' +
            '<button style="margin-top:10px;width:100%" class="btn btn-danger" type="button" onclick="add(this)">添加</button></div></div>'+
        '<div class="form-group">' +
                '<label class="col-sm-3 control-label"></label>'+
            '<div class="input-group col-sm-4">' +
            '<button style="margin-top:10px;width:100%" class="btn btn-danger" type="button" onclick="del(this)">删除</button></div></div>';
        $('#add_che').empty();
        $('#add_che').append(html);
    }

    function add(_this){
        html ='<div class="form-group">' +
            '<label class="col-sm-3 control-label">选项：</label>' +
            '<div class="input-group col-sm-4">' +
            '<input id="sort" type="text" class="form-control" name="che[]" value="" required=""' +
            'aria-required="true" value="">' +
            '</div>'+
            '</div>';
        $('#add_che').prepend(html);
    }

    function del(){
        $('#add_che').empty();
    }


    var $list = $('#fileList');
    //上传图片,初始化WebUploader
    var uploader = WebUploader.create({

        auto: true,// 选完文件后，是否自动上传。
        swf: '/static/admin/js/plugins/webupload/Uploader.swf',// swf文件路径
        server: "<?php echo url('upload/upload'); ?>",// 文件接收服务端。
        duplicate: true,// 重复上传图片，true为可重复false为不可重复
        pick: '#imgPicker',// 选择文件的按钮。可选。

        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/jpg,image/jpeg,image/png'
        },

        'onUploadSuccess': function (file, data, response) {
            $("#data_photo").val(data);
            $("#img_data").attr('src', data).show();
        }
    });

    uploader.on('fileQueued', function (file) {
        $list.html('<div id="' + file.id + '" class="item">' +
            '<h4 class="info">' + file.name + '</h4>' +
            '<p class="state">正在上传...</p>' +
            '</div>');
    });

    // 文件上传成功
    uploader.on('uploadSuccess', function (file) {
        $('#' + file.id).find('p.state').text('上传成功！');
    });

    // 文件上传失败，显示上传出错。
    uploader.on('uploadError', function (file) {
        $('#' + file.id).find('p.state').text('上传出错!');
    });

    //提交
    $(function () {
        $('#userEdit').ajaxForm({
            beforeSubmit: checkForm,
            success: complete,
            dataType: 'json'
        });

        function checkForm() {

        }


        function complete(data) {
            if (data.code === 1) {
                layer.msg(data.msg, {icon: 6, time: 1500, shade: 0.1}, function (index) {
                    window.location.href = "<?php echo url('con_attr/index'); ?>";
                });
            } else {
                layer.msg(data.msg, {icon: 5, time: 1500, shade: 0.1});
                return false;
            }
        }

    });
</script>
</html>