<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Legal Advocate · Law Firm</title>
  <!-- Font Awesome 6 (Free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body style="margin:0; background:#eef2f5; font-family:'Segoe UI',Roboto,system-ui,sans-serif; color:#1a2634; line-height:1.5; display:flex; justify-content:center; padding:2rem 1rem;">

<div style="max-width:1240px; width:100%; background:#ffffff; border-radius:32px; box-shadow:0 25px 60px -15px rgba(0,20,40,0.15); overflow:hidden; padding:0;">

  <!-- ===== INNER CONTAINER ===== -->
  <div style="padding:2.4rem 3rem;">

    <!-- ===== BRAND / HEADER ===== -->
   <x-basic.navbar/>

    <!-- ===== HERO ===== -->
    <div style="background:linear-gradient(135deg, #0b2a4a 0%, #07203a 100%); color:white; padding:2.8rem 3rem; border-radius:24px; margin-bottom:2.8rem; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:center; box-shadow:0 14px 32px rgba(11,42,74,0.25);">
      <div style="flex:1 1 320px;">
        <div style="display:flex; align-items:center; gap:0.6rem; margin-bottom:0.4rem;">
          <span style="background:#f0b841; width:6px; height:28px; display:inline-block; border-radius:4px;"></span>
          <span style="font-weight:600; font-size:0.8rem; letter-spacing:3px; color:#f0b841; text-transform:uppercase;"><i class="fas fa-gavel" style="margin-right:6px;"></i> JUSTICE. TRUST. RESULTS.</span>
        </div>
        <h2 style="font-size:2.6rem; font-weight:700; letter-spacing:-0.5px; line-height:1.15; max-width:600px; margin:0.4rem 0 0.4rem 0;">
          Dedicated Legal Support
        </h2>
        <p style="font-size:1.05rem; color:#b8cfe0; max-width:480px; margin:0.2rem 0 1.2rem 0; font-weight:300;">
          We provide professional legal services with a focus on achieving the best possible outcomes for our clients.
        </p>
        <div style="display:flex; gap:1rem; flex-wrap:wrap; margin-top:1.2rem;">
          <a href="{{  route('case') }}" style="display:inline-block; background:#f0b841; color:#0b2a4a; padding:0.85rem 2.8rem; border-radius:50px; font-weight:700; text-decoration:none; box-shadow:0 8px 20px rgba(240,184,65,0.3); letter-spacing:0.3px; transition:0.2s;"><i class="fas fa-folder-open" style="margin-right:8px;"></i>View Cases</a>
          <a href="{{  route('aboutLawyer') }}" style="display:inline-block; background:rgba(255,255,255,0.07); backdrop-filter:blur(4px); border:1.5px solid rgba(240,184,65,0.4); color:#f0f4fc; padding:0.85rem 2.8rem; border-radius:50px; font-weight:600; text-decoration:none; transition:0.2s;"><i class="fas fa-user" style="margin-right:8px;"></i>About Lawyer</a>
        </div>
      </div>
      <div style="display:flex; gap:2rem; flex-wrap:wrap; background:rgba(255,255,255,0.04); backdrop-filter:blur(4px); padding:1.4rem 2.2rem; border-radius:80px; border:1px solid rgba(240,184,65,0.12); margin-top:0.5rem; flex:1 1 auto; justify-content:center;">
        <div style="text-align:center;"><span style="font-size:2.2rem; font-weight:700; color:#f0b841; display:block; line-height:1.2;">120+</span><span style="font-size:0.7rem; text-transform:uppercase; letter-spacing:1.2px; color:#a0bed6;"><i class="fas fa-folder" style="margin-right:4px;"></i>Total Cases</span></div>
        <div style="text-align:center;"><span style="font-size:2.2rem; font-weight:700; color:#f0b841; display:block; line-height:1.2;">85+</span><span style="font-size:0.7rem; text-transform:uppercase; letter-spacing:1.2px; color:#a0bed6;"><i class="fas fa-spinner" style="margin-right:4px;"></i>Active Cases</span></div>
        <div style="text-align:center;"><span style="font-size:2.2rem; font-weight:700; color:#f0b841; display:block; line-height:1.2;">30+</span><span style="font-size:0.7rem; text-transform:uppercase; letter-spacing:1.2px; color:#a0bed6;"><i class="fas fa-check-circle" style="margin-right:4px;"></i>Closed Cases</span></div>
        <div style="text-align:center;"><span style="font-size:2.2rem; font-weight:700; color:#f0b841; display:block; line-height:1.2;">25+</span><span style="font-size:0.7rem; text-transform:uppercase; letter-spacing:1.2px; color:#a0bed6;"><i class="fas fa-trophy" style="margin-right:4px;"></i>Won Cases</span></div>
      </div>
    </div>

    <!-- ===== STATS GRID (second) ===== -->
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1.5rem; margin:1.8rem 0 3.2rem 0; background:#f3f6fa; padding:1.8rem 1.2rem; border-radius:30px; border:1px solid #dce3eb;">
      <div style="text-align:center; padding:0.2rem;"><span style="font-size:2.4rem; font-weight:700; color:#0b2a4a; display:block;">120+</span><span style="color:#2c4a64; text-transform:uppercase; font-size:0.7rem; letter-spacing:1px; font-weight:500;"><i class="fas fa-folder" style="margin-right:4px;"></i>Total Cases</span><br><span style="font-size:0.7rem; color:#5b6f82;">All cases handled</span></div>
      <div style="text-align:center; padding:0.2rem;"><span style="font-size:2.4rem; font-weight:700; color:#0b2a4a; display:block;">85+</span><span style="color:#2c4a64; text-transform:uppercase; font-size:0.7rem; letter-spacing:1px; font-weight:500;"><i class="fas fa-spinner" style="margin-right:4px;"></i>Active Cases</span><br><span style="font-size:0.7rem; color:#5b6f82;">Currently in progress</span></div>
      <div style="text-align:center; padding:0.2rem;"><span style="font-size:2.4rem; font-weight:700; color:#0b2a4a; display:block;">30+</span><span style="color:#2c4a64; text-transform:uppercase; font-size:0.7rem; letter-spacing:1px; font-weight:500;"><i class="fas fa-check-circle" style="margin-right:4px;"></i>Closed Cases</span><br><span style="font-size:0.7rem; color:#5b6f82;">Successfully resolved</span></div>
      <div style="text-align:center; padding:0.2rem;"><span style="font-size:2.4rem; font-weight:700; color:#0b2a4a; display:block;">25+</span><span style="color:#2c4a64; text-transform:uppercase; font-size:0.7rem; letter-spacing:1px; font-weight:500;"><i class="fas fa-trophy" style="margin-right:4px;"></i>Won Cases</span><br><span style="font-size:0.7rem; color:#5b6f82;">Successful outcomes</span></div>
    </div>

    <!-- ===== RECENT CASES ===== -->
    <div style="display:flex; align-items:baseline; justify-content:space-between; margin:2.8rem 0 1.8rem 0;">
      <div style="display:flex; align-items:center; gap:0.8rem;">
        <span style="background:#f0b841; width:6px; height:28px; display:inline-block; border-radius:4px;"></span>
        <a style="font-size:1.9rem; font-weight:700; color:#0b2a4a; letter-spacing:-0.3px; margin:0;">Recent Cases</a>
      </div>
      <a href="{{  route('case') }}" style="color:#f0b841; font-weight:500; font-size:1rem; letter-spacing:0.3px;"><i class="fas fa-arrow-right" style="margin-right:6px;"></i>Our Recent Cases</a>
    </div>

    <!-- case cards -->
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px,1fr)); gap:2rem; margin-bottom:2.8rem;">
      <!-- case 1 -->
       @foreach($Home as $home)
      <div style="background:#fafcfe; border-radius:22px; overflow:hidden; border:1px solid #dce3eb; transition:0.3s; box-shadow:0 6px 14px rgba(0,0,0,0.03);">
        <div style="background:linear-gradient(135deg, #0b2a4a, #113556); padding:0.8rem 1.4rem; display:flex; align-items:center; gap:0.8rem; border-bottom:2px solid #f0b841;">
          <i class="fas fa-building" style="color:#f0b841; font-size:1.2rem;"></i>
          <span style="color:white; font-weight:600; font-size:0.9rem; letter-spacing:0.3px;">{{$home->case_number}}</span>
        </div>
        <div style="padding:1.4rem 1.4rem 1.2rem;">
          <div style="font-weight:700; font-size:1.15rem; color:#0b2a4a; letter-spacing:-0.2px; display:flex; align-items:center; gap:0.5rem;">
            <i class="fas fa-gavel" style="color:#f0b841; font-size:0.9rem;"></i> {{$home->case_title}}
          </div>
          <div style="font-size:0.9rem; color:#3d5a72; margin:0.5rem 0 0.2rem 0; display:flex; align-items:center; gap:0.5rem;"><i class="fas fa-tag" style="color:#f0b841; width:18px;"></i> Category: {{$home->case_category}}</div>
          <div style="font-size:0.9rem; color:#3d5a72; display:flex; align-items:center; gap:0.5rem;"><i class="fas fa-scale-balanced" style="color:#f0b841; width:18px;"></i> Court: {{$home->court_name}}</div>
          <div style="display:flex; justify-content:space-between; align-items:center; margin-top:1.2rem; border-top:1px solid #e3e9f0; padding-top:0.8rem;">
            <span style="font-size:0.8rem; color:#5b6f82;"><i class="far fa-calendar-alt" style="margin-right:6px;"></i>{{$home->case_date}}</span>
            <a href="{{ route('detail', ['id' => $home->id]) }}" style="color:#f0b841; font-weight:600; text-decoration:none; font-size:0.9rem; transition:0.2s;">View <i class="fas fa-arrow-right" style="font-size:0.7rem; margin-left:4px;"></i></a>
          </div>
        </div>
      </div>
      @endforeach
      <!-- case 2 -->
     
      <!-- case 3 -->
     
      <!-- case 4 -->
    
   
    </div>
    <center><a href="{{  route('case') }}" style="display:inline-block; background:#f0b841; color:#0b2a4a; padding:0.85rem 2.8rem; border-radius:50px; font-weight:700; text-decoration:none; box-shadow:0 8px 20px rgba(240,184,65,0.3); letter-spacing:0.3px; transition:0.2s;"><i class="fas fa-folder-open" style="margin-right:8px;"></i>Our Recent Cases</a></center>

    <!-- ===== CONTACT SECTION ===== -->
    <div style="background:linear-gradient(145deg, #0b2a4a, #07203a); border-radius:30px; padding:2.8rem 3.2rem; margin:2.8rem 0 2.8rem 0; color:white; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:center; box-shadow:0 14px 32px rgba(11,42,74,0.25);">
      <div style="flex:1 1 280px;">
        <div style="display:flex; align-items:center; gap:0.6rem; margin-bottom:0.8rem;">
          <span style="background:#f0b841; width:6px; height:28px; display:inline-block; border-radius:4px;"></span>
          <span style="font-weight:600; font-size:0.8rem; letter-spacing:2px; color:#f0b841; text-transform:uppercase;"><i class="fas fa-phone" style="margin-right:6px;"></i>Contact Us</span>
        </div>
        <h3 style="font-size:2rem; font-weight:700; letter-spacing:-0.3px; margin:0 0 0.4rem 0;">Get in Touch</h3>
        <p style="color:#b8cfe0; margin:0 0 1.4rem 0; max-width:380px; font-weight:300;">If you have any legal questions or need professional assistance, feel free to contact us.</p>
        <div style="display:flex; flex-direction:column; gap:0.6rem;">
          <div style="display:flex; align-items:center; gap:0.8rem;"><i class="fas fa-phone" style="width:24px; color:#f0b841; font-size:1rem;"></i> <span>+92 300 1234567</span></div>
          <div style="display:flex; align-items:center; gap:0.8rem;"><i class="fas fa-envelope" style="width:24px; color:#f0b841; font-size:1rem;"></i> <span>info@legaladvocate.com</span></div>
          <div style="display:flex; align-items:center; gap:0.8rem;"><i class="fas fa-location-dot" style="width:24px; color:#f0b841; font-size:1rem;"></i> <span>123 Justice Road, Lahore, Pakistan</span></div>
        </div>
      </div>
      <div style="margin-top:1.2rem; flex-shrink:0;">
        <a href="#" style="display:inline-block; background:#f0b841; color:#0b2a4a; padding:0.9rem 2.8rem; border-radius:50px; font-weight:700; text-decoration:none; box-shadow:0 8px 22px rgba(240,184,65,0.3); letter-spacing:0.5px; transition:0.2s; border:1px solid transparent;"><i class="fas fa-paper-plane" style="margin-right:8px;"></i>Send Message <i class="fas fa-arrow-right" style="margin-left:8px; font-size:0.8rem;"></i></a>
      </div>
    </div>

    <!-- ===== FOOTER ===== -->
   <x-basic.footer/>

    <!-- ===== COPYRIGHT ===== -->
    <div style="text-align:center; font-size:0.8rem; color:#5b6f82; padding:1.8rem 0 0.5rem 0; border-top:1px solid #dce3eb; margin-top:1.8rem;">
      <i class="far fa-copyright" style="margin-right:4px;"></i> 2024 Legal Advocate. All Rights Reserved.
    </div>

  </div>
  <!-- end inner -->
</div>
<!-- end page -->
</body>
</html>