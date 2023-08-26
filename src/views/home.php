<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Tabela de Funcionários</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <table class="min-w-full divide-y divide-gray-200 mt-4 bg-white rounded-lg shadow-md">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $row["name"] ?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?= $row["Email"] ?></td>
                        <td class="px-6 py-4"><?= $row["Address"] ?></td>
                        <td class="px-6 py-4"><?= $row["Phone"] ?></td>
                        <td class="px-6 py-4">
                            <a href="index.php?action=delete&id=<?= $row["id"] ?>" class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash-alt"></i>
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>