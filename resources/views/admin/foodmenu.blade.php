<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/admincss')
  </head>
  
  <div class="container-scroller">
   @include('admin.nav')
   <div>
       <div style= "position:relative; top:140px; right:-90px">
  
    <a href="{{url('/uploadmenu')}}">Click Here to Upload Menu</a>
  <table class="table table-striped table-dark">
  <thead>
    <tr>
    <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      
      <td>{{$data->title}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->description}}</td>
      <td><img height="300" width="300" src="/foodupload/{{$data->image}}">
      <td><a href="{{url('/updatemenu',$data->id)}}">Update Menu</a></td>
      
      <td><a href="{{url('/deletemenu',$data->id)}}">Delete Menu</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>

</div>
        
    @include('admin.adminscript')
    <!-- End custom js for this page -->
  </body>

</html>