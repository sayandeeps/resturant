<?php
include 'sql/config.php'; // Include the database connection file

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the entered credentials exist in the admin table
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        // Authentication successful, redirect to admin panel or any other page
        header("Location: index.php");
        exit();
    } else {
        // Authentication failed, display error message
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin || Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .btn-color{
      background-color: #4ABAF2;
      color: #fff; 
    }
    .profile-image-pic{
      height: 200px;
      width: 200px;
      object-fit: cover;
    }
    .cardbody-color{
      background-color: #ebf2fa;
    }
    a{
      text-decoration: none;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card my-5">
          <form action="" method="POST" class="card-body cardbody-color p-lg-5">
            <h2 class="text-center text-dark">Admin </h2>
            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
            <div class="mb-3">
              <input type="text" name="username" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
            <div class="text-center">
              <input type="submit" name="submit" value="Login" class="btn btn-color px-5 mb-5 w-100">
            </div>
          </form>
        </div>    
      </div>
    </div>
  </div>

</body>
</html>

