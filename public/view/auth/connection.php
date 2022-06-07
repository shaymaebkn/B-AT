<?php


$con=new mysqli('localhost','root','','projet');  

if($con){
    
     echo 'connection is working';
	
    
}
else{
    die(mysqli_error($con));
}



?> 



<!-- // session_start();

//  class Connection  { 
//     public $host = "localhost";
//     public $user = "root";
//     public $password = "";
//     public $db_name = "projet";
//     public $conn;
    
//     public function __cnstruct(){
//         $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name,);
//     }
//  }

    
// class Register extends Connection{
//     public function registarion($fname,$lname, $username,$Number, $email,$Country ,$City, $Age, $password, $confirmpassword ){
//         $dublicate = mysqli_query($this->conn, "SELECT * FROM `clients` WHERE username = '$username' OR email = '$email' ");
//         if(mysqli_num_rows($dublicate) > 0){
//           return 10;  
//         }
        
    
//     else{
//         if($password == $confirmpassword){
//             $query = "INSERT INTO clients VALUES('','','$fname','$lname,'$username','$email','$Number','$email','$Country','$City','$Age','$Password')";
//             mysqli_query($this->conn, $query);

//             return 1;
//         }
//         else{
//             return 100;
//         }
//         }
//     }
// } -->


