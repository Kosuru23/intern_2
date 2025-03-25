<section class="ResExtHeroCont">
    <div class="ResExtHero">
        <p class="ResExtHeroTitle ResExtHomepageTitle inter-black">RESEARCH, EXTENSION</p>
        <p class="ResExtHeroSubTitle ResExtHomepageSubTitle inter-semibold">AND EXTERNAL LINKAGES</p>
    </div>
</section>

<?php 

require_once '../__includes/ResExtSubNav.php'; 
require_once '../classes/connect.php';
require_once '../classes/database.php';

$db = new Database();
$user = new User($db);
$in_name = 'Research, Extension and External Linkages';
$name = "President’s Message";
$array = $user->order($name, $in_name);
$counter = 0;
?>

<section class="ResExtHomePageHeroCont">
    <div class="ResExtHomePageHero">
        <div class="ResExtHomePageHeroTextCont">
            <p class="ResExtHomePageHeroTitle inter-black">PRESIDENT’S MESSAGE</p>
        <?php foreach($array as $arr):?>
            <p class="ResExtHomePageHeroText inter-light"><?=$arr['description']?></p>
        <?php 
        endforeach; 
        ?>         
        </div>
        <div class="ResExtHomePageHeroImgCont">
            <div class="ResExtHomePageHeroImgContent">
                <div class="ResExtHomePageHeroSemiBorder">
                    <div class="ResExtSemiBorderLong"></div>
                    <div class="ResExtSemiBorderShort"></div>
                </div>
                <div class="ResExtHomePageHeroImg"></div>
                <div class="ResExtHomePageHeroSemiBorder end">
                    <div class="ResExtSemiBorderShort"></div>
                    <div class="ResExtSemiBorderLong"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ResExtResDevCont">
    <div class="ResExtResDevTop">
        <div class="ResExtResDevTopImg"></div>
        <div class="ResExtResDevTopTitleCont">
            <p class="ResExtResDevTopTitle inter-black">RESEARCH AND DEVELOPMENT</p>
            <div class="ResExtResDevTopUnderline"></div>
        </div>
        <p class="ResExtResDevTopText inter-light"> The  Research and Development Cluster continues to serve as the coordinating body responsible for  integrating the research activities of the various academic units and faculty.  To plan and implement research programs that address the evolving needs  of the University by fostering interdisciplinary collaboration and leveraging collective expertise to  drive impactful research and development initiatives that contribute to academic excellence and  societal advancement.</p>
    </div>
    <div class="ResExtResDevBot">
        <div class="ResExtResDevBotBtn">See More <img src="../imgs/Arrow 2.png" alt=""></div>
    </div>
</section>

<section class="ResExtServCont">
    <div class="ResExtServTop">
        <div class="ResExtServTopImg"></div>
        <div class="ResExtServTopTitleCont">
            <p class="ResExtResDevTopTitle inter-black">Extension Services</p>
            <div class="ResExtResDevTopUnderline"></div>
        </div>
        <p class="ResExtServTopText inter-light">The extension services offered are derived from research findings and technical  studies. This may involve activities such as packaging, demonstrating, and  implementing appropriate technologies, materials, and processes within the targeted  communities.</p>
    </div>
    <div class="ResExtServBot">
        <div class="ResExtServBotBtn">See More <img src="../imgs/Arrow 2.png" alt=""></div>
    </div>
</section>

<section class="ResExtResDevCont">
    <div class="ResExtResDevTop">
        <div class="ResExtResDevTopImg"></div>
        <div class="ResExtLinkTopTitleCont">
            <p class="ResExtResDevTopTitle inter-black">External Linkages</p>
            <div class="ResExtResDevTopUnderline"></div>
        </div>
        <p class="ResExtResDevTopText inter-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>
    <div class="ResExtResDevBot">
        <div class="ResExtResDevBotBtn">See More <img src="../imgs/Arrow 2.png" alt=""></div>
    </div>
</section>

<section class="ResExtHPDividerCont">
    <div class="ResExtHPDivider"></div>
</section>

<section class="ResExtOVPCont">
    <div class="ResExtOVP">
        <div class="ResExtOVPImg"></div>
        <div class="ResExtOVPContent">
            <p class="ResExtOVPTitle inter-bold">OFFICE OF THE VICE PRESIDENT</p>
            <p class="ResExtOVPSubTitle inter-bold">for Research, Extension and External Linkages</p>
            <div class="ResExtResDevTopUnderline"></div>
            <div class="ResExtOVPHeadCont">
                <p class="ResExtOVPHead inter-bold">DR. JOEL G. FERNANDO</p>
                <p class="ResExtOVPHeadSchool inter-semibold">Western Mindanao State University</p>
            </div>
        </div>
    </div>
</section>

