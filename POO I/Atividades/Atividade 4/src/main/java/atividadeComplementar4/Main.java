package atividadeComplementar4;

public class Main {

	public static void main(String[] args) {
		
		Cidade cidade1 = new Cidade("Florianópolis", "Santa Catarina");
		Endereco endereco1 = new Endereco("Rua Bocaíuva", cidade1);
		Paciente paciente1 = new Paciente("Astolfo", "12345678911", "Número 167",
				cidade1, endereco1);
		Medico medico1 = new Medico("Dráuzio Varella", "98765432100", 
				"Oncologia", "5748390567");
		Consulta consulta1 = new Consulta("27/10/2025", "14:00", medico1, paciente1, Prioridade.MÉDIA);
		consulta1.setStatusConsultaAgendada(StatusConsulta.AGENDADA);
		
		
		medico1.adicionarConsulta(consulta1);
		
		System.out.println("-----------Informações do Médico:--------------");
		System.out.println("Nome do médico: " +medico1.getNome());
		System.out.println("--------- Consultas do Médico " +medico1.getNome()+"---------");
		medico1.verConsultas();
		System.out.println("----------Fim----------");
		//String nome = JOptionPane.showInputDialog("Qual o seu nome? :");
		//String cpf = JOptionPane.showInputDialog("Seu cpf?: ");
		//String estado = JOptionPane.showInputDialog("Em qual estado reside?: ");
		//String cidade = JOptionPane.showInputDialog("Qual cidade?: ");
		//String rua = JOptionPane.showInputDialog("O nome de sua rua?: ");

	}

}
