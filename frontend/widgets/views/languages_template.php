<?php
/* @var $mobile ? */
/* @var $getLinks ? */
/* @var $getmobil ? */

if ($mobile){
    foreach ($getmobil as $mobil){
        echo $mobil;
    }
} else {
    foreach ($getLinks as $link) {
        echo '<li class="" >' . $link . '</li>';
    }
}
