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

    <nav class="navbar navbar-expand-lg fixed-top">
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
          <a class="nav-link" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">FAQ</a>
        </li>
        <li>
          <a id="start" class="nav-link btn btn-dark px-3 mx-3 text-uppercase rounded-0" href="#" tabindex="-1" aria-disabled="true">Start Your Project</a>
        </li>
      </ul>
      <form class="d-none">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <main>
        <section class="container-fluid section-one pt-3">
          <div class="row h-100">
            <div class="col-12 col-lg-8 text-white p-3 p-lg-5 offset-lg-1 d-flex flex-column align-self-center">
              <h1 class="subhead pt-5">Website Design & Web Development Ireland</h1>
              <h2 class="py-3 m-0 fw-bolder display-1">Hey there,<br>My name is Logan</h2>
              <hr class="my-5 w-25 text-white border-bottom border-white border-1" />
              <p class="m-0 h3">I'm a freelance front-end web developer and designer based in Ireland.</p>
            </div>
          </div>
        </section>

        <section class="container">
          <div class="row">
            <div class="col-12 py-5" id="portfolio">
              <h2 class="mt-5 display-1">Portfolio</h2>
              <div class="portfolio-item">
                  <span class="subhead">A simple grade calculator</span>
                  <h3>Gradient</h3>
                  <p>
                    UCD and NCAD use an alpha grade systems for assessment. This simple tool allows staff to save time by calculating the overall average grade for up to four assessment criteria. It is easy to use and designed to be responsive for mobile and desktop.
                  </p>
                  <div class="tech">
                    <ul>
                      <li>HTML</li>
                      <li>CSS</li>
                      <li>JavaScript</li>
                    </ul>
                  </div>
              </div>

              <a href="https://gradient.loganmclain.com/" class="btn btn-outline-dark rounded-0 text-uppercase" target="_blank">View project</a>
            </div>
          </div>
        </section>


        <footer>
          <div class="container py-5">
            <div class="row py-5">
              <div class="col-12 col-lg-8 py-5 d-flex flex-column align-self-center">
                <span class="subhead">C'mere to me</span>
                <p class="display-4">
                  You need a website and I need money. That dream house in the countryside isn't going to pay for itself.
                </p>
                <hr class="my-5 w-25 text-white border-bottom border-white border-1" />
                <a class="text-white display-5" href="mailto:info@amberandemerald.com">info@amberandemerald.com</a>
                <p class="text-muted">+353 (0)83 13 44 883</p>
                <p class="subhead pt-5">Connect</p>
                <a href="#" class="social">LinkedIn</a>
                <a href="#" class="social">Github</a>
            </div>
            <div class="col-12 col-lg-4 d-flex align-items-end justify-content-end">
              <div>
                <a href="https://www.greengeeks.com/track/amberemerald" onclick="ggs_ggseal()">
                  <img class="p-5 scale" alt="greengeeks" src="https://static.greengeeks.com/ggseal/Green_12.png"></a>
                  <script>function ggs_ggseal(){window.open("https://my.greengeeks.com/seal/","_blank")}</script>
              </div>
            </div>
            </div>
          </div>
        </footer>

        <div class="subfooter">
          <span>© Copyright Amber and Emerald Limited | Company Number: 663689</span>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>

    </body>
</html>