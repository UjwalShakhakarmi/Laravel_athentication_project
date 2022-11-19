<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    form{
        height: 491px;
        width: 398px;
        margin-top: 10%;
        margin-left:35%;
    }
    .heading {
        text-align: center;
        margin-top:5px;
    }
    .form-input{
        width: 100%;
        box-sizing: border-box;
        height: 349px;
        text-align: center;
        /* background-color: #194164; */
        margin-top: 18px;
    }
    input{
        width:280px;
    }
    #span{
        opacity: 0.5;
        font-size:15px;
    }
</style>
<body>
    <!-- <h1>Sign UP</h1> -->

    <div class="main">
    <form action="{{route('signUpuser')}}" method="post" class="border border-secondary rounded">
        @csrf
        <div class="heading">
            <h1>SignUp</h1>
        </div>
        <br><br>
        <div class="form-input " >

        <input class=" border-secondary border-top-0 border-end-0 border-start-0" type="text" name="name" placeholder="Enter the Name">
        <br><br>
        <br><br>

        <!-- <label for="">Email:</label> -->
        <input class=" border-secondary border-top-0 border-end-0 border-start-0" type="text" name="email" placeholder="Enter the Email">
        <br>
        <span id="span">@error('email') {{$message}} @enderror</span><br>
        <br><br>

        <!-- <label for="">Password:</label> -->
        <input class=" border-secondary border-top-0 border-end-0 border-start-0" type="password" name="password" placeholder="Enter password">
        <br>
        <span id="span">@error('password') {{$message}} @enderror</span>
        <br><br>
        <br>
        <button type="submit" class="btn btn-primary">Register</button>

        </div>
    </form>
    </div>
</body>
</html>