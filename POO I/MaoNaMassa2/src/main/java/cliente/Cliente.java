package cliente;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.List;

import veiculo.Veiculo;

public abstract class Cliente implements IDados {

	// RETIRADA A COMPLEMENTAÇÃO DOS NOMES
	protected int id;
	protected String nome, celular, email;
	protected LocalDate dataCadastro;
	protected List<Veiculo> ListaDeVeiculos = new ArrayList<Veiculo>(); 
	protected Pontuacao pontuacao;
	
	public Cliente() {
		super();
	}

	public Cliente(int id, String nome, String celular, String email, LocalDate dataCadastro) {
		super();
		this.id = id;
		this.nome = nome;
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
		return id;
	}

	public void setIdCliente(int id) {
		this.id = id;
	}

	public String getNomeCliente() {
		return nome;
	}

	public void setNomeCliente(String nome) {
		this.nome = nome;
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

	@Override
	public String toString() {
		return "Cliente [idCliente=" + id + ", nomeCliente=" + nome + ", celular=" + celular + ", email="
				+ email + ", dataCadastro=" + dataCadastro + ", ListaDeVeiculos=" + ListaDeVeiculos + ", pontuacao="
				+ pontuacao + "]";
	}

	@Override
	public String getDados() {
		
		DateTimeFormatter formatadorData = DateTimeFormatter.ofPattern("dd/MM/yyyy");
		StringBuilder sb = new StringBuilder();
		sb.append("Nome________________: ").append(nome).append("\n");
		sb.append("Celular_____________: ").append(celular).append("\n");
		sb.append("E-mail______________: ").append(email).append("\n");
		sb.append("Data de Cadastro____: ").append(dataCadastro.format(formatadorData)).append("\n");
		sb.append("Pontuação___________: ").append(pontuacao.verificarPontos()).append("\n");
		return sb.toString();
	}
	@Override
	public String getDados(String observacao) {
		StringBuilder sb = new StringBuilder();
		sb.append(getDados()).append(observacao);
		return sb.toString();
	}

}

