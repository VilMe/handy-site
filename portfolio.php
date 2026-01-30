<?php
$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "d04y4JWf3PWwhxVy";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {

    echo "failed to connect";
    exit;
}

$sql = "SELECT * 
        FROM `past work`
        ORDER BY title;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $pastworks = mysqli_fetch_all($results, MYSQLI_ASSOC);

};
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            GO Handy Services - Portfolio 
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
        <h1>Portfolio - GO Handy Services</h1>
            <img src="images/go-handy-no-bckgrnd.png" alt="GO Handy Services logo"/>
        </header>
        <nav>

        </nav>
        <main>
            <ul>
                <?php foreach ($pastworks as $pastwork): ?>
                    <li>
                        <div>
                            <h3><?= $pastwork['title']; ?></h3>
                            <p><?= $pastwork['content']; ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </main>
    </body>
</html>