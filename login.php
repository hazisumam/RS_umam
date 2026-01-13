<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../bb/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bb/js/jquery-3.7.1.js"></script>

    <script>
        $(document).ready(function () {
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 3000);
        });
    </script>
</head>

<body>

<div class="container mt-3">
    <div class="mt-4 p-5 bg-info text-white rounded">
        <h2>Form login</h2>

        <?php if (isset($_GET['pesan'])) { ?>
           <p class="alert alert-success" role="alert">
    <?php echo $_GET['pesan']; ?>
</p>

        <?php } ?>

        <form action="../bb/plogin.php" method="post">
            <div class="mb-3">
                <label for="username">username</label>
                <input type="username" class="form-control" id="unm"
                       placeholder="Enter username" name="usrname" required>
            </div>

            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd"
                       placeholder="Enter password" name="pswd" required>
            </div>

            <button type="submit" class="btn btn-primary">LOGIN</button>
        </form>
    </div>
</div>

</body>
</html>
