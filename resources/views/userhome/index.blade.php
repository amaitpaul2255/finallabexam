<!DOCUMENT html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>WellCome User Home Page!!!!! {{session('x')}}</td>
                    <td></td>
                </tr>
                <tr>
                   <td ><a href="/logout">Logout</a></td> 
                  
                   @foreach($user as $n)
                    <td>
                    @if(session('x') == $n->username)
                    <a href="{{route('userhome.uprofile',$n->id)}}">My Profile</a>
                    @endif
                    </td>
                </tr>
            @endforeach
                </tr>
            </table>
        </form>
    </body>
</html>