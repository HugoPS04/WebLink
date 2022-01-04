<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <body class="overflow-x-hidden">
        <?php include_once('header.php') ?>
        <main>
            <section class='notconnected bg-light'>
                <div class="container-fluid" style="margin-top:50px">
                    <div class='' >
                        <div class="row align-items-center gy-3">
                            <div class="col-12 col-md-6">
                                <div class="container">
                                    <h1 class=" p-4 text-dark">Bienvenue sur <span class="fw-light">WebLink</span></h1>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 bg-dark text-light">
                                <div class=" container p-5 text-align-center">
                                   <h3 class="fs-5 fw-light">
                                        Vous souhaitez suivre l'avancée de votre projet ?
                                    </h3>
                                    <a href="#" class="btn btn-primary mt-3 ms-4">Se Connecter</a>
                                    <h3 class=" fs-5 mt-5 fw-light">
                                        Vous êtes étudiant et voulez postuler à la JIMA ?
                                    </h3>
                                    <div class="container mt-3">
                                        <a href="#" class="btn btn-primary me-4">Postuler</a>
                                        <a href="#" class="btn btn-primary">En Savoir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Mes Projets --> 
            <section class="connected ">
                
            </section>
        </main>
    <?php include_once('footer.php') ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    </body>

</html>