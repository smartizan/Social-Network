<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 05/05/2017
 * Time: 9:45 SA
 */
include("includes/header.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}
?>

<div class="user_details column">
    <a href="profile.php?profile_username=<?php echo $userLoggedIn; ?>"> <img src="<?php echo $user['profile_pic']; ?>">
    </a>

    <div class="user_details_left_right">
        <a href="profile.php?profile_username=<?php echo $userLoggedIn; ?>">
            <?php
            echo $user['first_name'] . " " . $user['last_name'];
            ?>
        </a>
        <br>
        <?php echo "Posts: " . $user['num_posts'] . "<br>";
        echo "Likes: " . $user['num_likes'];

        ?>
    </div>
</div>
<div class="main_column column" id="main_column">

    <div class="posts_area">
        <?php
        $post = new Post($con, $userLoggedIn);
        $post->getSinglePost($id);
        ?>

    </div>

</div>

</div>
