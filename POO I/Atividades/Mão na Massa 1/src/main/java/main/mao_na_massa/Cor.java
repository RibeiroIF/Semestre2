package main.mao_na_massa;

public class Cor {

	private long id;
	private String nome;
	
	public Cor() {
		super();
	}
	
	public Cor(String nome) {
		super();
		this.nome = nome;
	}

	public Cor(long id, String nome) {
		super();
		this.id = id;
		this.nome = nome;
	}
	
	public long getId() {
		return id;
	}
	
	public void setId(long id) {
		this.id = id;
	}
	
	public String getNome() {
		return nome;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	
}
