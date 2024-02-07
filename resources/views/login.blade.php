<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>loginMain</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap');
body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    background: radial-gradient(circle, rgba(131, 205, 146, 0.9164040616246498) 0%, rgba(120, 105, 219, 0.958420868347339) 100%);
    /* background-color: #f0f0f0; */
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    text-align: center;
    width: 300px;
    margin: 10px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    backdrop-filter: blur(10px);
    /* background-color: #fff; */
    background-color: rgba(255, 255, 255, 0.13);
    box-shadow: 0 4px 8px rgb(131, 205, 146);
}

/* .button-container {
      text-align: center;
      margin-top: 20px;
    } */

.btn {
    padding: 10px 20px;
    font-size: 16px;
    background-color:transparent;
    color: #fff;
    border: 0.5px solid black;
    border-radius: 4px;
    cursor: pointer;
    transition: 3s ease;
    text-transform:uppercase;
}

.btn:hover {
    background: radial-gradient(circle, rgba(131, 205, 146, 0.9164040616246498) 0%, rgba(120, 105, 219, 0.958420868347339) 100%);
transition: 3s;
box-shadow: 0 4px 8px rgb(131, 205, 146);
color:black;
border: none;
}

@media (max-width: 600px) {
    .card {
        width: 100%;
    }
}
</style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 style="font-family: 'Kaushan Script', cursive;" >Admin Login</h2>
            <p>Admin Panel</p>
            <button class="btn">Login</button>
        </div>
        <div class="card">
        <h2 style="font-family: 'Kaushan Script', cursive;">Teacher Login</h2>
        <p>Teacher Panel</p>
            <button class="btn">Login</button>
        </div>
        <div class="card">
        <h2 style="font-family: 'Kaushan Script', cursive;">Student Login</h2>
            <p>Student Panel</p>
            <button class="btn">Login</button>
        </div>
    </div>


</body>

</html>