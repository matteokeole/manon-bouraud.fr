<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options): void {
		$builder
			->add("name", TextType::class, [
				"required"	=> true,
				"attr"		=> [
					"placeholder" => "Votre nom *",
				],
			])
			->add("email", EmailType::class, [
				"required"	=> true,
				"attr"		=> [
					"placeholder" => "Votre adresse mail *",
				],
			])
			->add("message", TextareaType::class, [
				"required"	=> true,
				"attr"		=> [
					"placeholder" => "Votre message *",
				],
			])
			->add("submit", SubmitType::class, [
				"label" => "Envoyer",
			]);
	}
}