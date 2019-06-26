<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Just Eat</title>
    <link rel="icon" type="image/png" href="./img/burger.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <header class="header">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a class="navbar-brand" href="./index.php"><img class="logo-img" alt="" src="./img/burger.png"/><span>Just Eat</span></a>
            <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="navbar-nav">
                <select class="custom-select">
                    <li class="nav-item active">
                    <option selected>Open this select menu</option>
                    </li>
                    <li class="nav-item">
                    <option value="1">One</option>
                    </li>
                    <li class="nav-item">
                    <option value="2">Two</option>
                    </li>
                    <li class="nav-item">
                    <option value="3">Three</option>
                    </li>
                </select>
              </ul>
              <div class="clear"></div>
            </div>
          </nav>
    </header>
   
    <section id="central">
       <div class="container command-resto">
           <div class="row">
               <div class="col-12">
                   <h2 class="text-center">C'est bon de commander</h2>
                   <h3 class="text-center">Faites-vous livrer les meilleurs restos près de chez vous avec Just Eat.</h3>
                    <div class="container-fluid">
                        <div class="row">
                                <div class="col-4"></div>
                                    <div class="col-6">
                                        <form class="form-inline">
                                            <div class="form-group mx-sm-3 mb-2">
                                                <label for="inputAddress" class="sr-only">Entrez votre adresse</label>
                                                <input type="inputAddress" class="form-control" id="inputAddress" placeholder="Entrez votre adresse">
                                            </div>
                                            <button type="submit" class="btn btn-primary mb-2">Je commande</button>
                                        </form>
                                    </div>
                                <div class="col-2"></div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
    </section>

    <section id="resto">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut nibh id nisi volutpat tristique sit amet commodo dui. Integer euismod sed nunc vel vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut vel volutpat ipsum. Fusce neque tortor, facilisis quis ligula ut, tristique dapibus mauris. Morbi interdum facilisis ipsum sed vulputate. Cras nisl libero, dapibus eu sagittis quis, egestas at justo. Cras hendrerit sit amet elit in egestas. Ut aliquam fermentum justo sit amet porta. Vestibulum lectus nibh, vulputate non fringilla malesuada, volutpat eget urna. Fusce vehicula facilisis faucibus. Praesent efficitur elit et arcu interdum blandit. Suspendisse ac purus id elit tristique sagittis id id arcu. Etiam a feugiat ex. Etiam vitae lacus quis quam aliquam vestibulum at cursus turpis.
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut nibh id nisi volutpat tristique sit amet commodo dui. Integer euismod sed nunc vel vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut vel volutpat ipsum. Fusce neque tortor, facilisis quis ligula ut, tristique dapibus mauris. Morbi interdum facilisis ipsum sed vulputate. Cras nisl libero, dapibus eu sagittis quis, egestas at justo. Cras hendrerit sit amet elit in egestas. Ut aliquam fermentum justo sit amet porta. Vestibulum lectus nibh, vulputate non fringilla malesuada, volutpat eget urna. Fusce vehicula facilisis faucibus. Praesent efficitur elit et arcu interdum blandit. Suspendisse ac purus id elit tristique sagittis id id arcu. Etiam a feugiat ex. Etiam vitae lacus quis quam aliquam vestibulum at cursus turpis.
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut nibh id nisi volutpat tristique sit amet commodo dui. Integer euismod sed nunc vel vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut vel volutpat ipsum. Fusce neque tortor, facilisis quis ligula ut, tristique dapibus mauris. Morbi interdum facilisis ipsum sed vulputate. Cras nisl libero, dapibus eu sagittis quis, egestas at justo. Cras hendrerit sit amet elit in egestas. Ut aliquam fermentum justo sit amet porta. Vestibulum lectus nibh, vulputate non fringilla malesuada, volutpat eget urna. Fusce vehicula facilisis faucibus. Praesent efficitur elit et arcu interdum blandit. Suspendisse ac purus id elit tristique sagittis id id arcu. Etiam a feugiat ex. Etiam vitae lacus quis quam aliquam vestibulum at cursus turpis.
                   </p>
               </div>
           </div>
       </div>
    </section>

    <footer class="footer">
       <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <p class="footer-text"><span style="padding-top: 0;">Footer Copyright</span></p>
              </div>
          </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>