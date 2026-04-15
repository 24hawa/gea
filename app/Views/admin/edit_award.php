<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">
        <div class="flex items-center mb-6">
            <a href="<?= site_url('admin/dashboard') ?>" class="text-gray-400 hover:text-gray-600 mr-4">
                <i class="fas fa-arrow-left text-xl"></i>
            </a>
            <h2 class="text-2xl font-bold text-gray-800">Edit Award Category</h2>
        </div>

        <form action="<?= site_url('admin/awards/update/'.$award['id']) ?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field() ?>
            
            <div class="mb-6">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Award Category Name</label>
                <input type="text" name="a_name" value="<?= $award['a_name'] ?>" 
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border p-3" required>
            </div>

            <div class="mb-8">
                <label class="block text-sm font-semibold text-gray-700 mb-2">Current Template</label>
                <div class="flex items-center p-3 bg-gray-50 rounded-lg border border-dashed border-gray-300 mb-3">
                    <i class="fas fa-file-word text-blue-600 mr-3 text-lg"></i>
                    <span class="text-sm text-gray-600"><?= $award['template'] ?: 'No template uploaded' ?></span>
                </div>
                
                <label class="block text-sm font-semibold text-gray-700 mb-2">Upload New Template (Replaces current)</label>
                <input type="file" name="template" accept=".doc,.docx" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
            </div>

            <div class="flex justify-end space-x-4">
                <a href="<?= site_url('admin/dashboard') ?>" class="px-6 py-2 rounded-lg text-gray-600 hover:bg-gray-100 transition">Cancel</a>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg font-bold hover:bg-blue-700 transition shadow-md">
                    Update Award
                </button>
            </div>
        </form>
    </div>
</body>
</html>