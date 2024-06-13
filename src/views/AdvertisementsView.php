<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Advertisements</title>
    <link rel="stylesheet" href="src/app.css">
</head>
<body>
    <div class="page-content">
        <h1>Advertisements</h1>
        <p><a href="/php-mvc-app/index">Back to index</a></p>
        <table>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Title</th>
            </tr>
            <?php foreach ($advertisements as $advertisement): ?>
            <tr>
                <td><?php echo htmlspecialchars($advertisement->id); ?></td>
                <?php
                    $user = $userService->getUserById($advertisement->userid);
                    $userName = $user->name;
                ?>
                <td><?php echo htmlspecialchars($userName); ?></td>
                <td><?php echo htmlspecialchars($advertisement->title); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>