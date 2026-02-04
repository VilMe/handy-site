<?php
$projects = array (
    array("Backyard - Humboldt Native Garden in Arcata", 
        array("images/past-proj/01proj-backyard01.jpg", 
            "images/past-proj/01proj-backyard02.jpg")),
    array("Deck Refinishing in Trinidad", 
        array("images/past-proj/02proj-deck-refinish01.jpg", 
            "images/past-proj/02proj-deck-refinish02.jpg", 
            "images/past-proj/02proj-deck-refinish03.jpg", 
            "images/past-proj/02proj-deck-refinish04.jpg")),
    array("Entryway Cover in McKinleyville", 
        array("images/past-proj/03proj-entryway-cover01.jpg", 
        "images/past-proj/03proj-entryway-cover02.jpg")),
    array("Fence Replacement of 10 foot section", 
        array("images/past-proj/04proj-fence01.jpg", 
        "images/past-proj/04proj-fence02.jpg")),
    array("Deck Restain in Arcata", 
        array("images/past-proj/05proj-restain-deck01.jpg", 
        "images/past-proj/05proj-restain-deck02.jpg", 
        "images/past-proj/05proj-restain-deck03.jpg")),
    array("Retail Showroom in Trinidad", 
        array("images/past-proj/06proj-retail-showroom01.jpg", 
        "images/past-proj/06proj-retail-showroom02.jpg", 
        "images/past-proj/06proj-retail-showroom03.jpg", 
        "images/past-proj/06proj-retail-showroom04.jpg", 
        "images/past-proj/06proj-retail-showroom05.jpg", 
        "images/past-proj/06proj-retail-showroom06.jpg",  
        "images/past-proj/06proj-retail-showroom07.jpg", 
        "images/past-proj/06proj-retail-showroom08.jpg", 
        "images/past-proj/06proj-retail-showroom09.jpg"))
    )
?>
<?php require "includes/header.php" ?>
        <main>
            <ul>
                <?php foreach ( $projects as $project ): ?> 
                    <li>
                        <div>
                            <h3><?= $project[0] ?></h3>
                            <?php foreach ( $project[1] as $image ): ?>
                            <img src="<?= $image ?>">
                            <?php endforeach; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </main>
<?php require "includes/footer.php" ?>