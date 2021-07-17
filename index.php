<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Bookreplacer</title>
</head>
<body>
    
    <nav id="topNav" class="navbar">
        
        <a class="navbar-brand" href="index.php" title="Home">
            <img src="img/nav-logo.png" alt="BookReplacer">
        </a>

        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a href="login.php" class="nav-link">Accedi</a>
            </li>
            <li class="nav-item">
                <a href="registration.php" class="nav-link">Registrati</a>
            </li>
        </ul>
        
    </nav>

    <main class="container-fluid">
        <div id="info">  
            <div class="info1 pt-4">
                    
                <h3>Chi Siamo?</h3>
                    
                <p>
                    BookReplacer è la piattaforma gratuita per la gestione degli scambi e dei doni all'interno delle biblioteche della Rete Bibliotecaria Bresciana e Cremonese.
                    Grazie a Bookreplacer è possibile accedere ad una vasta gamma di libri e prenotarli con un click.
                    Per utilizzare la piattaforma è necessario registrarsi.
                </p>

                <a class="btn btn-info" href="registration.php" role="button">Registrati</a>
                
            </div>
                
            <div class="info2 pt-4">

                <h3>Come funziona Bookreplacer?</h3>
                    
                <p>
                    Una volta registrato, grazie a Bookreplacer puoi cercare i titoli disponibili e prenotarli. Puoi anche controllare le tue prenotazioni.
                </p>

            </div>

            <div class="stats container-fluid rounded mt-5">
                <div id="stats" class="container-fluid">

                    <div class="row justify-content-between">

                        <div class="col p-3 font-weight-bold d-flex justify-content-center">Totale libri</div>
                        <div class="col p-3 font-weight-bold d-flex justify-content-center">Libri Disponibili</div>
                        <div class="col p-3 font-weight-bold d-flex justify-content-center">Libri in prestito</div>

                    </div>

                    <div class="row justify-content-between">

                        <div id="total" class="col p-3 d-flex justify-content-center"></div>
                        <div id="available" class="col p-3 d-flex justify-content-center"></div>
                        <div id="gifted" class="col p-3 d-flex justify-content-center"></div>

                    </div>

                </div>     
            </div>

            <div class="card mt-5">

                <div class="card-header">

                    <h3>Ultimi titoli pubblicati</h3>

                </div>

                <div class="card-body">
                    <div id="books" class="container-fluid">

                        <div class="row justify-content-between">
    
                            <div id="title_0" class="col p-3 font-weight-bold d-flex justify-content-center">Titolo</div>
                            <div id="author_0" class="col p-3 font-weight-bold d-flex justify-content-center">Autore</div>
                            <div id="publisher_0" class="col p-3 font-weight-bold d-flex justify-content-center">Casa Editrice</div>
                            <div id="year_0" class="col p-3 font-weight-bold d-flex justify-content-center">Anno di pubblicazione</div>
                            <div id="status_0" class="col p-3 font-weight-bold d-flex justify-content-center">Condizioni</div>
    
                        </div>
    
                        <template id="templateRow">
                            <div class="row justify-content-between">
        
                                <div id="title_" class="col p-3 d-flex justify-content-center"></div>
                                <div id="author_" class="col p-3 d-flex justify-content-center"></div>
                                <div id="publisher_" class="col p-3 d-flex justify-content-center"></div>
                                <div id="year_" class="col p-3 d-flex justify-content-center"></div>
                                <div id="status_" class="col p-3 d-flex justify-content-center"></div>
        
                            </div>    
                        </template>
    
                    </div>       
                </div>

            </div>
        </div> 
    </main>

    <script src="js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>