<?php
require_once("../../includes/db/connection.php"); 
function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}
$dist=$_POST['dist'];

$place=$_POST['area'];
       
    $query = "SELECT * FROM area where area='".$place."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $query2 = "SELECT * FROM area";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
    $O_row=" ";
   
   
    $src=mysql_fetch_array($query_result);
    $areas="'".$src['area']."'";
    while ($rw1 = mysql_fetch_array($query_result2)) {
          if(distance($src['lati'],$src['longi'],$rw1['lati'],$rw1['longi'])<$dist and $src['area']!=$rw1['area']){
            $areas = $areas.",'".$rw1['area']."'";
        }
    }
    $queryx = "SELECT * FROM serv_center where (area in (".$areas.") and company='".$_POST['company']."')";
    $queryx_result = mysql_query($queryx,$con)
    or die("Invalid query: " . mysql_error());
    while ($rw1 = mysql_fetch_array($queryx_result)) {

        $query = "SELECT quality FROM showroom_quality where S_id='".$rw1[S_id]."'";
        $query_result = mysql_query($query,$con)
        or die("Invalid query: " . mysql_error());
        $qual = mysql_fetch_array($query_result);
        $q=$qual['quality'];

        $query = "SELECT amenity,description FROM Amenities where
S_id='".$rw1[S_id]."'";         $query_result = mysql_query($query,$con)
or die("Invalid query: " . mysql_error());         $amnty="";
while($amm = mysql_fetch_array($query_result)){
$amnty.=$amm['amenity']." - ".$amm['description'].", ";         }

        $query = "SELECT price FROM prices where (S_id='".$rw1[S_id]."' and item_name='".$_POST['servicetype']."')";
        $query_result = mysql_query($query,$con)
        or die("Invalid query: " . mysql_error());
        $qual = mysql_fetch_array($query_result);
        $p=$qual['price'];


        $O_row.="<tr>";
        $O_row.="<td>$rw1[S_name]</td>";
        $O_row.="<td>".$q."</td>";
        $O_row.="<td>$rw1[address]</td>";
        $O_row.="<td>".$amnty."</td>";
        $O_row.="<td>Rs. ".$p."</td>";
        $O_row.='<td><button id="'.$rw1[S_id].'_'.$rw1['lati'].'_'.$rw1['longi'].'" class="btn btn-success btn-flat" style="margin-left:35px" onclick="shwSlots(this.id);">Select</button></td>';
        $O_row.="</tr>";
     }

echo $O_row;
//print "<script>document.getElementById('detail_tab').innerHTML='".$O_row."';</script>";


?>