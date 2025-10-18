package ordens;

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

	public Servico(int id, String descricao) {
		super();
		this.id = id;
		this.descricao = descricao;
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

	public void setValor(ECategoria categoria) {
		switch(this.categoria) {
			case PEQUENO:
				this.valor = 50;
				break;
			case MÉDIO:
				this.valor = 70;
				break;
			case GRANDE:
				this.valor = 90;
				break;
			case MOTO: 
				this.valor = 60;
				break;
			case PADRÃO:
				this.valor = 80;
				break;
		}
	}

	public ECategoria getCategoria() {
		return categoria;
	}

	public static int getPontos() {
		return pontos;
	}

}
