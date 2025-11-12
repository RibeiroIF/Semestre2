package pessoas;

public class Endereco {

	private String rua, complemento;
	private Cidade cidade;
	
	public Endereco() {
		super();
	}

	public Endereco(String rua, Cidade cidade) {
		super();
		this.rua = rua;
		this.cidade = cidade;
	}

	public Endereco(String rua, String complemento, String nome, String uf) {
		super();
		this.rua = rua;
		this.complemento = complemento;
		this.cidade = new Cidade(nome, uf);
	}
	
	public Cidade getCidade() {
		return cidade;
	}

	public String getRua() {
		return rua;
	}

	public String getComplemento() {
		return complemento;
	}

	public void setComplemento(String complemento) {
		this.complemento = complemento;
	}
	
}
