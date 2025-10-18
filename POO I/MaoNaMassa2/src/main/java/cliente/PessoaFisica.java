package cliente;

import java.time.LocalDate;
import java.util.Date;

public class PessoaFisica extends Cliente {

	private String cpf;
	private Date dataNascimento;
	
	public PessoaFisica() {
		super();
	}

	public PessoaFisica(int idCliente, String nomeCliente, String celular, String email, Date dataCadastro, String cpf, Date dataNascimento) {
		super(idCliente, nomeCliente, celular, email, dataCadastro);
		this.cpf = cpf;
		this.dataNascimento = dataNascimento;
	}

	public String getCpf() {
		return cpf;
	}

	public void setCpf(String cpf) {
		this.cpf = cpf;
	}

	public Date getDataNascimento() {
		return dataNascimento;
	}

	public void setDataNascimento(Date dataNascimento) {
		this.dataNascimento = dataNascimento;
	}
	
	@Override
	public String toString() {
		return "PessoaFisica [cpf=" + cpf + ", dataNascimento=" + dataNascimento + "]";
	}

	@Override
	public String getDados() {
		StringBuilder sb = new StringBuilder();
		sb.append(super.getDados());
		sb.append("CPF________________: ").append(cpf).append("\n");
		sb.append("Data de Nascimento_: ").append(dataNascimento);
		return sb.toString();
	}
	@Override
	public String getDados(String observacao) {
		StringBuilder sb = new StringBuilder();
		sb.append(getDados()).append("\n");
		sb.append("Observação_________: ").append(observacao);
		return sb.toString();
	}
	
	

}
