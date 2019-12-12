<!DOCUMENT html>
<html>
    <head>
        <title>Restaurants view</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td>View All Restaurants</td>
                </tr>
                <tr>
                   <td ><a href="/logout">Logout</a></td>  
                </tr>
                <tr>
                    <td><a href="">Add Restaurants</a></td>
                </tr>
            </table>
            <table border='1'>
            <tr>
                <td width='20%'>ID</td>
                <td width='20%'>Name</td>
                <td width='20%'>Action</td>
            </tr>

            @foreach($user as $n)
                <tr>
                    <td>{{$n->id}}</td>
                    <td>{{$n->resname}}</td>
                    <td>
                        <a href="">Edit</a> |
                        <a href="">Delete</a> |
                        <a href="">Details</a>
                    </td>
                </tr>
            @endforeach
        </form>
    </body>
</html>