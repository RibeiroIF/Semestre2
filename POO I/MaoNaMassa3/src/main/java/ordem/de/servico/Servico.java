package ordem.de.servico;

import veiculo.ECategoria;

public class Servico {

	private int id;
	private String descricao;
	private double valor;
	static int pontos;
	private ECategoria categoria;
	
	public Servico() {
		super();
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

	public void setValor(double valor) {
		this.valor = valor;
	}

	public ECategoria getCategoria() {
		return categoria;
	}
	
}
