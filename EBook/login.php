<?php
ob_start();
session_start();
//error_reporting(0);
include ("class/classCNM.php");
$p=new tmdt();

if (isset($_SESSION['Email'])){

  $Email=$_SESSION['Email'];
}

?>

<?php 
/*
// Include configuration file
require_once 'config_fb.php';
  $permissions =('email'); // Optional permissions
if(isset($accessToken))
{
    if(isset($_SESSION['facebook_access_token'])){
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }else{
        // Put short-lived access token in session
        $_SESSION['facebook_access_token'] = (string) $accessToken;
        
          // OAuth 2.0 client handler helps to manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();
        
        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
        
        // Set default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }
    
    // Redirect the user back to the same page if url has "code" parameter in query string
    if(isset($_GET['code']))
    {
        header('http://localhost:8080/Ebook/login.php');
    }
    
    // Getting user's profile info from Facebook
    try 
    {
        $graphResponse = $fb->get('/me?fields=name,first_name,last_name,email');
        $fbUser = $graphResponse->getGraphUser();

        $_SESSION['fb_user_id'] = $fbUser->getProperty('id');
		$_SESSION['fb_user_name'] = $fbUser->getProperty('name');
		$_SESSION['fb_user_email'] = $fbUser->getProperty('email');
    } catch(FacebookResponseException $e) 
    {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();
        // Redirect user back to app login page
        header("Location: ./");
        exit;
    } catch(FacebookSDKException $e) 
    {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
    $logoutURL = $helper->getLogoutUrl($accessToken, FB_REDIRECT_URL.'logout.php');
}
else
{
    // Get login url
    $loginURL = $helper->getLoginUrl(FB_REDIRECT_URL, $permissions);
    $output = '<a href="'.htmlspecialchars($loginURL).'"> <input type="button" value="Login with Facebook" class="btn btn-primary"></a>';
    
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ebook | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.html" class="h1"><b>E</b>BOOK</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="Email" id="Email" class="form-control" placeholder="Nhập Email....">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="Password" id="Password" class="form-control" placeholder="Nhập Password...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php
  switch ($_POST['nut'])
  {
	 case 'Đăng nhập':
	 {

		 $Email = $_REQUEST['Email'];
		 $Password = $_REQUEST['Password'];
		 if($Email!='' && $Password!='')
		 {
			 
            if($p->mylogin($Email,$Password)==1)
			 {
				 $_SESSION['Email'] = $Email;
			    header("Location: index.php");
				echo 'Đăng nhập thành công';
			   
			 }
			 else
			 {
				 echo 'Đăng nhập không thành công';
			 }
		 }
		 else
		 {
			echo 'Vui lòng nhập đầy đủ thông tin...'; 
		 }
		 break;
	 } 
  }

  ?>
        <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" name="nut" id="nut" class="btn btn-primary btn-block" value="Đăng nhập">Đăng nhập</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">

      <div style="padding-left:40px;" class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>

<div id="status">
</div>

        <?php
        echo $output;
        ?>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<script>

  function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      testAPI();  
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this webpage.';
    }
  }

  FB.login(function(response) {
  // handle the response
}, {scope: 'public_profile,email'});

  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '506233774263866',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v15.0'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };
 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }

</script>
<script>

  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v15.0'
    });
  };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

</body>
</html>
