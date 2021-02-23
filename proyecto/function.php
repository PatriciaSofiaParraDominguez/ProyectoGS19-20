<?php
include 'conexion.php';
function delete($tblname,$field_id,$id){

    $sql = "delete from ".$tblname." where ".$field_id."=".$id."";
    
    return ($sql);
}
function edit($tblname,$form_data,$field_id,$id){
    $sql = "UPDATE ".$tblname." SET ";
    $data = array();

    foreach($form_data as $column=>$value){

        $data[] =$column."="."'".$value."'";

    }
    $sql .= implode(',',$data);
    $sql.=" where ".$field_id." = ".$id."";
    return ($sql); 
}
function select_id($tblname,$field_name,$field_id){
    $sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
    $db=($sql);
    $GLOBALS['fila'] = mysqli_fetch_object($db);

    return $sql;

}
?>