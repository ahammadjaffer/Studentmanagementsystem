<!-- @session("content"); -->
<!DOCTYPE html>
<html>
    <head>
       <title>Student Management System </title>
    </head>
    <body>
      <h1>Student Management System </h1>
        <form> 
        <a href="{{ url('/markscreate') }}">Add New Marks</a>
        <br/><br/>
            <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Maths</th>
                <th>Science</th>
                <th>Histrory</th>
                <th>Term</th>
                <th>Total</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>
            @foreach($marks as $marks)
                <tr>
                    <td>{{ $marks->id }}</td>
                    <td>{{ $marks->name }}</td>
                    <td>{{ $marks->maths }}</td>
                    <td>{{ $marks->science }}</td>
                    <td>{{ $marks->history }}</td>
                    <td>{{ $marks->term }}</td>
                    <td>{{ $marks->total }}</td>
                    <td>{{ $marks->created_on }}</td>
                    <td><a href="marks/{{ $marks->id }}">Edit </a> / <a href="/marksdestroy/{{ $marks->id }}" onclick="return confirm('Are you sure?)">Delete</a></td>
                
                </tr>
            @endforeach     
            </table>
        </form>    

    </body>
</html>

<!-- @endofsession(); -->

