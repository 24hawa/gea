<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEA Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">

<div class="flex h-screen overflow-hidden">
    <aside class="w-64 bg-slate-900 text-white flex-shrink-0">
        <div class="p-6">
            <h1 class="text-xl font-bold tracking-widest text-yellow-400">GEA ADMIN</h1>
            <p class="text-xs text-gray-400 uppercase mt-1">Global Educator Awards</p>
        </div>
        <nav class="mt-6">
            <a href="javascript:void(0)" onclick="showTab('nominees')" class="flex items-center px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-white transition">
                <i class="fas fa-user-graduate mr-3"></i> Nominee List
            </a>
            <a href="javascript:void(0)" onclick="showTab('pending')" class="flex items-center px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-white transition">
                <i class="fas fa-hourglass-half mr-3"></i> Pending Invitations
            </a>
            <a href="javascript:void(0)" onclick="showTab('awards')" class="flex items-center px-6 py-3 text-gray-300 hover:bg-slate-800 hover:text-white transition">
                <i class="fas fa-trophy mr-3"></i> Manage Awards
            </a>
            <div class="border-t border-slate-800 mt-4 pt-4">
                <a href="<?= site_url('logout') ?>" class="flex items-center px-6 py-3 text-red-400 hover:bg-red-900/20 transition">
                    <i class="fas fa-sign-out-alt mr-3"></i> Logout
                </a>
            </div>
        </nav>
    </aside>

    <main class="flex-1 overflow-y-auto bg-gray-100 p-8">
        
        <header class="flex justify-between items-center mb-8">
            <h2 id="current-tab-title" class="text-2xl font-bold text-gray-800">Nominee List</h2>
            <div class="flex items-center space-x-4">
                <span class="text-sm text-gray-500">Welcome, Administrator</span>
                <div class="h-10 w-10 rounded-full bg-blue-600 flex items-center justify-center text-white">
                    <i class="fas fa-user-shield"></i>
                </div>
            </div>
        </header>

        <section id="tab-nominees" class="tab-content">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Participant</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Affiliation</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Award Category</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 uppercase">Date Joined</th>
                            <th class="px-6 py-3 text-right text-xs font-semibold text-gray-500 uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        <?php foreach($nominees as $n): ?>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                <div class="font-medium text-gray-900"><?= $n['f_name'] ?> <?= $n['l_name'] ?></div>
                                <div class="text-xs text-gray-500"><?= $n['n_email'] ?></div>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600"><?= $n['affiliation'] ?></td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-700 rounded-full"><?= $n['award'] ?></span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500"><?= date('M d, Y', strtotime($n['created_at'])) ?></td>
                            <td class="px-6 py-4 text-right">
    <a href="<?= site_url('admin/nominee/view/'.$n['id']) ?>" 
       class="bg-blue-50 text-blue-600 px-3 py-1.5 rounded-lg text-xs font-bold hover:bg-blue-600 hover:text-white transition">
        View Profile
    </a>
</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="tab-pending" class="tab-content hidden">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50 text-xs font-semibold text-gray-500 uppercase">
                        <tr>
                            <th class="px-6 py-3 text-left">Nominator</th>
                            <th class="px-6 py-3 text-left">Nominee</th>
                            <th class="px-6 py-3 text-left">Status</th>
                            <th class="px-6 py-3 text-left">Date Sent</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-sm">
                        <?php foreach($pending as $p): ?>
                        <tr>
                            <td class="px-6 py-4"><?= $p['f_name2'] ?> (<?= $p['n_email'] ?>)</td>
                            <td class="px-6 py-4 font-semibold text-blue-600"><?= $p['n_fname'] ?> <?= $p['n_lname'] ?></td>
                            <td class="px-6 py-4 italic text-gray-400"><?= $p['status'] ?></td>
                            <td class="px-6 py-4"><?= date('M d, Y', strtotime($p['created_at'])) ?>
                       <td class="px-6 py-4 text-right">
            <a href="<?= site_url('admin/pending/view/'.$p['id']) ?>" class="text-blue-600 font-bold hover:underline">
                Details
            </a>
        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section id="tab-awards" class="tab-content hidden">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 h-fit">
                    <h3 class="text-lg font-bold mb-4">Add Category</h3>
                    <form action="<?= site_url('admin/awards/save') ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Award Name</label>
                            <input type="text" name="a_name" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border p-2">
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-1">Template Word</label>
                            <input type="file" name="template" class="text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">Save Category</button>
                    </form>
                </div>

                <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-200">
                    <ul class="divide-y divide-gray-200">
                        <?php foreach($awards as $a): ?>
                        <li class="p-4 flex justify-between items-center hover:bg-gray-50">
                            <div>
                                <span class="font-bold text-gray-800"><?= $a['a_name'] ?></span>
                                <?php if($a['template']): ?>
    <span class="ml-3 text-xs text-blue-600 font-medium italic">
        <i class="fas fa-file-word"></i> Word Template Ready
    </span>
<?php endif; ?>
                            <div class="flex space-x-2">
                <a href="<?= site_url('admin/awards/edit/'.$a['id']) ?>" 
                   class="text-amber-500 hover:text-amber-700 p-2 transition">
                    <i class="fas fa-edit"></i>
                </a>
                            <a href="<?= site_url('admin/awards/delete/'.$a['id']) ?>" class="text-red-500 hover:text-red-700 p-2" onclick="return confirm('Delete this category?')">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
    </main>
</div>

<script>
function showTab(tabName) {
    // Hide all
    document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
    // Show selected
    document.getElementById('tab-' + tabName).classList.remove('hidden');
    
    // Update Title
    const titles = {
        'nominees': 'Nominee List',
        'pending': 'Pending Invitations',
        'awards': 'Award Category Management'
    };
    document.getElementById('current-tab-title').innerText = titles[tabName];
}
</script>

</body>
</html>