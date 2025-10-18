package pessoas;

import java.util.ArrayList;
import java.util.List;

import agendamento.IAgendavel;
import consultas.Consulta;

public class Medico extends Pessoa implements IAgendavel {

	private String especialidade, crm;
	private List<Consulta> consultas;
	
	public Medico() {
		super();
		this.consultas = new ArrayList<>();
	}

	public Medico(String nome, String cpf, String especialidade, String crm) {
		super(nome, cpf);
		this.especialidade = especialidade;
		this.crm = crm;
		this.consultas = new ArrayList<>();
	}

	public String getEspecialidade() {
		return especialidade;
	}

	public void setEspecialidade(String especialidade) {
		this.especialidade = especialidade;
	}

	public String getCrm() {
		return crm;
	}

	public void setCrm(String crm) {
		this.crm = crm;
	}
	
	public List<Consulta> getConsultas() {
		return consultas;
	}

	public void setConsultas(List<Consulta> consultas) {
		this.consultas = consultas;
	}
	
	public void agendarConsulta(Consulta consulta) {
		consultas.add(consulta);
	}

	@Override
	public void exibirInformacoes() {
		System.out.println("Nome__________: "+this.getNome());
		System.out.println("CPF___________: "+this.getCpf());
		System.out.println("CRM___________: "+this.getCrm());
		System.out.println("Especialidade_: "+this.getEspecialidade());
	}
	
}
