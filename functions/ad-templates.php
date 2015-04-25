<?php 

function get_ad($type, $id){
  if (!empty($id)) {
    $id = 'id="'.$id.'"';
  }
  if ($type == 'ad-big') {
    echo <<< EOF
    <div class="ad-wrap $type">
      <div $id class="ad $type block" data-size="360|300"></div>
    </div>
EOF;
  }
  if ($type == 'ad-banner') {
    echo <<< EOF
    <div class="ad-wrap $type">
      <div $id class="ad $type block" data-size="750|100"></div>
    </div>
EOF;
  }
}