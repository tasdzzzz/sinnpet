?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$i = 0;

while(1==1){
        $i = $i+1;
        $test = generateRandomString();
        $key = "<KEY_HERE>";
        if (preg_match("/^0e[0-9]*$/",md5($key.$test.$key))){
                echo $test;
                break;
        }
}


?>
