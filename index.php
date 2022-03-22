<?php
    require('header.php');
    require('functions.inc.php');
    

?>
<script src="js/cart.js";
        src="js/cartmodal.html";> 
</script>

<div class="container-fluid" id="hero">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex">
        <form action="address.php" class="form">
        <h1> <span style="color: #FFFFFF;">Party Tonight? Don't worry let's </span><span style="color: #ffbb00;">Talli</span></h1>
          <div class="input-group">
            
          </div>
        </form>
      </div>
      <div class="col-md-6"></div>
    </div>
  </div>
</div>


<!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner1.jpg" class="d-block w-100" alt="...">
    </div>
    <-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> --
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->



<!-- Categories -->
<div class="container-fluid" id="categories">
  <div class="container">
    <div class="row">
      <div class="col-md-2">

        <a href="shop.php" class="hvr-grow">
          <img src="images/c1.png" class="animate__animated animate__slideInDown delay-2s" />
        
        </a>
      </div>
      <div class="col-md-2">
        <a href="shop.php" class="hvr-grow">
          <img src="images/c2.png" class="animate__animated animate__slideInDown delay-3s" />
      
        </a>
      </div>
      <div class="col-md-2">
        <a href="shop.php" class="hvr-grow">
          <img src="images/c3.png" class="animate__animated animate__slideInDown delay-4s" />
        
        </a>
      </div>
      <div class="col-md-2">
        <a href="shop.php" class="hvr-grow">
          <img src="images/c4.png" class="animate__animated animate__slideInDown delay-5s" />
        
        </a>
      </div>

      <div class="col-md-4 hm-car-text">
        <h3>What's the Plan for <br><span style="font-weight: 700;">Today?</span></h3>
      </div>
    </div>
  </div>
</div>
<!-- Categories -->
<!-- Products -->



<div class="container-fluid" id="home-popular">
  <div class="container">
    <div class="row">
    <h3 id="home-cat-heading justify-content-center">Popular Items</h3>
      <div class="owl-carousel owl-theme owl-loaded" id="pop-itemm">
        <?php
        $name="Frize";
        $price="80";
        $id="1";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\36645-0w600h600_Frize_Soft_Drink_From_Portugal_With_Lemon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
        $name="Blue Sky";
        $price="100";
        $id="2";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\a2502263-18fe-4fd5-85ef-7928e7bcbca4.5170b33444a278fd65cfbf96b4a1ae99.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
        $name="Top";
        $price="50";
        $id="3";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\brand542.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
        $name="Mockup lemonade";
        $price="90";
        $id="4";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\Glossy-Slim-Soda-Can-Mockup-Set-02.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
        $name="Surge Cola";
        $price="85";
        $id="5";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\fwx-surge-cola.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
        $name="Lemon Soda";
        $price="55";
        $id="6";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\lemonsoda-33cl.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
        $name="Cooloo";
        $price="65";
        $id="7";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\s-pdpxl.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
        
        ?>
      </div>
      <!--owl carousel-->
    </div>
    <!--row-->
  </div>
  <!--Container-->
</div>
<!--fluid-->



<!------ dry banner ------->
<div class="container-fluid" id="dry-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="images/dry-banner.png" alt="">
      </div>
    </div>
  </div>
</div>



<div class="container-fluid" id="all-home-cat">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#strongbeer" type="button" role="tab" aria-controls="home" aria-selected="true">Most Sold</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#gin" type="button" role="tab" aria-controls="contact" aria-selected="false">Sizzling Hoties</button>
        </li>
       
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="strongbeer" role="tabpanel" aria-labelledby="home-tab">
          <div class="owl-carousel owl-theme">
            <?php
            $name="Mockup lemonade";
            $price="90";
            $id="4";
             echo
            '<div class="item">         
              <div class="card">
                <img src="images\mirinda-cream-soda-soft-drink.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
                  <div id="cost">₹'.$price.'</div>
                  
                </div>
                <div class="btn-box">
                    <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                    <div class="wish"><i class="far fa-heart"></i></div>
                </div>
              </div>
            </div>
            ';
            $name="Surge Cola";
            $price="85";
            $id="5";
             echo
            '<div class="item">         
              <div class="card">
                <img src="images\fwx-surge-cola.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
                  <div id="cost">₹'.$price.'</div>
                  
                </div>
                <div class="btn-box">
                    <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                    <div class="wish"><i class="far fa-heart"></i></div>
                </div>
              </div>
            </div>
            ';
            $name="Lemon Soda";
            $price="55";
            $id="6";
             echo
            '<div class="item">         
              <div class="card">
                <img src="images\lemonsoda-33cl.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
                  <div id="cost">₹'.$price.'</div>
                  
                </div>
                <div class="btn-box">
                    <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                    <div class="wish"><i class="far fa-heart"></i></div>
                </div>
              </div>
            </div>
            ';
            $name="Cooloo";
            $price="65";
            $id="7";
             echo
            '<div class="item">         
              <div class="card">
                <img src="images\s-pdpxl.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
                  <div id="cost">₹'.$price.'</div>
                  
                </div>
                <div class="btn-box">
                    <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                    <div class="wish"><i class="far fa-heart"></i></div>
                </div>
              </div>
            </div>
            ';
            ?>
          </div>
          <!--owl carousel-->
        </div><!--tab pane-->

        <div class="tab-pane fade" id="gin" role="tabpanel" aria-labelledby="contact-tab">
          <div class="owl-carousel owl-theme">
            <?php
           $name="Frize";
           $price="80";
           $id="1";
            echo
           '<div class="item">         
             <div class="card">
               <img src="images\36645-0w600h600_Frize_Soft_Drink_From_Portugal_With_Lemon.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
                 <div id="cost">₹'.$price.'</div>
                 
               </div>
               <div class="btn-box">
                   <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                   <div class="wish"><i class="far fa-heart"></i></div>
               </div>
             </div>
           </div>
           ';
           $name="Blue Sky";
        $price="100";
        $id="2";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\a2502263-18fe-4fd5-85ef-7928e7bcbca4.5170b33444a278fd65cfbf96b4a1ae99.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
        $name="Top";
        $price="50";
        $id="3";
         echo
        '<div class="item">         
          <div class="card">
            <img src="images\brand542.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$name.'</h5><hr class="w-50 text-center">
              <div id="cost">₹'.$price.'</div>
              
            </div>
            <div class="btn-box">
                <a onclick="add_to_cart('.$id.',\''.$name.'\','.$price.')" class="btn btn-sm btn-cart-hm">Add to Cart</a>
                <div class="wish"><i class="far fa-heart"></i></div>
            </div>
          </div>
        </div>
        ';
           
           
           ?>
          </div>
          <!--owl carousel-->
        </div><!--tab pane-->


          </div>
          <!--owl carousel-->
        </div><!--tab pane-->
      </div>
      </div><!--12-->
    </div><!--row-->
  </div><!--container-->
</div><!--fluid-->



<div class="container-fluid" id="home-brand">
  <div class="container">
  <div class="row">
      <div class="col-md-6">
        <h3 id="home-cat-heading">Popular Brands</h3>
      </div>
      <div class="col-md-6">
      
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel owl-theme owl-two" id="brand">
          <?php
          $service_url     = 'https://admin.tallidrinks.com/api/guest/categories?lat=19.2180&long=72.9781';
          $curl            = curl_init($service_url);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_POST, false);
          curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
          $curl_response   = curl_exec($curl);
          curl_close($curl);
          $json_objekat    = json_decode($curl_response);
          $brands          = $json_objekat->data->popular_brands;
          foreach($brands as $intKey=>$objskey){
              echo
          '<div class="item">         
            <div class="card">
              <img src="'.$objskey->image_full_path.'" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">'.$objskey->name.'</h5>
            </div>
          </div>
          </div>';}?>
        </div>
        <!--owl carousel-->
      </div>
    </div>
  </div>
</div>




<div class="container-fluid" id="home-party">
  <div class="row">
    <div class="col-md-6" id="home-party-img">
      <img src="images/home-party.jpg" class="center" alt="">
    </div>
    <div class="col-md-6 d-flex" id="home-party-right">
      <div class="home-party-box align-self-center">
        <h3>Party Tonight? Don't worry let's <span style="color: #FE0300;">Talli</span></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit efficitur dui vel tristique.</p>
        <button class="btn btn-lg home-order-btn hvr-sweep-to-right">Order Now &nbsp;<i
            class="fas fa-arrow-right"></i></button>
      </div>
    </div>
  </div>
</div>



<div class="container-fluid" id="step">
  <div class="container">
    <div class="row">
      <div class="col-md-3"><img src="images/step1.png" class="hvr-grow" /></div>
      <div class="col-md-3"><img src="images/step2.png" class="hvr-grow" /></div>
      <div class="col-md-3"><img src="images/step3.png" class="hvr-grow" /></div>
      <div class="col-md-3"><img src="images/step4.png" class="hvr-grow" /></div>
    </div>
  </div>
</div>


<div class="container-fluid nopad" id="testimonials">
  <div class="row nopad">
    <div class="col-md-12 nopad">

    </div>
  </div>
</div>


<div class="container-fluid nopad" id="coming">
  <div class="row nopad">
    <div class="col-md-12 nopad">
      <img src="images/soon-coming.jpg" alt="" class="w-100">
    </div>
  </div>
</div>



<?php
    require('footer.php');
?>