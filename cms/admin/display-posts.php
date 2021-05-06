<?php
    //Find all posts query
    $query = "SELECT * FROM posts";
    $select_posts = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_assoc($select_posts))
    {
        $post_id = $row['post_id'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_image = $row['post_image'];
        $post_content = $row['post_content'];
        $post_tags = $row['post_tags'];
        /*$post_comment = $row['post_comment_count'];*/
        $post_date = $row['post_date'];
        echo "<tr>";
        echo "<td>{$post_id}</td>";
        echo "<td>{$post_author}</td>";
        echo "<td>{$post_title}</td>";
        
        /*$query2 = "SELECT * FROM categories WHERE cat_id = {$post_category_id}";
        $select_category_id = mysqli_query($connection, $query2);
        $cat_title = "";
        while($row = mysqli_fetch_assoc($select_category_id)) //loop is not executing
        {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];  
            echo "<td>{$cat_title}</td>";
        }*/
        echo "<td><img class = 'img-responsive' src = 'images/{$post_image}'></td>";
        echo "<td>{$post_content}</td>";
        echo "<td>{$post_tags}</td>";
        /*echo "<td>{$post_comment}</td>";*/
        echo "<td>{$post_date}</td>";
        echo "<td><a href = 'posts.php?delete={$post_id}'>Delete</a></td>";
        echo "<td><a href = 'edit-posts.php?edit-post={$post_id}'>Edit</a></td>";
        echo "</tr>";
    }
?>