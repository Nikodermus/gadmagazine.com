<?php 
//This meta info should change for each page
$title = 'Title' ; 
$description = 'Description' ; 
$keywords = 'keywords, divided, by, commas' ; 
    include 'lib/head.php';  include 'lib/nav.php'; ?>

<section class="contacto">
    <article>
        <div class="container-fluid">
            <div class="row">
                <div class="hola--container space-top">
                    <p class=" title text-xs-right space-left">!Hola!</p>
                </div>

                <div class="con-xs-12 col-sm-12 col-md-12 col-lg-8 form--container offset-xs-3">
                    <div class="row">
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-5">
                            <p class="text-xs-left bold space-bottom">
                                GADMagazine es un proyecto pensado para todos, sin ánimo de lucro por lo que no publicitamos.

                            </p>
                            <p class="text-xs-left  space-bottom">
                                Bogotá, D.C., Colombia <br>
                                <a href="mailto:info@gadmagazine.com">info@gadmagazine.com</a> <br>
                                <a href="tel:+573188971073">+57 (318) 897 - 1073</a>
                            </p>
                            <p>
                                Diseñado por: <a href="" target="_blank" class="bold">Lauri</a><br> Desarrollado por:
                                <a href="" target="_blank" class="bold">Ndermus</a>
                            </p>

                        </div>
                        <div class="con-xs-12 col-sm-12 col-md-12 col-lg-7 form">
                            <form action="">
                                <div class="row">
                                    <div class="con-xs-12 col-sm-12 col-md-12 col-lg-8">
                                        <label class="title" for="name">Nombre</label>
                                        <input class="f1" type="text" id="name">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="con-xs-12 col-sm-12 col-md-12 col-lg-8">
                                        <label class="title" for="email">E-mail</label>
                                        <input class="f1" type="email" id="email">
                                        <div class="row pull-xs-right">
                                            <input class="f1" type="checkbox" id="subscribe">
                                            <label class="f0" for="subscribe">Suscribeme a GADMagazine</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label class="title" for="message">Mensaje</label>
                                        <textarea name="" id="" rows="0" id="message" class="f1"></textarea>
                                        <input class="f1 title pull-xs-right" type="submit" value="Enviar">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </article>
</section>

<?php include 'lib/footer.php'; include 'lib/scripts.php'; ?>