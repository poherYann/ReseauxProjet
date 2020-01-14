<?php
include ('inc/pdo.php');
include('inc/function.php');
include('inc/header.php');

session_start();
?>
<div class="wrap">

    <div class="bloc">
        <div class="bloc3">
            <img class="portrait" src="assets/img/personnes.jpg" alt="">
            <div class="presentation">
                <h2>Pierre</h2>
                <h3>Responsable de Projet</h3>
                <ul class="lang">
                    <li class="material-icons">computer PHP</li>
                    <li class="material-icons">computer JQUERY</li>
                </ul>
            </div>
        </div>
        <div id="ex1" class="modal">
            <p>Thanks for clicking. That felt good.</p>

        </div>

        <!-- Link to open the modal -->
        <p><a href="#ex1" rel="modal:open">Open Modal</a></p>
        <div class="bloc1">
            <img class="portrait" src="assets/img/personnes.jpg" alt="">
            <div class="presentation">
                <h2>Yann</h2>
                <h3>Développeur</h3>
                <ul class="lang">
                    <li class="material-icons">computer PHP</li>
                    <li class="material-icons">computer JQUERY</li>
                </ul>
            </div>
        </div>
        <div class="bloc1">
            <img class="portrait" src="assets/img/personnes.jpg" alt="">
            <div class="presentation">
                <h2>Christopher</h2>
                <h3>Développeur</h3>
                <ul class="lang">
                    <li class="material-icons">computer HTML/CSS</li>
                    <li class="material-icons">computer JQUERY</li>
                </ul>
            </div>
        </div>
        <div class="bloc1">
            <img class="portrait" src="assets/img/personnes.jpg" alt="">
            <div class="presentation">
                <h2>Antonin</h2>
                <h3>Développeur</h3>
                <ul class="lang">
                    <li class="material-icons">computer HTML/CSS</li>
                    <li class="material-icons">computer JQUERY</li>
                </ul>
            </div>
        </div>
    </div>

</div>
<?php include('inc/footer.php') ?>
