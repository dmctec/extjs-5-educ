<?php
// $menu = [
// [
// "text" => "Rastreamento",
// "expanded" => true,
// "leaf" => false,
// "children" => [
// 	[
// 	"text" => "Sumário",
// 	"leaf" => true
// 	],
// 	[
// 	"text" => "Pessoa",
// 	"leaf" => true
// 	]
// ]

// ],
// [
// "text" => "Relatorio",
// "expanded" => true,
// "leaf" => false,
// "children" => [
// 	[
// 	"text" => "Sumário 2",
// 	"leaf" => true
// 	],
// 	[
// 	"text" => "Pessoa 2",
// 	"leaf" => true
// 	]
// ]

// ]
// ];
// echo json_encode($menu);

$menu[0]["title"] = "Rastreamento";
$menu[0]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false];
$menu[0]["items"]["root"]["children"][0]["text"] = "Sumário";
$menu[0]["items"]["root"]["children"][0]["leaf"] = true;
$menu[0]["items"]["root"]["children"][0]["iconCls"] = 'x-tree-icon';
$menu[0]["items"]["root"]["children"][0]["tab"] = "Sumario";
$menu[0]["items"]["root"]["children"][1]["text"] = "Localizar Veículo";
$menu[0]["items"]["root"]["children"][1]["leaf"] = true;
$menu[0]["items"]["root"]["children"][1]["iconCls"] = 'x-tree-icon';
$menu[0]["items"]["root"]["children"][2]["text"] = "Ponto de Referência";
$menu[0]["items"]["root"]["children"][2]["leaf"] = true;
$menu[0]["items"]["root"]["children"][3]["text"] = "Cerca";
$menu[0]["items"]["root"]["children"][3]["leaf"] = true;
$menu[0]["items"]["root"]["children"][3]["iconCls"] = 'x-tree-icon';
$menu[0]["items"]["root"]["children"][4]["text"] = "Trajeto";
$menu[0]["items"]["root"]["children"][4]["leaf"] = true;
$menu[0]["items"]["root"]["children"][4]["iconCls"] = 'x-tree-icon';
$menu[0]["items"]["root"]["children"][5]["text"] = "Pessoas";
$menu[0]["items"]["root"]["children"][5]["leaf"] = true;
$menu[0]["items"]["root"]["children"][5]["iconCls"] = 'x-tree-icon';
$menu[0]["items"]["root"]["children"][5]["tab"] = "Pessoas";

$menu[1]["title"] = "Relatório";
$menu[1]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false];
$menu[1]["items"]["root"]["children"][0]["text"] = "Deslocamento e Parada";
$menu[1]["items"]["root"]["children"][0]["leaf"] = true;
$menu[1]["items"]["root"]["children"][0]["iconCls"] = 'x-tree-icon';
$menu[1]["items"]["root"]["children"][1]["text"] = "Velocidade";
$menu[1]["items"]["root"]["children"][1]["leaf"] = true;
$menu[1]["items"]["root"]["children"][1]["iconCls"] = 'x-tree-icon';
$menu[1]["items"]["root"]["children"][2]["text"] = "Último Registro";
$menu[1]["items"]["root"]["children"][2]["leaf"] = true;
$menu[1]["items"]["root"]["children"][2]["iconCls"] = 'x-tree-icon';

$menu[2]["title"] = "Cadastro";
$menu[2]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false];
$menu[2]["items"]["root"]["children"][0]["text"] = "Empresa";
$menu[2]["items"]["root"]["children"][0]["leaf"] = true;
$menu[2]["items"]["root"]["children"][0]["iconCls"] = 'x-tree-icon';
$menu[2]["items"]["root"]["children"][1]["text"] = "Cliente";
$menu[2]["items"]["root"]["children"][1]["leaf"] = true;
$menu[2]["items"]["root"]["children"][1]["iconCls"] = 'x-tree-icon';
$menu[2]["items"]["root"]["children"][2]["text"] = "Filial";
$menu[2]["items"]["root"]["children"][2]["leaf"] = true;
$menu[2]["items"]["root"]["children"][2]["iconCls"] = 'x-tree-icon';
$menu[2]["items"]["root"]["children"][3]["text"] = "Usuário";
$menu[2]["items"]["root"]["children"][3]["leaf"] = true;
$menu[2]["items"]["root"]["children"][3]["iconCls"] = 'x-tree-icon';
$menu[2]["items"]["root"]["children"][4]["text"] = "Equipamento";
$menu[2]["items"]["root"]["children"][4]["leaf"] = true;
$menu[2]["items"]["root"]["children"][4]["iconCls"] = 'x-tree-icon';
$menu[2]["items"]["root"]["children"][5]["text"] = "Veículo";
$menu[2]["items"]["root"]["children"][5]["leaf"] = true;
$menu[2]["items"]["root"]["children"][5]["iconCls"] = 'x-tree-icon';

echo json_encode($menu);


// $menu = [];
// $menu[]["title"] = "Gerenciar";
// $menu[]["title"] = "Relatórios";
// $menu[]["title"] = "Contratos";
// $i = 0;
// foreach($menu as $key => $value) {
//  $menu[$key]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false];
//  $menu[$key]["items"]["root"]["children"] = [];
//  $menu[$key]["items"]["root"]["children"][0]["text"] = "Nota Fiscal1";
//  $menu[$key]["items"]["root"]["children"][0]["expanded"] = true;
//  $menu[$key]["items"]["root"]["children"][0]["iconCls"] = 'x-tree-icon';


//  $menu[$key]["items"]["root"]["children"][0]["children"] = [];
//  $menu[$key]["items"]["root"]["children"][0]["children"][0]["text"] = "Sumário";
//  $menu[$key]["items"]["root"]["children"][0]["children"][0]["leaf"] = true;
//  $menu[$key]["items"]["root"]["children"][0]["children"][0]["tab"] = "Sumario";

//  $menu[$key]["items"]["root"]["children"][0]["children"][1]["text"] = "Pessoas";
//  $menu[$key]["items"]["root"]["children"][0]["children"][1]["leaf"] = true;
//  $menu[$key]["items"]["root"]["children"][0]["children"][1]["tab"] = "Pessoas";

//  $menu[$key]["items"]["root"]["children"][0]["children"][2]["text"] = "Teste";
//  $menu[$key]["items"]["root"]["children"][0]["children"][2]["leaf"] = true;


//  $menu[$key]["items"]["root"]["children"][1]["text"] = "Nota Fiscal2";
//  $menu[$key]["items"]["root"]["children"][1]["leaf"] = true;
//  $menu[$key]["items"]["root"]["children"][2]["text"] = "Nota Fiscal3";
//  $menu[$key]["items"]["root"]["children"][2]["leaf"] = true;
//  $menu[$key]["items"]["root"]["children"][3]["text"] = "Nota Fiscal4";
//  $menu[$key]["items"]["root"]["children"][3]["leaf"] = true;
//  ++$i;
// }
// echo json_encode($menu);


?>