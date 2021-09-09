<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/admincss')
  </head>
  <body>
  <div class="container-scroller">
   @include('admin.nav')
   <div>
       <div style= "position:relative; top:140px; right:-90px">
   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
      <th scope="row">1</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      @if($data->usertype=="0")
      <td><a href="{{url('/userdelete',$data->id)}}">Delete</a></td>
      @else
      <td>Not Able to Delete</td>
      @endif
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