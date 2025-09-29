package main.mao_na_massa;

public class Modelo {

	private int idModelo;
	private String descricao;
	private Marca marca;

	public Modelo() {}
	
	public Modelo(String descricao, Marca marca) {
		super();
		this.descricao = descricao;
	}
	
	public Marca getMarca() {
		return marca;
	}

	public void setMarca(Marca marca) {
		this.marca = marca;
	}

	public int getIdModelo() {
		return idModelo;
	}
	
	public void setIdModelo(int idModelo) {
		this.idModelo = idModelo;
	}
	
	public String getDescricao() {
		return descricao;
	}
	
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}
	
	
}
