
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
        <form method="post" action="/marksupdate/{{ $marks->id }}" class="col-4">
          @csrf
          @method("PUT")
          <div class="form-group">
               <label>Name</label>
               <select class="form-control" id="studentname" name="studentname">
                    <option value="{{ $marks['name'] }}" >{{ $marks['name'] }}</option>
                   
                </select>
                @error('studentname')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
                <label>Term Selection</label>
                <select class="form-control" id="termselect" name="termselect">
                    <option value="{{ $marks['maths'] }}">{{ $marks['term'] }}</option>
                </select>
                @error('termselect')
                   <div class="alert alert-danger">{{ $message}}</div>
                @enderror  
            </div>
            <br/>
            <div class="form-group">
            <label><b>Subject :</b><br>  
            <lable>Maths</label><input type="text" class="form-control"  name="mathss" value="{{ $marks['maths'] }}">  <br>
            <lable>Science</label><input type="text" class="form-control"  name="science" value="{{ $marks['science'] }}"> <br>
            <lable>Histroy</label><input type="text" class="form-control"  name="history" value="{{ $marks['history'] }}"></label>
                  
            </div>
            <div class="form-group">
                 
                <button class="btn btn-success">Save</button>
            </div>

        </form>    
</div>
    </body>
</html> 
<!-- @endofsession();

