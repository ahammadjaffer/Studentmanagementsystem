
<!-- @session("content"); -->
<!DOCTYPE html>
<html>
    <head>
       <title>Student Management System </title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
      <h1>Student Deatils </h1>
        <form method="post" action="{{ route('student.store')}}" class="col-4">
          @csrf
            <div class="form-group">
               <label>Name : &nbsp;</label>
                <input type="text" name="name" class="form-control"/>
                @error('name')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label>Age : &nbsp;&nbsp;</label>
                <input type="text" name="age" class="form-control"/>
                @error('age')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label>Gender : &nbsp;&nbsp;</label>
                <input type="text" name="gender" class="form-control"/>
                @error('gender')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label>Reporting Teacher : &nbsp;</label>
                <select class="form-control" id="reporting" name="reporting">
                    <option value="Rahman">Rahman</option>
                    <option value="Muhammed">Muhammed</option>
                    <option value="Ahammad">Ahammad</option>
                    <option value="Ajith">Ajith</option>
                    <option value="Manu">Manu</option>
                </select>
                @error('reporting')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">  
                <button class="btn btn-success">Save</button>
            </div>

        </form>    
        </div>

    </body>
</html> 
<!-- @endofsession();

