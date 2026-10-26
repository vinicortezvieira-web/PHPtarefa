<?php
$host = "localhost";
$banco = "sistema_login";
$usuario = "root";
$senha = "";

try {
    $pdo = new PDO (
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch (PDOException $e) {
    error_log($e->getMessage());
    exit("Não foi possível conectar ao banco de dados");
}
?>

teste conexão;
<?php
require_once "config.php";
echo "Conexão realizada com sucesso!";
?>
