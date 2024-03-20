<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?= $data['title']?></h3>
            <a class="btn btn-primary" href="<?=base?>admin/showadmin">Trở Về</a>
                <h4 class="text-success"><?=$data["mess"] ?></h4>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="x_content">
        <form  method="post">
            <div class="row" >
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tài khoản</label>
                        <input id="name" value="<?=$data['personnel'][0]['user_name']?>" type="text" class="form-control" name="personnel[user_name]" disabled />                   
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input id="name" value="<?=$data['personnel'][0]['pass_word']?>" type="password" class="form-control" name="personnel[pass_word]" required>                   
                    </div>
                    <div class="form-group">
                        <label for="">Phân quyền</label>
                        <select class="form-control" name="personnel[level]">
                            <option value="<?=$data['personnel'][0]['level_admin']?>"><?php echo ($data['personnel'][0]['level_admin']) ? "Quản trị viên" : "Nhân viên"; ?></option>
                            <?php echo  ($data['personnel'][0]['level_admin']) ? "<option value='0'>Nhân viên</option>" : "<option value='1'>Quản trị viên</option>";?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <select class="form-control" name="personnel[banned]">
                            <option value="<?=$data['personnel'][0]['banned']?>"><?php echo ($data['personnel'][0]['banned']) ? "Banned" : "Hoạt động"; ?></option>
                            <?php echo  ($data['personnel'][0]['banned']) ? "<option value='0'>Hoạt động</option>" : "<option value='1'>Banned</option>";?>
                        </select>
                    </div>
                    
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input id="name" value="<?=$data['personnel'][0]['full_name']?>" type="text" class="form-control" name="personnel[full_name]" required>                   
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại </label>
                        <input id="name" value="<?=$data['personnel'][0]['number_phone']?>" type="number" class="form-control" name="personnel[number_phone]" required>                   
                    </div>
                    <div class="form-group">
                        <label for="">Email </label>
                        <input id="name" value="<?=$data['personnel'][0]['email']?>" type="email" class="form-control" name="personnel[email]" required>                   
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ </label>
                        <input id="name" value="<?=$data['personnel'][0]['address']?>" type="text" class="form-control" name="personnel[address]" required>                   
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button class="btn btn-primary" name="submit">Cập Nhật</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
