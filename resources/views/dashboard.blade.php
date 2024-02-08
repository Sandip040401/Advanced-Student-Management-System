<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    .dashboard {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
        margin: 20px;
    }

    .card {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-bottom: 20px;
    }

    .total-students,
    .total-teachers,
    .total-administrators,
    .total-parents {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        .dashboard {
            grid-template-columns: repeat(2, 1fr);
        }
    }


 
    </style>
    <title>Dashboard</title>
</head>

<body>
    @include('sidebar')
    <!-- Include the navbar -->

    <div class="content">
        <!-- Your home page content goes here -->

        <div class="dashboard">
            <div class="card total-students">
                <p>Total Students</p>
                <span class="count">500</span>
            </div>

            <div class="card total-teachers">
                <p>Total Teachers</p>
                <span class="count">50</span>
            </div>

            <div class="card total-administrators">
                <p>Total Administrators</p>
                <span class="count">5</span>
            </div>

            <div class="card total-parents">
                <p>Total Parents</p>
                <span class="count">200</span>
            </div>
        </div>
        <br>
        <hr>

        @include('calender')
        <!-- Include the calendar -->
</body>

<script>
    // Simulate counting animation
    function startCounting() {
        const spans = document.querySelectorAll('.count');
        spans.forEach(span => {
            const maxCount = parseInt(span.parentNode.innerText.match(/\d+/)[
                0]); // Extract maximum count from the card text
                let count = 0;
                
                const interval = setInterval(() => {
                    span.textContent = count;
                    count++;
                    
                    if (count > maxCount) {
                        clearInterval(interval);
                    }
                }, 50); // Adjust the interval for desired animation speed
    });
}

// Trigger counting animation when the window is loaded
window.onload = startCounting;
</script>

</html>