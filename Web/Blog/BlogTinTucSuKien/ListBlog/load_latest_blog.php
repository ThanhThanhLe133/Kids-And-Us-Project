<?php

include "../../conn.php";
$sql = "SELECT * FROM blogs where category_id=2 ORDER BY created_at DESC LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $html = "";
    while ($row = $result->fetch_assoc()) {
        $blog_id = $row['blog_id'];
        $html .= "
           <li class='mb-2'>
                <a class='hover:underline' href='../blogdetail/index.html?blog_id={$row['blog_id']}'>{$row['title']}</a>
            </li>";
    }
    echo $html;
}
$conn->close();
?>
