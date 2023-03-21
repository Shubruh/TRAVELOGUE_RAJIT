<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Travel Theme - Materialize CSS</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="tourists_result.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="navbar-fixed">
        <nav class="blue">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Travelogue</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#search">Search</a>
                        </li>
                        <li>
                            <a href="#popular">Popular Places</a>
                        </li>
                        <li>
                            <a href="#gallery">Gallery</a>
                        </li>
                        <li>
                            <a href="includes/tourists_logout.inc.php">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="#home">Home</a>
        </li>
        <li>
            <a href="#search">Search</a>
        </li>
        <li>
            <a href="#popular">Popular Places</a>
        </li>
        <li>
            <a href="#gallery">Gallery</a>
        </li>

    </ul>

    <!-- Section: Slider -->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                <div class="caption center-align">
                    <h2>Get a Tour Guide</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">local student guides who are
                        passionate about sharing their city's culture, history, and hidden gems!</h5>
                    <a href="index.php" class="btn btn-large">Learn More</a>
                </div>
            </li>
            <li>
                <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                <div class="caption left-align">
                    <h2>We Work With All Budgets</h2>

                </div>
            </li>
            <li>
                <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                <div class="caption right-align">
                    <h2>Group & Individual Getaways</h2>

                </div>
            </li>
        </ul>
    </section>

    <!-- Section: Search -->

    <section id="search" class="section section-search blue darken-1 white-text center scrollspy">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3>Search Destinations</h3>
                    <div class="input-field">
                        <input class="white grey-text autocomplete" placeholder="Ahmedabad, jodhpur, etc..." type="text"
                            id="autocomplete-input">

                        <div class="input-field">
                            <h3>Preffered language</h3>
                            <input class="white grey-text autocomplete" placeholder="hindi,english,..." type="text"
                                id="autocomplete-input">
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Section: Popular -->
    <section id="popular" class="section section-popular scrollspy">
        <div class="container">
            <div class="row">
                <h4 class="center">
                    <span class="blue-text">Popular</span> Places
                </h4>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/hbEMux/resort1.jpg" alt="">
                            <span class="card-title">PANJIM,GOA</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat
                                corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mn1egc/resort2.jpg" alt="">
                            <span class="card-title">ANDAMAN</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat
                                corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="https://image.ibb.co/mbCVnH/resort3.jpg" alt="">
                            <span class="card-title">Nova Scotia</span>
                        </div>
                        <div class="card-content">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat
                                corporis laudantium, architecto
                                delectus?
                            </p>
                        </div>
                    </div>
                </div>

    </section>

    <!-- Section: Follow -->
    <section class="section section-follow blue darken-2 white-text center">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Follow Travelogue</h4>
                    <p>Follow us on social media for special offers</p>
                    <a href="htttps://facebook.com" target="_blank" class="white-text">
                        <i class="fab fa-facebook fa-4x"></i>
                    </a>
                    <a href="htttps://twitter.com" target="_blank" class="white-text">
                        <i class="fab fa-twitter fa-4x"></i>
                    </a>
                    <a href="htttps://linkedin.com" target="_blank" class="white-text">
                        <i class="fab fa-linkedin fa-4x"></i>
                    </a>
                    <a href="htttps://googleplus.com" target="_blank" class="white-text">
                        <i class="fab fa-google-plus fa-4x"></i>
                    </a>
                    <a href="htttps://pinterest.com" target="_blank" class="white-text">
                        <i class="fab fa-pinterest fa-4x"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery" class="section section-gallery scrollspy">
        <div class="container">
            <h4 class="center">
                <span class="blue-text">Photo </span> Gallery
            </h4>
            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beach" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?travel" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?nature" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beach, travel"
                        alt="">
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beaches"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?traveling"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?bridge" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?boat, travel"
                        alt="">
                </div>
            </div>

            <div class="row">
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?water" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?building"
                        alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?trees" alt="">
                </div>
                <div class="col s12 m3">
                    <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?cruise" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="section blue darken-2 white-text center">
        <p class="flow-text">Travelogue </p>
    </footer>
    <!-- partial -->
    <script src='https://use.fontawesome.com/releases/v5.0.6/js/all.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js'></script>
    <script src="tourists_result.js"></script>

</body>

</html>