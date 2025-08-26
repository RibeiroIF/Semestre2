package Teste;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		
	Recepcao recepcao = new Recepcao();
	Scanner input = new Scanner (System.in);
	
	System.out.println("Insira o seu nome: ");
	String nome = input.nextLine();
	
	System.out.println("Insira sua idade: ");
	int idade = input.nextInt();
	
	recepcao.salvarNome(nome);
	recepcao.salvarIdade(idade);
	recepcao.gerarMensagem();
	
	input.close();
	}

}
