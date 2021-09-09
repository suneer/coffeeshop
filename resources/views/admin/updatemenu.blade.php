<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
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
    <input style="color:blue;" type="text"  placeholder="Enter Title" name="title" value="{{$data->title}}"  required>
  </div>
  <div >
    <label for="price">Price:</label>
    <input style="color:blue;" type="text"  placeholder="Enter Price" name="price"  value="{{$data->price}}" required>
  </div>
  <div >
    <label for="description">Description:</label>
    <input style="color:blue;" type="text"  placeholder="Enter Description" name="description"  value="{{$data->description}}" required>
  </div>
  <form>
  <div >
    <input type="file" name="image"   required>
    
    <img height="60" width="60" src="/foodupload/{{$data->image}}">
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