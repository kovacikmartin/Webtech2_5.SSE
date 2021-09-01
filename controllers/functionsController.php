<?php
    require_once("databaseController.php");

    class FunctionsController{

        private PDO $conn;

        public function __construct()
        {
            $this->conn = (new DatabaseController())->getConnection();
        }

        public function insertFunctionOptions($a, $y1, $y2, $y3){

            try{

                $sql = "DELETE FROM t_function_options WHERE 1;
                        INSERT INTO t_function_options(a, y1, y2, y3)
                                    VALUES(?, ?, ?, ?)";
                
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmnt = $this->conn->prepare($sql);
                $stmnt->execute([$a, $y1, $y2, $y3]);
            }
            catch(PDOException $e){
                echo "Sorry, there was error in initial insert of function options. " . $e->getMessage();
            }

        }

        public function updateFunctionOptions($a, $y1, $y2, $y3){
            
            try{

                $sql = "UPDATE t_function_options
                        SET a = ?, y1 = ?, y2 = ?, y3 = ?
                        WHERE 1";
                
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmnt = $this->conn->prepare($sql);
                $stmnt->execute([$a, $y1, $y2, $y3]);
            }
            catch(PDOException $e){
                echo "Sorry, there was error in update of function options. " . $e->getMessage();
            }
        }

        public function getFunctionOptions(){

            $options = null;

            try{
                $sql = "SELECT a, y1, y2, y3 FROM t_function_options";

                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // prevent pdo to return numbers as strings
                $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);  
                $this->conn->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);

                $stmnt = $this->conn->query($sql);
                $options = $stmnt->fetch(PDO::FETCH_ASSOC);
            }
            catch(PDOException $e){
                echo "Sorry, there was error getting function options. " . $e->getMessage();
            }

            return $options;
        }
    }
?>