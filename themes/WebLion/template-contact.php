<?php /*  Template Name: Template Contact  */ ?>
<?php get_header();?>
<?php $contact_head = get_field("contact_head"); ?>
<section class="p-5 a-color">
  <div class="container">
  <div class="jumbotron jumbotron-fluid">
    <h1 class="display-1 text-warning text-center"><?php echo $contact_head['contact_head_title'];?></h1>
  </div>
  </div>
</section>
<?php $contact_section = get_field("contact_section"); ?>
<section class="a-color text-light p-5 text-center text-sm-start">
  <div class="container">
    <div class="d-sm-flex align-items-center justify-content-between">
      <div>
        <h1><?php echo $contact_section['contact_title'];?> <span class="text-warning"><?php echo $contact_section['contact_span'];?></span></h1>
        <p class="lead my-4 text-start"><?php echo $contact_section['contact_text'];?></p>
        <button type="button" class="btn btn-outline-warning btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Klicka Här</button>
        <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-warning">
                  <h5 class="modal-title text-dark " id="exampleModalLabel">Get in Touch</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border border-warning">
                  <p class="text-dark">Fyll i dina kontaktuppgifter så återkopplar vi inom kort.</p>
                  <form>
                    <div class="mb-3">
                      <label for="first-name" class="col-form-label text-dark">Förnamn:</label>
                      <input type="text" class="form-control" id="first-name">
                    </div>
                    <div class="mb-3">
                      <label for="last-name" class="col-form-label text-dark">Efternamn:</label>
                      <input type="text" class="form-control" id="last-name">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="col-form-label text-dark">Email:</label>
                      <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="col-form-label text-dark">Telefon:</label>
                      <input type="tel" class="form-control" id="phone">
                    </div>
                  </form>
                </div>
                <div class="modal-footer a-color border border-warning">
                  <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Avbryt</button>
                  <button type="button" class="btn btn-outline-warning">Skicka</button>
                </div>
              </div>
            </div>
          </div>
      </div>
      <img class="img-fluid w-50 d-none d-sm-block" src="<?php echo $contact_section['contact_img'];?>" alt="">
    </div>
  </div>
</section>
<!-- NewsLetter -->
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
<section class="p-5 a-color">
  <div class="container">

  </div>
</section>
<?php get_footer();?>