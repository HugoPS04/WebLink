<?php session_start() ?>
<?php
    $nbrePhases = 4 ;
    $actualPhase = 2 ;
    $progress = $actualPhase/$nbrePhases * 100 ;
    $nbreDocs = 2 ;
    $nbreItemHistorique = 5 ;
?>
<!DOCTYPE html>
<html lang="fr">
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
    <link rel="stylesheet" href="css/espaceEntreprises.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body id="body" class="overflow-x-hidden" >
<?php include_once('header.php') ?>
<div class="chatMenu">
    <a href="#"><i class="bi bi-chat-left-text-fill"></i><span>Chat Support</span></a>
</div>
<div class="chat">
    <div class="chatBody hidden">
        <h4>Chat de Support</h4>
        <div class="chat-message-in">
            <h5>Machin</h5>
            <p>Ceci est mon msg chakal</p>
        </div>
        <div class="chat-message-out">
            <h5>Truc</h5>
            <p>Ceci est mon msg chakalitos</p>
        </div>
    </div>
</div>
<main>
    <div class="headerSpace" style="height: 55px"></div>
    <!-- Titre Mission -->
    <section class="hero-project">
        <div class="container">
            <h1>Projet Web</h1>
        </div>
    </section>
    <!-- Barre Progression -->
    <section class="progress__bar pt-4">
        <div class="container">
            <div class="progress mb-0 mx-3 mx-md-5">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $progress?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                <?php for ($i=1; $i <= $nbrePhases ; $i++) : ?>
                    <div class="dividerProgressBar" style="left: <?php echo ($i-1)/$nbrePhases*100 ?>% ; width: <?php echo 1/$nbrePhases * 100 ?>%">
                        <div>Phase <?php echo $i ?></div>
                    </div>
                <?php endfor ?>
            </div>
            <div class="avancement">
                Progression : <?php echo floor($actualPhase/$nbrePhases * 100) ?>%
            </div>
        </div>
    </section>
    <!-- Info + Docs -->
    <section class="main">
        <div class="container">
            <div class="row">
                <div class="notes col-12 col-md-8">
                    <h1>Nom de l'intervenant : truc</h1>
                    <div class="description">
                        <h3>Description de la mission : </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque,
                            suscipit?
                            Osef</p>
                    </div>
                    <div class="description-phase">
                        <h3>Description Phase : </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, sit.</p>
                    </div>
                    <h3>Prix : CHER</h3>
                </div>
                <div class="docs col-12 offset-md-1 col-md-3">
                    <h4 class="mt-3">Mes Documents</h4>
                    <div class="">
                        <?php for ($i=1 ; $i<=$nbreDocs; $i++) :?>
                            <a href="#" class="docs-item">Document n°<?php echo $i ?></a>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
            <div class="historique mt-5">
                <div class="titre">
                    <h3>Détails de toutes les étapes réalisées: </h3>
                </div>
                <div class="historique-items">
                    <?php for ($i=1; $i <= $nbreItemHistorique;  $i++) : ?>
                        <div class="historique-item">
                            <h6>Item n°<?php echo $i ?> </h6>
                            <p>Description de l'action de l'item n°<?php echo $i ?></p>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include_once('footer.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
<script src="js/espaceEntreprises.js" ></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
</body>

</html>