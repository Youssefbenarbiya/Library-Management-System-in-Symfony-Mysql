<?php
namespace App\Classe;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
class Mail
{
    private $mailer;
// private $api_key="8558b52d87339008f734686f90f86d61";
// private $api_key_secret="de5f4f3d53e5d498893ff1547a0271a8";
public function __construct( private readonly mailerInterface $Mailer)
{  
    $this->mailer = $Mailer;
}
/*{
(new Dotenv())->bootEnv(dirname(__DIR__) . '/../.env');
$this->api_key = $_ENV['API_KEY'];
$this->api_key_secret = $_ENV['API_KEY_SECRET'];
} */
public function send($to_email, $to_name, $subject, $content)
{

// $mj = new Client($this->api_key, $this->api_key_secret, true);
$email = (new Email())
->from('Libarian@gmail.com')
->to($to_email)
->subject($subject)
->html($content);
$this->mailer->send($email);

// $body = [
// 'Messages' => [
// [
// 'From' => [
// 'Email' => "fidelisor.123@gmail.com",
// 'Name' => "hacen aidi"
// ],
// 'To' => [
// [
// 'Email' => $to_email,
// 'Name' => $to_name
// ]
// ],
// 'TemplateID' => 5907499,
// 'TemplateLanguage' => true,
// 'Subject' => $subject,
// 'Variables' => [
// 'content' => $content
// ]
// ]
// ]
// ];
// $response = $mj->post(Resources::$Email, ['body' => $body]);
// $response->success();

// return $response;
}
}