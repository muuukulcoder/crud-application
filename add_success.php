<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>
<script>
let reloadTriggered = false;

Swal.fire({
    title: "New Record Add Successfully...",
    icon: "success",
    timer: 10000,                 // Auto close after 5 seconds
    timerProgressBar: true,
    showConfirmButton: true,     // Show "OK" button
    allowOutsideClick: false,
    allowEscapeKey: false
}).then((result) => {
    if (!reloadTriggered) {
        reloadTriggered = true;
        // Action: reload or redirect
        location.reload(); // or use: window.location.href = "dashboard.html";
        location.replace('index.php');
    }
});

// Fallback to ensure reload if auto-close triggers
setTimeout(() => {
    if (!reloadTriggered) {
        reloadTriggered = true;
        location.reload();
        location.replace('index.php');
    }
}, 5000);
</script>

</body>

</html>