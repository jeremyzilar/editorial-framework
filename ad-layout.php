<?php include('header.php'); ?>
  <section id="board" class="page">
    <div class="container">
      
      <div class="row">
        <div class="col-xs-12">
          <div class="page-head block"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <div class="visible-sm-block">
            <?php get_ad('ad-banner', ''); ?>
          </div>
          <div class="visible-md-block">
            <?php get_ad('ad-banner', ''); ?>
          </div>
          <div class="visible-lg-block">
            <?php get_ad('ad-banner', ''); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <?php story_card('8','a'); ?>

        <div class="col-xs-12 col-sm-4">
          
          <?php get_ad('ad-big', 'ad1'); ?>

          <div class="related-box">
            <div class="related ad-native block"></div>
            <div class="related block"></div>
            <div class="related block"></div>
            <div class="related block"></div>
            <div class="related block"></div>            
          </div>

          <?php get_ad('ad-big', ''); ?>
          
        </div>
      </div>

    </div>
  </section>

<?php include('footer.php'); ?>