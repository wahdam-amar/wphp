<?php
require_once 'vendor/autoload.php';

use App\Debug as dd;
use App\Pagination;
use App\Table;

$pagination =  new Pagination('users');
$users = $pagination->get_data();
// $pagination
$pages  = $pagination->get_pagination_number();

$table = new Table();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pagination PDO Class</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <div class="container">
        <ul>
            <?php foreach ($users as $user) : ?>
                <li>
                    <?php echo $user['user_name']; ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <?php for ($i = 1; $i <= $pages; $i++) : ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <?php

        dd::debug($users);

        echo $table->build_table($users);
        ?>
    </div>
</body>

</html>