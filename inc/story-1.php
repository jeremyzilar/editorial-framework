<?php 
  function t_8(){
    $media = get_media();
    echo <<< EOF
    <div class="story story-1">
      $media
      <h6><a href="#">Rubric</a></h6>
      
      <h3 class="head">1 The crazy, true-life adventures of Norway's most radical billionaire</h3>
      
      <h4 class="sub-head">Deck Lorem Ipsum</h4>
      
      <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

      <div class="summary">
        <p><span class="dateline">Paris</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="more">Read more...</a></p>
      </div>

      <p class="date"><a href="#">6 hours ago</a></p>
    </div>
EOF;
  }
?>
