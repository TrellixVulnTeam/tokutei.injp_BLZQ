<?php
$estdata = $this_title = $kanrihi = $okuridashi_name = $discount_description = $badge = null;
$estdata = get_post_meta( get_the_ID(), 'estimates', true );

// Title
if(!empty($estdata['kanridantai_name'])){
    $this_title = $estdata['kanridantai_name'];
}
else{
    $this_title = '監理団体名未公開';
}

// Kanrihi
if(!empty($estdata['kanrihi']) and is_numeric($estdata['kanrihi'])){
    $kanrihi = '<span class="small">1名</span><span class="price_number">'.number_format($estdata['kanrihi']).'</span><span class="small">円/月</span>';
    if(!empty($estdata['okuridashi_kanrihi']) and is_numeric($estdata['okuridashi_kanrihi'])){
        $kanrihi .= '<span class="small">(内送り出し監理費'.number_format($estdata['okuridashi_kanrihi']).'円)</span>';
    }
}
else{
    $kanrihi = '<span class="price_number">未公開</span>';
}
// Okuridashi
if(!empty($estdata['okuridashi']) and is_numeric($estdata['okuridashi'])){
    $okuridashi_name = get_the_title($estdata['okuridashi']);
    $okuridashidata = get_post_meta( $estdata['okuridashi'], 'okuridashi', true );
    if(!empty(@$okuridashidata['nation'])){
        $okuridashi_name .= '<span class="nation">('.@$okuridashidata['nation'].')</span>';
    }
}
else{
    $okuridashi_name = '送り出し機関未設定';
}

// Discount Description
if(!empty($estdata['discount_description'])){
    $discount_description = '<div class="discount_description">
        <p>'.$estdata['discount_description'].'</p>
    </div>';
}

// badge
if(!empty($estdata['pref_zenkoku'])){
    $badge .= '<div class="badge_zenkoku badge"><span>全国<br />対応</span></div>';
}
if(!empty($estdata['kanrihi']) and is_numeric($estdata['kanrihi']) and $estdata['kanrihi'] <= 25000){
    $badge .= '<div class="badge_yasui badge"><span>監理費<br />安い</span></div>';
}
if($count <= 3){
    $badge .= '<div class="badge_count'.$count.' badge"><span>価格<br />'.$count.'位</span></div>';
}


echo '<li class="card">';
echo '<div class="content_area">';
echo '<div class="title_area"><a href="'.site_url('/?pagetype=estimate_contact&id='.get_the_ID()).'">'.$this_title.'</a></div>';
if(!empty($kanrihi)){
    echo '<div class="kanrihi_area"><div class="area_title">監理費</div><div class="area_content">'.$kanrihi.'</div></div>';
}
if(!empty($okuridashi_name)){
    echo '<div class="kanrihi_area"><div class="area_title">送り出し機関</div><div class="area_content">'.$okuridashi_name.'</div></div>';
}
if(!empty($discount_description)){
    echo $discount_description;
}
echo '</div>';
echo '<div class="button_area"><a href="'.site_url('/?pagetype=estimate_contact&id='.get_the_ID()).'" title="'.get_the_ID().'のお見積りでお問合せ">このお見積りでお問合せ</a></div>';
if(!empty($badge)){
    echo '<div class="badge_area">'.$badge.'</div>';
}
echo '</li>';

// echo '<li class="card">
// <div class="estimate">
// <div class="line1">
//     <div class="title">
//         <span class="estimate_rank">'.$count.'位</span>
//         <span class="kanridantai">'.$this_title.'</span>
//     </div>
//     <div class="submit">
//         <a href="'.site_url('/?pagetype=estimate_contact&id='.get_the_ID()).'" class="button">詳細をお問合せ</a>
//     </div>
// </div>
//     <div class="line2">
//         <div class="price">監理費 '.$kanrihi.'</div>
//         <div class="okuridashi">'.$okuridashi_name.'</div>
//     </div>
//     '.$discount_description.'
// </div>
// '.$badge.'
// </li>';
$count++;