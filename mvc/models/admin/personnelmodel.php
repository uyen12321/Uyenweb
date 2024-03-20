<?php
    class personnelmodel extends database{
        function GetAllPersonnel(){
            $sql = "SELECT * FROM admin_account WHERE level_admin = 0";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        function GetPersonnelById($id){
            $sql = "SELECT * FROM admin_account WHERE id = $id and level_admin = 0";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        function AddPersonnel($data){
            $username = $data["user_name"];
            $password = md5($data["pass_word"]);
            $fullname = $data["full_name"];
            $numberphone = $data["number_phone"];
            $address = $data["address"];
            $email = $data["email"];
            $sql = "INSERT INTO admin_account VALUES('','$username','$password','$fullname','$email','$address','$numberphone',0,0,current_time(),0)";
            $query = $this->conn->prepare($sql);
            $query->execute();
        }
        function UpdatePersonnel($id,$data){
            $password = $data["pass_word"];
            $fullname = $data["full_name"];
            $numberphone = $data["number_phone"];
            $address = $data["address"];
            $email = $data["email"];
            $banned = $data["banned"];
            $level = $data["level"];
            $sql = "UPDATE admin_account SET pass_word = '$password', full_name = '$fullname', email = '$email',number_phone = '$numberphone',level_admin = '$level', banned = '$banned', address = '$address' where id = $id ";
            $query = $this->conn->prepare($sql);
            $query->execute();
        }
        //dùng để đăng xuất người dùng ra khỏi trình duyệt
        function UpdateCookie($id,$cookie){
            $sql = "UPDATE admin_account SET cookie = '$cookie' where id = $id ";
            $query = $this->conn->prepare($sql);
            $query->execute();
        }
        //dùng để tính lương cho nhân viên
        function SalaryPersonnel(){
            $sql = "select acc.*,count(*)*10000 as salary from order_product od join admin_account acc on od.id_personnel = acc.id where month(od.create_at) =  month(current_time()) group by acc.id;";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>