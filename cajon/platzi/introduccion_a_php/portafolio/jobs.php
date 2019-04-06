<?php
####################################
#                                  #
# Documento para probar las clases #
#                                  #
####################################

require 'app/Models/Job.php';
require 'app/Models/Project.php';

require 'lib_1/Project.php';

$job1 = new Job();
// probando instanciar un nuevo objeto sin atributos

echo $job1->getTitle();
echo $job1->getDescription();
echo $job1->getMonths();
echo $job1->getVisible();
// probando el constructor

$job1->setTitle('El mundo del libro');
$job1->setDescription('Vendedor');
$job1->setMonths(16);
$job1->setVisible(false);
// Probando los setters individualmente con parametros

echo $job1->getTitle();
echo $job1->getDescription();
echo $job1->getMonths();
echo $job1->getDuration();
echo $job1->getVisible();
// Probando los getters

$job1->setVisible();
echo $job1->getVisible();
// comprobando el set automatico sin parametro

$job2 = new Job('Tecniciencias', 'Asesor en ventas', 25);
// comprobando la instancia con el constructor con parametros

$jobs = [$job1, $job2];
// creando un arreglo de objetos

$project1 = new Project('Project 01', 'This is a extreme usessfull program!');

$projects = [$project1];

echo $project1->getTitle();
echo $project1->getDescription();
echo $project1->getMonths();

function printElement(Printable $element)
{
	if (!$element->visible())
	// no puedes acceder al atributo privado visible porque estas fuera de la clase y se creo un metodo para acceder al mismo
	{
		return;
	}
	echo '<li class="work-position">';
	echo '<h5>' . $element->getTitle() . '</h5>';
	echo '<p>' . $element->getDescription() . '</p>';
	echo '<p>' . $element->getDuration() . '</p>';
	echo '<strong>Achievements:</strong>';
	echo '<ul>';
	echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
	echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
	echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
	echo '</ul>';
	echo '</li>';
}

printElement($project1);
echo $project1->getVisible();
// no imprime el proyecto porque esta configurado como no visible

$projectLib = new lib_1\Project();
 
