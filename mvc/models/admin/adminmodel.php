<?php
    class adminmodel extends database{
        function GetAllAdmins(){
            $sql = "SELECT * FROM admin_account WHERE level_admin = 1";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        function GetAdminlById($id){
            $sql = "SELECT * FROM admin_account WHERE id = $id and level_admin = 1";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        function GetNameAdmin($id){
            $sql = "SELECT full_name FROM admin_account WHERE id = $id";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        function UpdateAdmin($id,$data){
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
        
    }
?>