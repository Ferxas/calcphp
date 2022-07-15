<!DOCTYPE html>
<html>
<head>
    <!-- Calculadora simple usando PHP-->
    <!-- Desarrollado por: Fernando Racedo Meneses-->
    <!-- Evidencia de taller: "Uso de funciones"-->
    <title>Ecuaciones matemáticas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="icon" href="<?php echo rtrim($_SERVER['PHP_SELF'], basename($_SERVER['PHP_SELF'])); ?>/works/favicon.ico" type="image/x-icon">

	<style> /* estilizado (ignorar) */
    select {
        width: 150px;
        margin: 10px;
    }
    select:focus {
        min-width: 150px;
        width: auto;
    }
	
	p{
		background-color: #149c16;
		background-size: 30% 20%;
		background-repeat: no-repeat;
		border: 2px solid black;
	}
	
	
	/* estilizado (ignorar) */
}

	</style>
</head>
<body background="https://i0.wp.com/fractalkitty.com/wp-content/uploads/2020/10/ThePoint.gif?fit=960%2C540&ssl=1">
<center>
<form method= "POST" action="biblioteca.php"> <!-- a través del método POST se almacena la información ingresada del formulario en "bliblioteca.php" -->
     <label>Por favor ingrese un número entero</label><br>
     <input type="number" name="numero1"><br>
     <label>Por favor ingrese otro número entero</label><br>
     <input type="number" name="numero2"><br>
 
     <select class="form-select" size="1" name="operacion">
         <option value="sumar">SUMAR</option>
         <option value="restar">RESTAR</option>
         <option value="multiplicar">MULTIPLICAR</option>
         <option value="dividir">DIVIDIR</option>
     </select>
         <button type="submit" class="btn btn-success">Ver resultado</button>
         </form>
		 </center>
		 <br>
		 
		 <center><p>Calculadora simple usando PHP</p>
		 <p>Desarrollado por: Fernando Racedo Meneses</p>
		 <h6>enjoy it!<h6>
		 </center>
		 
		 
   </body>
</html>

