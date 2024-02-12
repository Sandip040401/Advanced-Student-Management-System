<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Fees</title>
 <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */
        margin-top:20px;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 40px;
        text-align: center;
    }

    h1 {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .btn1 {
        display: inline-block;
        padding: 10px 20px;
        background-color: #transparent;
        color: black;
        text-decoration: none;
        border-radius: 5px;
        border: 1px solid black;

    }

    div {
        margin-bottom: 10px;
    }

    button {
        margin-bottom: 5px;
        cursor: pointer;
    }

    input {
        text-decoration: none;
    }

    #generated-captcha {
        text-decoration: line-through;
        font-weight: bold;
        text-align: center;
        font-size: 20px;
        background-color: #ede7f6;
        border-radius: 6px;
        border: none;
        padding: 6px;
        outline: none;
        color: #1d1d1d;
    }

    #entered-captcha {
        border: 2px solid #c5c7f7;
        font-family: monospace;
        outline: none;
        border-radius: 6px;
        padding: 8px 15px;
        font-size: 12px;
    }

    button {
        border: none;
        padding: 8px 20px;
        border-radius: 6px;
        font-size: 14px;
        font-family: monospace;
        font-weight: bold;
        outline: none;
        background-color: #64f394;
    }

    #gen {
        background-color: #ee7e6a;
    }

    .wrappr {
        /* border: 1px solid red; */
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        justify-content: center;
    }
    #status{
        font-size: small;
    }
    #downloadOption {
            display: none;
        }
    </style>
</head>

<body onload="generate()">
    <!-- Include the navbar -->
    @include('sidebar')

    <!-- Your home page content goes here -->


    <div class="container" >
        <div class="card">
            <form id="loginForm" action="download.php" method="post">
                <div class="form-group">
                    <label for="studentID">Student ID:</label>
                    <input type="text" id="studentID" name="studentID" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="wrapper"></div>
                <h2 id="status" style="color: #ee7e6a;"></h2>
                <div>
                    <input type="text" readonly id="generated-captcha">
                </div>
                <div>
                    <input type="text" id="entered-captcha" placeholder="Enter the captcha..">
                </div>
                <button type="button" class="btn-primary btn" onclick="check()">Login</button>
                </div>
             </form>
        </div>
    </div>
</body>


<script>
let captcha;
let alphabets = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";
let status = document.getElementById('status');



generate= () => {
    let first = alphabets[Math.floor(Math.random() * alphabets.length)];
    let second = Math.floor(Math.random() * 10);
    let third = Math.floor(Math.random() * 10);
    let fourth = alphabets[Math.floor(Math.random() * alphabets.length)];
    let fifth = alphabets[Math.floor(Math.random() * alphabets.length)];
    let sixth = Math.floor(Math.random() * 10);
    captcha = first.toString() + second.toString() + third.toString() + fourth.toString() + fifth.toString() + sixth.toString();
    document.getElementById('generated-captcha').value = captcha;
    document.getElementById("entered-captcha").value = '';
}

check = () => {
    // console.log(status)
    let userValue = document.getElementById("entered-captcha").value;
    let studentID = document.getElementById("studentID").value;
    let dob = document.getElementById("dob").value;
    console.log(captcha);
    console.log(userValue);
    if (userValue == captcha) {
        status.innerText = "Login Successful"
        document.getElementById('downloadOption').style.display = 'block';

    } else {
        status.innerText = " Invalid Captcha Try Again!!"
        document.getElementById("entered-captcha").value = '';
    }
   

//     // Get the status element
//     let status = document.getElementById("status");

//     // Check if any of the required fields are empty
    if (studentID === '' || dob === '' || enteredCaptcha === '') {
        status.innerText = "Please fill in all the required fields.";
    } else {
        status.innerText = "Login Successful";
    }
}

</script>


</html>