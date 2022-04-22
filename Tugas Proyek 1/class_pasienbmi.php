<?php

    class pasien {
        public $nama;
        public $umur;
        public $berat;
        public $tinggi;
        public $jk;

        public function __construct($nama, $umur, $berat, $tinggi, $jk) {
            $this->nama = $nama;
            $this->umur = $umur;
            $this->berat = $berat;
            $this->tinggi = $tinggi;
            $this->jk = $jk;
        }

        function hitung() {
            $tinggi = ($this->tinggi / 100);
            $total = substr($this->berat / ($tinggi * $tinggi), 0, 5);
            return $total;
        }

        function status() {
            $rslt = $this->hitung();
            
            if ($rslt < 18.5) return "Kekurangan Berat Badan";
            elseif ($rslt >= 18.5 && $rslt <= 24.9) return "Normal (ideal)";
            elseif ($rslt >= 25.0 && $rslt <= 25.9) return "Kelebihan Berat Badan";
            elseif ($rslt >= 30.0) return "Kegemukan (obesitas)";
        }
    }
?>