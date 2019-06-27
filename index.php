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
    <div class="background">
        <header class="header">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a class="logo navbar-brand" href="./index.php"><img class="logo-img" alt="" src="./img/burger.png"/><span>Just Eat</span></a>
                <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav-select navbar-nav">
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
                
                </div>
            </nav>
        </header>
    
        <section id="central">
            <div class="container command-resto" style="margin: auto;">
                <div class="row">
                        <div class="col-12">
                            <h2 class="title-command text-center">C'est bon de commander</h2>
                            <h3 class="title-command text-center">Faites-vous livrer les meilleurs restos près de chez vous.</h3>
                                <div class="container-fluid">
                                    <div class="row">
                                            <div class="col-2 col-md-4"></div>
                                                <div class="col-8 col-md-6">
                                                    <form class="form-inline">
                                                        <div class="form-group mx-sm-3 mb-2">
                                                            <input type="inputAddress" class="form-control" id="inputAddress" placeholder="Entrez votre adresse...">
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary mb-2">Je commande</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            <div class="col-2 col-md-2"></div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </section>
    </div>

    <section id="resto">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <p></p>
               </div>
           </div>
       </div>
    </section>

    <footer class="footer">
       <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <p class="footer-text"><span>Footer Copyright</span></p>
              </div>
          </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/ed4e9fbefd.js"></script>
</body>
</html>