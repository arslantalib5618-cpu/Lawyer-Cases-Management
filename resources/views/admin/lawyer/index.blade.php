<x-layout.admin_layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lawyers · Legal Advocate</title>
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
    <h1 style="font-size:1.5rem; font-weight:700; color:#0b2a4a; margin:0;">Lawyers</h1>
    <p style="color:#5b6f82; font-size:0.85rem; margin:0.2rem 0 0;">Manage all lawyers in the firm</p>
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
      <div onclick="toggleProfileMenu()" style="
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
      <div id="profileMenu" style="
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

  <!-- Font Awesome (already used in your markup) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Tiny script to dynamically show the logged-in user (without changing anything else) -->
  <script>
    (function() {
      // Get the current user from sessionStorage, localStorage, or fallback to a default
      // This is a generic approach – you can replace with your own auth logic.
      let currentUser = null;

      // Try to get user from sessionStorage (most common for logged-in user)
      try {
        const stored = sessionStorage.getItem('lawyer_user') || localStorage.getItem('lawyer_user');
        if (stored) {
          const parsed = JSON.parse(stored);
          if (parsed && parsed.name) {
            currentUser = parsed.name;
          } else if (typeof parsed === 'string') {
            currentUser = parsed;
          }
        }
      } catch (e) {
        // ignore
      }

      // If no user found, try to read from a meta tag or a global variable (optional)
      if (!currentUser && typeof window.__USER__ !== 'undefined' && window.__USER__.name) {
        currentUser = window.__USER__.name;
      }

      // Fallback to 'Admin' if nothing is set (preserves original design)
      if (!currentUser) {
        currentUser = 'Admin';
      }

      // Update the profile button text – only the name, nothing else
      const userNameSpan = document.getElementById('dynamic-user-name');
      if (userNameSpan) {
        userNameSpan.textContent = currentUser;
      }
    })();
  </script>

  <!-- ===== STATS CARDS ===== -->
  <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; margin-bottom:1.8rem;">
    <div style="background:white; border-radius:14px; padding:1rem 1.2rem; border:1px solid #e3e9f0; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
      <div style="display:flex; justify-content:space-between; align-items:center;">
        <span style="font-size:0.7rem; text-transform:uppercase; letter-spacing:0.5px; color:#5b6f82; font-weight:600;">Total Lawyers</span>
        <span style="background:#0b2a4a; color:#f0b841; width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:0.8rem;"><i class="fas fa-users"></i></span>
      </div>
      <div style="font-size:1.8rem; font-weight:700; color:#0b2a4a; margin:0.2rem 0 0;">8</div>
      <span style="font-size:0.7rem; color:#5b6f82;">All lawyers in firm</span>
    </div>
    <div style="background:white; border-radius:14px; padding:1rem 1.2rem; border:1px solid #e3e9f0; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
      <div style="display:flex; justify-content:space-between; align-items:center;">
        <span style="font-size:0.7rem; text-transform:uppercase; letter-spacing:0.5px; color:#5b6f82; font-weight:600;">Active</span>
        <span style="background:#f0b841; color:#0b2a4a; width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:0.8rem;"><i class="fas fa-check-circle"></i></span>
      </div>
      <div style="font-size:1.8rem; font-weight:700; color:#0b2a4a; margin:0.2rem 0 0;">6</div>
      <span style="font-size:0.7rem; color:#28a745;">Currently active</span>
    </div>
    <div style="background:white; border-radius:14px; padding:1rem 1.2rem; border:1px solid #e3e9f0; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
      <div style="display:flex; justify-content:space-between; align-items:center;">
        <span style="font-size:0.7rem; text-transform:uppercase; letter-spacing:0.5px; color:#5b6f82; font-weight:600;">Inactive</span>
        <span style="background:#6c757d; color:white; width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:0.8rem;"><i class="fas fa-user-slash"></i></span>
      </div>
      <div style="font-size:1.8rem; font-weight:700; color:#0b2a4a; margin:0.2rem 0 0;">2</div>
      <span style="font-size:0.7rem; color:#6c757d;">Not active</span>
    </div>
    <div style="background:white; border-radius:14px; padding:1rem 1.2rem; border:1px solid #e3e9f0; box-shadow:0 2px 8px rgba(0,0,0,0.02);">
      <div style="display:flex; justify-content:space-between; align-items:center;">
        <span style="font-size:0.7rem; text-transform:uppercase; letter-spacing:0.5px; color:#5b6f82; font-weight:600;">Cases Handled</span>
        <span style="background:#28a745; color:white; width:32px; height:32px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:0.8rem;"><i class="fas fa-gavel"></i></span>
      </div>
      <div style="font-size:1.8rem; font-weight:700; color:#0b2a4a; margin:0.2rem 0 0;">120</div>
      <span style="font-size:0.7rem; color:#28a745;">Total cases</span>
    </div>
  </div>

  <!-- ===== FILTER ROW ===== -->
  <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:0.8rem; margin-bottom:1.2rem;">
    <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
      <span style="background:#0b2a4a; color:white; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; font-weight:600; cursor:default;">All</span>
      <span style="background:#f3f6fa; color:#0b2a4a; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; font-weight:500; border:1px solid #dce3eb; cursor:default;">Active</span>
      <span style="background:#f3f6fa; color:#0b2a4a; padding:0.3rem 1rem; border-radius:30px; font-size:0.75rem; font-weight:500; border:1px solid #dce3eb; cursor:default;">Inactive</span>
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
  <div style="background:white; border-radius:16px; border:1px solid #e3e9f0; overflow:hidden; box-shadow:0 4px 20px rgba(11,42,74,0.06);">

    <!-- Table Header -->
    <div style="padding:0.8rem 1.5rem; border-bottom:1px solid #e3e9f0; display:flex; justify-content:space-between; align-items:center; background:linear-gradient(135deg, #f8fafc 0%, #f0f4f8 100%); flex-wrap:wrap; gap:0.5rem;">
      <div style="display:flex; align-items:center; gap:0.8rem;">
        <span style="font-weight:600; color:#0b2a4a; font-size:0.9rem; display:flex; align-items:center; gap:0.5rem;">
          <i class="fas fa-user-tie" style="color:#f0b841; font-size:0.9rem;"></i> Lawyers
        </span>
        <span style="background:linear-gradient(135deg, #f0b841, #e0a830); color:#0b2a4a; padding:0.1rem 0.8rem; border-radius:30px; font-size:0.65rem; font-weight:700; box-shadow:0 2px 8px rgba(240,184,65,0.25);">8 total</span>
      </div>
      <a href="#" style="background:linear-gradient(135deg, #0b2a4a, #1a3f5e); color:white; padding:0.35rem 1.2rem; border-radius:30px; text-decoration:none; font-weight:600; font-size:0.75rem; display:flex; align-items:center; gap:0.4rem; transition:0.3s; box-shadow:0 2px 10px rgba(11,42,74,0.2);">
        <i class="fas fa-plus-circle"></i> Add Lawyer
      </a>
    </div>

    <!-- Table -->
    <div style="overflow-x:auto; padding:0 0.5rem;">
      <table style="width:100%; border-collapse:separate; border-spacing:0 6px; font-size:0.85rem;">
        <thead>
          <tr style="background:transparent;">
            <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">#</th>
            <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Name</th>
            <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Specialization</th>
            <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Email</th>
            <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Phone</th>
            <th style="padding:0.7rem 1rem; color:#5b6f82; font-weight:600; font-size:0.7rem; text-transform:uppercase; letter-spacing:0.8px; border-bottom:2px solid #e3e9f0;">Status</th>
          </tr>
        </thead>
        <tbody>
          <!-- Row 1 -->
           @foreach($lawyers as $lawyer)
          <tr style="background:linear-gradient(135deg, #f0faf0, #e8f5e8); border-radius:12px; box-shadow:0 2px 8px rgba(40,167,69,0.08); transition:0.3s;">
            <td style="padding:0.8rem 1rem; border-radius:12px 0 0 12px; font-weight:700; color:#28a745;">{{$lawyer->id}}</td>
            <td style="padding:0.8rem 1rem; font-weight:600; color:#0b2a4a;">
              <i class="fas fa-user-tie" style="color:#28a745; margin-right:6px; font-size:0.7rem;"></i> {{$lawyer->name}}
            </td>
            <td style="padding:0.8rem 1rem;">
              <span style="background:#28a745; color:white; padding:0.15rem 0.7rem; border-radius:20px; font-size:0.65rem; font-weight:600;">Civil</span>
            </td>
            <td style="padding:0.8rem 1rem; color:#2c4a64;">
              <i class="fas fa-envelope" style="color:#28a745; margin-right:4px; font-size:0.7rem;"></i> {{$lawyer->email}}
            </td>
            <td style="padding:0.8rem 1rem; color:#2c4a64;">
              <i class="fas fa-phone" style="color:#28a745; margin-right:4px; font-size:0.7rem;"></i> +92 300 1234567
            </td>
            <td style="padding:0.8rem 1rem;">
              <span style="background:linear-gradient(135deg, #28a745, #20c997); color:white; padding:0.15rem 1rem; border-radius:20px; font-size:0.65rem; font-weight:700;">
                <i class="fas fa-check-circle" style="margin-right:4px; font-size:0.6rem;"></i> Active
              </span>
            </td>
            
          </tr>
         @endforeach
          <!-- Row 2 -->
          <tr style="background:linear-gradient(135deg, #fdf8f0, #faf3e8); border-radius:12px; box-shadow:0 2px 8px rgba(240,184,65,0.08); transition:0.3s;">
            <td style="padding:0.8rem 1rem; border-radius:12px 0 0 12px; font-weight:700; color:#f0b841;">02</td>
            <td style="padding:0.8rem 1rem; font-weight:600; color:#0b2a4a;">
              <i class="fas fa-user-tie" style="color:#f0b841; margin-right:6px; font-size:0.7rem;"></i> Sarah Lawyer
            </td>
            <td style="padding:0.8rem 1rem;">
              <span style="background:#f0b841; color:#0b2a4a; padding:0.15rem 0.7rem; border-radius:20px; font-size:0.65rem; font-weight:600;">Family</span>
            </td>
            <td style="padding:0.8rem 1rem; color:#2c4a64;">
              <i class="fas fa-envelope" style="color:#f0b841; margin-right:4px; font-size:0.7rem;"></i> sarah@legal.com
            </td>
            <td style="padding:0.8rem 1rem; color:#2c4a64;">
              <i class="fas fa-phone" style="color:#f0b841; margin-right:4px; font-size:0.7rem;"></i> +92 300 2345678
            </td>
            <td style="padding:0.8rem 1rem;">
              <span style="background:linear-gradient(135deg, #f0b841, #e0a830); color:#0b2a4a; padding:0.15rem 1rem; border-radius:20px; font-size:0.65rem; font-weight:700;">
                <i class="fas fa-check-circle" style="margin-right:4px; font-size:0.6rem;"></i> Active
              </span>
            </td>
            
          </tr>

          <!-- Row 3 -->
          <tr style="background:linear-gradient(135deg, #e8f0fe, #dce6f5); border-radius:12px; box-shadow:0 2px 8px rgba(13,110,253,0.06); transition:0.3s;">
            <td style="padding:0.8rem 1rem; border-radius:12px 0 0 12px; font-weight:700; color:#0d6efd;">03</td>
            <td style="padding:0.8rem 1rem; font-weight:600; color:#0b2a4a;">
              <i class="fas fa-user-tie" style="color:#0d6efd; margin-right:6px; font-size:0.7rem;"></i> David Attorney
            </td>
            <td style="padding:0.8rem 1rem;">
              <span style="background:#0d6efd; color:white; padding:0.15rem 0.7rem; border-radius:20px; font-size:0.65rem; font-weight:600;">Criminal</span>
            </td>
            <td style="padding:0.8rem 1rem; color:#2c4a64;">
              <i class="fas fa-envelope" style="color:#0d6efd; margin-right:4px; font-size:0.7rem;"></i> david@legal.com
            </td>
            <td style="padding:0.8rem 1rem; color:#2c4a64;">
              <i class="fas fa-phone" style="color:#0d6efd; margin-right:4px; font-size:0.7rem;"></i> +92 300 3456789
            </td>
            <td style="padding:0.8rem 1rem;">
              <span style="background:linear-gradient(135deg, #6c757d, #5a6268); color:white; padding:0.15rem 1rem; border-radius:20px; font-size:0.65rem; font-weight:700;">
                <i class="fas fa-user-slash" style="margin-right:4px; font-size:0.6rem;"></i> Inactive
              </span>
            </td>
            
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Table Footer -->
    <div style="padding:0.5rem 1.2rem; border-top:1px solid #eef2f5; display:flex; justify-content:space-between; align-items:center; background:linear-gradient(135deg, #f8fafc, #f0f4f8); flex-wrap:wrap; gap:0.5rem;">
      <span style="font-size:0.75rem; color:#5b6f82;">
        <i class="fas fa-info-circle" style="color:#f0b841; margin-right:4px;"></i> Showing 1-3 of <strong style="color:#0b2a4a;">8</strong> lawyers
      </span>
      <div style="display:flex; gap:0.2rem;">
        <a href="#" style="padding:0.2rem 0.7rem; border-radius:6px; background:linear-gradient(135deg, #f0b841, #e0a830); color:#0b2a4a; text-decoration:none; font-size:0.75rem; font-weight:700; box-shadow:0 2px 8px rgba(240,184,65,0.2);">1</a>
        <a href="#" style="padding:0.2rem 0.7rem; border-radius:6px; border:1px solid #dce3eb; color:#0b2a4a; text-decoration:none; font-size:0.75rem;">2</a>
        <a href="#" style="padding:0.2rem 0.7rem; border-radius:6px; border:1px solid #dce3eb; color:#0b2a4a; text-decoration:none; font-size:0.75rem;">3</a>
      </div>
    </div>

  </div>

</div>
<!-- ===== MAIN CONTENT END ===== -->

</body>
</html>
</x-layout.admin_layout>