<?php include 'header.php';?>

<main class="main">
  <div
    class="site-breadcrumb"
    style="background: url(assets/img/breadcrumb/01.jpg)"
  >
    <div class="container">
      <h2 class="breadcrumb-title">Login</h2>
      <ul class="breadcrumb-menu">
        <li><a href="index-2.php">Home</a></li>
        <li class="active">Login</li>
      </ul>
    </div>
  </div>

  <div class="login-area py-120">
    <div class="container">
      <div class="col-md-5 mx-auto">
        <div class="login-form">
          <div class="login-header">
            <img src="assets/img/logo/logo-dark.png" alt="" />
            <p>login with your airfly account</p>
          </div>
          <form action="#">
            <div class="form-group">
              <label>Email Address</label>
              <input
                type="email"
                class="form-control"
                placeholder="Your Email"
              />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input
                type="password"
                class="form-control"
                placeholder="Your Password"
              />
            </div>
            <div class="d-flex justify-content-between mb-4">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="remember"
                />
                <label class="form-check-label" for="remember">
                  Remember Me
                </label>
              </div>
              <a href="forgot-password.php" class="forgot-pass"
                >Forgot Password?</a
              >
            </div>
            <div class="d-flex align-items-center">
              <button type="submit" class="login-btn">
                <i class="far fa-sign-in"></i> Login
              </button>
            </div>
          </form>
          <div class="login-footer">
            <p>Don't have an account? <a href="register.php">Register.</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="subscribe-area pt-60 pb-60">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-6">
          <div class="subscribe-content">
            <h4>Subscribe To Our Newsletter</h4>
            <p>
              It is a long established fact that a reader will be distracted by
              the readable content of a page when looking at its layout.
            </p>
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <div class="subscribe-form">
            <form action="#">
              <div class="form-group">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter Your Email"
                />
              </div>
              <button type="submit">
                <i class="far fa-paper-plane"></i>Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include 'footer.php';?>
