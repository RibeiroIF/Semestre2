package main;

import agendamento.EPrioridade;
import consultas.Consulta;
import informacoes.pessoais.Cidade;
import pessoas.Medico;
import pessoas.Paciente;
import pessoas.Pessoa;


public class Main{
	
    public static void main( String[] args ){
    	
    	Cidade cidade1 = new Cidade("Florianópolis", "SC");
    	Cidade cidade2 = new Cidade("Biguaçu", "SC");
    	
        Pessoa paciente1 = new Paciente("Gabriel", "123456789-00", "(48)91234-5678", "Rua da Vila", cidade1);
        Pessoa paciente2 = new Paciente("Clara", "01234567-89", "(48)94002-8922", "Rua das Graças", cidade2);
        ((Paciente)paciente1).atualizarEndereco("Rua das Flores", cidade1);
        Medico medico1 = new Medico("Dráuzio Vraunelas", "987654321-00", "Urologista", "000000-00");
        
        Consulta consulta1 = new Consulta("10/10/2025", "16:00", (Paciente)paciente1, (Medico)medico1, EPrioridade.BAIXA);
        Consulta consulta2 = new Consulta("10/10/2025", "18:00", (Paciente)paciente2, (Medico)medico1, EPrioridade.MÉDIA);
        
        System.out.println("-----------INFOS DOS PACIENTES-------------");
        try {
        	exibirInfos(paciente1);
        } catch (Exception e) {
        	System.out.println("Opa, alguma informação nula de Paciente");
        }
        System.out.println();
        try {
        	exibirInfos(paciente2);
        } catch (Exception e) {
        	System.out.println("Opa, alguma informação nula de Paciente");
        }
        System.out.println();
        System.out.println("------------INFOS DOS MÉDICOS-------------");
        try {
        	exibirInfos(medico1);
        } catch (Exception e) {
        	System.out.println("Opa, alguma informação nula do Médico");
        }
        
        
        System.out.println();
        registroMedico(medico1);
        System.out.println();
        System.out.println("--------REGISTRO DAS CONSULTAS: -----------");
        registroConsultas(consulta1);
        System.out.println("-------------------------------------------");
        registroConsultas(consulta2);
        
        
    }
    
    //---------------------------------------------------
    // FORA DA MAIN
    public static void exibirInfos(Pessoa pessoa) {
    	if(pessoa instanceof Paciente) {
    		System.out.println(((Paciente)pessoa).exibirInformacoes());
    	}
    	else if(pessoa instanceof Medico) {
    		System.out.println(((Medico)pessoa).exibirInformacoes());
    	}
    }
    
    public static void registroMedico(Medico medico) {
    	System.out.println("---------REGISTRO DO DOUTOR: ---------");
    	System.out.println("Médico responsável____: "+medico.getNome());
    	System.out.println("--------------------------------------");
    	if(medico.getConsultas().isEmpty()) {
    		System.out.println("O médico não possui consultas agendadas!!");
    	}
    	else {
    		for (Consulta consulta : medico.getConsultas()) {
    		System.out.println("Paciente atendido_____: "+consulta.getPaciente().getNome());
    		System.out.println("Dia do atendimento____: "+consulta.getData());
        	System.out.println("Dia da consulta_______: "+consulta.getData());
        	System.out.println("Prioridade da consulta: "+consulta.getPrioridade());
        	System.out.println();
    		}
    	}
    }
    
    public static void registroConsultas(Consulta consulta) {
    	System.out.println("Médico________________: "+consulta.getMedico().getNome());
    	System.out.println("Paciente______________: "+consulta.getPaciente().getNome());
    	System.out.println("Data da Consulta______: "+consulta.getData());
    	System.out.println("Hora da Consulta______: "+consulta.getHorario());
    	System.out.println("Prioridade da Consulta: "+consulta.getPrioridade());
    }
}
