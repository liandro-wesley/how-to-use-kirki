<?php 

Kirki::add_config('kirkiexample', array(
	'capability' => 'edit_theme_options',
	'option_type'   => 'theme_mod',
));

Kirki::add_panel('panel-kirkiexample', array(
	'priority'    => 0,
	'title'       => 'Estilos do tema',
  'description' => 'Escolha as melhores combinações para seu tema!',
));

Kirki::add_section('section-color', array(
	'title'          => 'Cores',
  'description'    => 'Escolha suas cores',
  'panel'          => 'panel-kirkiexample',
  'priority'       => 0,
));

Kirki::add_field( 'kirkiexample', [
	'type'        => 'color-palette',
	'settings'    => 'color_palette_setting_0',
	'label'       => 'Qual cor você mais gosta?',
	'tooltip' => 'Dentre as cores abaixo, selecione a que você mais gostou',
	'section'     => 'section-color',
	'default'     => '#2764F1',
	'choices'     => [
		'colors' => [ '#2764F1', '#DC493A', '#F18F01', '#136F63', '#191923' ],
		'style'  => 'round',
	],
	'output'      => [
		[
			'element' => '.color-primary',
			'property' => 'background-color',
		],
	],

] );

Kirki::add_section('section-tipografia', array(
	'title'          => 'Tipografia',
  'description'    => 'Escolha a sua tipografia',
  'panel'          => 'panel-kirkiexample',
  'priority'       => 0,
));

Kirki::add_field( 'kirkiexample', [
	'type'        => 'typography',
	'settings'    => 'typography_setting',
	'label'       => 'Escolha a fonte para o título do cabeçalho',
	'tooltip' => 'Na opção título do cabeçalho, seleciona a tipografia que mais lhe agradar',
	'section'     => 'section-tipografia',
	'default'     => [
		'font-family'    => 'Arial',
		'font-size'      => '36px',
		'line-height'    => '75px',
		'color'          => '#fff',
		'text-align'     => 'center',
	],
	'priority' => 10,
	'transport' => 'auto',
	'output'      => [
		[
			'element' => 'h1',
		],
	],

] );

Kirki::add_field( 'kirkiexample', [
	'type'        => 'typography',
	'settings'    => 'typography_setting_0',
	'label'       => 'Escolha a fonte para o título do post',
	'tooltip' => 'Na opção título do post, seleciona a tipografia que mais lhe agradar',
	'section'     => 'section-tipografia',
	'default'     => [
		'font-family'    => 'Roboto',
		'font-size'      => '20px',
		'font-weight'    => '500',
		'line-height'    => '30px',
		'color'          => '#000',
		'text-align'     => 'left',
	],
	'priority' => 10,
	'transport' => 'auto',
	'output'      => [
		[
			'element' => 'h2',
		],
	],

] );

Kirki::add_field( 'kirkiexample', [
	'type'        => 'typography',
	'settings'    => 'typography_setting_1',
	'label'       => 'Escolha a fonte para o conteúdo do post',
	'tooltip' => 'Na opção conteúdo do post, seleciona a tipografia que mais lhe agradar',
	'section'     => 'section-tipografia',
	'default'     => [
		'font-family'    => 'Roboto',
		'font-size'      => '16px',
		'line-height'    => '24px',
		'color'          => '#000',
		'text-align'     => 'left',
	],
	'priority' => 10,
	'transport' => 'auto',
	'output'      => [
		[
			'element' => '.posts__content-text',
		],
	],

] );