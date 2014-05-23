<html>
<head>
  <title>Coucou </title>
</head>
<body>
<?php echo $message;?>
<br/><br/>
<?php echo $calcul_ancien;?>
<br/><br/>
<?php echo $calcul_page;?>
<br/><br/>
<?php
// Liste des anciens 
foreach ($req->result() as $row)
{
  
  echo "<a href ='>".$row->GMAN_NOM.'   '.$row->GMAN_PRENOM.'    '.$row->GMAN_CODE."</a>";
  echo "<br>";
}
?>

<?php echo anchor("ancien_detail".$row->GMAN_CODE);?><br/>
 



</body>
</html>