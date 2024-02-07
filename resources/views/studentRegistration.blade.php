Sure, let's enhance the registration form using Bootstrap to make it responsive and more visually appealing. I've made adjustments to the HTML and added Bootstrap classes. Make sure to include the Bootstrap CSS and JS files in your project.

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            margin: 20px auto;
        }

        .column {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            background-color: #fff;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Include the navbar -->
    @include('sidebar')

    <div class="container">
        <h3 class="text-center mb-4">Student Registration</h3>

        <div class="row">
            <div class="col-md-4">
                <div class="column">
                    <h4>Student Details</h4>
                    <label for="studentName">Student Name</label>
                    <input type="text" name="studentName" id="studentName" class="form-control" required>

                    <label for="fatherName">Father Name</label>
                    <input type="text" name="fatherName" id="fatherName" class="form-control" required>

                    <label for="motherName">Mother Name</label>
                    <input type="text" name="motherName" id="motherName" class="form-control" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="column">
                    <h4>Present Address</h4>
                    <!-- Add your present address fields here -->
                    <label for="studentLocality">Locality</label>
                    <input type="text" name="studentLocality" id="studentLocality" class="form-control" required>

                    <label for="studentState">State</label>
                    <input type="text" name="studentState" id="studentState" class="form-control">

                    <label for="studentPincode">Pincode</label>
                    <input type="text" name="studentPincode" id="studentPincode" class="form-control">
                </div>
            </div>

            <div class="col-md-4">
                <div class="column">
                    <h4>Contact Information</h4>
                    <!-- Add your contact information fields here -->
                    <label for="studentEmail">Email</label>
                    <input type="text" name="studentEmail" id="studentEmail" class="form-control">

                    <label for="studentPhone">Contact Number</label>
                    <input type="text" name="studentPhone" id="studentPhone" class="form-control">

                    <label for="studentMobile">Alternate Number</label>
                    <input type="text" name="studentMobile" id="studentMobile" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="column">
                    <h4>Permanent Address</h4>
                    <!-- Add your permanent address fields here -->
                    <label for="permanentLocality">Locality</label>
                    <input type="text" name="permanentLocality" id="permanentLocality" class="form-control" required>

                    <label for="permanentState">State</label>
                    <input type="text" name="permanentState" id="permanentState" class="form-control">

                    <label for="permanentPincode">Pincode</label>
                    <input type="text" name="permanentPincode" id="permanentPincode" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="column">
                    <h4>File Upload</h4>
                    <!-- Add your file upload field here -->
                    <label for="fileUpload">Upload File</label>
                    <input type="file" name="fileUpload" id="fileUpload" class="form-control-file">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
