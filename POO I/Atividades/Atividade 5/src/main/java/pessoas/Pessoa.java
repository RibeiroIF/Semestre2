package pessoas;

public abstract class Pessoa {

	private String nome, cpf;

	public Pessoa() {
		super();
	}

	public Pessoa(String nome, String cpf) {
		super();
		this.nome = nome;
		this.cpf = cpf;
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
	
	protected String exibirInformacoes() {
		StringBuilder sb = new StringBuilder();
		sb.append("Nome_________:").append(nome).append("\n");
		sb.append("CPF__________:").append(cpf).append("\n");
		return sb.toString();
	}
	
}
