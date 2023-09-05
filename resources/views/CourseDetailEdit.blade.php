<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .form-container {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .form-group {
    margin-bottom: 20px;
  }
  label {
    display: block;
    font-weight: bold;
  }
  input[type="text"],
  textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>
<div class="form-container">
<h2 class="text-center"> Update Course Details</h2>
  <form method="POST" action="/coursedetail/update/{{$coursedetail->id}}">
    @csrf
    <div class="form-group">
      <label for="collegeid">College ID:</label>
      <input type="text" id="college_id" name="college_id"  value="{{$coursedetail->college_id}}" required>
    </div>
    <div class="form-group">
      <label for="coursetypeid">CourseType ID:</label>
      <input type="text" id="course_id" name="course_id" value="{{$coursedetail->course_id}}" required>
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea id="description" name="description"  required>{{$coursedetail->description}}</textarea>
    </div>
    <input type="submit"  name="update" value="CourseDetailUpdate" class="btn btn-success">
  </form>
</div>
</body>
</html>
