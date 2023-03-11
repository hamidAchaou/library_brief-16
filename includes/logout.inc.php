<?php
session_start();
session_unset();
session_destroy();

header('location: ../loginSignUp.php?error=none');