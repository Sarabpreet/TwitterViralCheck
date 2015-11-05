<style>
    

*{
  
  border: 0px;
  margin:0px;
  padding:0px;
}
body{
  
  width:60%;
  margin:0 auto;
  text-align: center;
}

.date {
  position: relative;
  top:0px;
  left:30px;
  background:Green;
  width: 250px;
  padding:20px 10px;
  color:white;
  text-align: center;
}

.text {
  
    background:darkgoldenrod;
  padding:30px;
  color:wheat;
  
}

</style>


<?php
    function buildBaseString($baseURI, $method, $params) {
        $r = array();
        ksort($params);
        foreach($params as $key=>$value){
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method."&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }

    function buildAuthorizationHeader($oauth) {
        $r = 'Authorization: OAuth ';
        $values = array();
        foreach($oauth as $key=>$value)
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        $r .= implode(', ', $values);
        return $r;
    }

    $url = "https://api.twitter.com/1.1/search/tweets.json";

    $oauth_access_token = "240785139-IeckFIIdokhq71KprJTTPtx2lQX0OrKEUR3Vt8hC";
    $oauth_access_token_secret = "jRzgnsJvkA7Z2QPF1u1NvGUqCy7ONTAmM45VjROLloKcI";
    $consumer_key = "Zy5Ji3EUig67v8uzyrJmxY4iu";
    $consumer_secret = "JhE7YQ0qJhvIOllElsfR6l9fTkUUCPwFMjNW5xceGvZclEotak";

    $oauth = array( 'oauth_consumer_key' => $consumer_key,
                    'oauth_nonce' => time(),
                    'oauth_signature_method' => 'HMAC-SHA1',
                    'oauth_token' => $oauth_access_token,
                    'oauth_timestamp' => time(),
                    'oauth_version' => '1.0');

    $base_info = buildBaseString($url, 'GET', $oauth);
    $composite_key = rawurlencode($consumer_secret) . '&' . rawurlencode($oauth_access_token_secret);
    $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
    $oauth['oauth_signature'] = $oauth_signature;

    // Make requests
    $header = array(buildAuthorizationHeader($oauth), 'Expect:');
    $options = array( CURLOPT_HTTPHEADER => $header,
                      //CURLOPT_POSTFIELDS => $postfields,
                      CURLOPT_HEADER => false,
                      CURLOPT_URL => $url,
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_SSL_VERIFYPEER => false);

    $feed = curl_init();
    curl_setopt_array($feed, $options);
    $json = curl_exec($feed);
    curl_close($feed);

    $twitter_data = json_decode($json);


// print_r ($twitter_data);
// for ($i=0; $i<sizeof($twitter_data) ; $i++) { 
//             echo "<div class='text'>";

//         print($twitter_data[$i]->text);

//         echo "</div>";

//         echo "<div class='date'>";
//         $timeOfDay=$twitter_data[$i]->created_at;
//         // echo "Fulldate: ".$timeOfDay;
//         $time =substr($timeOfDay, 11, -11);  // returns "abcde"
//         echo $time;
//         echo '</div>';


// }

    print_r($twitter_data);
?>