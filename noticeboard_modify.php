<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];
	$pass 	 = $_POST["pass"];
          
    $con = mysqli_connect("localhost", "root", "", "smartita");
    $sql = "update noticeboard set subject='$subject', content='$content', pass='$pass' ";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'noticeboard_list.php?page=$page';
	      </script>
	  ";
?>

   
