package cliente;

import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

import veiculo.Veiculo;

public class Cliente {

	private int idCliente;
	private String nomeCliente, celular, email;
	private LocalDate dataCadastro;
	private List<Veiculo> ListaDeVeiculos = new ArrayList<Veiculo>(); 
	
	public Cliente() {
		super();
	}

	public Cliente(int idCliente, String nomeCliente, String celular, String email, LocalDate dataCadastro) {
		super();
		this.idCliente = idCliente;
		this.nomeCliente = nomeCliente;
		this.celular = celular;
		this.email = email;
		this.dataCadastro = dataCadastro;
	}
	
	public List<Veiculo> getListaDeVeiculos(){
		return ListaDeVeiculos;
	}

	public void adicionarVeiculo(Veiculo veiculo) {
		ListaDeVeiculos.add(veiculo);
		veiculo.setCliente(this);
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
	
	public void mostrarVeiculos() {
		int carros = 1;
		for (Veiculo veiculo : ListaDeVeiculos) {
			System.out.println("-----------------CARRO "+carros+" ----------------");
			System.out.println("Placa______________: "+veiculo.getPlaca());
			System.out.println("Marca______________: "+veiculo.getModelo().getMarca().getNomeMarca());
			System.out.println("Modelo_____________: "+veiculo.getModelo().getDescricaoModelo());
			System.out.println("Cor________________: "+veiculo.getCor().getNomeCor());
			System.out.println("Categoria do carro_: "+veiculo.getModelo().getCategoria());
			carros++;
		}
	}

}
