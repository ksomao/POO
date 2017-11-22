<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<div id="main">
    <div class="content">
        <div class='table'>
            <table>
                <tr>
                    <th colspan="3">Users</th>
                </tr>
                <tr id="titlesRow">
                    <th>Users</th>
                    <th colspan="2">Actions</th>
                </tr>
                <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td id='usersTd'>{$user['pseudo']}</td>";
                    echo "<td>
                        <div class='actions'>
                            <form action='./adminEdit.php' method='post' >
                                <button onclick='this.form.submit()'>edit</button>
                                <input type='hidden' value='{$user['pseudo']}' name='mail' required>
                                <input type='hidden' value='{$user['id']}' name='id'>
                             </form>
                            <form action='../app/delete.php' method='post'>
                                <button onclick='this.form.submit()'>delete</button>
                                <input type='hidden' value='{$user['id']}' name='id'>
                             </form>    
                        </div>
                    </td>";
                    echo "</tr>";
                }
                ?>
        </div>
    </div>
</body>
</html>