<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Contact Form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $contactname    = $_POST['contactname'] ?? '';
    $contactemail   = $_POST['contactemail'] ?? '';
    $contactdate   = $_POST['contactdate'] ?? '';
    
    $department = $_POST['department'] ?? '';
    $contactnumber  = $_POST['contactnumber'] ?? '';
    $meassage = $_POST['meassage'] ?? '';

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        // Gmail App Password Required
        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'yimoqjwaksrpchky'; 

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // FIX SSL verification error
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            )
        );

        // Recipients
        $mail->setFrom('manimalladi05@gmail.com', 'V&V SALON');
        $mail->addAddress('manimalladi05@gmail.com', 'V&V SALON');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form';

        $mail->Body = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$contactname}</p>
            <p><strong>Email:</strong> {$contactemail}</p>
            <p><strong>Department:</strong> {$department}</p>
            <p><strong>DATE:</strong> {$contactdate}</p>
            <p><strong>Phone:</strong> {$contactnumber}</p>
            <p><strong>Meassage:</strong> {$meassage}</p>
        ";

        // Send Email
        $mail->send();

        // SUCCESS POPUP WITH LOGO
        echo '
        <script>
            setTimeout(function(){
                const popup = document.createElement("div");
                popup.style.position = "fixed";
                popup.style.top = "0";
                popup.style.left = "0";
                popup.style.width = "100%";
                popup.style.height = "100%";
                popup.style.background = "rgba(0,0,0,0.65)";
                popup.style.display = "flex";
                popup.style.justifyContent = "center";
                popup.style.alignItems = "center";
                popup.style.zIndex = "99999";

                popup.innerHTML = `
                    <div style="
                        background: white;
                        padding: 30px;
                        width: 380px;
                        text-align: center;
                        border-radius: 12px;
                        
                        animation: fadeIn 0.4s ease;
                    ">
                        <img src="assets/img/vision/large_icon.png" style="width: 100px; margin-bottom: 15px;">
                        <h3 style="margin-bottom:10px; color:#333;">
                            Your appointment is confirmed
                        </h3>
                        <p style="font-size:16px; color:#444; ">
                            Thank you for reaching<br>
                            <strong style="margin-top:10px;">V&V SALON</strong>
                        </p>
                        <button onclick="closePopup()" style="
                            margin-top:20px;
                            padding:10px 25px;
                            background:#007bff;
                            border:none;
                            color:white;
                            border-radius:6px;
                            cursor:pointer;
                        ">OK</button>
                    </div>
                `;

                document.body.appendChild(popup);

                window.closePopup = function(){
                    document.body.removeChild(popup);
                    window.location.href = "index.php";
                }
            }, 200);
        </script>
        ';

    } catch (Exception $e) {
        echo "Message could not be sent.<br>Mailer Error: {$mail->ErrorInfo}";
    }

} else {
    echo "Access Denied";
}
?>
