package ordem.de.servico;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import exceptions.ExceptionLavacao;
import veiculo.Veiculo;

public class OrdemServico {

	private long numero;
	private double total, desconto;
	private Date agenda;
	private Veiculo veiculo;
	private EStatus status = EStatus.ABERTA;
	private List<ItemOS> ordem = new ArrayList<>();
	
	public OrdemServico() {
		super();
	}
	
	public long getNumero() {
		return numero;
	}
	
	public void setNumero(long numero) {
		this.numero = numero;
	}
	
	public double getTotal() {
		return total;
	}
	
	public void setTotal(double total) {
		this.total = total;
	}
	
	public double getDesconto() {
		return desconto;
	}
	
	public void setDesconto(double desconto) {
		this.desconto = desconto;
	}
	
	public Date getAgenda() {
		return agenda;
	}
	
	public void setAgenda(Date agenda) {
		this.agenda = agenda;
	}
	
	public Veiculo getVeiculo() {
		return veiculo;
	}

	public EStatus getStatus() {
		return status;
	}

	public void setStatus(EStatus status) {
		this.status = status;
	}

	public double calcularServico() {
		return total;
	}
	
	public void adicionarItem(ItemOS item) throws ExceptionLavacao {
		if (this.status != EStatus.ABERTA) {
			throw new ExceptionLavacao("Não é possível adicionar a ordem pois não está aberta");
		}
		else {
			this.ordem.add(item);
		}
	}
	
	public void removerItem(ItemOS item) throws ExceptionLavacao {
		if (this.status != EStatus.ABERTA) {
			throw new ExceptionLavacao("A ordem já não está mais em circulação, portanto a ação é inválida");
		}
		else {
			this.ordem.remove(item);
		}
	}
	
}
