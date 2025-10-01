package atividadeComplementar4;

import java.util.ArrayList;
import java.util.List;

import javax.swing.JOptionPane;

public class Main {

	public static void main(String[] args) {
		
		List<Medico> medicos = new ArrayList<Medico>();
		
		Cidade cidade1 = new Cidade("Florianópolis", "Santa Catarina");
		Endereco endereco1 = new Endereco("Rua Bocaíuva", cidade1);
		Paciente paciente1 = new Paciente("Astolfo", "12345678911", "Número 167", cidade1, endereco1);
		Medico medico1 = new Medico("Dráuzio Varella", "98765432100", "Geral", "5748390567");
		Consulta consulta1 = new Consulta("27/10/2025", "14:00", medico1, paciente1, EPrioridade.MÉDIA);
		consulta1.setEStatusConsultaAgendada(EStatusConsulta.AGENDADA);
		
		Cidade cidade2 = new Cidade();
		Endereco endereco2 = new Endereco();
		Paciente paciente2 = new Paciente();
		Consulta consulta2 = new Consulta();
		
		JOptionPane.showMessageDialog(null, "Bem vindo ao hospital Baía Sul!!");
		JOptionPane.showMessageDialog(null, "Vamos coletar algumas informações para seu registro!");
		String nomePaciente = JOptionPane.showInputDialog("Insira seu nome: ");
		String cpfPaciente = JOptionPane.showInputDialog("CPF: ");
		String estadoPaciente = JOptionPane.showInputDialog("Estado onde mora: ");
		String cidadePaciente = JOptionPane.showInputDialog("Cidade onde mora: ");
		String ruaPaciente = JOptionPane.showInputDialog("Rua onde mora: ");
		String ruaEnderecoPaciente = JOptionPane.showInputDialog("Endereço específico: ");
		String prioridadeConsulta = JOptionPane.showInputDialog("Qual seria a prioridade da consulta?: "
				+ "\n Baixa | Média | Alta");
		String dataConsulta = JOptionPane.showInputDialog("Para qual dia ficará a consulta? "
				+ "\n Formato de data: XX/XX/XXXX");
		String horarioConsulta = JOptionPane.showInputDialog("Para qual horário seria a consulta?: "
				+ "\n Formato de horário: XX:XX");
		
		if(prioridadeConsulta.equalsIgnoreCase("BAIXA")) {
			consulta2.setEPrioridade(EPrioridade.BAIXA);
		}
		if(prioridadeConsulta.equalsIgnoreCase("MEDIA")) {
			consulta2.setEPrioridade(EPrioridade.MÉDIA);
		}
		if(prioridadeConsulta.equalsIgnoreCase("ALTA")) {
			consulta2.setEPrioridade(EPrioridade.ALTA);
		}
		
		cidade2.setestado(estadoPaciente);
		cidade2.setNome(cidadePaciente);
		
		endereco2.setCidade(cidade2);
		endereco2.setRua(ruaPaciente);
		
		paciente2.setNome(nomePaciente);
		paciente2.setCpf(cpfPaciente);
		paciente2.setCidade(cidade2);
		paciente2.setEndereco(endereco2);
		paciente2.setRuaEndereco(ruaEnderecoPaciente);
		
		consulta2.setEStatusConsultaAgendada(EStatusConsulta.AGENDADA);
		consulta2.setMedico(medico1);
		consulta2.setPaciente(paciente2);
		consulta2.setHorario(horarioConsulta);
		consulta2.setDataConsulta(dataConsulta);
		consulta2.setHorario(horarioConsulta);
		
		medico1.adicionarConsulta(consulta1);
		medico1.adicionarConsulta(consulta2);
		
		medicos.add(medico1);
		
		for(Medico medico : medicos) {
			System.out.println("----------------Informações do Médico:-------------------");
			System.out.println("Nome do médico: " +medico.getNome());
			System.out.println("--------- Consultas do Médico " +medico.getNome()+"---------");
			medico.verConsultas();
		}
		System.out.println("------------------Fim-------------------");

	}

}
