<?php
         function get_period(){
		$hour = date("H");
		$minute = date("i");

		if($hour == "08"){
			return "1";
		}

		if($hour == "09"){
			if($minute <= "37"){
				return "1";
			}
			if($minute >= "42"){
				return "2";
			}
		}

		if($hour == "10"){
			if($minute <= "35"){
				return "2";
			}
			if($minute >= "40"){
				return "3";
			}
		}

		if($hour == "11"){
			if($minute <= "30"){
				return "3";
			}
			if($minute >= "35"){
				return "4";
			}
		}

		if($hour == "12"){
			if($minute <= "25"){
				return "4";
			}
			if($minute >= "30"){
				return "5";
			}
		}

		if($hour == "13"){
			if($minute <= "20"){
				return "5";
			}

			if($minute >= "25"){
				return "6";
			}
		}

		if($hour == "14"){
			return "6";
		}

		if($hour == "15"){
			if($minute <= "15"){
				return "8";
			}
		}

		if($hour == "16"){
			return "8";
		}
	}
?>
