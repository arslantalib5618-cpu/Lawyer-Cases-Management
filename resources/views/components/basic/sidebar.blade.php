<!-- ===== SIDEBAR WITH ACTIVE STATE DETECTION ===== -->
<div style="width:240px; background:#0b2a4a; padding:2rem 1.2rem; flex-shrink:0; min-height:100vh; position:sticky; top:0; height:100vh; overflow-y:auto;">

  <div style="display:flex; align-items:center; gap:0.8rem; padding-bottom:1.5rem; border-bottom:1px solid rgba(255,255,255,0.08); margin-bottom:1.5rem;">
    <div style="background:#f0b841; color:#0b2a4a; width:38px; height:38px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.1rem;">
      <i class="fas fa-scale-balanced"></i>
    </div>
    <div>
      <div style="color:white; font-size:0.95rem; font-weight:700;">Legal Advocate</div>
      <div style="color:#8aaac0; font-size:0.55rem; text-transform:uppercase; letter-spacing:1px;">Admin</div>
    </div>
  </div>

  <div style="display:flex; flex-direction:column; gap:0.2rem;">
    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}" 
       style="display:flex; align-items:center; gap:0.8rem; padding:0.65rem 0.9rem; border-radius:10px; 
              {{ request()->routeIs('dashboard') ? 'background:rgba(240,184,65,0.15); color:#f0b841; font-weight:600;' : 'color:#8aaac0; font-weight:500;' }} 
              text-decoration:none; font-size:0.85rem; transition:0.2s;">
      <i class="fas fa-th-large" style="width:18px; text-align:center;"></i> Dashboard
    </a>

    <!-- All Cases -->
    <a href="{{ route('case.index') }}" 
       style="display:flex; align-items:center; gap:0.8rem; padding:0.65rem 0.9rem; border-radius:10px; 
              {{ request()->routeIs('case.index') ? 'background:rgba(240,184,65,0.15); color:#f0b841; font-weight:600;' : 'color:#8aaac0; font-weight:500;' }} 
              text-decoration:none; font-size:0.85rem; transition:0.2s;">
      <i class="fas fa-folder-open" style="width:18px; text-align:center;"></i> All Cases
    </a>

    <!-- My Cases -->
    <a href="{{ route('myCases') }}" 
       style="display:flex; align-items:center; gap:0.8rem; padding:0.65rem 0.9rem; border-radius:10px; 
              {{ request()->routeIs('myCases') ? 'background:rgba(240,184,65,0.15); color:#f0b841; font-weight:600;' : 'color:#8aaac0; font-weight:500;' }} 
              text-decoration:none; font-size:0.85rem; transition:0.2s;">
      <i class="fas fa-gavel" style="width:18px; text-align:center;"></i> My Cases
    </a>

    <!-- Lawyers -->
    <a href="{{ route('lawyer.index') }}" 
       style="display:flex; align-items:center; gap:0.8rem; padding:0.65rem 0.9rem; border-radius:10px; 
              {{ request()->routeIs('lawyer.index') ? 'background:rgba(240,184,65,0.15); color:#f0b841; font-weight:600;' : 'color:#8aaac0; font-weight:500;' }} 
              text-decoration:none; font-size:0.85rem; transition:0.2s;">
      <i class="fas fa-user-tie" style="width:18px; text-align:center;"></i> Lawyers
    </a>
  </div>

  <div style="margin-top:2rem; padding-top:1rem; border-top:1px solid rgba(255,255,255,0.08);">
    
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" style="display:flex; align-items:center; gap:0.8rem; padding:0.65rem 0.9rem; border-radius:10px; color:#e74c5e; text-decoration:none; font-weight:500; font-size:0.85rem; background:rgba(231,76,94,0.08); border:none; cursor:pointer; width:100%;">
            <i class="fas fa-sign-out-alt" style="width:18px; text-align:center;"></i>
            Logout
        </button>
    </form>

</div>
</div>