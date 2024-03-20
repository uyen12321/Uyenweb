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
                            <th class="column-title">Tên danh mục</th>
                            <th class="column-title">Trạng thái</th>
                            <th class="column-title">Ngày tạo</th>
                            <th class="column-title">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data["data"] as $key => $values){?>
                            <tr>
                            <td><?=$values["name"]?></td>
                            <td><a class="btn btn-primary" href="<?=base?>admin/statuscategory&id=<?=$values["id"]?>&status=<?=$values["status"]?>"><?=$values["status"] ?></a></td>
                            <td><?=$values["create_at"] ?></td>
                            <td>
                                <a style="height: 35px;" class="btn btn-success" href="<?=base?>admin/editcategory&id=<?=$values['id']?>">Sửa</a>
                                <a style="height: 35px" class="btn btn-danger submit" href="javascrip:void(0)" onclick="del(<?=$values['id']?>,'<?=$values['name'] ?>','<?=base.'admin/deletecategory/'?>','danh mục ')"  >Xóa</a> 
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
