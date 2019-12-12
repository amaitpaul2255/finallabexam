<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Registration</h1>
	<form method="post">
	@csrf

	@if($errors->any())
		<div class="alert alert-denger">
			<ul>
				@foreach($errors->all() as $errors)
				<li><font color="red">{{$errors}}</font></li>
				@endforeach
			</ul>
		</div>
	@endif
	<table border="1">
		<tr>
        <tr>
			<td>NAME: </td>
			<td><input type="text" name="name" ></td>
		</tr>
			<td>USERNAME: </td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>PASSWORD: </td>
			<td><input type="password" name="password"></td>
		</tr>
        <tr>
			<td>Contact</td>
			<td><input type="text" name="contact"></td>
		</tr>
        <tr>
			<td>TYPE</td>
			<td><input type="text" name="type"></td>
		</tr>
			<td><input type="submit" name="submit" value="Register"></td>
			<td><a href="{{route('login.index')}}">Back</a></td>
		</tr>
	</table>
</form>

</body>
</html>