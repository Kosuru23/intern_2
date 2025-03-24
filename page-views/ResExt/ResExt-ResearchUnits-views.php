<section class="ResExtHeroCont">
    <div class="ResExtHero">
        <p class="ResExtHeroTitle ResExtHomepageTitle inter-black">RESEARCH</p>
        <p class="ResExtHeroSubTitle ResExtHomepageSubTitle inter-semibold">units</p>
    </div>
</section>

<?php 

require_once '../__includes/ResExtSubNav.php';
require_once '../classes/connect.php';
require_once '../classes/database.php';

$db = new Database();
$user = new User($db);
$name = 'Research Units';
$array = $user->location($name);
$counter = 0;

foreach($array as $arr):

    if ($counter % 2 == 0) {
        $containersectionclass = "ResExtContainerWhite";
        $containerclass = "ResExtWhite";
        $title = "ResExtWhiteTitle";
        $divider = "ResExtWhiteDivider";
        $text = "ResExtWhiteText";
    } else {
        $containersectionclass = "ResExtContainerRed";
        $containerclass = "ResExtRed";
        $title = "ResExtRedTitle";
        $divider = "ResExtRedDivider";
        $text = "ResExtRedText";
    }
?>

<section class="<?=$containersectionclass?>">
    <div class="<?=$containerclass?>">
        <p class="<?=$title?> inter-bold"><?=$arr['name']?></p>
        <div class="<?=$divider?>"></div>
        <p class="<?=$text?> inter-light"><?=$arr['description']?></p>
    </div>
</section>

<?php 
    $counter++;
endforeach; 
?>