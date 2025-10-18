package mainpack;

import java.time.LocalDate;
import java.time.ZoneId;
import java.time.format.DateTimeFormatter;
import java.util.Date;

import cliente.Cliente;
import cliente.IDados;
import cliente.PessoaFisica;
import cliente.PessoaJuridica;
import cliente.Pontuacao;
import veiculo.Cor;
import veiculo.ECategoria;
import veiculo.ETipoCombustivel;
import veiculo.Marca;
import veiculo.Modelo;
import veiculo.Veiculo;

public class Main {

	public static void main(String[] args) {
		
		Date date1 = new Date();
		Date date2 = new Date();
		//CORES
		Cor cor1 = new Cor("Azul Escuro");
		Cor cor2 = new Cor("Cinza");
		Cor cor3 = new Cor("Amarelo");
		// MOTORES
		// MARCAS
		Marca marca1 = new Marca(1, "BYD");
		Marca marca2 = new Marca(2, "Chevrolet");
		Marca marca3 = new Marca(3, "Toyota");
		// MODELOS
		Modelo modelo1 = new Modelo(11, "Sedan", marca1, ECategoria.MÉDIO, 220, ETipoCombustivel.ETANOL);
		Modelo modelo2 = new Modelo(22, "Esportivo", marca2, ECategoria.PEQUENO, 240, ETipoCombustivel.FLEX);
		Modelo modelo3 = new Modelo(33, "SUV", marca3, ECategoria.GRANDE, 250, ETipoCombustivel.DIESEL);
		//VEICULOS
		Veiculo veiculo1 = new Veiculo(111, "XXX-7777", "Pequeno e apertado", modelo1, cor1);
		Veiculo veiculo2 = new Veiculo(222, "YYY-2222", "Rápido e barulhento", modelo2, cor3);
		Veiculo veiculo3 = new Veiculo(333, "ZZZ-4444", "Grande e confortável", modelo3, cor2);
		
		Cliente cliente = null;
		
		Pontuacao pontuacao1 = new Pontuacao();
		Pontuacao pontuacao2 = new Pontuacao();
		
		cliente = new PessoaFisica(1, "Gabriel", "(48)99665-8244", "Gabriel@gmail.com", date1, "123459789-11", date1);
		cliente.adicionarVeiculo(veiculo1);
		cliente.adicionarVeiculo(veiculo2);
		cliente.setPontuacao(pontuacao1);
		cliente.getDataCadastro();
		pontuacao1.somarPontos(20);
		printFinal(cliente);
		System.out.println();
		
		cliente = new PessoaJuridica(2, "Marcos", "(11)94002-8922", "Marcos@gmail.com", date2, "12.345.678/0001-00", "00000000");
		cliente.removerVeiculo(veiculo1);
		cliente.removerVeiculo(veiculo2);
		cliente.adicionarVeiculo(veiculo3);
		cliente.setPontuacao(pontuacao2);
		pontuacao2.somarPontos(50);
		printFinal(cliente);

	}
	
	// FORA DA MAIN
	
	// PRINT DE DADOS DEPENDENDO SE O PARÂMETRO É: PESSOA FÍSICA, PESSOA JURÍDICA OU UM VEÍCULO REGISTRADO
	public static void printFinal(IDados referencia) {
		
		int numero = 1;
		
		if (referencia instanceof PessoaFisica) {
			System.out.println(("--------Dados do Cliente (Pessoa Física):----------").toUpperCase());
			if(((PessoaFisica)referencia).getDataCadastro() == ((PessoaFisica)referencia).getDataNascimento()) {
				System.out.println(((PessoaFisica)referencia).getDados("Hoje é seu aniverário, parabéns!! Está apto a um desconto de 20%"));
			}
			else {
				System.out.println(((PessoaFisica)referencia).getDados());
			}
			for (Veiculo veiculo : (((PessoaFisica)referencia).getListaDeVeiculos())) {
				System.out.println(("------"+numero+"°VEÍCULO DO CLIENTE -----").toUpperCase());
				System.out.println(""+veiculo.getDados());
				numero++;
			}
		}
		else if (referencia instanceof PessoaJuridica) {
			System.out.println(("-------Dados do Cliente (Pessoa Jurídica):------- ").toUpperCase());
			System.out.println(((PessoaJuridica)referencia).getDados());
			for (Veiculo veiculo : (((PessoaJuridica)referencia).getListaDeVeiculos())) {
				System.out.println(("------"+numero+"°VEÍCULO DO CLIENTE -----").toUpperCase());
				System.out.println(""+veiculo.getDados());
				numero++;
			}
		}
		else if (referencia instanceof Veiculo) {
			System.out.println(("----------------Dados do Veículo:---------------- ").toUpperCase());
			System.out.println(((Veiculo)referencia).getDados());
		}
	}

}
