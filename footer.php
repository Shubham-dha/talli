<!-- Footer -->
<footer>
  <div class="container-fluid" id="foot">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <h4>Company</h4>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" ">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" ">Career</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" ">Team</a>
            </li>
          </ul>
        </div>
        <div class="col-md-2">
          <div class="footer-item">
            <h4>Contact</h4>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=" ">Help & Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Partner with us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=" ">Ride with us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <div class="footer-item">
            <h4>Legal</h4>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=" ">Terms & Conditions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Refund & Cancellation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-item">
            <h4>Contact Us</h4>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> <i
                    class="fas fa-map-marker-alt fa-lg"></i></i>&nbsp; &nbsp;Thane</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-phone-alt fa-lg"></i>&nbsp; &nbsp;+91-9930928381</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="far fa-envelope fa-lg"></i>&nbsp; &nbsp;info@talli.com</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-item  social">
            <h4>Connect With Us</h4>
            <a href=" " target="_blank"><i class="fab fa-facebook"></i></a>
            <a href=" " target="_blank"><i class="fab fa-twitter"></i></a>
            <a href=" " target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>

      <div class="row" style="margin-top: 70px;">
          <div class="col-md-4">
            <h4>Download The App</h4>
            <img src="images/play-store.jpg" class="nav-link img-fluid" alt="...">
          </div>
          <div class="col-md-4">
            <h4>100% Secure Payment</h4>
            <img src="images/payment.png" class="nav-link img-fluid" alt="...">
          </div>
          <div class="col-md-4">
            <h4>Get In touch</h4>
              <div class="input-group mb-3">
                <input type="text" class="form-control footer-search" placeholder="Enter Your Email Id"
                  aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-foot" type="button" id="button-addon2">Send</button>
              </div>
          </div>
      </div>
    </div>
    <hr style="border: 1px solid #c2c2c2;">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h4>We Deliver To</h4>
          </div>
          <div class="col-md-9">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Mumbai</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Navi Mumbai</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Thane</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
</footer>


<!-- End Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!---- jequery -------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!----Owl carousel--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
        document.getElementById('header-menu').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('header-menu').classList.remove('fixed-top');
        // remove padding top from body
        document.body.style.paddingTop = '0';
      }
    });
  });
</script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    dots:false,
    nav: true,
    navText: ['<i class="fas fa-chevron-circle-left fa-2x"></i>','<i class="fas fa-chevron-circle-right fa-2x"></i>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  })


  $('.owl-two').owlCarousel({
    loop: true,
    margin: 10,
    dots:false,
    nav: false,
    navText: ['<i class="fas fa-chevron-circle-left fa-2x"></i>','<i class="fas fa-chevron-circle-right fa-2x"></i>'],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 6
      }
    }
  })
</script>

<!-- Custom Scripts
  <script src="./js/products.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script> -->
</body>

</html>