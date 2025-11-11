package cliente;

import java.time.LocalDate;

public class PessoaJuridica extends Cliente {

	private String cnpj, inscricaoEstadual;
	
	public PessoaJuridica() {
		super();
	}

	public PessoaJuridica(int id, String nome, String celular, String email, LocalDate dataCadastro, String cnpj, String inscricaoEstadual) {
		super(id, nome, celular, email, dataCadastro);
		this.cnpj = cnpj;
		this.inscricaoEstadual = inscricaoEstadual;
	}

	public String getCnpj() {
		return cnpj;
	}

	public void setCnpj(String cnpj) {
		this.cnpj = cnpj;
	}

	public String getInscricaoEstadual() {
		return inscricaoEstadual;
	}

	public void setInscricaoEstadual(String inscricaoEstadual) {
		this.inscricaoEstadual = inscricaoEstadual;
	}
	
	@Override
	public String toString() {
		return "PessoaJuridica [cnpj=" + cnpj + ", inscricaoEstadual=" + inscricaoEstadual + "]";
	}

	// CORREÇÃO QUANTO AO MÉTODO "PRINTLN", AGORA UTILIZANDO UM MÉTODO STRING COM STRINGBUILDER
	@Override
	public String getDados() {
		StringBuilder sb = new StringBuilder();
		sb.append(super.getDados());
		sb.append("CNPJ________________: ").append(cnpj).append("\n");
		sb.append("Inscrição Estadual__: ").append(inscricaoEstadual);
		return sb.toString();
	}
	@Override
	public String getDados(String observacao) {
		StringBuilder sb = new StringBuilder();
		sb.append("\n").append(getDados()).append("\n");
		sb.append("Observação_________: ").append(observacao);
		return sb.toString();
	}

}
