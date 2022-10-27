
<?php
// Facebook API configuration
define('FB_APP_ID', '506233774263866');
define('FB_APP_SECRET', '333c64ce651120e6e7f28bb9d5aae120');
define('FB_REDIRECT_URL', 'http://localhost:8080/Ebook/login.php');

// Start session
if(!session_id()){
    session_start();
}

// Include the autoloader provided in the SDK
require_once('Facebook/autoload.php');

// Include required libraries
// Call Facebook API

$fb = new Facebook(array(
    'app_id' => FB_APP_ID,
    'app_secret' => FB_APP_SECRET,
    'default_graph_version' => 'v2.10',
));

// Get redirect login helper
$helper = $fb->getRedirectLoginHelper();

// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token'])){
        $accessToken = $_SESSION['facebook_access_token'];
    }else{
          $accessToken = $helper->getAccessToken();
    }
} catch(FacebookResponseException $e) {
     echo 'Graph returned an error: ' . $e->getMessage();
      exit;
} catch(FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
}
?>