package main.mao_na_massa;

import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

public class Cliente {

	private int idCliente;
	private String nomeCliente, celular, email; 
	private LocalDate dataCadastro;
	List<Veiculo> veiculos = new ArrayList<Veiculo>();
	
	public void adicionarVeiculo(Veiculo veiculo) {
		veiculos.add(veiculo);
	}
	
	public void removerVeiculo(Veiculo veiculo) {
		veiculos.add(veiculo);
	}

	public Cliente() {}
	
	public Cliente(int idCliente, String nomeCliente, String celular, String email, LocalDate dataCadastro) {
		super();
		this.idCliente = idCliente;
		this.nomeCliente = nomeCliente;
		this.celular = celular;
		this.email = email;
		this.dataCadastro = dataCadastro;
	}
	
	public int getIdCliente() {
		return idCliente;
	}
	
	public void setIdCliente(int idCliente) {
		this.idCliente = idCliente;
	}
	
	public String getNomeCliente() {
		return nomeCliente;
	}
	
	public void setNomeCliente(String nomeCliente) {
		this.nomeCliente = nomeCliente;
	}
	
	public String getCelular() {
		return celular;
	}
	
	public void setCelular(String celular) {
		this.celular = celular;
	}
	
	public String getEmail() {
		return email;
	}
	
	public void setEmail(String email) {
		this.email = email;
	}
	
	public LocalDate getDataCadastro() {
		return dataCadastro;
	}
	
	public void setDataCadastro(LocalDate dataCadastro) {
		this.dataCadastro = dataCadastro;
	}
	
	
}
