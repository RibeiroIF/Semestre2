package atividadeComplementar4;

public class Consulta {

	private String dataConsulta, horario;
	private Medico medico;
	private Paciente paciente;
	private EPrioridade prioridade;
	private EStatusConsulta status;
	
	public Consulta() {}
	
	public Consulta(String dataConsulta, String horario, Medico medico, 
			Paciente paciente, EPrioridade prioridade) {
		super();
		this.dataConsulta = dataConsulta;
		this.horario = horario;
		this.medico = medico;
		this.paciente = paciente;
		this.prioridade = prioridade;
	}
	
	public void setEStatusConsultaAgendada(EStatusConsulta status) {
		this.status = EStatusConsulta.AGENDADA;
	}
	
	public void setEStatusConsultaRealizada(EStatusConsulta status) {
		this.status = EStatusConsulta.REALIZADA;
	}
	
	public void setEStatusConsultaCancelada(EStatusConsulta status) {
		this.status = EStatusConsulta.CANCELADA;
	}
	
	public EStatusConsulta getEStatusConsulta() {
		return status;
	}
	
	public void conferirEStatusConsulta(Consulta consulta, EStatusConsulta status) {
		System.out.println("O status da consulta do paciente "+ paciente.getNome() +""
				+ " é: " +consulta.getEStatusConsulta());
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
	
	public EPrioridade getEPrioridade() {
		return prioridade;
	}
	
	public void setEPrioridade(EPrioridade prioridade) {
		this.prioridade = prioridade;
	}

	@Override
	public String toString() {
		return "Consulta [dataConsulta=" + dataConsulta + ", horario=" + horario + ", medico=" + medico + ", paciente="
				+ paciente + ", prioridade=" + prioridade + ", status=" + status + "]";
	}
	
	
}
