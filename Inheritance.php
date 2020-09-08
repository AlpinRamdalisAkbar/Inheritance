<?php

class Chara{
    public $nama, $job, $skill, $KecepatanMaksimal, $Jumlalmana;

    public function Lari(){
        return "kecepatan bertambah";
    }
}
class CharaAssasin extends Chara{
    public $dash = false;

    public function aktifkanDash(){
        $this->dash=true;
        return "Dash diaktikan";
    }
}

$CharaKu = new CharaAssasin();
echo $CharaKu->tambahKecepatan();
echo "<br>";
echo $CharaKu->aktifkanDash();
?>
