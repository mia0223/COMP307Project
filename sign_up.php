<?php
        $nameErr = $pwdErr = $emailErr = $pcErr= $addErr = "";
        $username = $password = $email = $postcode = $address = "";
        $valid1 = $valid2 = $valid3 = $valid4 = 0;

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        	//check username, not empty and formed by letters and numbers only
            if(empty($_POST["username"]))
                { $nameErr = "*Username is required."; }
            else
            { 
                $username = test_input($_POST["username"]); 

                $nameErr=exec("python check.py $username");
                
                if($nameErr=="")
                { 
                	$valid1 = checkdup($username, 'username'); 
                	if($valid1 == 0)
                		$nameErr = "*this username is already registered, please try different one";
            	}
            }

            if(empty($_POST["password"]))
                { $pwdErr = "*password is required.";}
            else
            { 
                $password = test_input($_POST["password"]);
                
                $pwdErr=exec("python check.py $password");

                if($pwdErr=="")
                { $valid2 = 1; }
            }

            if(empty($_POST["email"]))
                    { $emailErr = "*email is required.";}
            else
            { 
                $email = test_input($_POST["email"]);

                $emailErr=exec("python checkemail.py $email");

            	if($emailErr=="")
                    { $valid3 = checkdup($email, 'email');
                      if($valid3 == 0)
                		 $emailErr = "*this email is already registered, please try different one or log in";
                	}
            }

            if(empty($_POST["postcode"]))
                { $pcErr = "*postcode is required.";}
            else
                { 
                	$postcode = test_input($_POST["postcode"]); 

                	$pcErr=exec("python checkpost.py $postcode");
                	if($pcErr=="")
                	{
                		$valid4=1;
                	}
                }


            if(empty($_POST["address"]))
                { $addErr = "*address is required.";}
            else
                { $address = test_input($_POST["address"]); }


            if($valid1 == 1 && $valid2 == 1 && $valid3 == 1 && $valid4==1)
            {
            	if(setvalue($username, $password, $email, $postcode, $address)==1){
            		$_SESSION['login_check'] = "True"; 
    				$_SESSION['usersession'] = $username;
            		header('Location: index.html');
            	}
            		
            }

        }

        function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}

		function checkdup($data, $s)
		{
			$dbhost = 'localhost';
			$dbuser = 'root';
			$dbpass = '';
			$db = 'signup';

			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
			if(! $conn )
			{
			 die('Could not connect: ' . mysql_error());
			}

			$v = 1;
			if($s=='username'){
				$sql = " SELECT username FROM info where username = '$data' ";
			}
			if($s=='email'){
				$sql = " SELECT email FROM info where email = '$data' ";
			}
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result)>0) {
    			$v = 0;
			}
			mysqli_close($conn);
			return $v;
		}

		function setvalue($username, $password, $email, $postcode, $address)
		{
			$dbhost = 'localhost';
			$dbuser = 'root';
			$dbpass = '';
			$db = 'testdb';

			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
			if(! $conn )
			{
				die('Could not connect: ' . mysql_error());
			}

			$sql = "INSERT INTO info (username, password, email, postcode, address)
				VALUES('$username', '$password', '$email', '$postcode', '$address')";

			if (mysqli_query($conn, $sql)) {
				$data=1;
			
			} else {
				echo "Error: " . mysqli_error($conn);
				$data=0;
			}
			mysqli_close($conn); 
			return  $data;

		}

?>