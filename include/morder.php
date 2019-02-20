<?php 

class MOrder
{
	private $mid;
	private $mname;
	private $mprice;
	private $quantity;
	private $av_quantity;
	private $amount;
	
	function __construct($mid, $mname, $mprice, $quantity=0, $av_quantity)
	{
		$this->mid = $mid;
		$this->mname = $mname;
		$this->mprice = $mprice;
		$this->av_quantity = $av_quantity;
		$this->quantity = $quantity;

		$this->amount = $this->mprice * $this->quantity;
	}

	public function setQuantity($quantity)
	{	
		$this->av_quantity += $this->quantity;

		if ($quantity <= $this->av_quantity) {
			$this->quantity = $quantity;
			$this->av_quantity -= $this->quantity;

			$this->amount = $this->mprice * $this->quantity;
			return true;
		}
		else {
			$this->av_quantity -= $this->quantity;
			return false;
		}	
	}

	public function getmid()
	{
		return $this->mid;
	}
	public function getmname()
	{
		return $this->mname;
	}
	public function getmprice()
	{
		return $this->mprice;
	}
	public function getquantity()
	{
		return $this->quantity;
	}
	public function getamount()
	{
		return $this->amount;
	}
	public function getav_quantity()
	{
		return $this->av_quantity;
	}
}


?>