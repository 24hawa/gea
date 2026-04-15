<!doctype html>
<html lang="en" class="h-full">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Educator Awards</title>
  <script src="https://cdn.tailwindcss.com/3.4.17"></script>
  <script src="https://cdn.jsdelivr.net/npm/lucide@0.263.0/dist/umd/lucide.min.js"></script>
  <script src="/_sdk/element_sdk.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&amp;family=Source+Sans+3:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <style>
    body, html {
    font-family: Arial, Helvetica, sans-serif;
}

/* Ensure inputs and buttons also use it, as they sometimes have their own defaults */
input, select, textarea, button {
    font-family: Arial, Helvetica, sans-serif;
}
:root{--royal:#1E3A8A;--gold:#D4AF37;--bg:#FFFFFF;--bg2:#F8FAFC;--text:#0F172A;--text2:#475569;--card:#FFFFFF;--border:#E2E8F0;--sidebar:#F1F5F9;--input-bg:#FFFFFF;--input-border:#CBD5E1;--nav-bg:#FFFFFF;}
[data-theme="dark"]{--royal:#3B82F6;--gold:#F59E0B;--bg:#0F172A;--bg2:#1E293B;--text:#F1F5F9;--text2:#94A3B8;--card:#1E293B;--border:#334155;--sidebar:#1E293B;--input-bg:#0F172A;--input-border:#475569;--nav-bg:#0F172A;}
*{transition:background-color .3s,color .3s,border-color .3s;}

body{
  font-family:Arial, Helvetica, sans-serif; /*Change Font*/
  background:var(--bg);
  color:var(--text);
}

h1,h2,h3,.serif{
  font-family:Arial, Helvetica, sans-serif; /*Change Font*/
}
.card-s{background:var(--card);border:2px solid var(--border);border-radius:16px;padding:24px;cursor:pointer;transition:all .3s;}
.card-s:hover{transform:translateY(-2px);box-shadow:0 8px 25px rgba(0,0,0,.1);}
.card-s.active{border-color:var(--gold);box-shadow:0 0 0 3px rgba(212,175,55,.25);}
.btn-primary{background:var(--royal);color:#fff;padding:12px 32px;border-radius:12px;font-weight:600;border:none;cursor:pointer;transition:all .2s;}
.btn-primary:hover{opacity:.9;transform:translateY(-1px);}
.btn-outline{background:transparent;color:var(--text);padding:12px 32px;border-radius:12px;font-weight:600;border:2px solid var(--border);cursor:pointer;transition:all .2s;}
.btn-outline:hover{border-color:var(--gold);}
.btn-gold{background:var(--gold);color:#0F172A;padding:12px 32px;border-radius:12px;font-weight:700;border:none;cursor:pointer;transition:all .2s;}
.btn-gold:hover{opacity:.9;transform:translateY(-1px);}
input,select,textarea{background:var(--input-bg);border:1.5px solid var(--input-border);border-radius:10px;padding:10px 14px;width:100%;color:var(--text);font-family:'Source Sans 3',sans-serif;font-size:15px;outline:none;transition:border-color .2s;}
input:focus,select:focus,textarea:focus{border-color:var(--gold);}
label{font-weight:600;font-size:14px;color:var(--text2);margin-bottom:4px;display:block;}
.progress-track{height:6px;background:var(--border);border-radius:99px;overflow:hidden;}
.progress-fill{height:100%;background:linear-gradient(90deg,var(--royal),var(--gold));border-radius:99px;transition:width .6s cubic-bezier(.4,0,.2,1);}
.sidebar-item{padding:12px 16px;border-radius:12px;cursor:pointer;display:flex;align-items:center;gap:12px;transition:all .2s;color:var(--text2);font-weight:500;}
.sidebar-item.active{background:linear-gradient(135deg,rgba(30,58,138,.1),rgba(212,175,55,.1));color:var(--royal);font-weight:700;}
.sidebar-item .num{width:32px;height:32px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;background:var(--border);color:var(--text2);transition:all .3s;}
.sidebar-item.active .num{background:var(--royal);color:#fff;}
.sidebar-item.done .num{background:var(--gold);color:#0F172A;}
.fade-in{animation:fadeIn .4s ease;}
@keyframes fadeIn{from{opacity:0;transform:translateY(10px)}to{opacity:1;transform:translateY(0)}}
.toast{position:fixed;bottom:24px;right:24px;background:#059669;color:#fff;padding:14px 24px;border-radius:12px;font-weight:600;z-index:999;animation:slideUp .4s ease;}
@keyframes slideUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
.modal-bg{position:fixed;inset:0;background:rgba(0,0,0,.5);display:flex;align-items:center;justify-content:center;z-index:1000;animation:fadeIn .3s ease;}
.modal-box{background:var(--card);border-radius:20px;padding:48px;text-align:center;max-width:480px;width:90%;animation:scaleIn .4s ease;}
@keyframes scaleIn{from{opacity:0;transform:scale(.9)}to{opacity:1;transform:scale(1)}}
.ref-table{width:100%;border-collapse:separate;border-spacing:0;}
.ref-table th{background:var(--bg2);padding:10px 14px;text-align:left;font-size:13px;font-weight:700;color:var(--text2);border-bottom:2px solid var(--border);}
.ref-table td{padding:8px 10px;border-bottom:1px solid var(--border);}
.ref-table td input{padding:8px 10px;font-size:14px;}
.toggle-track{width:48px;height:26px;border-radius:99px;background:var(--border);cursor:pointer;position:relative;transition:background .3s;}
.toggle-track.on{background:var(--royal);}
.toggle-knob{width:22px;height:22px;border-radius:50%;background:#fff;position:absolute;top:2px;left:2px;transition:transform .3s;}
.toggle-track.on .toggle-knob{transform:translateX(22px);}
.review-card{background:var(--bg2);border-radius:14px;padding:20px;margin-bottom:16px;}
.review-card h4{font-family:Arial, Helvetica, sans-serif !important; font-size:17px;margin-bottom:10px;color:var(--royal);}
.review-row {
    display: flex;
    justify-content: flex-start;
    padding: 10px 0 10px 20px; /* Added 20px padding to the left */
    font-size: 14px;
    border-bottom: 1px solid var(--border);
}

/* Label column */
.review-row span:first-child {
    color: var(--text2);
    font-weight: 500;
    width: 180px; /* Increased slightly to give more breathing room */
    min-width: 180px;
    flex-shrink: 0;
}

/* Value column */
.review-row span:last-child {
    font-weight: 600;
    color: var(--text);
    text-align: left;
    word-break: break-word;
}

.review-row:last-child {
    border-bottom: none;
}
@media(max-width:768px){.main-layout{flex-direction:column!important;}.sidebar-wrap{display:none;}}
  </style>
  <style>body { box-sizing: border-box; }</style>
  <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
<header style="background:var(--nav-bg); border-bottom:1px solid var(--border); min-height: 80px;" 
        class="px-6 py-1 flex items-center justify-between gap-4">
    
    <div class="flex items-center gap-5" style="min-width: 0; flex-shrink: 1;"> 
     
<img id="logoImg" src="<?= base_url('images/GEA-Blue.png') ?>" 
     style="width: clamp(150px, 20vw, 280px); height: auto; transform: translateY(4px);" 
     class="flex-shrink-0"> <div style="min-width: 0;">
      <h1 id="main-title" class="text-2xl md:text-3xl font-bold serif truncate" style="line-height:1;">
          Global Educator Award 2026
      </h1>
      <p id="portal-label" class="text-sm md:text-lg truncate" style="color:var(--text2); margin-top: 1px;">
          Registration Portal
      </p>
     </div>
    </div>

    <div class="flex items-center gap-4" style="flex-shrink: 0;">
        <div class="flex items-center gap-2"> 
            <i data-lucide="sun" style="width:16px; height:16px; color:var(--gold);"></i>
            <div class="toggle-track" id="themeToggle" onclick="toggleTheme()" style="cursor: pointer;">
                <div class="toggle-knob"></div>
            </div>
            <i data-lucide="moon" style="width:16px; height:16px; color:var(--text2);"></i>
        </div>

        <div style="width: 1px; height: 20px; background: var(--border);" class="hidden sm:block"></div>

        <a href="<?= url_to('logout') ?>" 
           style="padding: 6px 12px; border-radius: 6px; color: var(--text1); text-decoration: none; font-size: 14px; transition: all 0.2s; border: 1px solid var(--border);"
           class="whitespace-nowrap">
           <span style="display: flex; align-items: center; gap: 6px;">
              <i data-lucide="log-out" style="width:16px; height:16px;"></i>
              <span class="hidden sm:inline">Logout</span>
           </span>
        </a>
    </div>
</header>
   <div class="px-6 py-3" style="background:var(--nav-bg);">
    <div class="flex items-center justify-between mb-1">
     <span class="text-xs font-semibold" style="color:var(--text2);">Progress</span> <span class="text-xs font-bold" id="progressPct" style="color:var(--royal);">25%</span>
    </div>
    <div class="progress-track">
     <div class="progress-fill" id="progressBar" style="width:25%"></div>
    </div>
   </div>
   <div class="main-layout flex" style="min-height:calc(100% - 130px);">
    <aside class="sidebar-wrap" style="width:280px;min-width:280px;background:var(--sidebar);border-right:1px solid var(--border);padding:24px 16px;">
     <p class="text-xs font-bold uppercase mb-4 px-4" style="color:var(--text2);letter-spacing:1px;">Steps</p>
     <div id="sidebarNav">
      <div class="sidebar-item active" data-step="1">
       <span class="num">1</span><span>Nomination Type</span>
      </div>
      <div class="sidebar-item" data-step="2">
       <span class="num">2</span><span>Details</span>
      </div>
      <div class="sidebar-item" data-step="3">
       <span class="num">3</span><span>Professional Summary</span>
      </div>
      <div class="sidebar-item" data-step="4">
       <span class="num">4</span><span>Review &amp; Submit</span>
      </div>
     </div>
    </aside>
    <main class="flex-1 p-6 md:p-10 mx-auto w-full" style="max-width:900px;">
      <form id="masterForm" action="<?= site_url('participant/save') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <input type="hidden" name="path_selection" id="path_selection" value="self">
     <div id="step1" class="step-content fade-in">
      <h2 id="step1_title" class="text-2xl font-bold serif mb-2">Nomination Type</h2>
      <p class="mb-8" style="color:var(--text2);">Select whether you're nominating yourself or being nominated by someone else</p>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
       <div class="card-s" id="cardSelf" onclick="selectPath('self')">
        <div style="width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,rgba(30,58,138,.1),rgba(212,175,55,.15));display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
         <i data-lucide="user" style="color:var(--royal);width:24px;height:24px;"></i>
        </div>
        <h3 class="text-lg font-bold serif mb-2">Self Nomination</h3>
        <p style="color:var(--text2);font-size:14px;">I am nominating myself for the Global Educator Awards (GEA).</p>
       </div>
       <div class="card-s" id="cardOther" onclick="selectPath('other')">
        <div style="width:48px;height:48px;border-radius:14px;background:linear-gradient(135deg,rgba(30,58,138,.1),rgba(212,175,55,.15));display:flex;align-items:center;justify-content:center;margin-bottom:16px;">
         <i data-lucide="users" style="color:var(--royal);width:24px;height:24px;"></i>
        </div>
        <h3 class="text-lg font-bold serif mb-2">Nominate Others</h3>
        <p style="color:var(--text2);font-size:14px;">I am nominating someone for the Global Educator Awards (GEA).</p>
       </div>
      </div>
      <div class="flex justify-end">
       <button type="button" class="btn-primary" onclick="goStep(2)">Next <i data-lucide="arrow-right" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-left:4px;"></i></button>
      </div>
     </div>
     <div id="step2" class="step-content fade-in" style="display:none;">
      <h2 id="step2_title" class="text-2xl font-bold serif mb-2">Participant Details</h2>
      <p class="mb-8" style="color:var(--text2);">Fill in your details</p>
      <div id="sectionA">
       <h3 class="text-lg font-semibold serif mb-6" style="color:var(--royal);">Your Information</h3>
       <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
         <label>Salutation</label><input name="salutation" id="salutation" placeholder="e.g. Prof." value="<?= old('salutation') ?>" required>
        </div>
        <div>
         <label>First Name <span style="color:#EF4444;">*</span></label><input name="f_name" id="f_name" value="<?= old('f_name') ?>" required>
        </div>
        <div>
         <label>Middle Name</label><input name="m_name" id="m_name" placeholder="Optional" value="<?= old('m_name') ?>">
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <div>
         <label>Last Name <span style="color:#EF4444;">*</span></label><input name="l_name" id="l_name" value="<?= old('l_name') ?>" required>
        </div>
        <div>
         <label>Gender <span style="color:#EF4444;">*</span></label>
         <div class="flex gap-3 mt-1">
          <label class="flex items-center gap-2 cursor-pointer" style="font-weight:400;"><input type="radio" name="gender" value="Male"> Male</label><label class="flex items-center gap-2 cursor-pointer" style="font-weight:400;"><input type="radio" name="gender" value="Female"> Female</label>
         </div>
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <div>
         <label>Affiliation / Institution <span style="color:#EF4444;">*</span></label><input name="affiliation" id="affiliation" value="<?= old('affiliation') ?>" required>
        </div>
        <div>
         <label>Nationality <span style="color:#EF4444;">*</span></label><input name="nationality" id="nationality" value="<?= old('nationality') ?>" required>
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
         <label>Country Code <span style="color:#EF4444;">*</span></label><select name="c_code" id="c_code" value="<?= old('c_code') ?>" required><option value="">Select</option><option>+60</option><option>+65</option><option>+44</option><option>+1</option><option>+91</option><option>+61</option><option>+81</option><option>+82</option><option>+86</option><option>+33</option><option>+49</option></select>
        </div>
        <div class="md:col-span-2">
         <label>Contact Number <span style="color:#EF4444;">*</span></label><input name="contact" id="contact" type="tel" value="<?= old('contact') ?>" required>
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <div>
         <label>Email Address <span style="color:#EF4444;">*</span></label><input name="nemail" id="email" type="email" value="<?= old('email') ?>" required>
        </div>
        <div>
         <label>Corresponding Email</label><input name="cemail"id="cemail" type="email" placeholder="Optional" value="<?= old('email') ?>">
        </div>
       </div>
       <div class="mb-6">
        <label>Home Address <span style="color:#EF4444;">*</span></label><textarea name="address" id="address" rows="2" value="<?= old('address') ?>" required></textarea>
       </div>
       <div class="mb-5">
       <label>Award Category <span style="color:#EF4444;">*</span></label>
<select name="award" id="award" onchange="updateTemplateLink()" value="<?= old('award') ?>" required>
    <option value="" data-template="">-- Select Category --</option>
    <?php foreach($awards as $a): ?>
        <option value="<?= $a['a_name'] ?>" data-template="<?= $a['template'] ?>">
            <?= $a['a_name'] ?>
        </option>
    <?php endforeach; ?>
</select>
      </div>
      </div>
      <div id="sectionB" style="display:none;">
       <hr style="border-color:var(--border);margin:32px 0;">
       <h3 class="text-lg font-semibold serif mb-6" style="color:var(--gold);">Nominator Information</h3>
       <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
         <label>Salutation</label><input name="salutation2" id="salutation2" placeholder="e.g. Prof." value="<?= old('salutation2') ?>" required>
        </div>
        <div>
         <label>First Name <span style="color:#EF4444;">*</span></label><input name="f_name2" id="f_name2" value="<?= old('f_name2') ?>" required>
        </div>
        <div>
         <label>Middle Name</label><input name="m_name2" id="m_name2" placeholder="Optional" value="<?= old('m_name2') ?>">
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <div>
         <label>Last Name <span style="color:#EF4444;">*</span></label><input name="l_name2" id="l_name2" value="<?= old('l_name2') ?>" required>
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <div>
         <label>Affiliation / Institution <span style="color:#EF4444;">*</span></label><input name="affiliation2" id="affiliation2" value="<?= old('affiliation2') ?>" required>
        </div>
        <div>
         <label>Nationality <span style="color:#EF4444;">*</span></label><input name="nationality2" id="nationality2" value="<?= old('nationality2') ?>" required>
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
         <label>Country Code <span style="color:#EF4444;">*</span></label><select name="c_code2" id="c_code2"  value="<?= old('c_code2') ?>" required><option value="">Select</option><option>+60</option><option>+65</option><option>+44</option><option>+1</option><option>+91</option><option>+61</option><option>+81</option><option>+82</option><option>+86</option><option>+33</option><option>+49</option></select>
        </div>
        <div class="md:col-span-2">
         <label>Contact Number <span style="color:#EF4444;">*</span></label><input name="contact2" id="contact2" type="tel" value="<?= old('contact2') ?>" required>
        </div>
       </div>
       <div class="mb-4">
        <label>Email Address <span style="color:#EF4444;">*</span></label><input name="n_email2" id="n_email2" type="email"  value="<?= old('n_email2') ?>" required>
       </div>
       <hr style="border-color:var(--border);margin:32px 0;">
       <h3 class="text-lg font-semibold serif mb-6" style="color:var(--gold);">Nominee Information</h3>
       <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
         <label>Salutation</label><input name="n_salutation" id="n_salutation" placeholder="e.g. Dr."  value="<?= old('n_salutation') ?>" required>
        </div>
        <div>
         <label>First Name <span style="color:#EF4444;">*</span></label><input name="n_fname" id="n_fname" value="<?= old('n_fname') ?>" required>
        </div>
        <div>
         <label>Middle Name</label><input name="n_mname" id="n_mname" placeholder="Optional" value="<?= old('n_mname') ?>">
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <div>
         <label>Last Name <span style="color:#EF4444;">*</span></label><input name="n_lname" id="n_lname"  value="<?= old('n_lname') ?>" required>
        </div>
       </div>
       <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
        <div>
         <label>Affiliation / Institution <span style="color:#EF4444;">*</span></label><input name="n_affiliation" id="n_affiliation" value="<?= old('n_affiliation') ?>" required>
        </div>
        <!-- <div>
         <label>Country Code <span style="color:#EF4444;">*</span></label><select id="b_code" required><option value="">Select</option><option>+60</option><option>+65</option><option>+44</option><option>+1</option><option>+91</option><option>+61</option><option>+81</option><option>+82</option><option>+86</option><option>+33</option><option>+49</option></select>
        </div> -->
        <!-- <div class="md:col-span-2">
         <label>Contact Number <span style="color:#EF4444;">*</span></label><input id="b_phone" type="tel" required>
        </div> -->
       </div>
       <div class="mb-6">
        <label>Email Address <span style="color:#EF4444;">*</span></label><input name="n_email" id="n_email" type="email"  value="<?= old('n_email') ?>" required>
       </div>
      </div>
      <div class="flex justify-between">
       <button type="button" class="btn-outline" onclick="goStep(1)"><i data-lucide="arrow-left" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:4px;"></i> Back</button> <button type="button" class="btn-primary" id="step2NextBtn" onclick="handleStep2Next()">Next <i data-lucide="arrow-right" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-left:4px;"></i></button>
      </div>
     </div>
     <div id="step3" class="step-content fade-in" style="display:none;">
      <h2 id="step3_title" class="text-2xl font-bold serif mb-2">Professional Summary</h2>
      <p class="mb-8" style="color:var(--text2);">Complete your application profile</p>
      <div class="mb-5">
       <label>Executive Summary <span style="color:var(--text2);font-weight:400;">(max 500 words)</span></label><textarea name="summary" id="execSummary" rows="5" placeholder="Share your key achievements and why you deserve this award..." value="<?= old('summary') ?>" oninput="updateWordCount()"></textarea>
       <p class="text-xs mt-1" style="color:var(--text2);"><span id="wordCount">0</span> / 500 words</p>
      </div>
      <div class="mb-5">
       <label>Key Contribution</label><textarea name="contribution" id="contribution" rows="3" placeholder="Describe your major contribution to education..." value="<?= old('contribution') ?>"></textarea>
      </div>
      <div class="mb-5">
       <label>Outcome &amp; Outcomes</label><textarea name="outcome" id="outcome" rows="3" placeholder="Share measurable results and outcomes..." value="<?= old('outcome') ?>"></textarea>
      </div>
      <div class="mb-5">
       <label>Innovation &amp; Excellence</label><textarea name="innovation" id="innovation" rows="3" placeholder="How have you shown innovation in your field?" value="<?= old('innovation') ?>"></textarea>
      </div>
      <div class="mb-5">
       <label>Potential &amp; Future Potential</label><textarea name="potential" id="potential" rows="3" placeholder="Describe long-term outcome and future vision..." value="<?= old('potential') ?>"></textarea>
      </div>
      <hr style="border-color:var(--border);margin:32px 0;">
      <h3 class="text-lg font-semibold serif mb-4" style="color:var(--royal);">Attachments</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
      <div id="templateDownloadSection" class="mb-6 p-4 rounded-xl border-2 border-dashed border-blue-200 bg-blue-50" style="display:none;">
    <div class="flex items-center gap-4">
        <div class="bg-blue-600 p-2 rounded-lg">
            <i data-lucide="file-text" style="color:white;width:24px;height:24px;"></i>
        </div>
        <div class="flex-1">
            <h4 class="font-bold text-blue-900">Required Template</h4>
            <p class="text-sm text-blue-700">Please download and complete this official template before uploading.</p>
        </div>
        <a id="templateDownloadBtn" href="#" download class="btn-primary py-2 px-4 text-sm flex items-center gap-2">
            <i data-lucide="download" style="width:14px;height:14px;"></i> Download
        </a>
    </div>
</div>
       <div>
        <label>Upload Document PDF</label>
        <div style="border:2px dashed var(--input-border);border-radius:12px;padding:24px;text-align:center;cursor:pointer;" onclick="document.getElementById('template_upload').click()">
         <i data-lucide="upload" style="width:28px;height:28px;color:var(--text2);margin:0 auto 8px;display:block;"></i>
         <p class="text-sm" style="color:var(--text2);" id="pdfLabel">Click to upload PDF</p><input type="file" name="template_upload" id="template_upload" accept=".pdf" style="display:none;" onchange="document.getElementById('pdfLabel').textContent=this.files[0]?.name||'Click to upload PDF'" value="<?= old('template_upload') ?>">
        </div>
       </div>
       <div>
        <label>YouTube Link</label><input name="yt_link" id="yt_link" placeholder="https://youtube.com/..." value="<?= old('yt_link') ?>">
       </div>
      </div>
      <hr style="border-color:var(--border);margin:32px 0;">
      <h3 class="text-lg font-semibold serif mb-4" style="color:var(--royal);">References</h3>
      <div style="overflow-x:auto;">
       <table class="ref-table">
        <thead>
         <tr>
          <th>Name</th>
          <th>Institution</th>
          <th>Email</th>
          <th style="width:40px;"></th>
         </tr>
        </thead>
        <tbody id="refBody">
         <tr>
          <td><input class="ref-name" placeholder="Reference name"></td>
          <td><input class="ref-inst" placeholder="Institution"></td>
          <td><input class="ref-email" type="email" placeholder="Email"></td>
          <td><button onclick="this.closest('tr').remove()" style="background:none;border:none;cursor:pointer;color:#EF4444;padding:0;"><i data-lucide="trash-2" style="width:16px;height:16px;"></i></button></td>
         </tr>
        </tbody>
       </table>
      </div><button class="btn-outline mt-3 text-sm" onclick="addReference()" style="padding:8px 20px;"><i data-lucide="plus" style="width:14px;height:14px;display:inline;vertical-align:middle;margin-right:4px;"></i> Add Reference</button>
      <div class="flex justify-between mt-10">
       <button type="button" class="btn-outline" onclick="goStep(2)"><i data-lucide="arrow-left" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:4px;"></i> Back</button>
       <div class="flex gap-3">
        <button class="btn-outline" onclick="saveDraft()"><i data-lucide="save" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:4px;"></i> Save Draft</button> <button type="button" class="btn-primary" onclick="goStep(4)">Next <i data-lucide="arrow-right" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-left:4px;"></i></button>
       </div>
      </div>
     </div>
     <div id="step4" class="step-content fade-in" style="display:none;">
      <h2 id="step4_title" class="text-2xl font-bold serif mb-2">Review &amp; Submit</h2>
      <p class="mb-8" style="color:var(--text2);">Please review your application before submitting</p>
      <div id="reviewContent"></div>
<div class="mb-8 w-full">
 
  <label class="flex items-start gap-3 cursor-pointer font-normal w-full">
    <input type="checkbox" id="chkAccuracy" class="mt-1">
    <span class="w-full">
      I confirm that all information provided is accurate
    </span>
  </label>


  <label class="flex items-start gap-3 cursor-pointer font-normal w-full mt-4">
    <input type="checkbox" id="chkTerms" class="mt-1">
    <span class="w-full">
      I agree to the terms and conditions of GEA
    </span>
  </label>


</div>
      <div class="flex justify-between">
       <button type="button" class="btn-outline" onclick="goStep(3)"><i data-lucide="arrow-left" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:4px;"></i> Back</button>
       <div class="flex gap-3">
        <button class="btn-outline" onclick="saveDraft()"><i data-lucide="save" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:4px;"></i> Save Draft</button> <button class="btn-gold" onclick="submitApp()"><i data-lucide="send" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:4px;"></i> Submit Application</button>
       </div>
      </div>
     </div>
    </main>
   </div>
  </div>
  <div id="successModal" style="display:none;" class="modal-bg" onclick="if(event.target===this)backToHome()">
   <div class="modal-box">
    <div style="width:72px;height:72px;border-radius:50%;background:linear-gradient(135deg,#059669,#10B981);display:flex;align-items:center;justify-content:center;margin:0 auto 20px;">
     <i data-lucide="check" style="width:36px;height:36px;color:#fff;"></i>
    </div>
    <h2 class="text-xl font-bold serif mb-2" id="successTitle">Thank You!</h2>
    <p style="color:var(--text2);margin-bottom:24px;" id="successMsg">Your application has been successfully submitted. We will review it and get back to you.</p><button class="btn-primary" onclick="backToHome()">Back to Home</button>
   </div>
  </div>
  <script>
let currentStep=1,selectedPath='self';
const defaultConfig={main_title:'Global Educator Awards',portal_label:'Registration Portal',step1_title:'Nomination Type',step2_title:'Participant Details',step3_title:'Documentation',step4_title:'Review & Submit'};
function applyConfig(c){
  const els={main_title:'main-title',portal_label:'portal-label',step1_title:'step1_title',step2_title:'step2_title',step3_title:'step3_title',step4_title:'step4_title'};
  Object.entries(els).forEach(([k,id])=>{
    const el=document.getElementById(id);
    if(el)el.textContent=c[k]||defaultConfig[k];
  });
}
window.elementSdk.init({
  defaultConfig,
  onConfigChange:async(c)=>applyConfig(c),
  mapToCapabilities:(c)=>({recolorables:[],borderables:[],fontEditable:undefined,fontSizeable:undefined}),
  mapToEditPanelValues:(c)=>new Map([['main_title',c.main_title||defaultConfig.main_title],['portal_label',c.portal_label||defaultConfig.portal_label],['step1_title',c.step1_title||defaultConfig.step1_title],['step2_title',c.step2_title||defaultConfig.step2_title],['step3_title',c.step3_title||defaultConfig.step3_title],['step4_title',c.step4_title||defaultConfig.step4_title]])
});
function selectPath(p) {
    selectedPath = p; 
    
    // 1. Update the hidden input (this always exists)
    const hiddenInput = document.getElementById('path_selection');
    if (hiddenInput) {
        hiddenInput.value = p;
    }

    // 2. Update Card Visuals (this always exists in Step 1)
    const cardS = document.getElementById('cardSelf');
    const cardO = document.getElementById('cardOther');
    if (cardS) cardS.classList.toggle('active', p === 'self');
    if (cardO) cardO.classList.toggle('active', p === 'other');

    // 3. SAFE TOGGLE: Only run if we are actually looking at Step 2
    const secA = document.getElementById('sectionA');
    const secB = document.getElementById('sectionB');

    if (secA && secB) {
        if (p === 'self') {
            secA.style.display = 'block';
            secB.style.display = 'none';
            secA.querySelectorAll('input, select, textarea').forEach(i => i.disabled = false);
            secB.querySelectorAll('input, select, textarea').forEach(i => i.disabled = true);
        } else {
            secA.style.display = 'none';
            secB.style.display = 'block';
            secA.querySelectorAll('input, select, textarea').forEach(i => i.disabled = true);
            secB.querySelectorAll('input, select, textarea').forEach(i => i.disabled = false);
        }
    }
    
    console.log("Path selected: " + p);
}
// Helper function to prevent "An invalid form control is not focusable" errors
function toggleRequired(container, isRequired) {
    if (!container) return;
    const inputs = container.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        if (isRequired) {
            // Only add required back if it originally had it (optional)
            input.setAttribute('required', '');
        } else {
            input.removeAttribute('required');
        }
    });
}
function handleStep2Next(){const isValid=validateStep2();if(!isValid)return;if(selectedPath==='other'){submitNomination();return;}goStep(3);}
function validateStep2(){if(selectedPath==='self'){if(!gv('f_name').trim()||!gv('l_name').trim()||!gv('email').trim()||!gv('affiliation').trim()||!gv('nationality').trim()||!gv('contact').trim()||!gv('address').trim()||!document.querySelector('input[name="gender"]:checked')){showToast('Please fill all required fields','#EF4444');return false;}}else{const nomOk=gv('f_name2').trim()&&gv('l_name2').trim()&&gv('n_email2').trim()&&gv('affiliation2').trim()&&gv('nationality2').trim()&&gv('contact2').trim(); const neeOk=gv('n_fname').trim()&&gv('n_lname').trim()&&gv('n_email').trim(); if(!nomOk||!neeOk){showToast('Please fill all required nominee/nominator fields','#EF4444');return false;}}return true;}
function goStep(s) {
    // --- Logic for Step 2 Visibility ---
    if (s === 2) {
        const secA = document.getElementById('sectionA');
        const secB = document.getElementById('sectionB');
        
        if (selectedPath === 'other') {
            secA.style.display = 'none';
            secB.style.display = 'block'; // 'block' is safer than ''
            document.getElementById('step2_title').innerText = "Nominator & Nominee Details";
        } else {
            secA.style.display = 'block';
            secB.style.display = 'none';
            document.getElementById('step2_title').innerText = "Participant Details";
        }
    }

    // --- Your existing Step Transition Logic ---
    if (s === 3 || s === 4) buildReview();

    document.querySelectorAll('.step-content').forEach(el => el.style.display = 'none');
    
    const targetStep = document.getElementById('step' + s);
    if (targetStep) {
        targetStep.style.display = 'block';
        targetStep.classList.remove('fade-in');
        void targetStep.offsetWidth; // Trigger reflow
        targetStep.classList.add('fade-in');
    }

    currentStep = s;
    updateProgress();

    // Sidebar updates
    document.querySelectorAll('.sidebar-item').forEach(el => {
        const ds = parseInt(el.dataset.step);
        el.classList.remove('active', 'done');
        if (ds === s) el.classList.add('active');
        else if (ds < s) el.classList.add('done');
    });

    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function updateProgress(){const steps=selectedPath==='self'?4:2;const pct=Math.round((currentStep/steps)*100);document.getElementById('progressBar').style.width=pct+'%';document.getElementById('progressPct').textContent=pct+'%';}
function toggleTheme(){
  const d = document.documentElement;
  const isDark = d.getAttribute('data-theme') === 'dark';


  // Toggle theme
  d.setAttribute('data-theme', isDark ? '' : 'dark');
  document.getElementById('themeToggle').classList.toggle('on', !isDark);


  // Change logo
  const logo = document.getElementById('logoImg');
  if (!isDark) {
    logo.src = "<?= base_url('images/GEA-Yellow.png') ?>"; // dark mode
  } else {
    logo.src = "<?= base_url('images/GEA-Blue.png') ?>"; // light mode
  }
}function updateWordCount(){const t=gv('execSummary').trim();const w=t?t.split(/\s+/).length:0;document.getElementById('wordCount').textContent=w;document.getElementById('wordCount').style.color=w>500?'#EF4444':'var(--text2)';}
function addReference(){const tr=document.createElement('tr');tr.innerHTML='<td><input class="ref-name" placeholder="Reference name"></td><td><input class="ref-inst" placeholder="Institution"></td><td><input class="ref-email" type="email" placeholder="Email"></td><td><button onclick="this.closest(\'tr\').remove()" style="background:none;border:none;cursor:pointer;color:#EF4444;padding:0;"><i data-lucide="trash-2" style="width:16px;height:16px;"></i></button></td>';document.getElementById('refBody').appendChild(tr);window.addEventListener('DOMContentLoaded', () => {
  const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
  const logo = document.getElementById('logoImg');
  logo.src = isDark ? "images/GEA-Yellow.png" : "images/GEA-Blue.png";
});lucide.createIcons();}
function showToast(msg,color){const t=document.createElement('div');t.className='toast';if(color)t.style.background=color;t.textContent=msg;document.body.appendChild(t);setTimeout(()=>t.remove(),3000);}
function saveDraft(){const refs=[];document.querySelectorAll('#refBody tr').forEach(tr=>{const name=tr.querySelector('.ref-name').value;const inst=tr.querySelector('.ref-inst').value;const email=tr.querySelector('.ref-email').value;if(name||inst||email)refs.push({name,inst,email});});const data={selectedPath,salutation:gv('salutation'),f_name:gv('f_name'),m_name:gv('m_name'),l_name:gv('l_name'),affiliation:gv('affiliation'),nationality:gv('nationality'),contact:gv('contact'),email:gv('email'),cemail:gv('cemail'),address:gv('address'),gender:document.querySelector('input[name="gender"]:checked')?.value||'',salutation2:gv('salutation2'),f_name2:gv('f_name2'),m_name2:gv('m_name2'),l_name2:gv('l_name2'),affiliation2:gv('affiliation2'),nationality:gv('nationality'),contact2:gv('contact2'),n_email2:gv('n_email2'),nominator_address:gv('nominator_address'),nominator_gender:document.querySelector('input[name="nominator_gender"]:checked')?.value||'',n_salutation:gv('n_salutation'),n_fname:gv('n_fname'),n_mname:gv('n_mname'),n_lname:gv('n_lname'),b_phone:gv('b_phone'),n_email:gv('n_email'),b_gender:document.querySelector('input[name="b_gender"]:checked')?.value||'',award:gv('award'),execSummary:gv('execSummary'),contribution:gv('contribution'),outcome:gv('outcome'),innovation:gv('innovation'),potential:gv('potential'),yt_link:gv('yt_link'),references:refs};localStorage.setItem('gea_draft',JSON.stringify(data));showToast('Draft saved successfully!');}
function loadDraft(){const d=localStorage.getItem('gea_draft');if(!d)return;const data=JSON.parse(d);if(data.selectedPath)selectPath(data.selectedPath);Object.keys(data).forEach(k=>{if(k==='selectedPath'||k==='references')return;const el=document.getElementById(k);if(el)el.value=data[k]||'';});if(data.references&&data.references.length>0){document.querySelectorAll('#refBody tr').forEach(tr=>tr.remove());data.references.forEach(r=>{const tr=document.createElement('tr');tr.innerHTML=`<td><input class="ref-name" value="${r.name||''}" placeholder="Reference name"></td><td><input class="ref-inst" value="${r.inst||''}" placeholder="Institution"></td><td><input class="ref-email" type="email" value="${r.email||''}" placeholder="Email"></td><td><button onclick="this.closest('tr').remove()" style="background:none;border:none;cursor:pointer;color:#EF4444;padding:0;"><i data-lucide="trash-2" style="width:16px;height:16px;"></i></button></td>`;document.getElementById('refBody').appendChild(tr);});}}
function gv(id){return document.getElementById(id)?.value||'';}
function buildReview(){let html='<div class="review-card"><h4>Participant Information</h4>';const rows=selectedPath==='self'?[['Salutation',gv('salutation')],['First Name',gv('f_name')],['Middle Name',gv('m_name')],['Last Name',gv('l_name')],['Gender',document.querySelector('input[name="gender"]:checked')?.value||'—'],['Institution',gv('affiliation')],['Nationality',gv('nationality')],['Email',gv('email')],['Address', (gv('address') || '').substring(0,50)+(gv('address').length>50?'...':'')]]:[];rows.forEach(r=>{if(r[1])html+=`<div class="review-row"><span>${r[0]}</span><span>${r[1]}</span></div>`;});html+='</div>';if(selectedPath==='other'){html+='<div class="review-card"><h4>Nominator Information</h4>';const nRows=[['Salutation',gv('salutation2')],['First Name',gv('f_name2')],['Last Name',gv('l_name2')],['Institution',gv('affiliation2')],['Email',gv('n_email2')]];nRows.forEach(r=>{if(r[1])html+=`<div class="review-row"><span>${r[0]}</span><span>${r[1]}</span></div>`;});html+='</div>';html+='<div class="review-card"><h4>Nominee Information</h4>';const bRows=[['Salutation',gv('n_salutation')],['First Name',gv('n_fname')],['Last Name',gv('n_lname')],['Gender',document.querySelector('input[name="b_gender"]:checked')?.value||'—'],['Email',gv('n_email')]];bRows.forEach(r=>{if(r[1])html+=`<div class="review-row"><span>${r[0]}</span><span>${r[1]}</span></div>`;});html+='</div>';} else {html+='<div class="review-card"><h4>Professional Summary</h4>';const docs=[['Award Category',gv('award')],['Executive Summary',gv('execSummary')?gv('execSummary').substring(0,60)+(gv('execSummary').length>60?'...':''):'—'],['Key Contribution',gv('contribution')?'✓ Provided':'—'],['Outcome & Outcomes',gv('outcome')?'✓ Provided':'—'],['Innovation',gv('innovation')?'✓ Provided':'—'],['Potential',gv('potential')?'✓ Provided':'—'],['YouTube Link',gv('yt_link')?'✓ Provided':'—']];docs.forEach(r=>html+=`<div class="review-row"><span>${r[0]}</span><span>${r[1]}</span></div>`);html+='</div>';}document.getElementById('reviewContent').innerHTML=html;}
function submitApp() {
    if(!document.getElementById('chkAccuracy').checked || !document.getElementById('chkTerms').checked) {
        showToast('Please confirm both checkboxes', '#EF4444');
        return;
    }

    // Capture references into a hidden input so PHP can read them
    const refs = [];
    document.querySelectorAll('#refBody tr').forEach(tr => {
        const name = tr.querySelector('.ref-name').value;
        const inst = tr.querySelector('.ref-inst').value;
        const email = tr.querySelector('.ref-email').value;
        if(name) refs.push({name, inst, email});
    });
    
    // Create a temporary hidden input to hold the references JSON
    const refInput = document.createElement('input');
    refInput.type = 'hidden';
    refInput.name = 'references_data';
    refInput.value = JSON.stringify(refs);
    document.getElementById('masterForm').appendChild(refInput);

    // Show success UI then submit the actual form
    showSuccess('Submitting...', 'Please wait while we process your application.');
    setTimeout(() => {
        document.getElementById('masterForm').submit();
    }, 1500);
}
function updateTemplateLink() {
    const select = document.getElementById('award');
    const selectedOption = select.options[select.selectedIndex];
    const templateFile = selectedOption.getAttribute('data-template');
    
    const section = document.getElementById('templateDownloadSection');
    const btn = document.getElementById('templateDownloadBtn');

    if (templateFile && templateFile !== "") {
        // Show the section and update the link
        section.style.display = 'block';
        // Assuming your templates are stored in an 'uploads/templates/' folder
        btn.href = "<?= base_url('uploads/templates/') ?>" + templateFile;
    } else {
        // Hide it if no template is attached to this award
        section.style.display = 'none';
    }
}

// Run once on load just in case a draft was loaded
document.addEventListener('DOMContentLoaded', updateTemplateLink);
function submitNomination() {
    // For nominations, we might want to post to a different URL or use a flag
    const form = document.getElementById('masterForm');
    const typeInput = document.createElement('input');
    typeInput.type = 'hidden';
    typeInput.name = 'submission_type';
    typeInput.value = 'nomination_only';
    form.appendChild(typeInput);
    
    showSuccess('Nomination Submitted!', `A confirmation link will be sent.`);
    setTimeout(() => {
        form.submit();
    }, 1500);
}function showSuccess(title,msg){document.getElementById('successTitle').textContent=title;document.getElementById('successMsg').textContent=msg;document.getElementById('successModal').style.display='flex';}
function backToHome(){document.getElementById('successModal').style.display='none';localStorage.removeItem('gea_draft');document.querySelectorAll('input:not([type=radio]),textarea').forEach(el=>el.value='');document.querySelectorAll('input[type=radio]').forEach(el=>el.checked=false);document.getElementById('chkAccuracy').checked=false;document.getElementById('chkTerms').checked=false;selectPath('self');document.getElementById('sectionB').style.display='none';document.getElementById('sectionA').style.display='';document.querySelectorAll('.step-content').forEach(el=>el.style.display='none');document.getElementById('step1').style.display='';currentStep=1;updateProgress();document.querySelectorAll('.sidebar-item').forEach((el,i)=>{el.classList.remove('active','done');if(i===0)el.classList.add('active');});}
selectPath('self');loadDraft();lucide.createIcons();
  </script>
 <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9e64b9b2f7115e23',t:'MTc3NTE4NDIwMy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
<script src="https://unpkg.com/lucide@latest"></script>

<script>
  // This command replaces the <i> tags with actual SVG icons
  lucide.createIcons();
</script>
<footer style="background: var(--nav-bg); border-top: 1px solid var(--border);" class="py-8 px-6">
    <div class="text-center">
        <p style="color: var(--text2); font-size: 14px; line-height: 1.6; font-family: Arial, sans-serif;">
            Copyright &copy; 2026<br>
            <strong>Faculty of Computing and Meta-Technology</strong><br>
            University of Education Sultan Idris (UPSI)
        </p>
    </div>
</footer>
</body>
</html>

