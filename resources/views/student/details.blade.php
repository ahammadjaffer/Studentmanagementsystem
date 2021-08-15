
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
        <form method="post" action="/student/{{$students['id']}}" class="col-4">
          @csrf
          @method("PUT")
             <div class="form-group">
                <label>Name</label>
                    <input type="text" name="name" value="{{ $students['name'] }}" class="form-control"/>
                    <!-- @error('name')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror   -->
                </div>
                <br/>
                <div class="form-group">
                    <label>Age</label>
                    <input type="text" name="age" value="{{ $students['age'] }}" class="form-control"/>
                    <!-- @error('age')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror   -->
                </div>
                <br/>
                <div class="form-group">
                    <label>Gender</label>
                    <input type="text" name="gender" value="{{ $students['gender'] }}" class="form-control"/>
                    <!-- @error('gender')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror   -->
                </div>
                <br/>
                <div class="form-group">
                    <label>Reporting Teacher</label>
                    <select class="form-control" id="reporting" name="reporting">
                        <option {{ ($students['reporting_teacher'])=='Rahman' ? 'selected' : '' }} value="Rahman">Rahman</option>
                        <option {{ ($students['reporting_teacher'])=='Muhammed' ? 'selected' : '' }} value="Muhammed">Muhammed</option>
                        <option {{ ($students['reporting_teacher'])=='Ahammad' ? 'selected' : '' }} value="Ahammad">Ahammad</option>
                        <option {{ ($students['reporting_teacher'])=='Ajith' ? 'selected' : '' }} value="Ajith">Ajith</option>
                        <option {{ ($students['reporting_teacher'])=='Manu' ? 'selected' : '' }} value="Manu">Manu</option>
                    </select>
                    <!-- @error('reporting')
                    <div class="alert alert-danger">{{ $message}}</div>
                    @enderror   -->
                </div>
            <div class="form-group">
                 
                <button class="btn btn-success">Save</button>
            </div>

        </form>    
</div>
    </body>
</html> 
<!-- @endofsession();

