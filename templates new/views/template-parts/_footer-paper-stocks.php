<?php namespace ProcessWire;
$pageItem = pages()->get("/web-settings/");

?>

   <div class="widget">
      <h3 class="widget-title"><span>Giấy sử dụng</span></h3>
      <ul>         
      <?php
      foreach ($pageItem->nav_menu_repeaters as $item)
      {
         if ($item->type == 'paper_stock_list')
         {
       ?> 
            
            <li>
            <a href="<?=$item->url_link?>"><?=$item->title_line?></a>
            </li>
                    
            <?php
         }
         }
          ?>
      </ul>
   </div>
