<?php
function getDataJson($filename)
{
    $dataJSON = file_get_contents($filename);
    return json_decode($dataJSON);
}

function saveDataJSON($filename, $name, $email, $phoneNumber)
{
    try {
        $contact = ['name' => $name, 'email' => $email, 'phone' => $phoneNumber];
        $dataArr = getDataJson($filename);
        array_push($dataArr, $contact);
        $dataJSON = json_encode($dataArr);
        file_put_contents($filename, $dataJSON);
        echo "lưu dữ liệu thành công";
    } catch (Exception $e) {
        echo 'Lỗi', $e->getMessage(), "\n";
    }
}
