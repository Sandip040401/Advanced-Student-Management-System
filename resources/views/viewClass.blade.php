<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View class</title>
    <style>
        /* Style the button */
        /* Adjust font size and padding for select elements */
        #classSelect {
            margin: 10px;
        }

        /* Center the button */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 10px;
        }

        /* Additional style for better button positioning */
        .container select {
            width: 100%; /* Make the select elements take full width */
            margin-bottom: 10px; /* Add some space between select elements and button */
        }

        .bottom{
            margin-top: 10px;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Include the navbar -->
    @include('sidebar')

    <!-- Your home page content goes here -->
    <div class="container col-4">
        <select class="form-select" id="classSelect" aria-label="Default select example">
            <option selected>Class</option>
            <option value="1">I</option>
            <option value="2">II</option>
            <option value="3">III</option>
            <option value="4">IV</option>
            <option value="5">V</option>
        </select>
        <select class="form-select" id="sectionSelect" aria-label="Default select example">
            <option selected>Section</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
        <button class="btn btn-success" onclick="handleButtonClick()">Submit</button>
    </div>

    <div class="bottom">
        <!-- Content for the bottom bar goes here -->
    </div>

    <script>
        function handleButtonClick() {
            // Get selected values from the dropdowns
            var selectedClass = document.getElementById('classSelect').value;
            var selectedSection = document.getElementById('sectionSelect').value;

            // Perform actions based on the selected values
            alert("Class: " + selectedClass + ", Section: " + selectedSection);
            // Add your custom logic or make an AJAX request here
        }
    </script>
</body>
</html>
