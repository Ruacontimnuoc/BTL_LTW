<?php
    require_once("./core/Database.php");
    class ProductModel {
        public $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function getallproduct() {
            
            $conn = $this->db->conn;
            $sql="SELECT * FROM tbl_sanpham";
            $result = mysqli_query($conn, $sql);
            // $kq = $result->fetch_array();
            return $result;
        }
      
        public function getuserinfo($username, $password){
            $conn = $this->db->conn;
            $sql="SELECT * FROM tbl_user WHERE username='".$username."' ";
            
            $result = mysqli_query($conn, $sql);
                $followingdata = $result->fetch_assoc();
                $rowcount=mysqli_num_rows($result);
                if($rowcount == 1) {
                    $hashed_password = $followingdata['password'];
                    if(password_verify($password, $hashed_password)) {
                        return $followingdata;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
        }
        // public function insertuser($role, $username, $firstname, $lastname, $email, $phone, $address, $img, $password) {
        //     // prepare the SQL query
        //     $query = "INSERT INTO tbl_user (role, username, name, email, phone, address, img, password, password_re) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        //     // prepare the statement
        //     $stmt = $this->db->conn->prepare($query);
        //     $name = $firstname . " " . $lastname;
        //     // bind the parameters
        //     $stmt->bind_param("sssssssss", $role, $username, $name, $email, $phone, $address, $img, $password, $password);
    
        //     // execute the statement
        //     $stmt->execute();
    
        //     // check if the insert was successful
        //     if ($stmt->affected_rows > 0) {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }
    }
?>