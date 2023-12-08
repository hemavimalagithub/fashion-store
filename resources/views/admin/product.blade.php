<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style>
        .div_center{
            text-align: center;
            padding-top:40px;
        }
        .font_size{
            font-size:40px;
            padding-bottom: 40px;
        }

        .text_color{
            color: black;
            padding-bottom: 20px;
        }

        label{

            display: inline-block;
            width: 200px;
        }
        .div_design
        {
            padding: 15px;
        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar')
      <!-- partial -->

        @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class=" close " data-dismiss="alert" aria-hidden="true">

                    </button>
                    {{ session()->get('message')}}

                </div>

             @endif

            <div  class="div_center">

                <h1 class="font_size">Add Product</h1>


                <form action="{{ url ('/add_product')}}" method="post" enctype="multipart/form-data">

                    @csrf




                <div class="div_design">
                    <label>Product Description </label>

                    <input  class="text_color"     type="text" name="description" placeholder="write a description" required="">
                 </div>

                 <div class="div_design">
                    <label>Product price </label>

                    <input  class="text_color"     type="number" name="price" placeholder="write a product price" required="">
                 </div>

                 <div class="div_design">
                    <label>Discount price </label>

                    <input  class="text_color"     type="number" name="dis_price" placeholder="write a price" >
                 </div>


                 <div class="div_design">
                    <label>Product Quantity </label>

                    <input  class="text_color"     type="number" min="0"  name="quantity" placeholder="write a product Quantity" required="">
                 </div>

                 <div class="div_design">
                    <label>Product Catagory </label>
                       <select class="text_color" name="catagory" required="">
                        <option value="" selected="">All</option>
                        @foreach ($catagory as $catagory )

                        <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}</option>

                        @endforeach

                       </select>
                 </div>

                 <div class="div_design">
                    <label>Product Image </label>
                    <input type="file" name="image" required="">

                 </div>

                 <div class="div_design">
                    <input type="submit" value="Add Product" class="btn btn-primary" required="" >

                 </div>

                </form>
            </div>

        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
