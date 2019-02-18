<?php
session_start();
include_once 'head.php';
include 'inc/dbh.inc.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>Gestion Pages et Menus</title>
	 <meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>

<!---4 EDITOR-->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

<!-- Fin 4 Editor -->

</head>
<body>
<div class="container" style="width:100%;" >
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:100%;">
	<span style="font-size:25px; color:blue"><center><strong>Gestion Pages et Menus</strong></center></span>	

		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover" style="width:100%;">
			  <thead>
        <th>id</th>
        <th>societe</th>
        <th>Responsable</th>
        <th>adresse</th>
        <th>fax</th>
        <th>mobile</th> 
        <th>Secteur d'activité</th>  
        <th>produits</th>    
        <th>email</th>
        <th>site web</th>        
        <th>regime</th> 
        <th>forme juridique</th>   
        <th>Actions</th>  
        </thead>
 <meta charset="utf-8">
<?php

$sqlm = "SELECT * FROM infos ";
$resultm = mysqli_query($conn, $sqlm);
if (mysqli_fetch_array($resultm) > 0) {
    // output data of each row
    mysqli_set_charset($conn,"utf8");
    while($rowm = mysqli_fetch_array($resultm)) {

       
?>
 
			<tbody>

					<tr>
 
<td> <?php echo $rowm['id']; ?></td>
<td> <?php echo $rowm['nom_soc']; ?></td>
<td><?php echo $rowm['resp_soc']; ?></td>
<td><?php echo $rowm['adresse_soc'];?></td>
<td><?php echo $rowm['fax_soc'];?></td>
<td><?php echo $rowm['mobile_soc'];?></td>
<td><?php echo $rowm['sec_act'];?></td>
<td><?php echo $rowm['produit'];?></td>
<td><?php echo $rowm['email_soc'];?></td>
<td><?php echo $rowm['site_soc'];?></td>
<td><?php echo $rowm['regime'];?></td>
<td><?php echo $rowm['fJuri'];?></td>
<td>
<a href="#edit<?php echo $rowm['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
<a href="#del<?php echo $rowm['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
					</tr>
					<?php
			
			}
			?>
			</tbody>
			<?php  } ?>
		</table>
	</div>

</div>

</body>
</html> 