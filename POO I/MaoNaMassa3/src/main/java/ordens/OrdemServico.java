package ordens;

import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

import exceptions.ExceptionLavacao;
import veiculo.Veiculo;

public class OrdemServico {

	private long numero;
	private double total, desconto;
	private LocalDate agenda;
	private EStatus status = EStatus.ABERTA;
	private Veiculo veiculo; 
	private List<ItemOS> itens = new ArrayList<>();
	
	public OrdemServico(long numero) {
		super();
		this.numero = numero;
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
	
	public void setDesconto(double desconto) throws ExceptionLavacao {
		if (desconto < 0 || desconto > 100) {
			throw new ExceptionLavacao("O valor do desconto não é viável!!");
		}
		else {
			this.desconto = desconto;
		}
	}
	
	public LocalDate getAgenda() {
		return agenda;
	}
	
	public void setAgenda(LocalDate agenda) {
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

	
	public void adicionarItem(ItemOS item, Servico servico) throws ExceptionLavacao {
		if (this.status != EStatus.ABERTA) {
			throw new ExceptionLavacao("Não é possível adicionar a ordem pois não está aberta");
		}
		else {
			ItemOS itemServico = new ItemOS(Servico.getPontos(), servico.getDescricao(), servico);
			itemServico.setOrdemServico(this);
			this.itens.add(itemServico);
		}
	}
	
	public void removerItem(ItemOS item, Servico servico) throws ExceptionLavacao {
		if (this.status != EStatus.ABERTA) {
			throw new ExceptionLavacao("A ordem já não está mais em circulação, portanto a ação é inválida");
		}
		else {
			ItemOS itemServico = new ItemOS(Servico.getPontos(), servico.getDescricao(), servico);
			itemServico.setOrdemServico(this);
			this.itens.add(itemServico);
		}
	}
	
	public double calcularServico() throws ExceptionLavacao {
		if (itens.isEmpty()) {
			throw new ExceptionLavacao("A lista de ordens está vazia, portanto não há valor!!");
		}
		else {
			for(ItemOS item : itens) {
				this.getVeiculo().getCliente().getPontuacao().somarPontos(Servico.getPontos());
				total += item.getValorServico();
				return total - (total * (desconto*0.01));
			}
		}
		return total;
	}
	
}
