<?
$logFile = "log/log.txt";
$myfile = fopen($logFile, "r") or die("не смог открыть файл");
echo nl2br(file_get_contents('log/log.txt'));
fclose($myfile);