<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View class</title>

</head>
<body>
    <!-- Include the navbar -->
    @include('sidebar')

    <!-- Your home page content goes here -->
    @include('view')
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
