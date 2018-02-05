<?php /* Developed by Juno_okyo */

define('ACCESS_TOKEN', 'YOUR_ACCESS_TOKEN'); // EDIT HERE

function request($url)
{
  if ( ! filter_var($url, FILTER_VALIDATE_URL)) {
    return FALSE;
  }
  
  $options = array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HEADER         => FALSE,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_ENCODING       => '',
    CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.87 Safari/537.36',
    CURLOPT_AUTOREFERER    => TRUE,
    CURLOPT_CONNECTTIMEOUT => 15,
    CURLOPT_TIMEOUT        => 15,
    CURLOPT_MAXREDIRS      => 5,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_SSL_VERIFYPEER => 0
  );

  $ch = curl_init();
  curl_setopt_array($ch, $options);
  $response = curl_exec($ch);
  $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);
  unset($options);
  return $http_code === 200 ? $response : FALSE;
}

function scan($postId) {
  $graph = request('https://graph.facebook.com/v2.9/' . $postId . '/comments?fields=message,from{id}&limit=100&access_token=' . ACCESS_TOKEN);
  if ($graph !== FALSE) {
    $json = json_decode($graph);

    $result = [];

    if (isset($json->data) && count($json->data) > 0) {
      foreach ($json->data as $comment) {
        if (strpos($comment->message, '.facebook.com/groups/') !== FALSE && $comment->from->id !== '100001518861027') {
          $result[] = $comment->id;
        }
      }

      // Get 3 random comments
      for ($i=0; $i < 3; $i++) { 
        echo $result[array_rand($result)] . '<br>';
      }
    }
  }
}

scan('100003880469096_499340353731423'); // EDIT HERE
