<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
    </head>
    <h1> Student Register </h1>
   
        <form method="post" action="">
            {{@csrf_field()}}
            <br>Name: <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
            @error('name')
                {{$message}}<br>
            @enderror 
            <br>Email: <input type="text" name="email" placeholder="Email"><br>
            @error('email')
                {{$message}} <br>
            @enderror
            <br>Password: <input type="password" name="password" ><br>
            @error('password')
                {{$message}}<br>
            @enderror
            <br>Confirm Password: <input type="password" name="conf_password"><br>
            @error('conf_password')
                {{$message}}<br>
            @enderror
            <br>Type: <input type="radio" value="admin" name="type"> Admin <input type="radio" value="user" name="type"> User<br>
            <br><input type="submit" value="Create">  <a href="/">home</a>
        </form>
</html>
