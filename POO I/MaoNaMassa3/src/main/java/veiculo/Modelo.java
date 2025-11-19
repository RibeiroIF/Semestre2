package veiculo;

public class Modelo {

	private int id;
	private String descricao;
	private Marca marca;
	private ECategoria categoria;
	private Motor motor;
	
	public Modelo() {}
	
	public Modelo(int idModelo, String descricaoModelo, Marca marca, ECategoria categoria, int potencia, ETipoCombustivel combustivel) {
		super();
		this.id = idModelo;
		this.descricao = descricaoModelo;
		this.marca = marca;
		this.categoria = categoria;
		this.motor = new Motor(potencia, combustivel);
	}
	
	public Motor getMotor() {
		return motor;
	}

	public ECategoria getCategoria() {
		return categoria;
	}

	public void setCategoria(ECategoria categoria) {
		this.categoria = categoria;
	}

	public Marca getMarca() {
		return marca;
	}

	public void setMarca(Marca marca) {
		this.marca = marca;
	}


	public int getIdModelo() {
		return id;
	}

	public void setIdModelo(int idModelo) {
		this.id = idModelo;
	}

	public String getDescricaoModelo() {
		return descricao;
	}

	public void setDescricaoModelo(String descricaoModelo) {
		this.descricao = descricaoModelo;
	}


}
