<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>나의 첫 PHP 프로젝트</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
<?php
	$con = mysqli_connect("localhost", "root", "", "smartita");
	
	if($userlevel > 4 || !$userid) {
		echo("
					<script>
					alert('VIP 회원이 아닙니다.');
					history.go(-1)
					</script>
		");
		exit;
	}
?>
	<div id="main_img_bar">
		<img src='./img/banner.png'>
	</div>
   	<div id="board_box">
	    <h3 id="board_title">
	    		VIP 게시판 > 글 쓰기
		</h3>
	    <form  name="board_form" method="post" action="vipBoard_insert.php" enctype="multipart/form-data">
	    	 <ul id="board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$username?></span>
				</li>		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일</span>
			        <span class="col2"><input type="file" name="upfile"></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
<?php 
    if($userid) {
		if($userlevel <= 4) {
?>
				<li><button type="button" onclick="check_input()">완료</button></li>
<?php
		}
	}
?>
				<li><button type="button" onclick="location.href='vipBoard_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> <!-- board_box -->
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
