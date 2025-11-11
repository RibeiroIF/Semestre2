package veiculo;

import cliente.Cliente;
import cliente.IDados;

public class Veiculo implements IDados {

	// RETIRADA A COMPLEMENTAÇÃO DOS NOMES
	private int id;
	private String placa, observacoes;
	private Modelo modelo;
	private Cliente cliente;
	private Cor cor;
	// CORREÇÃO FEITA, RETIRANDO A DECLARAÇÃO PARA MARCA
	
	public Veiculo() {}

	public Veiculo(String placa, Modelo modelo) {
		super();
		this.placa = placa;
		this.modelo = modelo;
	}

	public Veiculo(int id, String placa, String observacoes, Modelo modelo, Cor cor) {
		super();
		this.id = id;
		this.placa = placa;
		this.observacoes = observacoes;
		this.modelo = modelo;
		this.cor = cor;
	}

	public Cor getCor() {
		return cor;
	}

	public void setCor(Cor cor) {
		this.cor = cor;
	}

	public int getIdVeiculo() {
		return id;
	}

	public void setIdVeiculo(int idVeiculo) {
		this.id = idVeiculo;
	}

	public String getPlaca() {
		return placa;
	}

	public void setPlaca(String placa) {
		this.placa = placa;
	}

	public String getObservacoesVeiculo() {
		return observacoes;
	}

	public void setObservacoesVeiculo(String observacoesVeiculo) {
		this.observacoes = observacoesVeiculo;
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

	// ESTE É O DESAFIO PROPOSTO PARA O MÃO NA MASSA 2
	
	@Override
	public String getDados() {
		StringBuilder sb = new StringBuilder();
		sb.append("Placa...............: ").append(placa).append("\n");
		sb.append("Modelo..............: ").append(modelo.getDescricaoModelo()).append("\n");
		sb.append("Marca...............: ").append(modelo.getMarca().getNomeMarca()).append("\n");
		sb.append("Cor.................: ").append(cor.getNomeCor()).append("\n");
		sb.append("Categoria...........: ").append(modelo.getCategoria().getDescricao()).append("\n");
		sb.append("Potência do motor...: ").append(modelo.getMotor().getPotencia()).append("\n");
		sb.append("Tipo de combustível.: ").append(modelo.getMotor().getTipoCombustivel().getDescricao());
		return sb.toString();
	}

	@Override
	public String getDados(String observacao) {
		StringBuilder sb = new StringBuilder();
		sb.append("\n").append(getDados()).append(observacao);
		return sb.toString();
	}

}
