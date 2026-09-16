@php
$activeStyle = 'color:#0b2a4a; border-bottom:3px solid #f0b841;';
$defaultStyle = 'text-decoration:none; color:#1e3347; font-weight:500; font-size:0.95rem; padding-bottom:6px; border-bottom:3px solid transparent; transition:all 0.3s ease;';
@endphp

<div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; border-bottom:2px solid #dce3eb; padding-bottom:1.2rem; margin-bottom:2.4rem;">


<div style="display:flex; align-items:center; gap:1rem;">
    <div style="background:#0b2a4a; color:#f0b841; width:52px; height:52px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.8rem; box-shadow:0 8px 18px rgba(11,42,74,0.15);">
        <i class="fas fa-scale-balanced"></i>
    </div>

    <div>
        <h1 style="font-size:2rem; font-weight:700; letter-spacing:-0.5px; color:#0b2a4a; margin:0; line-height:1.1;">
            Legal Advocate
        </h1>
        <span style="font-size:0.75rem; color:#5b6f82; letter-spacing:2.5px; font-weight:500; text-transform:uppercase;">
            Law Firm
        </span>
    </div>
</div>

<div style="display:flex; gap:2.2rem; flex-wrap:wrap; margin-top:0.5rem;">

    <a href="{{ route('home') }}"
       style="{{ $defaultStyle }} {{ request()->routeIs('home') ? $activeStyle : '' }}">
        <i class="fas fa-house" style="margin-right:6px; color:#f0b841;"></i>
        Home
    </a>

    <a href="{{ route('aboutLawyer') }}"
       style="{{ $defaultStyle }} {{ request()->routeIs('aboutLawyer') ? $activeStyle : '' }}">
        <i class="fas fa-user-tie" style="margin-right:6px; color:#f0b841;"></i>
        About Lawyer
    </a>

    <a href="{{ route('case') }}"
       style="{{ $defaultStyle }}  {{ request()->routeIs('case') ? $activeStyle : '' }}">
        <i class="fas fa-briefcase" style="margin-right:6px; color:#f0b841;"></i>
        Cases
    </a>

    <a href="{{ route('contact') }}"
       style="{{ $defaultStyle }} {{ request()->routeIs('contact') ? $activeStyle : '' }}">
        <i class="fas fa-phone" style="margin-right:6px; color:#f0b841;"></i>
        Contact Us
    </a>

</div>


</div>
