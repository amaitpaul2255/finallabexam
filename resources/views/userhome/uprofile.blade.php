<!DOCTYPE html>
<html>
    <head>
        <title>User Profile</title>
    </head>
    <body>
        <h1>User Profile</h1>
        <a href="{{route('userhome.index')}}">Back</a> ||
        <a href="/logout">Logout</a>

        <table border='1'>
            <tr>
                <td width='20%'>Name</td>
                <td>{{$user[0]->name}}</td>
            </tr>
            <tr>
                <td width='20%'>Password</td>
                <td>{{$user[0]->password}}</td>
            </tr>
            <tr>
                <td width='20%'>User Name</td>
                <td>{{$user[0]->username}}</td>
            </tr>
            <tr>
                <td width='20%'>Contact Number</td>
                <td>{{$user[0]->contact}}</td>
            </tr>
           <tr>
                <td><a href="">Edit Profile</a> </td>
                <td></td>
           </tr>
        </table>
    </body>
</html>