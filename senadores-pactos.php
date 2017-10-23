<?php include('header.php')?>


<div class="container">
<div class="row">
<div class="col-sm-12 py-5">
<?php
$csv = array_map('str_getcsv', file('data/eleccion_senadores.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>
<?php $mujeres = 0; $hombres = 0;?>

<h2> Candidatos a Diputados x Pacto/Lista</h2>
<hr>

<h2>Chile Vamos </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
<tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
</tr>
<?php }?>
<?php }?>
</tbody>
</table>

<hr>

<h2>La Fuerza de la Mayoria </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
<tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
</tr>
<?php }?>
<?php }?>
</tbody>
</table>

<hr>

<h2>Sumemos </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
<tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
</tr>
<?php }?>
<?php }?>
</tbody>
</table>

<hr>

<h2>Unión Patriótica </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
<tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
</tr>
<?php }?>
<?php }?>
</tbody>
</table>

<hr>

<h2>Convergencia Democrática </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
<tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
</tr>
<?php }?>
<?php }?>
</tbody>
</table>

<hr>




<h2>Independiente </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
<tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
</tr>
<?php }?>
<?php }?>
</tbody>
</table>

<hr>

<h2>Por Todo Chile </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
<tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
</tr>
<?php }?>
<?php }?>
</tbody>
</table>

<hr>

<h2>Coalición Regionalista Verde </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
<tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
</tr>
<?php }?>
<?php }?>
</tbody>
</table>

<hr>

<h2>Frente Amplio </h2>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Nombre</th>
<th>Partido</th>
</tr>
</thead>
<tbody>
<?php for($a = 0; $a < $total = count($csv); $a++){?>
<?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
  <tr>
<td>
<?php echo($csv[$a]["Candidato Nombre"])?>

<?php echo($csv[$a]["Candidato Apellido Paterno"])?>

<?php echo($csv[$a]["Candidato Apellido Materno"])?> </td>

<td>  <?php echo($csv[$a]["Partido Politico"])?> </td>
  <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
   <?php $frenteamplio++?>
 <?php }?>
<?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
  <?php $coalicion++?>
<?php }?>

  <?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
   <?php $portodo++?>

  <?php }?>

   <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
   <?php $independiente++?>

  <?php }?>

  <?php if(($csv[$a]["Lista/Pacto"])=="Trabajadores revolucionarios"){?>
   <?php $revolucionarios++?>

  <?php }?>

     <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
   <?php $convergencia++?>

  <?php }?>

   <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
   <?php $union++?>

  <?php }?>

  <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
   <?php $sumemos++?>

  <?php }?>

   <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
   <?php $lafuerza++?>

  <?php }?>

    <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
   <?php $vamos++?>

  <?php }?>
</td>


</tr>
<?php }?>
<?php }?>
</tbody>
</table>


<hr id="numeros">

<h3>Resultados del cálculo</h3>

<div class="alert alert-danger">
<h4>Los candidatos del Frente Amplio son <?php print $frenteamplio;?></h4>
<h4>Los candidatos del Coalición Regionalista Verde son <?php print $coalicion;?></h4>
<h4>Los candidatos del Por todo Chile son <?php print $portodo;?></h4>
<h4>Los candidatos del Independiente son <?php print $independiente;?></h4>
<h4>Los candidatos del Trabahadores revolucionarios son <?php print $revolucionarios;?></h4>
<h4>Los candidatos del Convergencia Democrática son <?php print $convergencia;?></h4>
<h4>Los candidatos de la Unión Patriótica son <?php print $union;?></h4>
<h4>Los candidatos de Sumemos son <?php print $sumemos;?></h4>
<h4>Los candidatos de La fuerza de la Mayoría son <?php print $lafuerza;?></h4>
<h4>Los candidatos de Chile Vamos son <?php print $vamos;?></h4>

</div>

</div>
</div>
</div>
<?php include('footer.php')?>
