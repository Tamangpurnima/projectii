<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="container form-container">
    <h2>Update data </h2>
    <form method="POST" action="/course/update/{{$course->id}}">
        @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{$course->name}}";>
      </div>
      <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" class="form-control" name="fullname" placeholder="Enter your full name" value="{{$course->fullname}}">
      </div>
      <input type="submit"  name="update" value="CourseType" class="btn btn-success">
    </form>
  </div>
</body>
</html>
