<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">


<?php 
session_start();
if(isset($_SESSION['registrado']))
{  
?>
    <div class="container">

      <form  class="form-ingreso " onsubmit="GuardarVoto(); return false;">



        <h2 class="form-ingreso-heading">Pedido</h2>

        <label for="Opcional" class="sr-only" hidden>Opcional</label>
                <input type="text" id="opcional" class="form-control" placeholder="Opcional" required="" autofocus="">

        <select id="corte">
          <option value="Corte1">Corte1</option>
          <option value="Corte2">Corte 2</option>
          <option value="Corte3">Corte 3</option>
        </select>
        <br>

        <label>
          <input type="radio" Name="cantidadKilogramos" id="cantidadKilogramos" value="100g" checked>1kg
          <input type="radio" Name="cantidadKilogramos" id="cantidadKilogramos" value="200g">2kg
          <input type="radio" Name="cantidadKilogramos" id="cantidadKilogramos" value="300g">3kg
        </label>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
        <input type="hidden" name="id" id="id" readonly>
      </form>

    </div> <!-- /container -->

<?php 
}
else
{
  echo"<h3>usted no esta logeado. </h3>"; 
}
?>