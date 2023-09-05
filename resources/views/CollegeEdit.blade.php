<!DOCTYPE html>
<html>
<head>
    <title> Form </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <h2 class="text-center">College Update</h2>
        <form  method="POST" action="/college/update/{{$college->id}}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$college->name}}" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Address"  value="{{$college->address}}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{$college->phone}}" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{$college->password}}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description" required>"{{$college->description}}"</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" name="image" value="{{$college->image}}">
            </div>
            <input type="submit"  name="update" value="Update" class="btn btn-success">
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
