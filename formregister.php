<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <!-- CSS Manual -->
    <link rel="stylesheet" href="./css/awal.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="./register.php" method="post" class="mt-5 border p-4 bg-light shadow sgn-up">
                        <h4 class="mb-5 text-secondary align-items-center" style="text-align:center;">Form Daftar</h4>
                        <div class="row">

                            <div class="mb-3 col-md-12">
                                <label>Nama<span class="text-danger">*</span></label>
                                <input type="text" name="nama" class="form-name" placeholder="Enter Name" value="<?= $_SESSION['nama'] ?? '' ?>">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-name" placeholder="Enter Your Email" value="<?= $_SESSION['email'] ?? '' ?>">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Nomor Hp<span class="text-danger">*</span></label>
                                <input type="text" name="no_hp" class="form-name" placeholder="Enter Your Phone Number" value="<?= $_SESSION['no_hp'] ?? '' ?>">
                            </div>

                            <div class="jk mb-3 col-md-12">
                            <label>Jenis Kelamin<span class="text-danger">*</span></label>
                                <select name="jenis_kelamin" class="form-name" placeholder="Jenis Kelamin" value="<?= $_SESSION['jenis_kelamin'] ?? '' ?>">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Username<span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-name" placeholder="Enter Name" value="<?= $_SESSION['username'] ?? '' ?>">
                            </div>
                            <div class="pas mb-3 col-md-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-name" placeholder="Enter Password" value="<?= $_SESSION['password'] ?? '' ?>">
                            </div>

                            <div class="pas mb-3 col-md-12">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" name="confirmpassword" class="form-name" placeholder="Confirm Password" value="<?= $_SESSION['confirmpassword'] ?? '' ?>">
                            </div>

                            <div class="role mb-3 col-md-12">
                                <label>Role<span class="text-danger">*</span></label>
                                <select name="role" class="form-name" placeholder="Role" value="<?= $_SESSION['role'] ?? '' ?>">
                                    <option value="admin">Admin</option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Nim<span class="text-danger">*</span></label>
                                <input type="text" name="nim" class="form-name" placeholder="Enter Your Nim" value="<?= $_SESSION['nama'] ?? '' ?>">
                            </div>

                            <div class="mb-3 col-md-12 mt-2" style="text-align: center;">
                                <button class="btn-regis" type="submit">Daftar Sekarang</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">Jika anda telah mempunyai akun, Silahkan <a href="./index.php" class="link-login">Login Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>