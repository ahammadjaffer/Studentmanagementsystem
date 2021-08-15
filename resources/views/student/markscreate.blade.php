
<!-- @session("content"); -->
<!DOCTYPE html>
<html>
    <head>
       <title>Student Management System </title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
      <h1>Student Marks</h1>
        <form method="post" action="{{ url('student/marksstore') }}" class="col-4">
          @csrf
          @method("PUT")
            <div class="form-group">
               <label>Name</label>
               <select class="form-control" id="studentname" name="studentname">
                    @foreach($students as $student)
                        <option value="{{ $student->name }}">{{ $student->name }}</option>
                    @endforeach 
                </select>
                
                @error('studentname')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label>Term Selection</label>
                <select class="form-control" id="termselect" name="termselect">
                    <option value="one">One</option>
                    <option value="two">Two</option>
                </select>
                @error('termselect')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label><b>Subject : </b> <br>
                <lable>Maths</label><input type="text" class="form-control" name="mathss"><br>
                <lable>Science</label><input type="text" class="form-control" name="science"><br>
                <lable>Histroy</label><input type="text" class="form-control" name="history"></label>
            
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

