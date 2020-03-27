<?php
    require 'includes/header.php';
?>

<body>
    <h1>Fence Calculator!!!</h1>
    <form method="post">
        <label for="length">Length:</label>
        <input type="text" name="length">
        <label for="panels">Panels:</label>
        <input type="text" name="panels">
        <label for="posts">Posts:</label>
        <input type="text" name="posts">
        <button type="submit" name="go">Go</button>
    </form>
    <h2>Your Fence:</h2>
    <div class='fence-container'>
        <?php 
            if(isset($_POST['go'])){
                if(empty($_POST['length']) && empty($_POST['panels']) && empty($_POST['posts'])){
                    echo "If you don't make your mind up you'll get nothing";
                } elseif (!empty($_POST['panels']) && !empty($_POST['posts'])){ 
                    $panels = (float) $_POST['panels'];
                    $posts = (float) $_POST['posts'];
                    $fenceLength = howLong($panels);
                    $extraPosts = extraPosts($panels, $posts);
                    echo displayFenceMaterials($fenceLength, $extraPosts);
                } elseif (!empty($_POST['panels'])){
                    $panels = (int) $_POST['panels'];
                    $fenceLength = howLong($panels);
                    echo displayFenceMaterials($fenceLength);
                } elseif (!empty($_POST['posts'])){
                    $posts = (int) $_POST['posts'];
                    $panels = $posts - 1;
                    $fenceLength = howLong($panels);
                    echo displayFenceMaterials($fenceLength);
                } else {
                    $fenceLength = (int) $_POST['length'];
                    echo displayFenceMaterials($fenceLength);
                }
            }
        ?>
    </div>
</body>
</html>