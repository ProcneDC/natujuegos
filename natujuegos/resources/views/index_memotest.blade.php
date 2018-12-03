<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Memory Game</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">  
  <link rel="stylesheet" href="css/memo_animate.min.css">
  <link rel="stylesheet" href="css/memo_styles.css">
</head>
<body>
<!--  cz-shortcut-listen="true": is inserted into html by the colorzilla extension/add-on-->  
  <header>
    <figure>
      <img id="logo" src="{{ asset('img/Angry.png') }}" alt="logo">
    </figure>
  </header>
  <div class="arreglar">      
    <div class="column">
      <section id="difDiv">
        <h3>Dificultad</h3> 
            <form id="dificultad">
              <input type="radio" class="clase" name="dificultad" value="Facil" id="facil"><label for="facil">Fácil</label><br>
              <input type="radio" class="clase" name="dificultad" value="Intermedio" id="inter"><label for="inter">Intermedio</label><br>
              <input type="radio" class="clase" name="dificultad" value="Experto" id="experto"><label for="experto">Experto</label><br>
              <!--Dificultad <input type="text" id="result"> <br>-->
              <button type="button" id="btn" class="button btn danger"><span> Comenzar </span></button>
              <br>
            </form>
      </section>
      <section id="instrucciones">
          <h3>¿Cómo jugar? </h3>
          <p>Encontrá los <strong>seis pares de aves</strong><br> dando vuelta las cartas en el menor <br>número de movimientos posible. <br> <br>  ¡Asegúrate de desafiarte<br> con un nivel superior<br> si es demasiado fácil!</p>
          <div id="intentos"> Cantidad de intentos:  </div> <br>
          <h3>Nombre de Jugador </h3>  
          <p id="nombre">Anónimo</p>
           <button class="button btn danger"><span> <a href="memotest/ranking.html" id="link">Ver ranking</a> </span></button>
          
      </section>
    </div>
    <div id="memotest"> 
      <section class="tablero">
         
      </section>
    </div>
  </div>      
<script src="js/memo_jquery.js"></script>
<script src="js/memo_index.js"></script>
</body>
</html>