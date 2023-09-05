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
    <h2>CourseType Form</h2>
    <form method="POST" action="/course/store">
        @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control"  name="name" id="name" placeholder="Enter your name">
      </div>
      <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" class="form-control" name="fullname" id="fullName" placeholder="Enter your full name">
      </div>
      <button type="submit" value="CourseType" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
