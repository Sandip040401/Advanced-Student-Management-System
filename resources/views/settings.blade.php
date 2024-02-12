
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>settings</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Bootstrap JS (optional, for Bootstrap features) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .container{
            margin-top:20px;
        }
        .form-row{
            margin-top:20px;
        }
    </style>
</head>
<body>
    <!-- Include the navbar -->
    @include('sidebar')

    <!-- Container for both Add and View Student forms -->
    <div class="container" id="studentContainer">
        <!-- Add Student and View Student buttons with Bootstrap styling -->
        <div class="text-left mb-3">
            <button id="adminBtn" class="btn btn-light toggle-btn">Admin</button>
            <button id="teacherBtn" class="btn btn-light toggle-btn">Teacher</button>
            <button id="studentBtn" class="btn btn-light toggle-btn">Student</button>

        </div>

        <!-- Add Student Form -->
        <div class="form-row col-md-8" id="adminEdit">
            <div class="col-md-12 mb-3">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter new username" required>
            </div>

            <div class="col-md-12 mb-3">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter new phone number" required>
            </div>

            <div class="col-md-12 mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter new email" required>
            </div>

            <div class="col-md-12 mb-3">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Enter new password" required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="password">Confirm Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Re-Enter password" required>
            </div>
        </div>

        
        <div class="form row" id="teacherEdit" style="display: none;">
            <h1>
                Coming Soon
            </h1>
        </div>
        <div class="form row" id="studentEdit" style="display: none;">
            <h1>
                Coming Soon
            </h1>
        </div>
    </div>

    <script>
        // jQuery script to handle toggling between Add and View Student forms
        $(document).ready(function () {
            // Toggle between Add and View Student forms
            $('#adminBtn').click(function () {
                $('#adminEdit').show();
                $('#teacherEdit').hide();
                $('#studentEdit').hide();
            });

            $('#teacherBtn').click(function () {
                $('#adminEdit').hide();
                $('#teacherEdit').show();
                $('#studentEdit').hide();
            });
            $('#studentBtn').click(function () {
                $('#adminEdit').hide();
                $('#teacherEdit').hide();
                $('#studentEdit').show();
            });
        });
    </script>
</body>
</html>
