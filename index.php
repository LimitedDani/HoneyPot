<?php
header("Access-Control-Allow-Origin: *");
require_once('login.php');
?>
<!DOCTYPE html>
<!--[if IE 8]>
                <html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="fr-FR">
        <![endif]-->
<!--[if !(IE 8) ]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-FR">
<!--<![endif]-->

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>YOURWORDPRESSSITE &rsaquo; Se connecter</title>
        <link rel='stylesheet' id='style-css' href='css/style.min.css' type='text/css'
                media='all' />
        <link rel='stylesheet' id='open-sans-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.1.1'
                type='text/css' media='all' />
        <meta name='robots' content='noindex,follow' />
</head>

<body class="login login-action-login wp-core-ui  locale-fr-fr" id="body">
        <div id="login">
                <h1>
                        <a href="http://www.wordpress-nl.net/" title="" tabindex="-1">Daníque de Jong</a>
                </h1>


                <form name="loginform" id="loginform" method="post">
                        <p>
                                <label for="user_login"> Gebruikersnaam of e-mailadres
                                        <br />
                                        <input type="text" name="log" id="user_login" class="input" value="" size="20" />
                                </label>
                        </p>
                        <p>
                                <label for="user_pass">Wachtwoord
                                        <br />
                                        <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
                                </label>
                        </p>
                        <p class="forgetmenot">
                                <label for="rememberme">
                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Onthoud mij</label>
                        </p>
                        <p class="submit">
                                <input type="submit" name="submit" id="submit" class="button button-primary button-large" value="Inloggen" />
                                <input type="hidden" name="redirect_to" value="https://daniquedejong.nl/admin/wp-admin/" />
                                <input type="hidden" name="_token" value="<?php echo $_SESSION['_token']; ?>">
                        </p>
                </form>
                <div>
                        <p>
                                <label for="user_pass">Zoeken
                                        <br />
                                        <input type="text" name="search" id="search">
                                </label>
                        </p>
                        <p>
                                <p class="submit">
                                        <input type="submit" name="submit" id="submit_search" class="button button-primary button-large" value="Zoeken" />
                                        <?php if(isset($_GET['search'])) {
                                                ?>
                                                <h4>Searched for <?php echo htmlspecialchars($_GET['search']);?></h4>
                                        <?php } ?>
                                </p>
                        </p>
                </div>
                <p id="nav">
                        <a href="" title="Récupération de mot de passe">Wachtwoord vergeten?</a>
                </p>


                <p id="backtoblog">
                        <a href="https://daniquedejong.nl" title="Êtes-vous perdu(e)&nbsp;?">&larr; Terug naar Daníque de Jong</a>
                </p>

        </div>


        <div class="clear"></div>
        <script src="https://raw.github.com/leizongmin/js-xss/master/dist/xss.js"></script>
        <script src="js/search.js"></script>
</body>

</html>
