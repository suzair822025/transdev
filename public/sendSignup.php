<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submitHeroReg'])) {
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $allowedFileTypes = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'];
    $maxFileSize = 5 * 1024 * 1024; // 5MB in bytes
    $uploadOk = false;
    $uploadedFilePath = '';
    $fileError = '';

    // Handle file upload
    if (isset($_FILES['document']) && $_FILES['document']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['document']['tmp_name'];
        $fileName = $_FILES['document']['name'];
        $fileSize = $_FILES['document']['size'];
        $fileType = $_FILES['document']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        if ($fileSize > $maxFileSize) {
            $fileError = 'File size exceeds the maximum allowed size of 2MB.';
        } elseif (!in_array($fileExtension, $allowedFileTypes)) {
            $fileError = 'Invalid file type. Allowed types: pdf, doc, docx, jpg, jpeg, png.';
        } else {
            $newFileName = uniqid() . '.' . $fileExtension;
            $uploadFileDir = __DIR__ . '/uploads/';
            if (!file_exists($uploadFileDir)) {
                mkdir($uploadFileDir, 0777, true);
            }
            $destPath = $uploadFileDir . $newFileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $uploadOk = true;
                $uploadedFilePath = $destPath;
            } else {
                $fileError = 'Error moving the uploaded file.';
            }
        }
    }

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0; 
        $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp.titan.email';
        $mail->Username = 'sales@translationwindows.com';
        $mail->Password = 'Trans$230';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('sales@translationwindows.com', 'Translationwindows');
        $mail->addAddress('sales@translationwindows.com', 'Translationwindows');
        $mail->addReplyTo($email, $fullname);

        if ($uploadOk && $uploadedFilePath !== '') {
            $mail->addAttachment($uploadedFilePath);
        }

        $mail->isHTML(true);
        $mail->Subject = 'New Message - Translationwindows Contact Form';

        $bodyContent = "<div>Hello, you got a new enquiry</div>
            <div><strong>Full Name:</strong> {$fullname}</div>
            <div><strong>Email:</strong> {$email}</div>
            <div><strong>Phone:</strong> {$phone}</div>
            <div><strong>Message:</strong> {$message}</div>";

        if (!$uploadOk && $fileError) {
            $bodyContent .= "<div><strong>File Error:</strong> {$fileError}</div>";
        }

        $mail->Body = $bodyContent;

        if ($mail->send()) {
            $_SESSION['status'] = "Thank you, contact us - Team Transinformatic";
        } else {
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } catch (Exception $e) {
        $_SESSION['status'] = "Mailer Exception: {$mail->ErrorInfo}";
    } finally {
        // Delete the uploaded file if it exists
        if ($uploadOk && file_exists($uploadedFilePath)) {
            unlink($uploadedFilePath);
        }
    }

    header("Location: {$_SERVER["HTTP_REFERER"]}");
    exit(0);
} else {
    header('Location: index.php');
    exit(0);
}
?>