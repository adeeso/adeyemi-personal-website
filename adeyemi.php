<?php
// class database connection class

class Databaseconfig{
// member variables
	public $dbcon; //database connection handler

	//member function/ method

	public function __construct(){
		//connection by instantiating MYSQLI class
		$this->dbcon=new mysqli("www.adeyemiadeeso.com", "adeyemi3_adeyemi1", "dantealighieri", "adeyemi3_adeyemi");

		//check connection

		if ($this->dbcon->connect_errno) {
			die('connection failed '. $this->dbcon->connect_error);
		}//else{
			//echo "connection successful";
		//}


	}


}


// authentication class
class Authentication{
	// member variables
	public $dbobj;  //object handler of DatabaseConfig class

	//member method/function
	
public function __construct(){
		//creating connection of DatabaseConfigsss
$this->dbobj = new DatabaseConfig;
	}

public function login($email, $password){
	
	$password=md5($password);

 	//write a query for login
 		$query="SELECT * FROM user WHERE email='$email'  && password='$password' LIMIT 1";
 	//var_dump($email,$password,$query);
 	//exit();
//     run this query
 	$result=$this->dbobj->dbcon->query($query);
 	//var_dump($this->dbobj->dbcon->error);
 	//exit();

 	if ($this->dbobj->dbcon->affected_rows==1) {
//        check if the number of row is equal to one
		$output=$result->fetch_assoc();
 		
 		//create a session

 		$_SESSION['email']=$output['email'];

 		// redirect to dashboard
 		header("Location:http://www.adeyemiadeeso.com/admin/dashboard.php");

		
 		}else{
 			$result="<div class='alert alert-danger'>Invalid email address or password!</div>";
 		}
 		return $result;
 	}
}
// end of instantiating user class


class Contact{
	public $name;
	public $email;
	public $message;
	public $dbcon;


	public function __construct($servername, $username, $password, $db)
{
	$this->servername=$servername;
	$this->username=$username;
	$this->password=$password;
	$this->db=$db;

	$this->dbcon=new mysqli("www.adeyemiadeeso.com", "adeyemi3_adeyemi1", "dantealighieri", "adeyemi3_adeyemi");
// to check connection error and may not be neccessary if no error
      
      if(!empty($this->dbcon->connect_errorno)){
       die($this->dbcon->connect_error);
}

}

function register($name,$email,$message){
$result=$this->dbcon->query("INSERT INTO contact SET name='$name', email='$email', message='$message'");

	if (empty($this->dbcon->insert_id)) {
		// show if there is error
		die($this->dbcon->error);
	}
    return $this->dbcon->insert_id;

}


// To get all users
  public function getallmessages(){
  	//write you query function
  	$sql="SELECT * from contact";
  	//run the query
  	if ($result=$this->dbcon->query($sql)) {
  		   $output=$result->fetch_all(MYSQLI_ASSOC);
  }else{
    echo "Error: ", $this->dbcon->error;
}return $output;

  }



function deleteContact($id){
$query= "DELETE FROM contact WHERE id='$id'";
if($this->dbcon->query($query)===TRUE){
	$msg= "<div class='alert alert-success'>Contact details successfully deleted</div>";
}else{
	// $myerror= $this->conn->error;
	// $result= "Error while deleting".$myerror;
    die($this->dbcon->error);
}
}




}



?>