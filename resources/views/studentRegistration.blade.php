

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Bootstrap JS (optional, for Bootstrap features) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        h4{
            padding: 20px;
        }

        .form{
            border: 0.5px rgba(210, 205, 205, 0.652) solid;
            border-radius: 10px;
            box-shadow: 1;
        }
        
        #submit{
            margin: 20px 0 10px 10px;
            max-width: 20%;
        }
    </style>
</head>
<body>
    <!-- Include the navbar -->
    @include('sidebar')

    <!-- Container for both Add and View Student forms -->
    <div class="container" id="studentContainer">
        <!-- Add Student and View Student buttons with Bootstrap styling -->
        <div class="text-right mb-3">
            <button id="addStudentBtn" class="btn btn-light toggle-btn">Add Student</button>
            <button id="viewStudentBtn" class="btn btn-light toggle-btn">View Student</button>
        </div>

        <!-- Add Student Form -->
        <div class="form row" id="addStudentForm">
            <h4>Student Information</h4>
            <div class="form-group col-lg-4">
                <label for="studentFirstName">First Name</label>
                <input type="text" class="form-control" id="studentFirstName"  placeholder="Enter First Name" required>
            </div> 
            <div class="form-group col-lg-4">
                <label for="studentLastName">Last Name</label>
                <input type="text" class="form-control" id="studentLastName"  placeholder="Enter Last Name" required>
            </div> 
            <div class="form-group col-lg-4">
                <label for="studentGender">Gender</label>
                <select class="custom-select" id="studentGender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div> 
            <!-- Continue with the rest of the form fields with appropriate names -->
            <!-- Continue with the rest of the form fields with appropriate names -->
            <div class="form-group col-lg-4">
                <label for="studentDOB">Date of Birth</label>
                <input type="date" class="form-control" id="studentDOB"  placeholder="Enter Date of Birth" required>
            </div>

            <div class="form-group col-lg-4">
                <label for="studentRoll">Roll</label>
                <input type="text" class="form-control" id="studentRoll"  placeholder="Enter Roll" required>
            </div>

            <div class="form-group col-lg-4">
                <label for="studentBloodGroup">Blood Group</label>
                <input type="text" class="form-control" id="studentBloodGroup"  placeholder="Enter Blood Group" required>
            </div>
            <div class="form-group col-lg-4">
                <label for="studentReligion">Religion</label>
                <div class="input-group">
                    <select class="custom-select" id="studentReligion" required>
                        <option value="hindu">Hindu</option>
                        <option value="christian">Christian</option>
                        <option value="muslim">Muslim</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label for="studentEmail">E-mail</label>
                <input type="email" class="form-control" id="studentEmail"  placeholder="Enter E-mail" required>
            </div>

            <div class="form-group col-lg-4">
                <label for="studentClass">Class</label>
                <div class="input-group">
                    <select class="custom-select" id="studentClass" required>
                        <option value="class1">Class 1</option>
                        <option value="class2">Class 2</option>
                        <option value="class3">Class 3</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label for="studentSection">Section</label>
                <input type="text" class="form-control" id="studentSection"  placeholder="Enter Section" required>
            </div>

            <div class="form-group col-lg-4">
                <label for="studentAdmissionID">Admission ID</label>
                <input type="text" class="form-control" id="studentAdmissionID"  placeholder="Enter Admission ID" required>
            </div>

            <div class="form-group col-lg-4">
                <label for="studentPhone">Phone</label>
                <input type="tel" class="form-control" id="studentPhone"  placeholder="Enter Phone" required>
            </div>

            <h5 class="mb-4">Upload Image</h5>

            <form id="uploadForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="fileInput">Choose an image:</label>
                    <input type="file" class="form-control-file" id="fileInput" accept="image/*">
                </div>
            </form>

            <img id="previewImage" class="mt-3" style="display: none; max-width: 10%;" alt="Preview Image">
            <button type="button" class="btn btn-primary" id="submit">Submit</button>
        </div>
        
       
        <!-- View Student Form (initially hidden) -->
        <div class="form row" id="viewStudentForm" style="display: none;">
            <!-- Add content for View Student form here -->
            <h1>Coming Soon</h1>
        </div>
    </div>

    <script>
        // jQuery script to handle toggling between Add and View Student forms
        $(document).ready(function () {
            // Toggle between Add and View Student forms
            $('#addStudentBtn').click(function () {
                $('#addStudentForm').show();
                $('#viewStudentForm').hide();
            });

            $('#viewStudentBtn').click(function () {
                $('#addStudentForm').hide();
                $('#viewStudentForm').show();
            });
        });
        document.getElementById('fileInput').addEventListener('change', function () {
        var fileInput = this;
        var previewImage = document.getElementById('previewImage');

        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                previewImage.src = e.target.result;
                previewImage.style.display = 'block';
            };

            reader.readAsDataURL(fileInput.files[0]);
        }
    });
    </script>
</body>
</html>
