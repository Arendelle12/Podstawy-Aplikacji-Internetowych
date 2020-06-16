<?php function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
class Osoba {
    public $login;
    public $haslo;
    public $imieNazwisko;
}

$osoba1 = new Osoba;
$osoba1->login = "adam";
$osoba1->haslo = "adam2020";
$osoba1->imieNazwisko = "Adam Kowalski";

$osoba2 = new Osoba;
$osoba2->login = "agata";
$osoba2->haslo = "2020agata";
$osoba2->imieNazwisko = "Agata Nowak";

function czyZnana($login, $haslo, $osoba)
{
    foreach($osoba as $os){
        if($login == $os->login && $haslo == $os->haslo){
            $_SESSION["zalogowanyImie"] = $os->imieNazwisko;
            $_SESSION["zalogowany"] = 1;
            
        break;
        }else {
            $_SESSION["zalogowany"] = 0;
            
        }
    }
}

function zaladujObraz()
{
    $currentDir = getcwd();
    $uploadDirectory = "/zdjeciaUzytkownikow/";
    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    if($fileName != "" and ($fileType == 'image/png' or $fileType == 'image/jpeg' or $fileType == 'image/JPEG' or $fileType == 'image/PNG'))
    {
        $uploadPath = $currentDir . $uploadDirectory . $fileName;
        if(move_uploaded_file($fileTmpName, $uploadPath))
        {
            echo "Zdjęcie zostało załadowane na serwer FTP";
        }
    }
}
?>