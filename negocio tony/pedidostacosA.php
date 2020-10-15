<?php
require_once 'header.php';
echo '
<center><h1>Pedidos!</h1></center>
<form class="needs-validation"  method="POST" novalidate>
<div class="form-row">
  <div class="col-md-4 mb-3">
    <label  for="validationCustom01" class="text" >Nombre: </label>
    <input  name="nombre" type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-4 mb-3">
    <label for="validationCustom02" class="text" >Pedido: </label>
    <input name="orden" value="Tacos de Asada">   
  </div>
</div>

<div class="form-row">
  <div class="col-md-6 mb-3">
    <label for="validationCustom03" class="text" >Dirección: </label>
    <input type="text" name="direc" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
</div>
<h2 for="validationCustom03" class="text" >precio: $10 </h2>
<button class="btn btn-primary" type="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
"use strict";
window.addEventListener("load", function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName("needs-validation");
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
  });
}, false);
})();
</script>';
error_reporting(E_ERROR | E_PARSE);
$nombre=$_POST["nombre"];
$direc=$_POST["direc"];
$orden=$_POST["orden"];
$precio="$10";
queryMysql("INSERT INTO facped (nameped, direc, nombre, precio)
 VALUES ('$orden', '$direc', '$nombre', '$precio')");

?>