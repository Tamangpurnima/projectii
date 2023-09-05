@extends('admin.index')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<!-- <div class="container"> -->
        <!-- create button here-->
        <!-- <a href="/coursedetail/add"><button type="button" class="btn btn-success">+ Create</button></a> -->
    <div class="container">
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>Id</th>
                <th>User ID</th>
                <th>Passed Year</th>
                <th>Education Institution</th>
                <th>GPA</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($qualifications as $qualification)
            <tr>
                <td>{{$qualification->id}}</td>
                <td>{{$qualification->user_id}}</td>
                <td>{{$qualification->passed_year}}</td>
                <td>{{$qualification->education_institution}}</td>
                <td>{{$qualification->gpa}}</td>
                <td><a href="/qualification/delete/{{$qualification->id}}" class="btn btn-danger">DELETE</a></td>
                <td><a href="/qualification/edit/{{$qualification->id}}" class="btn btn-success">EDIT</a></td>

            </tr>
            @endforeach
        </table>
    </div>
    
    @endsection