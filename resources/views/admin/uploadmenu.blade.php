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
       <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
       @csrf
  <div >
    <label for="title">Title:</label>
    <input type="text"  placeholder="Enter Title" name="title"  required>
  </div>
  <div >
    <label for="price">Price:</label>
    <input type="text"  placeholder="Enter Price" name="price" required>
  </div>
  <div >
    <label for="description">Description:</label>
    <input type="text"  placeholder="Enter Description" name="description" required>
  </div>
  <form>
  <div >
    <input type="file" name="image" required>
    <label >File Upload</label>
  </div>

  <input type="submit" style="color:black"   value="save">
</form>
</div>
</div>

</body>
</div>
        
    @include('admin.adminscript')
    <!-- End custom js for this page -->
    </html>

    


    