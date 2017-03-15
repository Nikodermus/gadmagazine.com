<?php 
//This meta info should change for each page
$title = 'Title' ; 
$description = 'Description' ; 
$keywords = 'keywords, divided, by, commas' ; 
   include 'lib/head.php'; include 'lib/nav.php'; ?>

<section class="index">
    <article>
        <div class="container-fluid">
            <div class="row fold">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 video--container no-gutter">
                   <video autoplay loop 
            poster="img/nikodermus_media.jpg" 
            id="bgvid">
     <source src="video/gahdm-background-video.webm" 
             type="video/webm">
     <source src="video/gadm-background-video.mp4" 
             type="video/mp4">
    </video>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 ">
                        
<img src="img/logo.svg" alt="">
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                        </div>

                    </div>


                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 no-gutter">

                </div>
            </div>
        </div>

    </article>
</section>

<?php include 'lib/footer.php'; include 'lib/scripts.php'; ?>
