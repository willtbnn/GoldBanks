## Instalação
 
Inicialmente o projeto esta sem nenhuma dependência que necessite de instalação, somente copiando o repositório já dar para fazer uso. 
 
Mais a necessidade da criação do banco de dados.
 
## Uso 
MVC ainda básico somente para leitura do banco de dados, para exibição dos funcionários.

Sendo necessário criação do banco de dados inicialmente somente com o campo funcionários(atendo no nome do banco de dados colocando em plural) e os dados necessários id/name/cargo/ etc… 

Aqui esta a estrutura do config.php:</br>
require 'environment.php';</br>

$config = array();</br>
if(ENVIRONMENT == 'development') {</br>
	define("BASE_URL", "http://localhost/goldbanks/");</br>
	$config['dbname'] = 'gold_banks';</br>
	$config['host'] = 'localhost';</br>
	$config['dbuser'] = 'seurootlocal';</br>
	$config['dbpass'] = 'suasenhalocal';</br>
} else {</br>
	define("BASE_URL", "http://www.goldbanksbr.com.br/");</br>
	$config['dbname'] = 'usuariodoprovedor';</br>
	$config['host'] = 'localhost';</br>
	$config['dbuser'] = 'rootdoprovedor';</br>
	$config['dbpass'] = 'senhadoprovedor';</br>
}</br>
</br>
global $db;</br>
try {</br>
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);</br>
} catch(PDOException $e) {</br>
	echo "ERRO: ".$e->getMessage();</br>
	exit;</br>
}

## Configuração 

Atenção nos arquivos .htaccess e no config.php. 

Veja no site http://www.goldbanksbr.com.br