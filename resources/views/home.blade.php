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
      <a class="navbar-brand" href="{{url('home')}}">CRUD</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
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



      <div class="col-sm-6">
        @if (session('delete'))

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{session('delete')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <div class="card">
          <div class="card-body">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">Class</th>
                  <th scope="col">Roll</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $serial=1;
                @endphp
                @foreach ($student as $item)
            
                <tr>
                  <th scope="row">{{$serial++}}</th>
                  <td>{{$item->name}}</td>
                  <td>{{$item->class}}</td>
                  <td>{{$item->roll}}</td>
                  <td>
                    <a href="{{url('student/edit/'.$item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{url('student/delete/'.$item->id)}}" onclick=" return confirm('are you sure to delete') " class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-header">


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
          <form action="{{url('studnet/store')}}" method="POST">
              @csrf
              <div class="form-group">


                <label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="namae input">
                @error('name')
                    <strong class="text-danger">{{$message }} </strong>
                @enderror
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Class</label>
                <input type="text" name="class" class="form-control @error('roll') is-invalid @enderror " id="class" placeholder="class input">
                @error('roll')
                <strong class="text-danger">{{$message }} </strong>
            @enderror
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Roll </label>
                <input type="num" name="roll" class="form-control @error('class') is-invalid @enderror" id="roll" placeholder="roll input">
                @error('class')
                <strong class="text-danger">{{$message }} </strong>
            @enderror
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
        
            </form>
          </div>
        </div>
      </div>

    </div>






  </div>


</body>

</html>