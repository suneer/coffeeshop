<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    @include('admin/admincss')
  </head>
  <div class="container-scroller">
   @include('admin.nav')
   <body>
   
       
<div style= "position:relative; top:140px; right:-90px">
<a href="{{url('/uploadfoodchef')}}">Click Here to Upload Food Chef</a>
   <table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Specialities</th>
      <th scope="col">Image</th>
      
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
   @foreach($data as $data)
    <tr>
     
      <td>{{$data->name}}</td>
      <td>{{$data->specialities}}</td>
      <td><img height="420" width="470" src="/chefupload/{{$data->image}}"></td>
      
      <td><a href="{{url('/deletechef',$data->id)}}">delete</a></td>
     
     
    </tr>
    @endforeach
  </tbody>
</table>
</div>
        
    @include('admin.adminscript')
    <!-- End custom js for this page -->
    </html>
