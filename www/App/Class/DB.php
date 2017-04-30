<?php 

	class DB
	{
		public $stmt;
		public $pdo;

		public function logDB($host, $dbname, $user, $pw)
		{
			try {
				$this->pdo = new PDO('mysql:host='. $host .';dbname='. $dbname .';charset=utf8', ''. $user .'', ''. $pw .'');
				return $this->pdo;
			}
			catch (Exception $e) {
				die('Erreur : '. $e->getMessage());
			}
		}

		public function pdo($sql)
		{
			$this->stmt = $this->pdo->prepare($sql);
			$this->stmt->execute();
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}

		public function pdoPrepare($sql, $repare)
		{
			$this->stmt = $this->pdo->prepare($sql);
			$this->stmt->execute($repare);
			return $this->stmt->fetchAll(PDO::FETCH_OBJ);
		}
	}