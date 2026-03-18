<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = $_POST['name'] ?? '';
    $phone      = $_POST['phone'] ?? '';
    $email      = $_POST['email'] ?? '';
    $date       = $_POST['date'] ?? '';
    $department = $_POST['department'] ?? '';
    $message    = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'yimoqjwaksrpchky'; // Use Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Fix SSL verification error
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            )
        );
       
        // Recipients
        $mail->setFrom('manimalladi05@gmail.com', 'Vision Dental Guntur');
        $mail->addAddress('manimalladi05@gmail.com', 'Vision Dental Guntur');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'New Appointment Form Submission';
        $mail->Body = "
            <h2>New Appointment</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Date:</strong> {$date}</p>
            <p><strong>Department:</strong> {$department}</p>
            <p><strong>Message:</strong> {$message}</p>
        ";

        $mail->send();

        // ✅ Popup after success
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
                        background: black;
                        padding: 30px;
                        width: 380px;
                        text-align: center;
                        border-radius: 12px;
                        animation: fadeIn 0.4s ease;
                    ">
                        <img src="./assets/img/logo.png" style="width: 100px; margin-bottom: 15px;">
                        <h3 style="margin-bottom:10px; color:#ffffff;">
                           Your appointment is confirmed
                        </h3>
                        <p style="font-size:16px; color:#ffffff;">
                            Thank you for booking an appointment at<br>
                            <strong>V&V Salon</strong>
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
    echo 'Access Denied';
}
?>
