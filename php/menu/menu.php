<?php

$menu[0]["title"] = "Rastreamento";
$menu[0]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false];
$menu[0]["items"]["root"]["children"][0]["text"] = "Sumário";
$menu[0]["items"]["root"]["children"][0]["leaf"] = true;
$menu[0]["items"]["root"]["children"][0]["iconCls"] = "x-tree-icon";
$menu[0]["items"]["root"]["children"][0]["tab"] = "Sumario";
$menu[0]["items"]["root"]["children"][1]["text"] = "Localizar Veículo";
$menu[0]["items"]["root"]["children"][1]["leaf"] = true;
$menu[0]["items"]["root"]["children"][1]["iconCls"] = "x-tree-icon";
$menu[0]["items"]["root"]["children"][2]["text"] = "Ponto de Referência";
$menu[0]["items"]["root"]["children"][2]["leaf"] = true;
$menu[0]["items"]["root"]["children"][3]["text"] = "Cerca";
$menu[0]["items"]["root"]["children"][3]["leaf"] = true;
$menu[0]["items"]["root"]["children"][3]["iconCls"] = "x-tree-icon";
$menu[0]["items"]["root"]["children"][4]["text"] = "Trajeto";
$menu[0]["items"]["root"]["children"][4]["leaf"] = true;
$menu[0]["items"]["root"]["children"][4]["iconCls"] = "x-tree-icon";
$menu[0]["items"]["root"]["children"][5]["text"] = "Pessoas";
$menu[0]["items"]["root"]["children"][5]["leaf"] = true;
$menu[0]["items"]["root"]["children"][5]["iconCls"] = "x-tree-icon";
$menu[0]["items"]["root"]["children"][5]["tab"] = "Pessoas";

$menu[1]["title"] = "Relatório";
$menu[1]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false];
$menu[1]["items"]["root"]["children"][0]["text"] = "Deslocamento e Parada";
$menu[1]["items"]["root"]["children"][0]["leaf"] = true;
$menu[1]["items"]["root"]["children"][0]["iconCls"] = "x-tree-icon";
$menu[1]["items"]["root"]["children"][1]["text"] = "Velocidade";
$menu[1]["items"]["root"]["children"][1]["leaf"] = true;
$menu[1]["items"]["root"]["children"][1]["iconCls"] = "x-tree-icon";
$menu[1]["items"]["root"]["children"][2]["text"] = "Último Registro";
$menu[1]["items"]["root"]["children"][2]["leaf"] = true;
$menu[1]["items"]["root"]["children"][2]["iconCls"] = "x-tree-icon";

$menu[2]["title"] = "Cadastro";
$menu[2]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false];
$menu[2]["items"]["root"]["children"][0]["text"] = "Empresa";
$menu[2]["items"]["root"]["children"][0]["leaf"] = true;
$menu[2]["items"]["root"]["children"][0]["iconCls"] = "x-tree-icon";
$menu[2]["items"]["root"]["children"][1]["text"] = "Cliente";
$menu[2]["items"]["root"]["children"][1]["leaf"] = true;
$menu[2]["items"]["root"]["children"][1]["iconCls"] = "x-tree-icon";
$menu[2]["items"]["root"]["children"][2]["text"] = "Filial";
$menu[2]["items"]["root"]["children"][2]["leaf"] = true;
$menu[2]["items"]["root"]["children"][2]["iconCls"] = "x-tree-icon";
$menu[2]["items"]["root"]["children"][3]["text"] = "Usuário";
$menu[2]["items"]["root"]["children"][3]["leaf"] = true;
$menu[2]["items"]["root"]["children"][3]["iconCls"] = "x-tree-icon";
$menu[2]["items"]["root"]["children"][4]["text"] = "Equipamento";
$menu[2]["items"]["root"]["children"][4]["leaf"] = true;
$menu[2]["items"]["root"]["children"][4]["iconCls"] = "x-tree-icon";
$menu[2]["items"]["root"]["children"][5]["text"] = "Veículo";
$menu[2]["items"]["root"]["children"][5]["leaf"] = true;
$menu[2]["items"]["root"]["children"][5]["iconCls"] = "x-tree-icon";

echo json_encode($menu);

?>