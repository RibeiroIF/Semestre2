package Atividade_3a;

public class Main_Atividade_3a {

	public static void main(String[] args) {
	
	Livro livro1 = new Livro();
	Livro livro2 = new Livro(12, "Mitologia Nórdica", "384272842", "Neil Gailman", "História", 60.00f, 20);
	
	livro1.setId(25);
	livro1.setTitulo("O Rouxinol");
	livro1.setAutor("Kristin Hannan");
	livro1.setEditora("Arqueiro");
	livro1.setIsbn("7548395021385");
	livro1.setPrecoCusto(80.00f);
	livro1.setMargemLucro(30);
	livro1.calcularPrecoVenda(livro1.getPrecoCusto(), livro1.getMargemLucro());
	
	
	System.out.println("Nome do livro: "+livro1.getTitulo()+""
					+ "\nAutor(a) do livro: "+livro1.getAutor()+""
					+ "\nEditora do livro: "+livro1.getEditora()+""
					+ "\nISBN do livro: "+livro1.getIsbn()+""
					+ "\nCusto do livro: R$"+livro1.getPrecoVenda());
	System.out.println("---------------------------");
	System.out.println("Nome do livro: "+livro2.getTitulo()+""
					+ "\nAutor(a) do livro: "+livro2.getAutor()+""
					+ "\nEditora do livro: "+livro2.getEditora()+""
					+ "\nISBN do livro: "+livro2.getIsbn()+""
					+ "\nCusto do livro: R$"+livro2.getPrecoVenda());

	}

}
