package consultas;

import agendamento.EPrioridade;
import agendamento.IAgendavel;
import pessoas.Medico;
import pessoas.Paciente;

public class Consulta implements IAgendavel {

	private String data, horario;
	private EPrioridade prioridade;
	private Paciente paciente;
	private Medico medico;
	
	public Consulta() {
		super();
	}

	public Consulta(String data, String horario, Paciente paciente, Medico medico, EPrioridade prioridade) {
		super();
		this.data = data;
		this.horario = horario;
		this.paciente = paciente;
		this.medico = medico;
		this.prioridade = prioridade;
		this.medico.agendarConsulta(this);
		this.paciente.agendarConsulta(this);
	}
	
	
	public String getData() {
		return data;
	}

	public void setData(String data) {
		this.data = data;
	}

	public String getHorario() {
		return horario;
	}

	public void setHorario(String horario) {
		this.horario = horario;
	}

	public EPrioridade getPrioridade() {
		return prioridade;
	}

	public void setPrioridade(EPrioridade prioridade) {
		this.prioridade = prioridade;
	}

	public Paciente getPaciente() {
		return paciente;
	}

	public void setPaciente(Paciente paciente) {
		this.paciente = paciente;
	}

	public Medico getMedico() {
		return medico;
	}

	public void setMedico(Medico medico) {
		this.medico = medico;
	}

	public void agendarConsulta(Consulta consulta) {
		consulta.setPaciente(paciente);
		consulta.setMedico(medico);
		consulta.setData(data);
		consulta.setHorario(horario);
		consulta.setPrioridade(prioridade);
	}
	
}
