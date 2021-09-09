<x-app-layout>
    
</x-app-layout>
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
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Guest</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Message</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $data)
    <tr>
     
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->guest}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->time}}</td>
      <td>{{$data->message}}</td>
      <td><a href="{{url('/deletereservation',$data->id)}}">delete</a></td>
     
     
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