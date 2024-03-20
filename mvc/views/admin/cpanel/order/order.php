<div class="page-title">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Đơn Hàng Gần Đây</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Tên Khách Hàng</th>
                          <th>Tổng Tiền</th>
                          <th>Thời Gian</th>
                          <th>Trạng Thái</th>
                          <th>Thao Tác</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php foreach($data["listorder"] as $key=>$value){ ?>
                          <tr>
                            <td><?=$key+1?></td>
                            <td><?=$value["name"]?></td>
                            <td><?=number_format ($value["total_mony"] , $decimals = 0 , $dec_point = "," , $thousands_sep = "." )?></td>
                            <td><?=$value["create_at"]?></td>
                            <?php if($value["status"] == "Chờ Xử Lý"){ ?>
                              <td style="color: red; font-weight: bold;"><?=$value["status"]?></td>
                            <?php }else {?>
                              <td style="color: green; font-weight: bold;"><?=$value["status"]?></td>
                            <?php }?>
                            <td style="padding: unset; padding-left: 5px ;">
                            <a style="height: 35px;" class="btn btn-primary" href="<?=base?>admin/orderdetails&id_order=<?=$value['id']?>&id_user=<?=$value['user_id']?>">Chi Tiết</a>
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