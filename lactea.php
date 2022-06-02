 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "planetas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Conexão falhou " . $conn->connect_error);
}
echo "Conectado com sucesso";

// Create database
$sql = "CREATE DATABASE planetas";
if ($conn->query($sql) === TRUE) {
  echo " Banco de dados criado com sucesso";
} else {
  echo "Erro ao criar tabela " . $conn->error;
}


$sql = "CREATE TABLE Plutao (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    planeta VARCHAR(30) NOT NULL,
    sim  VARCHAR(30) NOT NULL,
    não VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Tabela Plutão criada com sucesso";
    } else {
      echo "Erro ao criar tabela " . $conn->error;
    }

$conn->close();
?>
