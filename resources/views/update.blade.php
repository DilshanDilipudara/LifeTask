<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>UpdateTask</title>
</head>
<body>
      <div class="container">
         <br><br><br><br><br>
          <form action="/updatetask" method="post">
            {{csrf_field()}}

             <input type="text"  class="from-control" name="task" value="{{$taskdata->task}}">
             <input type="hidden" name="id" value="{{$taskdata->id}}">
             <input type="submit" class="btn btn-primary" value="Update">
             &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="cancel">
          
          </form>
         
      </div>
</body>
</html>