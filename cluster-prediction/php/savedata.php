<?php
include("connect.php");
header("connect-type: text/html; charset = utf-8");
$slcdb = mysqli_select_db($db_link,"simpleml");
if(!$slcdb){
	die("資料庫連接失敗");};
$nowdata = $_POST["nowdata"];
$sql_query = "INSERT INTO `record`(`age`, `sex`, `region`, `income`, `married`, `children`, `car`, `save_act`, `current_act`, `mortgage`, `kmeans_cluster`, `kmeans_pep`, `knn_id`, `knn_pep`, `ca_pep`) VALUES ('".$nowdata[0]."','".$nowdata[1]."','".$nowdata[2]."','".$nowdata[3]."','".$nowdata[4]."','".$nowdata[5]."','".$nowdata[6]."','".$nowdata[7]."','".$nowdata[8]."','".$nowdata[9]."','".$nowdata[10]."','".$nowdata[11]."','".$nowdata[12]."','".$nowdata[13]."','".$nowdata[14]."')";
$result = mysqli_query($db_link,$sql_query);
/*if($result){
	echo "success";
}
else{
	echo "false";
}
*/
?>