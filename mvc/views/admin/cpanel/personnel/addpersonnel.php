<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3><?= $data['title']?></h3>
            <a class="btn btn-primary" href="<?=base?>admin/showpersonnel">Trở Về</a>
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
                        <input id="name" type="text" class="form-control" name="personnel[user_name]" required />                   
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu</label>
                        <input id="name" type="password" class="form-control" name="personnel[pass_word]" required>                   
                    </div>
                    <div class="form-group">
                        <label for="">Họ và tên</label>
                        <input id="name" type="text" class="form-control" name="personnel[full_name]" required>                   
                    </div>
                    
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Số điện thoại </label>
                        <input id="name" type="number" class="form-control" name="personnel[number_phone]" required>                   
                    </div>
                    <div class="form-group">
                        <label for="">Email </label>
                        <input id="name" type="email" class="form-control" name="personnel[email]" required>                   
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ </label>
                        <input id="name" type="text" class="form-control" name="personnel[address]" required>                   
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <button class="btn btn-primary" name="submit">Thêm Nhân Viên</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
