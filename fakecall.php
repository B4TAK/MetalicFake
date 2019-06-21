<?php
system("apt-get install toilet -y");
system("toilet -f F4K3 --gay");
echo "
[━━━━━━━━━━━━━━━━━━━━━━━━━━━━]
|  •Author : Jhosua Saut Maruli
|  •Fb : Jhosua Dz
|  •Youtube : Mr.F4K3 YT
|  •IG : jhosua93_n
[━━━━━━━━━━━━━━━━━━━━━━━━━━━━]
";
function api($nomor,$jumlah){
$url = "http://0x.nakocoders.org/rest-api/lain-nya/api.php?nomor=$nomor";
$loop = 0;
while($loop < $jumlah){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$hasil = curl_exec($ch);
echo $hasil;
sleep(5);
$loop++;
}
}
echo "Masukan Nomor : ";
$nomor = trim(fgets(STDIN));
echo "Masukan Jumlah : ";
$jumlah = trim(fgets(STDIN));
api($nomor,$jumlah);
?>