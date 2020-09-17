<?php namespace ProcessWire;

$pageItem = pages()->get("/web-settings/");

?>

   <div class="widget">
      <h3 class="widget-title"><span>Liên kết hữu ích</span></h3>
      <ul>        
      <?php
      foreach ($pageItem->nav_menu_repeaters as $item)
      {
         if ($item->type == 'useful_menu_list')
         {
       ?> 
            
            <li>
            <a href="<?=$item->url_link?>" target="<?=trim($item->a_tag_attr_target)?>"><?=$item->title_line?></a>
            </li>
                    
            <?php
         }
         }
          ?>
      </ul>
   </div>
