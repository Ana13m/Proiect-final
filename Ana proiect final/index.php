<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beauty studio landing page</title>
    <!-- Ion Icons Js -->
    <script type="module" src="https://beautystudio.md/img/salon5.jpg"></script>
    <script nomodule src="h"></script>
    <!-- JS -->
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Menu -->
    <div class="menu">
        <div class="container flex">
            <!-- Mobile Button -->
            <div class="mobile-btn">
                <ion-icon name="grid"></ion-icon>
            </div>
            <div class="logo">
                <img src="https://clinicadame.com/wp-content/uploads/2021/03/clinica-dame.png" alt="" />
            </div>

            <ul class="nav">
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="#why-us">Cine suntem?</a></li>
                <li class="nav-item"><a href="#explore">Vezi mai multe</a></li>
                <li class="nav-item"><a href="#discount">Registreazate</a></li>
            </ul>

          
        </div>
    </div>
    <!-- End Menu -->

    <!-- Header -->
    <header class="header">
        <div class="container flex">
            <div class="text">
                <h1 class="mb">
                   Beauty Studio <br />
                  te facem mai frumoasa decat esti
                </h1>

                <p class="mb">
                Alege serviciul care ți se potrivește și primește
-10% REDUCERE la prima vizită în salon!
                </p>

                <a href="#" class="btn mt">Afla mai multe</a>
            </div>

            <div class="visual">
                <img src="https://beautystudio.md/img/salon5.jpg" alt=""  width="200"/>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Why Us -->
    <div class="section" id="why-us">
        <div class="container flex">
            <div class="text">
                <h2 class="primary mb">Cine suntem?</h2>
                
                <p class="tertiary">
                    
                Lucrăm cu cei mai buni
producători de cosmetice.
Pentru că sănătatea
și mulțumirea clienților
e pe primul loc pentru noi.

                </p>
            </div>
            <div class="visual">
                <img src="https://beautystudio.md/img/brands/hero-brand-image.jpg" alt="" />
            </div>
        </div>
    </div>
    <!-- End Why Us -->

    <!-- Explore -->
    <div class="section" id="explore">
        <div class="container flex">
            <div class="visual">
                <img src="https://beautystudio.md/img/beauty-team.jpg" alt="" />
            </div>
            <div class="text">
                <h2 class="primary mb">
                   Serviciile noastre
                </h2>
                <p class="tertiary mb">
                   <br>Manichiura</br>
                   <br>Pedichiura</br>
                   <br>Coafura</br>
                   <br>Freza</br>
                   <br>Make-up</br>

                

                </p>

                
            </div>
        </div>
    </div>
    <!-- End Explore -->

    <!-- Trainer -->
    <div class="section" id="trainer">
        <h2 class="primary mb">Beneficiile
noastre</h2>
        <div class="container flex">
            <div class="trainer">
                <img src="https://beautystudio.md/img/benefic/4.svg" width="120
                " alt="" />
                <h3 class="secondary mb">Igiena</h3>
                <p class="tertiary mb">
                Igienizăm instrumentele și</br>
suprafețele la cel mai înalt nivel</br>

                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>

            <div class="trainer">
                <img src="https://beautystudio.md/img/benefic/3.svg" width="120" alt="" />
                <h3 class="secondary mb">Utilaje</h3>
                <p class="tertiary mb">
                Lucrăm cu utilaje de ultimă</br>
generație și produse Premium</br>
                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>

            <div class="trainer">
                <img src="https://beautystudio.md/img/benefic/2.svg" alt="" width="120" />
                <h3 class="secondary mb">Mesteri</h3>
                <p class="tertiary mb">
                Avem meșteri calificați</br>
</br>cu perfecționare continuă               </p>

                <a href="#" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
    <!-- End Trainer -->

    
    <!-- End Testimonial -->

    <!-- End Discount -->

    <!-- Footer -->
 

    <!-- End Footer -->
    <script src="script.js"></script>
    <form action="action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>

</html>