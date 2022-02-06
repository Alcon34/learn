<?php
$uploadDir = './downloads/';
if(isset($_FILES) && isset($_FILES['fileToUpload'])){
    $fileData = $_FILES['fileToUpload'];

    if($fileData['error'] === UPLOAD_ERR_OK){
        $fileName = $fileData['name'];
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);

        if ($extension != 'jpg' && $extension != 'jpeg'&& $extension != 'png' && $extension != 'gif'){
            echo "Sorry, your file is not supported.";
            die;
        }elseif ($_FILES['fileToUpload']['size'] > 4000000) {
            echo "Sorry, your file is too large.";
            die;
        }
        else{
            $hashName = hash('fnv164', time()) . '.' . $extension;
            $fileTMPName = $fileData['tmp_name'];
            $destinationDir = $uploadDir . $hashName;
            if(move_uploaded_file($fileTMPName, $destinationDir)){
                echo 'File downloads!';
                $url = 'yourfile.php?filename=' . $hashName;
                header('Location: '.$url.'');
            }else{
                echo 'Fatal error';
                die;
            }
        }

    }else{
        echo "Sorry, you must choose file!";
    }
}