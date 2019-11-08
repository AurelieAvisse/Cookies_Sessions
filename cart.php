<?php require 'inc/head.php';

switch ($_GET["id"]) {
    case 32:
        if (!isset($_COOKIE["name_1"]) && !isset($_COOKIE["description_1"]) && !isset($_COOKIE["count_1"])) {
            setcookie('name_1', 'M&M\'s&copy; cookies', time() + 365 * 24 * 3000, null, null, false, true); // On écrit un cookie qui sera supprimé dans 1 an
            setcookie('description_1', 'Cooked by Penny !', time() + 365 * 24 * 3000, null, null, false, true); // On écrit un cookie qui sera supprimé dans 1 an
            setcookie('count_1', 1, time() + 365 * 24 * 3000, null, null, false, true); // On écrit un cookie qui sera supprimé dans 1 an
            header('Location: cart.php?id');
        } else {
            setcookie('count_1', ($_COOKIE['count_1'] + 1), time() + 365 * 24 * 3000, null, null, false, true);
            header('Location: cart.php?id');
        }
        break;

    case 36:
        if (!isset($_COOKIE["name_2"]) && !isset($_COOKIE["description_2"]) && !isset($_COOKIE["count_2"])) {
            setcookie('name_2', 'Chocolate chips', time() + 365 * 24 * 3000, null, null, false, true);
            setcookie('description_2', 'Cooked by Bernadette !', time() + 365 * 24 * 3000, null, null, false, true);
            setcookie('count_2', 1, time() + 365 * 24 * 3000, null, null, false, true);
            header('Location: cart.php?id');
        } else {
            setcookie('count_2', ($_COOKIE['count_2'] + 1), time() + 365 * 24 * 3000, null, null, false, true);
            header('Location: cart.php?id');
        }
        break;

    case 46:
        if (!isset($_COOKIE["name_3"]) && !isset($_COOKIE["description_3"]) && !isset($_COOKIE["count_3"])) {
            setcookie('name_3', 'Pecan nuts', time() + 365 * 24 * 3000, null, null, false, true);
            setcookie('description_3', 'Cooked by Penny !', time() + 365 * 24 * 3000, null, null, false, true);
            setcookie('count_3', 1, time() + 365 * 24 * 3000, null, null, false, true);
            header('Location: cart.php?id');
        } else {
            setcookie('count_3', ($_COOKIE['count_3'] + 1), time() + 365 * 24 * 3000, null, null, false, true);
            header('Location: cart.php?id');
        }
        break;

    case 58:
        if (!isset($_COOKIE["name_4"]) && !isset($_COOKIE["description_4"]) && !isset($_COOKIE["count_4"])) {
            setcookie('name_4', 'Full chocolate cookie', time() + 365 * 24 * 3000, null, null, false, true);
            setcookie('description_4', 'Cooked by Bernadette !', time() + 365 * 24 * 3000, null, null, false, true);
            setcookie('count_4', 1, time() + 365 * 24 * 3000, null, null, false, true);
            header('Location: cart.php?id');
        } else {
            setcookie('count_4', ($_COOKIE['count_4'] + 1), time() + 365 * 24 * 3000, null, null, false, true);
            header('Location: cart.php?id');
        }
        break;
}

?>

<section class="cookies container-fluid" xmlns="http://www.w3.org/1999/html">

    <h3>Mon panier</h3>

    <?php
    if (!isset($_COOKIE["name_1"]) && !isset($_COOKIE["name_2"]) && !isset($_COOKIE["name_3"]) && !isset($_COOKIE["name_4"])) {
        ?>
        <div class="cart">Votre panier est vide</div>
        <?php
    } else {
        ?>
        <div class="card">

            <?php
            if (!empty($_COOKIE["name_1"])) {
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="card-text"><?php echo $_COOKIE["name_1"]; ?></p>
                            <p class="card-text"><?php echo $_COOKIE["description_1"]; ?></p>
                        </div>
                        <div class="col-md-5">
                            <p class="card-text">Quantity: <?php echo $_COOKIE["count_1"]; ?></p>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
            }

            if (isset($_COOKIE["name_2"])) {
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="card-text"><?php echo $_COOKIE["name_2"]; ?></p>
                            <p class="card-text"><?php echo $_COOKIE["description_2"]; ?></p>
                        </div>
                        <div class="col-md-5">
                            <p class="card-text">Quantity: <?php echo $_COOKIE["count_2"]; ?></p>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
            }

            if (isset($_COOKIE["name_3"])) {
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="card-text"><?php echo $_COOKIE["name_3"]; ?></p>
                            <p class="card-text"><?php echo $_COOKIE["description_3"]; ?></p>
                        </div>
                        <div class="col-md-5">
                            <p class="card-text">Quantity: <?php echo $_COOKIE["count_3"]; ?></p>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
            }

            if (isset($_COOKIE["name_4"])) {
                ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <p class="card-text"><?php echo $_COOKIE["name_4"]; ?></p>
                            <p class="card-text"><?php echo $_COOKIE["description_4"]; ?></p>
                        </div>
                        <div class="col-md-5">
                            <p class="card-text">Quantity: <?php echo $_COOKIE["count_4"]; ?></p>
                        </div>
                    </div>
                </div>
                <hr>
                <?php
            }
            ?>

        </div>
        <?php
    }
    ?>

</section>
<?php require 'inc/foot.php'; ?>
