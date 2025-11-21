package report;

import java.time.format.DateTimeFormatter;

import domain.Cliente;
import domain.PessoaFisica;
import domain.Veiculo;

public class Relatorio {

	@SuppressWarnings("unused")
	public String imprimir(Cliente cliente) {
		// ESPAÇO PARA "SETAR" AS VARIÁVEIS E EXTRAS UTILIZADOS
		StringBuilder sb = new StringBuilder();
		DateTimeFormatter formatadorData = DateTimeFormatter.ofPattern("dd/MM/yyyy");
		//String formatText = "%-15s";
		int quantidadeVeiculos = 0;
		
		// INÍCIO DO RELATÓRIO
		// ESPAÇO PARA DEFINIR CLIENTE PF E PJ
		if (cliente instanceof PessoaFisica) {
			sb.append("\t DADOS DO CLIENTE PF").append("\t\t\n");
			sb.append("=======================================\n");
			sb.append("\t\tID:").append(cliente.getId()).append("  \t\t\n");
			sb.append("=======================================\n");
		}
		else {
			sb.append("\t\t DADOS DO CLIENTE PJ").append("\t\t\n");
			sb.append("\t\t  ID:").append(cliente.getId()).append("  \t\t\n");
		}
		
		sb.append("Nome:").append("\t\t\t").append(cliente.getNome()).append("\n");
		sb.append("Celular:").append("\t\t").append(cliente.getCelular()).append("\n");
		sb.append("E-mail: ").append("\t\t").append(cliente.getEmail()).append("\n");
		sb.append("Data de Cadastro:").append("\t").append(cliente.getDataCadastro().format(formatadorData)).append("\n");
		sb.append("=======================================\n");
		
		// FOR LOOP PARA PEGAR A QUANTIDADE DE VEÍCULOS
		for (Veiculo veiculos : cliente.getListaDeVeiculos()) {
			quantidadeVeiculos++;
		}
		
		sb.append("Nº de Veículos:").append("\t\t\t").append(quantidadeVeiculos).append("\n");
		sb.append("========================================\n");
		sb.append("Pontuação:").append("\t\t\t").append(cliente.getPontuacao().verificarPontos());
		// FIM DO RELATÓRIO
		return sb.toString();
	}
}
