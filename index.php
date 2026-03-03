<?php 

include("nav.php");

?>

        <!-- home content -->
        <section class="home">
            <div class="content">
                <h3>Biggest Clothe Sale
                    <br> <span>Up To 50% Off</span>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque culpa, totam sed maxime animi facilis!</p>
                <button id="shopnow">Shop Now</button>
            </div>
            <div class="img">
                <img src="./image/b2.png" alt="">
            </div>
        </section>
        <!-- home content -->


    </div>

    <!-- top cards -->
    <div class="container" id="top-cards">
        <div class="row">
            
            
            <div class="col-md-5 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard1.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Smart Watch</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ratione!</p>
                        <p><strong>$200.30 <strike>$250.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>



            <div class="col-md-4 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard2.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Nike Shoes</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, ratione!</p>
                        <p><strong>$150.10 <strike>$200.10</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>


            <div class="col-md-3 py-3 py-md-0">
                <div class="card" style="background-color: #a9a9a926;">
                    <img src="./image/topcard3.png" alt="">
                    <div class="card-img-overlay">
                        <h5 class="card-titel">Bag</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p><strong>$50.10 <strike>$60</strike></strong></p>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- top cards -->
    

    <!-- banner -->
    <div class="banner">
        <div class="content">
            <h1>Get Up To 50% Off</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, animi?</p>
            <div id="bannerbtn"><button>SHOP NOW</button></div>
        </div>
    </div>
    <!-- banner -->


    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center">PRODUCT</h1>
        <div class="row" style="margin-top: 30px;">

            <?php
                $getproduct = "SELECT * FROM product limit 8";
                $res = mysqli_query($conn, $getproduct);
                while($data = mysqli_fetch_assoc($res)):
            ?>

            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="./image/<?php echo $data['img'] ?>" alt="">
                    <div class="card-body">
                        <h3><?php echo $data['name'] ?></h3>
                        <p><?php echo $data['des'] ?></p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5><?php echo $data['price'] ?> <span><button onclick="addtoCart( '<?php echo $data['name'] ?>' , '<?php echo $data['price'] ?>' , '<?php echo $data['img'] ?>'   )"><i class="fa-solid fa-cart-shopping"></i></button></span></h5>
                    </div>
                </div>
            </div>

            <?php endwhile ?>

        </div>

       



        <a href="clothe.php" id="viewmorebtn">View More</a>

    </div>
    <!-- product cards -->

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
    <hr>
    </div>
    <div class="container">
        <h3 style="font-weight: bold;">PRODUCT.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero eius ipsam incidunt illum totam nostrum quidem sit cumque fugit. Accusamus rem praesentium labore tempore ullam porro quaerat fugiat cum ipsum, sint perferendis voluptate ad, quod reiciendis officia! In voluptate quae expedita sunt eum placeat alias soluta. Rem commodi, impedit error doloribus ratione at provident beatae, aut doloremque sunt possimus voluptas recusandae nam aliquid eos quia minus harum repellat quae eveniet laborum dolore esse voluptate sed. Voluptate ullam dolor sapiente neque labore hic nam odio qui consectetur porro minima nesciunt suscipit vitae obcaecati reiciendis itaque ipsum unde, debitis nemo soluta!</p>

        <hr>
    </div>
    <!-- product -->


    <!-- offer -->
    <div class="container" id="offer">
        <div class="row">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over $100</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                <p>World wide</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Big Choice</h5>
                <p>Of product</p>
            </div>
        </div>
    </div>
    <!-- offer -->
    
<!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">


            <div class="col-lg-3 col-md-6 footer-content">
                <h3>Fashion</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, hic?</p>
                <p>
                    Karcahi <br>
                    Sindh <br>
                    Pakistan <br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+000000000000000</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>example@gmail.com</strong></strong>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Usefull Links</h4>
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Privacy policay</a></li>
                </ul>
            </div>


            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, rem!</p>
                <ul>
                    <li><a href="#">Smart phone</a></li>
                    <li><a href="#">Smart watch</a></li>
                    <li><a href="#">Airpods</a></li>
                </ul>
            </div>


            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Network</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ad?</p>
                <div class="socail-links mt-3">
                    <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>


        </div>
    </div>
</div>


    <hr>
    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong>Fashion</strong>.All Rights Reserved
        </div>
        <div class="credits">
            Designed By <a href="#">SA coding</a>
        </div>
    </div>


</footer>
<!-- footer -->

<script src="./app.js"></script>

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>