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
{{$slot}}
<!-- ===== MAIN CONTENT END ===== -->

</body>
</html>