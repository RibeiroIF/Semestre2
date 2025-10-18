package Atividade_1b;

public class Main_atividade1b {

	public static void main(String[] args) {
	
	Caneta caneta1 = new Caneta();
	Caneta caneta2 = new Caneta();
	
	caneta1.cor = "Azul";
	caneta1.marca = "BIC";
	caneta1.ponta = 1.5;
	caneta1.tampada = true;
	caneta1.tintaPorcentagem = 30;
	
	caneta2.cor = "Verde";
	caneta2.marca = "Stabilo";
	caneta2.ponta = 3;
	caneta2.tampada = false;
	caneta2.tintaPorcentagem = 80;
	
	System.out.println("Cor da caneta 1: "+caneta1.cor+""
					+ "\nMarca da caneta 1: "+caneta1.marca+""
					+ "\nPonta da caneta 1: "+caneta1.ponta+""
					+ "\nA caneta 1 está tampada?: "+caneta1.tampada+""
					+ "\nPorcentagem de tinta da caneta 1: "+caneta1.tintaPorcentagem+"%");
	
	System.out.println("---------------------------");
	
	System.out.println("Cor da caneta 2: "+caneta2.cor+""
					+ "\nMarca da caneta 2: "+caneta2.marca+""
					+ "\nPonta da caneta 2: "+caneta2.ponta+""
					+ "\nA caneta 2 está tampada?: "+caneta2.tampada+""
					+ "\nPorcentagem de tinta da caneta 2: "+caneta2.tintaPorcentagem+"%");

	}

}
