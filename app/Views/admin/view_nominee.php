<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto">
        
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <a href="<?= site_url('admin/dashboard') ?>" class="bg-white p-2 rounded-lg shadow-sm hover:bg-gray-50 mr-4">
                    <i class="fas fa-chevron-left text-gray-600"></i>
                </a>
                <h1 class="text-2xl font-bold text-gray-800">Nominee Profile</h1>
            </div>
            <div class="flex space-x-3">
                <span class="bg-blue-600 text-white px-4 py-1.5 rounded-full text-sm font-semibold shadow-sm">
                    <?= $n['award'] ?>
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 text-center">
                    <div class="w-20 h-20 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto text-3xl font-bold mb-4">
                        <?= substr($n['f_name'], 0, 1) ?><?= substr($n['l_name'], 0, 1) ?>
                    </div>
                    <h2 class="text-xl font-bold"><?= $n['salutation'] ?> <?= $n['f_name'] ?> <?= $n['l_name'] ?></h2>
                    <p class="text-gray-500 text-sm"><?= $n['affiliation'] ?></p>
                    <hr class="my-4">
                    <div class="text-left space-y-3">
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-envelope w-6"></i> <?= $n['n_email'] ?>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-phone w-6"></i> <?= $n['c_code'] ?> <?= $n['contact'] ?>
                        </div>
                        <div class="flex items-center text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt w-6"></i> <?= $n['address'] ?>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-800 p-6 rounded-2xl shadow-md text-white">
                    <h3 class="font-bold mb-2">Supporting Document</h3>
                    <p class="text-xs text-slate-400 mb-4">The submitted Word template for this nomination.</p>
                    <a href="<?= base_url('uploads/' . $n['template_upload']) ?>" target="_blank" class="flex items-center justify-center w-full bg-blue-500 hover:bg-blue-600 p-3 rounded-xl font-bold transition">
                        <i class="fas fa-file-word mr-2"></i> Download Document
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-6">
                
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
                    <h3 class="text-lg font-bold border-b pb-2 mb-4 text-blue-800">Application Details</h3>
                    
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-bold text-gray-700">Executive Summary</h4>
                            <p class="text-gray-600 text-sm leading-relaxed"><?= nl2br($n['summary']) ?></p>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-700">Significant Contribution</h4>
                            <p class="text-gray-600 text-sm leading-relaxed"><?= nl2br($n['contribution']) ?></p>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-700">Potential for Future Growth</h4>
                            <p class="text-gray-600 text-sm leading-relaxed"><?= nl2br($n['potential']) ?></p>
                        </div>
                        <?php if($n['yt_link']): ?>
                        <div class="pt-4">
                            <a href="<?= $n['yt_link'] ?>" target="_blank" class="text-red-600 font-bold text-sm">
                                <i class="fab fa-youtube mr-1"></i> Watch Presentation Video
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-200">
                    <h3 class="text-lg font-bold border-b pb-2 mb-4 text-green-800">Referees</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php foreach($n['referees'] as $ref): ?>
                        <div class="p-4 bg-gray-50 rounded-xl border border-gray-100 text-sm">
                            <p class="font-bold text-gray-800"><?= $ref['name'] ?></p>
                            <p class="text-gray-600 italic"><?= $ref['institute'] ?></p>
                            <p class="text-blue-600"><?= $ref['email'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>