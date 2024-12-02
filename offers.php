<?php $title = "Design Pro Labs | Explore Offers";
include 'include/header.php';?>

<section class="inner-banner"
    style="background-color:#436d3d; background-image:url(https://avatars.mds.yandex.net/i?id=9f997ee15759bcd4a3df3e3f08f12c0d76c0ddef-5233627-images-thumbs&n=13)">
    <div class="container">
        <div class="row">
            <div class="col-md-12 banner-left banner-left123">
                <h1>Explore Competitive Tech Offers <span></span> </h1>
                <p>Assisting you with complete brand development services for seed sized and
                    monster sized organizations.
                </p>
                <div class="mt-7">
                    <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started" class="bg-[#FE5F00] text-white text-lg font-semibold hover:opacity-90 rounded-lg transition-all duration-300 active:scale-90 w-fit p-3" data-src="#popupform">Get in Touch</a>
                </div>
            </div>
            <div class="col-md-5 banner-right">
            </div>
        </div>
    </div>
</section>

<section class="packages-block">
    <div class="container">
        <div class="row">
            <div class="bnav-header col-md-12">
                <ul class="nav bnav-pills">
                    <li><a data-toggle="pill" href="#logo" class="active">Logo </a></li>
                    <li><a data-toggle="pill" href="#web">Web </a></li>
                    <li><a data-toggle="pill" href="#video">Video </a></li>
                    <li><a data-toggle="pill" href="#copywriting">Copywriting</a></li>
                    <li><a data-toggle="pill" href="#illustration">Illustration</a></li>
                    <li><a data-toggle="pill" href="#seo">SEO</a></li>
                    <li><a data-toggle="pill" href="#ecommercepackages">E-Commerce</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="tab-content">
                <div id="logo" class="tab-pane fade in active show">
                    <!-- logo_pack -->
                    <?php include 'include/logo-pack.php'; ?>
                </div>
                <div id="web" class="tab-pane fade">
                    <!-- Website_pack -->
                    <?php include 'include/website-pack.php'; ?>
                </div>
                <div id="video" class="tab-pane fade">
                    <!-- video_pack -->
                    <?php include 'include/video-pack.php'; ?>
                </div>
                <div id="copywriting" class="tab-pane fade">
                    <!-- copywriting_pack -->
                    <?php include 'include/copywriting-pack.php'; ?>
                </div>
                <div id="illustration" class="tab-pane fade">
                    <!-- illustration_pack -->
                    <?php include 'include/illustration-pack.php'; ?>
                </div>
               
                <div id="seo" class="tab-pane fade">
                    <!-- seo_pack -->
                    <?php include 'include/seo-pack.php'; ?>
                </div>
                <div id="ecommercepackages" class="tab-pane fade">
                    <!-- ecomm_pack -->
                    <?php include 'include/ecomm-pack.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php';?>