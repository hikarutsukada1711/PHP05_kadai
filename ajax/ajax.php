<?php
  //POSTパラメータを取得
  $id = $_POST["id"];
  $name = $_POST["name"];
  $age = $_POST["age"];  
  $sleep = $_POST["sleep"];  

  //処理を一時停止する関数
  sleep($sleep);

  // sleep($sleep);  //Timeoutテスト用
  // echo "<div>$id</div><div>$name</div><div>$age</div>";
  
 $json = '[
   {
     "id":"'.$id.'",
     "name":"'.$name.'",
     "age":"'.$age.'"
   },
   {
    "id":"'.$id.'",
    "name":"'.$name.'",
    "age":"'.$age.'"
   }
 ]';
 echo $json;
exit;
?>
