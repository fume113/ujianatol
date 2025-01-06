<!DOCTYPE html>
<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #5F7161;
      color: #6D8B74;
      height: 65px;
      display: flex;
      width: 100%;
    }

    .topnav .btn {
      margin-top: 7px;
    }

    .topnav .btn:hover {
      color: #212121;
    }

    .btn-logout {
      position: relative;
      background: #C7BEA2;
      border: 2px solid #C7BEA2;
      justify-content: center;
      align-items: center;
    }

    .btn {
      color : #fff
    }

    .topnav .btn-logout {
      margin-left: 1375px;
      border-radius: 30px;
      width: auto;
      height: 25px;
      text-align: center;
      margin-top: 8px;
      padding: 12px;
      color : #fff;
    }

    .topnav .btn-logout:hover {
      background: none;
    }

    a {
      color: #f2f2f2;
      padding: 15px;
      text-decoration: none;
      font-size: 18px;
    }
  </style>
</head>

<body>

  <div class="topnav">
    <a class="btn" href="admin.php">Home</a>
    <a class="btn" href="datamahasiswa.php">Data Mahasiswa</a>
    <a class="btn" href="soal.php">Kelola Soal</a>
    <a class="btn-logout" href="logout.php">Logout</a>
  </div>

  <div>
    <h2></h2>
    <p></p>
  </div>

</body>

</html>