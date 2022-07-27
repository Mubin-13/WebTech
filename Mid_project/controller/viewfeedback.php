<?php 
       
    $post_data = file_get_contents('../controller/reply.json');
    $post_total_data = json_decode($post_data);

    foreach($post_total_data as $data)
    {
        echo "<h2><span class=''>Admin: $data->reply</span> </h2>";
    }
?>