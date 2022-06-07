<?php /*  Template Name: Template About Us  */ ?>
<?php get_header();?>
<!-- SIDANS TITELNAMN -->
<?php $about_head = get_field("about_head"); ?>
<section class="p-5 a-color">
  <div class="container">
  <div class="jumbotron jumbotron-fluid">
    <h1 class="display-1 text-warning text-center"><?php echo $about_head['about_head_title'];?></h1>
  </div>
  </div>
</section>
<?php $about = get_field("about"); ?>
<section class="p-5 a-color text-warning">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md">
        <img class="animate__animated animate__rotateInDownLeft" src="<?php echo $about['about_img'];?>" alt="">
      </div>
      <div class="col-md p-5">
        <h2 class="animate__animated animate__rotateInDownRight"><?php echo $about['about_title'];?></h2>
        <p class="lead text-start my-4 animate__animated animate__rotateInDownRight"><?php echo $about['about_text'];?></p>
        <a class="btn btn-outline-warning btn-lg" href="<?php echo $about['about_link'];?>"><?php echo $about['about_link_name'];?></a>
      </div>      
    </div>
  </div>
</section>
<?php $dreamteam = get_field("dreamteam"); ?>
<section class="p-5 text-center">
  <div class="container">
  <div class="jumbotron jumbotron-fluid">
    <h1 class="display-4 text-warning text-center"><?php echo $dreamteam['dream_title'];?></h1>
    <p class="lead text-dark"><?php echo $dreamteam['dream_text'];?></p>
    <hr class="my-4 bg-warning">
    <p class="lead text-dark">
      <a class="btn btn-outline-dark btn-lg" href="<?php echo $dreamteam['dream_btn_link'];?>" role="button"><?php echo $dreamteam['dream_btn_text'];?></a>
    </p>
  </div>
  </div>
</section>
<?php $team_leaders = get_field("team_leaders"); ?>
<section class="p-5">
    <div class="container">
        <div class="row text-center g-4">
            <?php foreach($team_leaders as $sub_field): ?>
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body a-color text-center">
                        <div class="h1 mb-3">
                            <img src="<?php echo $sub_field["team_img"];?>" alt="">
                        </div>
                        <h3 class="card-title mb-3"><?php echo $sub_field["team_name"];?></h3>
                        <p class="card-text"><?php echo $sub_field["team_text"];?></p>
                        <a href="<?php echo $sub_field["team_link"];?>" class="btn btn-outline-warning"><?php echo $sub_field["team_link_name"];?></a>
                        <div class="h1 my-3 text-warning">
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="bg-warning text-dark p-5">
  <div class="container">
    <div class="d-md-flex justify-content-between align-items-center">
      <h3 class="mb-3 mb-md-0">Get In Touch</h3>
      <div class="input-group news-input">
      <input type="email" class="form-control" placeholder="Email här.." id="email">
  <button class="btn btn-dark btn-lg" type="button">SKICKA</button>
</div>
    </div>
  </div>
</section>
<?php $about2 = get_field("about2"); ?>
<section class="p-5 text-warning">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md p-5">
        <h2 class="animate__animated animate__rotateInDownLeft"><?php echo $about2['about_title_2'];?></h2>
        <p class="lead text-start my-4 text-dark animate__animated animate__rotateInDownLeft">
        <?php echo $about2['about_text_2'];?>
        </p>
        <p class="text-dark text-start animate__animated animate__rotateInDownLeft">
        <?php echo $about2['about_text_3'];?>
        </p>
        <a class="btn btn-outline-warning btn-lg" href="<?php echo $about2['about_link_2'];?>"><?php echo $about2['about_link_name_2'];?></a>
      </div>
      <div class="col-md animate__animated animate__rotateInDownRight">
        <img src="<?php echo $about2['about_img_2'];?>" alt="">
      </div>      
    </div>
  </div>
</section>
<?php get_footer();?>