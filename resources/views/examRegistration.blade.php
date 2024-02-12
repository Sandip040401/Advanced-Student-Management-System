<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Registration Form</title>
    <!-- Bootstrap CSS -->
    <style>
        
        .container {
            margin-top: 20px;
            border: 2px solid #ccc; 
            border-radius: 20px; 
            padding: 10px; 
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .payment-link {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
        }
        .payment-link:hover {
            background-color: #45a049;
        }
        h2{
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    @include('sidebar')

    <div class="container ">
        <h2>Exam Registration Form</h2>
        <form action="submit_registration.php" method="POST">
            <div class="form-group">
                <label for="rollno">Roll Number:</label>
                <input type="text" id="rollno" name="rollno" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="class">Select class:</label>
                <select id="class" name="class" class="form-control" required>
                    <option value="">-- Select class --</option>
                    <option value="">class 9</option>
                    <option value="">class 10</option>
                    <option value="">class 11</option>
                    <option value="">class 12</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exam">Select Exam:</label>
                <select id="exam" name="exam" class="form-control" required>
                    <option value="">-- Select Exam --</option>
                    <option value="Unit Test">Unit Test</option>
                    <option value="Half Yearl">Half Yearly</option>
                    <option value="Annual">Annual</option>
                </select>
            </div>

            <!-- Register button wrapped with payment link -->
            <div class="form-group text-center">
                <a href="payment_page.php" class="btn btn-success">Register & Pay</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
</body>
</html>
