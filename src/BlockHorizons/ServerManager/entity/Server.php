<?php

namespace BlockHorizons\ServerManager\entity;

class Server {
	/** @var string */
	private $name, $address;
	
	/** @var bool */
	private $restricted;

	public function __construct(string $name, string $address, bool $restricted = false) {
		$this->name = $name;
		$this->address = $address;
		$this->restricted = $restricted;
	}
	
	public function getName(): string {
		return $this->name;
	}
	
	public function setName(string $name) {
		$this->name = $name;
	}
	
	public function getAddress(): string {
		return $this->address;
	}
	
	public function setAddress(string $address) {
		$this->address = $address;
	}
	
	public function isRestricted(): bool {
		return $this->restricted;
	}
}
