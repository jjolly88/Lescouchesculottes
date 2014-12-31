<?php if(is_user_logged_in()){ 

echo "Bravo";
}else{
    ?>
<div id="formulaire" style="width:160px;text-align:center;">
<form name="loginform" id="loginform" action="<?php bloginfo( 'url' ); ?>/wp-login.php" method="post">
    <p>
        <label for="user_login">Identifiant<br>
        <input type="text" name="log" id="user_login" class="input" value="" size="15" tabindex="10"></label>
    </p>
    <p>
        <label for="user_pass">Mot de passe<br>
        <input type="password" name="pwd" id="user_pass" class="input" value="" size="15" tabindex="20"></label>
    </p>
    <p class="forgetmenot">
        <label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90"> Se souvenir de moi</label>
    </p>
    <p class="submit">
        <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Se connecter" tabindex="100">
        <input type="hidden" name="redirect_to" value="<?php the_permalink(); ?>">
        <input type="hidden" name="testcookie" value="1">
    </p>
</form>
</div>
<?php } ?>