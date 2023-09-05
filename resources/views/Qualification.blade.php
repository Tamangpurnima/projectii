<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Qualification Form</title>
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
<h2 class="text-center">Qualification</h2>
  <form method="POST" action="/qualification/store">
    @csrf
    <div class="form-group">
      <label for="id">ID:</label>
      <input type="int" id="id" name="id" required>
    </div>
    <div class="form-group">
      <label for="userid">User ID:</label>
      <input type="int" id="userid" name="userid" required>
    </div>
    <div class="form-group">
      <label for="passedyear">Passed Year:</label>
      <input type="int" id="passedyear" name="passedyear" required>
    </div>
    <div class="form-group">
      <label for="education_institution">Education Institution:</label>
      <input type="text" id="education_institution" name="education_institution" required>
    </div>
    <div class="form-group">
      <label for="gpa">GPA:</label>
      <input type="int" id="gpa" name="gpa" required>
    </div>
    <button type="submit" value="Qualification" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
</html>
