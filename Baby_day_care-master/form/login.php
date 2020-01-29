<!DOCTYPE html>
include '../config/dbconfig.php';
 $username = $_POST['username'];
 $password = $_POST['password'];
 $query = "SELECT * FROM signup WHERE name ='$username';";
 $result=mysqli_query($con, $query);
 $row=mysqli_fetch_assoc($result);
 	if($row['name'] == $username and $row['password'] == $password ){
 		echo "login succesfull";
 	}
 	else
 		echo "username or password did not match";
?>