<?php

header("Location: https://accounts.google.com/o/oauth2/v2/auth?scope=https://www.googleapis.com/auth/gmail.readonly&redirect_uri=http://domain.com/qauth.php&response_type=token&client_id=INSERT-GOOGLE-CLIENT-ID");

?>