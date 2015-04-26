<?php
$menu = [];
$menu[]["title"] = "Gerenciar";
$menu[]["title"] = "Relatórios";
$menu[]["title"] = "Contratos";
$i = 0;
foreach($menu as $key => $value) {
 $menu[$key]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false];
 $menu[$key]["items"]["root"]["children"] = [];
 $menu[$key]["items"]["root"]["children"][0]["text"] = "Nota Fiscal1";
 $menu[$key]["items"]["root"]["children"][0]["expanded"] = true;
 $menu[$key]["items"]["root"]["children"][0]["iconCls"] = 'x-tree-icon';


 $menu[$key]["items"]["root"]["children"][0]["children"] = [];
 $menu[$key]["items"]["root"]["children"][0]["children"][0]["text"] = "Pessoas";
 $menu[$key]["items"]["root"]["children"][0]["children"][0]["leaf"] = true;
 $menu[$key]["items"]["root"]["children"][0]["children"][0]["tab"] = "Pessoas";

 $menu[$key]["items"]["root"]["children"][0]["children"][1]["text"] = "Pessoas";
 $menu[$key]["items"]["root"]["children"][0]["children"][1]["leaf"] = true;
 $menu[$key]["items"]["root"]["children"][0]["children"][1]["tab"] = "Pessoas";

 $menu[$key]["items"]["root"]["children"][0]["children"][2]["text"] = "Teste";
 $menu[$key]["items"]["root"]["children"][0]["children"][2]["leaf"] = true;


 $menu[$key]["items"]["root"]["children"][1]["text"] = "Nota Fiscal2";
 $menu[$key]["items"]["root"]["children"][1]["leaf"] = true;
 $menu[$key]["items"]["root"]["children"][2]["text"] = "Nota Fiscal3";
 $menu[$key]["items"]["root"]["children"][2]["leaf"] = true;
 $menu[$key]["items"]["root"]["children"][3]["text"] = "Nota Fiscal4";
 $menu[$key]["items"]["root"]["children"][3]["leaf"] = true;
 ++$i;
}
echo json_encode($menu);
//print_r($menu);




// $menu = [];
// $menu[]["title"] = "Gerenciar";
// $menu[]["title"] = "Relatórios";
// $menu[]["title"] = "Contratos";
// $i = 0;
// foreach($menu as $key => $value) {
//  $menu[$key]["items"] = ["xtype" => "treepanel", "expanded" => true, "rootVisible" => false, "border" => 0];
//  $menu[$key]["items"]["root"]["children"] = [];
//  $menu[$key]["items"]["root"]["children"][0]["text"] = "Nota Fiscal1";
//  $menu[$key]["items"]["root"]["children"][0]["expanded"] = false;
// 	 $menu[$key]["items"]["root"]["children"][0]["children"] = [];
// 	 $menu[$key]["items"]["root"]["children"][0]["children"][0]["text"] = "Teste";
// 	 $menu[$key]["items"]["root"]["children"][0]["children"][0]["leaf"] = true;
// 	 $menu[$key]["items"]["root"]["children"][0]["children"][1]["text"] = "Teste";
// 	 $menu[$key]["items"]["root"]["children"][0]["children"][1]["leaf"] = true;
// 	 $menu[$key]["items"]["root"]["children"][0]["children"][2]["text"] = "Teste";
// 	 $menu[$key]["items"]["root"]["children"][0]["children"][2]["leaf"] = true;
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