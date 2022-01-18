<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body id="body" class="overflow-x-hidden" >
        <?php include_once('header.php') ?>
        <main>
            <section class="hero">
                <div class="container-fluid">
                    <div class="title-hero">
                        <h1>Bienvenue sur <span class="fw-lighter">WebLink</span></h1>
                    </div>
                </div>
            </section>
            <!-- Cards -->
            <section>
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="container d-flex justify-content-center align-items-center">
                                <div class="card-container">
                                    <div class="cards">
                                        <figure class="card-cont front">
                                            <div class="card-title"><h1>Première Connexion ?</h1></div>
                                            <p>Rentrez votre nouveau mot de passe par ici ! Vos données seront sécurisées.</p>
                                            <i class="mt-3"></i>
                                        </figure>
                                        <figure class="card-cont back">
                                            <div class="card-title"><h1>C'est ici que tout commence !</h1></div>
                                            <a href="first-co.php" class="btn btn-dark mt-4">Se Lancer</a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="container d-flex justify-content-center align-items-center">
                                <div class="card-container">
                                    <div class="cards">
                                        <figure class="card-cont front">
                                            <div class="card-title"><h1>L'aventure JIMA t'intéresse ?</h1></div>
                                            <p>Postule directement ou renseigne-toi par ici !</p>
                                            <i class="mt-3"></i>
                                        </figure>
                                        <figure class="card-cont back">
                                            <div class="card-title"><h1>Espace Étudiant</h1></div>
                                            <a href="students.php" class="btn btn-dark" >Se lancer</a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Formulaire Support -->
            <section class="support bg-light mb-4 p-4 pt-5">
                <div class="container">
                    <img src="img/svg/Support.svg" alt="supportIllustration">
                    <h1>Un problème ? Vous pouvez nous le soumettre ici !</h1>
                    <form action="submit.php" method="post">
                        <div class="container my-5">
                            <input type="text" class="form form-control" name="email" id="email" required>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="container my-5">
                            <label for="message" class="form-label" >Message</label>
                            <textarea class="form-control" name="message" id="message" cols="20" rows="7"></textarea>
                            <button type="submit" class="btn btn-primary mt-4">Envoyer</button>
                        </div>
                    </form>
                </div>
            </section>
            <div style="height : 800px ; display :block">
                <div id="main"></div>
            </div>
            <!-- Nos Récents Projets  1 -->
            <section id="lastProjects" class="mb-4">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-12 col-md-6 col-lg-3 fw-bold" style="font-family: 'Poppins'">
                            <div class="card text-center" style="">
                                <div class="card-header" style="box-shadow: 0px 2px rgba(0,0,0,0.2)">
                                    <div class="d-flex justify-content-between mx-0 p-2 align-items-center">
                                        <h4 class="card-title fw-bolder m-0">Projet 1</h4>
                                        <img class="card-img-top" src="img/logo-JIMAsansnom.png" style="height: 3em; width: 5.65em"  alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#card1Content" class="btn m-0 p-0 iconCardCollapse" data-bs-toggle="collapse" aria-expanded="false" style="background-color: rgba(239,125,0,0.8); width:50%" ><div class="fa-rotate-180 fa fa-fw fa-angle-double-up text-dark"></div></a>
                                </div>
                                <div class="collapse cardCollapse" id="card1Content">
                                    <div class="container-fluid mb-3">
                                        <img src="https://via.placeholder.com/150x60" style="height: 100% ; width:100%" alt="Image Card 4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 fw-bold" style="font-family: 'Poppins'">
                            <div class="card text-center" style="">
                                <div class="card-header" style="box-shadow: 0px 2px rgba(0,0,0,0.2)">
                                    <div class="d-flex justify-content-between mx-0 p-2 align-items-center">
                                        <h4 class="card-title fw-bolder m-0">Projet 2</h4>
                                        <img class="card-img-top" src="img/logo-JIMAsansnom.png" style="height: 3em; width: 5.65em"  alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#card2Content" class="btn m-0 p-0 iconCardCollapse" data-bs-toggle="collapse" aria-expanded="false" style="background-color: rgba(239,125,0,0.8); width:50%" ><div class="fa-rotate-180 fa fa-fw fa-angle-double-up text-dark"></div></a>
                                </div>
                                <div class="collapse cardCollapse" id="card2Content">
                                    <div class="container-fluid mb-3">
                                        <img src="https://via.placeholder.com/150x60" style="height: 100% ; width:100%" alt="Image Card 4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 fw-bold" style="font-family: 'Poppins'">
                            <div class="card text-center" style="">
                                <div class="card-header" style="box-shadow: 0px 2px rgba(0,0,0,0.2)">
                                    <div class="d-flex justify-content-between mx-0 p-2 align-items-center">
                                        <h4 class="card-title fw-bolder m-0">Projet 3</h4>
                                        <img class="card-img-top" src="img/logo-JIMAsansnom.png" style="height: 3em; width: 5.65em"  alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#card3Content" class="btn m-0 p-0 iconCardCollapse" data-bs-toggle="collapse" aria-expanded="false" style="background-color: rgba(239,125,0,0.8); width:50%" ><div class="fa-rotate-180 fa fa-fw fa-angle-double-up text-dark"></div></a>
                                </div>
                                <div class="collapse cardCollapse" id="card3Content">
                                    <div class="container-fluid mb-3">
                                        <img src="https://via.placeholder.com/150x60" style="height: 100% ; width:100%" alt="Image Card 4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 fw-bold" style="font-family: 'Poppins'">
                            <div class="card text-center" style="">
                                <div class="card-header" style="box-shadow: 0px 2px rgba(0,0,0,0.2)">
                                    <div class="d-flex justify-content-between mx-0 p-2 align-items-center">
                                        <h4 class="card-title fw-bolder m-0">Projet 4</h4>
                                        <img class="card-img-top" src="img/logo-JIMAsansnom.png" style="height: 3em; width: 5.65em"  alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#card4Content" class="btn m-0 p-0 iconCardCollapse" data-bs-toggle="collapse" aria-expanded="false" style="background-color: rgba(239,125,0,0.8); width:50%" ><div class="fa-rotate-180 fa fa-fw fa-angle-double-up text-dark"></div></a>
                                </div>
                                <div class="collapse cardCollapse" id="card4Content">
                                    <div class="container-fluid mb-3">
                                        <img src="https://via.placeholder.com/150x60" style="height: 100% ; width:100%" alt="Image Card 4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Nos Récents Projets  2 -->
            <section class="mb-4">
                <div class="container d-flex align-items-center justify-content-center">
                    <div class="custom-card">
                        <div class="custom-card-body">
                            <div class="card-h">
                                <h5 class="mb-4">Projet 1: Mission Web</h5>
                            </div>
                            <div class="card-content">
                                <p>
                                    Description de la Mission : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, tempora.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, sit?
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, molestias!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, sequi.
                                </p>
                                <button class="btn btn-primary mt-2 button_info">
                                    En Savoir Plus
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Mes Projets --> 
            <section class="connected ">
                <div class="container">
                </div>
            </section>

            <!-- Rotating Card -->
            <div class="container d-flex justify-content-center align-items-center">
                <div class="card-container">
                    <div class="cards">
                        <figure class="front">
                            <h1>Recto</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, nemo!</p>
                        </figure>
                        <figure class="back">
                            <h1>Verso</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, non?</p>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- Intro Animation (Set True/false JS) -->
            <div class="intro">
                <div class="intro-text text-uppercase fw-bold">
                    <div class="titlesintro">
                        <h1 class="hide"><span class="text">Junior</span></h1>
                        <h1 class="hide"><span class="text">IMT</span></h1>
                        <h1 class="hide"><span class="text">Mines Albi</span></h1>
                        <div class="divider"></div>
                    </div>

                    <h1 class="hide" ><span class=" text thin">WebLink</span></h1>
                </div>
            </div>
            <div class="slider"></div>
        </main>
    <?php include_once('footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
        <script src="js/test.js" ></script>
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    </body>

</html>