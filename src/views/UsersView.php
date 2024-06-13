<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <link rel="stylesheet" href="src/app.css">
</head>
<body>
    <div class="page-content">
        <h1>Users</h1>
        <p><a href="/php-mvc-app/index">Back to index</a></p>
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
    </div>
</body>
</html>