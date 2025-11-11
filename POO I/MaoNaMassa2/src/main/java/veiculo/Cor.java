package veiculo;

public class Cor {

	// RETIRADA A COMPLEMENTAÇÃO DOS NOMES
	private long id;
	private String nome;
	
	public Cor() {}
	
	public Cor(String nome) {
		super();
		this.nome = nome;
	}

	public long getIdCor() {
		return id;
	}

	public void setIdCor(long id) {
		this.id = id;
	}

	public String getNomeCor() {
		return nome;
	}

	public void setNomeCor(String nome) {
		this.nome = nome;
	}

	

}
