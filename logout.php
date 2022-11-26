<?php

session_start();
session_destroy();
echo '<script>alert("Logged out!");</script>';
echo '<script>
setTimeout(()=>
window.location.href = "index.php",100 );
</script>';