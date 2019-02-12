<?php
use App\Csv;
use PHPUnit\Framework\TestCase;

final class CsvTest extends TestCase{

    private $csvClass;

    public function Init() : void
    {
        try {
            $this->csvClass = new Csv();
        }catch(Exception $e){
            $this->addWarning("Impossible de déclarer la classe");
        }
    }

    public function MakeEmpty() : void
    {
        try {
            $this->csvClass = NULL;
        } catch(Exception $e){
            $this->addWarning("Impossible d'ignitier à null la classe");
        }
    }

    public function testInsertDataAndDownload() : void
    {
        $init = new Csv();
        $data = array(array(1,2,"multiply",3));
        $init->array_to_csv_download($data);
        if( !connection_aborted() )
        {
            $this->addWarning("Erreur au niveau de la connection du csv");
        }

        if(connection_status()==0){
            $this->addWarning("La connection avec l'utilisateur a echoué");
        }
    }
}