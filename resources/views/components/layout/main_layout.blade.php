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

   
{{$slot}}

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