package pessoas;

import java.util.ArrayList;
import java.util.List;

import agendamento.IAgendavel;
import consultas.Consulta;
import informacoes.pessoais.Cidade;
import informacoes.pessoais.Endereco;

public class Paciente extends Pessoa implements IAgendavel {

	private String contato, rua;
	private Endereco endereco;
	private List<Consulta> consultas;
	
	public Paciente() {
		super();
		this.consultas = new ArrayList<>();
	}

	public Paciente(String contato) {
		super();
		this.contato = contato;
		this.consultas = new ArrayList<>();
	}
	
	public Paciente(String nome, String cpf, String contato, String rua, Cidade cidade) {
		super(nome, cpf);
		this.contato = contato;
		this.endereco = new Endereco(rua, cidade);
		this.consultas = new ArrayList<>();
	}
	
	public String getRua() {
		return rua;
	}

	public Endereco getEndereco() {
		return endereco;
	}

	public String getContato() {
		return contato;
	}

	public void setContato(String contato) {
		this.contato = contato;
	}
	
	public List<Consulta> getConsultas() {
		return consultas;
	}

	public void setConsultas(List<Consulta> consultas) {
		this.consultas = consultas;
	}

	public void atualizarEndereco(String rua, Cidade cidade) {
		this.endereco = new Endereco(rua, cidade);
	}
	
	public void agendarConsulta(Consulta consulta) {
		consultas.add(consulta);
	}
	
	@Override
	public String exibirInformacoes() {
		StringBuilder sb = new StringBuilder();
		sb.append(super.exibirInformacoes());
		sb.append("Contato______:").append(contato).append("\n");
		sb.append("Endereço_____:").append(this.getEndereco().getRua()).append(" - ").append(this.getEndereco().getCidade().getNome()).append(", ").append(this.getEndereco().getCidade().getUf());
		return sb.toString();
	}
	
}
