<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
  <body>

    {{-- <form action="{{url('/register')}}" method="post"> --}}
        {{!!Form::open([
            'url'=> url('/register'),
            'method'=>'post'
        ])!!}}
      @csrf
    <div class="container" >

    <div class="text-center"><h1>Register</h1></div>
    <div class="form-inline">

    <div class="form-group" style="padding: 25px">
      <label for="">Name</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{old('name')}}">

      <small id="helpId" class="form-text text-danger">@error('name'){{$message}}@enderror</small>

    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{old('email')}}" >
      <small id="helpId" class="form-text text-danger">@error('email'){{$message}}@enderror</small>
    </div>
    <div class="form-group">
      <label for="">Password</label>
      <input type="text" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="" >
      <small id="helpId" class="form-text text-danger">@error('password'){{$message}}@enderror</small>
    </div>
    <div class="form-group">
      <label for="">Confirm Password</label>
      <input type="text" class="form-control" name="password_confirmation" id="" aria-describedby="helpId" placeholder="">
      <small id="helpId" class="form-text text-danger">@error('password_confirmation'){{$message}}@enderror</small>
    </div>
    <div class="form-group">
      <label for="">Mobile</label>
      <input type="text" class="form-control" name="mobile" id="" aria-describedby="helpId" placeholder="" value="{{old('mobile')}}">
      <small id="helpId" class="form-text text-danger">@error('mobile'){{$message}}@enderror</small>
    </div>
    <div class="form-group">
      <label for="">City</label>
      <input type="text" class="form-control" name="city" id="" aria-describedby="helpId" placeholder="" value="{{old('city')}}">
      <small id="helpId" class="form-text text-danger">@error('city'){{$message}}@enderror</small>
    </div>
    <div class="form-group">
      <label for="">Gender</label>
      <input type="radio" class="form-control" name="city" id="" aria-describedby="helpId" placeholder="" value="{{old('city')}}">Male
      <input type="radio" class="form-control" name="city" id="" aria-describedby="helpId" placeholder="" value="{{old('city')}}">Female
      <small id="helpId" class="form-text text-danger">@error('city'){{$message}}@enderror</small>
    </div>
    <div class="form-group">
      <label for="">City</label>
      <input type="text" class="form-control" name="city" id="" aria-describedby="helpId" placeholder="" value="{{old('city')}}">
      <small id="helpId" class="form-text text-danger">@error('city'){{$message}}@enderror</small>
    </div>
    <div class="form-group">
      <label for="">City</label>
      <input type="text" class="form-control" name="city" id="" aria-describedby="helpId" placeholder="" value="{{old('city')}}">
      <small id="helpId" class="form-text text-danger">@error('city'){{$message}}@enderror</small>
    </div>

  </div>
      <button class="btn btn-success">Submit</button>

  </div>
</div>
{{!!Form::close()!!}}
{{-- </form> --}}
</body>
</html>
