<?php

// This is an error page returning status code 413 with CORS headers present.
// Use this via includes/handle-413.conf.

http_response_code(413);

header("Access-Control-Allow-Headers: origin, content-type, authorization, content-length");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST");
header("Access-Control-Allow-Origin: *");
