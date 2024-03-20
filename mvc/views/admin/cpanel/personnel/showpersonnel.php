<div class="">
    <div style="margin-left:13px;" class="page-title">
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
                            <th class="column-title">STT</th>
                            <th class="column-title">Họ Tên</th>
                            <th class="column-title">Tài khoản</th>
                            <th class="column-title">Ngày tạo</th>
                            <th class="column-title">Trạng thái</th>
                            <th class="column-title">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data["personnels"] as $key => $values){?>
                            <tr>
                            <td><?=$key+1?></td>
                            <td><?=$values["full_name"]?></td>
                            <td><?=$values["user_name"]?></td>
                            <td><?=$values["create_date"]?></td>
                            <td><?php echo ($values["banned"]) ? '<span class="badge badge-danger">block</span>' : '<span class="badge badge-success">Hoạt Động</span>';?></td>
                            <td>
                                <a href="admin/editpersonnel/<?=$values['id']?>" class="btn btn-primary">Sửa</a>
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