<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>CONTATTI | Geko-Wrapping</title>

        <link rel="icon" type="image/png" href="../Img/logo/favicon.png">
        <link rel="stylesheet" href="styleContatti.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
        
        <script src="../js/script.js"></script>
        <script src="../js/convalida.js"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    </head>
    <body>
        <div class="container">
            <!-------- HEADER -------->

            <header>
                <nav>
                    <img src="../Img/logo/gekologositobianco.png" width="300px" height="50px" alt="Image not available">
                    
                    <ul class="menu">
                        <nobr><li><a href="../index.html" class="normal-text">HOME</a></li></nobr>    
                        <nobr><li><a href="../Servizi/wrapping.html" class="normal-text">CAR WRAPPING</a></li></nobr>
                        <nobr><li><a href="../Servizi/oscuramentoVetri.html" class="normal-text">OSCURAMENTO VETRI</a></li></nobr>    
                        <li><a href="../Materiali/materiali.html" class="normal-text">MATERIALI</a></li>    
                        <li><a href="" class="normal-text" id="CONTATTI">CONTATTI</a></li>    
                    </ul>
                    
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </nav>
            </header>
            
            <!-------- HERO1 -------->
            
            <section class="Hero1">
                <h1 class="med-text">CONTATTA GEKO-WRAPPING</h1>
                <main class="contact">
                    <a href="#form-submit">
                        <section class="email">
                            <center>
                                <img src="../Img/png/005-email.png" style="margin-left: 0;" alt="Image not available">
                            </center>
                            <hr class="hr-underImg">
                            <h2>Manda un email</h2>
                            <p>Risponderemo alla tua richiesta nell'arco di 48 ore. Alcune domande potrebbero però richiedere più tempo per fornirti una risposta adeguata.</p>
                        </section>
                    </a>
                    <a href="tel:345-4169305">
                        <section class="smartphone">
                            <center>
                                <img src="../Img/png/006-mobile-phone.png" alt="Image not available">
                            </center>
                            <hr class="hr-underImg">
                            <h2>345-4169305</h2>
                            <p>Chiama per parlare con noi dalle 8:00 alle 18:30 dal lunedì al venerdì.
                            <br>Invece dalle 8:00 alle 12:00 il Sabato.</p>
                        </section>
                    </a>
                    <a href="https://goo.gl/maps/c3SUEQsDVGc9Z36q7">
                        <section class="place">
                            <center>    
                                <img src="../Img/png/004-placeholder.png" style="margin-right: 0;" alt="Image not available">
                            </center>
                            <hr class="hr-underImg">
                            <h2>Dove siamo</h2>
                            <p>Ci trovi in Via Pellegrino Rossi 93 - Milano 20161 a 3 minuti dalla fermata della metro gialla "Affori Centro", dentro centro Midas presso benzinaio IP.</p>
                        </section>
                    </a>
                </main>
            </section>

            <hr class="hr-default">

            <!-------- FORM SUBMIT -------->

            <section class="form-submit" id="form-submit">
                <section class="introduction">
                    <h2>Contattaci</h2>
                    <p>Grazie per l'interesse dimostrato verso Geko-Wrapping. Per aiutarci a rispondere alle tue domande in modo efficace, ti chiediamo cortesemente di fornirci alcune informazioni. Le informazioni fornite verranno utilizzate per poter rispondere alla tua richiesta nel miglior modo possibile tramite e-mail oppure contattandoti tramite telefono da un nostro operatore.</p>
                </section>

                <form action="send.php" method="post">
                    <?php
                        if (isset($_GET['invio'])) {
                            if ($_GET['invio'] == "ok") {
                    ?>
                                <div class="approved">Grazie per averci scritto. Risponderemo alla sua email al più presto.</div>
                    <?php
                        } else {
                    ?>
                                <div class="disapproved">Si è verificato un errore durante l'invio dell'e-mail. Riprova oppure contatta info@gekowrapping.com</div>
                    <?php
                            }  
                        }
                    ?>

                    <h3>Email</h3>
                    <input type="email" name="email" id="email" placeholder="Email" required>

                    <h3>Messaggio</h3>
                    <textarea name="message" id="message" rows="5" placeholder="Inserisci qui il tuo messaggio"></textarea>

                    <h3>Nome</h3>
                    <input type="text" name="name" id="name" placeholder="Nome" required>

                    <h3>Cognome</h3>
                    <input type="text" name="surname" id="surname" placeholder="Cognome" required>

                    <h3>Numero di telefono</h3>
                    <input type="tel" name="number" id="number" placeholder="Numero di telefono" required><br>

                    <input type="submit" name="submit" id="submit" value="invia">
                </form>
            </section>
        </div>

        <!-------- FOOTER -------->

        <footer>
            <ul>
                <section>
                    <nobr><h4 class="intro-text">su di noi</h4></nobr>
                    <p>Noi di Geko Wrapping cerchiamo sempre di fare il meglio per i nostri clienti cercando di realizzare ogni loro richiesta e accettando le sfide più difficili per trovare soluzioni sempre migliori.</p>
                </section>
                <section>
                    <nobr><h4 class="intro-text">supporto</h4></nobr>
                    <a href="../Contact/contatti.php" style="color: rgb(154, 154, 154);">Contattaci</a>
                </section>
                <section>
                    <nobr><h4 class="intro-text">dove siamo</h4></nobr>
                    <a href="https://goo.gl/maps/c3SUEQsDVGc9Z36q7" style="color: rgb(154, 154, 154);">Via Pellegrino Rossi 93 - Milano 20161</a>
                </section>
                <section>
                    <nobr><h4 class="intro-text">seguici</h4></nobr>
                    <section id="social">
                        <a href="https://www.instagram.com/gekowrapping/"><img src="../Img/png/002-instagram.png" width="30px" alt="Image not available"></a>
                        <a href="https://www.facebook.com/Gekowrapping-107132401742166/"><img src="../Img/png/003-facebook.png" width="30px" alt="Image not available"></a>
                        <a href="https://www.tiktok.com/@gekowrapping"><img src="../Img/png/001-tiktok.png" width="30px" alt="Image not available"></a>
                    </section>
                </section>
            </ul>

            <img src="../Img/logo/gekologositobianco.png" id="GekoImg" style="margin-bottom: 20px;" width="300px" alt="Image not available">
        </footer>

        <!-------- JQUERY -------->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js" integrity="sha512-achKCfKcYJg0u0J7UDJZbtrffUwtTLQMFSn28bDJ1Xl9DWkl/6VDT3LMfVTo09V51hmnjrrOTbtg4rEgg0QArA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>

        <script>
            ScrollReveal().reveal('.reveal', {distance: '50px', duration: 1500, easing: 'cubic-bezier(0.5, 0, 0, 1)', interval: 500});
            ScrollReveal().reveal('.reveal2', {distance: '50px', duration: 1500, easing: 'cubic-bezier(0.5, 0, 0, 1)', interval: 500});
        </script>
    </body>
</html>