<nav class="navbar bg-dark bg-gradient">
    <div class="container-fluid">
        <a class="nav-link p-2" aria-current="page" href="https://es.uefa.com/"><img src="./Images/Uefa Logo.png" height="30px" width="75px"></a>
        <form class="d-flex" action="./Login.php">
            <button class=" btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg> Login</button>
        </form>
    </div>
</nav>

<?php
include("Header.php");
?>

<div class="container-fluid p-1">
    <div class="row justify-content-center p-3">
        <div class="col-8">

            <!-- Carrousel -->
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000"> 
                <div class="carousel-inner">
                    <div class="carousel-item active rounded">
                        <img src="./Images/Pelota.jpeg" class="d-block w-100 p-3 " width="250px" height="550px">
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/Trofeo.jpg" class="d-block w-100 p-3" width="250px" height="550px">
                    </div>
                    <div class="carousel-item">
                        <img src="./Images/Final.avif" class="d-block w-100 p-3" width="250px" height="550px">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <video width="450px" height="550px" controls autoplay muted>
                <source src="./Images/Video motivacional.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<?php
include("Footer.php");
?>