
<?php 

require_once "vendor/autoload.php";

use acer\cep_app_composer\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('25253010');

print_r($resultado);
?>
