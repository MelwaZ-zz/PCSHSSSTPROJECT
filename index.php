<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
		<style>
			.gbt{
                display: inline-block;
                text-decoration: none;
				font-size:17px;
				box-shadow:0px 2px 4px #555;
				padding:10px 20px;
				color: #5f9ea0;
                border:5px solid #5f9ea0;
                transition: 1s;
                margin: 20px;
				}
			.gbt:hover{
				background:#5f9ea0;
				color:#fff;
                border-radius:30px;
                transition: 1s;
				}
		</style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="homeheader">
        <font>ระบบจัดการฐานข้อมูลโครงงานของโรงเรียนวิทยาศาสตร์จุฬาภรณราชวิทยาลัย สตูล</font>
    </div>
    <div class="content nav"><!--ส่วนlinkภายในเว็บ-->
			<a class="gbt" href="select.php">ตารางโครงงาน</a>
			<a class="gbt" href="insert.php">เพิ่มโครงงาน</a>
			<a class="gbt" href="update1.php">แก้ไขข้อมูลโครงงาน</a>
			</div>
    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>

</body>
</html>