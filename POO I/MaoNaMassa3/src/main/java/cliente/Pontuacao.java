package cliente;

public class Pontuacao {

	private int quantidade = 0;
	
	public Pontuacao() {
		super();
	}
	
	public int getQuantidade() {
		return quantidade;
	}

	public void setQuantidade(int quantidade) {
		this.quantidade = quantidade;
	}

	public void somarPontos(int quantidade) {
		this.setQuantidade(this.getQuantidade() + quantidade);
	}

	public void subtrairPontos(int quantidade) {
		this.setQuantidade(this.getQuantidade() - quantidade);
	}
	
	public int verificarPontos() {
		return quantidade;
	}
}
