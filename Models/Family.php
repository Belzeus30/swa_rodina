<?php 

    class Family {

        private $conn;
        private $table = "family";
        public $id;
        public $name;
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
        public $vydaje;
        public $prijmy;

        public $cashflow;

        public $dluh;

        private $a = array(
            "id" => null,
            "name" =>null,
            "plat_1" => null,
            "plat_2" => null,
            "jedno_prijem" => null,
            "investice" => null,
            "najem" => null,
            "inkaso" => null,
            "jidlo" => null,
            "telekomunikace" => null,
            "konicky" => null,
            "vylety" => null,
            "vzdelani" => null,
            "kcelkem" => null,
            "ksplatka" => null,
            "hcelkem" => null,
            "hsplatka" => null,
            "vydaje" => null,
            "prijmy" => null,
            "cashflow" => null,
            "dluh" => null,
        );


        public function __construct($db) {
            $this->conn = $db;
            $this->a["id"] =& $this->id;
            $this->a["name"] =& $this->name;
            $this->a["plat_1"] =& $this->plat_1;
            $this->a["plat_2"] =& $this->plat_2;
            $this->a["jedno_prijem"] =& $this->jedno_prijem;
            $this->a["investice"] =& $this->investice;
            $this->a["najem"] =& $this->najem;
            $this->a["inkaso"] =& $this->inkaso;
            $this->a["jidlo"] =& $this->jidlo;
            $this->a["telekomunikace"] =& $this->telekomunikace;
            $this->a["konicky"] =& $this->konicky;
            $this->a["vylety"] =& $this->vylety;
            $this->a["vzdelani"] =& $this->vzdelani;
            $this->a["kcelkem"] =& $this->kcelkem;
            $this->a["ksplatka"] =& $this->ksplatka;
            $this->a["hcelkem"] =& $this->hcelkem;
            $this->a["hsplatka"] =& $this->hsplatka;  
            $this->a["vydaje"]= & $this->vydaje;       
            $this->a["prijmy"]= & $this->prijmy;       
            $this->a["cashflow"]= & $this->cashflow; 
            $this->a["dluh"]= & $this->dluh;      
        }

        public function create() {
            $this->Calculate_cahflow();
            $query = 'INSERT INTO ' . $this->table . ' SET 
            name = :name,
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
            hsplatka = :hsplatka,
            vydaje = :vydaje,
            prijmy = :prijmy,
            cashflow = :cashflow,
            dluh = :dluh';

            $stmt = $this->conn->prepare($query);

                foreach($this->a as $key => &$val) {
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

        }
        public function update() {
            $this->Calculate_cahflow();
            $query = 'UPDATE ' . $this->table . ' SET 
            name = :name,
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
            hsplatka = :hsplatka,
            vydaje = :vydaje,
            prijmy = :prijmy,
            dluh = :dluh,
            cashflow = :cashflow WHERE id=:id';

            $stmt = $this->conn->prepare($query);

            foreach($this->a as $key => &$val) {
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
            $query = "SELECT * FROM ". $this->table;
            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }

        public function get_one() {
            $query = "SELECT * FROM ". $this->table. " WHERE id = :id";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':id',$this->id);

            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public function delete() {
            $query = "DELETE FROM ". $this->table. " WHERE id = :id";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':id',$this->id);

            $stmt->execute();

        }
        private function Calculate_cahflow() {
            $this->prijmy = $this->plat_1 * 12 + $this->plat_2 * 12 + $this->jedno_prijem + $this->investice;
            $this->vydaje = $this->najem * 12 +  
                            $this->inkaso * 12 + 
                            $this->jidlo + 
                            $this->telekomunikace + 
                            $this->konicky + 
                            $this->vylety + 
                            $this->vzdelani + 
                            $this->ksplatka * 12 + 
                            $this->hsplatka * 12;
            $this->cashflow = $this->prijmy - $this->vydaje;
            $this->dluh = ($this->kcelkem - $this->ksplatka * 12) + ($this->hcelkem - $this->hsplatka * 12);
        }

    }
    

?>