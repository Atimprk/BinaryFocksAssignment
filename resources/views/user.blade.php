<html>
<head>
<title>Form Tutorial</title>
</head>
<body>
<div>

</div>
<form action="usercontroller" method="POST">
@csrf
<input type="text" placeholder="user" name="user"><br><br>
<input type="text" placeholder="phone" name="phone"><br><br>
<input type="password" placeholder="password" name="password">
@error('password')
<div>{{$message}}</div>
@enderror
<button type="submit">Submit</button>
</form>
</body>
</html>