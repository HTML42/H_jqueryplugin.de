<?php
$navi = array(
    'index.html' => 'Home',
    'recommendations.html' => 'Recommendations',
    'xtreme_jquery.html' => 'Xtreme-jQuery'
);
?>
<div id="navi_toggler"></div>
<div id="navigation">
    <nav>
        <?php
        $navi_items = array();
        foreach ($navi as $href => $label) {
            array_push($navi_items, Html::link($href, $label));
        }
        echo Html::ul($navi_items);
        ?>
    </nav>
</div>