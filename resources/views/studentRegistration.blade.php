
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registration</title>
      <style>
          /* Your existing styles */

        .container {
            margin: 20px auto;
        }

        .column {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 10px;
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

        h2{
          padding-bottom: 10px;
        }

        h4{
          padding-bottom: 10px;
          text-decoration: underline;
        }

        #preview {
            max-width: 100%;
            max-height: 200px;
        }
        #accept{
          opacity: 0.5;
        }

        .center {
            text-align: center;
            margin-top: 20px;
        }
      </style>
  </head>
  <body>
      <!-- Include the navbar -->
      @include('sidebar')
  
      <div class="container">
          <form action="/submit_registration" method="post">
              <h2 class="mb-4">Student Registration</h2>
  
              <div class="row">
                  <div class="col-md-4">
                      <div class="column">
                          <h4>Student Details</h4>
                          <!-- Your existing student details fields -->
                          <label for="studentName">Student Name</label>
                          <input type="text" name="studentName" id="studentName" class="form-control" required>
                          <label for="fatherName">Father Name</label>
                          <input type="text" name="fatherName" id="fatherName" class="form-control" required>
                          <label for="motherName">Mother Name</label>
                          <input type="text" name="motherName" id="motherName" class="form-control" required>
                          <label for="studentdob">da</label>
                          <input type="text" name="motherName" id="motherName" class="form-control" required>
                      </div>
                  </div>
  
                  <div class="col-md-4">
                      <div class="column">
                          <h4>Present Address</h4>
                          <!-- Your existing present address fields -->
                          <label for="studentLocality">Locality</label>
                    <input type="text" name="studentLocality" id="studentLocality" class="form-control" required>

                    <label for="studentState">State</label>
                    <input type="text" name="studentState" id="studentState" class="form-control">

                    <label for="studentPincode">Pincode</label>
                    <input type="number" name="studentPincode" id="studentPincode" class="form-control">
                      </div>
                  </div>
  
                  <div class="col-md-4">
                      <div class="column">
                          <h4>Contact Information</h4>
                          <!-- Your existing contact information fields -->
                          <label for="studentEmail">Email</label>
                          <input type="email" name="studentEmail" id="studentEmail" class="form-control">
      
                          <label for="studentPhone">Contact Number</label>
                          <input type="number" name="studentPhone" id="studentPhone" class="form-control">
      
                          <label for="studentMobile">Alternate Number</label>
                          <input type="number" name="studentMobile" id="studentMobile" class="form-control">
                      </div>
                  </div>
              </div>
  
              <div class="row">
                  <div class="col-md-6">
                      <div class="column">
                          <h4>Permanent Address</h4>
                          <!-- Your existing permanent address fields -->
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
                          <!-- Your existing file upload field -->
                          <label for="fileUpload">Upload File </label><span id="accept"><i>(only .jpg, .jpeg, .png)</i></span>
                          <input type="file" name="fileUpload" id="fileUpload" class="form-control-file" accept=".png, .jpg, .jpeg" onchange="previewImage()">
                          <div id="preview"></div>
                      </div>
                  </div>
              </div>
              <div class="center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
          <script>
              function previewImage() {
                  
                  // Your existing script for image preview
                  var fileInput = document.getElementById('fileUpload');
          var preview = document.getElementById('preview');
  
          while (preview.firstChild) {
              preview.removeChild(preview.firstChild);
          }
  
          var files = fileInput.files;
          if (files.length > 0) {
              var img = document.createElement('img');
              img.src = URL.createObjectURL(files[0]);
              img.alt = 'Preview';
              img.style.maxWidth = '100%';
              img.style.maxHeight = '200px';
              preview.appendChild(img);
          }
              }
          </script>
      
  </body>
  </html>
