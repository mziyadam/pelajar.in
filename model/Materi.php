<?php
class Materi{
    public $idMateri;

    public $mataKuliah;

    public $judulMateri;

    public $fileMateri;

    public function setAll($idMateri, $mataKuliah, $judulMateri, $fileMateri)
    {
        $this->idMateri = $idMateri;
        $this->mataKuliah = $mataKuliah;
        $this->judulMateri = $judulMateri;
        $this->fileMateri = $fileMateri;
    }

    
}