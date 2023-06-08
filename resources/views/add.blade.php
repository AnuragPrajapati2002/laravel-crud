<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <h3 class="mb-3">Add User</h3>
            <form action="/saveData" method="POST">
                @csrf
                <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter the name" autocomplete="off" />
                    <span>@error('name'){{$message}}@enderror</span><br><br>
                <label>Surname</label>
                    <input type="text" name="surname" class="form-control" placeholder="Enter the surname" autocomplete="off" />
                    <span>@error('surname'){{$message}}@enderror</span><br><br>
                <button type="submit" class="btn btn-success">Add</button>
                <a  href="/list" class="btn btn-danger mx-2">Back</a>
            </form>
        </div>
    </div>
</body>
</html>


