<!-- HEADER STARTS -->
<?php include "includes/config.php" ?>
<?php include "includes/header.php" ?>
<!-- HEADER ENDS -->
        <main>
            <section class="projectGallery">
                <h2>Recent Project Galleries</h2>
                <div class="ref-wrapper">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="galleryName">
                                <a href="#">name of the Galleries #1</a>
                            </div>
                            <div class="galleryItem">
                                <img src="imgs/1.jpg" class="d-block w-100" alt="galler #1">
                            </div>
                        </div>
                
                        <div class="carousel-item">
                            <div class="galleryName">
                                <a href="#">name of the Galleries #2</a>
                                </div>
                            <div class="galleryItem">
                                <img src="imgs/3.jpg" class="d-block w-100" alt="galler #2">
                            </div>
                        </div>
                    
                        <div class="carousel-item">
                            <div class="galleryName">
                                <a href="#">name of the Galleries #3</a>
                                </div>
                            <div class="galleryItem">
                                <img src="imgs/5.jpg" class="d-block w-100" alt="galler #3">
                            </div>
                        </div>
                    </div>
                
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div></div>
            </section>

            <section class="interiorDesign"> 
                <h2>Interior Design Service</h2>
                <div class="grid-container interiorSection"> 
                    <div class="grid-item">
                        <a href="#"><img src="imgs/6.jpg" alt="4"></a>
                        <h3><a href="#">Interior Gallery</a></h3>
                    </div>
                    <div class="grid-item">
                        <a href="#"><img src="imgs/6.jpg" alt="5"></a>
                        <h3><a href="#">Video</a></h3>
                    </div>
                    <div class="grid-item">
                        <a href="interior-design/index.php"><img src="imgs/6.jpg" alt="6"></a>
                        <h3><a href="#">Learn More</a></h3>
                    </div>
                </div>
            </section>

            <section class="photography"> 
                <h2>Photography Service</h2>
                <div class="grid-container photographySection"> 
                    <div class="grid-item">
                        <a href="#"><img src="imgs/4.jpg" alt="4"></a>
                        <h3><a href="#">Photography Gallery</a></h3>
                    </div>
                    <div class="grid-item">
                        <a href="photography/index.php"><img src="imgs/4.jpg" alt="5"></a>
                        <h3><a href="#">Learn More</a></h3>
                    </div>
                </div>
            </section>
        </main>
<!-- FOOTER STARTS -->
<?php include "includes/footer.php" ?>
<!-- FOOTER ENDS -->