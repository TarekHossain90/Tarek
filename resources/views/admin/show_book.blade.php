<!DOCTYPE html>
<html>
  <head> 
    
  @include('admin.css')

  <style>
    .div_center{
        text-align:center;
        margin:auto;
        border:2px solid white;
    }
    th{
        background-color:skyblue;
        padding: 8px;
    }
    .img_auther{
      width: 80px;
      border-radius:60%;
    }
    .img_book{
      width: 150px;
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
          <div>
            <table class="div_center">
                <tr>
                    <th>Book Title</th>
                    <th>Auther Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Auther Image</th>
                    <th>Book Image</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

                @foreach($book as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->auther_name}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->quantity}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->category->cat_title}}</td>
                    <td>
                        <img class="img_auther" src="auther/{{$book->auther_img}}" >
                    </td>
                    <td>
                        <img class="img_book" src="/book/{{$book->book_img}}">
                    </td>
                    <td>
                      <a href="{{url('book_delete',$book->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                      <a href="{{url('edit_book',$book->id)}}" class="btn btn-success">Update</a>
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