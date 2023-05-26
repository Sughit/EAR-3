<?php
session_start();

// Conectați-vă la baza de date
$host = 'nume_host';
$nume_utilizator = 'nume_utilizator';
$parola = 'parola';
$nume_baza_de_date = 'nume_baza_de_date';

$conn = new mysqli($host, $nume_utilizator, $parola, $nume_baza_de_date);

// Verificați conexiunea la baza de date
if ($conn->connect_error) {
  die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

// Preiați datele trimise prin metoda POST
$titlu = $_POST['titlu'];
$continut = $_POST['continut'];

// Efectuați inserarea datelor în baza de date
$sql = "INSERT INTO nume_tabela (titlu, continut) VALUES ('$titlu', '$continut')";

if ($conn->query($sql) === TRUE) {
  // Setăm o variabilă de sesiune pentru a afișa mesajul de confirmare în pagina principală
  $_SESSION['postare_confirmata'] = true;
} else {
  echo "Eroare la inserarea datelor: " . $conn->error;
}

// Închideți conexiunea la baza de date
$conn->close();

header('Location: index.php');
exit;
?>
