 <style>
    .img_product .img__product-img{
        width: 100px;
        height: 80px;
        object-fit: cover;
    }
    span{
        display: inline-block;
    }
</style>


<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?= $data['title']?></h3>
                <a href="admin/addpersonnel" class="btn btn-primary">Thêm mới</a>
                <h3 class="text-success"><?=$data["mess"]?></h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="x_content">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table class="table table-striped jambo_table bulk_action" id="datatable-keytable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="headings">
                            <th class="column-title">Tên Sản Phẩm</th>
                            <th class="column-title">Danh Mục</th>
                            <th class="column-title">Hình Ảnh</th>
                            <th class="column-title">Giá</th>
                            <th class="column-title">Số Lượng</th>
                            <th class="column-title">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data["data"] as $key => $values){?>
                            <tr>
                                <td><?=$values["name"]?></td>
                                <td><?=$values['name_category']?></td>
                                <td style=" font-size: 16px;" class="img_product">
                                    <img class="img__product-img" src="public/images/img_product/<?=$values['img_product']?>" alt="">
                                </td>
                                <td><?=$values['price']?></td>
                                <td><?=$values['quantity']?></td>
                                <td>
                                    <a style="height: 35px;" class="btn btn-success" href="<?=base?>admin/editproduct&id=<?=$values['id']?>">Sửa</a>
                                    <a style="height: 35px" class="btn btn-danger submit" href="javascrip:void(0)" onclick="del(<?=$values['id']?>,'<?=$values['name'] ?>','<?=base.'admin/deleteproduct/'?>','sản phẩm'>)"  >Xóa</a> 
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

