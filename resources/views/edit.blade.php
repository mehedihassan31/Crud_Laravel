<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-success navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">CRUD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Delete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Update</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">

    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
              <div >
                  update student
              </div>


            @if (session('success'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
          </div>
          <div class="card-body">
          <form action="{{url('student/update/'.$student->id)}}" method="POST">
              @csrf
              <div class="form-group">


                <label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{$student->name}}">
                @error('name')
                    <strong class="text-danger">{{$message }} </strong>
                @enderror
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Class</label>
                <input type="text" name="class" class="form-control @error('roll') is-invalid @enderror " id="class" value="{{$student->class}}">
                @error('roll')
                <strong class="text-danger">{{$message }} </strong>
            @enderror
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Roll </label>
                <input type="num" name="roll" class="form-control @error('class') is-invalid @enderror" id="roll" value="{{$student->roll}}">
                @error('class')
                <strong class="text-danger">{{$message }} </strong>
            @enderror
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
              
        
            </form>
          </div>
        </div>
      </div>

    </div>






  </div>


</body>

</html>