@extends('layouts.front')

@section('content')
    <main role="main" aria-label="main">
      <!-- Hero section -->
      <section id="home">
        <div class="container hero-section">
          <div data-aos="zoom-in" data-aos-duration="1500" class="hero-text">
            <h1 class="hero-header">
              Obtain Your Rivers State and Local Government of Origin Certificate
              with a Few Clicks.
            </h1>
            <p class="hero-paragraph">
              Empowering your Identity. Simplifying the Process
            </p>
            <button class="btn-reuse" aria-label="Apply Now">
              <a href="{{route('login')}}"
                >Apply Now</a
              >
            </button>
          </div>
          <div
            data-aos="zoom-in-up"
            data-aos-duration="1500"
            class="hero-image-box"
          >
            <img
              class="hero-image"
              src="assets/bg-image.png"
              alt="background image"
            />
          </div>
        </div>
      </section>
      <!--End Hero section -->

      <!-- How to apply section -->
      <section class="pt-4 apply-section" id="apply">
        <div class="apply-header">
          <h1 class="heading-secondary">How to apply</h1>
          <p class="mt-1">
            Follow these Four simple steps to obtain your <br />
            certificate of origin.
          </p>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" class="apply-contents">
          <div class="apply-content">
            <img class="mt-1" src="assets/login-icon.png" alt="Login Icon" />
            <h1>Create an Account.</h1>
            <p>
              Begin by creating your personalized account on our platform, login
              in and request for certificate.
            </p>
          </div>
          <div class="apply-content">
            <img class="mt-1" src="assets/contact_icon.png" alt="Login Icon" />
            <h1>Fill in Your Details.</h1>
            <p>
              Provide the necessary information to complete your application.
            </p>
          </div>
          <div class="apply-content">
            <img class="mt-1" src="assets/backup_icon.png" alt="Login Icon" />
            <h1>Upload Supporting Documents.</h1>
            <p>
              Attach your passport and Your NIN and other requested document to
              verify your identity and establish your connection to Rivers state.
            </p>
          </div>
          <div class="apply-content">
            <img class="mt-1" src="assets/bookmark_icon.png" alt="Login Icon" />
            <h1>Get Certificate.</h1>
            <p>
              After Submission, your application will be approved and your
              certificate will be sent to your email for your use. You can print at liberty.
            </p>
          </div>
        </div>
        <div class="btn-box">
          <button class="btn-reuse" aria-label="Apply Now">
            <a href="{{route('login')}}"
              >Get Started</a
            >
          </button>
        </div>
      </section>
      <!--End How to apply section -->

      <!-- Who we are section -->
      <section class="about-section">
        <div
          data-aos="fade-up"
          data-aos-offset="50"
          data-aos-duration="1000"
          data-aos-easing="ease-in-sine"
          class="about-texts"
        >
          <h1 class="heading-secondary">About</h1>
          <div class="about-paragraph">
            <p>
              The Rivers State of Origin and Local Government of Origin
              Certificate Portal offers a streamlined procedure for acquiring
              the official State of Origin and Local Government of Origin
              Certificate. Our mission is to empower individuals by preserving
              and commemorating their distinct identities, thereby showcasing
              the rich heritage of our state.
            </p>
            <p>
              Recognizing the significance of this document in establishing
              one's roots and local connections, we at Rivers State have developed
              a user-friendly platform designed to enhance the application
              process, ensuring it is efficient, secure, and devoid of
              unnecessary complications.
            </p>
          </div>

          <button class="btn-reuse" aria-label="Apply Now">
            <a href="{{route('login')}}"
              >Get Started</a
            >
          </button>
        </div>
        <div
          data-aos="fade-down"
          data-aos-duration="1000"
          class="about-img-box"
        >
          <img src="assets/aboutUs.png" alt="About us" class="about-img" />
        </div>
      </section>
      <!--End  Who we are section -->

      <!-- FAQ section -->
      <section class="faq-section" id="faq">
        <div class="faq-container">
          <div
            data-aos="zoom-in-out"
            data-aos-duration="1000"
            class="faq-header"
          >
            <h1 class="heading-secondary">Frequently Asked Questions</h1>
          </div>
          <div
            data-aos="fade-in"
            data-aos-easing="linear"
            data-aos-duration="1500"
            class="faq-contents"
          >
            <div class="faq-content" onclick="toggleFAQ('faq1')">
              <div class="faq__head-container">
                <h5 class="faq-head">
                  How do I apply for my State of Origin Certificate?
                </h5>
                <img src="assets/expand_more.png" alt="expandOmg" />
              </div>
              <p class="faq-body" id="faq1">
                Application can be made on the portal via
                <a href="{{route('login')}}"
                  >{{route('login')}}</a
                >
                . Ensure you register or sign up to begin the process.
              </p>
            </div>
            <div class="faq-content" onclick="toggleFAQ('faq2')">
              <div class="faq__head-container">
                <h5 class="faq-head">After login, what is next?</h5>
                <img src="assets/expand_more.png" alt="expandOmg" />
              </div>
              <p class="faq-body" id="faq2">
                Once successfully logged in, click on “Request Certificate” from
                your Menu, fill the form and follow the process.
              </p>
            </div>
            <div class="faq-content" onclick="toggleFAQ('faq3')">
              <div class="faq__head-container">
                <h5 class="faq-head">
                  How long should I wait before getting my certificate?
                </h5>
                <img src="assets/expand_more.png" alt="expandOmg" />
              </div>
              <p class="faq-body" id="faq3">
                Once your application is verified and approved, you can expect to
                receive it via email within 24 to 48 hours.
              </p>
            </div>
          </div>
          <a class="faq-more" href="faq.html">
            <button class="btn-reuse">Read more</button>
          </a>
        </div>
      </section>
      <!--End of FAQ section -->

      <!-- contact section -->
      <section id="contact" class="pt-5 contact-section">
        <div class="faq-header">
          <h1 class="heading-secondary">Contact Us</h1>
        </div>

        <div class="contact-boxs">
          <div class="contact-box">
            <a
            href="https://wa.me/2348064189445"
            class="whatsapp"
            target="_blank"
            >
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_332_402)">
              <path d="M0.938994 21.7367C0.937963 25.4336 1.91146 29.0433 3.76256 32.2249L0.761963 43.0956L11.9737 40.1787C15.0747 41.8538 18.5492 42.7315 22.08 42.7317H22.0892C33.7449 42.7317 43.233 33.3206 43.2379 21.7532C43.2402 16.148 41.0422 10.8772 37.0489 6.91177C33.0562 2.94666 27.7462 0.761835 22.0884 0.759277C10.4313 0.759277 0.943979 10.1698 0.939166 21.7367" fill="#00DDA4"/>
              <path d="M0.183906 21.7299C0.182703 25.5597 1.19109 29.2985 3.10819 32.5941L0 43.8545L11.6138 40.833C14.8137 42.5642 18.4166 43.4769 22.0827 43.4783H22.0921C34.166 43.4783 43.9948 33.7287 44 21.7473C44.0021 15.9406 41.7251 10.4804 37.5891 6.37284C33.4525 2.26583 27.9525 0.0023876 22.0921 0C10.0162 0 0.188719 9.74822 0.183906 21.7299ZM7.10033 32.0265L6.66669 31.3435C4.84378 28.4675 3.88162 25.144 3.883 21.7312C3.88678 11.7724 12.055 3.67008 22.099 3.67008C26.9631 3.67212 31.5342 5.55355 34.9724 8.96713C38.4105 12.3811 40.3023 16.9192 40.3011 21.7459C40.2966 31.7047 32.1282 39.8081 22.0921 39.8081H22.0849C18.817 39.8064 15.6121 38.9356 12.8171 37.29L12.1519 36.8986L5.26006 38.6915L7.10033 32.0265Z" fill="url(#paint0_linear_332_402)"/>
              <path d="M16.6165 12.6455C16.2064 11.7411 15.7748 11.7228 15.3848 11.707C15.0655 11.6933 14.7004 11.6944 14.3357 11.6944C13.9706 11.6944 13.3775 11.8306 12.8761 12.3738C12.3743 12.9175 10.9601 14.2313 10.9601 16.9036C10.9601 19.576 12.9217 22.1585 13.1951 22.5213C13.4689 22.8833 16.9821 28.5426 22.546 30.7197C27.1701 32.529 28.1111 32.1692 29.1147 32.0785C30.1185 31.9881 32.3535 30.7649 32.8095 29.4966C33.2658 28.2285 33.2659 27.1414 33.129 26.9143C32.9922 26.688 32.6272 26.552 32.0797 26.2805C31.5321 26.0088 28.8409 24.6948 28.3392 24.5135C27.8373 24.3324 27.4725 24.242 27.1074 24.7859C26.7423 25.3289 25.6941 26.552 25.3746 26.9143C25.0554 27.2773 24.7359 27.3225 24.1886 27.0509C23.6408 26.7783 21.8779 26.2055 19.7864 24.3553C18.1591 22.9155 17.0604 21.1376 16.7411 20.5938C16.4218 20.0508 16.7069 19.7564 16.9814 19.4858C17.2273 19.2424 17.529 18.8515 17.8029 18.5345C18.0759 18.2173 18.167 17.991 18.3495 17.6287C18.5322 17.2662 18.4408 16.9489 18.3041 16.6773C18.167 16.4056 17.1032 13.7194 16.6165 12.6455Z" fill="white"/>
              </g>
              <defs>
              <linearGradient id="paint0_linear_332_402" x1="2200" y1="4385.45" x2="2200" y2="0" gradientUnits="userSpaceOnUse">
              <stop stop-color="#F9F9F9"/>
              <stop offset="1" stop-color="white"/>
              </linearGradient>
              <clipPath id="clip0_332_402">
              <rect width="44" height="44" fill="white"/>
              </clipPath>
              </defs>
              </svg>

           <p class="contact-paragraph">Chat with us</p>
           </a
          >
          </div>
          <div class="contact-box">
            <a
            href="mailto:info@originabia.abiastate.com"
            class="whatsapp"
            target="_blank"
            >
            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M40.3333 10.9999C40.3333 8.98325 38.6833 7.33325 36.6666 7.33325H7.33329C5.31663 7.33325 3.66663 8.98325 3.66663 10.9999V32.9999C3.66663 35.0166 5.31663 36.6666 7.33329 36.6666H36.6666C38.6833 36.6666 40.3333 35.0166 40.3333 32.9999V10.9999ZM36.6666 10.9999L22 20.1666L7.33329 10.9999H36.6666ZM36.6666 32.9999H7.33329V14.6666L22 23.8333L36.6666 14.6666V32.9999Z" fill="#00DDA4"/>
              </svg>


           <p class="contact-paragraph">Email us</p>
           </a
          >
          </div>
          <div class="contact-box">
            <a href="tel:+2347013483389" class="whatsapp" target="_blank">

            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M38.4999 28.3433L28.8383 27.225L24.2183 31.845C19.0138 29.1981 14.7835 24.9678 12.1366 19.7633L16.7749 15.125L15.6566 5.5H5.55494C4.49161 24.1633 19.8366 39.5083 38.4999 38.445V28.3433Z" fill="#00DDA4"/>
              </svg>
           <p class="contact-paragraph">Call us</p>
           </a
          >
          </div>

        </div>
      </section>
      <!--End of contact section -->
    </main>

    <script src="script/script.js"></script>

@endsection
