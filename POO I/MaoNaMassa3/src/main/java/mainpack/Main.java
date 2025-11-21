package mainpack;

import java.time.LocalDate;

import domain.Cliente;
import domain.Cor;
import domain.ECategoria;
import domain.ECategoriaServico;
import domain.ETipoCombustivel;
import domain.Marca;
import domain.Modelo;
import domain.OrdemServico;
import domain.PessoaFisica;
import domain.Pontuacao;
import domain.Veiculo;
import exceptions.ExceptionLavacao;
import report.ImpressaoOS;
import report.Relatorio;

public class Main {

	public static void main(String[] args) {
		
		Pontuacao pontuacao1 = new Pontuacao();
		
		Marca marca1 = new Marca(1, "RAM");
		Cor cor1 = new Cor("Preto");
		Modelo modelo1 = new Modelo(11, "Carro grande", marca1, ECategoria.GRANDE, 220, ETipoCombustivel.GASOLINA);
		Veiculo veiculo1 = new Veiculo("XLR8-222", modelo1);
		veiculo1.setCor(cor1);
		
		Cliente cliente1 = null;
		cliente1 = new PessoaFisica(111, "Marcos", "99999-9999", "Gremio@gmail.com", LocalDate.of(2025, 11, 28), "123456789-10", LocalDate.of(1970, 10, 10));
		cliente1.adicionarVeiculo(veiculo1);
		cliente1.setPontuacao(pontuacao1);
		
		OrdemServico ordem1 = new OrdemServico(1);
		ordem1.setVeiculo(veiculo1);
		ordem1.setAgenda(LocalDate.now());
		
		try {
			ordem1.adicionarItem(1, ECategoriaServico.LAVACAOINTERNA.getDescricao(), 80);
			ordem1.adicionarItem(2, ECategoriaServico.LAVACAOEXTERNA.getDescricao(), 90);
			ordem1.adicionarItem(3, ECategoriaServico.CERA.getDescricao(), 100);
			System.out.println("\t\t CUPOM FISCAL ABAIXO");
			System.out.println("-------------------------------------------------------");
			printOS(ordem1);
		} catch (ExceptionLavacao e) {
			System.out.println("Erro: " +e.getMessage());
		}
		
		System.out.println(".......................................................");
		System.out.println(".......................................................");
		System.out.println("\t RELATÓRIO DO CLIENTE ABAIXO");
		System.out.println("-------------------------------------------------------");
		System.out.println();
		printCliente(cliente1);
		

	}
	
	public static void printOS(OrdemServico os) throws ExceptionLavacao {
		ImpressaoOS impressao = new ImpressaoOS();
		System.out.println(impressao.imprimirOS(os));
	}
	
	public static void printCliente(Cliente cliente) {
		Relatorio relatorio = new Relatorio();
		System.out.println(relatorio.imprimir(cliente));
	}
	
	
}
