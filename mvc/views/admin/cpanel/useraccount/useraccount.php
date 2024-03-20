<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?= $data['title']?></h3>
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
                            <th class="column-title">Email</th>
                            <th class="column-title">Ngày tạo</th>
                            <th class="column-title">Trạng thái</th>
                            <th class="column-title">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data["listaccount"] as $key => $values){?>
                            <tr>
                            <td><?=$key+1?></td>
                            <td><?=$values["name"]?></td>
                            <td><?=$values["email_account"]?></td>
                            <td><?=$values["create_at"]?></td>
                            <td><?php echo ($values["active_status"] == 'Block') ? '<span class="badge badge-danger">block</span>' : '<span class="badge badge-success">Hoạt Động</span>';?></td>
                            <td>
                            <a href="<?=base?>admin/statusaccountuser&id=<?=$values["id"]?>&status=<?=$values["active_status"]?>" style="height: 35px;min-width: 105px;" class="btn btn-primary"><?php echo ($values["active_status"] == 'Block') ? '<i class="fa fa-unlock"></i>' : '<i class="fa fa-lock"></i>';?></a> 
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