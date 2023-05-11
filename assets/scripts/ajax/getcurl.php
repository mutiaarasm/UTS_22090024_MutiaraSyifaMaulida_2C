<?php
$curl = curl_init();
curl_setopt_array($curl,array(
CURLOPT_URL => 'https://farmasi.mimoapps.xyz/api/getacces.php',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENDCODING => ''
CURLOPT_MAXREDIRS =>10,
CURLOPT_TIMEOUT => 0
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURLOPT_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST=> 'GET'
));
$response = curl_exec($curl);
curl_close($curl);
$response_array = json_decode($response,true);

$onscreen = '<table class="table" width= 100%>
<thread>
<th> KODE BARANG </th>
<th> NAMA BARANG </th>
<th> HARGA JUAL </th>
<th> QUANTITY</th>
</thead>
';
foreach ($response_array as $resps){
    if(substr($resp['i_name'],0 ,1 )=== "L"){
    $onscreen.='<tr>
    <td>'.$resp['i_code'].'</td>
    <td>'.$resp['i_name'].'</td>
    <td style="text-align:center">'.'</td>
    <td>'.$resp['i_qty'].'</td>
    </tr>';

}}
$onscreen.='</table>;
echo $onscreen;

