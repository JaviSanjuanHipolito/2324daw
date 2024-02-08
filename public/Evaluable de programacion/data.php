
<?php

$data = [
	[
		"ID" => "BBX28AIL5SZ",
		"Company" => "In Aliquet Corp.",
		"Investment" => "4472729",
		"Date" => "2020-07-09",
		"active" => "True"
	],
	[
		"ID" => "SBV55WFC5MV",
		"Company" => "Integer Vulputate Risus Institute",
		"Investment" => "4471554",
		"Date" => "2019-12-27",
		"active" => "False"
	],
	[
		"ID" => "TEF51NBI7QF",
		"Company" => "Vivamus Nibh LLC",
		"Investment" => "8919033",
		"Date" => "2018-05-28",
		"active" => "False"
	],
	[
		"ID" => "CBM81YFY6XR",
		"Company" => "Eu LLP",
		"Investment" => "8811172",
		"Date" => "2020-06-06",
		"active" => "False"
	],
	[
		"ID" => "PTH79SXU5CW",
		"Company" => "Urna Vivamus Associates",
		"Investment" => "8397876",
		"Date" => "2020-01-12",
		"active" => "False"
	],
	[
		"ID" => "JDW43DAH5CD",
		"Company" => "Varius Orci In LLP",
		"Investment" => "8835239",
		"Date" => "2017-12-14",
		"active" => "False"
	],
	[
		"ID" => "HJL62XCJ5KX",
		"Company" => "Dolor Limited",
		"Investment" => "797550",
		"Date" => "2019-07-06",
		"active" => "False"
	],
	[
		"ID" => "BEG74SPW6JD",
		"Company" => "Suspendisse Eleifend Cras Corporation",
		"Investment" => "261822",
		"Date" => "2018-07-06",
		"active" => "False"
	],
	[
		"ID" => "KIC32QXK5PF",
		"Company" => "Suscipit Nonummy Ltd",
		"Investment" => "1668744",
		"Date" => "2019-12-05",
		"active" => "True"
	],
	[
		"ID" => "RBX62ZFB3GH",
		"Company" => "Ligula Incorporated",
		"Investment" => "9669887",
		"Date" => "2019-07-28",
		"active" => "True"
	],
	[
		"ID" => "SSQ55BYQ3SU",
		"Company" => "In Scelerisque Associates",
		"Investment" => "4982932",
		"Date" => "2020-04-21",
		"active" => "True"
	],
	[
		"ID" => "UXF17XKT9WD",
		"Company" => "Turpis Nec Ltd",
		"Investment" => "2281779",
		"Date" => "2018-09-23",
		"active" => "False"
	],
	[
		"ID" => "UDP44RHT1EP",
		"Company" => "Mollis Nec Cursus LLP",
		"Investment" => "988034",
		"Date" => "2018-09-09",
		"active" => "True"
	],
	[
		"ID" => "BDB43DDW3RX",
		"Company" => "Diam At Associates",
		"Investment" => "5884557",
		"Date" => "2019-06-26",
		"active" => "True"
	],
	[
		"ID" => "HUR75PZN3YB",
		"Company" => "Lacus Cras Industries",
		"Investment" => "4838613",
		"Date" => "2017-12-20",
		"active" => "True"
	],
	[
		"ID" => "HRA25DQF5QT",
		"Company" => "Mollis Lectus Company",
		"Investment" => "4639909",
		"Date" => "2018-08-15",
		"active" => "True"
	],
	[
		"ID" => "ZXT62QWY5NC",
		"Company" => "Quam Dignissim Incorporated",
		"Investment" => "7037731",
		"Date" => "2018-06-18",
		"active" => "True"
	],
	[
		"ID" => "XGO44WXW3EC",
		"Company" => "Interdum Libero Dui LLC",
		"Investment" => "2886694",
		"Date" => "2019-03-10",
		"active" => "False"
	],
	[
		"ID" => "ITE69NTR1AX",
		"Company" => "Ipsum Ac Foundation",
		"Investment" => "9156702",
		"Date" => "2018-09-17",
		"active" => "True"
	],
	[
		"ID" => "GCQ53TEH8BN",
		"Company" => "Vitae Aliquam PC",
		"Investment" => "6904158",
		"Date" => "2019-07-04",
		"active" => "False"
	]
];


class Cartera {
	protected $cliente = [];

	public function loadData($clientes) {
		
		for ($i=0; $i < count($clientes); $i++) { 
			$this->cliente = new Empresa($clientes[$i]["ID"], $clientes[$i]["Company"], $clientes[$i]["Investment"], $clientes[$i]["Date"], $clientes[$i]["active"]);
			
		}

	}

	public function drawList($clientes) {
		
		for ($i=0; $i < count($clientes); $i++) { 
			
			echo "<tr>";
			echo "<td>" . $clientes[$i]["ID"] . "</td>";
			echo "<td " . isVip($clientes[$i]["Investment"]) . ">" . $clientes[$i]["Company"] . "</td>";
			echo "<td>" . formatearMoneda($clientes[$i]["Investment"]) . "</td>";
			echo "<td>" . formatearFecha($clientes[$i]["Date"]) . "</td>";
			if ($clientes[$i]["active"] == "True") {
				echo "<td><img src='img/img05.gif'> </td>";
			} else {
				echo "<td><img src='img/img06.gif'> </td>";
			}
			echo "</tr>";
			
		}
	}

}

function formatearFecha($date) {
	$newDate = date("F d, Y", strtotime($date));

	return $newDate;
}

function formatearMoneda($numero) {
	$nombre_format = number_format($numero, 2, '\'', '.');
	return $nombre_format . " €";
}

function isVip($dinero) {
	if ($dinero > 1000000) {
		return "class='vip'";
	}
}


class Empresa {
	protected $id;
	protected $company;
	protected $investmen;
	protected $date;
	protected $active;

	function __construct($id, $company, $investmen, $date, $active) {
		$this->id = $id;
		$this->company = $company;
		$this->investmen = $investmen;
		$this->date = $date;
		$this->active = $active;

	}

}

$cartera = new Cartera();


?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table.redTable {
            border: 2px solid #A40808;
            background-color: #EEE7DB;
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        table.redTable td,
        table.redTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }

        table.redTable tbody td {
            font-size: 13px;
        }

        table.redTable tr:nth-child(even) {
            background: #F5C8BF;
        }

        table.redTable thead {
            background: #A40808;
        }

        table.redTable thead th {
            font-size: 19px;
            font-weight: bold;
            color: #FFFFFF;
            text-align: center;
            border-left: 2px solid #A40808;
        }

        table.redTable thead th:first-child {
            border-left: none;
        }

        table.redTable tfoot {
            font-size: 13px;
            font-weight: bold;
            color: #FFFFFF;
            background: #A40808;
        }

        table.redTable tfoot td {
            font-size: 13px;
        }

        table.redTable tfoot .links {
            text-align: right;
        }

        table.redTable tfoot .links a {
            display: inline-block;
            background: #FFFFFF;
            color: #A40808;
            padding: 2px 8px;
            border-radius: 5px;
        }

        .vip {
            font-weight: bolder;
            color: blue;
        }
    </style>
</head>

<body>
    <table class="redTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5">

                </td>
            </tr>
        </tfoot>
        <tbody>
		<?php $datos = $cartera->drawlist($data); ?>
        </tbody>
    </table>

</body>
</html>