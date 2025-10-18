package report;

import cliente.Cliente;
import cliente.PessoaFisica;

public class Relatorio {

	public String imprimir(Cliente cliente) {
		StringBuilder sb = new StringBuilder();
		if (cliente instanceof PessoaFisica) {
			sb.append("---------- DADOS DO CLIENTE PF: -------------");
		}
		else {
			sb.append("---------- DADOS DO CLIENTE PJ: -------------");
		}
		sb.append(cliente.getDados()).append("\n");
		return sb.toString();
	}
}
