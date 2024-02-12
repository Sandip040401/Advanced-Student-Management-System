<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Registration</title>
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

        #view{
            display:flex;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Include the navbar -->
    @include('sidebar')

    <!-- Container for both Add and View teacher forms -->
    <div class="container" id="teacherContainer">
        <!-- Add teacher and View teacher buttons with Bootstrap styling -->
        <div class="text-right mb-3">
            <button id="addteacherBtn" class="btn btn-light toggle-btn">Add Teacher</button>
            <button id="viewteacherBtn" class="btn btn-light toggle-btn">View Teacher</button>
        </div>

        <!-- Add teacher Form -->
        <div class="form row" id="addteacherForm">
            <h4>Teacher Information</h4>
            <div class="form-group col-lg-4">
                <label for="teacherFirstName">First Name</label>
                <input type="text" class="form-control" id="teacherFirstName"  placeholder="Enter First Name" required>
            </div> 
            <div class="form-group col-lg-4">
                <label for="teacherLastName">Last Name</label>
                <input type="text" class="form-control" id="teacherLastName"  placeholder="Enter Last Name" required>
            </div> 
            <div class="form-group col-lg-4">
                <label for="teacherGender">Gender</label>
                <select class="custom-select" id="teacherGender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div> 
            <div class="form-group col-lg-4">
                <label for="teacherDOB">Date of Birth</label>
                <input type="date" class="form-control" id="teacherDOB"  placeholder="Enter Date of Birth" required>
            </div>

            <div class="form-group col-lg-4">
                <label for="teacherBloodGroup">Blood Group</label>
                <input type="text" class="form-control" id="teacherBloodGroup"  placeholder="Enter Blood Group" required>
            </div>
            <div class="form-group col-lg-4">
                <label for="teacherReligion">Religion</label>
                <div class="input-group">
                    <select class="custom-select" id="teacherReligion" required>
                        <option value="hindu">Hindu</option>
                        <option value="christian">Christian</option>
                        <option value="muslim">Muslim</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label for="teacherEmail">E-mail</label>
                <input type="email" class="form-control" id="teacherEmail"  placeholder="Enter E-mail" required>
            </div>

             <div class="form-group col-lg-4">
                <label for="teacherReligion">Highest Qualification</label>
                <div class="input-group">
                    <select class="custom-select" id="teacherReligion" required>
                        <option value="phd">PHD</option>
                        <option value="masters">Masters</option>
                        <option value="bachelors">Bachelors</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-lg-4">
                <label for="teacherPhone">Phone</label>
                <input type="tel" class="form-control" id="teacherPhone"  placeholder="Enter Phone" required>
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
        
        
        <div class="form row" id="viewteacherForm" style="display: none;">
            <h1>
                Coming Soon
            </h1>
        </div>
    </div>

    <script>
        // jQuery script to handle toggling between Add and View teacher forms
        $(document).ready(function () {
            // Toggle between Add and View teacher forms
            $('#addteacherBtn').click(function () {
                $('#addteacherForm').show();
                $('#viewteacherForm').hide();
                $('#viewPage').hide();
            });

            $('#viewteacherBtn').click(function () {
                $('#addteacherForm').hide();
                $('#viewteacherForm').show();
                $('#viewPage').show();
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
