<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bb/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bb/js/jquery-3.7.1.js"></script>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 3000);
        });
    </script>
</head>
<body>
<div class="container mt-3">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h2>Form Register</h2>

        <?php if (isset($_GET['pesan'])) { ?>
            <p class="alert alert-info" role="alert">
                <?= $_GET['pesan']; ?>
            </p>
        <?php } ?>

        <form action="../bb/pregister.php" method="post">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Enter password" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>

            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
