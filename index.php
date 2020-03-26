<?php

require 'includes/header.php';

?>

<body>
    <h1>Fence Calculator!!!</h1>
    <form method="post">
        <label for="length"></label>
        <input type="text" name="length">
        <input type="text" name="panels">
        <input type="text" name="posts">
        <button type="submit" name="go">Go</button>
    </form>
    <div class='fence-container'>
        <?php 
            if(isset($_POST['go'])){
                if(empty($_POST['length'] && empty($_POST['panels'] && empty($_POST['posts'])){
                    echo 'If you don't make your mind up you'll get nothing';
                }elseif(only panels){

                }elseif (only posts){

                }elseif (panels and posts){

                } else {
                    $fenceLength = (int) $_POST['length'];
                    echo displayFenceMaterials($fenceLength);
                }
            }
        ?>
    </div>
</body>
</html>