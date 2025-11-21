package domain;

public enum ECategoria {

	PEQUENO ("Carro de tamanho pequeno", 0.6f), 
	MÉDIO ("Carro de tamanho médio", 0.75f), 
	GRANDE ("Carro de tamanho grande", 0.9f), 
	MOTO ("É uma moto", 07f), 
	PADRÃO ("Veículo padrão registrado", 0.8f);
	
	private String descricao;
	private float valor;

	private ECategoria(String descricao, float valor) {
		this.descricao = descricao;
		this.valor = valor;
	}

	public String getDescricao() {
		return descricao;
	}
	
	public float getValor() {
		return valor;
	}
}
