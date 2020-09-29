## Instalação
 
Inicialmente o projeto esta sem nenhuma dependência que necessite de instalação, somente copiando o repositório já dar para fazer uso. 
 
Mais a necessidade da criação do banco de dados.
 
## Uso 
MVC ainda básico somente para leitura do banco de dados, para exibição dos funcionários.

Sendo necessário criação do banco de dados inicialmente somente com o campo funcionários(atendo no nome do banco de dados colocando em plural) e os dados necessários id/name/cargo/ etc… 

Aqui esta a estrutura do config.php:
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/goldbanks/");
	$config['dbname'] = 'gold_banks';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'seurootlocal';
	$config['dbpass'] = 'suasenhalocal';
} else {
	define("BASE_URL", "http://www.goldbanksbr.com.br/");
	$config['dbname'] = 'usuariodoprovedor';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'rootdoprovedor';
	$config['dbpass'] = 'senhadoprovedor';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}

## Configuração 

Atenção nos arquivos .htaccess e no config.php. 

Veja no site http://www.goldbanksbr.com.br