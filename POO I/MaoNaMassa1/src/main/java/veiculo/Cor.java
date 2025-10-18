package veiculo;

public class Cor {

	private long idCor;
	private String nomeCor;
	
	public Cor() {}
	
	public Cor(String nomeCor) {
		super();
		this.nomeCor = nomeCor;
	}

	public long getIdCor() {
		return idCor;
	}

	public void setIdCor(long idCor) {
		this.idCor = idCor;
	}

	public String getNomeCor() {
		return nomeCor;
	}

	public void setNomeCor(String nomeCor) {
		this.nomeCor = nomeCor;
	}

	

}
