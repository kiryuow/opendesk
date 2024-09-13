<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // メールの内容
    $to = "inuifantasista@gmail.com";
    $subject = "お問い合わせフォームより";
    $body = "名前: $name\nメールアドレス: $email\n電話番号: $phone\nお問い合わせ内容:\n$message";

    // メールのヘッダー
    $headers = "From: $email";

    // メールを送信
    if (mail($to, $subject, $body, $headers)) {
        echo "お問い合わせありがとうございます。メールが送信されました。";
    } else {
        echo "メール送信に失敗しました。もう一度お試しください。";
    }
}
?>
