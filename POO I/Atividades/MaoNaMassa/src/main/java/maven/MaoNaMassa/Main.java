package maven.MaoNaMassa;

import java.time.LocalDate;

public class Main {

	public static void main(String[] args) {
		
		/*FORMATAÇÃO DE DATA PARA POSSÍVEL USO
		DateTimeFormatter formatador = DateTimeFormatter.ofPattern("dd-MM-yyyy HH:mm");
		String dataFormatada = LocalDate.now().format(formatador);*/
		//CORES
		Cor cor1 = new Cor("Azul Escuro");
		Cor cor2 = new Cor("Cinza");
		Cor cor3 = new Cor("Amarelo");
		// MOTORES
		Motor motor1 = new Motor(100 , ETipoCombustivel.DIESEL);
		Motor motor2 = new Motor(200, ETipoCombustivel.ETANOL);
		Motor motor3 = new Motor(150, ETipoCombustivel.GASOLINA);
		// MARCAS
		Marca marca1 = new Marca(1, "BYD");
		Marca marca2 = new Marca(2, "Chevrolet");
		Marca marca3 = new Marca(3, "Toyota");
		// MODELOS
		Modelo modelo1 = new Modelo(11, "Sedan", marca1, motor1, ECategoria.MÉDIO);
		Modelo modelo2 = new Modelo(22, "Esportivo", marca2, motor3, ECategoria.PEQUENO);
		Modelo modelo3 = new Modelo(33, "SUV", marca3, motor2, ECategoria.GRANDE);
		//VEICULOS
		Veiculo veiculo1 = new Veiculo(111, "XXX-7777", "Pequeno e apertado", modelo1, cor1);
		Veiculo veiculo2 = new Veiculo(222, "YYY-2222", "Rápido e barulhento", modelo2, cor3);
		Veiculo veiculo3 = new Veiculo(333, "ZZZ-4444", "Grande e confortável", modelo3, cor2);
		
		Cliente cliente1 = new Cliente(1111, "Gabriel", "(48)99665-8244", "Gabriel@gmail.com", LocalDate.now());
		Cliente cliente2 = new Cliente(2222, "Marcos", "(11)94002-8922", "Marcos@gmail.com", LocalDate.now());
		
		cliente1.adicionarVeiculo(veiculo1);
		cliente2.adicionarVeiculo(veiculo2);
		cliente2.adicionarVeiculo(veiculo3);
		
		print(cliente1);
		print(cliente2);

	}
	
	public static void print(Cliente cliente) {
		System.out.println("------------------------");
		System.out.println("Nome do cliente: " +cliente.getNomeCliente());
		cliente.mostrarVeiculos();
	}

}
