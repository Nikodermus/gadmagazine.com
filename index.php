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
                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6 video--container no-gutter">

                    <video autoplay loop poster="img/nikodermus_media.jpg" id="bgvid">
                        <source src="video/gahdm-background-video.webm" type="video/webm">
                        <source src="video/gadm-background-video.mp4" type="video/mp4">
                    </video>
                    <div class="row fold--logo">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-center">

                            <?php include 'lib/logo.php'; ?>
                        </div>

                    </div>


                </div>
                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6 text--container">
                    <div class="row">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-8">
                            <p class="title f1 space-top space-left">LA REVISTA DIGITAL DE TO(DOS)</p>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                        <h2 class="f2 text-xs-center space-top space-bottom gray">Lorem Ipsum</h2>
                        <p class="space-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem dolor velit, magnam minima repudiandae,
                            minus labore dolore praesentium eos consectetur aliquid iusto illum cumque? Impedit asperiores
                            numquam, minus reprehenderit saepe!</p>
                    </div>
                    <div class="row slider--container space-bottom">
                        <div id="slider">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3 class="text-xs-center f3 bold gray ">Un mal diseño es humo, mientras que un buen diseño es un espejo. </h3>
                                <p class="f0 text-xs-center">(Juan Carlos Fernandez)</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3 class="text-xs-center f3 bold gray ">Es difícil pensar en diseño, pero no pensar en ello, es desastroso </h3>
                                <p class="f0 text-xs-center">(Ralph Caplan)</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3 class="text-xs-center f3 bold gray ">El diseño no es sólo como se ve o se siente, el diseño realmente funciona. </h3>
                                <p class="f0 text-xs-center">(Steve Jobs)</p>
                            </div>
                        </div>

                    </div>
                    <div class="row button--container">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                            <a href="docs/cactus.pdf" target="_blank">
                                <div class="button">
                                    <p class=" text-xs-center bold f2 white">Descarga la ultima edición</p>
                                </div>
                            </a>
                            <p class="f0 text-xs-center space-top"><a href="">Previsualización en linea</a>
                            </p>

                        </div>


                    </div>

                </div>
            </div>
            <div class="row latest title-top">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3 class="f2 bold space-left  ">Últimos lanzamientos</h3>
                </div>
                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="row latest-magazines title-top">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <a href="cactus.php">
                                <div class="cover cactus">
                                    <span class="f6 title">#1</span>
                                </div>
                                <p class="text-xs-center space-top">cactús</p>
                            </a>
                        </div>
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4">

                        </div>
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4">

                        </div>


                    </div>
                </div>
                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 all-magazines" hidden>
                    <div class="cover cover-small"></div>
                    <p class="text-xs-center space-top">Todas las ediciones</p>
                </div>



            </div>
        </div>

    </article>
</section>

<?php include 'lib/footer.php'; include 'lib/scripts.php'; ?>