<!DOCTYPE html>
<html>
  <head> 
    
  @include('admin.css')
<style>
    table{
        width: 80%;
        border:2px solid white;
    }
    th{
        background-color:white;
        padding: 8px;
        color:black;
    }
</style>
</head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
          <center>
          <table>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Book Title</th>
                <th>Quantity</th>
                <th>Borrow Status</th>
                <th>Book Image</th>
                <th>Change Status</th>
            </tr>
            @foreach($data as $data)
            <tr>
                <td>{{$data->user->name}}</td>
                <td>{{$data->user->email}}</td>
                <td>{{$data->user->phone}}</td>
                <td>{{$data->book->title}}</td>
                <td>{{$data->book->quantity}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <img style="width:150px;" src="book/{{$data->book->book_img}}" alt="">
                </td>

                <td>
                    <a class="btn btn-info" href="{{url('approve_book',$data->id)}}">
                        Approved</a>
                    <a class="btn btn-primary" href="{{url('rejected_book',$data->id)}}">Rejected</a>
                    <a class="btn btn-success" href="{{url('return_book',$data->id)}}">Returned</a>
                </td>
            </tr>
            @endforeach
          </table>
          </center>
        
            </div>
            </div>
            </div>
          @include('admin.footer')
  </body>
</html>