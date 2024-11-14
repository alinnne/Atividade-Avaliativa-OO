<?php 







$opcao = 0;
do {
echo"-------------------------------------------------------------\n";
echo"|          Bem Vindo a Clinica Bem Estar Pet!               |\n";
echo"|                                                           |\n";
echo"|A maior e melhor clinica veterinária de Foz do Iguaçu!     |\n";
echo"|Atendemos de Terça-feira á Domingo 24hrs!                  |\n";
echo"|                                                           |\n";
echo"|Consultas,Castração,Cirurgias com opção de parcelamento em |\n";
echo"| até 20X no cartão ou 10% de desconto no PIX!              |\n";
echo"|                                                           |\n";
echo"|                                                           |\n";
echo"|Cadastre seu pet sem compromisso.                          |\n";
echo"|                                                           |\n";
echo"|1-Cadastrar Pet                |2-Tabela de preço de combos|\n";
echo"|3-Listar Pets cadastrados      |4-Excluir cadastro         |\n";
echo"|-----------------------------------------------------------|\n";

$opcao = readline("Escolha a opção: ");
switch($opcao) {
case 0:


break;
case 1:
echo"Deseja cadastrar que tipo de animal?\n";
readline("1-Gato | 2-Cachorro  | 3-Porquinho da Índia \n");
break;
case 2:
echo "Listando....\n";
break;
}
echo "Opção INVÁLIDA!\n";
} while($opcao != 0);
