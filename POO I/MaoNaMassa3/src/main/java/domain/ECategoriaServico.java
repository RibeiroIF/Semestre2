package domain;

public enum ECategoriaServico {
	
	LAVACAOINTERNA ("Lavação interna", 100),
	LAVACAOEXTERNA ("Lavação externa", 80),
	CERA ("Polimento cera", 70);
	
	private String descricao;
	private double valor;
	
	private ECategoriaServico(String descricao, double valor) {
		this.descricao = descricao;
		this.valor = valor;
	}

	public String getDescricao() {
		return descricao;
	}
	
	public double getValor() {
		return valor;
	}
	
}
