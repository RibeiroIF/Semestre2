package maven.MaoNaMassa2;

import java.sql.Date;
import java.time.LocalDate;

import cliente.Cliente;
import cliente.PessoaFisica;
import cliente.PessoaJuridica;
import cliente.Pontuacao;
import ordem.de.servico.OrdemServico;
import report.ImpressaoOS;
import report.Relatorio;
import veiculo.Cor;
import veiculo.ECategoria;
import veiculo.ETipoCombustivel;
import veiculo.Marca;
import veiculo.Modelo;
import veiculo.Motor;
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
		// MOTORES
		Motor motor1 = new Motor(100 , ETipoCombustivel.DIESEL);
		Motor motor2 = new Motor(200, ETipoCombustivel.ETANOL);
		Motor motor3 = new Motor(150, ETipoCombustivel.GASOLINA);
		// MARCAS
		Marca marca1 = new Marca(1, "BYD");
		Marca marca2 = new Marca(2, "Chevrolet");
		Marca marca3 = new Marca(3, "Toyota");
		// MODELOS
		Modelo modelo1 = new Modelo(11, "Sedan", marca1, motor1, ECategoria.MÉDIO);
		Modelo modelo2 = new Modelo(22, "Esportivo", marca2, motor3, ECategoria.PEQUENO);
		Modelo modelo3 = new Modelo(33, "SUV", marca3, motor2, ECategoria.GRANDE);
		//VEICULOS
		Veiculo veiculo1 = new Veiculo(111, "XXX-7777", "Pequeno e apertado", modelo1, cor1);
		Veiculo veiculo2 = new Veiculo(222, "YYY-2222", "Rápido e barulhento", modelo2, cor3);
		Veiculo veiculo3 = new Veiculo(333, "ZZZ-4444", "Grande e confortável", modelo3, cor2);
		
		Date date1 = new Date(2001, 02, 07);
		Cliente cliente = null;
		
		Pontuacao pontuacao1 = new Pontuacao();
		Pontuacao pontuacao2 = new Pontuacao();
		
		System.out.println("---------INÍCIO---------");
		//printFinal(veiculo1);
		System.out.println("------------------------------");
		cliente = new PessoaFisica(1, "Gabriel", "(48)99665-8244", "Gabriel@gmail.com", LocalDate.now(), "123459789-11", date1);
		cliente.adicionarVeiculo(veiculo1);
		cliente.adicionarVeiculo(veiculo2);
		cliente.setPontuacao(pontuacao1);
		pontuacao1.somarPontos(20);
		//printFinal(cliente);
		System.out.println("------------------------------");
		cliente = new PessoaJuridica(2, "Marcos", "(11)94002-8922", "Marcos@gmail.com", LocalDate.now(), "12.345.678/0001-00", "00000000");
		cliente.removerVeiculo(veiculo1);
		cliente.removerVeiculo(veiculo2);
		cliente.adicionarVeiculo(veiculo3);
		cliente.setPontuacao(pontuacao2);
		pontuacao2.somarPontos(50);
		//printFinal(cliente);
		System.out.println("-----------FIM---------");

	}
	
	public static void imprimirOS(OrdemServico os) {
		ImpressaoOS impressao = new ImpressaoOS();
		impressao.imprimirOS(os);
	}
	
	public static void gerarRelatorio(Cliente cliente) {
		Relatorio relatorio = new Relatorio();
		relatorio.imprimir(cliente);
	}
	
//	public static void printFinal(IDados referencia) {
//		if (referencia instanceof PessoaFisica) {
//			System.out.println(("Dados do Cliente (Pessoa Física):").toUpperCase());
//			System.out.println(((PessoaFisica)referencia).getDados());
//		}
//		else if (referencia instanceof PessoaJuridica) {
//			System.out.println(("Dados do Cliente (Pessoa Jurídica): ").toUpperCase());
//			System.out.println(((PessoaJuridica)referencia).getDados());
//		}
//		else if (referencia instanceof Veiculo) {
//			System.out.println(("Dados do Veículo: ").toUpperCase());
//			System.out.println(((Veiculo)referencia).getDados());
//		}
//	}

}
