@extends('admin.index')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<div class="container">
        <!-- create button here-->
        <a href="/coursedetail/add"><button type="button" class="btn btn-success">+ Create</button></a>
    <div class="container">
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>Id</th>
                <th>College ID</th>
                <th>CourseType ID</th>
                <th>Description</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($coursedetails as $coursedetail)
            <tr>
                <td>{{$coursedetail->id}}</td>
                <td>{{$coursedetail->college_id}}</td>
                <td>{{$coursedetail->course_id}}</td>
                <td>{{$coursedetail->description}}</td>
                <td><a href="/coursedetail/delete/{{$coursedetail->id}}" class="btn btn-danger">DELETE</a></td>
                <td><a href="/coursedetail/edit/{{$coursedetail->id}}" class="btn btn-success">EDIT</a></td>

            </tr>
            @endforeach
        </table>
    </div>
    

    @endsection