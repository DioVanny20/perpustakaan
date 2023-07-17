<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PERPUSTAKAAN | Register</title>

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
            <h3>Mendaftar di Perpustakaan</h3>
            <p>Silahkan membuat akun</p>
            <form class="m-t" role="form" action="createuser.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                    <select class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nomor Telepon" name="no_telp">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <select class="form-control" placeholder="Level" name="level">
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
                <p class="text-muted text-center"><small>Sudah memiliki akun ?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="index.php">Login</a>
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
