<?php

use Nette\Application\UI\Presenter;

class DefaultPresenter extends Presenter
{

	public function formatLayoutTemplateFiles()
	{
		return array(__DIR__ . '/../templates/@layout.latte');
	}

	public function formatTemplateFiles()
	{
		$name = $this->getName();
		$presenter = substr($name, strrpos(':' . $name, ':'));
		$view = $this->view;
		return array(
			__DIR__ . '/../templates/' . $presenter . '.' . $view . '.latte',
			__DIR__ . '/../templates/' . $presenter . '/' . $view . '.latte',
		);
	}

}
