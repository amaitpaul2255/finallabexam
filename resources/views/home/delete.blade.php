<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Delete Page</h1> 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$user[0]->id}}</td>
		</tr>
		<tr>
			<td>USERNAME</td>
			<td>{{$user[0]->username}}</td>
		</tr>
	</table>

<form method="post">
	<h3>Are you sure?</h3>
	<input type="submit" name="submit" value="Confirm">
    <a href="{{route('home.index')}}"><input type="button" value="Back"></a>
</form>

</body>
</html>