<?php include 'header.php';?>

<main class="main">
  <div
    class="site-breadcrumb"
    style="background: url(assets/img/breadcrumb/01.jpg)"
  >
    <div class="container">
      <h2 class="breadcrumb-title">Contact</h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.php">Home</a></li>
        <li class="active">Contact</li>
      </ul>
    </div>
  </div>
  <div class="contact-area py-120">
    <div class="container">
      <div class="contact-content">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="contact-info">
              <i class="fal fa-map-marker-alt"></i>
              <h5>Office Address</h5>
              <p>Banglore</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="contact-info">
              <i class="fal fa-phone"></i>
              <h5>Call Us</h5>
              <p>+91-9980261543</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="contact-info">
              <i class="fal fa-envelope"></i>
              <h5>Email Us nandiholidays@gmail.com</h5>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="contact-info">
              <i class="fal fa-clock"></i>
              <h5>Office Open</h5>
              <p>Sun - Fri (10AM - 08PM)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-wrapper">
        <div class="row">
          <div class="col-md-12 align-self-center">
            <div class="contact-form">
              <div class="contact-form-header">
                <h2>Get In Touch</h2>
              </div>
              <form
                method="post"
                action="../../external.php?link=https://live.themewild.com/airfly/assets/php/contact.php"
                id="contact-form"
              >
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Your Name"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Your Email"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    placeholder="Your Subject"
                    required
                  />
                </div>
                <div class="form-group">
                  <textarea
                    name="message"
                    cols="30"
                    rows="5"
                    class="form-control"
                    placeholder="Write Your Message"
                  ></textarea>
                </div>
                <button type="submit" class="contact-btn">
                  <i class="far fa-paper-plane"></i> Send Message
                </button>
                <div class="col-md-12 mt-3">
                  <div class="form-messege text-success"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'footer.php';?>
