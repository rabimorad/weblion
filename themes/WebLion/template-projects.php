<?php /*  Template Name: Template Projects  */ ?>
<?php get_header();?>
<!-- SIDANS TITELNAMN -->
<?php $project_head = get_field("project_head"); ?>
<section class="p-5 a-color">
  <div class="container">
  <div class="jumbotron jumbotron-fluid">
    <h1 class="display-1 text-warning text-center"><?php echo $project_head['project_head_title'];?></h1>
  </div>
  </div>
</section>
<!-- Sektioner med bild o text -->
<?php $project_section = get_field("project_section"); ?>
<section class="p-5 a-color text-warning">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md">
        <img src="<?php echo $project_section['project_img'];?>" alt="">
      </div>
      <div class="col-md p-5">
        <h2><?php echo $project_section['project_title'];?></h2>
        <p class="lead text-start my-4"><?php echo $project_section['project_text'];?></p>
        <p class="text-start my-4"><?php echo $project_section['project_text_xtra'];?></p>
      </div>      
    </div>
  </div>
</section>
<!-- BOXAR MED BILD, TEXT OCH LÄNKAR -->
<?php $project_leaders = get_field("project_leaders"); ?>
<section class="p-5 a-color">
    <div class="container">
        <div class="row text-center g-4">
        <?php foreach($project_leaders as $sub_field): ?>
            <div class="col-md-4">
                <div class="card bg-warning text-dark">
                    <div class="card-body text-center">
                        <div class="h1 border border-dark mb-3">
                            <img src="<?php echo $sub_field["pro_img"];?>" alt="">
                        </div>
                        <h3 class="card-title mb-3"><?php echo $sub_field["pro_name"];?></h3>
                        <p class="card-text text-dark"><?php echo $sub_field["pro_text"];?></p>
                        <a href="<?php echo $sub_field["pro_link"];?>" class="btn btn-outline-dark"><?php echo $sub_field["pro_link_name"];?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Sektioner med bild o text -->
<?php $project_section_2 = get_field("project_section_2"); ?>
<section class="p-5 text-warning">
  <div class="container">
    <div class="row align-items-center justify-content-between">
    <div class="col-md">
        <img src="<?php echo $project_section_2['project_img_2'];?>" alt="">
      </div> 
      <div class="col-md p-5">
        <h2><?php echo $project_section_2['project_title_2'];?></h2>
        <p class="lead text-dark"><?php echo $project_section_2['project_text_2'];?></p>
        <p class="text-dark"><?php echo $project_section_2['project_text_3'];?></p>
        <a class="btn btn-outline-dark btn-lg" href="<?php echo $project_section_2['project_link_2'];?>"><?php echo $project_section_2['project_link_name_2'];?></a>
      </div>
      <div class="col-md">
        <img src="<?php echo $project_section_2['project_img_3'];?>" alt="">
      </div>      
    </div>
  </div>
</section>
<?php get_footer();?>