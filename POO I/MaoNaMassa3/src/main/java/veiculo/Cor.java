package veiculo;

public class Cor {

	private long id;
	private String nome;
	
	public Cor() {}
	
	public Cor(String nomeCor) {
		super();
		this.nome = nomeCor;
	}

	public long getIdCor() {
		return id;
	}

	public void setIdCor(long idCor) {
		this.id = idCor;
	}

	public String getNomeCor() {
		return nome;
	}

	public void setNomeCor(String nomeCor) {
		this.nome = nomeCor;
	}

	

}
