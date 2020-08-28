<?php

namespace ProcessWire;

/**
 * Viết thêm func cho phù hợp theme
 * 
 */

/** @var ProcessWire $wire */
function vcRenderPriceTable(Page $page)
{
    $out = '';
    $table_heading01 = '';
    $table_heading02 = '';
    $table_heading03 = '';
    $table_heading04 = '';
    $tbl_content = '';
    foreach ($page->price_table_repeater as $item) {
        if ($item->type == 'price_table_4c') {
            //Nếu không tắt bảng thì in nó ra
            if (!$item->inactive) {

                $table_heading01 = $item->table_heading_4c->column_01;
                $table_heading02 = $item->table_heading_4c->column_02;
                $table_heading03 = $item->table_heading_4c->column_03;
                $table_heading04 = $item->table_heading_4c->column_04;

                //Tạo bảng phải 4 tiêu đề cột trên và row cũng phải có 4 cột tương ứng
                $tbl_content = ''; //Xong 1 xóa trắng lại
                foreach ($item->price_table_4c as $row) {
                    $tbl_content .= "<tr>
                                    <td>$row->quantity</td>
                                     <td>$row->option_01</td>
                                     <td>$row->option_02</td>
                                     <td>$row->option_03</td>
                                </tr>";
                }
                $out .= "<div class='in-pricing'>
                        <div class='uk-card uk-card-default uk-card-small'>
                            <div class='uk-card-header'>
                                        <h3>$item->headline</h3>
                                        $item->table_top_content
                            </div>
                            <div class='uk-card-body'>
                                    <!-- bảng giá ở đây -->
                                <div class='uk-overflow-auto'>
                                        <table class='uk-table uk-table-small uk-table-striped uk-text-small uk-text-lighter'>
                                            <thead>
                                                <tr>
                                                    <th>$table_heading01</th>
                                                    <th>$table_heading02</th>
                                                    <th>$table_heading03</th>
                                                    <th>$table_heading04</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                $tbl_content
                                            </tbody>
                                        </table>
                                </div>
                                       <!-- bảng giá hết --> 
                                       $item->table_bottom_content
                                        <a href='$item->url_link' class='uk-button uk-button-primary uk-button-large uk-border-rounded'>$item->button_caption</a>
                            </div>
                        </div>
                    </div>";
            } //If
        } //If 4c
        //If table 3c
        if ($item->type == 'price_table_3c') {
            //Nếu không tắt bảng thì in nó ra
            if (!$item->inactive) {
                $table_heading01 = $item->table_heading_3c->column_01;
                $table_heading02 = $item->table_heading_3c->column_02;
                $table_heading03 = $item->table_heading_3c->column_03;

                //Tạo bảng phải 3 tiêu đề cột trên và row cũng phải có 4 cột tương ứng
                $tbl_content = ''; //Xong 1 xóa trắng lại
                foreach ($item->table_3col as $row) {
                    $tbl_content .= "<tr>
                                     <td>$row->column_01</td>
                                     <td>$row->column_02</td>
                                     <td>$row->column_03</td>
                                    
                                </tr>";
                }
                $out .= "<div class='in-pricing'>
                        <div class='uk-card uk-card-default uk-card-small'>
                            <div class='uk-card-header'>
                                        <h3>$item->headline</h3>
                                        $item->table_top_content
                            </div>
                            <div class='uk-card-body'>
                                    <!-- bảng giá ở đây -->
                                <div class='uk-overflow-auto'>
                                        <table class='uk-table uk-table-small uk-table-striped uk-text-small uk-text-lighter'>
                                            <thead>
                                                <tr>
                                                    <th>$table_heading01</th>
                                                    <th>$table_heading02</th>
                                                    <th>$table_heading03</th>                                               
                                                </tr>
                                            </thead>
                                            <tbody>
                                                $tbl_content
                                            </tbody>
                                        </table>
                                </div>
                                       <!-- bảng giá hết --> 
                                       $item->table_bottom_content
                                        <a href='$item->url_link' class='uk-button uk-button-primary uk-button-large uk-border-rounded'>$item->button_caption</a>
                            </div>
                        </div>
                    </div>";
            } //If 
        } //If 3c
    }

    return $out;
}

/*
tạo thẻ dịch vụ in tại trang nào đó
 */
function vcRenderPrintServiceItemCard(PageArray $items)
{
    $out = '';
    if (!$items->count()) {
        return '';
    }
    $thumbImageLink = '';

    foreach ($items as $item) {
        if ($item->images->count()) {
            $thumbImageLink = getImageUrlFromImages($item, $item->image_thumb_name);
        }
        $out .= "
        <div>
            <div class='uk-grid-small uk-child-width-1-1' data-uk-grid>
                <div class='uk-card uk-card-default'>
                    <div class='uk-card-media-top'>
                        <img src='$thumbImageLink' alt='Dịch vụ In ấn'>
                    </div>
                    <div class='uk-card-body'>
                        <a href='$item->url'><h5 class='uk-card-title'>$item->title</h5></a>
                        <p class='uk-margin-small-top uk-text-small'>$item->headline</p>
                    </div>
                </div>
            </div>
        </div>
    ";
    }
    return $out;
}
function vcRenderPrintProductItemCard(PageArray $items)
{
    $out = '';
    if (!$items->count()) {
        return '';
    }
    $imageLink = '';
    $imaggeAltText = '';
    foreach ($items as $item) {
        if ($item->images->count()) {
            $imageLink = $item->images->first()->url();
            $imaggeAltText = $item->image_alt_text;
        }
        $out .=  "
    
        <div class='uk-card uk-card-default'>
            <div class='uk-card-media-top'>
                <img src='$imageLink' alt='$imaggeAltText'>
            </div>
            <div class='uk-card-body'>
            <a href='$item->url'>
                <h5 class='uk-card-title'>$item->title</h5>
                </a>
                <p class='uk-margin-small-top uk-text-small'>$item->headline</p>
            </div>
        </div>
    ";
    }
    return $out;
}
/*
Tim trả lại link image trong 1 image aray
 */
function getImageUrlFromImages($images, $imageName)
{
    $out = '';
    if (!$images->count() || trim($imageName) == "") {
        return '';
    }
    foreach ($images as $image) {
        if ($image->basename == trim($imageName)) {
            $out .= $image->url;
            break;
        }
    }
    return $out;
}
/*
Đường dẫn tới Asset là thư mục style
 */
function pathToAsset()
{
    $out = '';
    $out .= urls()->templates . "styles/";
    return $out;
}
