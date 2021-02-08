<p align="center"><a href="http://goldbanksbr.com.br" target="_blank"><img src="https://github.com/willtbnn/GoldBanks/blob/master/assets/images/logo-goldbanks.png" width="400"></a></p>

![Badge](https://img.shields.io/amo/users/JavaScript?label=JavaScript)
![Badge](https://img.shields.io/amo/users/bootstrap?label=CSS3&logo=bootstrap)
![Badge](https://img.shields.io/amo/users/bootstrap?label=v4.3.1&logo=bootstrap)
![Badge](https://img.shields.io/amo/users/php?color=7&label=PHP7.1&logo=php&logoColor=blue)
![Badge](https://img.shields.io/amo/users/php?color=7&label=PHPMailler&logo=php&logoColor=blue)
## Instalação
 
Inicialmente o projeto esta sem nenhuma dependência que necessite de instalação, somente copiando o repositório já dar para fazer uso. 
 
Mais a necessidade da criação do banco de dados.
 
## Uso 
MVC ainda básico somente para leitura do banco de dados, para exibição dos funcionários.

Sendo necessário criação do banco de dados inicialmente somente com o campo funcionários(atendo no nome do banco de dados colocando em plural) e os dados necessários id|name|cargo| etc… 

Aqui esta a estrutura do config.php:</br>
```
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/goldbanks/");
	$config['dbname'] = 'gold_banks';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'seurootlocal';
	$config['dbpass'] = 'suasenhalocal';
} else {</br>
	define("BASE_URL", "http://www.goldbanksbr.com.br/");
	$config['dbname'] = 'usuariodoprovedor';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'rootdoprovedor';
	$config['dbpass'] = 'senhadoprovedor';
}</br>
</br>
global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}

```

## Layout

__layout home__

__*Layout Desktop*__
![Layout principal](https://github.com/willtbnn/GoldBanks/blob/master/assets/images/layout-desktop.png)

__*Layout mobile*__
![Layout principal](https://github.com/willtbnn/GoldBanks/blob/master/assets/images/layout-mobile.jpeg)

__layout Equipe__
![Layout principal](https://github.com/willtbnn/GoldBanks/blob/master/assets/images/layout-page-equipe.jpeg)

__layout funcionario individual__
![Layout principal](https://github.com/willtbnn/GoldBanks/blob/master/assets/images/layout-page-perfil-funcionario.jpeg
)


## Configuração 

Atenção nos arquivos .htaccess e no config.php. 

Veja no site http://www.goldbanksbr.com.br
