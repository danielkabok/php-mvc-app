<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Advertisements</title>
</head>
<body>
    <div>
        <h1>Advertisements</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Title</th>
            </tr>
            <?php foreach ($advertisements as $advertisement): ?>
            <tr>
                <td><?php echo htmlspecialchars($advertisement->id); ?></td>
                <td><?php echo htmlspecialchars($advertisement->userid); ?></td>
                <td><?php echo htmlspecialchars($advertisement->title); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="/php-mvc-app/index">Back to index</a></p>
    </div>
</body>
</html>