<?php
include_once('Conn.php');
 
class Forgotpassword extends Conn{
 
    public function __construct(){
 
        parent::__construct();
    }
 
    public function forgot($email, $password){
       
        $sql = "SELECT email FROM student WHERE email='$email'";
           $result = mysqli_query($this->connection, $sql);
           $count = mysqli_num_rows($result);
     
           if ($count == 1)
           {
            
            $sql = "UPDATE student SET password='$password' WHERE email='$email'";
            echo "<script>
            alert('Forgot successful');
            window.location.href='login.php';
            </script>";
          if ($this->connection->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $this->connection->error;
            }
           }
           else
           {
            echo "<script>
            alert('invalide Email ID');
            window.location.href='forgot.php';
            </script>"; 
           }
    }
    public function escape_string($value){
        return $this->connection->real_escape_string($value);
    }
}