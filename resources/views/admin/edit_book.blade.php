<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
  @include('admin.css')

  <style>
{
    margin:auto;
    padding:20px;
}
label{
    width: 100px;
    padding: 10px;
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
       <div class="div_center">
            <h1>Update Book</h1>

            <form action="{{url('update_book',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <div>
                <label for="">Book Title</label>
                <input type="text" name="title" value="{{$data->title}}">
            </div>

            <div>
                <label for="">Auther Name</label>
                <input type="text" name="auther_name" value="{{$data->auther_name}}">
            </div>

            <div>
                <label for="">Price</label>
                <input type="text" name="price" value="{{$data->price}}">
            </div>

            <div>
                <label for="">Description</label>
                <textarea name="description">{{$data->description}}</textarea>
            </div>

            

            <div>
                <label for="">Category</label>
                <select name="category" id="">
                    <option value="{{$data->category_id}}">{{$data->category->cat_title}}</option>
                    @foreach($category as $category)

                    <option value="{{$category->id}}">{{$category->cat_title}}</option>

                    @endforeach
                </select>

                <div>
                    <label for="">Current Auther Image</label>
                    <img style="width:80px; border-radius:60%;" src="auther/{{$data->auther_img}}" alt="">
                </div>

                <div>
                    <label for="">Change Auther Image</label>
                    <input type="file" name="auther_img">
                </div>

    
                <div>
                    <label for="">Current Book Image</label>
                    <img style="width:80px; " src="book/{{$data->book_img}}" alt="">
                </div>

                <div>
                    <label for="">Change Book Image</label>
                    <input type="file" name="book_img">
                </div>

                <div>
                    <input type="submit" class="btn btn-warning">
                </div>
            </div>
            </form>
        </div>
        
       </center>
            </div>
            </div>
            </div>
          @include('admin.footer')
  </body>
</html>