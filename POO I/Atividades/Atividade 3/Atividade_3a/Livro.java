package Atividade_3a;

public class Livro {
	private int id;
	private String titulo, isbn, autor, editora;
	private float precoCusto, precoVenda, margemLucro;
	// precoVenda não deverá ter um método Set, deverá ter um método getPrecoVenda chamando o calcularPrecoVenda
	
	public Livro() {
		
	}
	
	public Livro(int id, String titulo, String isbn, String autor, String editora, float precoCusto,
			float margemLucro) {
		this.id = id;
		this.titulo = titulo;
		this.isbn = isbn;
		this.autor = autor;
		this.editora = editora;
		this.precoCusto = precoCusto;
		this.margemLucro = margemLucro;
	}
	
	public void setId(int id) {
		this.id = id;
	}
	
	public int getId() {
		return id;
	}
	
	public void setTitulo(String titulo) {
		this.titulo = titulo;
	}
	
	public String getTitulo() {
		return titulo;
	}
	
	public void setIsbn(String isbn) {
		this.isbn = isbn;
	}
	
	public String getIsbn() {
		return isbn;
	}
	
	public void setAutor(String autor) {
		this.autor = autor;
	}
	
	public String getAutor() {
		return autor;
	}
	
	public void setEditora(String editora) {
		this.editora = editora;
	}
	
	public String getEditora() {
		return editora;
	}
	
	public void setPrecoCusto(float precoCusto) {
		this.precoCusto = precoCusto;
	}
	
	public float getPrecoCusto() {
		return precoCusto;
	}
	
	public void setMargemLucro(float margemLucro) {
		this.margemLucro = margemLucro;
	}
	
	public float getMargemLucro() {
		return margemLucro;
	}
	
	public void calcularPrecoVenda(float precoCusto, float margemLucro) {
		precoVenda = precoCusto + ((precoCusto * margemLucro)/100);
	}
	public float getPrecoVenda() {
		calcularPrecoVenda(precoCusto, margemLucro);
		return precoVenda;
	}
}
