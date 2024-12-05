<?php
include 'dbconnection.php';
?>

<?php

$sql = "SELECT * FROM form WHERE id = 29";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No Record Found!";
}
?>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];


    $sql = "UPDATE form SET name = '$name', email = '$email', phone = '$phone', password = '$password' where id='$id'";
    if ($conn->query($sql) === TRUE) {

        $_SESSION['Message'] = "Record Update successfully!";

    } else {
        $_SESSION['MessageError'] = "Error: " . $conn->error;
    }
}
?>
<!-- ?> -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12 mx-auto">
                <div class="card p-4 shadow-sm">

                    <form action="" method="POST">
                        <!-- Name Input -->
                        <div class="text-center">
                            <h5>Update Your Credentials</h5>
                        </div>
                        <div class="mb-3">
                            <?php if (isset($_SESSION['Message'])): ?>
                                <div class="bg-success py-2 text-center mb-3 rounded text-dark">
                                    <?php echo $_SESSION['Message']; ?>
                                </div>
                                <?php unset($_SESSION['Message']); ?>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['MessageError'])): ?>
                                <div class="bg-danger py-2 text-center mb-3 rounded text-dark">
                                    <?php echo $_SESSION['MessageError']; ?>
                                </div>
                                <?php unset($_SESSION['Message']); ?>
                            <?php endif; ?>

                            <label for="exampleInputEmail1" class="form-label">Name</label>

                            <input type="hidden" class="form-control" aria-describedby="emailHelp" id="id"
                                value="<?php echo $row['id']; ?>" name="id">

                            <input type="text" class="form-control" aria-describedby="emailHelp" id="name"
                                value="<?php echo $row['name']; ?>" name="name">
                        </div>
                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="email"
                                value="<?php echo $row['email']; ?>" name="email">
                        </div>
                        <!-- Phone Input -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="number" class="form-control" aria-describedby="emailHelp" id="phone"
                                value="<?php echo $row['phone']; ?>" name="phone">
                        </div>
                        <!-- Address Input -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" id="address"
                                value="<?php echo $row['address']; ?>" name="address">
                        </div>
                        <!-- Password Input -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password"
                                value="<?php echo $row['password']; ?>" name="password">
                        </div>
                        <button type="submit" name="update" class="btn btn-success" id="form_submit">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>