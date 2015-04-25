<?php include('header.php'); ?>
  <section class="page">
    <div class="container">
      <?php include('inc/head.php'); ?>
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <?php story_card(); ?>
        </div>

        <div class="col-xs-12 col-sm-8">
          <?php story_card(); ?>
        </div>
      </div>

    </div>
  </section>

  <section id="related">
    <div class="container">

      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <?php story_card(); ?>
        </div>
        <div class="col-xs-12 col-sm-3">
          <?php story_card(); ?>
        </div>
        <div class="col-xs-12 col-sm-3">
          <?php story_card(); ?>
        </div>
        <div class="col-xs-12 col-sm-3">
          <?php story_card(); ?>
        </div>

        
      </div>

    </div>
  </section>
<?php include('footer.php'); ?>