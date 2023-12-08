<!DOCTYPE html>
<html lang="en">
<head>
    <base href="\public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details Page</title>
    <link rel="stylesheet" href="Details Page\Ecommerce Product Details Page\style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <nav>
        <div class="logo">Product Details</div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#">Products</a></li>
            <i class="fas fa-shopping-cart"></i>
        </ul>
    </nav>





    <div class="flex-box">
        <div class="left">
            <div class="big-img">
                <img src="product/{{ $product->image }}">
            </div>

        </div>

        <div class="right">
            <div class="pname">{{ $product->category}}</div>
            <div class="pname1">{{ $product->description }}</div>

            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">${{ $product->price }}</div>
            <div class="price1">${{ $product->discount_price }}</div>

            <!-- Add the form for adding to cart -->
            <form action="{{ url('/add_cart', $product->id) }}" method="post">
                @csrf
                <div class="quantity">
                    <p>Quantity :</p>
                    <input type="number" name="quantity" value="1">
                </div>
                <div class="btn-box">
                    <input type="submit" class="cart-btn" value="Add to cart">
                    <a class="buy-btn" style="" href="">Buy Now</a>
                </div>
            </form>
        </div>

    </div>



    <script>
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic) {
            bigImg.src = pic;
        }

        $(document).ready(function () {
            $('.psize').click(function () {
                $('.psize').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>
</html>
