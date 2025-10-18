package cliente;

import java.time.LocalDate;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import veiculo.Veiculo;

public abstract class Cliente implements IDados {

	protected int idCliente;
	protected String nomeCliente, celular, email;
	protected Date dataCadastro;
	protected List<Veiculo> ListaDeVeiculos = new ArrayList<Veiculo>(); 
	protected Pontuacao pontuacao;
	
	public Cliente() {
		super();
	}

	public Cliente(int idCliente, String nomeCliente, String celular, String email, Date dataCadastro) {
		super();
		this.idCliente = idCliente;
		this.nomeCliente = nomeCliente;
		this.celular = celular;
		this.email = email;
		this.dataCadastro = dataCadastro;
	}
	
	public Pontuacao getPontuacao() {
		return pontuacao;
	}

	public void setPontuacao(Pontuacao pontuacao) {
		this.pontuacao = pontuacao;
	}

	public List<Veiculo> getListaDeVeiculos(){
		return ListaDeVeiculos;
	}

	public void adicionarVeiculo(Veiculo veiculo) {
		ListaDeVeiculos.add(veiculo);
		veiculo.setCliente(this);
	}
	
	public void removerVeiculo(Veiculo veiculo) {
		ListaDeVeiculos.remove(veiculo);
		veiculo.setCliente(null);
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

	public Date getDataCadastro() {
		return dataCadastro;
	}

	public void setDataCadastro(Date dataCadastro) {
		this.dataCadastro = dataCadastro;
	}

	@Override
	public String toString() {
		return "Cliente [idCliente=" + idCliente + ", nomeCliente=" + nomeCliente + ", celular=" + celular + ", email="
				+ email + ", dataCadastro=" + dataCadastro + ", ListaDeVeiculos=" + ListaDeVeiculos + ", pontuacao="
				+ pontuacao + "]";
	}

	@Override
	public String getDados() {
		StringBuilder sb = new StringBuilder();
		sb.append("Nome_____________: ").append(nomeCliente).append("\n");
		sb.append("Celular__________: ").append(celular).append("\n");
		sb.append("E-mail___________: ").append(email).append("\n");
		sb.append("Data de Cadastro_: ").append(dataCadastro).append("\n");
		sb.append("Pontuação________: ").append(pontuacao.verificarPontos()).append("\n");
		return sb.toString();
	}
	@Override
	public String getDados(String observacao) {
		StringBuilder sb = new StringBuilder();
		sb.append(getDados()).append(observacao);
		return sb.toString();
	}

}

