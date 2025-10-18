package ordem.de.servico;

public class ItemOS {

	private double valorServico;
	private String observacoes;
	private Servico servico;
	
	public ItemOS() {
		super();
	}

	public double getValorServico() {
		return valorServico;
	}

	public void setValorServico(double valorServico) {
		this.valorServico = this.getServico().getValor();
	}

	public String getObservacoes() {
		return observacoes;
	}

	public void setObservacoes(String observacoes) {
		this.observacoes = observacoes;
	}

	public Servico getServico() {
		return servico;
	}

}
