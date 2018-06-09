<?php 
namespace App;

class InputLink{
	public $neuron;
	public $weight;

	public function __construct(Neuron $neuron, float $weight){
		$this->neuron = $neuron;
		$this->weight = $weight;
	}

	/**
	 * Devuelve "Xi * Wi"
	 */
	public function value(){
		return $this->neuron->outputFunction() * $this->weight;
	}
}