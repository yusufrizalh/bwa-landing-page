<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="./admin.css">
</head>

<body class="text-center">
    <div class="container">
        <form class="form-signin" method="POST" action="./loginaction.php">
            <img class="mb-4" src="https://i.ibb.co/PxkfQPX/github-avatar.png" alt="" width="210" height="210">
            <h1 class="h3 mb-3 font-weight-normal">Login Administrator</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password" required>

            <button class="btn btn-lg btn-info btn-block" type="submit" name="btnlogin">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>