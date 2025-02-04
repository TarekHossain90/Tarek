<!DOCTYPE html>
<html lang="en">

  <head>

   @include('home.css')
   <style>
    .table_cen{
        border:1px solid white;
        margin:auto;
        margin-top:100px;
        color: white;
    }
    th{
        border:1px solid yellow;
    }
    td{
        border:1px solid yellow;
    }
   </style>
  </head>

<body>

 @include('home.header')

 <div class="currently-market">
    <div class="container">
      <div class="row">

      @if(session()->has('message'))
          <div class="alert alert-danger">
            <button class="close" type="button"
            data-dismiss="alert" aria-hidden="true">X</button>
          {{session()->get('message')}}
          </div>
          @endif
      <table class="table_cen">
        <tr>
            <th>Book Name</th>
            <th>Book Auther</th>
            <th>Book Status</th>
            <th>Image</th>
            <th>Cancel Request</th>
        </tr>

        @foreach($data as $data)
        <tr>
            <td>{{$data->book->title}}</td>
            <td>{{$data->book->auther_name}}</td>
            <td>{{$data->status}}</td>

            
            <td >
            @if($data->status == 'Applied')
              <a href="{{url('cancel_req',$data->id)}}" class="btn btn-info">Cancel</a>
           @else
           <p style="color:white; font-weignt:bold;">Not Allowed</p>
              @endif
            </td>
            <td>
                <img style="width:100px; margin:auto;" src="book/{{$data->book->book_img}}" alt="">
            </td>

            
        </tr>
        @endforeach
      </table>
        </div>
        </div>
        </div>
  
  @include('home.footer')

  </body>
</html>