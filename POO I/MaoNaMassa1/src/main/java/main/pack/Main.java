package main.pack;

import java.time.LocalDate; 

import cliente.Cliente;
import enums.ECategoria;
import enums.ETipoCombustivel;
import veiculo.Cor;
import veiculo.Marca;
import veiculo.Modelo;
import veiculo.Veiculo;

public class Main {

	public static void main(String[] args) {
		
		/*FORMATAÇÃO DE DATA PARA POSSÍVEL USO
		DateTimeFormatter formatador = DateTimeFormatter.ofPattern("dd-MM-yyyy HH:mm");
		String dataFormatada = LocalDate.now().format(formatador);*/
		//CORES
		Cor cor1 = new Cor("Azul Escuro");
		Cor cor2 = new Cor("Cinza");
		Cor cor3 = new Cor("Amarelo");
		// MARCAS
		Marca marca1 = new Marca(1, "BYD");
		Marca marca2 = new Marca(2, "Chevrolet");
		Marca marca3 = new Marca(3, "Toyota");
		// MODELOS
		Modelo modelo1 = new Modelo(11, "Sedan", marca1, ECategoria.MÉDIO, 220, ETipoCombustivel.GASOLINA);
		Modelo modelo2 = new Modelo(22, "Esportivo", marca2, ECategoria.PEQUENO, 250, ETipoCombustivel.ETANOL);
		Modelo modelo3 = new Modelo(33, "SUV", marca3, ECategoria.GRANDE, 270, ETipoCombustivel.GASOLINA);
		//VEICULOS
		Veiculo veiculo1 = new Veiculo(111, "XXX-7777", "Pequeno e apertado", modelo1, cor1);
		Veiculo veiculo2 = new Veiculo(222, "YYY-2222", "Rápido e barulhento", modelo2, cor3);
		Veiculo veiculo3 = new Veiculo(333, "ZZZ-4444", "Grande e confortável", modelo3, cor2);
		
		Cliente cliente1 = new Cliente(1111, "Gabriel", "(48)99665-8244", "Gabriel@gmail.com", LocalDate.now());
		Cliente cliente2 = new Cliente(2222, "Marcos", "(11)94002-8922", "Marcos@gmail.com", LocalDate.now());
		
		cliente1.adicionarVeiculo(veiculo1);
		cliente2.adicionarVeiculo(veiculo2);
		cliente2.adicionarVeiculo(veiculo3);
		
		System.out.println("-------------CONSULTA DE CARROS--------------");
		printCarros(cliente1);
		System.out.println();
		printCarros(cliente2);
		System.out.println("------------CONSULTA DE CLIENTES--------------");
		printClientes(cliente1);
		System.out.println();
		printClientes(cliente2);


	}
	
	// FORA DO MAIN
	public static void printCarros(Cliente cliente) {
		System.out.println("NOME DO CLIENTE: " +cliente.getNomeCliente());
		if(cliente.getListaDeVeiculos().isEmpty()) {
			System.out.println("O cliente não possui veículos registrados em seu nome");
		}
		else {
			cliente.mostrarVeiculos();	
		}
	}
	
	public static void printClientes(Cliente cliente) {
		System.out.println("Nome_________________: "+cliente.getNomeCliente());
		System.out.println("E-mail_______________: "+cliente.getEmail());
		System.out.println("Celular______________: "+cliente.getCelular());
		System.out.println("Data de cadastro_____: "+cliente.getDataCadastro());
		System.out.println("Quantidade de carros_: "+cliente.getListaDeVeiculos().size());
	}

}
