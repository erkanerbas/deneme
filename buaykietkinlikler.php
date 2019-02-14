<?php
$connect = mysqli_connect('localhost', 'u846891725_xts', 'erk81753erk', 'u846891725_xts');
$sql = "
SELECT *  FROM `rezervasyon` 
  WHERE date_format(`baslangictarihi`, '%Y-%m') = date_format(now(), '%Y-%m')  and durumu='Kesin Kayıt' and baslangictarihi >= CURDATE()
  order by baslangictarihi ASC

";
$result = mysqli_query($connect, $sql);
$json_array = array ();
while($row = mysqli_fetch_assoc ($result))
{
$json_array [] = $row;
}
echo json_encode ($json_array);
?>