<?php
/* -----------------------------------------------------
Simple PHP script for Sending Telegram Bot Message
~ Iky | https://www.wadagizig.com
------------------------------------------------------ */

function sendMessage($telegram_id, $message_text, $secret_token) {
    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
/*----------------------
only basic POST method :
-----------------------*/
$koneksi = new mysqli("localhost","root","","kpcoba");
$chat_id_pelanggan = $_POST ['chat_id_pelanggan'];
$pesan = $_POST ['pesan'];
$koneksi->query("INSERT INTO chat_histori 
        (chat_id_pelanggan,pesan_histori)
        VALUES('$chat_id_pelanggan','$pesan')");
/*--------------------------------
Isi TOKEN dibawah ini: 
--------------------------------*/
$secret_token = "858796733:AAEFyqkSc9Dw5vgOweKrmFzkSD4VppfFnzI";
sendMessage($chat_id_pelanggan, $pesan, $secret_token);

echo "<script>alert('Pesan berhasil terkirim!'); window.location.href = 'index.php?halaman=coba';</script>";
?>

