<!DOCTYPE html>
<html>
<title> Login </title>
<meta name="viewport" content="width=device-width, initial scale=1">

<!-- Font Google -->
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
<!-- CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- CSS Manual -->
<link rel="stylesheet" href="./css/awal.css">
<!-- Js Bootstrap -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<body>
    <div class="global-container">
        <div class="card form-login">
            <div class="card-body">
                <h1 class="card-title text-center mb-5">Form Login</h1>
                <h2 class="card-sub-title text-center mb-5">Please Insert Your Username and Password</h2>
                <div class="card-text">
                    <form action="login.php" id="form-login" method="post">
                        <div class="mb-3">
                            <label for="exampleInputCustomer" class="form-label">Username</label>
                            <input name="username" required type="customer" class="form-control" id="exampleInputCustomer1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword" class="form-label">Password</label>
                            <input name="password" required type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="button" class="btn-first btn-primary mt-4 w-100" onclick="handlelogin()">Login</button>
                        <a href="./formregister.php" class="btn-first btn-primary mt-4 w-100 text-center text-decoration-none" type="button">Register</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<script type=" text/javascript">
    function handlelogin() {
        const id = document.querySelector("#exampleInputCustomer1").value
        const password = document.querySelector("#exampleInputPassword1").value

        const form = document.querySelector("#form-login")
        form.submit();
    }
</script>




</body>

</html>