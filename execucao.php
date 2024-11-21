<?php
require_once("modelo/Cao.php");
require_once("modelo/gato.php");
require_once("modelo/pet.php");
require_once("modelo/porquinhoDaIndia.php");

$petsCadastrados = [];
$opcao = 0;
do {
    echo "=============================================================\n";
    echo "|          Bem Vindo a Clinica Bem Estar Pet!               |\n";
    echo "|                                                           |\n";
    echo "|A maior e melhor clinica veterinária de Foz do Iguaçu!     |\n";
    echo "|Atendemos de Terça-feira á Domingo 24hrs!                  |\n";
    echo "|                                                           |\n";
    echo "|Consultas,Castração,Cirurgias com opção de parcelamento em |\n";
    echo "| até 20X no cartão ou 10% de desconto no PIX!              |\n";
    echo "|                                                           |\n";
    echo "|                                                           |\n";
    echo "|Cadastre seu pet sem compromisso e ganhe um cupom de 15%!!!|\n";
    echo "|                                                           |\n";
    echo "|                                                           |\n";
    echo "|1-Cadastrar Pet                |2-Tabela de preço de combos|\n";
    echo "|3-Listar Pets cadastrados      |4-Excluir cadastro         |\n";
    echo "|5-Sair                                                     |\n";
    echo "|===========================================================|\n";


    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 0:


            break;
        case 1:

            echo "Deseja cadastrar que tipo de animal?\n";
            $petEscolhido = readline("1-Gato | 2-Cachorro | 3-Porquinho da Índia \n");
            $nome = readline("Digite o nome do seu pet: ");
            $raca = readline("Digite a raça: ");
            $peso = readline("Digite o peso (em kg): ");
            $pelagem = readline("Digite a pelagem: ");
            $porte = readline("Digite o porte (Pequeno/Médio/Grande): ");
            $idade = readline("Digite a idade (em anos): ");

            if ($petEscolhido == 1) {
                $pet = new Gato($nome, $raca, $peso, $pelagem, $porte, $idade);
                $petsCadastrados[] = $pet;
                echo "Gato cadastrado com sucesso!\n";
                $pet->miar();

            } elseif ($petEscolhido == 2) {
                $pet = new Cao($nome, $raca, $peso, $pelagem, $porte, $idade);
                $petsCadastrados[] = $pet;
                echo "Cachorro cadastrado com sucesso!\n";
                $pet->latir();

            } elseif ($petEscolhido == 3) {
                $pet = new PorquinhoDaIndia($nome, $raca, $peso, $pelagem, $porte, $idade);
                $petsCadastrados[] = $pet;
                echo "Porquinho da Índia cadastrado com sucesso! \n";
                $pet->emiteSom();

            } else {
                echo "Opção inválida. Cadastro não realizado.\n";
            }

            break;
        case 2:
            echo "=== Tabela de Preços de Combos ===\n";
            echo "1. Consulta Simples: R$ 80,00\n";
            echo "2. Castração: R$ 250,00\n";
            echo "3. Cirurgia Geral: R$ 800,00 (parcelamento em até 20x no cartão ou 10% de desconto no PIX)\n";
            echo "=================================\n";
            echo "Nosso WhAts para mais informações-----> (45) 9999-6666 \n";


            break;


        case 3:

            echo "=== Lista de Pets Cadastrados ===\n";


            if (empty($petsCadastrados)) {
                echo "Nenhum pet cadastrado.\n";
            } else {
                // Se ha pets cadastrados percorre o array para listar:
                foreach ($petsCadastrados as $index => $pet) {
                    echo "Pet: " . ($index + 1) .  " ,tipo: " . get_class($pet) . ":\n"; // get_class retorna o nome da classe de um objeto
                    echo "Nome: " . $pet->getNome() . "\n";
                    echo "Raça: " . $pet->getRaca() . "\n";
                    echo "Peso: " . $pet->getPeso() . " kg\n";
                    echo "Pelagem: " . $pet->getPelagem() . "\n";
                    echo "Porte: " . $pet->getPorte() . "\n";
                    echo "Idade: " . $pet->getIdade() . " anos\n";
                    echo"                                   ";
                    echo "---------------------------------\n";
                    
                }
            }



            break;

        case 4:
            echo "=== Excluir Cadastro ===\n";
            if (empty($petsCadastrados)) {
                echo "Nenhum pet cadastrado para excluir.\n";
            } else
            echo "Escolha o número do pet para excluir:\n";
            foreach ($petsCadastrados as $index => $pet) {
                // Exibe o nome do pet e o índice (como número para o usuário escolher)
                echo "$index. Nome: " . $pet->getNome() . ", Tipo: " . get_class($pet) . "\n";
            $indicePet = readline("Digite o número do pet a ser excluído: ");
            
        
            // Excluir o pet do array utilizando array_splice
            $indicePet = readline("Digite o número do pet a ser excluído: ");

        
                  // Excluir o pet do array utilizando array_splice
                array_splice($petsCadastrados, $indicePet, 1);  
                echo "Pet excluído com sucesso!\n";
            } else {
                echo "Índice inválido. Nenhum pet foi excluído.\n";
            }
        }

                break;

        case 5:
            echo "Obrigado por usar o sistema! Até mais!\n";
            break;

        default:
            echo "Opção inválida. Tente novamente.\n";
    }
} while ($opcao != 5);
