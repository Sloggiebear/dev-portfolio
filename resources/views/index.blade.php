<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Website Design Ireland</title>
        <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,900&display=swap"
        rel="stylesheet"
        />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" /> 
    </head>

    <body>

      <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid">
        <a class="p-3 navbar-brand" href="#">
          <img id="brand-image" src="{{ URL::asset('/img/amber-and-emerald-logo.svg') }}" class="logo" width="30" height="30" alt="Amber and Emerald">
        </a>
        <span class="brand-text invisible d-none d-lg-inline-block" id="brand-text">Amber and Emerald</span>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg style="fill: #FFFFFF;" viewBox="0 0 100 80" width="40" height="40">
            <rect width="100" height="10"></rect>
            <rect y="30" width="100" height="10"></rect>
            <rect y="60" width="100" height="10"></rect>
          </svg>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#projects">Projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services" tabindex="-1" aria-disabled="true">Services</a>
              </li>
              <li>
                <a id="start-button" class="nav-link btn btn-dark px-3 mx-3 text-uppercase rounded-0" href="#start" tabindex="-1" aria-disabled="true">Start Your Project</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <main>
        <header id="header" class="container-fluid section-header pt-3">
          <div class="row h-100">
            <div class="col-12 col-lg-8 text-white p-3 p-md-5 offset-lg-1 d-flex flex-column align-self-center">
              <h1 class="subhead pt-5">Website Design & Web Development Ireland</h1>
              <h2 class="py-3 m-0 fw-bolder display-1">Hey there,<br>My name is Logan</h2>
              <hr class="my-5 short-line" />
              <p class="m-0">I'm a freelance front-end web developer and designer based in Dublin, Ireland.</p>
            </div>
          </div>
        </header>

        <!-- PROJECTS SECTION -->
        <section class="container">
          <div class="row pb-5 my-lg-5">
            <div class="col-12 py-lg-5 pt-5" id="projects">
              <h2 class="mt-5 subhead">Website Design & Development Projects</h2>
              <span class="display-2 heading">Recent Projects</span>
            </div>
          </div>

          <!-- BTSL NEW ZEALAND -->
          <div class="row my-5 pt-5 portfolio-item">

            <div class="col-12 col-lg-6 order-2 order-lg-2">
              <h3 class="mb-3">BTSL</h3>
              <p>
                BTSL are one of New Zealand's largest construction tendering sites. I worked with a back-end developer and a designer to update their platform.
              </p>
              <div class="tech">
                <p class="subhead">Technical Overview</p>
                <p>
                  I used a combination of HTML5, Bootstrap and custom CSS to create a range of front and back-end user interfaces including features like document uploads, document management and project searches. The UIs made use of modals and expandable elements to keep things clean and organised. The platform was updated onto the Laravel framework for both main-contractor and sub-contractor sites. 
                </p>
                <span>Technologies used</span>
                <ul>
                  <li>HTML</li>
                  <li>SCSS</li>
                  <li>JavaScript</li>
                  <li>Bootstrap</li>
                  <li>Laravel Framework</li>
                </ul>
                <a href="https://workdesk.btsl.co.nz/" class="btn btn-outline-dark rounded-0 text-uppercase mt-3 mb-5" target="_blank">View live project</a>
              </div>
            </div>

            <div class="col-12 col-lg-6 altra order-1 order-lg-1">
              <picture>
                <source srcset="..\img\btsl-nz.webp" type="image/webp">
                <source srcset="..\img\btsl-nz.png" type="image/png"> 
                <img src="..\img\btsl-nz.png" class="img-fluid" alt="BTSL New Zealand Text!">
              </picture>
              <div class="bg-object"></div>
            </div>

          </div>

          <hr class="my-5">

          <!-- FLEX POWER SOLUTIONS -->
          <div class="row portfolio-item mb-5">

            <div class="col-12 col-lg-6 order-2 order-lg-1">
              <h3 class="mb-3">Flex Power Solutions</h3>
              <p>
                This Irish company are on a mission to make a cleaner, energy-efficient future for Ireland. Flex Power Solutions needed a website design to communicate the benefits of diverting excess renewable energy into high-efficiency heat and steam generation. 
              </p>
              <div class="tech pt-4">
                <p class="subhead">Technical Overview</p>
                <p>
                  My role was website design and front-end web development. I used bootstrap for a responsive layout because I wanted to get the foundations laid fast. I added custom javascript for the navbar and header on scroll. I also implemented the <a href="https://michalsnik.github.io/aos/" target="_blank">AOS library</a> to add more style and animation to the site. I worked with a back end developer who specialises in Laravel, I wrote temporary routes before he structured the project to allow the client to update the content on pages through a basic CMS
                </p>
                <span>Technologies used</span>
                <ul>
                  <li>HTML</li>
                  <li>SCSS</li>
                  <li>JavaScript</li>
                  <li>Bootstrap</li>
                  <li>Laravel Framework</li>
                </ul>
                <a href="https://www.flexpowersolutions.com/" class="btn btn-outline-dark rounded-0 text-uppercase mb-5 mt-3" target="_blank">View live project</a>
              </div>
            </div>

            <div class="col-12 col-lg-6 flexpower order-1 order-lg-2 mb-5 mb-lg-0">
              <img src="..\img\flex-power-solutions.png" class="img-fluid" alt="Flex Power Solutions">
              <div class="bg-object"></div>
            </div>

          </div>

          <hr class="my-5">

          <!-- HELLO ALTRA -->
          <div class="row my-5 pt-5 portfolio-item">

            <div class="col-12 col-lg-6 order-2 order-lg-2">
              <h3 class="mb-3">Hello Altra</h3>
              <p>
                Altra needed a new website design with a fast load speed to inform their clients of a new web app they have developed for the nursing home sector to connect families with residents during the pandemic.  
              </p>
              <div class="tech">
                <p class="subhead">Technical Overview</p>
                <p>
                  My role was to take the Adobe XD website design files provided by their designer and convert them into a fully functional, front-end build with Google Analytics and Calendy integration. I used bootstrap for responsive elements and worked with a backend developer who integrated my code into a Laravel setup. 
                </p>
                <span>Technologies used</span>
                <ul>
                  <li>HTML</li>
                  <li>SCSS</li>
                  <li>JavaScript</li>
                  <li>Bootstrap</li>
                </ul>
                <a href="https://www.helloaltra.com/" class="btn btn-outline-dark rounded-0 text-uppercase mt-3 mb-5" target="_blank">View live project</a>
              </div>
            </div>

            <div class="col-12 col-lg-6 altra order-1 order-lg-1">
              <picture>

                <img src="..\img\hello-altra.png" class="img-fluid" alt="Hello Altra">
              </picture>
              <div class="bg-object"></div>
            </div>

          </div>

          <hr class="my-5">

          <!-- GRADIENT -->
          <div class="row portfolio-item">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
              <h3 class="mb-3">Gradient</h3>
              <p>
                The National College of Art and Design uses an alpha grade system for their assessments. This easy-to-use tool allows staff to save time by calculating the overall average grade for up to four assessment criteria.
              </p>
              <span class="subhead">Technical Overview</span>
              <p>
                Gradient is a simple javascript calculator. It began as a spreadsheet to make assessments quicker and more accurate. That was later developed into its first form of <a href="http://gradey.loganmclain.com/">Gradey+</a>. Gradient was devloped from that when the layout was redesigned to be mobile-friendly. 
              </p>
              
                <span>Technologies used</span>
                <div class="tech">
                  <ul>
                    <li>HTML</li>
                    <li>SCSS</li>
                    <li>JavaScript</li>
                  </ul>
                </div>
                <a href="https://gradient.loganmclain.com/" class="btn btn-outline-dark rounded-0 text-uppercase my-2" target="_blank">View live project</a>
                <a href="https://github.com/Sloggiebear/Gradient" class="btn btn-outline-dark rounded-0 text-uppercase m-2" target="_blank">View on Github</a>
            </div>
            <div class="col-12 col-lg-6 gradient order-1 order-lg-2">
              <img src="..\img\gradient-screens.png" class="img-fluid" alt="Gradient">
              <div class="bg-object"></div>
            </div>
          </div>

        </section>

        <!-- OTHER PROJECTS SECTION -->

        <section class="container">
          <div class="row pb-5 my-lg-5">
            <div class="col-12 py-lg-5" id="projects">
              <h2 class="mt-5 display-1">Other Projects</h2>
            </div>
          </div>

          <div class="row">

            <div class="col-12 col-lg-4 mb-4">
              <div class="hoverbox" style="background-image: url('/img/wine.jpg');" title="Bromptom Wine Website Design">
                <div id="hoverbox-title" class="hoverbox-title">Bromptom Wine</div>
                <div id="hoverboxcontent" class="hoverbox-content">
                  <h3 class="mb-2">Bromptom Wine</h3>
                  <p>Website design and front-end development for a UK-based wine store and wine training business.</p>
                  <a href="https://www.bromptonwine.co.uk" class="btn btn-outline-light rounded-0 text-uppercase mt-3" target="_blank">View live project</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 mb-4">
              <div class="hoverbox" style="background-image: url('/img/cafc.jpg');" title="CAFC Website Design">
                <div id="hoverbox-title" class="hoverbox-title">CAFC</div>
                <div id="hoverboxcontent" class="hoverbox-content">
                  <h3 class="mb-2">Child and Family Consultancy</h3>
                  <p>A simple and clean Wordpress webiste design which allows the organisation to update their own content.</p>
                  <a href="http://www.cafc.ie" class="btn btn-outline-light rounded-0 text-uppercase mt-3" target="_blank">View live project</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-4 mb-4">
              <div class="hoverbox" style="background-image: url('/img/superg.jpg');" title="The Super Website Design">
                <div id="hoverbox-title" class="hoverbox-title">The Super Generation</div>
                <div id="hoverboxcontent" class="hoverbox-content">
                  <h3 class="mb-2">The Super Generation</h3>
                  <p>Website design with integration of Arlo Event Booking System and and their sister company's e-commerce store.</p>
                  <a href="https://www.thesupergeneration.com/" class="btn btn-outline-light rounded-0 text-uppercase mt-3" target="_blank">View live project</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-4 mb-4">
              <div class="hoverbox" style="background-image: url('/img/leonandcroft.jpg');" title="Leon and Croft Website Design">
                <div id="hoverbox-title" class="hoverbox-title">Leon and Croft</div>
                <div id="hoverboxcontent" class="hoverbox-content">
                  <h3 class="mb-2">Bromptom Wine</h3>
                  <p>An emphasis on photography to show off the portfolio of work of this award-winning interior design company.</p>
                  <a href="https://www.leonandcroft.com" class="btn btn-outline-light rounded-0 text-uppercase mt-3" target="_blank">View live project</a>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-lg-4 mb-4">
              <div class="hoverbox" style="background-image: url('/img/nigel.jpg');" title="Nigel Cheney Website Design">
                <div id="hoverbox-title" class="hoverbox-title">Nigel Cheney</div>
                <div id="hoverboxcontent" class="hoverbox-content">
                  <h3 class="mb-2">Nigel Cheney</h3>
                  <p>This Wordpress site uses WooCommerce to allow this UK-Based artist to sell his work.</p>
                  <a href="https://www.nigelcheney.com" class="btn btn-outline-light rounded-0 text-uppercase mt-3" target="_blank">View live project</a>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-4 mb-4">
              <div class="hoverbox" style="background-image: url('/img/to-do.jpg');" title="To Do List">
                <div id="hoverbox-title" class="hoverbox-title">To Do List</div>
                <div id="hoverboxcontent" class="hoverbox-content">
                  <h3 class="mb-2">To Do List</h3>
                  <p>A canonical addition to any developer's portfolio, a standard vanilla javascript to-do list.</p>
                  <a href="https://todo.amberandemerald.com" class="btn btn-outline-light rounded-0 text-uppercase mt-3" target="_blank">View live project</a>
                </div>
              </div>
            </div>

          </div>
        </section>

        

        <!-- SERVICES SECTION -->

        <section id="services" class="section-services">
          <div class="container">
            <div class="row py-5">
              <div class="col-12 col-lg-5 offset-lg-7 py-5" >
                <span class="subhead">What I can do for you</span>
                <h2 class="display-1">Services</h2>
                  <p>I provide front-end web development which ranges from wordpress websites to fully bespoke solutions. I also do graphic and print design. I have good attention to details and communicate efficiently. I don't commit to projects if I cannot deliver them to a high standard.</p>
              </div>
            </div>
          </div>
        </section>

          <section class="container">
            <div class="row pt-5 pb-3 pb-lg-5">
              <div class="col-12 col-lg-6 order-2">
                <h5 class="subhead">Wordpress Websites</h5>
                <h2 class="mb-5">for Small/Medium Organisations</h2>
                <p>
                  Are you looking for to get a <strong>business website design in Ireland</strong>? Get the best out of the internet with a small business website. Promote your unique selling point, establish your brand and grow your online presence. The small business websites is custom designed for small businesses and start-ups requiring a professional business website with a content management system.
                <p>
                  Getting your business online is exciting but can also be confusing. I can take care of setting up your hosting, configuring your domain name and submitting your new site to search engines. The <strong>Small Business Website Design Package</strong> is packed with features and is very affordable.</p>
                </p>
              </div>
              <div class="col-12 col-lg-6 order-1 order-lg-2 pb-4 pb-lg-0 d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.98 512" id="wordpress-drawing" height="400" width="400" class="p-4 p-lg-0 d-block mx-auto draw-out">
                  <path d="M41.07,152.47a10.19,10.19,0,0,0-18.89-.66,256,256,0,0,0,18,241.82,256.72,256.72,0,0,0,104.16,92.74,10.2,10.2,0,0,0,14-12.67ZM20.41,256a234,234,0,0,1,10.88-70.84L129.79,455C61.71,412,20.41,338,20.41,256Z" transform="translate(-0.01 0)"/><path d="M345.38,480.77,269.9,274a10.21,10.21,0,0,0-9.58-6.7h-.09a10.2,10.2,0,0,0-9.55,6.88l-73.76,214.3a10.22,10.22,0,0,0,6.77,13.1A256.13,256.13,0,0,0,341,497.49a10.21,10.21,0,0,0,5.3-15A13.74,13.74,0,0,1,345.38,480.77ZM256,491.6a235.54,235.54,0,0,1-56.24-6.82L260.6,308,324,481.6A234.94,234.94,0,0,1,256,491.6Z" transform="translate(-0.01 0)"/><path d="M373.29,403.89a10.19,10.19,0,0,0,9.61-6.79L410,320.66c13-33.39,19.35-60.55,19.35-83,0-33.87-10-51.41-18.87-66.89a2.61,2.61,0,0,0-.17-.28l-2.92-4.74c-10.57-17.07-19.7-31.8-19.7-47.57,0-16.08,11.88-33.43,31.07-33.43.31,0,.8,0,1.32.09s.8.07,1.21.09a10.2,10.2,0,0,0,7.54-17.7A255.94,255.94,0,0,0,42.12,115.36a10.19,10.19,0,0,0,8.17,15.81c6.29.21,11.72.31,16.16.31,23.69,0,58.38-2.55,65.19-3.06,1.09,2,1.19,6.64.13,8.39-2.68.3-14.32,1.55-26.89,2.2a10.21,10.21,0,0,0-9.14,13.44L176.22,392a10.2,10.2,0,0,0,9.67,6.95h0a10.2,10.2,0,0,0,9.67-7l53.79-161.32a10.17,10.17,0,0,0-.12-6.8L220,145.63a10.19,10.19,0,0,0-9-6.61c-11.58-.68-22.77-2-24.79-2.23-.92-1.95-.71-6.44.38-8.37,7,.52,42.09,3.06,64.33,3.06,23.69,0,58.38-2.55,65.19-3.07,1.09,2,1.19,6.65.14,8.39-2.68.3-14.33,1.56-26.9,2.21a10.19,10.19,0,0,0-9.12,13.48L363.64,397a10.2,10.2,0,0,0,9.59,6.91ZM303.83,158.48c8.7-.71,15-1.44,15.37-1.48,11.73-1.39,19.33-12.75,18.07-27-1.21-13.63-10-22.69-21.43-22h-.2c-.39,0-39.71,3.09-64.71,3.09-23.48,0-63.55-3.06-64-3.09h-.19c-11.59-.7-20.65,9.08-21.49,23.23s6.86,24.91,18.35,25.81c1.63.2,9.76,1.17,19.51,1.91l25.7,68.71-43,129L119.29,158.49c8.73-.71,15-1.45,15.44-1.49,11.73-1.39,19.32-12.75,18.06-27-1.21-13.63-10-22.7-21.42-22h-.2c-.37,0-35.88,2.8-60.88,3.07A235.56,235.56,0,0,1,398.76,68.58c-18.45,8.19-31.43,27.33-31.43,49.58,0,21.57,11.05,39.42,22.75,58.31q1.4,2.25,2.81,4.54c8.29,14.51,16.1,28.27,16.1,56.63,0,19.64-6.06,45.13-18,75.75l-.11.3-17.39,49Z" transform="translate(-0.01 0)"/><path d="M480.63,133.18a10.2,10.2,0,0,0-19.05,6.27,178.46,178.46,0,0,1,1.57,23.9c0,26.82-5.71,53.59-18,84.25-.06.15-.12.3-.17.45L369.94,465.11a10.19,10.19,0,0,0,14.77,12.14,256,256,0,0,0,95.92-344.07ZM399.16,443l65-188.09c9.33-23.37,15.14-44.78,17.73-65.72A235.54,235.54,0,0,1,399.16,443Z" transform="translate(-0.01 0)"/><path d="M262.29,369.73a10.2,10.2,0,0,0-12.9,6.45L248,380.26a10.2,10.2,0,0,0,6.45,12.91,10.33,10.33,0,0,0,3.22.52,10.21,10.21,0,0,0,9.68-7l1.36-4.07A10.21,10.21,0,0,0,262.29,369.73Z" transform="translate(-0.01 0)"/><path d="M249.71,407.47a10.2,10.2,0,0,0-12.9,6.45l-17,51a10.2,10.2,0,1,0,19.35,6.45l17-51A10.2,10.2,0,0,0,249.71,407.47Z" transform="translate(-0.01 0)"/>
                </svg>
              </div>
            </div>
          </section>

          <section class="container">
            <div class="row">

              <div class="col-12 col-lg-4">
                <div class="box">
                  <img src="/img/update.svg" alt="" class="icon">
                  <h5 class="subhead">Easy to Update</h5>
                  <p>
                    Your site will be built on the world-renowned WordPress CMS so your or your team can update and add your own content easily.
                  </p>
                </div>
              </div>

              <div class="col-12 col-lg-4">
                <div class="box">
                  <img src="/img/device.svg" alt="" class="icon">
                  <h5 class="subhead">Looks good on mobile</h5>
                  <p>
                     Your new website will be optimised to work on screen, tablet and mobile.
                  </p>
                </div>
              </div>

              <div class="col-12 col-lg-4">
                <div class="box">
                  <img src="/img/unlock.svg" alt="" class="icon">
                  <h5 class="subhead">Secure, Safe & Compliant</h5>
                  <p>
                    Your site will be secured with SSL certificate (the little lock symbol your see in the URL bar). It will also provide all required GDPR notices about cookies.
                  </p>
                </div>
              </div>
            </div>

            <div class="row pb-5">

              <div class="col-12 col-lg-4">
                <div class="box">
                  <img src="/img/product.svg" alt="" class="icon">
                  <h5 class="subhead">Lots of Features</h5>
                  <p>
                    Up to 10 pages of content with other features like social media feeds, contact forms, request forms.
                  </p>
                </div>
              </div>

              <div class="col-12 col-lg-4">
                <div class="box">
                  <img src="/img/measure.svg" alt="" class="icon">
                  <h5 class="subhead">Measurable</h5>
                  <p>
                    Your organisation will be registered with Google My Business and you will receive monthly Google Analytics reports, giving you insights into visitors and traffic sources to your website.
                  </p>
                </div>
              </div>

              <div class="col-12 col-lg-4">
                <div class="box">
                  <img src="/img/wrench.svg" alt="" class="icon">
                  <h5 class="subhead">Maintained</h5>
                  <p>
                    Avail of an optional maintenance package to ensure the stability of your code, install new security features and create backups for peace of mind. 
                  </p>
                </div>
              </div>
            </div>

          </section>

    </main>

    <footer>
      <div id="start" class="container py-5">
        <div class="row pt-5">
          <div class="col-12 col-lg-8 py-5 d-flex flex-column align-self-center">
            <span class="subhead pb-3">C'mere to me</span>
            <p class="display-5">
              You need a website and I need money. That dream house in the countryside isn't going to pay for itself.
            </p>
            <hr class="my-5 short-line" />
            <a class="text-white display-6" href="mailto:info@amberandemerald.com">info@amberandemerald.com</a>
            <p class="text-muted">+353 (0)83 13 44 883</p>
            <p class="subhead pt-5">Connect</p>
            <div class="d-flex">
              <a href="https://www.linkedin.com/in/logan-mclain-aa2629162/" target="_blank" class="social">

                  <img src="../img/linkedin.svg" alt="LinkedIn" width="30px" height="30px">
                </a>
                <a href="https://github.com/Sloggiebear" target="_blank" class="social">
                  <img src="../img/github.svg" alt="Github" width="30px" height="30px">
                </a>
            </div>
            
        </div>
        <div class="col-12 col-lg-4 d-lg-flex align-items-end justify-content-end">
          <div class="text-center">
            <a href="https://www.greengeeks.com/track/amberemerald" onclick="ggs_ggseal()">
              <img class="p-2 scale" alt="greengeeks" src="https://static.greengeeks.com/ggseal/Green_12.png"></a>
              <script>function ggs_ggseal(){window.open("https://my.greengeeks.com/seal/","_blank")}</script>
          </div>
        </div>
        </div>
      </div>
    </footer>

    <div class="subfooter">
      <span>© Copyright Amber and Emerald Limited | Company Number: 663689</span>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    {{-- <script>
    function draw(id) {
      let el = document.getElementById(id);
      el.classList.toggle('draw-in'); 
      }
    </script> --}}
    </body>
</html>