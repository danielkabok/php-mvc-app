<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>
    <div>
        <h1>Users</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user->id); ?></td>
                <td><?php echo htmlspecialchars($user->name); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="/php-mvc-app/index">Back to index</a></p>
    </div>
</body>
</html>