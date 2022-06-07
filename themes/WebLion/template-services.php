<?php /*  Template Name: Template Services  */ ?>
<?php get_header();?>
<?php $service_head = get_field("service_head"); ?>
<section class="p-5 a-color">
  <div class="container">
  <div class="jumbotron jumbotron-fluid">
    <h1 class="display-1 text-warning text-center"><?php echo $service_head['service_head_title'];?></h1>
  </div>
  </div>
</section>
<!-- Sektioner med bild o text -->
<?php $service1 = get_field("service1"); ?> 
<section class="p-5 a-color text-warning">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md p-5">
        <h2 class="animate__animated animate__rotateInDownLeft"><?php echo $service1['service_title_2'];?></h2>
        <p class="lead text-start my-4  animate__animated animate__rotateInDownLeft">
        <?php echo $service1['service_text_2'];?>
        </p>
        <p class=" text-start animate__animated animate__rotateInDownLeft">
        <?php echo $service1['service_text_3'];?>
        </p>
        <a class="btn btn-outline-warning btn-lg" href="<?php echo $service1['service_link_2'];?>"><?php echo $service1['service_link_name_2'];?></a>

      </div>
      <div class="col-md animate__animated animate__rotateInDownRight">
        <img src="<?php echo $service1['service_img_2'];?>" alt="">
      </div>      
    </div>
  </div>
</section>
<div class="client-slider">
	<div class="client-slide-track">
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="client-slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
	</div>
</div>
<?php $carousels = get_field("carousels"); ?>
<section class="p-5 a-color">
  <div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $carousels['carousel_img'];?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-dark"><?php echo $carousels['carousel_title'];?></h1>
        <p class="text-dark"><?php echo $carousels['carousel_text'];?></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $carousels['carousel_img_2'];?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><?php echo $carousels['carousel_title_2'];?></h1>
        <p><?php echo $carousels['carousel_text_2'];?></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo $carousels['carousel_img_3'];?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><?php echo $carousels['carousel_title_3'];?></h1>
        <p><?php echo $carousels['carousel_text_3'];?></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</section>
<?php $expertis = get_field("expertis"); ?>
<section class="p-5 a-color">
  <div class="container">
  <div class="jumbotron jumbotron-fluid">
    <hr class="my-4 bg-warning">
    <h1 class="display-4 text-warning text-center"><?php echo $expertis['expertis_head_title'];?></h1>
    <p class="lead text-center text-warning"><?php echo $expertis['expertis_head_text'];?></p>
  </div>
  </div>
</section>
<!-- BOXAR MED BILD, TEXT OCH LÄNKAR -->
<?php $expertis_leaders = get_field("expertis_leaders"); ?>
<section class="p-5 a-color">
<div class="container">
  <div class="row g-4 gx-5">
    <?php foreach($expertis_leaders as $sub_field): ?>
    <div class="col col-md-4">
     <div class="p-3 a-color">
         <div class="text-center text-warning">
             <i class=" <?php echo $sub_field["expertis_icon"];?>"></i>
             <h1 class="my-4"><?php echo $sub_field["expertis_name"];?></h1>
         </div>
     </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>
</section>
<?php get_footer();?>