
<style>
    #prevButton{
        font-size: 3rem;
        cursor: pointer;
        padding: 20px;
        font-size: bold;
    }
    #sliderButton{
        font-size: 3rem;
        cursor: pointer;
    }
</style>



<div class="auto-group-ykzo-zjs">
    <div class="group-2242-WTK">
      <div class="auto-group-jqnb-rGH">
        <div class="auto-group-ezxf-n9w">
          <div class="check-out-most-promising-product-bought-by-our-buyers-Kff">Check out most promising product bought by our buyers</div>
          <p class="new-arrivals-CjT">New Arrivals</p>
        </div>
        <div class="group-18-6pq">
          <div class="group-17-c2V">
            <div class="group-16-9YD" onclick="changeColor(this)"><a href="#">All</a></div>
          </div>
          <div class="group-13-mZb" onclick="changeColor(this)"><a href="#">Men</a></div>
          <div class="group-14-SQq" onclick="changeColor(this)"><a href="#">Women</a></div>
          <div class="group-15-it9" onclick="changeColor(this)"><a href="#">Kids</a></div>
        </div>
      </div>

      <div class="auto-group-lvqu-n7K space-x-8" id="productContainer">
        @foreach ($product as $products)
          <div class="group-36-6do">
            <div class="auto-group-ppbm-3J9">
              <img class="background-img" src="product/{{ $products->image }}" alt="Background Image">
              <div class="group-29-yBo">
                <a href="your-link-for-image-1"><img class="group-26-WhX" src="home/page-1/assets/group-26-J41.png" /></a>
                <a href="your-link-for-image-2"><img class="group-27-rFb" src="home/page-1/assets/group-27-wn9.png" /></a>
                <a href="{{ url('product_details',$products->id) }}"><img class="group-28-nf3" src="home/page-1/assets/group-28.png" /></a>
              </div>

            </div>
            <div class="auto-group-dir9-ujf">
              <div class="auto-group-klfv-TWH">
                <p class="kids-nHf">{{ $products->catagory }}</p>
                <div class="group-22-7Kw">
                  <img class="iconly-bold-star-RbX" src="home/page-1/assets/iconly-bold-star-XzR.png" />
                  <img class="iconly-bold-star-NFs" src="home/page-1/assets/iconly-bold-star-uXo.png" />
                  <img class="iconly-bold-star-v2V" src="home/page-1/assets/iconly-bold-star-xDo.png" />
                  <img class="iconly-bold-star-TYD" src="home/page-1/assets/iconly-bold-star.png" />
                  <img class="iconly-bold-star-buK" src="home/page-1/assets/iconly-bold-star-wWH.png" />
                </div>
              </div>
              <p class="yellow-t-shirt-jkd">{{ $products->description }}</p>
              <div class="auto-group-yduv-sM3">
                <p class="item-180-zwT">${{ $products->discount_price }}</p>
                <div class="auto-group-9nnp-vaD">
                  <p class="item-300-SYZ">${{ $products->price }}</p>
                  <div class="line-1-ZNH"></div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      <div class="group-2241-Yhw">

        <div onclick="showPreviousProduct()" id="prevButton">&#x02190;</div>


        <div id="sliderButton" onclick="showNextProduct()">&#x02192;</div>


    </div>
    </div>
  </div>

  <script>
    const productContainer = document.getElementById("productContainer");
  const productWidth = document.querySelector(".group-36-6do").offsetWidth + 10; // Adjust for margin
  const visibleProducts = Math.floor(productContainer.offsetWidth / productWidth);

  function showNextProduct() {
    productContainer.scrollLeft += visibleProducts * productWidth;
  }

  function showPreviousProduct() {
    productContainer.scrollLeft -= visibleProducts * productWidth;
  }

  if (isSliderClosed) {
    productContainer.style.right = "300px";
    sliderButton.style.left = "300px";
    sliderButton.innerHTML = "&#x02192;";
  } else {
    productContainer.style.right = "0";
    sliderButton.style.left = "0";
    sliderButton.innerHTML = "&#x02190;";
  }
  </script>
