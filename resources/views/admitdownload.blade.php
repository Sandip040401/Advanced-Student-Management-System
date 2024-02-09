<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admitcard</title>
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
            <h1>Admit Card Download</h1>
            <form action="download.php" method="post">
                <div class="form-group">
                    <label for="applicationNumber">Application Number:</label>
                    <input type="text" id="applicationNumber" name="applicationNumber" required>
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
                <div id="downloadOption" >
                <button type="submit" class="btn1">Download Admit Card</button>
                </div>
                <button type="button" onclick="check()">check</button>
                <button type="button" onclick="generate()" id="gen">Generate New</button>
                 
                </div>

             </form>
        </div>
    </div>
</body>



<script>
let captcha;
let alphabets = "AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";
console.log(alphabets.length);
let status = document.getElementById('status');

generate = () => {
    // console.log(status)
    let first = alphabets[Math.floor(Math.random() * alphabets.length)];
    let second = Math.floor(Math.random() * 10);
    let third = Math.floor(Math.random() * 10);
    let fourth = alphabets[Math.floor(Math.random() * alphabets.length)];
    let fifth = alphabets[Math.floor(Math.random() * alphabets.length)];
    let sixth = Math.floor(Math.random() * 10);
    captcha = first.toString() + second.toString() + third.toString() + fourth.toString() + fifth.toString() + sixth
        .toString();
    console.log(captcha);
    document.getElementById('generated-captcha').value = captcha;
    document.getElementById("entered-captcha").value = '';
    // status.innerText = "Captcha Generator"
}

check = () => {
    // console.log(status)
    let userValue = document.getElementById("entered-captcha").value;
    console.log(captcha);
    console.log(userValue);
    if (userValue == captcha) {
        status.innerText = "Correct!!"
        document.getElementById('downloadOption').style.display = 'block';

    } else {
        status.innerText = " Invalid Captcha Try Again!!"
        document.getElementById("entered-captcha").value = '';
    }
}

</script>

</html>