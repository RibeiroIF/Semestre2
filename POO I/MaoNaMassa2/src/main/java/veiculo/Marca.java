package veiculo;

public class Marca {

	// RETIRADA A COMPLEMENTAÇÃO DOS NOMES
	private int id;
	private String nome;
	
	public Marca() {
		super();
	}

	public Marca(int idMarca, String nomeMarca) {
		super();
		this.id = idMarca;
		this.nome = nomeMarca;
	}

	public int getIdMarca() {
		return id;
	}
	
	public void setIdMarca(int idMarca) {
		this.id = idMarca;
	}
	
	public String getNomeMarca() {
		return nome;
	}
	
	public void setNomeMarca(String nomeMarca) {
		this.nome = nomeMarca;
	}
	
}
