// Configuración de conexión a la base de datos
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'AGENCIA';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->exec("set names utf8");
    
    echo "Conectado a la base de datos de AGENCIA";

} catch (PDOException $e) {
    echo "Error al conectar: " . $e->getMessage();
}

$conn = null;
?>
