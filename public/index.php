<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Professional accounting services for businesses and individuals.">
  <meta name="keywords" content="accounting, tax preparation, financial services">
  <meta name="author" content="Belsty Jemberie">
  <link rel="icon" type="image/svg+xml" href="images/logo.jpg">
  <title>Belsty Jemberie</title>
  
  <!-- Bootstrap CSS -->
  <link href="bootstrap/bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>

  <!-- Navigation Bar -->
  <?php
  include('includes/navbar.php');
  ?>

  <!-- Hero Section -->
  <section class="hero bg-primary text-white text-center py-5">
    <div class="container contents">
      <h1 class="text-success">Professional Accounting Services</h1>
      <p class="text-black text-break fs-5 fw-normal">The Accountant's Office is founded and operated on the core values of honesty, integrity and service. We strive to provide the best possible service for our clients.
         The highest level of ethics and integrity as well as great attention to detail is required to maintain the level of service that our clients expect and deserve.</p>
      <a href="#quote" class="btn btn-light btn-lg mt-4">Get a Quote</a>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="about py-5">
    <div class="container-fluid">
      <h2 class="text-center mb-4">About Us</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="images/accounting.webp" class="img-fluid" alt="Accountant">
        </div>
        <div class="col-md-6">
             <p>We provide top-notch accounting services for individuals and businesses. 
                With years of experience and a team of highly skilled professionals, we help you manage your financials, file taxes, and plan for the future.
                Our mission is to ensure that your financial health remains strong and that you have peace of mind.
            </p>
          <p><strong>Our Values:</strong> Integrity, Accuracy, Customer Satisfaction</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section id="testimonials" class="testimonials bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">What Our Clients Say</h2>
      <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item">
            <div class="testimonial">
                <div class="circle center">
                    <img src="images/logo.jpg" alt="testimonials">
                </div>
                <p>"Highly recommend! They saved me time and money with their expert advice."</p>
                <h5>– John Smith, Freelancer</h5>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial">
                <div class="circle center">
                    <img src="images/wubshet.jpg" alt="testimonials">
                </div>
                <p>"Highly recommend! They saved me time and money with their expert advice."</p>
                <h5>– Wubshet Adane, Freelancer</h5>
            </div>
          </div>
          <div class="carousel-item active">
            <div class="testimonial">
                <div class="circle center">
                    <img src="images/img_rr_01.jpg" alt="testimonials">
                </div>
                <p>"Highly recommend! They saved me time and money with their expert advice."</p>
                <h5>– John Smith, Freelancer</h5>
            </div>
          </div>
          <div class="carousel-item active">
            <div class="testimonial">
                <div class="circle center">
                    <img src="images/ethio programmer.png" alt="testimonials">
                </div>
                <p>"Highly recommend! They saved me time and money with their expert advice."</p>
                <h5>– John Smith, Freelancer</h5>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial">
                <div class="circle center">
                    <img src="images/software.jpg" alt="testimonials">
                </div>
                <p>"Highly recommend! They saved me time and money with their expert advice."</p>
                <h5>– John Smith, Freelancer</h5>
            </div>
          </div>
          <!-- Add more testimonials as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
          <span class="">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
          <span class="visually">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!--  map and Contact Form Preview -->
  <div class="row mapandContact">
        <!--google map section-->
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d823.5026602825341!2d38.79738558861455!3d9.018187793349805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8569ac2261d9%3A0xf7e792c8de1c2299!2z4YiI4YyI4YigIOGNiOGIiOGJgCDhi6jhjIjhiaDhi6sg4Yib4YuV4Yqo4YiN!5e1!3m2!1sam!2set!4v1728049435085!5m2!1sam!2set" width="100%" height="100%" style="border-radius:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Contact Form Preview -->
        <div class="col-md-5">
            <section id="contact" class="contact py-5">
              <div class="container">
                <h2 class="text-center mb-4">Get in Touch</h2>
                <form action="contact.php" method="POST">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="name" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="company" class="form-label">Company Name</label>
                      <input type="text" class="form-control" id="company" name="company" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="phone" class="form-label">Phone Number</label>
                      <input type="tel" class="form-control" id="phone" name="phone" maxlength="10" pattern="\d{3}-\d{3}-\d{4}" inputmode="numeric"
                            title="Please enter valid Phone number" placeholder="09-00-00-00-00" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Send Message message to accountant</button>
                </form>
              </div>
            </section>
        </div>
      </div>
 

  <!-- Footer -->
  <?php
  include('includes/footer.php');
  ?>

  <!-- Bootstrap JS and Dependencies -->
  <script src="bootstrap/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
