<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3 mb-4 offset-md-2"><h3>List of All users in the Database</h3>
        <a class="btn btn-danger mb-2 " href="/add">Add User</a>
        <table class="table table-bordered col-md-10 ">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Surname</td>
                <td col="1">Operation</td>
            </tr>
            @foreach($data as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['surname']}}</td>
                <td><a href="{{'edit/'.$item['id']}}" class="btn btn-success btn-sm mx-2">Edit</a>
                    <a href="{{'delete/'.$item['id']}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            @endforeach
            </tr>
        </table>
    </div>
</body>
</html>