package atividadeComplementar4;

import java.util.ArrayList;
import java.util.List;

public class Medico {

	private String nome, cpf, especialidade, crm;
	private Consulta consulta;
	private List<Consulta> consultas = new ArrayList<Consulta>();
	
	public Medico() {}

	public Medico(String nome, String cpf, String especialidade, String crm) {
		super();
		this.nome = nome;
		this.cpf = cpf;
		this.especialidade = especialidade;
		this.crm = crm;
	}

	public Consulta getConsulta() {
		return consulta;
	}

	public void setConsulta(Consulta consulta) {
		this.consulta = consulta;
	}
	
	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getCpf() {
		return cpf;
	}

	public void setCpf(String cpf) {
		this.cpf = cpf;
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

	public void adicionarConsulta(Consulta consulta) {
		consultas.add(consulta);
	}
	
	public void verConsultas() {
		int pacientes = 1;
		for(Consulta consulta : consultas) {
			System.out.println("-------------------"+ pacientes +"° Paciente----------------------");
			System.out.println("Nome do Paciente: " + consulta.getPaciente().getNome());
			System.out.println("Data da consulta: " + consulta.getDataConsulta());
			System.out.println("Hora da consulta: " + consulta.getHorario());
			System.out.println("Status da consulta: " + consulta.getEStatusConsulta());
			System.out.println("Prioridade da consulta: " + consulta.getEPrioridade());
			pacientes++;
		}
	}
	
	@Override
	public String toString() {
		return "Medico [nome=" + nome + ", cpf=" + cpf + ", especialidade=" + especialidade + ", crm=" + crm
				+ ", consulta=" + consulta + "]";
	}
	
}
