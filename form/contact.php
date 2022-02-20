<?php
$notify = '';
$notifyClass = '';

if(isset($_POST['submit'])){
    // Membuat variabl untuk menerima data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Cek apakah ada data yang belum diisi
    if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $notify = 'Email Anda salah. Silakan ketikan alamat email yang benar.';
            $notifyClass = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'mailmetechso@gmail.com';
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2>Via Form Kontak Website</h2>
                <h4>Nama</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Pesan</h4><p>'.$message.'</p>';

            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Kirim email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $notify = 'Pesan Anda sudah terkirim dengan sukses !';
                $notifyClass = 'succdiv';
            }else{
                $notify = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $notifyClass = 'errordiv';
            }
        }
    }else{
        $notify = 'Harap mengisi semua field data';
        $notifyClass = 'errordiv';
    }
}
?>