<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
             <h4>Registraion</h4>
             <hr>    
                <form action="{{route('register-user')}}" method="post">
                @csrf    
                <div class="form-group">
                    Name : <input type="text" class="form-control" value="{{old('name')}}" name="name"> </br>
                    @error('name')
                    <span class="text-danger">{{$message}}</span><br>
                    @enderror

                    Email : <input type="text" class="form-control" value="{{old('email')}}" name="email"> </br>
                    @error('email')
                    <span class="text-danger">{{$message}}</span><br>
                    @enderror

                    Password: <input type="password" class="form-control" name="password"></br>
                    @error('password')
                    <span class="text-danger">{{$message}}</span><br>
                    @enderror

                    <button class="btn btn-block btn-primary" type="submit">Registration</button>
                </div>
                <br><a href="login">Already Registered !! Login Here.</a>
                </form>
                
            </div>    
        </div>
    </div>
    
</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>