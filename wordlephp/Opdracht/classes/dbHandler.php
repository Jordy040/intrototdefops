<?php
final class dbHandler
{
    private $dataSource = ""; //Hier dient je connection string te komen mysql:dbname=;host=;
    private $username = "";
    private $password = "";

    public function selectAll()
    {
        try{
            //Maak een nieuwe PDO
            //Maak gebruik van de prepare functie van PDO om alle woorden op te halen met bijbehorende categorie (Join)
            //Voer het statement uit
            //Return een associatieve array met alle opgehaalde data.
        }
        catch(PDOException $exception){
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
        }
    }

    public function selectCategories()
    {
        try{
            //Hier doe je grootendeels hetzelfde als bij SelectAll, echter selecteer je alleen alles uit de category tabel.
        }
        catch(PDOException $exception){
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
        }
    }

    public function createWord($text, $categoryId)
    {
        try{
            //Maak een nieuwe PDO
            //Maak gebruik van de prepare functie van PDO om een insert into uit te voeren op de tabel word.
            //De kolommen die gevuld moeten worden zijn text en categoryId
            //Gebruik binding om de parameters aan de juiste kolommen te koppellen
            //Voer het statement uit
            //Return een associatieve array met alle opgehaalde data.
            //Voer de query uit en return true omdat alles goed is gegaan
        }
        catch(PDOException $exception){
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
        }
    }

    public function selectOne($wordId){
        try{
            //Maak een nieuwe PDO
            //Maak gebruik van de prepare functie van PDO om een select uit te voeren van 1 woord. Degene met het opgegeven Id
            //Let op dat de categorie wederom gejoined moet worden, en de wordId middels een parameter moet worden gekoppeld.
            //Voer het statement uit
            //maak een variabele $rows met een associatieve array met alle opgehaalde data.
            //we willen enkel 1 resultaat ophalen dus zorg dat de eerste regel van de array wordt gereturned.
        }
        catch(PDOException $exception){
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
        }
    }

    public function updateWord($wordId, $text, $category){
        try{
            //Maak een nieuwe PDO
            //Maak gebruik van de prepare functie van PDO om een update uit te voeren van 1 woord. Degene met het opgegeven Id
            //Let op dat zowel de velden die je wilt wijzigen (categorie en text) met parameters gekoppeld moeten worden
            //De wordId gebruik je voor een WHERE statement.
            //bind alle 3 je parameters
            //voer de query uit en return true.
        }
        catch(PDOException $exception){
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
        }
    }

    public function deleteWord($id){
        try{
            //Maak een nieuwe PDO
            //Maak gebruik van de prepare functie van PDO om een delete uit te voeren van 1 woord. Degene met het opgegeven Id
            //De wordId gebruik je voor een WHERE statement.
            //bind je parameter
            //voer de query uit en return true.
        }
        catch(PDOException $e){
            //Indien er iets fout gaat kun je hier de exception var_dumpen om te achterhalen wat het probleem is.
            //Return false zodat het script waar deze functie uitgevoerd wordt ook weet dat het misgegaan is.
        }

    }
}
?>