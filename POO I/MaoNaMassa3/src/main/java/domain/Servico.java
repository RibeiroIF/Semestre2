package domain;

public class Servico {

	private int id;
	private String descricao;
	private double valor;
	static int pontos;
	private ECategoria categoria;
	private ECategoriaServico servico;
	
	public Servico() {
		super();
	}

	public Servico(int id, String descricao, double valor) {
		super();
		this.id = id;
		this.descricao = descricao;
		this.valor = valor;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getDescricao() {
		return descricao;
	}

	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}

	public double getValor() {
		return valor;
	}

	public void setValor() {
		this.valor = categoria.getValor() * servico.getValor();
	}

	public ECategoria getCategoria() {
		return categoria;
	}
	
	public ECategoriaServico getCategoriaServico() {
		return servico;
	}

	public static int getPontos() {
		return pontos;
	}

}
