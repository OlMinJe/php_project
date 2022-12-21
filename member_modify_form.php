<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>나의 첫 PHP 프로젝트</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/member.css">
<script type="text/javascript" src="./js/member_modify.js"></script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
<?php    
   	$con = mysqli_connect("localhost", "root", "", "smartita");
    $sql    = "select * from members where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];
	$snsurl = $row["snsurl"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

	$tel = explode("-", $row["tel"]);
	$tel1 = $tel[0];
	$tel2 = $tel[1];
	$tel3 = $tel[2];
	
    mysqli_close($con);
?>
	<section>
	<div id="main_img_bar">
		<img src='./img/banner.png'>
	</div>
        <div id="main_content">
      		<div id="join_box">
          	<form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
			<!-- 수정이 안되도록 get 방식으로 넘겼지만 post 방식으로 넘기고 싶을 때는 밑에 입력란 추가후 히든으로 바꾸기 -->
			    <h2>회원 정보수정</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>
				        <div class="col2">
							<?=$userid?>
							<input type="hidden" name="id" value="<?=$userid?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>

			       	<div class="form">
				        <div class="col1">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">비밀번호 확인</div>
				        <div class="col2">
							<input type="password" name="pass_confirm" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">이름</div>
				        <div class="col2">
							<input type="text" name="name" value="<?=$name?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form email">
				        <div class="col1">이메일</div>
				        <div class="col2">
							<input type="text" name="email1" value="<?=$email1?>">@<input 
							       type="text" name="email2" value="<?=$email2?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
					<div class="form sns">
				        <div class="col1">SNS 계정</div>
				        <div class="col2">
							<input type="text" name="snsurl" value="<?=$snsurl?>">
				        </div>                 
			       	</div>
					
					<div class="clear"></div>
			       	<div class="form tel">
				        <div class="col1">전화번호</div>
				        <div class="col2">
							<input type="text" name="tel1" style="width:30%;" value="<?=$tel1?>">-
							<input type="text" name="tel2" style="width:30%;" value="<?=$tel2?>">-
							<input type="text" name="tel3" style="width:30%;" value="<?=$tel3?>">
				        </div>                 
			       	</div>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
                  		<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
                  			onclick="reset_form()">
	           		</div>
           	</form>
        	</div> <!-- join_box -->
        </div> <!-- main_content -->
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>

