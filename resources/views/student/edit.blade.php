
<!-- @session("content"); -->
<!DOCTYPE html>
<html>
    <head>
       <title>Student Management System </title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
      <h1>Student Deatils </h1>
        <form method="post" action="/student/{{students->id}}">
          @csrf
          @method("PUT")
            <div class="form-group">
               <label>Name</label>
                <input type="text" name="name" class="form-control"/>
                @error('name')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label>Age</label>
                <input type="text" name="age" class="form-control"/>
                @error('age')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" name="gender" class="form-control"/>
                @error('gender')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label>Reporting Teacher</label>
                <!-- <input type="text" name="reporting" class="form-control"/> -->
                <select class="form-control" id="reporting" name="reporting">
                    <option value="Rekha">Rekha</option>
                    <option value="Athira">Athira</option>
                    <option value="Shona">Shona</option>
                    <option value="Manu">Manu</option>
                </select>
                @error('reporting')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <div class="form-group">
                 
                <button class="btn btn-success">Save</button>
            </div>

        </form>    

    </body>
</html> 
<!-- @endofsession();

