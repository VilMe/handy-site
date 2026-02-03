<?php

?>
<?php require "includes/header.php" ?>
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
<?php require "includes/footer.php" ?>