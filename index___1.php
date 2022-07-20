<!-- <?php

/*
@ ПОДКЛЮЧЕНИЕ К БД
*/
// global $pdo;
// try 
// {
//     $pdo = new PDO ('mysql:dbname=countries; host=127.0.0.1', 'user', '');
// }
// catch (PDOException $exception)
// {
//     echo $exception->getMessage();
//     die;
// }

// $sql_text = $pdo->prepare("SELECT * FROM `txt`");
// $sql_text->execute();
// $array = $sql_text->fetchAll(PDO::FETCH_ASSOC);
// print_r($array);


// try {
// 	$dbh = new PDO('mysql:dbname=countries; host=127.0.0.1', 'user', '');
//     $data = $dbh->query('SELECT * FROM `txt` ORDER BY `txt_ID` ASC' . $dbh->quote($string));
//     if (is_array($data) || is_object($data))
//     {
//         foreach($data as $rows) {
//             print_r($rows);
//         }
//     $dbh->execute("INSERT INTO 'txt' SET 'txt_ID' = '6', 'text' = 'fewfeqfqf' ");
//     }

// } catch (PDOException $e) {
// 	die($e->getMessage());
// }



Class DATABASE {
    private $link;

    public function _construct()
    {

    }

    private function connect()
    {
        $this->link = new PDO($dsn, $username, $password);
    }

    private function execute($sql)
    {

    }

    private function query($sql)
    {

    }
}







