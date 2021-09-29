
<!DOCTYPE html>
<html lang="en">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Rubik:ital,wght@1,300&display=swap');
    #btn:hover{
      box-shadow: 5px 5px 5px 10px  white;
       
    }
    #btn{
        width:33%;
    }
.form-control{
  width:3%;
}.capitalize{
  font-weight:350;
  box-shadow: 0 3px 5px #ffff;
}
span{
  margin:auto;
}
.alert{
        color: #D8000C;
        font-family: 'Rubik', sans-serif;
        font-weight:800;
    }
    .form-control:focus {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
}
</style>
<body>  

<x-nav/>

<div class="container">
    <h1 class="capitalize text-center  text-capitalize mt-5">enter employee details here</h1>
<form action="store" method="POST" class="mt-5" >
    @csrf
    <div class="container">
    <div class="form-group">



<div class="form-group">
<div class="form-group">
    <label for="exampleInputEmail1">Email address*</label>
    <input type="email" value="{{old('email')}}" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  @error('email')
    <span class="alert ">{{$message}}</span>
    @enderror
    <br>
    <label for="exampleInputEmail1">NAME*</label>
    <input type="text" value="{{old('name')}}"class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    @error('name')
    <span class="alert">{{$message}}</span>
    @enderror

  
 
 <div class="text-center">
  <button type="submit" class="btn btn-success mt-3 " id="btn">add employee</button>
  </div>
  </div>
  </form>
</div>



</body>
</html>