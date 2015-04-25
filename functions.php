<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once 'functions/example.php';
include_once 'functions/story-templates.php';
include_once 'functions/ad-templates.php';



// Variables
// $tdir = get_template_directory_uri();
// define('TDIR', $tdir);

// $theme = get_template_directory_uri();
// define('THEME', $theme);

// $root = get_template_directory();
// define('ROOT', $root);

// Includes Path
// $inc = $root . '/inc/';
// define('INC', $inc);



$data_path = './data/100-best.json';

function get_data($data_path){
  $fullscript = file_get_contents($data_path);
  $script = json_decode($fullscript,true);
  return $script;
}

$data = get_data($data_path);
$list_data = $data['list-items'];


function element_head($v){
  echo <<< EOF
    <div class="row element-head">
      <div class="col-xs-12">
        <h4>$v</h4>
      </div>
    </div>
EOF;
}


function story_card($num, $type){
  $n = array(1,2,3,4,5);
  // element_head($head);

  $col = '';
  if ($num < 11) {
    $col = 'col-sm-'.$num;  # code...
  }
  
  echo '<div class="col-xs-12 '.$col.'">';
  call_user_func('w'.$num.$type, $num, $type);
  echo '</div>';
}

function template_type($num, $type){
  echo '<div class="t_tag">w'.$num.$type.'</div>';
}


function get_media($size){
  if (empty($size)) {
    return <<< EOF
    <div class="media">
      <a href="#"><img src="https://fortunedotcom.files.wordpress.com/2015/03/tim0315_c2.jpg?quality=80&w=1200&h=700&crop=1" class="img-responsive" /></a>
    </div>
EOF;
  } else {
    $wh =  explode('|', $size);
    $width = $wh[0];
    $height = $wh[1];
    return <<< EOF
    <div class="media">
      <a href="#"><img src="https://fortunedotcom.files.wordpress.com/2015/03/tim0315_c2.jpg?quality=80&w=$width&h=$height&crop=1" class="img-responsive" /></a>
    </div>
EOF;
  }

}

function get_kicker(){
  return <<< EOF
  <h6 class="kicker"><a href="#">Leadership</a></h6>
EOF;
}

function get_date(){
  return <<< EOF
  <p class="date"><a href="#">6 hours ago</a></p>
EOF;
}

function get_deck(){
  return <<< EOF
  <h4 class="deck">The crazy, real-life billionaire that inspired Mr. Burns</h4>
EOF;
}

function get_summary(){
  return <<< EOF
  <div class="summary">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. <a href="#" class="more">Read&nbsp;more...</a></p>
  </div>
EOF;
}


function get_native_ad(){
  date_default_timezone_set('UTC');
  $file =  date('Y'). date('m') . date('d') . '.txt';
  $path = dirname(__FILE__) . '/../native-ads/' . $file;

  if (file_exists($path)) {
    $myfile = fopen($path, "r") or die("Unable to open file!");
    $data = fread($myfile,filesize($path));
    echo <<< EOF
    <div class="newsletter-item ad-native">
      $data
    </div>
EOF;
    fclose($myfile);  
  }
  return;
}

// print_r($list_data);



