package atividadeComplementar4;

public class Consulta {

	private String dataConsulta, horario;
	private Medico medico;
	private Paciente paciente;
	private Prioridade prioridade;
	private StatusConsulta status;
	
	public Consulta() {}
	
	public Consulta(String dataConsulta, String horario, Medico medico, 
			Paciente paciente, Prioridade prioridade) {
		super();
		this.dataConsulta = dataConsulta;
		this.horario = horario;
		this.medico = medico;
		this.paciente = paciente;
		this.prioridade = prioridade;
	}
	
	public void setStatusConsultaAgendada(StatusConsulta status) {
		this.status = StatusConsulta.AGENDADA;
	}
	
	public void setStatusConsultaRealizada(StatusConsulta status) {
		this.status = StatusConsulta.REALIZADA;
	}
	
	public void setStatusConsultaCancelada(StatusConsulta status) {
		this.status = StatusConsulta.CANCELADA;
	}
	
	public StatusConsulta getStatusConsulta() {
		return status;
	}

	public String getDataConsulta() {
		return dataConsulta;
	}
	
	public void setDataConsulta(String dataConsulta) {
		this.dataConsulta = dataConsulta;
	}
	
	public String getHorario() {
		return horario;
	}
	
	public void setHorario(String horario) {
		this.horario = horario;
	}
	
	public Medico getMedico() {
		return medico;
	}
	
	public void setMedico(Medico medico) {
		this.medico = medico;
	}
	
	public Paciente getPaciente() {
		return paciente;
	}
	
	public void setPaciente(Paciente paciente) {
		this.paciente = paciente;
	}
	
	public Prioridade getPrioridade() {
		return prioridade;
	}
	
	public void setPrioridade(Prioridade prioridade) {
		this.prioridade = prioridade;
	}

	@Override
	public String toString() {
		return "Consulta [dataConsulta=" + dataConsulta + ", horario=" + horario + ", medico=" + medico + ", paciente="
				+ paciente + ", prioridade=" + prioridade + ", status=" + status + "]";
	}
	
	
}
