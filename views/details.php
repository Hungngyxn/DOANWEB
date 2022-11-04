<?php require_once("header.php")
?>


            <main class="content dynamic-container row">
                
 <?php 
                        if(isset($_GET['productid'])){
                            require_once($_SERVER['DOCUMENT_ROOT']."/CONCASAU/DOAN/controllers/detail_controller.php");
                            $controller = new DetailController();
                            $controller->product_detail_invoke($_GET['productid']);
                        }
?> 
            
            </main>
            <div class="container-fluid padding">
                    <div class="row text-center padding">
                        <div class="col-12">
                            <h2>Connect</h2>
                        </div>
                        <div class="col-12 social padding">
                            <a href="https://www.facebook.com/DHKT.UEH" target="_blank"> <i class="fab fa-facebook"></i> </a>
                            <a href="#"> <i class="fab fa-twitter"></i> </a>
                            <a href="#"> <i class="fab fa-instagram"></i> </a>
                            <a href="https://www.youtube.com/c/UEHChannel" target="_blank"> <i class="fab fa-youtube"></i> </a>                
                        </div>
                    </div>
                </div>

                <footer>
            <div class="container-fluid padding">
                <div class="row text-center">
                    <div class="col-md-4 col-sm-12">
                        <hr class="light" />
                        <h5>Contact Us</h5>
                        <hr class="light" />
                        <p>0948 999 999</p>
                        <p>269 Nguyễn Tri Phương</p>
                        <p>Quận 10, Thành phố Hồ Chí Minh</p>
                    </div>
                    <div class="col-md-4 d-none d-sm-block">
                        <hr class="light" />
                        <h5>Office Hours</h5>
                        <hr class="light" />
                        <p>Mon - Sar: 8:00 - 17:00</p>
                        <p>Sun: Closed</p>
                    </div>  
                    <div class="col-md-4 d-none d-sm-block">
                        <hr class="light" />
                        <h5>Regional Offices</h5>
                        <hr class="light" />
                        <p>Quận 10, Hồ Chí Minh</p>
                        <p>Quận 3, Hồ Chí Minh</p>
                        <p>Huyện Bình Chánh, Hồ Chí Minh</p>
                        <p>Vĩnh Long</p>
                    </div>
                    <div class="col-12">
                        <hr class="light-100" />
                        <h5>&copy; H&A Corp, 2022</h5>
                    </div>
                </div>
            </div>
        </footer>

        </div>
    </body>
</html>