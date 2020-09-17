<?php namespace ProcessWire;
//đưa tất cả các trang về giấy ra đây
$thePage = pages()->get("template=web-settings");


?>

   <div class="uk-padding-left">
      <h3 class="widget-title"><span>Về 123in</span></h3>     
      <ul>
         <?php
         foreach ($thePage->nav_menu_repeaters as $item)
         {
            if ($item->type == "footer_about_123in")
            {
            ?>
            <li> <a href="<?=$item->url_link?>"><?=$item->title_line?></a></li>
            <?php
            }
         }
         ?>
               
      </ul>
   </div>
