package main.mao_na_massa;

public class Veiculo {

	private int idVeiculo;
	private String placa, observacoes;
	private Modelo modelo;
	private Cor cor;

	public Veiculo() {}
	
	public Veiculo(String placa) {
		super();
		this.placa = placa;
	}
	
	public Veiculo(String placa, Modelo modelo) {
		super();
		this.placa = placa;
	}

	public Veiculo(int id, String placa, String observacoes) {
		super();
		this.idVeiculo = id;
		this.placa = placa;
		this.observacoes = observacoes;
	}
	
	public int getIdVeiculo() {
		return idVeiculo;
	}
	
	public void setIdVeiculo(int id) {
		this.idVeiculo = id;
	}

	public Modelo getModelo() {
		return modelo;
	}

	public void setModelo(Modelo modelo) {
		this.modelo = modelo;
	}

	public Cor getCor() {
		return cor;
	}

	public void setCor(Cor cor) {
		this.cor = cor;
	}
	
	public String getPlaca() {
		return placa;
	}
	
	public void setPlaca(String placa) {
		this.placa = placa;
	}
	
	public String getObservacoes() {
		return observacoes;
	}
	
	public void setObservacoes(String observacoes) {
		this.observacoes = observacoes;
	}
	
	
}
