<?php
if(isset($_POST['scene'])){
    $connect = mysqli_connect('localhost','root','','test');
    $query = 'SELECT * FROM testvtour WHERE scene = "'.$_POST['scene'].'"';
    $result = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($result))   {
        $data['id'] = $row['id'];
        $data['ath'] = $row['ath'];
        $data['atv'] = $row['atv'];
        $data['text'] = $row['text'];

        $array[] = $data;
    }

    echo json_encode($array);
}


?>