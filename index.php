<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PERPUSTAKAAN | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">UIN</h1>
            </div>
            <h3>Selamat Datang di</h3>
            <p>Perpustakaan Universitas Islam Negeri Maulana Malik Ibrahim Malang</p>
            <p>Silahkan Login</p>
            <form class="m-t" role="form" action="ceklogin.php" method="POST">
                <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username .." required="required">
                </div>
                <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password .." required="required">
                </div>
                <?php 
	            if(isset($_GET['pesan'])){
		            if($_GET['pesan']=="gagal"){
			            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		                }
	                }
	            ?>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <p class="text-muted text-center"><small>Tidak mempunyai akun ?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.php">Membuat akun</a>
            </form>
            <p class="m-t"> <small>Teknik Informatika UIN Malang &copy; 2023</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>