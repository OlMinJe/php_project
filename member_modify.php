<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;
	
	$snsurl = $_POST["snsurl"];
	
	$tel1 = $_POST["tel1"];
	$tel2 = $_POST["tel2"];
	$tel3 = $_POST["tel3"];
	$tel = $tel1."-".$tel2."-".$tel3;
	
          
    $con = mysqli_connect("localhost", "root", "", "smartita");
    $sql = "update members set pass='$pass', name='$name' , email='$email', snsurl='$snsurl', tel='$tel'";
    $sql .= " where id='$id'";
	
	//echo "[".$sql."]";
	
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>