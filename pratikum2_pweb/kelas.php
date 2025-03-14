    <?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $semester;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setSemester($semester){
            $this->semester = $semester;
        
    }
}

$budi = new Mahasiswa();
$budi->setNama('Budi Santoso');
$budi->setNim ('0110224171');
$budi->setSemester = 4;

echo $budi->nama;