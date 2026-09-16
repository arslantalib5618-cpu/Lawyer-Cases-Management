<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard · Legal Advocate</title>
  <!-- Font Awesome 6 (Free) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body style="margin:0; background:#eef2f5; font-family:'Segoe UI',Roboto,system-ui,sans-serif; color:#1a2634; line-height:1.5; display:flex; min-height:100vh;">

<!-- ===== SIDEBAR ===== -->
<x-basic.sidebar/>
<!-- ===== SIDEBAR END ===== -->

<!-- ===== MAIN CONTENT ===== -->
<div style="flex:1; padding:2rem 2.5rem; background:#f8fafc;">

  <!-- Top Bar -->
 <div style="display:flex; justify-content:space-between; align-items:center; padding:0 0 1rem 0; border-bottom:1px solid #dce3eb; margin-bottom:1.8rem; flex-wrap:wrap; gap:0.8rem;">

  <!-- LEFT SIDE -->
  <div>
    <h1 style="font-size:1.5rem; font-weight:700; color:#0b2a4a; margin:0;">Dashboard</h1>
    <p style="color:#5b6f82; font-size:0.85rem; margin:0.2rem 0 0;">
      Welcome back, {{ Auth::user()->name }} · Here's your law firm overview
    </p>
  </div>

  <!-- RIGHT SIDE -->
  <div style="display:flex; align-items:center; gap:1rem;">

    <!-- DATE -->
    <span style="background:white; padding:0.35rem 1rem; border-radius:30px; font-size:0.8rem; color:#0b2a4a; border:1px solid #dce3eb; display:flex; align-items:center; gap:0.4rem;">
      <i class="fas fa-calendar-alt" style="color:#f0b841; font-size:0.75rem;"></i>
      Jun 19, 2026
    </span>

    <!-- PROFILE DROPDOWN -->
    <div style="position:relative;">

      <!-- BUTTON -->
      <div onclick="toggleDashboardProfile()" style="
          display:flex;
          align-items:center;
          gap:0.5rem;
          background:white;
          padding:0.2rem 0.8rem 0.2rem 0.5rem;
          border-radius:40px;
          border:1px solid #dce3eb;
          cursor:pointer;
      ">

        <!-- ICON -->
        <div style="background:#0b2a4a; color:#f0b841; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:0.8rem;">
          {{ strtoupper(substr(Auth::user()->name,0,1)) }}
        </div>

        <!-- NAME -->
        <span style="font-weight:600; color:#0b2a4a; font-size:0.8rem;">
          {{ Auth::user()->name }}
        </span>

        <!-- ARROW -->
        <i class="fas fa-chevron-down" style="color:#5b6f82; font-size:0.6rem; margin-left:4px;"></i>

      </div>

      <!-- DROPDOWN -->
      <div id="dashboardProfileMenu" style="
          display:none;
          position:absolute;
          right:0;
          top:45px;
          width:180px;
          background:white;
          border-radius:12px;
          box-shadow:0 10px 25px rgba(0,0,0,0.15);
          overflow:hidden;
          z-index:999;
      ">

        <div style="padding:10px 12px; font-weight:600; color:#0b2a4a; border-bottom:1px solid #eee;">
          👤 {{ Auth::user()->name }}
        </div>

        <a href="#" style="display:block; padding:10px 12px; text-decoration:none; color:#333; border-bottom:1px solid #eee;">
          Profile
        </a>

        <a href="#" style="display:block; padding:10px 12px; text-decoration:none; color:#333; border-bottom:1px solid #eee;">
          Settings
        </a>

        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" style="
              width:100%;
              padding:10px 12px;
              border:none;
              background:#ef4444;
              color:white;
              cursor:pointer;
              text-align:left;
          ">
            Logout
          </button>
        </form>

      </div>

    </div>

  </div>

</div>

  <!-- Stats Row -->
 <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; margin-bottom:1.8rem;">

  <!-- TOTAL -->
  <div style="background:linear-gradient(135deg,#0b2a4a,#1a3f5e); color:white; border-radius:16px; padding:1.2rem; box-shadow:0 10px 25px rgba(11,42,74,0.2);">
    <div style="display:flex; justify-content:space-between; align-items:center;">
      <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:1px;">Total Cases</span>
      <i class="fas fa-folder"></i>
    </div>
    <h2 style="margin:10px 0 0; font-size:2rem;">{{ $stats['total_cases'] }}</h2>
    <p style="margin:5px 0 0; font-size:0.75rem; opacity:0.8;">All system cases</p>
  </div>

  <!-- ACTIVE -->
  <div style="background:linear-gradient(135deg,#f0b841,#e0a830); color:#0b2a4a; border-radius:16px; padding:1.2rem; box-shadow:0 10px 25px rgba(240,184,65,0.25);">
    <div style="display:flex; justify-content:space-between; align-items:center;">
      <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:1px;">Active</span>
      <i class="fas fa-play"></i>
    </div>
    <h2 style="margin:10px 0 0; font-size:2rem;">{{ $stats['active_cases'] }}</h2>
    <p style="margin:5px 0 0; font-size:0.75rem;">In progress cases</p>
  </div>

  <!-- CLOSED (WON) -->
  <div style="background:linear-gradient(135deg,#28a745,#20c997); color:white; border-radius:16px; padding:1.2rem; box-shadow:0 10px 25px rgba(40,167,69,0.2);">
    <div style="display:flex; justify-content:space-between; align-items:center;">
      <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:1px;">Closed</span>
      <i class="fas fa-trophy"></i>
    </div>
    <h2 style="margin:10px 0 0; font-size:2rem;">{{ $stats['closed_cases'] }}</h2>
    <p style="margin:5px 0 0; font-size:0.75rem;">Successfully resolved</p>
  </div>

  <!-- PENDING -->
  <div style="background:linear-gradient(135deg,#6c757d,#495057); color:white; border-radius:16px; padding:1.2rem; box-shadow:0 10px 25px rgba(108,117,125,0.2);">
    <div style="display:flex; justify-content:space-between; align-items:center;">
      <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:1px;">Pending</span>
      <i class="fas fa-clock"></i>
    </div>
    <h2 style="margin:10px 0 0; font-size:2rem;">{{ $stats['pending_cases'] }}</h2>
    <p style="margin:5px 0 0; font-size:0.75rem;">Waiting for action</p>
  </div>

</div>

  <!-- ===== Quick Info Cards (Instead of Buttons) ===== -->
  <!-- <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1rem; margin-bottom:1.8rem;">
    <div style="background:white; border-radius:14px; padding:1rem 1.2rem; border:1px solid #e3e9f0; display:flex; align-items:center; gap:1rem; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
      <div style="background:#f0b841; color:#0b2a4a; width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">
        <i class="fas fa-calendar-check"></i>
      </div>
      <div>
        <div style="font-weight:700; color:#0b2a4a; font-size:0.95rem;">5</div>
        <span style="font-size:0.7rem; color:#5b6f82;">Today's Hearings</span>
      </div>
    </div>
    <div style="background:white; border-radius:14px; padding:1rem 1.2rem; border:1px solid #e3e9f0; display:flex; align-items:center; gap:1rem; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
      <div style="background:#28a745; color:white; width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">
        <i class="fas fa-file-invoice"></i>
      </div>
      <div>
        <div style="font-weight:700; color:#0b2a4a; font-size:0.95rem;">12</div>
        <span style="font-size:0.7rem; color:#5b6f82;">Pending Invoices</span>
      </div>
    </div>
    <div style="background:white; border-radius:14px; padding:1rem 1.2rem; border:1px solid #e3e9f0; display:flex; align-items:center; gap:1rem; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
      <div style="background:#0b2a4a; color:#f0b841; width:40px; height:40px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1rem;">
        <i class="fas fa-envelope"></i>
      </div>
      <div>
        <div style="font-weight:700; color:#0b2a4a; font-size:0.95rem;">8</div>
        <span style="font-size:0.7rem; color:#5b6f82;">Unread Messages</span>
      </div>
    </div>
  </div> -->

  <!-- ===== Table ===== -->
  <div style="background:white; border-radius:16px; border:1px solid #e3e9f0; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.02);">
    <div style="padding:0.8rem 1.5rem; border-bottom:1px solid #e3e9f0; display:flex; justify-content:space-between; align-items:center; background:#fafcfc;">
      <span style="font-weight:600; color:#0b2a4a; font-size:0.9rem;"><i class="fas fa-list" style="color:#f0b841; margin-right:6px;"></i> Recent Cases</span>
      <a href="{{ route('case.index') }}" style="color:#f0b841; text-decoration:none; font-size:0.8rem;">View all →</a>
    </div>
    <div style="overflow-x:auto;">
      <table style="width:100%; border-collapse:collapse; font-size:0.85rem;">
        <thead>
          <tr style="background:#f3f6fa; text-align:left;">
            <th style="padding:0.6rem 1.2rem; color:#0b2a4a; font-weight:600; font-size:0.7rem; text-transform:uppercase;">Case</th>
            <th style="padding:0.6rem 1.2rem; color:#0b2a4a; font-weight:600; font-size:0.7rem; text-transform:uppercase;">Title</th>
            <th style="padding:0.6rem 1.2rem; color:#0b2a4a; font-weight:600; font-size:0.7rem; text-transform:uppercase;">Client</th>
            <th style="padding:0.6rem 1.2rem; color:#0b2a4a; font-weight:600; font-size:0.7rem; text-transform:uppercase;">Lawyer</th>
            <th style="padding:0.6rem 1.2rem; color:#0b2a4a; font-weight:600; font-size:0.7rem; text-transform:uppercase;">Status</th>
            <th style="padding:0.6rem 1.2rem; color:#0b2a4a; font-weight:600; font-size:0.7rem; text-transform:uppercase;">Date</th>
            <th style="padding:0.6rem 1.2rem; color:#0b2a4a; font-weight:600; font-size:0.7rem; text-transform:uppercase; text-align:center;">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cases as $case)
          <tr style="border-bottom:1px solid #eef2f5;">
            <td style="padding:0.6rem 1.2rem; font-weight:600; color:#0b2a4a;">{{$case->case_number}}</td>
            <td style="padding:0.6rem 1.2rem; color:#2c4a64;">{{$case->case_title}}</td>
            <td style="padding:0.6rem 1.2rem; color:#2c4a64;">{{$case->client_name}}</td>
            <td style="padding:0.6rem 1.2rem; color:#2c4a64;">{{$case->lawyer_name}}</td>
            <td style="padding:0.6rem 1.2rem;"><span style="background:#28a745; color:white; padding:0.15rem 0.7rem; border-radius:20px; font-size:0.65rem; font-weight:600;">{{$case->case_status}}</span></td>
            <td style="padding:0.6rem 1.2rem; color:#5b6f82;">{{$case->case_date}}</td>
            <td style="padding:0.6rem 1.2rem; text-align:center;"><a href="{{ route('case.show' , $case->id ) }}" style="color:#f0b841;"><i class="fas fa-eye"></i></a></td>
          </tr>
           @endforeach
        </tbody>
      </table>
    </div>
    <!-- <div style="padding:0.5rem 1.2rem; border-top:1px solid #eef2f5; display:flex; justify-content:space-between; align-items:center; background:#fafcfc;">
      <span style="font-size:0.75rem; color:#5b6f82;">Showing 1-2 of 120 cases</span>
      <div style="display:flex; gap:0.2rem;">
        <a href="#" style="padding:0.2rem 0.6rem; border-radius:4px; background:#f0b841; color:#0b2a4a; text-decoration:none; font-size:0.75rem; font-weight:600;">1</a>
        <a href="#" style="padding:0.2rem 0.6rem; border-radius:4px; border:1px solid #dce3eb; color:#0b2a4a; text-decoration:none; font-size:0.75rem;">2</a>
        <a href="#" style="padding:0.2rem 0.6rem; border-radius:4px; border:1px solid #dce3eb; color:#0b2a4a; text-decoration:none; font-size:0.75rem;">3</a>
      </div>
    </div> -->
  </div>

</div>
<!-- ===== MAIN CONTENT END ===== -->

</body>
</html>