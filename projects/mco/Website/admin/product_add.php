<?php
require '../tools.func.php';
require 'auth.php';
require '../db.func.php';
// 1. 判断是否为post提交
if (!empty($_POST['name'])) {
    // 2. 接收post数据
    $name = htmlentities($_POST['name']);
    $code = htmlentities($_POST['code']);
    $description = htmlentities($_POST['description']);
    $stock = intval($_POST['stock']);
    $price = doubleval($_POST['price']);

    $created_at = date('Y-m-d H:i:s');
    $image = $_FILES['image']['name'];
    $bend = htmlentities($_POST['bend']);
    $target = "image/".basename($image);
    $category_id = intval($_POST['category']);


    // 3. 写sql语句
    $prefix = getDBPrefix();
    $sql = "INSERT INTO {$prefix}product(name, code, description, stock, price, created_at,image,bend,category_id)
					VALUES('$name', '$code', '$description', '$stock','$price', '$created_at','$image','$bend','$category_id')";
     echo $sql;

     if(execute($sql)){
         echo "good";
     }
    // 4. 执行插入
    //echo $sql;
    /*if (execute($sql) && move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
        //echo "图片已存储到数据库";

    } else {

        echo "请求失败,请重试";
    }*/
    // 5. 显示结果
}


require 'header.php';
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">添加商品</h4>
                <p class="card-category">添加一个商品</p>
            </div>
            <div class="card-body">
                <?php if (hasInfo()) echo getInfo(); ?>
                <form action="product_add.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">商品名称</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Power Consumption</label>
                                <input type="number" name="price" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Cutting Intervals</label>
                                <input type="number" name="stock" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Voltage</label>
                                <input type="text" name="code" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Beam Angle</label>
                                <div class="form-group bmd-form-group">
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <div class="form-group bmd-form-group">
                                    <div class="col-lg-5 col-md-6 col-sm-3">
                                        <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" name = "category">
                                            <option disabled selected>选择类型</option>
                                            <option value="1">A</option>
                                            <option value="2">B</option>
                                            <option value="3">C</option>
                                            <option value="4">D</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Bend Radius</label>
                                <div class="form-group bmd-form-group">
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>image</label>
                                <div class="form-group form-file-upload form-file-multiple">
                                    <input type="file" multiple="" name="image" id = "image"  class="inputFileHidden">
                                    <div class="input-group">
                                        <input type="text" class="form-control inputFileVisible" placeholder="Single File">
                                        <span class="input-group-btn">
            <button type="button" class="btn btn-fab btn-round btn-primary">
                <i class="material-icons">attach_file</i>
            </button>
        </span>
                                    </div>
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

</div>
<?php
require 'footer.php';
?>
