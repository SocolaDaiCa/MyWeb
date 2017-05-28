<?php
$text = $_GET['text'];
$lang = $_GET['lang'];
if (empty($lang)==1) {$lang = 'Dịch';} else{$lang = 'Translate';}

$to = $_GET['to'];
if (empty($to)==1) {$to = 'vi';}

$from = $_GET['from'];
if (empty($from)==1) {$from = 'en';}

$ch = curl_init();
 $useragent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) coc_coc_browser/61.4.120 Chrome/55.4.2883.120 Safari/537.36";
    curl_setopt($ch,CURLOPT_URL, 'http://www.transltr.org/api/translate?text='.urlencode($text).'&to='.$to.'&from='.$from);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false); 
    curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $abc=curl_exec($ch);
    curl_close($ch);
$abc = json_decode($abc,true);
echo '{
  "messages": [
    {
      "text":  "'.$abc[translationText].'",
      "quick_replies": [
        {
          "title":"'.$lang.'",
          "block_names":["translate", "dathackytrans"]
        }
      ]
    }
  ]
}';
