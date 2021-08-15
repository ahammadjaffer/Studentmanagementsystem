<!-- @session("content"); -->
<!DOCTYPE html>
<html>
    <head>
       <title>Student Management System </title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    </head>
    <body>
    <div class="container">
      <h1>Student Management System </h1>
        <form>
        <a href="student/create">New Form</a>
        <br/><br/>
            <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Reporting Teacher</th>
                <th>Action</th>
            </tr>
            @foreach($students as $students)
                <tr>
                    <td>{{ $students->id }}</td>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->age }}</td>
                    <td>{{ $students->gender }}</td>
                    <td>{{ $students->reporting_teacher }}</td>
                    <form method="post">
                       @csrf
                        @method("DELETE")
                        <td><a href="student/{{ $students->id }}">Edit </a> / <a href="student/destory" onclick="return confirm('Are you sure?)">Delete</a></td>
                    
                    </form>
                </tr>
            @endforeach     
            </table>
        </form>    
</div>
    </body>
</html>

<!-- @endofsession(); -->

