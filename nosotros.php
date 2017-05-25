<?php 
//This meta info should change for each page
$title = 'Title' ; 
$description = 'Description' ; 
$keywords = 'keywords, divided, by, commas' ; 
    include 'lib/head.php';  include 'lib/nav.php'; ?>

<section class="nosotros">
    <article class="fold">
        <div class="container-fluid">
            <div class="row">
                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6 no-gutter fold--image">
                    <div class="row fold--logo">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-center logo--container">

                            <?php include 'lib/logo.php'; ?>
                        </div>
                    </div>

                </div>
                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6 fold--text">
                    <div class="row">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6 front">
                            <h2 class="text-xs-left title f1 space-left">Sobre la revista</h2>
                        </div>
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-8 offset-xs-2">
                            <h1 class="bold text-xs-center f2 title-top title-bottom">Hecho con &lt;3 y Adobe</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, facere. Similique voluptatem
                                cumque, magni debitis quos saepe molestiae autem ipsam, soluta excepturi accusantium fuga
                                earum minima nam. Cumque, nisi, aliquid.</p>
                        </div>


                    </div>
                    <div class="row">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 offset-lg-2  f2">
                            <a href="" class="bold link">Facebook</a>
                        </div>
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-right f2">
                            <a href="" class="bold  link right">Instagram</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </article>
    <article class="staff">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="f2 text-xs-center title title-top space-bottom">To(dos) detras de GADMagazine</h2>
                </div>
                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6 staff--member">
                    <p class="text-xs-center f3 title no-margin space-bottom">
                        Lauri
                    </p>
                    <div class="row">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="square"></div>
                        </div>
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <h2 class="f3 text-xs-center space-top">LAURA CUBILLOS</h2>
                            <p class="text-xs-center no-margin">Diseñador Gráfico</p>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 space-top space-bottom text-xs-center logo--container">
                                    <img src="img/lauri.svg" alt="">
                                </div>
                                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-left">
                                    <a href="https://www.facebook.com/lauritacubillosrico" target="_blank"><i class="icon-">Fb</i></a>
                                </div>
                                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                    <a href="" target="_blank"><i class="icon-">Be</i></a>
                                </div>
                                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-right">
                                    <a href="https://www.behance.net/lauritacubillosrico" target="_blank"><i class="icon-">Ig</i></a>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>

                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6 staff--member">
                    <p class="text-xs-center f3 title no-margin space-bottom">
                        Ndermus
                    </p>
                    <div class="row">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="">
                                <img src="img/nikodermus.jpg" alt="">
                            </div>
                        </div>
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <h2 class="f3 text-xs-center space-top">NICOLAS M. PARDO</h2>
                            <p class="text-xs-center no-margin">Desarrollador UX</p>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 space-top space-bottom text-xs-center logo--container">
                                    <img src="img/nikodermus.svg" alt="">
                                </div>
                                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-left">
                                    <a href="https://www.facebook.com/nikodermus" target="_blank"><i class="icon-">Fb</i></a>
                                </div>
                                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                    <a href="https://www.behance.net/Nikodermus" target="_blank"><i class="icon-">Be</i></a>
                                </div>
                                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-4 text-xs-right">
                                    <a href="https://www.instagram.com/Nikodermus/" target="_blank"><i class="icon-">Ig</i></a>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </article>
</section>

<?php include 'lib/footer.php'; include 'lib/scripts.php'; ?>