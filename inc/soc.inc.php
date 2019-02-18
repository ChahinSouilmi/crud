<?php
include_once "dbh.inc.php";

if (isset($_POST['submit'])) {

$nomSociete = $_POST['societe'] ;
$nomResponsable = $_POST['responsable'] ;
$adresse = $_POST['adresse'] ;
$fax = $_POST['fax'] ;
$mobile = $_POST['mobile'] ;
$secAct = $_POST['secAct'] ;
$produits = $_POST['produits'] ;
$email = $_POST['email'] ;
$site = $_POST['site'] ;
$fJuri = $_POST['fJuri'];
$regime =$_POST['radio'];
//Empty control

if (empty($nomSociete)||empty($nomResponsable)||empty($adresse)||empty($mobile)||empty($email)) {

    header ("Location: ../index.php?empty");
    exit();
}else {
$sql="INSERT INTO infos (nom_soc,resp_soc,adresse_soc,mobile_soc,email_soc,fax_soc,site_soc,fJuri,produit,regime,sec_act) 
VALUES ('$nomSociete','$nomResponsable','$adresse','$mobile','$email','$fax','$site','$fJuri','$produits','$regime','$secAct')";

$query = mysqli_query ($conn,$sql);
if (!$query) {
    header ("Location: ../index.php?dbfail");
    exit();

}else
header ("Location: ../index.php?success");
}

 }