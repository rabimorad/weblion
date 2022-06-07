<?php get_header(); ?>
<?php $front_contents = get_field ("front_contents"); ?>
<section class="p-5 a-color text-warning">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md">
        <img class="animate__animated animate__rotateInDownLeft" src="<?php echo $front_contents['front_img'];?>" alt="">
      </div>
      <div class="col-md p-5 text-center">
        <h1 class="display-1 animate__animated animate__rotateInDownRight"><?php echo $front_contents['front_title'];?></h1>
        <hr class="my-4 bg-warning">
        <a class="btn btn-outline-warning btn-lg" href=<?php echo $front_contents['front_btn_link'];?>><?php echo $front_contents['front_btn'];?></a>
      </div>      
    </div>
  </div>
</section>
<?php get_footer(); ?>
