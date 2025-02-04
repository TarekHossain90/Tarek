<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
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
            
        
        <div class="div_center">
            <h2 class="ta">Update Category</h2>

            
         <form action="{{url('update_category',$data->id)}}" method="post">
            @csrf
            <label for="">Category Name</label>
            <input type="text" name="cat_name" value="{{$data->cat_title}}">

            <input type="submit" class="btn btn-danger">
         </form>
         
        </div>
            </div>
            </div>
            </div>
          @include('admin.footer')
  </body>
</html>