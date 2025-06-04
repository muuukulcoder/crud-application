<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <!-- SweetAlert2 CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<script>
  // Show SweetAlert
  let reloadTriggered = false;

  Swal.fire({
    icon: "info",
    title: "Oops...",
    text: "Invailed user ID or Password",
    timer: 10000,  // alert box will auto-close after 10 seconds
    timerProgressBar: true,
    allowOutsideClick: false,
    allowEscapeKey: false,
    showConfirmButton: true,
  }).then((result) => {
    if (!reloadTriggered) {
      reloadTriggered = true;
      location.reload();
      location.replace('login.php');
    }
  });

  // Extra safety in case timer runs out but user doesn't click
  setTimeout(() => {
    if (!reloadTriggered) {
      reloadTriggered = true;
      location.reload();
      location.replace('addnew.php');
    }
  }, 5000);
</script>


</body>
</html>
