<!DOCUMENT html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>
        <form action="" method="post">
        <table>
                <tr>
                    <td>WellCome Admin Home Page!!!!! {{session('x')}}</td>
                    <td></td>
                </tr>
                <tr>
                   <td ><a href="/logout">Logout</a></td>
                </tr>
                <tr>
                @foreach($user as $n)
                    <td>
                        @if(session('x') == $n->username)
                        <a href="{{route('home.profile',$n->id)}}">My Profile</a>
                        @endif
                    </td>
                @endforeach
                </tr>
                <tr>
                    <td><a href="{{route('restudent.index')}}">view All restaurants</a></td>
                </tr>
        </table>
                <table border='1'>
            <tr>
                <td width='20%'>ID</td>
                <td width='20%'>Name</td>
                <td width='20%'>Username</td>
                <td>Action</td>
            </tr>

            @foreach($user as $n)
                <tr>
                    <td>{{$n->id}}</td>
                
                    <td>{{$n->name}}</td>
                 @if(session('x') == $n->username)
                    <td>{{$n->username}}*</td>
                 @else
                    <td>{{$n->username}}</td>
                 @endif
                 <td>
                    @if($n->type != 'admin')
                        <a href="{{route('home.delete', $n->id)}}">Delete</a>
                    @endif
                    </td>
                </tr>
            @endforeach
               
        </table>
        
        </form>
    </body>
</html>