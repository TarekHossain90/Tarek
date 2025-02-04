<!DOCTYPE html>
<html>
  <head> 
    
  @include('admin.css')

  <style>
    .center{
        text-align:center;
        margin: auto;
        padding: 25px;
        
    }
    .title{
        font-size:30px;
        font-weight:bold;
        color:red;
        padding: 20px;
    }
    label{
        width: 100px;
        padding: 20px;
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
            
          <div class="center">
            <h1 class="title">Add Book</h1>

            <form action="{{url('store_book')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div>
                <label for="">Book Title</label>
                <input type="text" name="book_name">
            </div>


            <div>
                <label for="">Auther Name</label>
                <input type="text" name="auther_name">
            </div>

            <div>
                <label for="">Price</label>
                <input type="text" name="price">
            </div>

            <div>
                <label for="">Quantity</label>
                <input type="number" name="quantity">
            </div>

            <div>
                <label for="">Description</label>
                <textarea name="description" id=""></textarea>
            </div>


            <div>
                <label for="">Category</label>
                <select name="category" required>
                    <option value="">Select a Category</option>
                    @foreach($data as $data)
                    <option value="{{$data->id}}">{{$data->cat_title}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="">Book Image</label>
                <input type="file" name="book_img">
            </div>

            <div>
                <label for="">Auther Image</label>
                <input type="file" name="auther_img">
            </div>

            <div>
                <input type="submit" class="btn btn-danger">
            </div>

            </form>
          </div>
        
            </div>
            </div>
            </div>
          @include('admin.footer')
  </body>
</html>