<?php
if($_POST) {
    header('location:inicio.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 centrar">
                <div>
                    <div class="card">
                        <div class="card-header">
                            <center><h1>Login</h1></center>
                        </div>
                        <div class="card-body">
                           <form method="POST">
                           <div class = "form-group">
                                <label>User</label>
                                <input type="text" class="form-control" name="usario" aria-describedby="emailHelp" placeholder="csr">
                           </div>
                           <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="contrasenia" placeholder="123">
                           </div>
                           <button type="submit" class="btn btn-primary">Sign In</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include ('../admin/inc/script.php');
    include ('../admin/inc/footer.php');
    ?>
</body>
</html>