<?php

include "../conn.php";
$sql = "SELECT * FROM blogs";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $html="";
    while ($row = $result->fetch_assoc()) {
        $author_id = $row['author_id'];
        $category_id = $row['category_id'];
        $created_at = date('H:i:s d/m/Y', strtotime($row['created_at']));
        $updated_at = date('H:i:s d/m/Y', strtotime($row['updated_at']));

        $sql_author = "SELECT first_name FROM admin WHERE admin_id = $author_id";
        $result_author = $conn->query($sql_author);
        $author = ($result_author && $result_author->num_rows > 0) ? $result_author->fetch_assoc()['first_name'] : 'Unknown';

        $sql_category = "SELECT category_name FROM categories WHERE category_id = $category_id";
        $result_category = $conn->query($sql_category);
        $category = ($result_category && $result_category->num_rows > 0) ? $result_category->fetch_assoc()['category_name'] : 'Unknown';
        $html .= "
        <tr data-blog_id='{$row['blog_id']}'>
            <td class='py-2 px-4 border-b border-gray-200 title_blog'>{$row['title']}</td>
            <td class='py-2 px-4 border-b border-gray-200 author'>{$author}</td>
            <td class='py-2 px-4 border-b border-gray-200 created_at'>{$created_at}</td>
            <td class='py-2 px-4 border-b border-gray-200 updated_at'>{$updated_at}</td>
            <td class='py-2 px-4 border-b border-gray-200 category'>{$category}</td>
            <td class='py-2 px-4 border-b border-gray-200'>
                <button class='text-blue-500 hover:text-red-700 editBtn'>
                    <i class='fas fa-edit'></i>
                </button>
                <button class='text-red-500 hover:text-red-700 deleteBtn'>
                    <i class='fas fa-trash'></i>
                </button>
            </td>
        </tr>";
    }
    echo $html;
}
$conn->close();
?>