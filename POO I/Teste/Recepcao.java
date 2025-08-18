package Teste;

import java.util.Scanner;

public class Recepcao {

	Pessoa pessoa = new Pessoa();
	Scanner input = new Scanner(System.in);
	
	public void salvarNome(String nome) {
		pessoa.setNome(nome);
	}
	
	public void salvarIdade(int idade) {
		pessoa.setIdade(idade);
	}
	
	public void gerarMensagem() {
		System.out.println("Olá "+pessoa.getNome()+", parabéns pelos seus "+pessoa.getIdade()+" anos");
	}
}
