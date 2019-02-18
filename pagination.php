
<?php
include_once 'head.php';
$conn= mysqli_connect("localhost","root","","kasserine") 
or die("Error: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8' ");
//query
$query=mysqli_query($conn,"SELECT COUNT(id) FROM `infos`");
	$row = mysqli_fetch_row($query);
 
	$rows = $row[0];
 
	$page_rows = 5;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 
 
	$last = ceil($rows/$page_rows);
 
	if($last < 1){
		$last = 1;
	}
 
	$pagenum = 1;
 
	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}
 
	if ($pagenum < 1) {
		$pagenum = 1;
	}
	else if ($pagenum > $last) {
		$pagenum = $last;
	}
 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
 
	$nquery=mysqli_query($conn,"SELECT * from  infos $limit");
 
	$paginationCtrls = '';
 
	if($last != 1){
 
	if ($pagenum > 1) {
$previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';
 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
			}
	}
}
 
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
 
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
 
if ($pagenum != $last) {
$next = $pagenum + 1;
$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">Next</a> ';
}
	}
?>


		<div rel="nofollow">
			<div style="height: 20px;"></div>
			<div class="row container" >
				<div class="col-lg-2">
				</div>
				<div class="col-lg-6">
					<h4>Simple Pagination using PHP/MySQLi</h4>
					<table width="100%" class="table table-striped table-bordered table-hover">
						
						<thead>
							<tr class="info">
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
        
							</tr>
						</thead>
					
						<tbody>
							<?php
								while($crow = mysqli_fetch_array($nquery)){
							?>
							<tr>
							<td> <?php echo $crow['id']; ?></td>
							<td> <?php echo $crow['nom_soc']; ?></td>
							<td><?php echo $crow['resp_soc']; ?></td>
							<td><?php echo $crow['adresse_soc'];?></td>
							<td><?php echo $crow['fax_soc'];?></td>
							<td><?php echo $crow['mobile_soc'];?></td>
							<td><?php echo $crow['sec_act'];?></td>
							<td><?php echo $crow['produit'];?></td>
							<td><?php echo $crow['email_soc'];?></td>
							<td><?php echo $crow['site_soc'];?></td>
							<td><?php echo $crow['regime'];?></td>
							<td><?php echo $crow['fJuri'];?></td>
							</tr>
							<?php
									}
							?>
						</tbody>
					</table>
					<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	</body>
</html>