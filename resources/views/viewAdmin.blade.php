<!doctype html>
<html lang="en">

<head>
    <title>Admin List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- Include the navbar -->
        @include('sidebar')
    </header>
    <main>
        <div style="margin-top: 25px; text-align: center;">
            <h3>Admin List</h3>
            </div>
        <div class="table-responsive">
            <table class="table table-dark table-hover table-responsive">
                <thead class="table-dark">
                    <tr class="table-success">
                        <th>Id</th>
                        <th>Name</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($adminsData as $item)
                    <tr class="table-primary">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->dob}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->number}}</td>
                        <td>
                            <a href="#" onclick="confirmDelete('{{route('admin.delete',['id'=>$item->id])}}');">
                                <button type="button" class="btn btn-danger">
                                    Delete
                                </button>
                            </a>
                        </td>
                        <td>
                        <a href="{{route('admin.edit',['id'=>$item->id])}}">

                            <button type="button" class="btn btn-primary">
                                Edit
                            </button>
                        </a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>

    <script>
        function confirmDelete(deleteUrl) {
          // Display a confirmation dialog
          var isConfirmed = window.confirm("Are you sure you want to delete this item?");
      
          // Check if the user clicked "OK" (true) or "Cancel" (false)
          if (isConfirmed) {
            // User clicked "OK", navigate to the delete URL
            window.location.href = deleteUrl;
          } else {
            // User clicked "Cancel", do nothing or provide feedback
            console.log("Deletion canceled.");
          }
        }
      </script>


</body>

</html>