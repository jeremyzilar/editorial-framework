<?php 

function w1a($num, $type){
  $media = get_media('200|120');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    <div class="summary">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
    </div>

    $date
  </div>
EOF;
}


function w2a($num, $type){
  $media = get_media('200|120');
  $kicker = get_kicker();
  $date = get_date();
  $summary = get_summary();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    
    $kicker

    <h5 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h5>

    $media

    $summary

    $date
  </div>
EOF;
}

function w2b($num, $type){
  $media = get_media('200|120');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    <h5 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h5>
    $date
  </div>
EOF;
}

function w2c($num, $type){
  $media = get_media('200|120');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $kicker
    $media
    <h5 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h5>
    $date
  </div>
EOF;
}

function w2d($num, $type){
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $kicker
    <h5 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h5>
    $date
  </div>
EOF;
}

function w2e($num, $type){
  $kicker = get_kicker();
  $date = get_date();
  $deck = get_deck();
  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $kicker
    $deck
    $date
  </div>
EOF;
}

function w2f($num, $type){
  $kicker = get_kicker();
  $date = get_date();
  $deck = get_deck();
  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $kicker
    $deck
    $date
  </div>
EOF;
}

function w2g($num, $type){
  $kicker = get_kicker();
  $date = get_date();
  $media = get_media('200|300');
  $deck = get_deck();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    $deck
    $date
  </div>
EOF;
}

function w2h($num, $type){
  $kicker = get_kicker();
  $date = get_date();
  $media = get_media('300|300');
  $deck = get_deck();
  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    $deck
    $date
  </div>
EOF;
}


function w3a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();
  $deck = get_deck();
  $summary = get_summary();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    $deck
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    $summary

    $date
  </div>
EOF;
}

function w3b($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();
  $summary = get_summary();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $kicker
    $media
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    $summary

    $date
  </div>
EOF;
}


function w4a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();
  $summary = get_summary();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    $summary

    $date
  </div>
EOF;
}

function w5a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    <div class="summary">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
    </div>

    $date
  </div>
EOF;
}


function w6a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    <div class="summary">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
    </div>

    $date
  </div>
EOF;
}


function w7a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    <div class="summary">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
    </div>

    $date
  </div>
EOF;
}

function w8a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    <div class="summary">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
    </div>

    $date
  </div>
EOF;
}

function w9a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    <div class="summary">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
    </div>

    $date
  </div>
EOF;
}


function w10a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    <div class="summary">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
    </div>

    $date
  </div>
EOF;
}

function w12a($num, $type){
  $media = get_media('1200|700');
  $kicker = get_kicker();
  $date = get_date();

  template_type($num, $type);

  echo <<< EOF
  <div class="story story-col-$num story-temp-$type">
    $media
    $kicker
    
    <h3 class="head"><a href="#">The crazy, true-life adventures of Norway's most radical billionaire</a></h3>
    
    <h4 class="deck">Deck Lorem Ipsum</h4>
    
    <p class="byline">By <a href="#">Shawn Tully</a> <a class="twitter" href="#"><i class="fa fa-twitter"></i></a></p>

    <div class="summary">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
    </div>

    $date
  </div>
EOF;
}