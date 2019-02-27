<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class ="container">
       <div class ="text-center">
        <h1>Daily Tasks</h2>
        <div class ="row">
            <div class= "col-md-12">
            
            @foreach($errors->all() as $error)
                 <div class="alert alert-danger" role="alert">
                    {{$error}}
                 </div>
               
            @endforeach


             <form method="post" action="/saveTask">  
             {{csrf_field()}} 
                <input text = "text" class=" from-control" name="task" placeholder = "Enter your Task here">
                  <br>
                  <input type ="submit" class="btn btn-primary" value="Save">
                  <input type ="button" class="btn btn-warning" value="Clear">
                </form>      
        <table class="table table-dark">
            <th>ID</th>
            <th>Task</th>
            <th>Completed</th>    
            <th>Action</th>

            @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->task}}</td>
                <td>
                    @if($task->iscompleted)
                    <button class="btn btn-success">Completed</button>
                    @else
                    <button class="btn btn-warning">Not Completed</button>
                    @endif 
                </td> 
                <td>
                    @if(!$task->iscompleted)
                    <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                    @else
                    <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a>
                    @endif
                    <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                    <a href="/update/{{$task->id}}" class="btn btn-secondary">Update</a>
                </td>
            </tr>
            @endforeach
        </table>

            </div>
        </div>
       </div>
    </div>
</body>
</html>