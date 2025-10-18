package veiculo;

public class Modelo {

	private int idModelo;
	private String descricaoModelo;
	private Marca marca;
	private ECategoria categoria;
	private Motor motor;
	
	public Modelo() {}
	
	public Modelo(int idModelo, String descricaoModelo, Marca marca, Motor motor, ECategoria categoria) {
		super();
		this.idModelo = idModelo;
		this.descricaoModelo = descricaoModelo;
		this.marca = marca;
		this.motor = motor;
		this.categoria = categoria;
	}
	
	public Motor getMotor() {
		return motor;
	}

	public void setMotor(Motor motor) {
		this.motor = motor;
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
		return idModelo;
	}

	public void setIdModelo(int idModelo) {
		this.idModelo = idModelo;
	}

	public String getDescricaoModelo() {
		return descricaoModelo;
	}

	public void setDescricaoModelo(String descricaoModelo) {
		this.descricaoModelo = descricaoModelo;
	}


}
