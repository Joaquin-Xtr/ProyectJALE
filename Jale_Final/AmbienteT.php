<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>

  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<div class="content">
</div>
  <main v-cloak>

  <p><button class="accent" @click="toggleModal()">Tutorial</button></p> 

  <!--  The Modal -->
  <boardal v-if="modal.isOpen" :has-mask="modal.hasMask" :can-click-mask="modal.canClickMask" :has-x="modal.hasX" @toggle="toggleModal">
    <article v-cloak>
      <section>
        <h3>¡Bienvenido a Jale!</h3>
        <p>Jale es un portal web que te permite facilitar la navegacion.</p>
        <p>Hemos creado este mini tutorial para que puedas utilizar nuestra plataforma de una manera muy amena, si necesitas ayuda puedes mandar un ticket haciendo <A HREF="/Jale_Final/Formulario/contacto.php">click aquí</A> </p>
        <p><button class="accent" onclick="history.back()">Volver atrás</button></p>
        <p><button class="accent" @click="skip(1)">¡Vamos a Comenzar!</button></p>
        <p><label><input type="checkbox" v-model="showDots" /> Mostrar páginas</label></p>
        <p>
          <b>¿Cómo quieres el movimiento?</b><br />
          <label><input type="radio" v-model="orientation" value="row" /> De manera horizontal</label><br />
          <label><input type="radio" v-model="orientation" value="column" /> De manera vertical</label>
        </p>
<!--         <p><label><input type="checkbox" v-model="xray" :true-value="'visible'" :false-value="'hidden'" /> X-ray Vision</label></p> -->
      </section>
      <section>
        <h3>Primer paso: Registro e inicio de sesión </h3>
        <p><button class="primary" @click="goToStep(3)">Si ya tienes cuenta, ¡saltar este paso!</button></p>
        <p><button class="primary" @click="toggleModal">Si no deseas realizar este tutorial, ¡Terminalo Aquí!</button></p>
        <p>Lo primero que debes hacer para comenzar es crear una cuenta, para esto haz  <A HREF="/Jale_Final/Formulario/ingresar2.php" target="_blank">click aquí</A>, Para así comenzar.</p>
        <p>Se abrirá una interfaz donde tendrás que rellenar con tu: <b>Nombre, Correo y Contraseña</b>. Recuerda que tu contraseña es personal y no debes darsela a nadie</p>
        <img src="Imagenes/login1.png" class="d-block w-100 shadow p-3 mb-5 bg-body rounded" alt="slide3">
        <p>Una vez rellenado tus datos, debes iniciar sesión, para esto debes rellenar tus datos</p>
        <img src="Imagenes/login2.png" class="d-block w-100 shadow p-3 mb-5 bg-body rounded" alt="slide3">
        <p><b>Aquí termina el primer paso de este tutorial</b></p>

        <p><button class="primary" @click="skip(1)">Siguiente...</button></p>
      </section>
      <section>
        <h3>Segundo paso: Utilizar la interfaz de usuario</h3>
        <p>Jale para facilitar la navegación, enseña un catalogo con paginas web muy variadas y así poder mantener una navegación segura</p>
        <p>Una vez iniciada tu sesión dentro del sitio, entraras en la sección de "Mis Sitios", la cual tiene como motivo mostrar todos los sitios web que te gusta acceder, funcionará como un acortador de caminos.</p>
        <img src="Imagenes/usuario2.png" class="d-block w-100 shadow p-3 mb-5 bg-body rounded" alt="slide3">
        <p>Jale para facilitar la navegación, enseña un catalogo con paginas web muy variadas y así poder mantener una navegación segura</p>


        <h4>Rellenar Mis Sitios</h4>
        
        <p>Para poder rellenar "Mis Sitios" debemos visitar el catalogo de paginas Web, aqui podras agregar a tu perfil y así poder tener atajos en la navegación</p>
        <p>Solamente debes apretar el simbolo "+" dentro de la tarjeta de presentación y así se agregará</p>
        <img src="Imagenes/usuario1.png" class="d-block w-100 shadow p-3 mb-5 bg-body rounded" alt="slide3">

        <p>De manera correlativa, se puede valorizar las paginas web para así mantener un orden y saber cual es más popular dentro del sitio.</p>
        <p>Para hacerlo, solamente debes presionar la estrella y se te abrirá este interfaz donde podras seleccionar cuantas estrellas darle al sitio</p>

        <img src="Imagenes/usuario3.png" class="d-block w-100 shadow p-3 mb-5 bg-body rounded" alt="slide3">  
      </section>
      <section>
      <h4>Sugerencias</h4>
        <p>Si existen casos de que no exista en el catalogo un sitio web de interes, se puede realizar sugerencias para que la administración la revise, no todas las sugerencias serán agregadas en el catalogo</p>
        <p><a href="/Jale_Final/Formulario/sugerencia.php" target="_blank">Haz click Aquí</a><p>
        <p>Solamente queda rellenar los datos en el interfaz que se abrirá</p>
        <img src="Imagenes/usuario4.png" class="d-block w-100 shadow p-3 mb-5 bg-body rounded" alt="slide3">
      </section>
      <section>
        <h3>Ultima parte: Noticias e Infografías</h3>
        <p>Como ultima parte, JALE tiene una variedad de noticias relacionadas a la tercera edad, dado que estas estan relacionadas explicitamente con el SENAMA</p>
        <p>Y finalmente logramos concretar infografías orientadas a la utilización de aplicaciones famosas.</p>
        <p><button @click="reset()">Reiniciar el tutorial</button></p>
      </section>
    </article>
    <footer>
      <div class="forward-actions">
<!--         <button class="secondary skip" :disabled="isLastStep" v-show="!isLastStep" @click="skip(2)">Skip</button> -->
        <button class="primary next" :disabled="isLastStep" v-show="!isLastStep" @click="skip(1)"><i class="fa fa-fw fa-lg" :class="nextIcon"></i></button>
        <button class="accent save" :disabled="!isLastStep" v-show="isLastStep" @click="finish"><i class="fa fa-fw fa-lg fa-check"></i></button>
      </div>
      <div class="step-dots" v-if="hasDots">
        <div class="step-dot" v-for="n in max" :class="{active: n == step}" @click="goToStep(n)"></div>
      </div>
      <div class="back-actions">
        <button class="secondary cancel prev" :disabled="isFirstStep" xv-show="!isFirstStep" @click="skip(-1)"><i class="fa fa-fw fa-lg" :class="backIcon"></i></button>
      </div>
    </footer>
  </boardal>
</main>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

<style>html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 7s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:7s;
}

.bg3 {
  animation-duration:7s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}</style>