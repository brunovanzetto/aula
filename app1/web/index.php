<html>


<header>
<title>App de Aula</title>

</header>
<body>
<?php
//require '../Pessoa.php';
require '../Aluno.php';

$pessoa1 = array(new Aluno(),new Aluno(),new Aluno(),new Aluno());

$pessoa1[0]->setNome('Ivo Nascimento');
$pessoa1[0]->setIdade(34);
$pessoa1[0]->setSexo('Masculino');
$pessoa1[0]->setRG(666);
$pessoa1[0]->setCurso('PHP');
$pessoa1[0]->setNumMatricula(123);

$pessoa1[1]->setNome('Bruno');
$pessoa1[1]->setIdade(33);
$pessoa1[1]->setSexo('Masculino');
$pessoa1[1]->setRG(34211);
$pessoa1[1]->setCurso('HTML');
$pessoa1[1]->setNumMatricula(456);

$pessoa1[2]->setNome('Luiz');
$pessoa1[2]->setIdade(33);
$pessoa1[2]->setSexo('Masculino');
$pessoa1[2]->setRG(123);
$pessoa1[2]->setCurso('JS');
$pessoa1[2]->setNumMatricula(789);

$pessoa1[3]->setNome('Aline');
$pessoa1[3]->setIdade(28);
$pessoa1[3]->setSexo('Femino');
$pessoa1[3]->setRG(133);
$pessoa1[3]->setCurso('ANGULAR');
$pessoa1[3]->setNumMatricula(963);

 //var_dump($pessoa1);

foreach ($pessoa1 as $individuo) {
?>

<table>
<tr><td><b>RG</b></td>	<td><?php echo $individuo->getRG(); ?></td></tr>
<tr><td><b>Nome</b></td> <td><?php echo $individuo->getNome(); ?></td></tr>
<tr><td><b>Idade</b></td><td><?php echo $individuo->getIdade(); ?></td></tr>
<tr><td><b>Sexo</b></td><td><?php echo $individuo->getSexo(); ?></td></tr>
<tr><td><b>Curso</b></td><td><?php echo $individuo->getCurso(); ?></td></tr>
<tr><td colspan="2">----------------------------------------------</td></tr>
</table>

<?php
}
?>

<?php
$aluno1 = new Aluno();
var_dump($aluno1);
?>

</body>
</html>	