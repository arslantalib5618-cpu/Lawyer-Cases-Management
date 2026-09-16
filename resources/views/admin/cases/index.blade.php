<x-layout.admin_layout> 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Cases · Legal Advocate</title>
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

  <!-- LEFT SIDE -->
  <div>
    <h1 style="font-size:1.5rem; font-weight:700; color:#0b2a4a; margin:0;">All Cases</h1>
    <p style="color:#5b6f82; font-size:0.85rem; margin:0.2rem 0 0;">Manage and view all cases in the system</p>
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
      <div onclick="toggleAllCasesProfile()" style="
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
      <div id="allCasesProfileMenu" style="
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

  <!-- ===== STATS CARDS ===== -->
<div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; margin-bottom:1.8rem; font-family:'Segoe UI';">

  <!-- TOTAL -->
  <div style="background:linear-gradient(135deg,#0b2a4a,#1a3f5e); color:white; padding:1.2rem; border-radius:16px; box-shadow:0 10px 25px rgba(11,42,74,0.2);">
    <div style="display:flex; justify-content:space-between; align-items:center;">
      <h3 style="margin:0; font-size:0.75rem; text-transform:uppercase; letter-spacing:1px; opacity:0.8;">Total Cases</h3>
      <i class="fas fa-folder" style="color:#f0b841; font-size:1.2rem;"></i>
    </div>
    <h2 style="margin:10px 0 0; font-size:2rem; font-weight:700;">{{ $stats['total_cases'] }}</h2>
    <p style="margin:5px 0 0; font-size:0.75rem; opacity:0.7;">All cases in system</p>
  </div>

  <!-- ACTIVE -->
  <div style="background:linear-gradient(135deg,#f0b841,#e0a830); color:#0b2a4a; padding:1.2rem; border-radius:16px; box-shadow:0 10px 25px rgba(240,184,65,0.25);">
    <div style="display:flex; justify-content:space-between; align-items:center;">
      <h3 style="margin:0; font-size:0.75rem; text-transform:uppercase; letter-spacing:1px;">Active</h3>
      <i class="fas fa-play-circle" style="font-size:1.2rem;"></i>
    </div>
    <h2 style="margin:10px 0 0; font-size:2rem; font-weight:700;">{{ $stats['active_cases'] }}</h2>
    <p style="margin:5px 0 0; font-size:0.75rem;">Currently in progress</p>
  </div>

  <!-- WON -->
  <div style="background:linear-gradient(135deg,#dc3545,#b02a37); color:white; padding:1.2rem; border-radius:16px; box-shadow:0 10px 25px rgba(220,53,69,0.2);">

  <div style="display:flex; justify-content:space-between; align-items:center;">
    <h3 style="margin:0; font-size:0.75rem; text-transform:uppercase; letter-spacing:1px;">
      Closed
    </h3>
    <i class="fas fa-times-circle" style="font-size:1.2rem;"></i>
  </div>

  <h2 style="margin:10px 0 0; font-size:2rem; font-weight:700;">
    {{ $stats['closed_cases'] ?? 0 }}
  </h2>

  <p style="margin:5px 0 0; font-size:0.75rem; opacity:0.85;">
    Cases successfully closed
  </p>

</div>

  <!-- PENDING -->
  <div style="background:linear-gradient(135deg,#6c757d,#495057); color:white; padding:1.2rem; border-radius:16px; box-shadow:0 10px 25px rgba(108,117,125,0.2);">
    <div style="display:flex; justify-content:space-between; align-items:center;">
      <h3 style="margin:0; font-size:0.75rem; text-transform:uppercase; letter-spacing:1px;">Pending</h3>
      <i class="fas fa-clock" style="font-size:1.2rem;"></i>
    </div>
    <h2 style="margin:10px 0 0; font-size:2rem; font-weight:700;">{{ $stats['pending_cases'] }}</h2>
    <p style="margin:5px 0 0; font-size:0.75rem; opacity:0.85;">Awaiting decision</p>
  </div>

</div>

  <!-- ===== FILTER ROW ===== -->
  <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:0.8rem; margin-bottom:1.2rem;">
    <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
      <span style="background:#0b2a4a; color:white; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; font-weight:600; cursor:default;">All</span>
      <span style="background:#f3f6fa; color:#0b2a4a; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; font-weight:500; border:1px solid #dce3eb; cursor:default;">Active</span>
      <span style="background:#f3f6fa; color:#0b2a4a; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; font-weight:500; border:1px solid #dce3eb; cursor:default;">Won</span>
      <span style="background:#f3f6fa; color:#0b2a4a; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; font-weight:500; border:1px solid #dce3eb; cursor:default;">Pending</span>
    </div>
    <div style="display:flex; gap:0.5rem; align-items:center;">
      <span style="background:#f3f6fa; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; color:#0b2a4a; border:1px solid #dce3eb; display:flex; align-items:center; gap:0.3rem; cursor:default;">
        <i class="fas fa-search" style="color:#f0b841; font-size:0.7rem;"></i> Search
      </span>
      <span style="background:#f3f6fa; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; color:#0b2a4a; border:1px solid #dce3eb; display:flex; align-items:center; gap:0.3rem; cursor:default;">
        <i class="fas fa-filter" style="color:#f0b841; font-size:0.7rem;"></i> Filter
      </span>
    </div>
  </div>

  <!-- ===== TABLE ===== -->
<!-- ===== BEAUTIFUL UNIQUE TABLE WITH COLORFUL ROWS ===== -->
<div style="background:white; border-radius:16px; border:1px solid #e3e9f0; overflow:hidden; box-shadow:0 4px 20px rgba(11,42,74,0.06);">

  <!-- Table Header with gradient -->
  <div style="padding:0.8rem 1.5rem; border-bottom:1px solid #e3e9f0; display:flex; justify-content:space-between; align-items:center; background:linear-gradient(135deg, #f8fafc 0%, #f0f4f8 100%); flex-wrap:wrap; gap:0.5rem;">
    <div style="display:flex; align-items:center; gap:0.8rem;">
      <span style="font-weight:600; color:#0b2a4a; font-size:0.9rem; display:flex; align-items:center; gap:0.5rem;">
        <i class="fas fa-list" style="color:#f0b841; font-size:0.9rem;"></i> All Cases
      </span>
      <span style="background:linear-gradient(135deg, #f0b841, #e0a830); color:#0b2a4a; padding:0.1rem 0.8rem; border-radius:30px; font-size:0.65rem; font-weight:700; box-shadow:0 2px 8px rgba(240,184,65,0.25);">2 total</span>
    </div>
    <a href="{{ route('case.create') }}" style="background:linear-gradient(135deg, #0b2a4a, #1a3f5e); color:white; padding:0.35rem 1.2rem; border-radius:30px; text-decoration:none; font-weight:600; font-size:0.75rem; display:flex; align-items:center; gap:0.4rem; transition:0.3s; box-shadow:0 2px 10px rgba(11,42,74,0.2);">
      <i class="fas fa-plus-circle"></i> Add New
    </a>
  </div>

  <!-- Table with beautiful styling -->
  <div style="overflow-x:auto; padding:0 0.5rem;">
    <table style="width:100%; border-collapse:separate; border-spacing:0 6px; font-size:0.85rem;">
      <thead>
        <tr style="background:transparent;">
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">#</th>
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Case Number</th>
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Title</th>
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Category</th>
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Client</th>
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Lawyer</th>
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Status</th>
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Filed Date</th>
          <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0; text-align:center;">Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- Row 1 - Won (Green tone) -->
         @foreach ($cases as $case)
        <tr style="background:linear-gradient(135deg, #f0faf0, #e8f5e8); border-radius:12px; box-shadow:0 2px 8px rgba(40,167,69,0.08); transition:0.3s; cursor:default;">
          <td style="padding:0.8rem 1rem; border-radius:12px 0 0 12px; font-weight:600; color:#28a745;">{{$case->id}}</td>
          <td style="padding:0.8rem 1rem; font-weight:700; color:#0b2a4a;">{{$case->case_number}}</td>
          <td style="padding:0.8rem 1rem; color:#1a3f5e; font-weight:500;">
            <i class="fas fa-building" style="color:#28a745; margin-right:6px; font-size:0.7rem;"></i> {{$case->case_title}}
          </td>
          <td style="padding:0.8rem 1rem;">
            <span style="background:#28a745; color:white; padding:0.2rem 0.8rem; border-radius:20px; font-size:0.65rem; font-weight:600; box-shadow:0 2px 6px rgba(40,167,69,0.2);">{{$case->case_category}}</span>
          </td>
          <td style="padding:0.8rem 1rem; color:#2c4a64;">
            <i class="fas fa-user" style="color:#28a745; margin-right:4px; font-size:0.7rem;"></i>{{$case->client_name}}
          </td>
          <td style="padding:0.8rem 1rem; color:#2c4a64;">
            <i class="fas fa-user-tie" style="color:#28a745; margin-right:4px; font-size:0.7rem;"></i>{{$case->lawyer_name}}
          </td>
          <td style="padding:0.8rem 1rem;">
            <span style="background:linear-gradient(135deg, #28a745, #20c997); color:white; padding:0.2rem 1rem; border-radius:20px; font-size:0.65rem; font-weight:700; box-shadow:0 2px 10px rgba(40,167,69,0.25);">
              <i class="fas fa-trophy" style="margin-right:4px; font-size:0.6rem;"></i> {{$case->case_status}}
            </span>
          </td>
          <td style="padding:0.8rem 1rem; color:#5b6f82; font-size:0.8rem;">
            <i class="far fa-calendar-alt" style="color:#28a745; margin-right:4px;"></i> {{$case->case_date}}
          </td>
          <td style="padding:0.8rem 1rem; text-align:center; border-radius:0 12px 12px 0;">
            <a href="{{ route('case.show', ['id' => $case->id]) }}" style="color:#28a745; text-decoration:none; font-weight:600; font-size:0.75rem; background:rgba(40,167,69,0.12); padding:0.25rem 1rem; border-radius:20px; border:1px solid rgba(40,167,69,0.15); display:inline-flex; align-items:center; gap:0.3rem; transition:0.3s;">
              <i class="fas fa-eye" style="font-size:0.65rem;"></i> View
            </a>
          </td>
        </tr>
        @endforeach
        <!-- Row 2 - Active (Gold tone) -->
       
      </tbody>
    </table>
  </div>

  <!-- Table Footer with gradient -->
  <div style="padding:0.5rem 1.2rem; border-top:1px solid #eef2f5; display:flex; justify-content:space-between; align-items:center; background:linear-gradient(135deg, #f8fafc, #f0f4f8); flex-wrap:wrap; gap:0.5rem;">
    <span style="font-size:0.75rem; color:#5b6f82;">
      <i class="fas fa-info-circle" style="color:#f0b841; margin-right:4px;"></i> Showing 1-2 of <strong style="color:#0b2a4a;">2</strong> cases
    </span>
    <div style="display:flex; gap:0.2rem;">
      <a href="#" style="padding:0.2rem 0.7rem; border-radius:6px; background:linear-gradient(135deg, #f0b841, #e0a830); color:#0b2a4a; text-decoration:none; font-size:0.75rem; font-weight:700; box-shadow:0 2px 8px rgba(240,184,65,0.2);">1</a>
    </div>
  </div>

</div>

</div>
<!-- ===== MAIN CONTENT END ===== -->

</body>
</html>
</x-layout.admin_layout>