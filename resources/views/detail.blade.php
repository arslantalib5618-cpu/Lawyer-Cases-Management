<x-layout.main_layout>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Case Detail · Legal Advocate</title>
  <!-- Font Awesome 6 (Free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body style="margin:0; background:#eef2f5; font-family:'Segoe UI',Roboto,system-ui,sans-serif; color:#1a2634; line-height:1.6; display:flex; justify-content:center; padding:2rem 1rem;">

<div style="max-width:1240px; width:100%; background:#ffffff; border-radius:32px; box-shadow:0 25px 60px -15px rgba(0,20,40,0.15); overflow:hidden; padding:0;">

  <!-- ===== INNER CONTAINER ===== -->
  <div style="padding:2.4rem 3rem;">

    <!-- ===== BRAND / HEADER ===== -->
    

    <!-- ===== BACK BUTTON ===== -->
    <a href="#" style="display:inline-flex; align-items:center; gap:0.5rem; color:#0b2a4a; text-decoration:none; font-weight:500; margin-bottom:1.5rem; padding:0.4rem 1.2rem; border-radius:30px; background:#f3f6fa; border:1px solid #dce3eb; font-size:0.85rem; transition:0.2s;">
      <i class="fas fa-arrow-left" style="color:#f0b841;"></i> Back to Cases
    </a>

    <!-- ===== CASE DETAIL CARD ===== -->
    
    <div style="background:#fafcfe; border-radius:24px; border:1px solid #dce3eb; overflow:hidden; margin-bottom:2.5rem; box-shadow:0 6px 20px rgba(0,0,0,0.03);">

      <!-- Header with Status -->
      <div style="background:linear-gradient(135deg, #0b2a4a, #113556); padding:1.2rem 2rem; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:center; border-bottom:3px solid #f0b841;">
        <div style="display:flex; align-items:center; gap:1.2rem; flex-wrap:wrap;">
          <span style="color:#f0b841; font-weight:700; font-size:1.1rem;"><i class="fas fa-gavel" style="margin-right:8px;"></i>{{$detail->case_number}}</span>
          <span style="background:rgba(240,184,65,0.15); color:#f0b841; padding:0.2rem 1.2rem; border-radius:30px; font-size:0.8rem; border:1px solid rgba(240,184,65,0.2);"><i class="fas fa-tag" style="margin-right:6px;"></i>{{$detail->case_category}}</span>
          <span style="background:#28a745; color:white; padding:0.2rem 1.2rem; border-radius:30px; font-size:0.75rem; font-weight:600;"><i class="fas fa-check-circle" style="margin-right:4px;"></i>{{$detail->case_status}}</span>
        </div>
        <span style="color:#a0bed6; font-size:0.85rem;"><i class="far fa-calendar-alt" style="margin-right:6px; color:#f0b841;"></i>{{$detail->case_date}}</span>
      </div>

      <!-- Body -->
      <div style="padding:1.8rem 2rem;">
        <!-- Title -->
        <h2 style="font-size:1.8rem; font-weight:700; color:#0b2a4a; margin:0 0 1.2rem 0; letter-spacing:-0.3px;">{{$detail->case_title}}</h2>

        <!-- Info Grid -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem 2rem; margin-bottom:1.5rem; background:#f3f6fa; padding:1.2rem 1.5rem; border-radius:16px; border:1px solid #dce3eb;">
          <div><strong style="color:#0b2a4a;">Case Number</strong><br><span style="color:#3d5a72;">{{$detail->case_number}}</span></div>
          <div><strong style="color:#0b2a4a;">Status</strong><br><span style="color:#28a745; font-weight:600;">{{$detail->case_status}}</span></div>
          <div><strong style="color:#0b2a4a;">Lawyer</strong><br><span style="color:#3d5a72;">{{$detail->lawyer_name}}</span></div>
          <div><strong style="color:#0b2a4a;">Client Name</strong><br><span style="color:#3d5a72;">{{$detail->client_name}}</span></div>
          <div><strong style="color:#0b2a4a;">Court</strong><br><span style="color:#3d5a72;">{{$detail->court_name}}</span></div>
          <div><strong style="color:#0b2a4a;">Category</strong><br><span style="color:#3d5a72;">{{$detail->case_category}}</span></div>
        </div>

        <!-- Description -->
        <div style="margin-bottom:0.5rem;">
          <h4 style="color:#0b2a4a; font-size:1rem; margin:0 0 0.5rem 0; display:flex; align-items:center; gap:0.5rem;"><i class="fas fa-align-left" style="color:#f0b841;"></i> Case Description</h4>
          <p style="color:#2c4a64; font-size:0.95rem; line-height:1.7; margin:0;">
{{$detail->case_description}}          </p>
        </div>
      </div>
    </div>

    <!-- ===== RELATED CASES ===== -->
    <div style="margin-top:0.5rem; margin-bottom:2rem;">
      <div style="display:flex; align-items:center; gap:0.8rem; margin-bottom:1.2rem;">
        <span style="background:#f0b841; width:6px; height:24px; display:inline-block; border-radius:4px;"></span>
        <h3 style="font-size:1.2rem; font-weight:700; color:#0b2a4a; margin:0;">Related Cases</h3>
      </div>
      <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px,1fr)); gap:1.2rem;">
        <!-- Card 1 -->
        <div style="background:#fafcfe; border-radius:16px; padding:1.2rem 1rem; border:1px solid #dce3eb; transition:0.2s; text-align:center;">
          <i class="fas fa-file-contract" style="color:#f0b841; font-size:1.5rem;"></i>
          <h6 style="color:#0b2a4a; margin:0.4rem 0 0.2rem; font-size:0.9rem;">{{$detail->case_title}}</h6>
          <span style="font-size:0.7rem; color:#5b6f82;">{{$detail->case_number}}</span>
          <br><a href="{{ route('detail' , $detail->id)  }}" style="color:#f0b841; font-size:0.8rem; text-decoration:none; font-weight:500; display:inline-block; margin-top:0.3rem;">View Details →</a>
        </div>
        <!-- Card 2 -->
       <div style="background:#fafcfe; border-radius:16px; padding:1.2rem 1rem; border:1px solid #dce3eb; transition:0.2s; text-align:center;">
          <i class="fas fa-file-contract" style="color:#f0b841; font-size:1.5rem;"></i>
          <h6 style="color:#0b2a4a; margin:0.4rem 0 0.2rem; font-size:0.9rem;">{{$detail->case_title}}</h6>
          <span style="font-size:0.7rem; color:#5b6f82;">{{$detail->case_number}}</span>
          <br><a href="{{ route('detail' , $detail->id)  }}" style="color:#f0b841; font-size:0.8rem; text-decoration:none; font-weight:500; display:inline-block; margin-top:0.3rem;">View Details →</a>
        </div>
        <!-- card 3 -->
         <div style="background:#fafcfe; border-radius:16px; padding:1.2rem 1rem; border:1px solid #dce3eb; transition:0.2s; text-align:center;">
          <i class="fas fa-file-contract" style="color:#f0b841; font-size:1.5rem;"></i>
          <h6 style="color:#0b2a4a; margin:0.4rem 0 0.2rem; font-size:0.9rem;">{{$detail->case_title}}</h6>
          <span style="font-size:0.7rem; color:#5b6f82;">{{$detail->case_number}}</span>
          <br><a href="{{ route('detail' , $detail->id)  }}" style="color:#f0b841; font-size:0.8rem; text-decoration:none; font-weight:500; display:inline-block; margin-top:0.3rem;">View Details →</a>
        </div>
      </div>
    </div>

    <!-- ===== FOOTER ===== -->
   

    <!-- ===== COPYRIGHT ===== -->
    

  </div>
  <!-- end inner -->
</div>
<!-- end page -->
</body>
</html>
</x-layout.main_layout>