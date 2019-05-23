<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 13:59:59 GMT -->
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>ViaBahuet | Le réseau social</title>


    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>


		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
		<script type="text/javascript">
		$('#connexion').val('test');
		</script>
	</head>
	<body>

		<!-- Header
    ================================================= -->
    <!--Header End-->

    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
            <div class="reg-form-container">
                <!--Login-->
                <div class="tab-pane active" id="login">
                  <h3 class="text-titre">Se connecter</h3>
                  <p class="text-muted">Connectez vous à votre compte</p>

                  <!--Login Form-->
									<form class="ajax" action="./" method="post">
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="login" class="sr-only">Identifiant</label>
                        <input id="login" class="form-control input-group-lg" type="text" name="login" title="Entrez votre identifiant" placeholder="Votre identifiant" required/>
                      </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="mdp" class="sr-only">Mot de passe</label>
                        <input id="mdp" class="form-control input-group-lg" type="password" name="mdp" title="Entrez votre mot de passe" placeholder="Mot de passe" required/>
                      </div>
                    </div>
										<div class="form-group gender">
											<label class="radio-inline" id="radio">
												<input type="radio" name="radio" value="Elève" required>Elève
											</label>
											<label class="radio-inline" id="radio">
												<input type="radio" name="radio" value="Entreprise" required>Entreprise
											</label>
										</div>
										<input class="btn btn-primary" type="submit" name="connexion" id="connexion" onclick="test()" value="Connectez vous">
                  </form><!--Login Form Ends-->
                  <p><a href="#">Mot de passe oublié ?</a></p>
                </div>
              </div>
            </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>


    <!-- Scripts
    ================================================= -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>

		<script>
			function test(){
				console.log($('#login').val());
				$.ajax({
            url : 'ajax-login.php', // url du fichier de traitement
            type : 'POST', // envoi des données en GET ou POST
            data : {
        'login' : $('#login').val(),
				'mdp' : $('#mdp').val()
            },
			});
		}
		</script>

	</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Nov 2018 13:59:59 GMT -->
</html>
