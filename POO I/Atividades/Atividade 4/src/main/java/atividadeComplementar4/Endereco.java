package atividadeComplementar4;

public class Endereco {

	private String rua;
	private Cidade cidade;
	
	public Endereco() {}
	
	public Endereco(String rua, Cidade cidade) {
		super();
		this.rua = rua;
		this.cidade = cidade;
	}
	public String getRua() {
		return rua;
	}
	public void setRua(String rua) {
		this.rua = rua;
	}
	public Cidade getCidade() {
		return cidade;
	}
	public void setCidade(Cidade cidade) {
		this.cidade = cidade;
	}

	@Override
	public String toString() {
		return "Endereco [rua=" + rua + ", cidade=" + cidade + "]";
	}
	
	
}
