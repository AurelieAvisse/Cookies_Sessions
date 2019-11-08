<?php require 'inc/head.php';

$username = "";
$usernameError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["loginname"])) {
        $usernameError = "Le nom est requis";
    } else {
        $username = test_input($_POST["loginname"]);
    }
}

function test_input($data_form)
{
    $data_form = trim($data_form);
    $data_form = stripslashes($data_form);
    $data_form = htmlspecialchars($data_form);
    return $data_form;
}

?>

<div class="container" style="margin-top:40px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <form role="form" action="checklogin.php" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img"
                                         src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                                         alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                              <i class="glyphicon glyphicon-user"></i>
                                            </span>
                                            <input class="form-control" placeholder="Username" name="loginname"
                                                   type="text" autofocus required>
                                            <span class="error"><?php echo $usernameError; ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Don't have an account ? <a href="#" onClick="">Too bad !</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'inc/foot.php'; ?>
