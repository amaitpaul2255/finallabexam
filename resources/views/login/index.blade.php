<!DOCUMENT html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
    <fieldset>
        <legend>Login Page</legend>
        <form method="post">
            @if($errors->any())
            <div class="alert alert-denger">
                <ul>
                    @foreach($errors->all() as $errors)
                    <li><font color="red">{{$errors}}</font></li>
                    @endforeach
                </ul>
            </div>
            @endif
            <table>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name='name'></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name='password'></td>
                </tr>
                <tr>
                    <td> </td>
                    <td><input type="submit" name="submit" value='Submit'></td>
                </tr>
                <tr>
                    <td> </td>
                    <td><a href="{{route('registration.index')}}">Registration</a></td>
                </tr>
            </table>
        </form>
    </fieldset>  
    </body>
</html>