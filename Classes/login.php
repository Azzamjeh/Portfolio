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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo  "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
}

#button {
  background-color: #f86a04;
  color: #fff;
  padding: 0.5em 0.8em;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-family:monospace;
  margin-bottom:2em;
}
#btn{
  background-color: #f88a30;
  color: #fff;
  padding: 0.5em 1.5em;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-family:monospace;
  margin-bottom:2em;
 
}

a {
      color: white; 
	  font-family:monospace;
      text-decoration: none;
	  margin-bottom:1em;
}
    </style>
    
    

    </head>
    <body>
        <section class="form-box">
		<div id="box">
		
		<form method="post">
			<div style="font-size: 25px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"placeholder="Name" autocomplete="off"><br><br>
			<input id="text" type="password" name="password"placeholder="Password" autocomplete="off"><br><br>

			<input id="button" type="submit" value="Login"><br>

			<button id="btn"><a href="signup.php">Signup</a><br><br></button>
			<button id="btn"><a href="../index.html">Home</a><br><br></button>
		</form>
	</div>
          </section>
          
    </body>


</html>
