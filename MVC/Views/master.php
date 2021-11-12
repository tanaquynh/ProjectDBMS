<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?= "<title>".$data["title"] ."</title> "?>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<script src="public/js/script.js"></script>
</head>
<body>
	<div class="container">
		<!--  Menu trái  -->
		<div class="side-bar">
			<ul>
			    <li>
			        <a href="#">
			            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
			            <span class="title">Home</span>
			        </a>
			    </li>
			    <li>
			        <a href="ListEmployee">
			            <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
			            <span class="title">Danh sách nhân viên</span>
			        </a>
			    </li>
			    <li>
			        <a href="Nhatkylamviec">
			            <span class="icon"><ion-icon name="time-outline"></ion-icon></span>
			            <span class="title">Nhật ký làm việc</span>
			        </a>
			    </li>
			    <li>
			        <a href="SalaryLevel">
			            <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
			            <span class="title">Mức lương</span>
			        </a>
			    </li>
			    <li>
			        <a href="#">
			            <span class="icon"><ion-icon name="folder-open-outline"></ion-icon></span>
			            <span class="title">Lịch sử trả lương</span>
			        </a>
			    </li>
			    <li>
			        <a href="Account">
			            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
			            <span class="title">Tài khoản</span>
			        </a>
			    </li> 
			</ul>
        </div>

        <!-- Phan noi dung -->
        <div class="main">
			<div class="top-bar">
            	<div class="toggle" onclick="toggleMenu(this)"><ion-icon name="menu"></ion-icon></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Tìm kiếm nhân viên">
                        <span><ion-icon name="search-outline"></ion-icon></span>
                    </label>
                </div>
                <div class="avt">/
                    <img src="avt.jpg">
                </div>
            </div>
            <div class="content">
				<?php require_once("./MVC/Views/detail/".$data["Page"].".php"); ?>
			</div>	
		</div>

	</div>

	</script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>