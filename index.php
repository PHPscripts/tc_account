<?php
require_once("config.php");
require_once("Registration.php");
$messages = Array();
$showForm = true;
if(!empty($_POST["submit"]))
{
    $reg = new SOAPRegistration();
    $messages = $reg -> getMessages();
    $showForm = $reg -> showForm();
}
$messagesDisplay = '';
foreach($messages as $msg)
{
    $messagesDisplay .= '<div class="errors">'.$msg.'</div>';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
        <link rel="stylesheet" type="text/css" href="site.css" />
        <meta name="description" content="<?php echo META_DESCRIPTION; ?>" />
        <meta name="keywords" content="<?php echo META_KEYWORDS; ?>" />
        <meta name="robots" content="<?php echo META_ROBOTS; ?>" />
        <title><?php echo SITE_TITLE; ?></title>
    </head>
    <body>
        <table class="reg">
            <tr>
                <td>
                    <img src="img/logo.png" alt="<?php echo SITE_TITLE; ?>" /></a>
                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo $messagesDisplay;
                    
                    if ($showForm)
                    { ?>
                    <form action="" method="post" name="reg">
                        <table class="form">
                            <tr>
                                <td align="right">
                                    Account name:
                                </td>
                                <td align="left">
                                    <input name="accountname" type="text" maxlength="32" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Password:
                                </td>
                                <td align="left">
                                    <input name="password" type="password" maxlength="16" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Confirm password:
                                </td>
                                <td align="left">
                                    <input name="password2" type="password" maxlength="16" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    E-mail address:
                                </td>
                                <td align="left">
                                    <input name="email" type="text" maxlength="254" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Expansion:
                                </td>
                                <td align="left">
                                    <select name="expansion">
									    <option value="0">Vanilla</option>
                                        <option value="1">The Burning Crusade</option>
										<option value="2">Wrath Of The Lich King</option>
										<option value="3">Cataclysm</option>
									    <option value="4">Mists of Panderia</option>
										<option selected value="5">Warlords of Draenor
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" class="sbm" value="Register" name='submit' />
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php
                    }
                    ?>
					<br />
                    <div class="copy">
					    For Trinity 6.x.x Add this line to your config.wtf file located in the WTF folder. <br /><br />
                        SET portal "<?php echo PORTAL; ?>"<br />
						<br>
						For Trinity 3.3.5a Add this line to your realmlist.wtf file located in Data/enUS or your locales<br /><br />
                        set realmlist "<?php echo PORTAL; ?>"<br />
						<br>
						For Trinity 4.3.4 Add this line to your realmlist.wtf file located in Data/enUS or your locales<br /><br />
                        set realmlist "<?php echo PORTAL; ?>"<br />
						set patchlist "<?php echo PORTAL; ?>"<br />
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>