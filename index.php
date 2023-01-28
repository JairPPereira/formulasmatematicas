$img = $_POST['imgData'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = 'images/image.png';
    file_put_contents($file, $data);