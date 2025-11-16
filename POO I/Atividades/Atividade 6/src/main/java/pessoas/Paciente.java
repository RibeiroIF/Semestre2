package pessoas;

import java.util.ArrayList;
import java.util.List;

import agendamento.IAgendavel;
import consultas.Consulta;
import consultas.Medicamento;

public class Paciente extends Pessoa implements IAgendavel {

	private String contato;
	private Consulta consulta;
	private Endereco endereco;
	private List<Medicamento> historico;
	private List<Consulta> consultas;
	
	public Paciente() {
		super();
		this.historico = new ArrayList<>();
		this.consultas = new ArrayList<>();
	}

	public Paciente(String contato) {
		super();
		this.contato = contato;
		this.historico = new ArrayList<>();
		this.consultas = new ArrayList<>();
	}
	
	public Paciente(String nome, String cpf, String contato, String rua, Cidade cidade) {
		super(nome, cpf);
		this.contato = contato;
		this.endereco = new Endereco(rua, cidade);
		this.historico = new ArrayList<>();
		this.consultas = new ArrayList<>();
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
	
	public Consulta getConsulta() {
		return consulta;
	}

	public void setConsulta(Consulta consulta) {
		this.consulta = consulta;
	}

	public List<Consulta> getConsultas() {
		return consultas;
	}

	public void setConsultas(List<Consulta> consultas) {
		this.consultas = consultas;
	}

	public void adicionarHistorico(Medicamento medicamento) {
		historico.add(medicamento);
	}
	
	public void agendarConsulta(Consulta consulta) {
		consultas.add(consulta);
	}
	
	@Override
	public String exibirInformacoes() {
		StringBuilder sb = new StringBuilder();
		sb.append(super.exibirInformacoes());
		sb.append("Nome......:").append(contato).append("\n");
		sb.append("Endereço..:").append(this.getEndereco().getRua()).append(" - ").append(this.getEndereco().getCidade().getNome()).append(", ").append(this.getEndereco().getCidade().getUf());
		return sb.toString();
	}
	
}
