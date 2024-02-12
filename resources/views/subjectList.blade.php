<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject List</title>
    <style>
        .container{
            margin: 20px;
            padding: 10px;
        }

    </style>
</head>
<body>
    <!-- Include the navbar -->
    @include('sidebar')

        
    <div class="container card">
        <h1 class="display-4">Subject List</h1>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-6 border-right">
                <h2>Teachers</h2>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">John Smith</li>
                    <li class="list-group-item list-group-item-action">Alice Johnson</li>
                    <li class="list-group-item list-group-item-action">Robert Davis</li>
                    <li class="list-group-item list-group-item-action">Mary Thompson</li>
                    <li class="list-group-item list-group-item-action">Michael Miller</li>
                    <li class="list-group-item list-group-item-action">Emily Wilson</li>
                    <li class="list-group-item list-group-item-action">Daniel Brown</li>
                    <li class="list-group-item list-group-item-action">Sarah Garcia</li>
                    <li class="list-group-item list-group-item-action">Christopher Moore</li>
                    <li class="list-group-item list-group-item-action">Olivia Clark</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Subjects</h2>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-action">Mathematics</li>
                    <li class="list-group-item list-group-item-action">History</li>
                    <li class="list-group-item list-group-item-action">Science</li>
                    <li class="list-group-item list-group-item-action">English</li>
                    <li class="list-group-item list-group-item-action">Physics</li>
                    <li class="list-group-item list-group-item-action">Chemistry</li>
                    <li class="list-group-item list-group-item-action">Computer Science</li>
                    <li class="list-group-item list-group-item-action">Geography</li>
                    <li class="list-group-item list-group-item-action">Music</li>
                    <li class="list-group-item list-group-item-action">Art</li>
                </ul>
            </div>
        </div>
    </div>
    
    

</body>
</html>
