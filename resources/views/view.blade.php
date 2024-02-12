<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container" >
<div class="row" id="view" style="margin-top: 20px;">
    <div class="col-4">
    <select class="form-select" id="classSelect">
            <option selected>Class</option>
            <option value="1">I</option>
            <option value="2">II</option>
            <option value="3">III</option>
            <option value="4">IV</option>
            <option value="5">V</option>
        </select>
    </div>
    <div class="col-4">
    <select class="form-select form-group" id="classSelect">
            <option selected>Section</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>
    </div> 
      
    <div class="col-2">
    <button class="btn btn-success form-group" onclick="handleButtonClick()">Submit</button>
    </div>

    <div class="bottom">
        <!-- Content for the bottom bar goes here -->
    </div>
</div> 
</div>  
</body>
</html>


