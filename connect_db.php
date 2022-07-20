<?

$username = 'root';
$password = 'root';
$db = 'landing';
$host = '127.0.0.1';
$charset = 'utf8';

try{
    $dsn = 'mysql:host='.$host.';dbname='.$db.';charset='.$charset;
    $database = new PDO($dsn, $username, $password);
    $products = $database->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);


    $pictures = $database->query("SELECT * FROM pic")->fetchAll(PDO::FETCH_ASSOC);
    


    } 

    catch(PDOException $e) {
        die ("Не могу подключиться к БД");
    }


    ?>