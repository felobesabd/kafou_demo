<div class="scrollify main-section footer-wrapper">
  <footer class="footer-section">
    <div class="container">
      <div class="footer-content">
        <div class="row" style="gap: 0;align-items: start">
          <!-- Map Column -->
          <div class="col-lg-3 col-md-6">
            <div class="footer-logo-wrapper">
              <div class="iframe-map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14487.795108506658!2d46.66912698990479!3d24.797207452996744!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc09aaf05318ccdd6!2sKafou%20Group!5e0!3m2!1sen!2ssa!4v1587068864244!5m2!1sen!2ssa" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" sandbox="allow-same-origin allow-scripts allow-forms allow-popups allow-popups-to-escape-sandbox allow-presentation"></iframe>
              </div>
            </div>
            <p style="font-size: 13px">We are a medical sales & marketing company, part of Kafou Group based in Riyadh, Saudi Arabia</p>
          </div>
          <!-- Kafou Medical Column -->
          <div class="col-lg-3 col-md-6 class-d-none">
            <div class="footer-column">
              <h3>Kafou Medical</h3>
              <ul class="footer-links">
                <li><a href="{{ route('front.why_kafou') }}">Why Kafou Medical?</a></li>
                <li><a href="{{ route('front.our_partners') }}">Our Partners</a></li>
                <li><a href="{{ route('front.our_clients') }}">Our Clients</a></li>
                <li><a href="https://kafougroup.zohorecruit.com/jobs/kafoumedical">Job Openings</a></li>
                <li><a href="{{ route('front.direct_apply') }}">Direct Apply</a></li>
                <li><a href="{{ route('front.contact_us') }}">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <!-- Kafou Group Column -->
          <div class="col-lg-3 col-md-6 class-d-none">
            <div class="footer-column">
              <h3>Kafou Group</h3>
              <ul class="footer-links">
                <li><a href="https://kafougroup.com/">Kafou Commercial Investment Co.</a></li>
                <li><a href="https://kafougroup.com/">Kafou Corporation</a></li>
                <li><a href="https://kafougroup.com/">Kafou Development Co</a></li>
                <li><a href="https://drcsa.com">Diwan Al Rawnaq Co</a></li>
                <li><a href="https://www.ktsco.com.sa">Kafou Technical Services Co. Ltd</a></li>
                <li><a href="https://kafoudent.com">Kafou Dent</a></li>
                <li><a href="https://kafouenergy.com">Kafou Energy</a></li>
              </ul>
            </div>
          </div>
          <!-- Contact Information Column -->
          <div class="col-lg-3 col-md-6">
            @php
                use App\Helpers\PageContentHelper;
                $socialLinks = PageContentHelper::getSocialMediaLinks();
            @endphp
            <div class="footer-column">
              <h3>Contact Information</h3>
              <ul class="contact-info">
                <li>
                  <i class="fas fa-map-marker-alt"></i>
                  <span>{{ $socialLinks['address'] ?: '7492 Abi Bakr As Siddiq Rd. Riyadh 13316-4305' }}</span>
                </li>
                <li>
                  <i class="fas fa-phone"></i>
                  <a href="tel:{{ $socialLinks['phone'] ?: '+966 11 203 4571' }}">{{ $socialLinks['phone'] ?: '+966 11 203 4571' }}</a>
                </li>
                <li>
                  <i class="fas fa-envelope"></i>
                  <a href="mailto:{{ $socialLinks['email'] ?: 'info@kafoumedical.com' }}">{{ $socialLinks['email'] ?: 'info@kafoumedical.com' }}</a>
                </li>
              </ul>
              <div class="social-links">
                <a href="{{ $socialLinks['facebook'] }}" class="social-link" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{ $socialLinks['twitter'] }}" class="social-link" target="_blank" rel="noopener noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z"/></svg>
                </a>
                <a href="{{ $socialLinks['linkedin'] }}" class="social-link" target="_blank" rel="noopener noreferrer">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- Bottom Bar -->
        <div class="footer-bottom">
          <div class="copyright">
            © 2024 Kafou Medical - All Rights Reserved Made with <i class="fas fa-heart" style="color: white;"></i> in KSA
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
