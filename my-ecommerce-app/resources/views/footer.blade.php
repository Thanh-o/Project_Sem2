<div class="footer-wrapper">
  <footer class="footer">

      <div class="footer-sections">
          <div class="footer-subscribe">
              <div class="subscribe-content">
                  <div class="subscribe-header">
                      <div class="subscribe-logo">Exclusive</div>
                      <div class="subscribe-text">Subscribe</div>
                  </div>
                  <p class="subscribe-offer">Get 10% off your first order</p>
              </div>
              <div class="subscribe-input">
                  <input type="email" placeholder="Enter your email" />
                  <img class="send-icon" src="{{ asset('images/img/icon-send-3.svg') }}" />
              </div>
          </div>
          <div class="footer-support">
              <div class="section-title">Support</div>
              <div class="support-content">
                  <p class="address">Số 8A, Tôn Thất Thuyết, Mỹ Đình, Nam Từ Liêm, Hà Nội</p>
                  <p class="email">fptaptech@gmail.com</p>
                  <p class="phone">+1234-5678-9874</p>
              </div>
          </div>
          <div class="footer-account">
              <div class="section-title">Account</div>
              <div class="account-content">
                  <p>My Account</p>
                  <p><a href="{{ route('customers.login') }}">Login</a> / <a href="{{ route('customers.signup') }}">Register</a></p>
                  <p><a href="{{ route('cart.index') }}">Cart</a></p>
                  <p>Wishlist</p>
                  <p>Shop</p>
              </div>
          </div>
          <div class="footer-links">
              <div class="section-title">Quick Link</div>
              <div class="links-content">
                  <p>Privacy Policy</p>
                  <p>Terms Of Use</p>
                  <p>FAQ</p>
                  <p><a href="{{ route('contact') }}">Contact</a></p>
              </div>
          </div>
          <div class="footer-about">
              <div class="about-content">
                  <div class="section-title">T2M</div>
                  <p class="about-text">For a community of gamers and all technology lovers in Vietnam.</p>
              </div>
              <div class="social-links">
                  <div class="section-title">Social</div>
                  <div class="social-section">
                    <img class="social-icon" src="{{ asset('images/img/instagram-svgrepo-com-1.svg') }}" />
                    <img class="social-icon" src="{{ asset('images/img/facebook-svgrepo-com-1.svg') }}" />
                    <img class="social-icon" src="{{ asset('images/img/vector-18.svg') }}" />
                    <img class="social-icon" src="{{ asset('images/img/logo-twitter-svgrepo-com-1.svg') }}" />
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-line"></div>
        <div class="footer-content-wrapper">
            <div class="footer-copyright">
                <img class="copyright-icon" src="{{ asset('images/img/icon-copyright-2.svg') }}" />
                <p class="copyright-text">Copyright Aptech 2024. All rights reserved</p>
            </div>
        </div>
      </div>
  </footer>
</div>

<link rel="stylesheet" href="{{ asset('Css/footer.css') }}">
