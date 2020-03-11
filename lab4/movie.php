<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id.'<br>';
}

if($id==1) {
    echo "Star Wars";
}
if($id==2) {
    echo "Lord of the Rings";
}
elseif($id==3){
    echo "Star Trek";
}
?>