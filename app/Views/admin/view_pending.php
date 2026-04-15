<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 p-6">
    <div class="max-w-4xl mx-auto">
        
        <div class="flex items-center mb-8">
            <a href="<?= site_url('admin/dashboard') ?>" class="bg-white p-2 rounded-lg shadow-sm hover:bg-gray-100 mr-4 transition">
                <i class="fas fa-arrow-left text-gray-500"></i>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Invitation Details</h1>
                <p class="text-sm text-gray-500">Status: <span class="capitalize font-semibold text-amber-600"><?= $p['status'] ?></span></p>
            </div>
        </div>

        <div class="relative">
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-0.5 bg-dashed bg-gray-300 -translate-x-1/2"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 relative">
                
                <div class="bg-white p-6 rounded-2xl shadow-sm border-t-4 border-blue-500">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                        <h3 class="font-bold text-lg text-gray-700">The Nominator</h3>
                    </div>
                    
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs uppercase text-gray-400 font-bold">Full Name</p>
                            <p class="text-gray-800"><?= $p['salutation2'] ?> <?= $p['f_name2'] ?> <?= $p['l_name2'] ?></p>
                        </div>
                        <div>
                            <p class="text-xs uppercase text-gray-400 font-bold">Institution / Affiliation</p>
                            <p class="text-gray-800"><?= $p['affiliation2'] ?></p>
                        </div>
                        <div>
                            <p class="text-xs uppercase text-gray-400 font-bold">Contact Information</p>
                            <p class="text-gray-800 text-sm italic"><?= $p['n_email'] ?></p>
                            <p class="text-gray-800 text-sm"><?= $p['c_code2'] ?> <?= $p['contact2'] ?></p>
                        </div>
                        <div>
                            <p class="text-xs uppercase text-gray-400 font-bold">Nationality</p>
                            <p class="text-gray-800 text-sm"><?= $p['nationality2'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border-t-4 border-emerald-500">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-emerald-100 text-emerald-600 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3 class="font-bold text-lg text-gray-700">The Nominee</h3>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <p class="text-xs uppercase text-gray-400 font-bold">Proposed Nominee</p>
                            <p class="text-gray-800 font-bold text-lg"><?= $p['n_salutation'] ?> <?= $p['n_fname'] ?> <?= $p['n_lname'] ?></p>
                        </div>
                        <div>
                            <p class="text-xs uppercase text-gray-400 font-bold">Nominee Email</p>
                            <p class="text-blue-600 underline"><?= $p['n_email'] ?></p>
                        </div>
                        <div>
                            <p class="text-xs uppercase text-gray-400 font-bold">Nominee Affiliation</p>
                            <p class="text-gray-800"><?= $p['n_affiliation'] ?></p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-gray-100">
                            <p class="text-xs uppercase text-gray-400 font-bold mb-2">Invitation Token</p>
                            <code class="text-[10px] bg-gray-100 p-2 block rounded break-all text-gray-500">
                                <?= site_url('register?token=' . $p['invitation_token']) ?>
                            </code>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-8 bg-white p-4 rounded-xl shadow-sm flex justify-between items-center border border-gray-200">
            <p class="text-sm text-gray-500">Invitation sent on: <strong><?= date('M d, Y', strtotime($p['created_at'])) ?></strong></p>
            <button onclick="window.print()" class="text-sm bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-black transition">
                <i class="fas fa-print mr-2"></i> Print Record
            </button>
        </div>
    </div>
</body>
</html>