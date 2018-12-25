<?php
/*
        [PHP] Auto Get Socks
    @Author : 74nc0x
    @Date   : 25/Dec/2018
    @Github : http://github.com/soracyberteam
    
    Thanks for Socks API by IndoSec
*/
error_reporting(0);$j=$argv[1] + 1;if(!$argv[1]){echo "Usage : sock.php [amount]\nEx : sock.php 10\n\nCode by 74NC0X | Thanks : IndoSec API\n";}else{echo "[!] Checking ...\n";$k=file_get_contents("http://indosec.web.id/api/socks.php?type=get&jumlah=$j");$r=explode("<br>",$k);foreach($r as $c){$ca=explode("\n",$c);foreach($ca as $cx){sleep(1);$o=file_get_contents("http://indosec.web.id/api/socks.php?type=check&proxy=$c");$p=json_decode($o,TRUE);if($cx==""){continue;}else{if($p['status'] == "error"){echo "[-] $cx -> DIE\n";}else{echo "[+] $cx -> LIVE\n";}}}}}?>
