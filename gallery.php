<?php 
include "templates/header.php";
include "templates/navigation.php"; 

$items = array (
    array("Black Jacket", "$40", "img(assets/images/jacket.jpg)")
    array("Black Pants", "$30", "img(asssets/images/pants.jpg)")
    array("Black Shirt", "$50", "img(assets/images/shirt.jpg)")
    array("Power Ring", "$8000")
);
?>

<h1>Gallery</h1>

<h2>Some helpful products:</h2>

<?php
for each($items as $item) {
?>
    <div class="productSingle">
        <h3>
            <?php echo $item[0]; ?>
        </h3>
        <h4>
            <?php echo $item{1}</h4>
    <img width="260" height="480" src="assets/images/ <?php echo $item [2]; ?>" </img>
    </div>
    ?> }

    <?php include "templates/footer.php"; ?>