<?php
$projects = array (
    array("Backyard - Humboldt Native Garden in Arcata", array("images/past-proj/01proj-backyard01.jpg", "images/past-proj/01proj-backyard02.jpg"))
    array("Deck Refinishing in Trinidad", array("images/past-proj/02proj-deck-refinish01.jpg", "images/past-proj/02proj-deck-refinish02.jpg"))

    )
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