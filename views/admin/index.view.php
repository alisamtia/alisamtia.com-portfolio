<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard — Submissions</title>
    <link rel="stylesheet" href="/build/style.css">
</head>
<body class="bg-white text-gray-900 font-paragraph">

<section class="min-h-screen px-4 py-12 sm:px-8 md:px-16 lg:px-24">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-10">
        <h1 class="text-xl sm:text-2xl font-heading font-bold tracking-wider">📬 Welcome Alisamtia</h1>
        <div>
            <form class="text-red-400 hover:underline text-xs" action="/logout" method="POST">
                <?php csrf(); ?>
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>

    <?php if (empty($submissions)) : ?>
        <p class="text-center text-gray-500">No messages yet.</p>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 divide-y divide-gray-100 shadow-sm text-sm">
                <thead class="bg-gray-50 font-heading text-gray-600">
                <tr>
                    <th class="px-4 py-2 text-left">#</th>
                    <th class="px-4 py-2 text-left">Name</th>
                    <th class="px-4 py-2 text-left hidden md:block">Email</th>
                    <th class="px-4 py-2 text-left">Submitted At</th>
                    <th class="px-4 py-2 text-left"></th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                <?php rsort($submissions);
                foreach ($submissions as $i => $submission): ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2"><?= $i + 1 ?></td>
                        <td class="px-4 py-2 font-medium"><a class="text-blue-600 hover:underline" href="/admin/submission?id=<?= $submission['id'] ?>"><?= htmlspecialchars($submission['name']) ?></a></td>
                        <td class="px-4 py-2 hidden md:block"><?= htmlspecialchars($submission['email']) ?></td>
                        <td class="px-4 py-2 text-gray-500"><?= str_to_time($submission['created_at']) ?></td>
                        <td class="px-4 py-2">
                            <form method="POST" action="/admin" class="inline">
                                <input type="hidden" name="id" value="<?= $submission['id'] ?>" />
                                <input type="hidden" name="__request_method" value="DELETE" />
                                <?php csrf(); ?>
                                <button type="submit" class="text-red-600 hover:underline text-xs">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</section>


</body>
</html>
