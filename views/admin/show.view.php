<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Submission Details — Admin Dashboard</title>
    <link rel="stylesheet" href="/build/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-white text-gray-900 font-paragraph">

<section class="min-h-screen px-4 py-12 sm:px-8 md:px-16 lg:px-24">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-10">
        <h1 class="text-xl sm:text-2xl font-heading font-bold tracking-wider">👤 Submission Details</h1>
        <a href="/admin" class="text-blue-600 text-sm hover:underline">← Back to Dashboard</a>
    </div>

    <?php if (!$submission) : ?>
        <p class="text-center text-gray-500">Submission not found.</p>
    <?php else: ?>
        <div class="bg-white shadow-sm border border-gray-200 rounded-lg p-6 space-y-6">
            <div>
                <h2 class="text-lg font-heading font-semibold text-gray-800 mb-2">Name</h2>
                <p class="text-gray-700">
                    <?= htmlspecialchars($submission['name']) ?>
                    <br/>
                    <strong>IP Address: </strong><?= $submission['ip'] ?>
                </p>
            </div>

            <div>
                <h2 class="text-lg font-heading font-semibold text-gray-800 mb-2">Email</h2>
                <p class="text-gray-700"><?= htmlspecialchars($submission['email']) ?></p>
            </div>

            <div>
                <h2 class="text-lg font-heading font-semibold text-gray-800 mb-2">Submitted At</h2>
                <p class="text-gray-700"><?= date('F j, Y, g:i a', strtotime($submission['created_at'])) ?></p>
            </div>

            <div>
                <h2 class="text-lg font-heading font-semibold text-gray-800 mb-2">Message</h2>
                <p class="text-gray-700 whitespace-pre-line"><?= nl2br(htmlspecialchars($submission['message'] ?? 'No message.')) ?></p>
            </div>

            <div class="pt-4 border-t border-gray-100">
                <form method="POST" action="/admin" class="inline-block">
                    <input type="hidden" name="id" value="<?= $submission['id'] ?>" />
                    <input type="hidden" name="__request_method" value="DELETE" />
                    <?php csrf(); ?>
                    <button type="submit" class="text-red-600 hover:underline text-sm">🗑 Delete Submission</button>
                </form>
            </div>
        </div>
    <?php endif; ?>
</section>

</body>
</html>
