package Atividade_1a;

public class Main_atividade1a {

	public static void main(String[] args) {
	
	Quadrado quadrado = new Quadrado();
	Triangulo triangulo = new Triangulo();
	Circulo circulo = new Circulo();
	
	quadrado.ladoQuadrado = 5.5;
	triangulo.baseTriangulo = 3.7;
	triangulo.alturaTriangulo = 5;
	circulo.raioCirculo = 8.2;
	
	double areaQuadrado = quadrado.ladoQuadrado*quadrado.ladoQuadrado;
	double areaTriangulo = (triangulo.baseTriangulo * triangulo.alturaTriangulo) / 2;
	double areaCirculo = (3.14) * (circulo.raioCirculo*circulo.raioCirculo);
	
	System.out.println("A área do quadrado é de: "+areaQuadrado);
	System.out.println("A área do triângulo é de: "+areaTriangulo);
	System.out.println("E a área do círculo é de: "+areaCirculo);

	}

}
