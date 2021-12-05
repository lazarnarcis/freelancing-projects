<?php
    require "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancing projects</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div>
        <h1>Freelancing Projects which I worked on</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Contributors</th>
                <th>Link</th>
            </tr>
            <?php
                $sql = 'SELECT * FROM `projects`';
                $query = mysqli_query($link, $sql);
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        $name = $row['name'];
                        $description = $row['description'];
                        $contributor = $row['contributor'];
                        $link = $row['link'];
                        $id = $row['id'];
                        $contributorlink = $row['contributor-link'];
                        echo "
                            <tr>
                                <td>$id</td>
                                <td>$name</a></td>
                                <td>$description</td>
                                <td><a href='$contributorlink' target='_blank'>$contributor</a></td>
                                <td><a href='$link' target='_blank'>$link</a></td>
                            </tr>
                        ";
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>