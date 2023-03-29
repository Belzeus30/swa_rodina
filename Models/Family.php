<?php 

    class Family {

        private $conn;
        private $table;
        public $id;
        public $plat_1; 
		public $plat_2;
		public $jedno_prijem; 
		public $investice; 
		public $najem; 
		public $inkaso;
		public $jidlo;
		public $telekomunikace; 
		public $konicky; 
		public $vylety;
		public $vzdelani; 
		public $kcelkem;
		public $ksplatka; 
		public $hcelkem; 
		public $hsplatka;

        private $a = array(
            "id" => &$this->id,
            "plat_1" => & $this->plat_1,
            "plat_2" => & $this->plat_2,
            "jedno_prijem" => & $this->jedno_prijem,
            "investice" => & $this->investice,
            "najem" => & $this->najem,
            "inkaso" => & $this->inkaso,
            "jidlo" => & $this->jidlo,
            "telekomunikace" => & $this->telekomunikace,
            "konicky" => & $this->konicky,
            "vylety" => & $this->vylety,
            "vzdelani" => & $this->vzdelani,
            "kcelkem" => & $this->kcelkem,
            "ksplatka" => & $this->ksplatka,
            "hcelkem" => & $this->hcelkem,
            "hsplatka" => & $this->hsplatka);

        public function __construct($db) {
            $this->conn = $db;
        }

        public function create() {
            $query = 'INSERT INTO ' . $this->table . ' SET 
            plat_1 = :plat_1,
            plat_2 = :plat_2,
            jedno_prijem = :jedno_prijem,
            investice = :investice,
            najem = :najem,
            inkaso = :inkaso,
            jidlo = :jidlo,
            telekomunikace = :telekomunikace,
            konicky = :konicky,
            vylety = :vylety,
            vzdelani = :vzdelani,
            kcelkem = :kcelkem,
            ksplatka = :ksplatka,
            hcelkem = :hcelkem,
            hsplatka = :hsplatka';

            $stmt = $this->conn->prepare($query);

            foreach($this->a as $key => $val) {
                if($key != "id") {
                    $val = htmlspecialchars($val);
                    $stmt->bindParam(':'.$key ,$val);
                }
                
            }

            if($stmt->execute()) {
                return true;
            }else {
                //Print error
                printf("Error: %s.\n, $stmt->error");
    
                return false;
            }

        /*
            $this->plat_1= htmlspecialchars($this->plat_1);
            $this->plat_2= htmlspecialchars($this->plat_2);
            $this->jedno_prijem= htmlspecialchars($this->jedno_prijem);
            $this->investice= htmlspecialchars($this->investice);
            $this->najem= htmlspecialchars($this->najem);
            $this->inkaso= htmlspecialchars($this->inkaso);
            $this->jidlo= htmlspecialchars($this->jidlo);
            $this->telekomunikace= htmlspecialchars($this->telekomunikace);
            $this->konicky= htmlspecialchars($this->konicky);
            $this->vylety= htmlspecialchars($this->vylety);
            $this->vzdelani= htmlspecialchars($this->vzdelani);
            $this->kcelkem= htmlspecialchars($this->kcelkem);
            $this->ksplatka= htmlspecialchars($this->ksplatka);
            $this->hcelkem= htmlspecialchars($this->hcelkem);
            $this->hsplatka= htmlspecialchars($this->hsplatka);
        */

        /*
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
            $stmt->bindParam(':date',$this->date);
        */
        }
        public function update() {
            $query = 'INSERT INTO ' . $this->table . ' SET 
            plat_1 = :plat_1,
            plat_2 = :plat_2,
            jedno_prijem = :jedno_prijem,
            investice = :investice,
            najem = :najem,
            inkaso = :inkaso,
            jidlo = :jidlo,
            telekomunikace = :telekomunikace,
            konicky = :konicky,
            vylety = :vylety,
            vzdelani = :vzdelani,
            kcelkem = :kcelkem,
            ksplatka = :ksplatka,
            hcelkem = :hcelkem,
            hsplatka = :hsplatka WHERE id=:id';

            $stmt = $this->conn->prepare($query);

            foreach($this->a as $key => $val) {
                    $val = htmlspecialchars($val);
                    $stmt->bindParam(':'.$key ,$val);

                
            }

            if($stmt->execute()) {
                return true;
            }else {
                //Print error
                printf("Error: %s.\n, $stmt->error");
    
                return false;
            }

        }

        public function get_all() {
            $query = "SELECT * FROM ". $this->table. " WHERE id = :id";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':id', $this->id);

            $stmt->execute();

            return $stmt;
        }

        public function get_one() {
            $query = "SELECT FROM ". $this->table. " WHERE id = :id";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':id',$this->id);

            $stmt->execute();
        }

    }
    

?>