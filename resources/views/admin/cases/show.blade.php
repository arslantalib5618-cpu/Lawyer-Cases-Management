


<div style="background:linear-gradient(135deg, #0b2a4a, #113556); padding:1.2rem 2rem; display:flex; flex-wrap:wrap; justify-content:space-between; align-items:center; border-bottom:3px solid #f0b841;">
        <div style="display:flex; align-items:center; gap:1.2rem; flex-wrap:wrap;">
          <span style="color:#f0b841; font-weight:700; font-size:1.1rem;"><i class="fas fa-gavel" style="margin-right:8px;"></i>{{$lawcase->case_number}}</span>
          <span style="background:rgba(240,184,65,0.15); color:#f0b841; padding:0.2rem 1.2rem; border-radius:30px; font-size:0.8rem; border:1px solid rgba(240,184,65,0.2);"><i class="fas fa-tag" style="margin-right:6px;"></i>{{$lawcase->case_category}}</span>
          <span style="background:#28a745; color:white; padding:0.2rem 1.2rem; border-radius:30px; font-size:0.75rem; font-weight:600;"><i class="fas fa-check-circle" style="margin-right:4px;"></i>{{$lawcase->case_status}}</span>
        </div>
        <span style="color:#a0bed6; font-size:0.85rem;"><i class="far fa-calendar-alt" style="margin-right:6px; color:#f0b841;"></i>{{$lawcase->case_date}}</span>
      </div>

      <!-- Body -->
      <div style="padding:1.8rem 2rem;">
        <!-- Title -->
        <h2 style="font-size:1.8rem; font-weight:700; color:#0b2a4a; margin:0 0 1.2rem 0; letter-spacing:-0.3px;">{{$lawcase->case_title}}</h2>

        <!-- Info Grid -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem 2rem; margin-bottom:1.5rem; background:#f3f6fa; padding:1.2rem 1.5rem; border-radius:16px; border:1px solid #dce3eb;">
          <div><strong style="color:#0b2a4a;">Case Number</strong><br><span style="color:#3d5a72;">{{$lawcase->case_number}}</span></div>
          <div><strong style="color:#0b2a4a;">Status</strong><br><span style="color:#28a745; font-weight:600;">{{$lawcase->case_status}}</span></div>
          <div><strong style="color:#0b2a4a;">Lawyer</strong><br><span style="color:#3d5a72;">{{$lawcase->lawyer_name}}</span></div>
          <div><strong style="color:#0b2a4a;">Client Name</strong><br><span style="color:#3d5a72;">{{$lawcase->client_name}}</span></div>
          <div><strong style="color:#0b2a4a;">Court</strong><br><span style="color:#3d5a72;">{{$lawcase->court_name}}</span></div>
          <div><strong style="color:#0b2a4a;">Category</strong><br><span style="color:#3d5a72;">{{$lawcase->case_category}}</span></div>
        </div>

        <!-- Description -->
        <div style="margin-bottom:0.5rem;">
          <h4 style="color:#0b2a4a; font-size:1rem; margin:0 0 0.5rem 0; display:flex; align-items:center; gap:0.5rem;"><i class="fas fa-align-left" style="color:#f0b841;"></i> Case Description</h4>
          <p style="color:#2c4a64; font-size:0.95rem; line-height:1.7; margin:0;">
              {{$lawcase->case_description}}          </p>
        </div>
      </div>
      </div>

   
