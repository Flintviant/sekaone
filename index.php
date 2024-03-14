<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

	<?php include 'head.php'; ?>

	<?php include 'config.php'; ?>

	<body>

		<?php include 'nav.php'; ?>	

		<?php include 'hero.php'; ?>

		<div class="untree_co-section container">
        	<div class="row">
                <div class="col-12 col-md-6 col-lg-6 mb-5 mb-md-0">
                	<h2 style="color: seagreen;">About Us</h2>
                    <h5 class="mb-4">
                        PT Multi Sekawan Internasional is an international scale trading company that conducts business activities by selling various kinds of Rattan products such as Rattan Webbing, Handicrafts, Home Decor etc.
                    </h5>
                    <a href="about.php" type="button" class="btn btn-custom" style="width:100%;background-color: seagreen;">Explore</a>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-md-0">
                    <img src="assets/sekaone.jpg"  class="img-fluid">
                </div>
            </div>
	    </div>
	    
	    <div class="container-fluid text-center">
	    	<img src="assets/gambardipagehome.jpg" style="max-width:100%;" alt="gambar rotan banyak">
	    </div>
	    

		<div class="container-fluid mt-3">
		  <h2 style="color: seagreen;">Products</h2>
		   <section class="customer-logos slider">
		      <div class="slide"><img src="images/openrattan.png" alt="openrattan"></div>
		      <div class="slide"><img src="images/squarerattan.png" alt="squarerattan"></div>
		      <div class="slide"><img src="images/closerattan.png" alt="closerattan"></div>
		      <div class="slide"><img src="images/closexita.png" alt="closexita"></div>
		      <div class="slide"><img src="images/flower.png" alt="flower"></div>
		      <div class="slide"><img src="images/focrat.png" alt="focrat"></div>
		      <div class="slide"><img src="images/mita4row.png" alt="mita4row"></div>
		   </section>
		</div>

		<!-- Start We Help Section -->
		<div class="we-help-section container-fluid">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="assets/wehelp1.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="assets/wehelp2.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="assets/wehelp3.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4" style="color: seagreen;">Advantages Of Rattan Webbing</h2>
						<p>
							Rattan webbing is a type of material made from the woven strands of the rattan plant. Here are some advantages of rattan webbing :
						</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Strong and Durable</li>
							<li>Lightweight</li>
							<li>Water Resistant</li>
							<li>Easy to Form</li>
							<li>Eco-Friendly</li>
							<li>Aesthetics</li>
						</ul>
						<p><a href="services.php" class="btn btn-custom" style="background-color:seagreen;" target="blank__">Explore</a></p>
					</div>
				</div>
		</div>
		<!-- End We Help Section -->

		<div class="we-help-section container-fluid">
				<div class="row justify-content-between">
					<div class="col-lg-4 ps-lg-5">
						<h3 class="section-title mb-4" style="color: seagreen; text-align: left;">News & Article</h3>
						<h5 style="text-align: left;">
							Follow and read our articles to find out about rattan cane webbing and others.
						</h5>
					</div>
					<div class="row col-lg-8 mb-5 mb-lg-0">
						<?php foreach ($blog as $blog) { ?>
							<div class="col-6">
								<div class="card">
									<div class="card-body text-center">
										<a href="">
											<img src="<?=$defaulturl?>newsportal/admin/postimages/<?=$blog['PostImage']?>" style="width:100%;">
										</a>
										<ul class="list-inline mt-3">
					                        <li class="list-inline-item"><i class="fas fa-user"></i> <?=$blog['postedBy']?></li>
					                        <li class="list-inline-item"><i class="far fa-clock"></i> <?=$blog['PostingDate']?></li>
					                    </ul>
					                    <hr>
					                    <p class="lead"><?=$blog['PostTitle']?></p>
					                    <a class="btn btn-outline-dark my-2" href="<?=$defaulturl?>newsportal/news-details.php?nid=<?=$blog['id']?>" role="button">Read more...</a>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
		</div>

		<div class="we-help-section container-fluid" style="background-color: #EEF3EF"> 			
			<h3 class="text-center mb-5" style="color: seagreen;">Galeri</h3>
			<div class="row">
	            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
	                   data-image="assets/galeri/galeri1.jpg"
	                   data-target="#image-gallery">
	                    <img class="img-thumbnail"
	                         src="assets/galeri/galeri1.jpg"
	                         alt="Another alt text">
	                </a>
	            </div>
	            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
	                   data-image="assets/galeri/galeri2.jpg"
	                   data-target="#image-gallery">
	                    <img class="img-thumbnail"
	                         src="assets/galeri/galeri2.jpg"
	                         alt="Another alt text">
	                </a>
	            </div>

	            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
	                   data-image="assets/galeri/galeri3.jpg"
	                   data-target="#image-gallery">
	                    <img class="img-thumbnail"
	                         src="assets/galeri/galeri3.jpg"
	                         alt="Another alt text">
	                </a>
	            </div>
	            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
	                   data-image="assets/galeri/galeri4.jpg"
	                   data-target="#image-gallery">
	                    <img class="img-thumbnail"
	                         src="assets/galeri/galeri4.jpg"
	                         alt="Another alt text">
	                </a>
	            </div>
	            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
	                   data-image="assets/galeri/galeri5.jpg"
	                   data-target="#image-gallery">
	                    <img class="img-thumbnail"
	                         src="assets/galeri/galeri5.jpg"
	                         alt="Another alt text">
	                </a>
	            </div>

	            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
	                   data-image="assets/galeri/galeri6.jpg"
	                   data-target="#image-gallery">
	                    <img class="img-thumbnail"
	                         src="assets/galeri/galeri6.jpg"
	                         alt="Another alt text">
	                </a>
	            </div>
	            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
	                   data-image="assets/galeri/galeri7.jpg"
	                   data-target="#image-gallery">
	                    <img class="img-thumbnail"
	                         src="assets/galeri/galeri7.jpg"
	                         alt="Another alt text">
	                </a>
	            </div>
	            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
	                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
	                   data-image="assets/galeri/galeri8.jpg"
	                   data-target="#image-gallery">
	                    <img class="img-thumbnail"
	                         src="assets/galeri/galeri8.jpg"
	                         alt="Another alt text">
	                </a>
	            </div>
	        </div>
	        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	            <div class="modal-dialog modal-lg">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <h4 class="modal-title" id="image-gallery-title"></h4>
	                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
	                        </button>
	                    </div>
	                    <div class="modal-body">
	                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
	                    </div>
	                    <div class="modal-footer">
	                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
	                        </button>

	                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
	                        </button>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
		
		<?php include 'footer.php'; ?>	

		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/galeri.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			    $('.customer-logos').slick({
			        slidesToShow: 3,
			        slidesToScroll: 1,
			        autoplay: true,
			        autoplaySpeed: 1500,
			        arrows: false,
			        dots: false,
			        pauseOnHover: false,
			        responsive: [{
			            breakpoint: 768,
			            settings: {
			                slidesToShow: 2
			            }
			        }, {
			            breakpoint: 520,
			            settings: {
			                slidesToShow: 1
			            }
			        }]
			    });
			});
		</script>
		<!--<script>
			document.addEventListener("contextmenu", function(e){
				e.preventDefault();
			}, false);
		</script>-->
	</body>

</html>
