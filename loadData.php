<?php
include 'connection.php';

$loadType=$_POST['loadType'];
$loadId=$_POST['loadId'];

if($loadType=="kabupaten"){
    $sql="select id,nama_kabupaten from kabupaten where id_provinsi='".$loadId."' order by nama_kabupaten asc";
}
else{
    $sql="select id,nama_kecamatan from kecamatan where id_kabupaten='".$loadId."' order by nama_kecamatan asc";
}
$res=mysqli_query($con,$sql);
$check=mysqli_num_rows($res);
if($check > 0){
    $HTML="";
    while($row=mysqli_fetch_array($res)){
        $HTML.="<option value='".$row['id']."'>".$row['1']."</option>";
    }
    echo $HTML;
}
?>
