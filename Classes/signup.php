<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<style>
        body{
            background-color: #191724;
            display: grid;
            color: #b3b3b3;
            height: 0vh;
            font-family:monospace;
			margin-top:30vh;
            

            
        }
 

.form-box {
  width: 20%;
  padding: 2em;
  border: 2px solid #ccc;
  border-radius: 7px;
  text-align:center;
  margin-left: 37%;
  font-family:monospace;
}

.form-box h2 {
  margin-top: 0;
}



.form-box input[type="text"],
.form-box input[type="email"],
.form-box input[type="password"] {
  display: block;
  width: 100%;
  padding: 0.5em;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 1em;
  font-family:monospace;
}

#button {
  background-color: #f86a04;
  color: #fff;
  padding: 0.5em 1em;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-family:monospace;
}
#btn{
  background-color: #f88a30;
  color: #fff;
  padding: 0.3em 0.8em;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-family:monospace;
  margin-bottom:1em;
 
}

a {
      color: white; 
	  font-family:monospace;
      text-decoration: none;
}


    </style>
    

    </head>
    <body>
        <section class="form-box">
		<div id="box">
		
		<form method="post">
			<div style="font-size: 25px;margin: 10px;color: white;">Sign up</div>

			<input id="text" type="text" name="user_name" placeholder="Name" autocomplete="off"><br><br>
			<input id="text" type="password" name="password" placeholder="Password" autocomplete="off"><br><br>

			<input id="button" type="submit" value="sign-up"><br><br>

			<button id="btn"><a href="login.php">Login</a><br><br></button>
			<button id="btn"><a href="../index.html">Home</a><br><br></button>
		</form>
	</div>
          </section>
          
    </body>


</html>
