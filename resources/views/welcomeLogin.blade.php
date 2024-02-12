<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <title>Login Form</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f8f9fa;
    }
    .login-box {
      max-width: 400px;
      width: 100%;
      border: 1px solid #ced4da;
      padding: 20px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    h1{
        margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>User Login </h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6 login-box">
      <form>
        <div class="form-group">
          <label for="userType">User Type</label>
          <select class="form-control" id="userType" name="userType">
            <option value="admin">Admin</option>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
          </select>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
          <a href="#">Forgot Password?</a>
        </div>
        <button type="button" class="btn btn-primary" id="btn">Login</button>
      </form>
    </div>
  </div>
</div>

<script>
  document.getElementById('btn').addEventListener('click', function() {
    // Replace 'page_url' with the desired page URL
    window.location.replace('sidebar'); // Replace 'sidebar.html' with the actual URL or path
  });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
