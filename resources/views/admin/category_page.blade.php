<!DOCTYPE html>
<html>
  <head> 
    
  @include('admin.css')

  <style>
    .div_center{
        text-align:center;
        margin:auto;
        
    }
    .ta{
        text-align:center;
        font-size:30px;
        font-weight:bold;
        color:white;
        padding: 30px;
    }
    .table_deg{
      text-align:center;
      margin:auto;
      border: 2px solid white;
      width: 60%;
      margin-top:50px;
    }
    th{
      padding-top:20px;
      color:black;
      padding: 8px;
      background-color:yellow;
    }
    td{
      border:1px solid;
      padding: 8px;
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
            @if(session()->has('message'))

           <div class="alert alert-success">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true"
            >X</button>
            {{session()->get('message')}}

           </div>
            @endif
         <h1 class="ta">Add Category</h1>

         <div class="div_center">
         <form action="{{url('add_category')}}" method="Post">
            @csrf
            <label for="">Category Name</label>
            <input type="text" name="category" required>

            <input type="submit" class="btn btn-danger">
         </form>
         </div>

         <div>
          <table class="table_deg">
            <tr>
              <th>Category Name</th>
              <th>Action</th>
            </tr>

            @foreach($data as $data)
            <tr>
              <td>{{$data->cat_title}}</td>
              <td>
              <a class="btn btn-success" href=
              "{{url('edit_category',$data->id)}}">
              Update</a>
                <a class="btn btn-danger" href="{{url('cat_delete',$data->id)}}">
                  Delete</a>
              </td>
            </tr>
            @endforeach
          </table>
         </div>
        
            </div>
            </div>
            </div>
          @include('admin.footer')
  </body>
</html>