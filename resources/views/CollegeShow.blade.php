@extends('admin.index')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
    <div class="container">
        <!-- create button here-->
        <a href="/college/add"><button type="button" class="btn btn-success">+ Create</button></a>
    </div>
    <div class="container">
        <table class="table table-bordered shadow text-center table-stripped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Description</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($colleges as $college)
            <tr>
                <td>{{$college->id}}</td>
                <td>{{$college->name}}</td>
                <td>{{$college->address}}</td>
                <td>{{$college->phone}}</td>
                <td>{{$college->password}}</td>
                <td>{{$college->description}}</td>
                <td>{{$college->image}}</td>
                <td><a href="/college/delete/{{$college->id}}" class="btn btn-danger">DELETE</a></td>
                <td><a href="/college/edit/{{$college->id}}" class="btn btn-success">EDIT</a></td>

            </tr>
            @endforeach
        </table>
    </div>
    @endsection