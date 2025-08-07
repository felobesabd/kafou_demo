<header id="Header">
  <div class="layout-root">
    <!-- Navigation Menu -->
    <section class="navigation-root" id="navigation">
      <div class="navigation-overlay"></div>
      <nav class="navigation-nav">
        <div class="sidebar-header">
          <div class="logo">
            <div class="logo-icon">
              <a class="logo-link-header" href="{{ url('/') }}" title="Kafou Medical">
                <img class="img-fluid logo-icon"
                     src="{{ asset('assets/images/kafou_green_logo.png') }}" alt="Kafou Medical Logo" />
              </a>
            </div>
          </div>
          <button class="sidebar-close" id="sidebarClose">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="main-content">
          <div class="menu-block">
            <ul class="menu-primary">
              <li class="menu-item-primary">
                <a class="nav-item-primary" href="{{ url('/welcome-kafou') }}">
                  Mission & Vision
                </a>
              </li>
              <li class="menu-item-primary">
                <a class="nav-item-primary" href="{{ route('front.why_kafou') }}">
                    Why Partner with Kafou Medical?
                </a>
              </li>
              <li class="menu-item-primary">
                <a class="nav-item-primary" href="{{ url('/#anesthesia-section') }}">
                  Divisions
                </a>
              </li>
              <li class="menu-item-primary">
                <a class="nav-item-primary" href="{{ route('front.our_partners') }}">
                  Our Partners
                </a>
              </li>
              <li class="menu-item-primary">
                <a class="nav-item-primary" href="{{ route('front.our_clients') }}">
                  Our Clients
                </a>
              </li>
              <li class="menu-item-primary">
                <a class="nav-item-primary" href="{{ route('ethics_compliance') }}">
                  Ethics & Compliance
                </a>
              </li>
            </ul>
            <ul class="menu-secondary">
              {{--<li class="menu-item-secondary">
                <a class="nav-item-secondary" href="#">
                  Join Our Team
                </a>
              </li>--}}
              <li class="menu-item-secondary">
                <a class="nav-item-secondary" href="https://kafougroup.zohorecruit.com/jobs/kafoumedical"
                   target="_blank" rel="noopener noreferrer">
                  Job Openings
                </a>
              </li>
              <li class="menu-item-secondary">
                <a class="nav-item-secondary" href="{{ route('front.direct_apply') }}">
                  Direct Apply
                </a>
              </li>
              <li class="menu-item-secondary">
                <a class="nav-item-secondary" href="{{ route('front.contact_us') }}">
                  Contact Us
                </a>
              </li>
              <li class="menu-item-secondary">
                <a class="nav-item-secondary" href="#">
                  Account Opening Form
                </a>
              </li>
            </ul>
          </div>
          {{--<section class="offices">
            <address>
              <a href="{{ url('/') }}"
                 rel="noopener noreferrer" class="city">
                Kafou
              </a>
            </address>
          </section>--}}
        </div>
      </nav>
    </section>
    <!-- Header Logo -->
    <a id="logo" class="logo-link-header" href="{{ url('/') }}" title="Kafou Medical">
      <img id="main-logo" class="img-fluid logo-icon"
           src="{{ asset('assets/images/kafou_green_logo.png') }}" alt="Kafou Medical Logo" />
    </a>
    <div style="display: flex; align-items: center;">
      <button class="categories-btn">Categories</button>
      <div class="header-divider"></div>
      <button class="menu-toggle" id="hamburger">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</header>
