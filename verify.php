<?php
$access_token = 'aqn7VTr3HUdE32acY1OXF2uEo6SKW1aXPG29ctCw0QINdiJit/lvSuzklguLed3SNlnZhY+8jPAGuECxM1iUUnMjYI1JaYIEGqaYYrIui7bwUitpMGZjclTVgPUp208yBB+hvxT4aaxVK0kDlTrjSwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
