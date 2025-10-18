package veiculo;

import cliente.Cliente;
import cliente.IDados;

public class Veiculo implements IDados {

	private int idVeiculo;
	private String placa, observacoesVeiculo;
	private Modelo modelo;
	private Cliente cliente;
	private Marca marca;
	private Cor cor;
	
	public Veiculo() {}

	public Veiculo(String placa, Modelo modelo) {
		super();
		this.placa = placa;
		this.modelo = modelo;
	}

	public Veiculo(int idVeiculo, String placa, String observacoesVeiculo, Modelo modelo, Cor cor) {
		super();
		this.idVeiculo = idVeiculo;
		this.placa = placa;
		this.observacoesVeiculo = observacoesVeiculo;
		this.modelo = modelo;
		this.cor = cor;
	}
	
	

	public Marca getMarca() {
		return marca;
	}

	public void setMarca(Marca marca) {
		this.marca = marca;
	}

	public Cor getCor() {
		return cor;
	}

	public void setCor(Cor cor) {
		this.cor = cor;
	}

	public int getIdVeiculo() {
		return idVeiculo;
	}

	public void setIdVeiculo(int idVeiculo) {
		this.idVeiculo = idVeiculo;
	}

	public String getPlaca() {
		return placa;
	}

	public void setPlaca(String placa) {
		this.placa = placa;
	}

	public String getObservacoesVeiculo() {
		return observacoesVeiculo;
	}

	public void setObservacoesVeiculo(String observacoesVeiculo) {
		this.observacoesVeiculo = observacoesVeiculo;
	}

	public Modelo getModelo() {
		return modelo;
	}

	public void setModelo(Modelo modelo) {
		this.modelo = modelo;
	}
	
	public Cliente getCliente() {
		return cliente;
	}
	
	public void setCliente(Cliente cliente) {
		this.cliente = cliente;
	}

	@Override
	public String getDados() {
		StringBuilder sb = new StringBuilder();
		sb.append("Placa: ").append(placa).append("\n");
		sb.append("Modelo: ").append(modelo.getDescricaoModelo()).append("\n");
		sb.append("Marca: ").append(modelo.getMarca().getNomeMarca()).append("\n");
		sb.append("Categoria: ").append(modelo.getCategoria()).append("\n");
		sb.append("Potência do motor: ").append(modelo.getMotor().getPotencia());
		return sb.toString();
	}

	@Override
	public String getDados(String observacao) {
		StringBuilder sb = new StringBuilder();
		sb.append("\n").append(getDados()).append(observacao);
		return null;
	}

}
