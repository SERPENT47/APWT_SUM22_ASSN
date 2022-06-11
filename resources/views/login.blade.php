<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
    </head>
    <h1> Logian </h1>
   
   <form method="post" action="/login">
       {{@csrf_field()}}
       <br>Email: <input type="text" name="email" placeholder="Email"><br>
       @error('email')
           {{$message}} <br>
       @enderror
       <br>Password: <input type="password" name="password" ><br>
       @error('password')
           {{$message}}<br>
       @enderror
       <br><input type="submit" value="Create">  <a href="/">home</a>
   </form>
</html>
