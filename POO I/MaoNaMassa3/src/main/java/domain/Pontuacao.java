package domain;

public class Pontuacao {

	private int quantidade = 0;
	
	public Pontuacao() {
		super();
	}
	
	public void somarPontos(int quantidade) {
		this.quantidade += quantidade;
	}

	public void subtrairPontos(int quantidade) {
		if (this.quantidade == 0) {
			System.out.println("Não é possível retirar a pontuação pois esta está em zero!!");
		}
		else {
			this.quantidade -= quantidade;
		}
	}
	
	public int verificarPontos() {
		return quantidade;
	}
}
