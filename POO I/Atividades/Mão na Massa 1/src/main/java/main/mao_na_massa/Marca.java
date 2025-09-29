package main.mao_na_massa;

public class Marca {

	private int idMarca;
	private String nomeMarca;
	
	public Marca() {
		super();
	}

	public Marca(String nomeMarca) {
		super();
		this.nomeMarca = nomeMarca;
	}

	public int getIdMarca() {
		return idMarca;
	}
	
	public void setIdMarca(int idMarca) {
		this.idMarca = idMarca;
	}
	
	public String getNomeMarca() {
		return nomeMarca;
	}
	
	public void setNomeMarca(String nomeMarca) {
		this.nomeMarca = nomeMarca;
	}
	
	
}
