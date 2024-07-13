<?php?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-5JVTFRG');
        </script>
        <!-- End Google Tag Manager -->

        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

            <!-- css scroll library -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <meta name="facebook-domain-verification" content="qu7x2bdr6gz7t5qgfskad4fms7b9fw" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <!--<link rel="stylesheet" href="/colineal/datos/sweetalert.css">
        <link rel="stylesheet" href="/colineal/datos/bootstrapValidator.min.css">
        <link rel="stylesheet" href="/colineal/datos/bootstrap-select.min.css">-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,900&display=swap" rel="stylesheet">
        <title>Page Listo</title>
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
        <!-- reCaptcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>      
    </head>
    <body class="inicio">
        <div id="container">
            <header id="main-header">
                <a id="logo-header" href="#">
                    <span class="site-name">Listo Page</span>
                </a> <!-- / #logo-header -->
            <!--<nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav> / nav -->
            </header><!-- / #main-header -->
            <section id="main-section">
                <div class="section-left">
                    <img src="./img/prueba.png" alt="Promotional Image">
                </div>
                <div class="section-right d-flex justify-content-center align-items-center">
                <div class="card-body position-relative col-8 ">
                    <form method="post"  id="formulariolanding" name="formulariolanding" enctype="application/x-www-form-urlencoded" rol="form" class="needs-validation" novalidate>
                        <!-- Barra de progreso action="procesar_formulario.php"-->
                    <div class="col-md-12">
                    <div class="row g-3 ">
                        <h2 style="color: #333333" class=" fw-bold h2 mt-0  d-none d-md-block">Regístrate y participa.</h2>
                        <h2 style="color: #333333; font-weight: 700" class=" fw-bold h2 mt-0  d-block d-md-none">Regístrate y participa.</h2>
                    </div>
                    <div class="row g-3">
                        <p>*Campos obligatorios</p>
                    </div>
                    <div class="row mb-3 form-group">
                        <label for="form_nombre">Nombre*</label>
                        <input type="text" id="form_nombre" name="nombre" placeholder="Nombre" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                        <div class="invalid-feedback">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFb0lEQVR4nO2YW2xTdRzHjxJviMobqAm7AcIG6+X0vvV62vV22o11Z2uHxHjhwUBCFIh4CcbEB4kCxkCMCUpCUHmRxAeivBo10ZCgvBB3adfR9vT0ctqelm0w1q85I87AjF3P6aYP+yb/15PP55zf+f1//z9BrGY1q2lIKj5mYznARATf0EeCj7kkeJkrgndgTHAPjAue0JWSO/Rd0dV/suTu33PTwTxL/B8Cml4r+MN7y3T4R4Eeqpb9Qyj7ByH4GAheBoJnYH6V3CGUevrvLtcuFJ19KDh6fy06AvuzpuATKw/OMA9XgpHDAh3myoEwyrQIvnT4IiWuXhQdQfD2IM/b6KOTBuaxFYGf6osYK8Hw9XIgArnwBbu4AijYAuCt/mihm6aWFb7SO3yoHIzMNhq+YKXBW/zIW3xzebP3PRDEAw0FFx9Y6R0+XgmK4MsDz4vL7APf7UWuy30eJPlQwwQqvcMfrxR8vsuDvMmNnKHnaxDvPigfPhg5stLweaMbeUMPcjrXB7LgheCwZTlrnv83eL0LWb2zmtFStCR4eDyPVAKRP6TAp+w0ohYfohYvomYPxrs9SFl9dcHn9E7kdBSyGipdUFjX1y1QCUaOSoHPU72YeH4v5qZn8FfmpqYRG3gBeau/PnitKOBAVm07URd8zrP7yTIdLkgpm7yjF5P7DuL+xF/ch5zFVz88aUdWZZvOqkzPLFmgTEdel1rzvCOI+Mv7FwnEwi/dFagXXm1DRmUFpzS/v2QBgR76XeoPy9sDmNi9d5FAtG83cmavJPiM0gKu0xIHQdRuqyXv0FY53SZvCyA2sGeRwLgnhLxE+IxCFDCD7ezW1377/qFX5bRK8QtE6cHFAjYaORnw3M5upDtMb9Wuf//gWTl9nrcFEHUG76WvVjFicMqC53Z0geswfltbwDf4s9xNarSr5x7+uZkZjGodMuFNSLcbrtcuIS8Tl7vDjhldqN6eXRC4UyxhXBSQA99hRHq7sVJbwDPAyx0PogYX7gjlBYHbaQ7jWrs8+HYj2O2GKghmTQ2BUFHubBPVOzGbzS0IzMQmEdXYZMGntxvAbtOj5phd8oSScgezmIHCrRvJBYGp6yOIiQIy4dnntNM1S6jk7r8qd6qc0FOYHhlbELh59RomSJtMeB3Yrdp4bQHXrgtyR+KE3onJg+8gc/ZLZM6ex8S+Q0ho7HLhwW7RXK4pUOzZ9YbceT5n6EFSS2FCY59/8wnSjox8eKTaNMeWINCnk3sYSeoojHpDYI+fAnvyNEa9A0iorfLgN2uQbFO7awqAYdYUqb6EVHhO58RYMIw75crf+0ClgjE/A1YElwxPFmNN1kdrCsx/BSp4TOoxkNVRYE+cXjQLpT78BEmFWRJ8qo1EqlV9hlhqeCe9ibcFbtULL/b5tNaB+GtvLhKIHziClAguAT7Zqq7eaFF1LllgXsIW+ELKGTajpRBVWcB9+jlm8zxm+QK4M+cwLk6T0t48Ei3Ki0S9KTsCG3iLvyDlDJsh7ZhUWjDSacLITiPindLhky3KqfSmna2ElOTN3lcknWFldpvUArwKiWbFYUJOeLP3q/8KPtmsuCT7nlS89s51eX5Ycfgm5bVYk6L++6B/SsFqXZ8zuH9aOXjFb1yTdiPRyCRJem1W5/pm2Wu+SXl5vJV8iliOiPWY0zsOZDXUVMPhm1W3Ek2Kt5d0dSI3rM7VkiFtFzNqW7UR8IkW5ffJJnIbsdLhlHZFRmE+l1GYK/XDq6dTLeoLN5rJ2nc9yy7Sbl3HdXT1p3eYTnEdpl/YdmPxfvjUFo3AbtFcSW0mP0u0qYb45arzRoXt7Hw8vUO/IbONfJprb1/XsAevZjVEQ/MnF7GrGBH1TbgAAAAASUVORK5CYII=" 
                        alt="Advertencia" class="warning-icon">
                            *Ingrese su nombre 
                        </div>
                    </div>
                    <div class="row mb-3 form-group">
                        <label for="apellido">Apellido*</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido" required pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
                        <div class="invalid-feedback">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFb0lEQVR4nO2YW2xTdRzHjxJviMobqAm7AcIG6+X0vvV62vV22o11Z2uHxHjhwUBCFIh4CcbEB4kCxkCMCUpCUHmRxAeivBo10ZCgvBB3adfR9vT0ctqelm0w1q85I87AjF3P6aYP+yb/15PP55zf+f1//z9BrGY1q2lIKj5mYznARATf0EeCj7kkeJkrgndgTHAPjAue0JWSO/Rd0dV/suTu33PTwTxL/B8Cml4r+MN7y3T4R4Eeqpb9Qyj7ByH4GAheBoJnYH6V3CGUevrvLtcuFJ19KDh6fy06AvuzpuATKw/OMA9XgpHDAh3myoEwyrQIvnT4IiWuXhQdQfD2IM/b6KOTBuaxFYGf6osYK8Hw9XIgArnwBbu4AijYAuCt/mihm6aWFb7SO3yoHIzMNhq+YKXBW/zIW3xzebP3PRDEAw0FFx9Y6R0+XgmK4MsDz4vL7APf7UWuy30eJPlQwwQqvcMfrxR8vsuDvMmNnKHnaxDvPigfPhg5stLweaMbeUMPcjrXB7LgheCwZTlrnv83eL0LWb2zmtFStCR4eDyPVAKRP6TAp+w0ohYfohYvomYPxrs9SFl9dcHn9E7kdBSyGipdUFjX1y1QCUaOSoHPU72YeH4v5qZn8FfmpqYRG3gBeau/PnitKOBAVm07URd8zrP7yTIdLkgpm7yjF5P7DuL+xF/ch5zFVz88aUdWZZvOqkzPLFmgTEdel1rzvCOI+Mv7FwnEwi/dFagXXm1DRmUFpzS/v2QBgR76XeoPy9sDmNi9d5FAtG83cmavJPiM0gKu0xIHQdRuqyXv0FY53SZvCyA2sGeRwLgnhLxE+IxCFDCD7ezW1377/qFX5bRK8QtE6cHFAjYaORnw3M5upDtMb9Wuf//gWTl9nrcFEHUG76WvVjFicMqC53Z0geswfltbwDf4s9xNarSr5x7+uZkZjGodMuFNSLcbrtcuIS8Tl7vDjhldqN6eXRC4UyxhXBSQA99hRHq7sVJbwDPAyx0PogYX7gjlBYHbaQ7jWrs8+HYj2O2GKghmTQ2BUFHubBPVOzGbzS0IzMQmEdXYZMGntxvAbtOj5phd8oSScgezmIHCrRvJBYGp6yOIiQIy4dnntNM1S6jk7r8qd6qc0FOYHhlbELh59RomSJtMeB3Yrdp4bQHXrgtyR+KE3onJg+8gc/ZLZM6ex8S+Q0ho7HLhwW7RXK4pUOzZ9YbceT5n6EFSS2FCY59/8wnSjox8eKTaNMeWINCnk3sYSeoojHpDYI+fAnvyNEa9A0iorfLgN2uQbFO7awqAYdYUqb6EVHhO58RYMIw75crf+0ClgjE/A1YElwxPFmNN1kdrCsx/BSp4TOoxkNVRYE+cXjQLpT78BEmFWRJ8qo1EqlV9hlhqeCe9ibcFbtULL/b5tNaB+GtvLhKIHziClAguAT7Zqq7eaFF1LllgXsIW+ELKGTajpRBVWcB9+jlm8zxm+QK4M+cwLk6T0t48Ei3Ki0S9KTsCG3iLvyDlDJsh7ZhUWjDSacLITiPindLhky3KqfSmna2ElOTN3lcknWFldpvUArwKiWbFYUJOeLP3q/8KPtmsuCT7nlS89s51eX5Ycfgm5bVYk6L++6B/SsFqXZ8zuH9aOXjFb1yTdiPRyCRJem1W5/pm2Wu+SXl5vJV8iliOiPWY0zsOZDXUVMPhm1W3Ek2Kt5d0dSI3rM7VkiFtFzNqW7UR8IkW5ffJJnIbsdLhlHZFRmE+l1GYK/XDq6dTLeoLN5rJ2nc9yy7Sbl3HdXT1p3eYTnEdpl/YdmPxfvjUFo3AbtFcSW0mP0u0qYb45arzRoXt7Hw8vUO/IbONfJprb1/XsAevZjVEQ/MnF7GrGBH1TbgAAAAASUVORK5CYII=" 
                        alt="Advertencia" class="warning-icon">
                            *Ingrese su apellido 
                        </div>
                    </div>
                    <div class="row mb-3 form-group" id="box_cedula">
                        <label for="form_cedula">Número de cédula*</label>
                        <input id="form_cedula" type="text"  name="cedula" placeholder="Cédula" pattern="[0-9]+" minlength="10" maxlength="10" required>
                        <div class="invalid-feedback">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFb0lEQVR4nO2YW2xTdRzHjxJviMobqAm7AcIG6+X0vvV62vV22o11Z2uHxHjhwUBCFIh4CcbEB4kCxkCMCUpCUHmRxAeivBo10ZCgvBB3adfR9vT0ctqelm0w1q85I87AjF3P6aYP+yb/15PP55zf+f1//z9BrGY1q2lIKj5mYznARATf0EeCj7kkeJkrgndgTHAPjAue0JWSO/Rd0dV/suTu33PTwTxL/B8Cml4r+MN7y3T4R4Eeqpb9Qyj7ByH4GAheBoJnYH6V3CGUevrvLtcuFJ19KDh6fy06AvuzpuATKw/OMA9XgpHDAh3myoEwyrQIvnT4IiWuXhQdQfD2IM/b6KOTBuaxFYGf6osYK8Hw9XIgArnwBbu4AijYAuCt/mihm6aWFb7SO3yoHIzMNhq+YKXBW/zIW3xzebP3PRDEAw0FFx9Y6R0+XgmK4MsDz4vL7APf7UWuy30eJPlQwwQqvcMfrxR8vsuDvMmNnKHnaxDvPigfPhg5stLweaMbeUMPcjrXB7LgheCwZTlrnv83eL0LWb2zmtFStCR4eDyPVAKRP6TAp+w0ohYfohYvomYPxrs9SFl9dcHn9E7kdBSyGipdUFjX1y1QCUaOSoHPU72YeH4v5qZn8FfmpqYRG3gBeau/PnitKOBAVm07URd8zrP7yTIdLkgpm7yjF5P7DuL+xF/ch5zFVz88aUdWZZvOqkzPLFmgTEdel1rzvCOI+Mv7FwnEwi/dFagXXm1DRmUFpzS/v2QBgR76XeoPy9sDmNi9d5FAtG83cmavJPiM0gKu0xIHQdRuqyXv0FY53SZvCyA2sGeRwLgnhLxE+IxCFDCD7ezW1377/qFX5bRK8QtE6cHFAjYaORnw3M5upDtMb9Wuf//gWTl9nrcFEHUG76WvVjFicMqC53Z0geswfltbwDf4s9xNarSr5x7+uZkZjGodMuFNSLcbrtcuIS8Tl7vDjhldqN6eXRC4UyxhXBSQA99hRHq7sVJbwDPAyx0PogYX7gjlBYHbaQ7jWrs8+HYj2O2GKghmTQ2BUFHubBPVOzGbzS0IzMQmEdXYZMGntxvAbtOj5phd8oSScgezmIHCrRvJBYGp6yOIiQIy4dnntNM1S6jk7r8qd6qc0FOYHhlbELh59RomSJtMeB3Yrdp4bQHXrgtyR+KE3onJg+8gc/ZLZM6ex8S+Q0ho7HLhwW7RXK4pUOzZ9YbceT5n6EFSS2FCY59/8wnSjox8eKTaNMeWINCnk3sYSeoojHpDYI+fAnvyNEa9A0iorfLgN2uQbFO7awqAYdYUqb6EVHhO58RYMIw75crf+0ClgjE/A1YElwxPFmNN1kdrCsx/BSp4TOoxkNVRYE+cXjQLpT78BEmFWRJ8qo1EqlV9hlhqeCe9ibcFbtULL/b5tNaB+GtvLhKIHziClAguAT7Zqq7eaFF1LllgXsIW+ELKGTajpRBVWcB9+jlm8zxm+QK4M+cwLk6T0t48Ei3Ki0S9KTsCG3iLvyDlDJsh7ZhUWjDSacLITiPindLhky3KqfSmna2ElOTN3lcknWFldpvUArwKiWbFYUJOeLP3q/8KPtmsuCT7nlS89s51eX5Ycfgm5bVYk6L++6B/SsFqXZ8zuH9aOXjFb1yTdiPRyCRJem1W5/pm2Wu+SXl5vJV8iliOiPWY0zsOZDXUVMPhm1W3Ek2Kt5d0dSI3rM7VkiFtFzNqW7UR8IkW5ffJJnIbsdLhlHZFRmE+l1GYK/XDq6dTLeoLN5rJ2nc9yy7Sbl3HdXT1p3eYTnEdpl/YdmPxfvjUFo3AbtFcSW0mP0u0qYb45arzRoXt7Hw8vUO/IbONfJprb1/XsAevZjVEQ/MnF7GrGBH1TbgAAAAASUVORK5CYII=" 
                        alt="Advertencia" class="warning-icon">
                            *Solo números. Min 7 - Max 10 
                        </div>
                    </div>
                    <div class="row mb-3 form-group">
                        <label for="fecha-nacimiento">Fecha de Nacimiento*</label>
                        <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" placeholder="DD-MM-AA" required>
                        <div class="invalid-feedback">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFb0lEQVR4nO2YW2xTdRzHjxJviMobqAm7AcIG6+X0vvV62vV22o11Z2uHxHjhwUBCFIh4CcbEB4kCxkCMCUpCUHmRxAeivBo10ZCgvBB3adfR9vT0ctqelm0w1q85I87AjF3P6aYP+yb/15PP55zf+f1//z9BrGY1q2lIKj5mYznARATf0EeCj7kkeJkrgndgTHAPjAue0JWSO/Rd0dV/suTu33PTwTxL/B8Cml4r+MN7y3T4R4Eeqpb9Qyj7ByH4GAheBoJnYH6V3CGUevrvLtcuFJ19KDh6fy06AvuzpuATKw/OMA9XgpHDAh3myoEwyrQIvnT4IiWuXhQdQfD2IM/b6KOTBuaxFYGf6osYK8Hw9XIgArnwBbu4AijYAuCt/mihm6aWFb7SO3yoHIzMNhq+YKXBW/zIW3xzebP3PRDEAw0FFx9Y6R0+XgmK4MsDz4vL7APf7UWuy30eJPlQwwQqvcMfrxR8vsuDvMmNnKHnaxDvPigfPhg5stLweaMbeUMPcjrXB7LgheCwZTlrnv83eL0LWb2zmtFStCR4eDyPVAKRP6TAp+w0ohYfohYvomYPxrs9SFl9dcHn9E7kdBSyGipdUFjX1y1QCUaOSoHPU72YeH4v5qZn8FfmpqYRG3gBeau/PnitKOBAVm07URd8zrP7yTIdLkgpm7yjF5P7DuL+xF/ch5zFVz88aUdWZZvOqkzPLFmgTEdel1rzvCOI+Mv7FwnEwi/dFagXXm1DRmUFpzS/v2QBgR76XeoPy9sDmNi9d5FAtG83cmavJPiM0gKu0xIHQdRuqyXv0FY53SZvCyA2sGeRwLgnhLxE+IxCFDCD7ezW1377/qFX5bRK8QtE6cHFAjYaORnw3M5upDtMb9Wuf//gWTl9nrcFEHUG76WvVjFicMqC53Z0geswfltbwDf4s9xNarSr5x7+uZkZjGodMuFNSLcbrtcuIS8Tl7vDjhldqN6eXRC4UyxhXBSQA99hRHq7sVJbwDPAyx0PogYX7gjlBYHbaQ7jWrs8+HYj2O2GKghmTQ2BUFHubBPVOzGbzS0IzMQmEdXYZMGntxvAbtOj5phd8oSScgezmIHCrRvJBYGp6yOIiQIy4dnntNM1S6jk7r8qd6qc0FOYHhlbELh59RomSJtMeB3Yrdp4bQHXrgtyR+KE3onJg+8gc/ZLZM6ex8S+Q0ho7HLhwW7RXK4pUOzZ9YbceT5n6EFSS2FCY59/8wnSjox8eKTaNMeWINCnk3sYSeoojHpDYI+fAnvyNEa9A0iorfLgN2uQbFO7awqAYdYUqb6EVHhO58RYMIw75crf+0ClgjE/A1YElwxPFmNN1kdrCsx/BSp4TOoxkNVRYE+cXjQLpT78BEmFWRJ8qo1EqlV9hlhqeCe9ibcFbtULL/b5tNaB+GtvLhKIHziClAguAT7Zqq7eaFF1LllgXsIW+ELKGTajpRBVWcB9+jlm8zxm+QK4M+cwLk6T0t48Ei3Ki0S9KTsCG3iLvyDlDJsh7ZhUWjDSacLITiPindLhky3KqfSmna2ElOTN3lcknWFldpvUArwKiWbFYUJOeLP3q/8KPtmsuCT7nlS89s51eX5Ycfgm5bVYk6L++6B/SsFqXZ8zuH9aOXjFb1yTdiPRyCRJem1W5/pm2Wu+SXl5vJV8iliOiPWY0zsOZDXUVMPhm1W3Ek2Kt5d0dSI3rM7VkiFtFzNqW7UR8IkW5ffJJnIbsdLhlHZFRmE+l1GYK/XDq6dTLeoLN5rJ2nc9yy7Sbl3HdXT1p3eYTnEdpl/YdmPxfvjUFo3AbtFcSW0mP0u0qYb45arzRoXt7Hw8vUO/IbONfJprb1/XsAevZjVEQ/MnF7GrGBH1TbgAAAAASUVORK5CYII=" 
                        alt="Advertencia" class="warning-icon">
                            *Ingrese su fecha de nacimiento 
                        </div>
                    </div>
                    <button id= "next1" class="submit-btn">Siguiente</button>
                    
                </div>
                </form>
                
                </div>
                <!-- Campos adicionales del segundo formulario -->
                <form method="post"  id="form2" name="secondForm" enctype="application/x-www-form-urlencoded" role="form" class="needs-validation" novalidate style="display: none;">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row g-3">
                        <h2 style="color: #ffffff" class=" fw-bold h2 mt-0  d-none d-md-block">Regístrate y participa.</h2>
                        <h2 style="color: #ffffff; font-weight: 700" class=" fw-bold h2 mt-0  d-block d-md-none">Regístrate y participa.</h2>
                        
                    </div>
                    <div class="row g-3">
                        <p>*Campos obligatorios</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico*</label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <div class="invalid-feedback">
                            Ingrese un correo electrónico válido
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono*</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Teléfono" required>
                        <div class="invalid-feedback">
                            Ingrese un número de teléfono válido
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="instagram">Usuario de Instagram*</label>
                        <input type="text" id="instagram" name="instagram" placeholder="@usuario" required>
                        <div class="invalid-feedback">
                            Ingrese un usuario de instagram valido
                        </div>
                    </div>
                    <button id="back" class="submit-btn" >Regresar</button>
                    <button id="complete" class="submit-btn">Completar registro</button>
                </form>
                <!-- Campos adicionales de la ultima  -->
                <div id="confirmation" class="form-container" style="display: none;">
                    <h2 id="confirmationMessage">[Nombre de usuario], ya estás por terminar!</h2>
                    <p>Revisa tu bandeja de entrada de correos, da clic en el botón de verificar que encontrarás en el correo para que dirección de correo electrónico quede verificada y tu registro quedará registrado.</p>
                </div>
            </section>
            <footer id="main-footer">
                <div class="footer-left">
                    <p>Todos los derechos reservados 2024 - <a href="http://franciscoamk.com" target="_blank"><u>Lee nuestros términos y condiciones de la promoción</u></a></p>
                </div>
                <div class="footer-right">
                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.spotify.com" target="_blank"><i class="fab fa-spotify"></i></a>
                </div>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/language/es_ES.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="functions.js"></script>
        
    </body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JVTFRG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) onclick="showFirstForm()"-->
</html>