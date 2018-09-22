<?php
include "init.php"; 

$obj = new base_class;
if(isset($_REQUEST["submit"]))
{

	$education=$_REQUEST["education"];
    $value=implode(",",$education);
    
	$obj->Normal_Query("INSERT INTO departamento(education) VALUES (?)",[$value]);
	
	header('location:index.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar</title>
    <h3>Insertar en tabla</h3>
</head>
<body>
<form method="post">

<h3>Education</h3>



<select  name="education[]" multiple class="form-control"  >
                                                        
                                                        <option value="Alcaldia">Alcaldia</option>
                                                        <option value="Proveduría">Proveduría</option>
                                                        <option value="Recursos Humanos">Recursos Humanos</option>
                                                        <option value="Gestión Social">Gestión Social</option>
                                                        <option value="Departamento Legal">Departamento Legal</option>
                                                        <option value="Informática">Informática</option>
                                                        <option value="CECUDI">CECUDI</option>
                                                        <option value="Contabilidad">Contabilidad</option>
                                                        <option value="Tesorería">Tesorería</option>
                                                        <option value="Planificación Urbana">Planificación Urbana</option>

                                                    </select>
                                                   
                                                    <button type="submit" value="insert" name="submit">Insertar</button>

</form> 
</body>
</html>