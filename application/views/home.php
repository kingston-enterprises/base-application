<title><?php echo $title ?></title>

<!-- Landing Area -->
<section id="landing-area" class="mb-40" aria-label="Landing Area">
    <div class="px-6 py-12 md:px-12 bg-gray-100 text-gray-800 text-center lg:text-left" aria-label="Landing Area Main Section">
      <div class="container mx-auto xl:px-32">
        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
          <div class="mt-12 lg:mt-0">
            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12" aria-label="Landing Area Heading">
            	We Design Experiences That<br><span class="text-blue-600">Change Lives</span>
            </h1>
            <a class="inline-block px-7 py-3 mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#about-us" role="button" aria-label="Landing Area About Us Button">About Us</a>
            <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#pricing" role="button" aria-label="Landing Area Our Prices Button">Our Prices</a>
          </div>
          <div class="mb-12 lg:mb-0">
            <img src="/img/landing-img.jpg" class="w-full rounded-lg shadow-lg" alt="Laptop with Code on screen and books on table" aria-label="Landing Area Main Image">
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- About Section -->
<section id="about-us" class="mb-32 text-gray-800 text-center lg:text-left" aria-label="About Section">
    <div class="flex flex-wrap justify-center">
      <div class="grow-0 shrink-0 basis-auto w-full lg:w-10/12 px-3">
        <div class="grid lg:grid-cols-2 gap-x-6 items-center">
          <div class="mb-10 lg:mb-0">
            <h2 class="text-3xl font-bold underline" aria-label="About Section Heading">
              About Us
            </h2>
            <br>
            <h3 aria-label="About Section Description">
              <span class="text-blue-600">Helping your brand reach the next level!</span><br>
              We are a freelance software development agency that focuses on delvering high quality software solutions for our clients. Our services range from business and personnal websites to web based enterprise applications.
            </h3>
          </div>

          <div class="mb-6 md:mb-0">
            <div class="md:flex flex-row justify-center">
              <a href="#contact-us" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" aria-label="About Section Caontact Us Button">
                Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="pricing" class="mb-32 text-gray-800" aria-label="Pricing Section">
    <style>
      #pricing-block-5 {
        height: 300px;
        padding-top: 55px;
      }

      @media (min-width: 992px) {
        #pricing-block-5 {
          height: 400px;
          padding-top: 80px;
        }
      }
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);
      }
    </style>

    <div id="pricing-block-5" class="background-radial-gradient text-center text-white">
      <h2 class="text-3xl font-bold text-center mb-12" aria-label="Pricing Section Heading">Pricing</h2>
    </div>

    <div class="grid lg:grid-cols-3 px-6 md:px-12 xl:px-32" style="margin-top: -200px">
      

      <div aria-label="Enterprise Pricing Card" class="p-0 py-12">
        <div class="block rounded-lg shadow-lg bg-white h-full z-10">
          <div class="p-6 border-b border-gray-300 text-center">
            <p class="uppercase mb-4 text-sm" aria-label="Enterprise Pricing Card Header">
              <strong>Enterprise</strong>
            </p>
            <h3 class="text-2xl mb-6">
              <strong>E 2380</strong>
            </h3>
            <strong>+</strong>
            <h5 class="text-2xl mb-6">
              <strong>E 180</strong>
              <small class="text-gray-500 text-sm">/month</small>
            </h5>

            <a href="#contact-us" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full" aria-label="Enterprise Pricing Card contact Button">
              More info
            </a>
          </div>
          <div class="p-6">
            <ol class="list-inside" aria-label="Advanced Pricing Card Details List">
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Free Web Design
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Source Code Incl
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Domain Purchase
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Unlimited email inboxes (e.g sifiso@example.com )
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg> up to 2 updates/year
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Database Services
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>24/7 support
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Dedicated server setup (VPS)
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>API Development
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>sub domain setup
              </li>
            </ol>
          </div>
        </div>
      </div>

      <div class="p-0" aria-label="Basic Pricing Card">
        <div class="block rounded-lg shadow-lg bg-white h-full lg:rounded-tr-none lg:rounded-br-none">
          <div class="p-6 border-b border-gray-300 text-center">
            <p class="uppercase mb-4 text-sm">
              <strong>Basic</strong>
            </p>
            <h3 class="text-2xl mb-6" aria-label="Basic Pricing Card Header">
              <strong>E 880</strong>
            </h3>
            <strong>+</strong>
            <h5 class="text-2xl mb-6">
              <strong>E 100</strong>
              <small class="text-gray-500 text-sm">/month</small>
            </h5>

            <a href="#contact-us" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full" aria-label="Basic Pricing Card Contact Button">
              More info
            </a>
          </div>
          <div class="p-6">
            <ol class="list-inside" aria-label="Basic Pricing Details List">
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Free Web Design
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Source Code Incl
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Domain Purchase
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Unlimited email inboxes (e.g sifiso@example.com )
              </li>
            </ol>
          </div>
        </div>
      </div><div class="p-0 py-12" aria-label="Advanced Pricing Card">
        <div class="block rounded-lg shadow-lg bg-white h-full lg:rounded-tl-none lg:rounded-bl-none">
          
          <div class="p-6 border-b border-gray-300 text-center">
            <p class="uppercase mb-4 text-sm" aria-label="Advanced Pricing Card Heading">
              <strong>Advanced</strong>
            </p>
            <h3 class="text-2xl mb-6">
              <strong>E 1380</strong>
            </h3>
            <strong>+</strong>
            <h5 class="text-2xl mb-6">
              <strong>E 120</strong>
              <small class="text-gray-500 text-sm">/month</small>
            </h5>

            <a href="#contact-us" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full" aria-label="Advanced Pricing Card Contact Button">
              More info
            </a>
          </div>
        <div class="p-6">
            <ol class="list-inside" aria-label="Advanced Pricing Card Details List">
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Free Web Design
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Source Code Incl
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Domain Purchase
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Unlimited email inboxes (e.g sifiso@example.com )
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg> up to 2 updates/year
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>Database Services
              </li>
              <li class="mb-4 flex items-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="text-green-600 w-4 h-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                  </path>
                </svg>24/7 support
              </li>
              
              
              
            </ol>
          </div></div>
      </div>
    </div>
  </section>


<!-- Contact section -->
<section id="contact-us" class="container my-24 px-6 mx-auto" aria-label="Contact Section">
  <div class="mb-32 text-gray-800">
    <div class="relative overflow-hidden bg-no-repeat bg-cover" style="background-position: 50%; background-image: url('/img/bg-1.jpg'); height: 300px;">
    </div>
    <div class="container w-full flex justify-center text-gray-800 px-4 md:px-12">
      <div class="block rounded-lg shadow-lg py-10 md:py-12 px-4 md:px-6" style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-x-6 mb-12">
          <div class="mb-12 lg:mb-0 text-center mx-auto">
            <svg class="w-8 h-8 text-blue-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path fill="currentColor" d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 0 1-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 0 1-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 0 0-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 0 0-15.55-3.1l-31.17 10.39a11.95 11.95 0 0 0-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 0 1 8.93 21.57 46.536 46.536 0 0 1-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 0 1 0-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z"></path></svg>
            <h6 class="font-medium">Eswatini</h6>
          </div>
          <div class="mb-12 lg:mb-0 text-center mx-auto">
            <svg class="w-8 h-8 text-blue-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
            <h6 class="font-medium">Manzini</h6>
          </div>
          <div class="mb-6 md:mb-0 text-center mx-auto">
            <svg class="w-8 h-8 text-blue-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>
            <h6 class="font-medium">+ 268 7973 6175</h6>
          </div>
          <div class="text-center mx-auto">
            <svg class="w-8 h-8 text-blue-600 mb-6 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M13.718 10.528c0 .792-.268 1.829-.684 2.642-1.009 1.98-3.063 1.967-3.063-.14 0-.786.27-1.799.687-2.58 1.021-1.925 3.06-1.624 3.06.078zm10.282 1.472c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-1.194c0-3.246-2.631-5.601-6.256-5.601-4.967 0-7.744 3.149-7.744 7.073 0 3.672 2.467 6.517 7.024 6.517 2.52 0 4.124-.726 5.122-1.288l-.687-.991c-1.022.593-2.251 1.136-4.256 1.136-3.429 0-5.733-2.199-5.733-5.473 0-5.714 6.401-6.758 9.214-5.071 2.624 1.642 2.524 5.578.582 7.083-1.034.826-2.199.799-1.821-.756 0 0 1.212-4.489 1.354-4.975h-1.364l-.271.952c-.278-.785-.943-1.295-1.911-1.295-2.018 0-3.722 2.19-3.722 4.783 0 1.73.913 2.804 2.38 2.804 1.283 0 1.95-.726 2.364-1.373-.3 2.898 5.725 1.557 5.725-3.525z"></path></svg>
            <h6 class="font-medium">info@kingston-enterprises.net</h6>
          </div>
        </div>
        <div class="max-w-[700px] mx-auto">
          <form action="/" method="post" aria-label="Contact Section Form">
            <div class="form-group mb-6">
              <input type="text" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" name="name" placeholder="Name" aria-label="Contact Section Form Name Field">
            </div>
            <div class="form-group mb-6">
              <input type="email" class="form-control block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" name="email" placeholder="Email address" aria-label="Contact Section Form Email Field">
            </div>
            <div class="form-group mb-6">
              <textarea class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
            " id="exampleFormControlTextarea13" rows="3" name="message" placeholder="Message" aria-label="Contact Section Form Message Field"></textarea>
            </div>
            <button type="submit" class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out" aria-label="Contact Section Form Submit Button">Send</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>


