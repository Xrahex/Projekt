<?php
@$imie=$_POST["imie"];
@$nazwisko=$_POST["nazwisko"];
@$pesel=$_POST["pesel"];
@$miejscowosc=$_POST["miejscowosc"];
@$kod_pocztowy=$_POST["kod_pocztowy"];
@$ulica=$_POST["ulica"];
@$nr_domu=$_POST["nr_domu"];
@$nr_telefonu=$_POST["nr_telefonu"];
@$email=$_POST["email"];
function rand_string( $length ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);
}

require_once "db.php";
$conn=mysqli_connect($host,$user,$pass,$db) or die("Nie udało się połączyć z baza danych");
mysqli_set_charset($conn,"utf8");
$login=rand_string(8);
$haslo=rand_string(8);
$q="Select * from users where login = '$login'";
$result=mysqli_query($conn,$q);
$ile=mysqli_num_rows($result);
if($ile!=0)
{
  $login=rand_string(8);
}
$q1="INSERT INTO users(login,haslo,email,typ,czy_zalogowany) VALUES ('$login','$haslo','$email',3,0)";
$q2="INSERT INTO pacjenci(login,imie,nazwisko,pesel,miejscowosc,kod_pocztowy,ulica,nr_domu,nr_telefonu) VALUES ('$login','$imie','$nazwisko','$pesel','$miejscowosc','$kod_pocztowy','$ulica','$nr_domu','$nr_telefonu')";
$result1=mysqli_query($conn,$q1);
$result2=mysqli_query($conn,$q2);


require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->Host = "smtp.gmail.com"; /* Zależne od hostingu poczty*/
$mail->SMTPDebug = 0;
$mail->Port = 465 ; /* Zależne od hostingu poczty, czasem 587 */
$mail->SMTPSecure = 'ssl'; /* Jeżeli ma być aktywne szyfrowanie SSL */
$mail->SMTPAuth = true;
$mail->IsHTML(true);
$mail->Username = "klinikapixel@gmail.com"; /* login do skrzynki email często adres*/
$mail->Password = "Benek123"; /* Hasło do poczty */
$mail->setFrom('klinikapixel@gmail.com', 'Klinika-Pixel'); /* adres e-mail i nazwa nadawcy */
$mail->AddAddress("$email"); /* adres lub adresy odbiorców */
$mail->Subject = "Zarejestrowano konto pacjenta"; /* Tytuł wiadomości */
$mail->Body = "Witaj $imie,
<br><br>
właśnie zostałeś zarejestrowany w naszej klinice przez swojego lekarza.
<br>
Oto dane dostępowe do twojego internetowego konta pacjenta:
<br>
Login : $login<br>
Hasło : $haslo
<br>
Zalogować możesz się pod adresem : https://klinika-pixel.pl/logowanie.php
";

if(!$mail->Send()) {
echo "Błąd wysyłania e-maila: " . $mail->ErrorInfo;
} else {
echo "Wiadomość została wysłana!";
}







?>
