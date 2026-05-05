<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Atelier Colima Nonprofit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="d-flex flex-column min-vh-100">
    <div id="top"></div>

    <header>
        <div class="container py-3">
            <div class="row">
                <div class="col">
                    <h1 class="display-6 text-center mb-0"><a href="index.php">Atelier Colima</a></h1>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donate.php">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="events.php">Events</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main  class="flex-grow-1">
        <section class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="display-4">Upcoming Events</h2>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0">
                                <p class="fw-semibold mb-0">April 8th &#124; <time datetime="2026-04-08 11:00">11:00 AM</time> - <time datetime="2026-04-08 13:30">01:30 PM</time></p>

                                <h3 class="fw-semibold mb-1">A Brunch of Poetry</h3>

                                <p>We invite you to a delicious brunch paired with an introduction to the world of poetry, featuring the work of renowned Mexican poets from throughout the decades. A free drink of your choice will be provided at the event. All you need to remember is to bring something to write on, and a pen or pencil.</p>

                                <p class="mb-0"><span class="fw-semibold">Location:</span> Café Luna y Miel</p>
                                <p class="mb-0">Río Paloma 565, Colima Centro, Colima</p>
                            </li>

                            <li class="list-group-item px-0">
                                <p class="fw-semibold mb-0">April 15th &#124; <time datetime="2026-04-15 14:00">02:00 PM</time> - <time datetime="2026-04-15 16:00">04:00 PM</time></p>   

                                <h3 class="fw-semibold mb-1">Acoustic Guitar for Beginners</h3>

                                <p>Mario Velazquez and Merced Bravo, the guitarists from the local band Mantarrayas, will be teaching up to 10 attendees the basics of acoustic guitar. Register as soon as you can to reserve your spot! Guitars will be available on-site to use for the duration of the class.</p>

                                <p class="mb-0"><span class="fw-semibold">Location:</span> Jardín Los Aros</p>
                                <p class="mb-0">C. Saturno 396, Villa de Alvarez Centro</p>
                            </li>

                            <li class="list-group-item px-0">
                                <p class="fw-semibold mb-0">April 22nd &#124; <time datetime="2026-04-22 18:00">06:00 PM</time> - <time datetime="2026-04-22 20:30">08:30 PM</time></p>

                                <h3 class="fw-semibold mb-1">Still Life &amp; Charcoal</h3>

                                <p>Join us for an evening of delicious coffee, pan dulce, and sketching with charcoal. Several tables with different still life arrangements will be set up throughout the gallery, so feel free to sit next to the one that inspires you most!</p>

                                <p class="mb-0"><span class="fw-semibold">Location:</span> Galería Buganvilla</p>
                                <p class="mb-0">C. Jaime Chocano 149, Cerro Azul, Colima</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 id="get-involved" class="display-4">Get Involved</h2>
                    </div>
                </div>

                <div class="row">
                    <article class="col-md-7">
                            <p>We love our volunteers, and are frequently looking for more help with our events and classes. If this interests you, then here is an idea of what volunteering with us may involve:</p>

                            <ul class="mb-3">
                                <li>Setting up/taking down tables and supplies for events/classes</li>
                                <li>Handing out supplies to attendees</li>
                                <li>For artist volunteers, helping attendees with any art-related questions or problems involving the topic for that specific event/class</li>
                            </ul>

                            <p>If you'd like to volunteer at one of our classes or events, please fill out the volunteer form below and let us know what events interest you most! We will reach out to you within a week with more information.</p>
                    </article>

                    <article class="col-md-5">
                        <h3 class="fw-semibold">Volunteer Form</h3>

                        <div class="mb-3">
                            <label for="first-name" class="form-label fw-semibold">First name</label>
                            <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Jane">
                        </div>

                        <div class="mb-3">
                            <label for="last-name" class="form-label fw-semibold">Last name</label>
                            <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Doe">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@address.com">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">Your message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Your Message"></textarea>
                        </div>

                        <button class="btn btn-primary fw-semibold" type="submit">Send Volunteer Info</button>
                    </article>
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

                    <div class="socmed-icons text-decoration-none mb-0">
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
</body>
</html>