<?php
 $fname = filter_input(INPUT_POST, 'fname');
 $email = filter_input(INPUT_POST, 'email');
 $password = filter_input(INPUT_POST, 'password');
 $phno = filter_input(INPUT_POST,'phno');
 $dob = filter_input(INPUT_POST,'dob');
 $gender = filter_input(INPUT_POST,'gender');

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "project";

	// Create connection
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

	if (mysqli_connect_error()){

	die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
	}

	else{
	$sql = "INSERT INTO signup(fname,email,password,phno,dob,gender)
	values ('$fname','$email','$password','$phno','$dob','$gender')";
	if ($conn->query($sql)){
	echo "";}
	else{
	echo "Error: ". $sql ."
	". $conn->error;
}
	$conn->close();
}

?>

<html>
<head>
	<link href="Main signup.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Welcome</title>
</head>
<body>
	<header>

		<nav>
            <div class="row clearfix">

                <ul class="main-nav animated slideInDown" id="check-class">
                    <li><a href="#">HOME</a></li>
                    <li><a href="home.html">LOGOUT</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>

            </div>
        </nav><hr>

	 <div id="box">
	<center>
	
			<br><br><br><br><br><br><b><h1>ACCOUNT CREATED !!</h1></b>
			
	</center>
</div>
</header>
</body>
</html>