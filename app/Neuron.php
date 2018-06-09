<?php 
namespace App;

class Neuron{
	/**
	 * Theta
	 */
	private $threshold;

	/**
	 * a(t)
	 */
	private $activationState;

	/**
	 * NET
	 */
	public function propagationRule(){

	}

	/**
	 * F(a(t), NET) = a(t+1)
	 */
	public function activationFunction(){
		$newState = null;
		$this->activationState = $newState;
	}

	/**
	 * f(a(t+1)) = Y
	 */
	const STEP_FUNCTION = 1;
	const LINEAR_FUNCTION = 2;
	const MIXED_FUNCTION = 3;
	const SIGMOID_FUNCTION = 4;

	private $outputFunctionType;
	
	public function outputFunction(){
		switch ($this->outputFunctionType) {
			case self::STEP_FUNCTION:

				break;
			case self::LINEAR_FUNCTION:

				break;
			case self::MIXED_FUNCTION:

				break;
			case self::SIGMOID_FUNCTION:

				break;
		}
	}

	private function stepFunction(){
		return ($this->propagationRule >= $this->threshold) ? 1 : 0;
	}
 }