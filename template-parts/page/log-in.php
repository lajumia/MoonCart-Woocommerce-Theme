<?php /* Template Name: Sign in Template */?>

<?php get_header();?>

    <section class="section">
      <div class="auth_container">
        <div class="auth_img">
          <img src="./image/auth-image.png" alt="" class="auth_image" />
        </div>
        <div class="auth_content">
          <form action="" class="auth_form">
            <h2 class="form_title">Login to your account</h2>
            <p class="auth_p">Enter your details below</p>
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
                <a href="#" class="form_link">Login</a>
              </button>
            </div>
            <div class="form_group">
              <span
                >Don't have an account?
                <a href="./sign-up.html" class="form_auth_link"
                  >Reegister</a
                ></span
              >
            </div>
          </form>
        </div>
      </div>
    </section>
<?php get_footer();?>