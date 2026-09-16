<x-layout.admin_layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Case · Legal Advocate</title>
    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body style="margin:0; background:#eef2f5; font-family:'Segoe UI',Roboto,system-ui,sans-serif; color:#1a2634; line-height:1.5; display:flex; min-height:100vh;">

<!-- ===== SIDEBAR ===== -->

<!-- ===== SIDEBAR END ===== -->

<!-- ===== MAIN CONTENT ===== -->
<div style="flex:1; padding:2rem 2.5rem; background:#f8fafc;">

    <!-- Top Bar -->
    <div style="display:flex; justify-content:space-between; align-items:center; padding:0 0 1rem 0; border-bottom:1px solid #dce3eb; margin-bottom:1.8rem; flex-wrap:wrap; gap:0.8rem;">
        <div>
            <h1 style="font-size:1.5rem; font-weight:700; color:#0b2a4a; margin:0;">Add New Case</h1>
            <p style="color:#5b6f82; font-size:0.85rem; margin:0.2rem 0 0;">Create a new case record with all details</p>
        </div>
        <div style="display:flex; align-items:center; gap:1rem;">
            <span style="background:white; padding:0.35rem 1rem; border-radius:30px; font-size:0.8rem; color:#0b2a4a; border:1px solid #dce3eb; display:flex; align-items:center; gap:0.4rem;">
                <i class="fas fa-calendar-alt" style="color:#f0b841; font-size:0.75rem;"></i> Jun 19, 2026
            </span>
            <div style="display:flex; align-items:center; gap:0.5rem; background:white; padding:0.2rem 0.8rem 0.2rem 0.5rem; border-radius:40px; border:1px solid #dce3eb;">
                <div style="background:#0b2a4a; color:#f0b841; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:0.8rem;">
                    <i class="fas fa-user"></i>
                </div>
                <span style="font-weight:600; color:#0b2a4a; font-size:0.8rem;">Admin</span>
                <i class="fas fa-chevron-down" style="color:#5b6f82; font-size:0.6rem; margin-left:4px;"></i>
            </div>
        </div>
    </div>

    <!-- ===== FORM ===== -->
    <div style="background:white; border-radius:20px; border:1px solid #e3e9f0; box-shadow:0 4px 20px rgba(11,42,74,0.04); overflow:hidden;">

        <!-- Form Header -->
        <div style="padding:1rem 2rem; background:linear-gradient(135deg, #0b2a4a, #1a3f5e); border-bottom:3px solid #f0b841;">
            <h3 style="color:white; margin:0; font-size:1.1rem; display:flex; align-items:center; gap:0.6rem;">
                <i class="fas fa-file-signature" style="color:#f0b841;"></i> Case Information
            </h3>
        </div>

        <!-- Form Body -->
        <form method="POST" action="{{ route('case.store') }}" enctype="multipart/form-data" style="padding:2rem 2rem 1.8rem;">
         @csrf
            <!-- Row 1: Case Number + Case Title -->
            <div style="display:grid; grid-template-columns:1fr 2fr; gap:1.5rem; margin-bottom:1.5rem;">
                <div>
                    <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                        <i class="fas fa-hashtag" style="color:#f0b841; width:18px;"></i> Case Number <span style="color:#e74c5e;">*</span>
                    </label>
                    <input type="text" name="case_number" placeholder="e.g. 2024-001"
                           style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; box-sizing:border-box;"
                           onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                           onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';" />
                </div>
                <div>
                    <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                        <i class="fas fa-heading" style="color:#f0b841; width:18px;"></i> Case Title <span style="color:#e74c5e;">*</span>
                    </label>
                    <input type="text" name="case_title" placeholder="Enter case title"
                           style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; box-sizing:border-box;"
                           onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                           onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';" />
                </div>
            </div>

            <!-- Row 2: Category + Court Name -->
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem; margin-bottom:1.5rem;">
                <div>
                    <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                        <i class="fas fa-tag" style="color:#f0b841; width:18px;"></i> Case Category <span style="color:#e74c5e;">*</span>
                    </label>
                    <div style="position:relative;">
                        <select name="case_category" style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; color:#1a2634; appearance:none; box-sizing:border-box;"
                                onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                                onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';">
                            <option value="" selected disabled>Select category</option>
                            <option value="civil">Civil</option>
                            <option value="criminal">Criminal</option>
                            <option value="family">Family</option>
                            <option value="corporate">Corporate</option>
                            <option value="property">Property</option>
                            <option value="contract">Contract</option>
                        </select>
                        <i class="fas fa-chevron-down" style="position:absolute; right:14px; top:50%; transform:translateY(-50%); color:#5b6f82; pointer-events:none; font-size:0.8rem;"></i>
                    </div>
                </div>
                <div>
                    <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                        <i class="fas fa-gavel" style="color:#f0b841; width:18px;"></i> Court Name <span style="color:#e74c5e;">*</span>
                    </label>
                    <input type="text" name="court_name" placeholder="Enter court name"
                           style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; box-sizing:border-box;"
                           onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                           onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';" />
                </div>
            </div>

            <!-- Row 3: Client Name + Lawyer Name -->
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem; margin-bottom:1.5rem;">
                <div>
                    <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                        <i class="fas fa-user" style="color:#f0b841; width:18px;"></i> Client Name <span style="color:#e74c5e;">*</span>
                    </label>
                    <input type="text" name="client_name" placeholder="Enter client name"
                           style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; box-sizing:border-box;"
                           onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                           onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';" />
                </div>
                <div>
                    <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                        <i class="fas fa-user-tie" style="color:#f0b841; width:18px;"></i> Lawyer Name <span style="color:#e74c5e;">*</span>
                    </label>
                    <div style="position:relative;">
                        <select name="lawyer_name" style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; color:#1a2634; appearance:none; box-sizing:border-box;"
                                onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                                onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';">
                            <option value="" selected disabled>Select lawyer</option>
                            <option value="John Advocate">John Advocate</option>
                            <option value="Sarah Lawyer">Sarah Lawyer</option>
                            <option value="David Attorney">David Attorney</option>
                        </select>
                        <i class="fas fa-chevron-down" style="position:absolute; right:14px; top:50%; transform:translateY(-50%); color:#5b6f82; pointer-events:none; font-size:0.8rem;"></i>
                    </div>
                </div>
            </div>

            <!-- Row 4: Case Date + Status -->
            <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem; margin-bottom:1.5rem;">
                <div>
                    <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                        <i class="fas fa-calendar-day" style="color:#f0b841; width:18px;"></i> Case Date <span style="color:#e74c5e;">*</span>
                    </label>
                    <input type="date" name="case_date"
                           style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; box-sizing:border-box;"
                           onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                           onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';" />
                </div>
                <div>
                    <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                        <i class="fas fa-circle" style="color:#f0b841; width:18px;"></i> Case Status <span style="color:#e74c5e;">*</span>
                    </label>
                    <div style="position:relative;">
                        <select name="case_status" style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; color:#1a2634; appearance:none; box-sizing:border-box;"
                                onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                                onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';">
                            <option value="" selected disabled>Select status</option>
                            <option value="active">Active</option>
                            <option value="pending">Pending</option>
                            <option value="closed">Closed</option>
                            <option value="urgent">Urgent</option>
                        </select>
                        <i class="fas fa-chevron-down" style="position:absolute; right:14px; top:50%; transform:translateY(-50%); color:#5b6f82; pointer-events:none; font-size:0.8rem;"></i>
                    </div>
                </div>
            </div>

            <!-- Row 5: Description (Full width) -->
            <div style="margin-bottom:1.8rem;">
                <label style="display:block; font-weight:600; color:#0b2a4a; font-size:0.85rem; margin-bottom:0.4rem;">
                    <i class="fas fa-align-left" style="color:#f0b841; width:18px;"></i> Case Description <span style="color:#e74c5e;">*</span>
                </label>
                <textarea name="case_description" rows="4" placeholder="Enter detailed case description..."
                          style="width:100%; padding:0.7rem 1rem; border-radius:12px; border:2px solid #e3e9f0; font-size:0.9rem; background:#fafcfc; transition:0.3s; outline:none; font-family:inherit; resize:vertical; box-sizing:border-box;"
                          onfocus="this.style.borderColor='#f0b841'; this.style.background='white';"
                          onblur="this.style.borderColor='#e3e9f0'; this.style.background='#fafcfc';"></textarea>
            </div>

            <!-- Form Actions -->
            <div style="display:flex; gap:1rem; flex-wrap:wrap; padding-top:0.5rem; border-top:2px solid #eef2f5;">
                <button type="submit" style="background:linear-gradient(135deg, #f0b841, #e0a830); color:#0b2a4a; border:none; padding:0.7rem 2.2rem; border-radius:40px; font-weight:700; font-size:0.9rem; cursor:pointer; display:flex; align-items:center; gap:0.5rem; transition:0.3s; box-shadow:0 4px 15px rgba(240,184,65,0.3);">
                    <i class="fas fa-save"></i> Save Case
                </button>
                <button type="reset" style="background:#f3f6fa; color:#0b2a4a; border:2px solid #dce3eb; padding:0.7rem 2rem; border-radius:40px; font-weight:600; font-size:0.9rem; cursor:pointer; display:flex; align-items:center; gap:0.5rem; transition:0.3s;">
                    <i class="fas fa-undo"></i> Reset
                </button>
            </div>

        </form>
    </div>

    <!-- ===== Form Footer Hint ===== -->
    <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:0.8rem; margin-top:1.2rem; padding:0.8rem 1.2rem; background:#f3f6fa; border-radius:12px; border:1px solid #e3e9f0;">
        <span style="font-size:0.8rem; color:#5b6f82;">
            <i class="fas fa-info-circle" style="color:#f0b841; margin-right:6px;"></i>
            Fields marked with <span style="color:#e74c5e;">*</span> are required
        </span>
        <span style="font-size:0.75rem; color:#5b6f82;">
            <i class="fas fa-shield-alt" style="color:#28a745; margin-right:4px;"></i>
            All data is encrypted and secure
        </span>
    </div>

</div>
<!-- ===== MAIN CONTENT END ===== -->

</body>
</html>
</x-layout.admin_layout>