package atividadeComplementar4;

public class Paciente {

	private String nome, cpf, ruaEndereco;
	private Cidade cidade;
	private Endereco endereco;

	public Paciente() {}
	
	public Paciente(String nome, String cpf, String ruaEndereco, Cidade cidade, 
			Endereco endereco) {
		super();
		this.nome = nome;
		this.cpf = cpf;
		this.ruaEndereco = ruaEndereco;
		this.cidade = cidade;
		this.endereco = endereco;
	}

	public String getRuaEndereco() {
		return ruaEndereco;
	}

	public Endereco getEndereco() {
		return endereco;
	}

	public void setEndereco(Endereco endereco) {
		this.endereco = endereco;
	}

	public void setRuaEndereco(String ruaEndereco) {
		this.ruaEndereco = endereco.getRua();
	}

	public Cidade getCidade() {
		return cidade;
	}

	public void setCidade(Cidade cidade) {
		this.cidade = cidade;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getCpf() {
		return cpf;
	}

	public void setCpf(String cpf) {
		this.cpf = cpf;
	}

	@Override
	public String toString() {
		return "Paciente [nome=" + nome + ", cpf=" + cpf + ", ruaEndereco=" + ruaEndereco + ", cidade=" + cidade
				+ ", endereco=" + endereco + "]";
	}
	
	
}
