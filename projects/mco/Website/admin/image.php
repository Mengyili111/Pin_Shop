<?php
require '../tools.func.php';
require 'auth.php';
require '../db.func.php';

if (isset($_POST['upload'])) {

    $image = $_FILES['image']['name'];

    $target = "image/".basename($image);
    //$data = addslashes(fread(fopen($photo, "r"), filesize($photo)));
    //$prefix = getDBPrefix();
    $sql = "INSERT INTO image (image)
					VALUES($image)";
    echo $sql;

    if (execute($sql) && move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
            echo "图片已存储到数据库";

    } else {

        echo "请求失败,请重试";
    }

    // 4. 执行插入

}


require 'header.php';
?>
<!--<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">添加商品</h4>
                <p class="card-category">添加一个商品</p>
            </div>
            <div class="card-body">
                <?php /*if (hasInfo()) echo getInfo(); */?>
                <form action="image.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">商品名称</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">商品单价</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">商品库存</label>
                                <input type="number" name="stock" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">商品编号</label>
                                <input type="text" name="code" class="form-control">
                            </div>
                        </div>
                    </div>
                   <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>商品描述</label>
                                <div class="form-group bmd-form-group">
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>-->
       <!--             <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <div class="form-group bmd-form-group">
                                    <input type = "file" name = "fileToUpload" id = "fileToUpload">
                                    <input type = "submit" value="up" name = "sumit">


                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">添加商品</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</div>-->-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>图片上传和下载</title>
</head>
<body>

    <h2>文件上传</h2>
    <!-- 文件上传得form表单 -->
    <form action="image.php" method="post" enctype="multipart/form-data">
        上传图片:
        <input type="file" name="image" id = "image">
        <button type="submit" name="upload" >
    </form>

</body>
</html>
<?php
require 'footer.php';
?>
