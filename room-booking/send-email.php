<?php

//----------------------Company Information---------------------

require_once "Mail.php";

date_default_timezone_set('Asia/Colombo');
$todayis = date("l, F j, Y, g:i a");
$site_link = "https://" . $_SERVER['HTTP_HOST'];

//----------------------- DISPLAY STRINGS ---------------------
$comany_name = "Romaya Villas";
$website_name = "www.romayavillas.com";
$comConNumber = "(+94) 76 617 9877";
$comEmail = "romayavillas@gmail.com";
$comOwner = "Suranga - Romaya Villas";
$mailTitle = "Room Booking";

//----------------------- LOGO ---------------------------------

//$logo = $site_link . '/contact-form/img/logo.png';
$logo = 'https://ci4.googleusercontent.com/proxy/lz0tSijRTHwJ3I7PQ1iXA67lYFfULG0evRbR_St785VeiABNukQPJl-JGBcLKTkZz1q4pG6g25P1uxTW4dYkOznHHNV3f-zB=s0-d-e1-ft#http://romaya.galle.website/room-booking/img/logo.png';


// ----------------------- POST VARIABLES --------------------------
$visitor_name = $_POST['visitor_name'];
$visitor_email = $_POST['visitor_email'];
$visitor_phone = $_POST['visitor_phone'];
$start_date = $_POST['start_date'];
$no_of_date = $_POST['no_of_date'];
$room = $_POST['room'];
$message = $_POST['message'];
//$visitor_name = $_POST['visitor_name'];
//$visitor_email = $_POST['visitor_email'];
//$visitor_phone = $_POST['visitor_phone'];
//$visitor_country = $_POST['visitor_country'];
//$visitor_tour = $_POST['visitor_tour'];
//$visitor_airport = $_POST['visitor_airport'];
//$visitor_check_in = $_POST['visitor_check_in'];
//$visitor_check_out = $_POST['visitor_check_out'];
//$visitor_adult = $_POST['visitor_adult'];
//$visitor_child = $_POST['visitor_child'];





//---------------------- SERVER WEBMAIL LOGIN ------------------------
$host = "premium52.web-hosting.com";
$username = "info@romayavillas.com";
$password = "nsvmvk?fECbs";

//------------------------ MAIL ESSENTIALS --------------------------------
$webmail = "info@romayavillas.com";
$visitorSubject = "Room Booking Inquery " . $visitor_name . " - Romaya Villas";
$companySubject = "New Room Booking Inquiry - " . $visitor_name;

//----------------------CAPTCHACODE---------------------

session_start();

$response = array();

if ($_SESSION['CAPTCHACODE'] != $_POST['captchacode']) {

    $response['status'] = 'incorrect';

    $response['msg'] = 'Security Code is invalid';

    echo json_encode($response);

    exit();
}
include("mail-template.php");

$visitorHeaders = array('MIME-Version' => '1.0', 'Content-Type' => "text/html; charset=ISO-8859-1", 'From' => $webmail,
    'To' => $visitor_email,
    'Reply-To' => $comEmail,
    'Subject' => $visitorSubject);

$companyHeaders = array('MIME-Version' => '1.0', 'Content-Type' => "text/html; charset=ISO-8859-1", 'From' => $webmail,
    'To' => $webmail,
    'Reply-To' => $visitor_email,
    'Subject' => $companySubject);


$smtp = Mail::factory('smtp', array('host' => $host,
            'auth' => true,
            'username' => $username,
            'password' => $password));

$visitorMail = $smtp->send($visitor_email, $visitorHeaders, $visitor_message);
$companyMail = $smtp->send($webmail, $companyHeaders, $company_message);

if (PEAR::isError($visitorMail && $companyMail)) {
    $response['status'] = 'correct';
    $response['msg'] = $mail->getMessage();
//"Your message has not been sent"
    echo json_encode($response);
    exit();
} else {
    $response['status'] = 'correct';
    $response['msg'] = "Your message has been sent successfully";
//"Your message has been sent successfully"
    echo json_encode($response);
    exit();
}