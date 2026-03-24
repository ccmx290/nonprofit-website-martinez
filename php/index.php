<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Atelier Colima Nonprofit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="top"></div>

    <header>
        <div class="container py-3">
            <div class="row">
                <div class="col">
                    <h1 class="display-6 text-center mb-0">Atelier Colima</h1>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donate.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
    <div class="container my-4 text-center fs-4">
            <?php
                date_default_timezone_set("America/Chicago");

                $orgName = "Atelier Colima";
                $hour = date("H");

                if($hour < 12) {
                    $greeting = "Good morning!";
                }
                elseif($hour < 18) {
                    $greeting = "Good afternoon!";
                }
                else {
                    $greeting = "Good evening!";
                }
                echo "<p style='color: #ad4e2b; font-size: 1.25em;'>$greeting Welcome to $orgName</p>";
            ?>
        </div>

        <section class="hero mb-5">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-md-12 align-self-end">
                        <h2 class="tagline display-1 fw-bold text-white">Where creativity and community meet.</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title display-6 fw-semibold">Our Mission</h2>

                                <p class="card-text">Located in the center of Colima, Atelier Colima is a nonprofit organization and artist collective committed to the promotion and education of art and culture through community-led classes and events.</p>

                                <a href="events.php#get-involved" class="btn btn-primary fw-semibold">Find out how to get involved</a>
                            </div>

                            <img src="https://ccmx290.github.io/nonprofit-website-martinez/media/coloring-pencils.jpg" class="card-img-bottom" alt="Closeup of colored pencils lying over several scattered drawings, and a hand coloring in the background.">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h2 class="card-title display-6 fw-semibold">Our Impact</h2>

                                <p class="card-text">As a collective, Atelier Colima has brought more than joy and creativity to our communities. We have also raised funds and donated supplies to support our local artists and community members.</p>

                                <a href="about.php" class="btn btn-primary fw-semibold">Learn more about our impact</a>
                            </div>

                            <img src="https://ccmx290.github.io/nonprofit-website-martinez/media/watercolor-portrait.jpg" class="card-img-bottom" alt="Masculine person painting a watercolor portrait on a wooden easle.">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-form" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="display-4">Contact Us</h2>

                        <p>Feel free to reach out with any questions, suggestions, or comments!</p>

                        <form id="contactForm" novalidate>
                            <div class="mb-3">
                                <label for="firstname" class="form-label fw-semibold">First name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Jane" required>
                                <span class="error-message" id="nameError"></span>
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label fw-semibold">Last name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe" required>
                                <span class="error-message" id="nameError"></span>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="email@address.com" required>
                                <span class="error-message" id="emailError"></span>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label fw-semibold">Your message</label>
                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Your Message" ></textarea>
                                <span class="error-message" id="messageError"></span>
                            </div>

                            <button class="btn btn-primary fw-semibold" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer mt-auto py-3 fw-semibold">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <p class="mb-0">Copyright &copy; <?php echo date("Y"); ?></p>
                    <a class="text-decoration-none mb-0" href="#">Privacy Policy</a>
                </div>

                <div class="soc-med col col-md-6 text-center">
                    <p class="mb-0">Where to find us:</p>

                    <div class="text-decoration-none mb-0">
                        <a href="#"><i class="bi bi-instagram fs-3 me-3"></i></a>
                        <a href="#"><i class="bi bi-facebook fs-3 me-3"></i></a>
                        <a href="#"><i class="bi bi-whatsapp fs-3"></i></a>
                    </div>
                </div>

                <div class="col col-md-3 text-end">
                    <a href="#top" class="text-decoration-none">Back to top</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>
	
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.22.1/dist/jquery.validate.min.js"></script>

    <script type="text/javascript" src="js/form-validation.js"></script>
</body>
</html>