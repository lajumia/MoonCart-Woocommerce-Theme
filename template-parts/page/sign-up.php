<?php /* Template Name: Sign Up Template */?>

<?php get_header();?>

    <section class="section">
      <div class="auth_container">
        <div class="auth_img">
          <img src="./image/auth-image.png" alt="" class="auth_image" />
        </div>
        <div class="auth_content">
          <form action="" class="auth_form">
            <h2 class="form_title">Create your account</h2>
            <p class="auth_p">Enter your details below</p>
            <div class="form_group">
              <input type="text" placeholder="Name" class="form_input" />
            </div>
            <div class="form_group">
              <input type="email" placeholder="Email" class="form_input" />
            </div>
            <div class="form_group form_pass">
              <input
                type="password"
                placeholder="Password"
                class="form_input" />
            </div>
            <div class="form_group">
              <button class="form_btn">
                <a href="#" class="form_link">Create Account</a>
              </button>
            </div>
            <div class="form_group">
              <span
                >Already have an account?
                <a href="./login.html" class="form_auth_link">Login</a></span
              >
            </div>
          </form>
        </div>
      </div>
    </section>

   <?php get_footer();?>