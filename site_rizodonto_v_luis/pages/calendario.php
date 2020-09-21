<?php
	function diasMeses(){
		$retorno = array();

		for($i = 1; $i <= 12; $i++){
			$retorno[$i] = cal_days_in_month(CAL_GREGORIAN, $i, date('Y'));
		}

		return $retorno;
	}

	function montaCalendario(){
		$daysWeek = array(
			'Sun',
			'Mon',
			'Tue',
			'Wed',
			'Thu',
			'Fri',
			'Sat'
		);

		$diaSemana = array(
			'Dom',
			'Seg',
			'Ter',
			'Qua',
			'Qui',
			'Sex',
			'Sab'
		);

		$arrayMes = array(
			1 => 'Janeiro',
			2 => 'Fevereiro',
			3 => 'Março',
			4 => 'Abril',
			5 => 'Maio',
			6 => 'Junho',
			7 => 'Julho',
			8 => 'Agosto', 
			9 => 'Setembro',
			10 => 'Outubro',
			11 => 'Novembro',
			12 => 'Dezembro'
		);

		$diasMeses = diasMeses();

		$arrayRetorno = array();

		for($i = 1; $i <= 12; $i++){
			$arrayRetorno[$i] = array();
			for($n = 1; $n <= $diasMeses[$i]; $n++){
				$dayMonth = GregorianToJD($i, $n, date('Y'));
				$weekMonth = substr(JDDayOfWeek($dayMonth, 1), 0, 3);
				if($weekMonth == 'Mun') $weekMonth = 'Mon';
				$arrayRetorno[$i][$n] = $weekMonth;
			}
		}

		

		echo '<a href="#" id="voltar"><i class="fa fa-angle-left back"></i></a><a href="#" id="proximo"><i class="fa fa-angle-right next"></i></a>';
		echo '<table class="table">';
		foreach ($arrayMes as $num => $mes) {
			echo '<tbody id="mes_'.$num.'" class="mes">';
			echo '<tr class="mes_title"><td colspan="7">' . $mes . '<br />' . date('Y') . '</td></tr>';
			echo '<tr class="dias_title">';
			foreach ($diaSemana as $i => $day) {
				echo '<td>' . $day .  '</td>';
			}
			echo '</tr><tr>';
			$y = 0;
			foreach ($arrayRetorno[$num] as $numero => $dia) {
				$y++;
				if($numero == 1){
					$qtd = array_search($dia, $daysWeek);
					for($i = 1; $i <= $qtd; $i++){
						echo '<td></td>';
						$y+=1;
					}
				}

				if(Date('d') == $numero){
					echo '<td><a href="#" class="day hoje" data-dia="'.$numero."/" .$mes. "/" . date("Y") .'">' . $numero . '</a></td>';
				}else{
					echo '<td><a href="#" class="day" data-dia="'.$numero."/" .$mes. "/" . date("Y") .'">' . $numero . '</a></td>';
				}

				
				if($y == 7){
					$y=0;
					echo '</tr><tr>';
				}
			}

			echo '</tr></tbody>';
		}
		echo '</table>';
	}
?>