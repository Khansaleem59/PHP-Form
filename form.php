<?php
include 'dbconnection.php';
?>
<?php
    if (isset($_POST['submit'])) {
        // $id = $_get['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $sql = "INSERT INTO form (name, email, phone, address, password) VALUES
        ('$name','$email','$phone','$address','$password')";

        if ($conn->query($sql) == TRUE) {
            $_SESSION['Message'] = "New Record Create Successfully";

        } else {
            $_SESSION['MessageError'] = "Error: " . $conn->error;
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12 mx-auto">
                <div class="card p-4 shadow-sm">
                    <form action="form.php" method="POST">
                        <!-- Name Input -->
                        <div class="text-center">
                            <h5>Enter Your Credentials</h5>
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
                                <?php unset($_SESSION['MessageError']); ?>
                            <?php endif; ?>

                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" id="name" value=""
                                name="name">
                        </div>
                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="email" value=""
                                name="email">
                        </div>
                        <!-- Phone Input -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="number" class="form-control" aria-describedby="emailHelp" id="phone" value=""
                                name="phone">
                        </div>
                        <!-- Address Input -->
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" id="address" value=""
                                name="address">
                        </div>
                        <!-- Password Input -->
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" value="" name="password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success" id="form_submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // const formButton = document.getElementById('form_submit');
        // formButton,addEventListener('submit',function(e) {
        //     e.preventDefault();
        // })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>