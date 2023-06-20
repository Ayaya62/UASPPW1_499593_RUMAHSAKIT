<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!--BOOTSTRAP & CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/line-icons.css" />
    <link rel="stylesheet" href="css/landing-page.css" />

    <title>Landing Page</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Lambda Hospital</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" onclick="addBg()"></span>
        </button>
        <div class="navMenu collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END Navbar -->

    <!-- Hero Section -->
    <section class="jumbotron text-center">
      <div class="heading">
        <h1 class="display-4 fw-bold mt-5 mb-4">Lambda Hospital</h1>
        <p class="lead text-dark fs-4 p-4">
          "Discover exceptional care and compassion at Lambda Hospital, <br />
          where our commitment to your well-being takes center stage."
        </p>
        <a class="btn btn-dark btn-lg m-5" href="registration.php" role="button" target="_blank">BOOK AN APPOINTMENT</a>
      </div>
    </section>
    <!-- END Hero Section -->

    <!-- Services -->
    <section class="services pt-5 pb-5 shadow-sm">
      <div class="container">
        <div class="row pt-5">
          <div class="col-12">
            <h3 class="text-uppercase border-bottom mb-2 text-center">SERVICES WE PROVIDE</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12 p-5 text-center">
            <p>
              "At Lambda, we go beyond healthcare, providing a wide range of exceptional services to cater to your every need. From advanced medical treatments to specialized therapies and support programs, our comprehensive services are
              designed to ensure your well-being and convenience throughout your healthcare journey."
            </p>
          </div>
        </div>
        <div class="row">
          <!-- Hospitalization -->
          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
              <img src="image/ischemia.jpg" class="card-img-top" alt="Card Image" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Hospitalization</h5>
                <p class="card-text mb-4">"Rest assured that at Lambda, we prioritize your comfort and recovery during your hospitalization, providing expert medical attention and personalized care every step of the way."</p>
                <a href="#" class="btn btn-dark mt-auto align-self-start">Book now</a>
              </div>
            </div>
          </div>
          <!-- Consultation -->
          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
              <img src="image/consultation.jpg" class="card-img-top" alt="Card Image" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Consultation</h5>
                <p class="card-text mb-4">
                  "Experience a seamless and informative consultation at Lambda, where our dedicated team of medical professionals takes the time to understand your needs, answer your questions, and guide you towards the best possible
                  treatment options."
                </p>
                <a href="#" class="btn btn-dark mt-auto align-self-start">Book now</a>
              </div>
            </div>
          </div>
          <!-- Med-checkUp -->
          <div class="col-lg-4 mb-3 d-flex align-items-stretch">
            <div class="card">
              <img src="image/med-check.jpg" class="card-img-top" alt="Card Image" />
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Medical Check Up</h5>
                <p class="card-text mb-4">
                  "Take proactive control of your health with a comprehensive medical check-up at Lambda. Our state-of-the-art facilities and experienced healthcare professionals ensure thorough evaluations and personalized recommendations
                  to keep you in the best of health."
                </p>
                <a href="#" class="btn btn-dark mt-auto align-self-start">Book now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Services -->

    <!-- About -->
    <section class="about">
      <div class="container p-5 text-white">
        <div class="row text-center">
          <div class="col m-5"><h2>ABOUT</h2></div>
        </div>
        <div class="row m-3" style="text-align: justify">
          <div class="col-md m-3">
            <h3 class="text-center">Vision</h3>
            <p>
              Our vision at Lambda is to be a leader in providing exceptional healthcare services, revolutionizing patient care through innovation, compassion, and excellence. We strive to become the preferred choice for patients,
              healthcare professionals, and the community, setting new standards of medical care and making a positive impact on the lives we touch.
            </p>
          </div>
          <div class="col-md m-3">
            <h3 class="text-center">Mission</h3>
            <p>
              At Lambda, our mission is to enhance the health and well-being of individuals and communities by delivering outstanding healthcare services with integrity, compassion, and respect. We are committed to providing comprehensive,
              patient-centered care, utilizing advanced technology, and fostering a culture of continuous improvement to achieve the highest quality outcomes for our patients. We aim to be a trusted healthcare partner, empowering
              individuals to lead healthier lives and promoting the overall well-being of our community.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END About -->

    <!-- Features -->
    <section class="features">
      <div class="container p-5">
        <div class="row m-5 text-center">
          <h2>FEATURES</h2>
          <p class="mt-4">
            "Experience excellence in healthcare with Lambda, where advanced technology, state-of-the-art facilities, compassionate care, and a patient-centric approach come together to redefine the standard of medical excellence and
            provide you with a truly remarkable healthcare experience."
          </p>
        </div>
        <div class="row text-center">
          <div class="col p-3">
            <i class="icon-browser icon-size"></i>
            <h4 class="mt-3">Modern facilities</h4>
          </div>
          <div class="col p-3">
            <i class="icon-map icon-size"></i>
            <h4 class="mt-3">Spacious patient rooms</h4>
          </div>
          <div class="col p-3">
            <i class="icon-book-open icon-size"></i>
            <h4 class="mt-3">Dedicated team of skilled healthcare professionals</h4>
          </div>
        </div>
        <div class="row text-center">
          <div class="col p-5">
            <i class="icon-lock icon-size"></i>
            <h4 class="mt-3">Safety Management</h4>
          </div>
          <div class="col p-5">
            <i class="icon-alarmclock icon-size"></i>
            <h4 class="mt-3">Quality of care</h4>
          </div>
          <div class="col p-5">
            <i class="icon-mic icon-size"></i>
            <h4 class="mt-3">Tranquil healing environment</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- END Features -->

    <!-- Reviews -->
    <section id="reviews" class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm text-center">
            <h1 class="p-3">Our Testimonials</h1>
            <p class="pb-4">
              Testimonials offer firsthand accounts of the exceptional care and transformative experiences patients have had at Lambda, <br />serving as heartfelt reminders of the positive impact we make in the lives of those we serve.
            </p>
          </div>
        </div>
        <div class="row g-4 text-start">
          <div class="col-md-4" data-aos="fade-up">
            <div class="review p-4">
              <div class="person">
                <div class="text ms-3">
                  <h6 class="mb-0">John Walker</h6>
                </div>
              </div>
              <p class="pt-4">The team at Lambda went above and beyond to ensure my comfort and well-being during my stay. Their professionalism and genuine care made all the difference in my recovery.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up">
            <div class="review p-4">
              <div class="person">
                <div class="text ms-3">
                  <h6 class="mb-0">Alan Pejalan</h6>
                </div>
              </div>
              <p class="pt-4">I was impressed by the state-of-the-art facilities and the expertise of the medical staff at Lambda. They provided me with top-notch care and guided me through every step of my treatment.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up">
            <div class="review p-4">
              <div class="person">
                <div class="text ms-3">
                  <h6 class="mb-0">Lord Seno</h6>
                </div>
              </div>
              <p class="pt-4">Choosing Lambda for my surgery was the best decision I made. The skilled surgeons and attentive nurses made me feel confident and supported throughout the entire process.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up">
            <div class="review p-4">
              <div class="person">
                <div class="text ms-3">
                  <h6 class="mb-0">Santoso</h6>
                </div>
              </div>
              <p class="pt-4">From the moment I walked through the doors of Lambda, I felt welcomed and cared for. The staff's compassion and dedication made my hospital experience much more manageable.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up">
            <div class="review p-4">
              <div class="person">
                <div class="text ms-3">
                  <h6 class="mb-0">Ahmad Bin Mamad</h6>
                </div>
              </div>
              <p class="pt-4">I am extremely satisfied with the care I received at Lambda. The staff's professionalism, warmth, and expertise made my hospitalization as comfortable as possible.</p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up">
            <div class="review p-4">
              <div class="person">
                <div class="text ms-3">
                  <h6 class="mb-0">John Cena</h6>
                </div>
              </div>
              <p class="pt-4">The team at Lambda not only treated my medical condition effectively but also provided emotional support during a challenging time. Their kindness and expertise made all the difference.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Reviews -->

    <!-- Feedback -->
    <section class="contact">
      <div class="container">
        <div class="row text-center text-light p-4">
          <h3>GET IN TOUCH</h3>
        </div>
        <div class="row">
          <!-- MAP -->
          <div class="col">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7906.337638151198!2d110.37305805752567!3d-7.7719162067436685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sGadjah%20Mada%20University!5e0!3m2!1sen!2sid!4v1683547766177!5m2!1sen!2sid"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

          <!-- MESSAGE -->
          <div class="col text-light">
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Name</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name here" />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your message here..."></textarea>
                </div>
                <button type="submit" class="btn btn-dark rounded-pill" id="buttonSend">SEND</button>
                <p id="newText"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Feedback -->

    <!-- Footer -->
    <footer class="bg-dark text-center text-lg-start">
      <!-- Footer -->
      <footer class="text-center text-lg-start bg-dark text-light">
        <!-- Section: Social media -->
        <div class="container">
          <section class="d-flex justify-content-center justify-content-lg-between p-4">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
              <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
        </div>
        <div class="random-line"></div>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4"><i class="fas fa-plus me-3"></i>Lambda Hospital</h6>
                <p>
                  ©Lambda Hospital 2023. All rights reserved. This website is designed to provide general information about our services and should not be used as a substitute for medical advice or treatment. Please consult with a
                  healthcare professional for personalized medical guidance.
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3">Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</i></p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i>+62 821234567890</p>
                <p><i class="fas fa-print me-3"></i>(0274) 499593</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">
          © 2023 Copyright:
          <a class="text-reset fw-bold" href="#">Lambda Hospital</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </footer>
    <!-- END Footer -->

    <!-- BOOTSRAP JS -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/landing-page.js"></script>
  </body>
</html>
