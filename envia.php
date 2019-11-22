<!DOCTYPE html>
    <html lang = "pt-br">
       <head>
           <meta charset="utf-8"/>
           <title>Enviando</title>

       </head>
<body>
        
<?PHP

//form1

if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["telefone"]) && isset($_POST["valores"]) && isset($_POST["mensagem"])) //&& isset([""]))
{
    
$nome=$_POST["nome"];
$email=$_POST["email"];
$telefone=$_POST["telefone"];
$valores=$_POST["valores"];
$mensagem=$_POST["mensagem"];

	//if($form == "from_form1")

$headers= "MIME-VERSION: 1.0 \r\n";
$headers .= "Content-type:text/html;charset=UTF-8 \r\n";
$headers .= "Content-Transfer-Encoding: base64 \r\n";
//$headers .= "From: $nome: visitante do INASIM" . "\r\n";

$assunto= "Mensagem de: $nome";
//$para="dineybehmg15@gmail.com";

$mensagem1 = "<h3>Dados do usuário doador</h3>
Nome completo: $nome;<br><br>
E-mail: $email;<br><br>
Telefone: $telefone;<br><br>
Valor pretendido para doação: $valores;<br><br>
$mensagem<br><br>
Atenciosamente $nome.<br><br>
";

mail("dineybehmg15@gmail.com", $assunto, chunk_split(base64_encode($mensagem1)), $headers);

echo "<script type='application/javascript'>

//setInterval(function nome(){...},intnum);

alert('Mensagem enviada com sucesso! Clique em OK para continuar.');

setTimeout(function open()
{
window.location.href='index.php';
},1000);

</script>";
    
}else if (empty($nome) && empty($email) && empty($telefone) && empty($valores) && empty($mensagem))	//&& empty($var6) && empty($var7) && empty($var8) && empty($var8) && empty($var8))
{

echo "<script type='application/javascript'>

//setInterval(function nome(){...},intnum);

alert('Formulário não inicializado! Clique em OK para continuar.');

setTimeout(function open()
{
window.location.href='index.php';
},1000);

</script>";
}

/*else if($form == "from_form2")

{
$mensagem1 = "";

mail($para, $assunto, chunk_split(base64_encode($mensagem1)), $headers);
echo “<center><h3>Mensagem enviada com sucesso!</h3></center>”;

}*/

?>
    </body>
</html>