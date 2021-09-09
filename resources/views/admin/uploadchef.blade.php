<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    @include('admin/admincss')
  </head>
  <div class="container-scroller">
   @include('admin.nav')
   <body>
   <div>
       <div style= "position:relative; top:140px; right:-90px">
       <form action="{{url('/uploadchefmenu')}}" method="post" enctype="multipart/form-data">
       @csrf
  <div >
    <label for="name">Name:</label>
    <input type="text"  placeholder="Enter Name" name="name"  >
  </div>
  <div >
    <label for="speciliaties">Specialities:</label>
    <input type="text"  placeholder="Enter Speciality" name="speciality" >
  </div>
  
  <form>
  <div >
    <input type="file" name="image" >
    <label >File Upload</label>
  </div>

  <input type="submit" style="color:black"   value="save">
</form>
</div>
</div>

</body>